# MyDNSHost bulk importer

This repository contains code to export zones from https://www.mydnshost.co.uk/ into a directory of zone files.

## Usage:

- Clone the repo
- Grab dependencies via composer `composer update`
- Create config.local.php with your user and API key:
```php
	$config['user'] = 'admin@example.org.uk';
	$config['apikey'] = 'AAAAAAAA-BBBB-CCCC-DDDD-EEEEEEEEEEEE';
```
- Run the exporter with `php run.php`
