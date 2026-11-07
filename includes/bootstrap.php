<?php
declare(strict_types=1);

session_start();

$configPath = __DIR__ . '/../config.local.php';
$config = file_exists($configPath)
    ? require $configPath
    : require __DIR__ . '/../config.php';

function e(?string $value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function db(): ?PDO {
    static $pdo = null;
    static $attempted = false;
    global $config;

    if ($attempted) return $pdo;
    $attempted = true;

    try {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=utf8mb4',
            $config['db_host'],
            $config['db_name']
        );
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    } catch (Throwable $exception) {
        error_log('Portfolio database connection failed: ' . $exception->getMessage());
        $pdo = null;
    }
    return $pdo;
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
