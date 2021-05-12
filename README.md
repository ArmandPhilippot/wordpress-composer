# WordPress Composer

![License](https://img.shields.io/github/license/ArmandPhilippot/wordpress-composer?color=blue&colorA=4c4f56&label=License&style=flat-square) ![Version](https://img.shields.io/github/package-json/v/ArmandPhilippot/wordpress-composer?color=blue&colorA=4c4f56&label=Version&style=flat-square)

Install WordPress with custom paths using Composer.
## Description

This repository is a base to install WordPress with Composer. You can customize the installation the way you want but make sure to update all the paths/names.

## Requirements

* [Composer](https://github.com/composer/composer)

## Usage

1. Download the `your-wordpress-website` folder (you can clone and remove everything except this folder).

2. (*Optional*) rename `htdocs` to match the public folder of your host. For example, with Gandi, it's `htdocs`. Other hosts can use `www`. **If you rename `htdocs`, you will need to update the `composer.json` file to suit your needs.**

3. (*Optional*) rename `wp` and `wp-content`. Again, you will need to update some paths in this case.

4. Then, go inside the `htdocs` directory to copy and rename `wp-config-sample.php` to `wp-config.php`.

5. Inside the file, replace:

-   the path to Composer autoload if different
-   the database info (`"database_name_here"`, `"username_here"`, `"password_here"`, `"localhost"`)
-   all the "*Authentication Unique Keys and Salts*"
-   `"wp_"` table prefix (if needed)
-   `"WP_SITEURL"` value with your URL to core directory (`/wp/` by default)
-   `"WP_HOME"` value with your URL
-   uncomment `"FORCE_SSL_ADMIN"` (if needed)

6. Open a terminal, then:

```bash
composer install
```

## License

This project is open source and available under the [GPL-2.0-or-later license](./LICENSE).
