<?php
// Force error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Deep Debug v2</h1>";

try {
    // 1. Load Autoload
    require __DIR__ . '/../vendor/autoload.php';

    // 2. Boot App
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    echo "✅ App & Kernel loaded.<br>";

    // 3. EXPLICIT DB TEST (Using Container, no Facades)
    try {
        echo "Testing Database Connection... ";
        $pdo = $app->make('db')->connection()->getPdo();
        echo "✅ <b>Database Connected!</b><br>";
    } catch (\Throwable $e) {
        echo "❌ <b>Database Error:</b> " . $e->getMessage() . "<br>";
    }

    // 4. Handle Request
    echo "Addressing Request...<br>";
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    echo "<h3>Response Status: " . $response->getStatusCode() . "</h3>";

    if ($response->exception) {
        echo "<div style='background:#f8d7da; padding:10px; border:1px solid #f5c6cb; color:#721c24;'>";
        echo "<h2>⚠️ Caught Exception:</h2>";
        echo "<b>Message:</b> " . $response->exception->getMessage() . "<br>";
        echo "<b>File:</b> " . $response->exception->getFile() . ":" . $response->exception->getLine() . "<br>";
        echo "<pre>" . $response->exception->getTraceAsString() . "</pre>";
        echo "</div>";
    } else {
        echo "No exception attached to response.<br>";
        if ($response->getStatusCode() >= 500) {
            echo "<b>Response Content Preview:</b><br>";
            echo "<textarea style='width:100%; height:300px;'>" . htmlspecialchars(substr($response->getContent(), 0, 5000)) . "</textarea>";
        }
    }

} catch (\Throwable $e) {
    echo "<h1>❌ Fatal Debug Error</h1>";
    echo $e->getMessage() . "<br>";
    echo "File: " . $e->getFile() . ":" . $e->getLine();
}
