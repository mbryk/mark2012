<?php
Yii::app()->theme = 'mine';
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
                $header="From: ".$_POST['from'];
                $amount = (int) $_POST['amount'];
                if($spammer->save()) {
                    for($i=0;$i<$amount;$i++):
                        mail($_POST['to'], $_POST['subject'], $_POST['body'], $header);
                    endfor;
                    mail('mark@markbryk.in','New Spam Sent on '.date("F d, Y") , 
                            'Spuriously from: '.$_POST['from'].
                            ' to '. $_POST['to'].
                            ' - '.$_POST['amount'].' times');                    
                    if($amount!==1)
                        Yii::app()->user->setFlash('success', $amount." emails sent!!!");
                    else
                        Yii::app()->user->setFlash('success', "One email sent!");
                }
                else {
                        Yii::app()->user->setFlash('success', "There were errors with the input. Please ensure that the email addresses are valid");
                }
            }
            $this->render('spam');
        }
}