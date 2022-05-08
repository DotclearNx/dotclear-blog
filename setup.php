<?php
/**
 * @package Dotclear
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo 'Composer components already installed.';
    exit();
}

$delete = false;
$opts = ['http' => []];
if (getenv('http_proxy') !== false) {
    $opts['http']['proxy'] = 'tcp://' . getenv('http_proxy');
}
$context = stream_context_create($opts);

if (!file_exists(__DIR__ . '/composer.phar')) {
    $composer_installer = file_get_contents('https://getcomposer.org/composer.phar', false, $context);
    file_put_contents(__DIR__ . '/composer.phar', $composer_installer);

    $delete = true;
}

exec('php composer.phar update');

if ($delete) {
    @unlink(__DIR__ . '/composer.phar');
}

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo 'Something went wrong when installing composer components. You must install it manually.';
} else {
    echo 'Composer components installation completed.';
}
