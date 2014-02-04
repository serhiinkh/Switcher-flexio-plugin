<?php

class SwitcherPlugin extends Plugin
{

	protected $name='ThemeSwitcher';
	protected $version='1.0';

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

	public function onAppStart()
	{
        if(isset($_COOKIE['switcher'])) {
            $this->app->assets->add('http://bootswatch.com/'. strtolower($_COOKIE['switcher']) . '/bootstrap.css', AssetManager::TYPE_CSS, AssetManager::POS_BODY_TOP);
        }
	}

}