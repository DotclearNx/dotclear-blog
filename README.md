# README

**This repository is less than an alpha release !
This is just a playground to see what dotclear could become.**

## WHAT IS DOTCLEAR

Dotclear is an open-source web publishing software.
Take control over your blog!

Dotclear project's purpose is to provide a user-friendly
tool allowing anyone to publish on the web, regardless of
their technical skills.

# Important

**dotclear-blog** repository and **DotclearNx** are playgrounds
to experiments differents things to see where dotclear can go in futur.

## DOCUMENTATION

These files are part of **dotclear-blog** repository and there're no help on it.

For more information on Dotclear, see README file at 
- official repository <https://git.dotclear.org/dotclear/> or 
- Github mirror <https://github.com/dotclear/dotclear>

## REQUIREMENTS

In order to run Dotclear you need:

-   A web server (Apache, Cherokee, Nginx, lighttpd, etc.)
-   PHP 8.1 with the following modules:
    -   mbstring
    -   iconv
    -   simplexml
    -   mysqli, postgresql or sqlite
-   A database server (MySQL or PostgreSQL) or SQLite.

## INSTALLATION

# Getting dotclear-blog files

Using **Git**, clone this repository in your web directory path :

```
mkdir myblog
git clone https://github.com/DotclearNx/dotclear-blog myblog
```

Or simply unzip package available at https://github.com/DotclearNx/dotclear-blog/releases

# Getting Composer components

Once dotclear-blog is copy to your web directory

If you have composer installed on your web server, 
just move to dotclear-blog directory and run composer install.

```
cd myblog
composer install
```

If you don't have composer you can try installing components using setup.
In web browser go URL `http://my-domain.com/myblog/setup.php`
This script downloads latest composer.phar and tries to run it.

# Finishing dotclear installation

Once previous steps have been done, 
go to your web URL `http://my-domain.com/myblog` 
and follow dotclear installation process.

## License

Copyright Olivier Meunier & Association Dotclear

GPL-2.0-only <https://www.gnu.org/licenses/gpl-2.0.html>

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; version 2 of the License.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
