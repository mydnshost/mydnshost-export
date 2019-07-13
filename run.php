#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/vendor/autoload.php');
	require_once(__DIR__ . '/config.php');

	$api = new MyDNSHostAPI($config['api']);

	$api->setAuthUserKey($config['user'], $config['apikey']);
	$api->domainAdmin($config['isAdmin']);

	$domains = $api->getDomains();

	@mkdir($config['zones']);
	if (!file_exists($config['zones'])) { die('Export directory does not exist.'); }

	foreach ($domains as $domain => $data) {
		if (is_array($data) && $config['forOwner'] != null) {
			if (!isset($data['users'][$config['forOwner']])) {
				continue;
			}
		}

		$outFile = $config['zones'] . '/' . idn_to_ascii($domain) . '.zone';

		$data = $api->exportZone($domain);

		echo $domain, "\n";
		file_put_contents($outFile, $data);
	}

	echo 'Done.', "\n";
