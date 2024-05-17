<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['atithya'] = 'atithya/home';
$route['spa'] = 'spa/home';
$route['blogs'] = 'atithya/blogs';
$route['atithya/proformainvoice'] = 'atithya/home/proformainvoice';
$route['blogs/making-your-journey-through-airport-seamless-with-atithya'] = 'atithya/blogs/blog_1';
$route['blogs/arrive-in-style-at-the-delhi-airport-with-atithya-services-by-encalm-hospitality'] = 'atithya/blogs/blog_2';
$route['blogs/5-ways-the-encalm-lounge-adds-magic-to-your-journey'] = 'atithya/blogs/blog_3';
$route['blogs/5-ways-the-encalm-spa-improves-your-life'] = 'atithya/blogs/blog_4';
$route['blogs/4-ways-to-travel-better-this-holiday-season'] = 'atithya/blogs/blog_5';
$route['blogs/5-ways-in-which-the-brand-new-encalm-lounge'] = 'atithya/blogs/blog_6';
$route['blogs/6-ways-atithya-is-redefining-the-airport'] = 'atithya/blogs/blog_7';
$route['blogs/how-to-de-stress-before-your-next-flight'] = 'atithya/blogs/blog_8';
$route['blogs/5-Tips-for-Sustainable-Travel'] = 'atithya/blogs/blog_9';
$route['blogs/How-Encalm-Eases-Airport-Hassles-For-Moms-On-The-Go'] = 'atithya/blogs/blog_10';
$route['pressroom'] = 'atithya/pressroom';
$route['services/businesscentre/booking'] = 'services/businesscentre_booking';
// $route['services/encalm-transit'] = 'services/encalm_transit';
$route['services/transit-lounge'] = 'services/transit_lounge';

$route['blogs/Where-Goan-hospitality-meets-luxury-travel'] = 'atithya/blogs/blog_11';
$route['blogs/Your-ticket-to-a-magical-Goa-experience'] = 'atithya/blogs/blog_12';
$route['blogs/how-to-turn-your-transit-time-into-a-memorable-travel-experience'] = 'atithya/blogs/blog_13';
$route['blogs/traveling-alone-with-your-child-we-can-help'] = 'atithya/blogs/blog_14';
