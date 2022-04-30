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
require implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'vendor', 'autoload.php']);

Dotclear\App::run('install');
