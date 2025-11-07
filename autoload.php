<?php
// autoload.php
// Memuat class dan interface otomatis dari folder src

spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/src/';

    $paths = [
        $baseDir . 'Interfaces/' . $class . '.php',
        $baseDir . 'Implementations/' . $class . '.php'
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
