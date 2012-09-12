<?php
Yii::app()->theme = 'mine';
class BlogController extends Controller
{
	public $layout='blog';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to access 'index' and 'view' actions.
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated users to access all actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;
		if(isset($_POST['Post']))
		{
			$model->author_id = 1;
                        $model->attributes=$_POST['Post'];
                        
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();
		if(isset($_POST['Post']))
		{
                    //var_dump($_POST);die;
			$model->attributes=$_POST['Post'];
                        $model->content=$_POST['Post']['content'];
                        $model->create_time = CDateTimeParser::parse($_POST['date'],'MM-dd-yy');
			if($model->save())
				$this->redirect(array('index'));
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
            // we only allow deletion via POST request	
            $this->loadModel()->delete();
            
            //if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_POST['ajax']))
                $this->redirect(array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($tag=null)
	{
		$sort = BlogSort::model()->findByAttributes(array('active'=>1));
                $criteria=new CDbCriteria(array(
			'condition'=>'status='.Post::STATUS_PUBLISHED,
                        'order'=> $sort->name,
		));
		if($tag)
			$criteria->addSearchCondition('tags',$tag);

		$dataProvider=new CActiveDataProvider('Post', array(
			'pagination'=>array(
				'pageSize'=>Yii::app()->params['posts_per_page'],
			),
			'criteria'=>$criteria,
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));                                  

            
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
            if(isset($_POST['item'])) {
                $model = Post::model()->findByPk($_POST['item']);
                $model->create_time = CDateTimeParser::parse($_POST['value'],'MM/dd/yyyy hh:mm:ss');
                $model->save();
                die;
            }
		$model=new Post('search');
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];
                if(isset($_POST['sort'])) {
                        $current = BlogSort::model()->findByAttributes(array('active'=>1));
                        $option= BlogSort::model()->findByAttributes(array('name'=>$_POST['attribute']));
                        
                        $current->active = 0;
                        $current->save();
                        $option->active = 1;
                        $option->save();
                }
		$this->render('admin',array(
			'model'=>$model,
		));
	}
        public function actionSetdate()
        {
            
        }

	/**
	 * Suggests tags based on the current user input.
	 * This is called via AJAX when the user is entering the tags input.
	 */
	public function actionSuggestTags()
	{
		if(isset($_POST['q']) && ($keyword=trim($_POST['q']))!=='')
		{
			$tags=Tag::model()->suggestTags($keyword);
			if($tags!==array())
				echo implode("\n",$tags);
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
			{
				if(Yii::app()->user->isGuest)
					$condition='status='.Post::STATUS_PUBLISHED.' OR status='.Post::STATUS_ARCHIVED;
				else
					$condition='';
				$this->_model=Post::model()->findByPk($_GET['id'], $condition);
			}
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}
        
        public function actionLogin()
        {
            $this->redirect(array('site/login'));
        }
}
