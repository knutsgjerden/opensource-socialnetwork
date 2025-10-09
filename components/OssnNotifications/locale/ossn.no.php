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
    'ossn:notification:are:friends' => 'You are now friends!',
    'ossn:notifications:comments:post:group:wall' => "%s commented on the group post.",
    'ossn:notifications:like:entity:file:profile:photo' => "%s liked your profile photo.",
	'ossn:notifications:comments:entity:file:profile:photo' => "%s commented on your profile photo.",
    'ossn:notifications:like:entity:file:profile:cover' => "%s liked your profile cover.",
    'ossn:notifications:comments:entity:file:profile:cover' => "%s commented on your profile cover.",

    'ossn:notifications:like:post:group:wall' => '%s liked your post.',
	
    'ossn:notification:delete:friend' => 'Friend request deleted!',
    'notifications' => 'Notifications',
    'see:all' => 'See All',
    'friend:requests' => 'Friend Requests',
    'ossn:notifications:friendrequest:confirmbutton' => 'Confirm',
    'ossn:notifications:friendrequest:denybutton' => 'Deny',
	
    'ossn:notification:mark:read:success' => 'Successfully marked all as read',
    'ossn:notification:mark:read:error' => 'Can not mark all as read',
    
    'ossn:notifications:mark:as:read' => 'Mark all as read',
	'ossn:notifications:admin:settings:close_anywhere:title' => 'Close notification windows by clicking anywhere',
	'ossn:notifications:admin:settings:close_anywhere:note' => '<i class="fa fa-info-circle"></i> closes any notification window by clicking anywhere on the page<br><br>',
	
	'ossn:notifications:comments:entity:file:profile:photo:someone' => "%s commented on the profile photo.",	
    'ossn:notifications:comments:entity:file:profile:cover:someone' => "%s commented on profile cover.",
	'ossn:notifications:comments:entity:file:ossn:aphoto:someone' => '%s commented on photo.',	
	
	'ossn:notifications:admin:settings:checkintervals:title' => 'Notification auto check time (Default 60 seconds)', 
);

ossn_register_languages('no', $no); 
