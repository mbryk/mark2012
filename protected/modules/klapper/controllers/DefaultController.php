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
                $spammer = new Spammer();
                $spammer->attributes = $_POST;
                $spammer->save();
                $header="From: ".$_POST['from'];
                $amount = (int) $_POST['amount'];
                for($i=0;$i<$amount;$i++):
                    //mail($_POST['to'], $_POST['subject'], $_POST['body'], $header);
                endfor;
                if($amount!==1)
                    Yii::app()->user->setFlash('success', $amount." emails sent!!!");
                else
                    Yii::app()->user->setFlash('success', "One email sent!");
            }
            $this->render('spam');
        }
}