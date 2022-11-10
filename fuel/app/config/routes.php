<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Default route
	 * -------------------------------------------------------------------------
	 *
	 */


	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */

	'_404_' => 'welcome/404',

	/**
	 * -------------------------------------------------------------------------
	 *  Example for Presenter
	 * -------------------------------------------------------------------------
	 *
	 *  A route for showing page using Presenter
	 *
	 */

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

    '' => ['Frontend/index', 'name' => 'frontend.index'],
    'news(/:page)?' => ['Frontend/news', 'name' => 'frontend.news'],

    'admin' => ['Backend/index', 'name' => 'backend.index'],

    'admin/news/store' => ['NewsBackend/store', 'name' => 'backend.news.store'],
    'admin/news/create' => ['NewsBackend/create', 'name' => 'backend.news.create'],
    'admin/news/edit/:id' => ['NewsBackend/edit', 'name' => 'backend.news.edit'],
    'admin/news/update/:id' => ['NewsBackend/update', 'name' => 'backend.news.update'],
    'admin/news/delete/:id' => ['NewsBackend/destroy', 'name' => 'backend.news.destroy'],
    'admin/news(/:page)?' => ['NewsBackend/index', 'name' => 'backend.news'],

);
