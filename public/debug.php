<?php
// Force error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Deep Debug Start</h1>";

// 1. Load Autoload
require __DIR__ . '/../vendor/autoload.php';

// 2. Boot App
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
echo "✅ App & Kernel loaded.<br>";

// 3. EXPLICIT DB TEST
try {
    echo "Testing Database Connection... ";
    // Manually configure connection if necessary or just use default env
    $pdo = \DB::connection()->getPdo();
    echo "✅ <b>Database Connected!</b> <br>";
} catch (\Exception $e) {
    echo "❌ <b>Database Error:</b> " . $e->getMessage() . "<br>";
}

// 4. Handle Request with Exception Inspection
try {
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    echo "<h3>Response Status: " . $response->getStatusCode() . "</h3>";

    // Try to find the exception
    if ($response->exception) {
        echo "<h2>⚠️ Caught Exception:</h2>";
        echo "<b>Message:</b> " . $response->exception->getMessage() . "<br>";
        echo "<b>File:</b> " . $response->exception->getFile() . ":" . $response->exception->getLine() . "<br>";
        echo "<pre>" . $response->exception->getTraceAsString() . "</pre>";
    } else {
        echo "No exception attached to response object.<br>";
        if ($response->getStatusCode() >= 500) {
            echo "Response Content Preview: <br>";
            echo substr($response->getContent(), 0, 1000);
        }
    }

} catch (Throwable $e) {
    echo "❌ Fatal Execution Error: " . $e->getMessage();
}

echo "<h1>Debug End</h1>";
