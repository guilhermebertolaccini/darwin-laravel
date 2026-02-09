<?php
// Force error reporting to display on screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Debug Start</h1>";

// 1. Check Vendor Autoload
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    die("CRITICAL: vendor/autoload.php not found. Did composer install run?");
}
require $autoload;
echo "✅ Vendor autoloaded.<br>";

// 2. Bootstrap App
try {
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    echo "✅ App bootstrapped instance created.<br>";
} catch (Throwable $e) {
    die("❌ Error bootstrapping app: " . $e->getMessage() . "<pre>" . $e->getTraceAsString() . "</pre>");
}

// 3. Make Kernel
try {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    echo "✅ Kernel initialized.<br>";
} catch (Throwable $e) {
    die("❌ Error resolving Kernel: " . $e->getMessage() . "<pre>" . $e->getTraceAsString() . "</pre>");
}

// 4. Handle Request
try {
    echo "Attempting to handle request...<br>";
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    echo "✅ Request handled! Status Code: " . $response->getStatusCode() . "<br>";
} catch (Throwable $e) {
    die("❌ Error handling request: " . $e->getMessage() . "<pre>" . $e->getTraceAsString() . "</pre>");
}

echo "<h1>Debug End</h1>";
