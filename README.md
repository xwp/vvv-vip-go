# VVV + VIP Go

Local development repo for quickly adding a VIP Go site to VVV.

## Caveats

- Currently only allows `vip.go.local` as the site URL.

## Installation

Assuming you have [VVV 2.0][1] installed and are familiar with the setup using the [`vvv-custom.yml`][2], simply clone this repo and run `vagrant up --provision` (or `vagrant reload --provision` if already running) on VVV.

## Adding a New Site

Currently adding a new site is manual and requires you to either:

- Duplicate the `web/vip-go-skeleton` repo (removing anything you do not need).
- Add your current `wp-content` VIP Go directory.

No matter which method you choose, be sure to us a unique directory name and add this directory right inside `web`.

### Using New Site

Once you have added the new site, you can start using it right away, if you want to use the same database as the default setup.

Simply define `VVV_VIP_GO_DIR` in `wp-config-local.php` for the unique directory you added. For example, if your directory is `web/my-cool-site`, then you would add:

```php
define( 'VVV_VIP_GO_DIR', 'my-cool-site' );
```

If you wanted to use a custom database for this new site, you need to define `VVV_VIP_GO_DB` in `wp-config-local.php`, the reprovision the Vagrant.

```php
define( 'VVV_VIP_GO_DB', 'vvv_vip_go_custom_database_name' );
```

[1]: https://varyingvagrantvagrants.org/docs/en-US/
[2]: https://varyingvagrantvagrants.org/docs/en-US/vvv-config/
