<?php

/**
 *
 */
class SwitcherController extends PluginController
{

	public function beforeExec($actionName, array $params=array())
	{
		parent::beforeExec($actionName, $params);

		if (! $this->app->auth->isLoggedIn()) {
			$this->app->redirect(array('auth', 'index'));
		}

		$this->setLayoutValue('isNavEnabled', true);

		return true;
	}

	/**
	 *
	 */
	public function indexAction()
	{
        $themes = array(
            'Default',
            'Amelia',
            'Cerulean',
            'Cosmo',
            'Cyborg',
            'Flatly',
            'Journal',
            'Readable',
            'Simplex',
            'Slate',
            'Spacelab',
            'United',
            'Yeti',
        );
        
        if ($this->app->request->isPost()) {
            $data = $this->app->request->getPost('data');
            if(strtolower($data) !== 'default') {
                setcookie("switcher", $data, 9999999999); 
            } else {
                setcookie("switcher", "", time()-3600);
            }
            $this->app->flash->set('success', 'Theme changed.');
            $this->redirect(array('plugin', 'switcher'));
        }
        
		echo $this->render('index', array(
                'themes'=>$themes, 
            ));

	}
}