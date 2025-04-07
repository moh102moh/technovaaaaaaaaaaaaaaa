<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// تحديد بداية Laravel
define('LARAVEL_START', microtime(true));

// تحديد ما إذا كانت التطبيق في وضع الصيانة
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// التحقق من وجود مجلدات التخزين وتهيئتها إذا لزم الأمر
if (!is_dir(__DIR__.'/../storage/logs')) {
    mkdir(__DIR__.'/../storage/logs', 0775, true);
}
if (!is_dir(__DIR__.'/../storage/framework/cache')) {
    mkdir(__DIR__.'/../storage/framework/cache', 0775, true);
}

// تسجيل الـ Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// تهيئة تطبيق Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// تأكد من أن صلاحيات المجلدات التي يحتاج إليها Laravel مثل `storage` و `cache` صحيحة داخل الحاوية
if (!is_writable(__DIR__.'/../storage') || !is_writable(__DIR__.'/../bootstrap/cache')) {
    echo "خطأ: تأكد من أن مجلدات التخزين وذاكرة التخزين المؤقت قابلة للكتابة!";
    exit;
}

// بدلاً من استخدام `run()`، نستخدم `handle()` لمعالجة الطلب.
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// إرسال الاستجابة
$response->send();

// إنهاء التطبيق
$kernel->terminate($request, $response);
