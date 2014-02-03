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
            'Amelia',
            'Cerulean',
            'Cosmo',
            'Cyborg',
            'Flatly',
        );
        
        if ($this->app->request->isPost()) {
            $data = $this->app->request->getPost('data');
            setcookie("switcher", $data, 9999999999); 
        }
        
		echo $this->render('index', array(
                'themes'=>$themes, 
            ));

	}
}