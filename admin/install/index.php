<?php
/**
 * Run install process.
 * 
 * @file \admin\install\index.php
 *
 * This file is the installation access point.
 * 
 * If you move this file,
 * require path below must composer vendor/autoload.php file path.
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
$f = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'vendor', 'autoload.php']);
if (!file_exists($f)) {
    exit('dotclear-blog requires composer components.')
}
require $f;

Dotclear\App::run('install');
