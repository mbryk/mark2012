<?php

class PlainController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
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

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
        
        public function myMatch($string,$entities_type='number')
        {
            $string = htmlspecialchars($string, ENT_NOQUOTES);
            $search                     = array("\"","'");
            $replace_by_entities_name   = array("&quot;","&apos;");
            $replace_by_entities_number = array("&#34;","&#39;");
            $do = null;
            if ($entities_type == 'number')
            {
                $do = str_replace($search,$replace_by_entities_number,$string);
            } 
            else if ($entities_type == 'name') {
                $do = str_replace($search,$replace_by_entities_name,$string);
            } 
            else {
                $do = addslashes($string);
            }
            if(preg_match("/(%0A|%0D|%09|\\n+|\\r+|\\t+)/i", $do))
                    $do = preg_split("/(%0A|%0D|%09|\\n+|\\r+|\\t+)/i", $do, 3, PREG_SPLIT_NO_EMPTY);
            return $do;
        } 
        
        public function actionStuff() {
            /*var_dump("This is cool! Draw your own hand in \"3D\"! Click through for the tutorial. @Laurie -- Your teacher friends might like this! 

Direct link: http://earlylearning.momtrusted.com/2012/09/how-to-draw-your-hand-in-3d-with-simple-optical-illusions/");
            var_dump(htmlspecialchars("This is cool! Draw your own hand in \"3D\"! Click through for the tutorial. @Laurie -- Your teacher friends might like this! 

Direct link: http://earlylearning.momtrusted.com/2012/09/how-to-draw-your-hand-in-3d-with-simple-optical-illusions/",ENT_QUOTES));
             * 
             */
            $description = $this->myMatch("This is cool! Draw your own hand in \"3D\"! Click through for the tutorial. @Laurie -- Your teacher friends might like this! Direct link: http://earlylearning.momtrusted.com/2012/09/how-to-draw-your-hand-in-3d-with-simple-optical-illusions/");
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (iPad; CPU OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko ) Version/5.1 Mobile/9B176 Safari/7534.48.3");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_URL, 'http://pinterest.com/afmarcom/pins/');
            $pin = curl_exec($ch);
            if(is_array($description)) {
                var_dump($description);
                var_dump($pin);
                            $found_d = true;
                            foreach($description as $d):
                                if(!stripos($pin,$d)) $found_d = false;                                        
                            endforeach;
                        } 
                        else {
                            $found_d = (bool) stripos($pin, $description);
                        }
                        var_dump($found_d);die;
            
            $this->render('stuff');
        }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionDemo()
        {
            $this->render('demo');
        }       
}