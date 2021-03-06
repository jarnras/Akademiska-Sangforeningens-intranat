<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Views
 *
 * @author André Brunnsberg
 *
*/

define('VIEW_GENERIC_HEADER',										'/generic/header');
define('VIEW_GENERIC_HEADER_NOTEXT',								'/generic/header_notext');
define('VIEW_GENERIC_HEADER_NAVITABS',								'/generic/header_navitabs');

define('VIEW_GENERIC_FOOTER',										'/generic/footer');

define('VIEW_GENERIC_MAIL_HEADER',									'/generic/mail/header');
define('VIEW_GENERIC_MAIL_FOOTER',									'/generic/mail/footer');

define('VIEW_GENERIC_DIALOG_CLOSE_AND_RELOAD_PARENT',				'/generic/dialog/close_and_reload_parent');

define('VIEW_GENERIC_BODY_MESSAGE',									'/generic/body_message');

define('VIEW_CONTENT_LOGIN_FORM',									'/content/login/form');

define('VIEW_CONTENT_MYPAGE_DASHBOARD',								'/content/mypage/dashboard');

define('VIEW_CONTENT_PERSONS_LISTALL',								'/content/persons/listpersons');
define('VIEW_CONTENT_PERSONS_EDITSINGLE',							'/content/persons/editperson');

define('VIEW_CONTENT_EVENTS_LISTALL',								'/content/events/listevents');
define('VIEW_CONTENT_EVENTS_EDITSINGLE',							'/content/events/editevent');
define('VIEW_CONTENT_EVENTS_LIST_PERSONAL_EVENTS',					'/content/events/listpersonalevents');
define('VIEW_CONTENT_EVENTS_EDIT_REGISTER',							'/content/events/editregister');
define('VIEW_CONTENT_EVENTS_CANCEL_REGISTER_DIRECTLY',				'/content/events/cancelregisterdirectly');
define('VIEW_CONTENT_EVENTS_CONFIRM_SAVE_REGISTER_MAIL',			'/content/events/confirmsaveregistermail');
define('VIEW_CONTENT_EVENTS_CONFIRM_CANCEL_REGISTER_MAIL',			'/content/events/confirmcancelregistermail');
define('VIEW_CONTENT_EVENTS_CONFIRM_SAVE_REGISTER_MAIL_PLAIN',		'/content/events/confirmsaveregistermailplain');
define('VIEW_CONTENT_EVENTS_CONFIRM_CANCEL_REGISTER_MAIL_PLAIN',	'/content/events/confirmcancelregistermailplain');
define('VIEW_CONTENT_EVENTS_LIST_SINGLE_EVENT_REGISTRATIONS',		'/content/events/listsingleeventregistrations');

define('VIEW_CONTENT_EVENTS_PART_INFO_EVENT',						'/content/events/parts/info_event.php');
define('VIEW_CONTENT_EVENTS_PART_FORM_PERSON',						'/content/events/parts/form_person.php');
define('VIEW_CONTENT_EVENTS_PART_FORM_PAYMENT',						'/content/events/parts/form_payment.php');
define('VIEW_CONTENT_EVENTS_PART_FORM_EVENTITEMS',					'/content/events/parts/form_eventitems.php');
define('VIEW_CONTENT_EVENTS_PART_FORM_AVEC_ALLOWED',				'/content/events/parts/form_avecallowed.php');

define('VIEW_CONTENT_USERMANAGER_LISTUSERS',    					'/content/usermanager/listusers');

define('VIEW_CONTENT_TRANSACTIONS_LIST_PERSONAL_TRANSACTIONS',		'/content/transactions/listpersonaltransactions');
define('VIEW_CONTENT_TRANSACTIONS_LISTALL',							'/content/transactions/listall');
define('VIEW_CONTENT_TRANSACTIONS_EDITSINGLE', 						'/content/transactions/editsingle');
