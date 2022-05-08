<?php
/**
 * Run admin process.
 * 
 * @file \admin\index.php
 *
 * This file is the administration (backend) 
 * access point of the blogs plateform.
 *
 * If you move admin access point (this file),
 * require path below must composer vendor/autoload.php file path.
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
$f = implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'vendor', 'autoload.php']);
if (!file_exists($f)) {
    exit('dotclear-blog requires composer components.')
}
require $f;

Dotclear\App::run('admin');
