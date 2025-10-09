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
	'com:ossn:invite' => 'Inviter',			
	'com:ossn:invite:friends' => 'Inviter venner',
	'com:ossn:invite:friends:note' => 'For å invitere venner til denne plattformen, skriv inn epostadressene deres og en kort beskjed. De blir sendt en epost med invitasjonen din.',
	'com:ossn:invite:emails:note' => 'Epostadresser (adskilt med komma)',
	'com:ossn:invite:emails:placeholder' => 'navn.navnesen@example.com, navneti.navn@example.com',
	'com:ossn:invite:message' => 'Melding',
		
    	'com:ossn:invite:mail:subject' => 'Invitasjon til å bli med i %s',	
    	'com:ossn:invite:mail:message' => 'Du har blitt invitert til %s av %s. De inkluderte følgende melding:

%s

For å bli med, klikk på følgende lenke:

%s

Lenke til profil: %s
',	
	'com:ossn:invite:mail:message:default' => 'Hei,

Jeg vil gjerne invitere deg til å bli med i nettverket mitt her på %s.

Lenke til profil: %s

Vennlig hilsen,
%s',
	'com:ossn:invite:sent' => 'Vennene dine ble invitert. Invitasjoner sendt: %s.',
	'com:ossn:invite:wrong:emails' => 'De følgende adressene er ikke gyldige: %s.',
	'com:ossn:invite:sent:failed' => 'Kan ikke invitere de følgende adressene: %s.',
	'com:ossn:invite:already:members' => 'De følgende adressene er allerede medlemmer: %s',
	'com:ossn:invite:empty:emails' => 'Vennligst legg til minst en epostadresse',
);

ossn_register_languages('no', $no); 
