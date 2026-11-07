<?php
declare(strict_types=1);
require __DIR__ . '/includes/bootstrap.php';

function fail(): never {
    $_SESSION['contact_status'] = 'error';
    header('Location: index.php#contact');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

if (!hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'] ?? '')) fail();
if (!empty($_POST['website'])) {
    $_SESSION['contact_status'] = 'success'; // Quietly discard bot submissions.
    header('Location: index.php#contact');
    exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if (
    $name === '' || mb_strlen($name) > 100 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 190 ||
    $subject === '' || mb_strlen($subject) > 150 ||
    $message === '' || mb_strlen($message) > 5000
) fail();

$pdo = db();
if (!$pdo) fail();

try {
    $statement = $pdo->prepare(
        'INSERT INTO contact_messages (name, email, subject, message, created_at) VALUES (:name, :email, :subject, :message, NOW())'
    );
    $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message,
    ]);
    $_SESSION['contact_status'] = 'success';
} catch (Throwable $exception) {
    error_log('Contact form error: ' . $exception->getMessage());
    $_SESSION['contact_status'] = 'error';
}

header('Location: index.php#contact');
exit;
