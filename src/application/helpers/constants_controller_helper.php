<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controllers
 *
 * @author André Brunnsberg
 *
*/

define('CONTROLLER_DEFAULT',						'/');

//Dashboard
define('CONTROLLER_DASHBOARD',						'dashboard');

//Login
define('CONTROLLER_LOGIN',							'login');
define('CONTROLLER_LOGIN_AUTHENTICATE',				'login/authenticate');
define('CONTROLLER_LOGIN_LOGOUT',					'login/logout');

//Persons
define('CONTROLLER_PERSONS',						'persons');
define('CONTROLLER_PERSONS_LISTALL',				'persons/listall');
define('CONTROLLER_PERSONS_EDITSINGLE',				'persons/editsingle');
define('CONTROLLER_PERSONS_DELETESINGLE',			'persons/deletesingle');
define('CONTROLLER_PERSONS_SAVESINGLE',				'persons/savesingle');
define('CONTROLLER_PERSONS_EDIT_MY_INFORMATION',	'persons/editmyinformation');
define('CONTROLLER_PERSONS_SAVE_MY_INFORMATION',	'persons/savemyinformation');

//My page
define('CONTROLLER_MY_PAGE',						'mypage');
define('CONTROLLER_MY_PAGE_LIST_UPCOMING_EVENTS',	'mypage/listupcomingevents');

//User manager
define('CONTROLLER_USERMANAGER', 					'usermanager');

//Transactions
define('CONTROLLER_TRANSACTIONS', 'transactions');
define('CONTROLLER_TRANSACTIONS_LISTALL', 'transactions/listall');

define('CONTROLLER_TRANSACTIONS_ADMIN', 'admin/transactions');
define('CONTROLLER_TRANSACTIONS_ADMIN_LISTALL', CONTROLLER_TRANSACTIONS_ADMIN . '/listall');
define('CONTROLLER_TRANSACTIONS_ADMIN_EDITSINGLE', CONTROLLER_TRANSACTIONS_ADMIN . '/editsingle');
define('CONTROLLER_TRANSACTIONS_ADMIN_SAVESINGLE', CONTROLLER_TRANSACTIONS_ADMIN . '/savesingle');

//Events
define('CONTROLLER_EVENTS',										'events');
define('CONTROLLER_EVENTS_LISTALL',								'events/listall');
define('CONTROLLER_EVENTS_EDITSINGLE',							'events/editsingle');
define('CONTROLLER_EVENTS_DELETESINGLE',						'events/deletesingle');
define('CONTROLLER_EVENTS_SAVESINGLE',							'events/savesingle');
define('CONTROLLER_EVENTS_LIST_ENROLLED',						'events/listenrolled');
define('CONTROLLER_EVENTS_EDIT_REGISTER_DIRECTLY',  			'events/editregisterdirectly');
define('CONTROLLER_EVENTS_SAVE_REGISTER_DIRECTLY',  			'events/saveregisterdirectly');
define('CONTROLLER_EVENTS_CONFIRM_SAVE_REGISTER_DIRECTLY',		'events/confirmsaveregisterdirectly');
define('CONTROLLER_EVENTS_CANCEL_REGISTER_DIRECTLY',  			'events/cancelregisterdirectly');
define('CONTROLLER_EVENTS_LIST_SINGLE_EVENT_REGISTRATIONS',		'events/listsingleeventregistrations');
define('CONTROLLER_SAVE_CANCEL_REGISTER_DIRECTLY',  			'events/savecancelregisterdirectly');
define('CONTROLLER_EVENTS_CONFIRM_CANCEL_REGISTER_DIRECTLY',	'events/confirmcancelregisterdirectly');
define('CONTROLLER_EVENTS_EDIT_REGISTER',  						'events/editregister');