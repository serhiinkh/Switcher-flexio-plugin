<?php

/**
 *
 */
class SwitcherPlugin extends Plugin
{
	/**
	 *
	 */
	protected $name='Switcher';

	/**
	 *
	 */
	protected $version='1.0';

	/**
	 *
	 */
	public function permissions()
	{
		//return array('skeleton-editor', 'skeleton-administrator', 'skeleton-developer');
	}

	/**
	 *
	 */
	public function navItems()
	{
		return array(
			array(
				'name'=>'Switcher',
				'url'=>array(
                    'plugin'=>'switcher',
                    'controller'=>'switcher',
                    'action'=>'index',
				),
			),
		);
	}

	/**
	 *
	 */
	public function onAppStart()
	{
        http://bootswatch.com/amelia/bootstrap.css'
		$this->app->assets->add('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrasssssssssssssp.min.css', AssetManager::TYPE_CSS, AssetManager::POS_BODY_TOP);
        var_dump($_COOKIE);
	}

	/**
	 *
	 */
	public function onAppEnd()
	{

	}
}