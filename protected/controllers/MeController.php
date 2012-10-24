<?php
Yii::app()->theme = 'mine';
class MeController extends Controller
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
		$this->render('index');
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
        
        public function actionProgrammer()
        {
            $this->render('programmer');
        }
        
        public function actionEngineer()
        {
            $this->render('engineer');
        }
        
        public function actionMusician()
        {
            $this->render('musician');
        }        
        
        public function actionAthlete()
        {
            $this->render('athlete');
        }
        
        public function actionStoner()
        {
            $this->render('stoner');
        }
        
        public function actionMore()
        {
            $this->render('more');
        }
}