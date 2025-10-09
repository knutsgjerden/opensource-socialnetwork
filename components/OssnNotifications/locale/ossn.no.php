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
	'ossnnotifications' => 'Varslinger',
    'ossn:notifications:comments:post' => "%s kommenterte på innlegget.",
    'ossn:notifications:like:post' => "%s likte innlegget ditt.",
    'ossn:notifications:like:annotation' => "%s likte kommentaren din.",
    'ossn:notifications:like:entity:file:ossn:aphoto' => "%s likte bildet ditt.",
    'ossn:notifications:comments:entity:file:ossn:aphoto' => '%s kommenterte på bildet ditt.',
    'ossn:notifications:wall:friends:tag' => '%s tagget deg i et innlegg.',
    'ossn:notification:are:friends' => 'Dere er nå venner!',
    'ossn:notifications:comments:post:group:wall' => "%s kommenterte på gruppeinnlegget.",
    'ossn:notifications:like:entity:file:profile:photo' => "%s likte profilbildet ditt.",
	'ossn:notifications:comments:entity:file:profile:photo' => "%s kommenterte på profilbildet ditt.",
    'ossn:notifications:like:entity:file:profile:cover' => "%s liked forsidebildet ditt.",
    'ossn:notifications:comments:entity:file:profile:cover' => "%s kommenterte på forsidebildet ditt.",

    'ossn:notifications:like:post:group:wall' => '%s likte innlegget ditt.',
	
    'ossn:notification:delete:friend' => 'Venneforespørsel fjernet!',
    'notifications' => 'Varslinger',
    'see:all' => 'Se alle',
    'friend:requests' => 'Venneforespørsler',
    'ossn:notifications:friendrequest:confirmbutton' => 'Bekreft',
    'ossn:notifications:friendrequest:denybutton' => 'Avslå',
	
    'ossn:notification:mark:read:success' => 'Markerte alt som lest',
    'ossn:notification:mark:read:error' => 'Kunne ikke markere alt som lest',
    
    'ossn:notifications:mark:as:read' => 'Marker alt som lest',
	'ossn:notifications:admin:settings:close_anywhere:title' => 'Lukk varslingsvindu ved å klikke hvor som helst på siden',
	'ossn:notifications:admin:settings:close_anywhere:note' => '<i class="fa fa-info-circle"></i> lukker varslingsvindu ved å klikke hvor som helst på siden<br><br>',
	
	'ossn:notifications:comments:entity:file:profile:photo:someone' => "%s kommenterte på profilbildet.",	
    'ossn:notifications:comments:entity:file:profile:cover:someone' => "%s kommenterte på forsidebildet.",
	'ossn:notifications:comments:entity:file:ossn:aphoto:someone' => '%s kommenterte på et bilde.',	
	
	'ossn:notifications:admin:settings:checkintervals:title' => 'Tid mellom sjekk av nye varslinger (default 60 sekunder)', 
);

ossn_register_languages('no', $no); 
