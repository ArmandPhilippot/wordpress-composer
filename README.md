# WordPress-Composer

**Contributors:** Armand Philippot  
**Tags:** WordPress, composer

WordPress installation with Composer.

## Description

The repository allows you to install WordPress with Composer.

## Usage

Make sure [Composer](https://github.com/composer/composer) is installed on your system.

Clone or download the repository.

If needed, rename htdocs to match the public folder of your host (I'm using Gandi, htdocs is the public directory). Go inside the htdocs directory.

Copy and rename wp-config-sample.php to wp-config.php.

Replace:

-   "database_name_here"
-   "username_here"
-   "password_here"
-   "localhost" (if needed)
-   all the "Authentication Unique Keys and Salts"
-   "wp\_" table prefix (if needed)
-   "WP_SITEURL" value with your URL to core directory (/wp/ by default)
-   "WP_HOME" value with your URL
-   uncomment "FORCE_SSL_ADMIN" (if needed)
-   change "/wp/" in "define ( 'ABSPATH' [...]" if you have changed the core directory URL.

Open a terminal, then:

```
composer install
```

## Optional

You can modify composer.json to add WordPress plugins (by default, only Akismet is available).  
You can also add new requirements like "composer/installers" and "oomphinc/composer-installers-extender" to configure an installation path for mu-plugins.  
In short, this is a base. You can modify composer.json to suit your needs.

## Changelog

### 1.0.0

-   Stable version
