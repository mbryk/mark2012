<?php
Yii::app()->theme = 'biskit';
class DefaultController extends Controller
{
	public function actionIndex()
	{
            if($_POST['spam'])
            {
                $this->redirect(array('spam'));
            }
		$this->render('index');
	}
        
        public function actionSpam()
        {
            if($_POST['email'])
            {
                var_dump($_POST);
            }
            $this->render('spam');
        }
}