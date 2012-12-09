<?php
Yii::app()->theme = 'new';
class QuizController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->redirect(array('engineer'));
	}
        
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
                        $this->redirect('/404.shtml');
	    }
	}        
        
        public function actionEngineer()
        {
            if(isset($_POST['answer'])){
                Yii::app()->user->setFlash('quiz', "Thanks for answering! I'm flattered");
                $this->redirect($this->createUrl('me/engineer'));
            }
            $data = array(
                '0'=>'Beautiful',
                '1'=>'Fascinating',
                '2'=>'Weird',
                '3'=>'Surprising'
                );
            $this->render('engineer', array('data'=>$data));
        }
}