<?php
/**
 * Open Source Social Network
 *
 * Translated by Knut Skogstrand Gjerden
 * 
 * @package   Open Source Social Network (OSSN)
 * @author    OSSN Core Team <info@openteknik.com>, Knut Skogstrand Gjerden
 * @copyright (C) OpenTeknik LLC, Knut Skogstrand Gjerden
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$no = array(
	'site:settings' => 'Innstillinger for nettsiden',
	'ossn:installed' => 'Installert',
	'ossn:installation' => 'Installasjon',
	'ossn:check' => 'Bekreft',
	'ossn:installed' => 'Installert',
	'ossn:installed:message' => 'Open Source Social Network har blitt installert.',
    'ossn:prerequisites' => 'Forutsetninger for installasjon',
    'ossn:settings' => 'Serverinnstillinger',
    'ossn:dbsettings' => 'Database',
	'ossn:dbuser' => 'Databasebruker',
	'ossn:dbpassword' => 'Password til databasen',
	'ossn:dbname' => 'Databasenavn',
	'ossn:dbhost' => 'Database serveradresse',
    'ossn:sitesettings' => 'Nettside',
    'ossn:websitename' => 'Navn på nettsiden',
    'ossn:mainsettings' => 'Stier',
	'ossn:weburl' => 'OssnSite url',
	'installation:notes' => 'Datakatalogen inneholder brukerfiler. Datakatalogen må ligge utenfor OSSNs installasjonssti.',
	'ossn:datadir' => 'Datakatalog',
	'owner_email' => 'Epost til eier av siden',
	'notification_email' => 'Varslingsepost (noreply@domain.com)',
	'create:admin:account' => 'Lag administratorkonto',
	'ossn:setting:account' => 'Kontoinnstillinger',
	
	'data:directory:invalid' => 'Ugyldig datakatalog eller en katalog som ikke kan skrives til.',	
	'data:directory:outside' => 'Datakatalogen må ligge utenfor installasjonsstien.',
	'all:files:required' => 'Alle filer er påkrevd! Vennligst sjekk filene dine.',
	
	'ossn:install:php' => 'PHP ',
	'ossn:install:old:php' => "Du har en gammel PHP-versjon " . PHP_VERSION . " Du trenger minimum PHP 8.0 eller 8.x",
	
	'ossn:install:mysqli' => 'MYSQLI ENABLED',
	'ossn:install:mysqli:required' => 'MYSQLI PHP EXTENSION REQUIRED',
	
	'ossn:install:apache' => 'APACHE ENABLED',
	'ossn:install:apache:required' => 'APACHE IS REQUIRED',
	
	'ossn:install:modrewrite' => 'MOD_REWRITE',
	'ossn:install:modrewrite:required' => 'MOD_REWRITE REQUIRED',
	
	'ossn:install:curl' => 'PHP CURL',
	'ossn:install:curl:required' => 'PHP CURL REQUIRED',
	
	'ossn:install:gd' => 'PHP GD LIBRARY',
	'ossn:install:gd:required' => 'PHP GD LIBRARY REQUIRED',
	
	'ossn:install:config' => 'CONFIGURATION DIRECTORY WRITEABLE',
	'ossn:install:config:error' => 'CONFIGURATION DIRECTORY IS NOT WRITEABLE',
	
	'ossn:install:next' => 'Neste',
    'ossn:install:install' => 'Installer',
    'ossn:install:create' => 'Lag',
    'ossn:install:finish' => 'Avslutt',
	
	'fields:require' => 'Alle felter er påkrevd!',
	
	'ossn:install:allowfopenurl' => 'PHP allow_url_fopen ENABLED',
	'ossn:install:allowfopenurl:error' => 'PHP allow_url_fopen is required',
	
	'ossn:install:ziparchive' => 'PHP ZipArchive ENABLED',
	'ossn:install:ziparchive:error' => 'PHP ZipArchive EXTENSION REQUIRED',
	'ossn:install:cachedir:note:failed' => 'Sørg for at filene og katalogene eies av korrekt apache-bruker.',
);

ossn_installation_register_languages($no);
