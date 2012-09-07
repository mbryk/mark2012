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
            if($_POST['submit'])
            {
                $header="From: ".$_POST['from'];
                mail($_POST['to'], $_POST['subject'], $_POST['body'], $header);
            }
            $this->render('spam');
        }
}