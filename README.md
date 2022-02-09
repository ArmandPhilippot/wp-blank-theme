# WP Blank Theme

A blank theme to use WordPress as headless CMS.

## Feature

If the `REDIRECTION_URL` is specified, the user will be redirect to the given URL when he tries to access another URL than `/wp-admin/`.

## Setup

1. Install this theme in the WordPress theme directory (`wp-content/themes/`).

2. Then, in your theme, create a `.env` file :

```bash
cp .env.example .env
```

3. Replace the `REDIRECTION_URL` value with your frontend URL.

4. Finally activate the theme in the WordPress administration.

## Additional notes

Some files are here only for development purposes.

-   The `./tools/` directory hosts some files to bump the version when a new release of the theme is created.

-   The `./.vscode/` directory has been added on purpose. It contains settings for the [PHP Sniffer](https://marketplace.visualstudio.com/items?itemName=wongjn.php-sniffer) extension which helps me respect the [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards).

## License

This project is open source and available under the [GPL2.0-or-later License](./LICENSE).
