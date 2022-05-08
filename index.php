<?php
/**
 * Run public process.
 * 
 * @file \index.php
 *
 * This file is the public (frontend) access point
 * of the default blog.
 * 
 * If you move your public access point,
 * you must edit Blog URL in your blog settings.
 * 
 * On multiblog, set variable $blog to the blog ID.
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
$f = implode(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);
if (!file_exists($f)) {
    exit('dotclear-blog requires composer components.')
}
require_once $f;

if (isset($_SERVER['DC_BLOG_ID'])) {
    $blog = $_SERVER['DC_BLOG_ID'];
} elseif (isset($_SERVER['REDIRECT_DC_BLOG_ID'])) {
    $blog = $_SERVER['REDIRECT_DC_BLOG_ID'];
} else {
    $blog = 'default';
}

Dotclear\App::run('public', $blog);
