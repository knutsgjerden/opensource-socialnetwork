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
    'groups' => 'Grupper',
    'add:group' => 'Legg til gruppe',
    'requests' => 'Forespørsler',

    'members' => 'Medlemmer',
    'member:add:error' => 'Noe gikk galt, vennligst forsøk igjen senere.',
    'member:added' => 'Medlemsskap godkjent!',

    'member:request:deleted' => 'Medlemsskap avslått.',
    'member:request:delete:fail' => 'Kan ikke avslå medlemsskapsforespørsel. Vennligst prøv igjen senere.',
    'membership:cancel:succes' => 'Medlemsskapsforespørsel avbrutt.',
    'membership:cancel:fail' => 'Kan ikke avbryte medøemsskapsforespørsel. Vennligst prøv igjen senere.',

    'group:added' => 'Opprettet gruppe!',
    'group:add:fail' => 'Kan ikke opprette gruppe! Vennligst prøv igjen senere.',

    'memebership:sent' => 'Forespørsel sendt!',
    'memebership:sent:fail' => 'Jan ikke sende forespørsel! Vennligst prøv igjen senere.',

    'group:updated' => 'Gruppen har blitt oppdatert!',
    'group:update:fail' => 'Kan ikke oppdatere gruppen! Vennligst prøv igjen senere.',

    'group:name' => 'Gruppenavn',
    'group:desc' => 'Gruppebeskrivelse',
    'privacy:group:public' => 'Alle kan se denne gruppen og innleggene i den. Bare medlemmer kan opprette innlegg i gruppen.',
    'privacy:group:close' => 'Alle kan se denne gruppen. Kun meldemmer kan opprette og se innlegg.',

    'group:memb:remove' => 'Fjern',
    'group:memb:make:owner' => 'Gjør til eier av gruppen',
    'group:memb:make:owner:confirm' => 'OBS! Denne handlingen vil gjøre >> %s << til den nye eieren av gruppen og du vil miste alle gruppeadministrasjonsprivilegier. Vil du fortsette?',
    'group:memb:make:owner:admin:confirm' => 'OBS! Denne handlingen vil gjøre >> %s << til den nye eieren av gruppen og den nåværende eieren vil miste alle gruppeadministrasjonsprivilegier. Vil du fortsette?',
    'leave:group' => 'Forlat gruppen',
    'join:group' => 'Bli med i gruppen',
    'total:members' => 'Alle medlemmer',
    'group:members' => "Medlemmer (%s)",
    'view:all' => 'Se alle',
    'member:requests' => 'FORESPØRSLER (%s)',
    'about:group' => 'Om gruppen',
    'cancel:membership' => 'Avslutt medlemsskap',

    'no:requests' => 'Ingen forespørsler',
    'approve' => 'Godkjenn',
    'decline' => 'Avslå',
    'search:groups' => 'Søk grupper',

    'close:group:notice' => 'Bli med i denne gruppen for å se innlegg, kommentarer og bilder.',
    'closed:group' => 'Lukket gruppe',
    'group:admin' => 'Admin',
	
	'title:access:private:group' => 'Gruppeinnlegg',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s har bedt om å bli med i %s',
	'ossn:group:by' => 'Av:',
	
	'group:deleted' => 'Gruppe og gruppeinnhold slettet',
	'group:delete:fail' => 'Gruppen kunne ikke slettes',

	'group:delete:cover' => 'Slett forsidebilde',
	'group:delete:cover:error' => 'En feil oppstod under sletting av forsidebilde',
	'group:delete:cover:success' => 'Forsidebildet ble slettet',

);

ossn_register_languages('no', $no); 
