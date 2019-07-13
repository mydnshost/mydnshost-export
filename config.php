<?php
	// Hostname of API Endpint
	$config['api'] = 'https://api.mydnshost.co.uk/';

	// Username to run as
	$config['user'] = 'admin@example.org';

	// API Key to use to connect
	$config['apikey'] = 'AAAAAAAA-BBBB-CCCC-DDDD-EEEEEEEEEEEE';

	// Directory where zone files will be exported to.
	$config['zones'] = __DIR__ . '/zones';

	// Should we use the admin end points for interacting with domains?
	// (This allows admins to export from other user accounts.)
	$config['isAdmin'] = false;

	// If we are an admin, what user should we create export domains for?
	// null is all domains, otherwise any domain that a user has access to.
	$config['forOwner'] = null;

	// Local configuration.
	if (file_exists(dirname(__FILE__) . '/config.local.php')) {
		include(dirname(__FILE__) . '/config.local.php');
	}
