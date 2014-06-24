<?php

class SitemapController extends yupe\components\controllers\Controller
{
	//Параметр changefreq - частота обновлений
	const ALWAYS = 'always';
	const HOURLY = 'hourly';
	const DAILY = 'daily';
	const WEEKLY = 'weekly';
	const MONTHLY = 'monthly';
	const YEARLY = 'yearly';
	const NEVER = 'never';

	public function actionIndex()
	{
		/* Список моделей, которые мы выгружаем в sitemap.xml
		 * Я закомментировал модели Work и Product так как эти модули у меня не установлены
		 * !! Убедитесь, что у вас в /protected/config/userspace/yupe.php подключены основные пути:
		 *  Например, для News: 'application.modules.news.models.*'
		*/
		$classes = array(
		    'Post' => array(self::DAILY, 0.8), 
		    'News' => array(self::DAILY, 0.5), 
		    'Page' => array(self::WEEKLY, 0.2), 
		    //'Work' => array(self::WEEKLY, 0.5), 
		    //'Product' => array(self::DAILY, 0.5),
		);
 
		$items = array();
		foreach ($classes as $class=>$options){
			$items = array_merge($items, array(array(
				'models' => CActiveRecord::model($class)->published()->findAll(),
				'changefreq' => $options[0],
				'priority' => $options[1],
			)));
		}
 
		$this->renderPartial('index', array(
			'items'=>$items,
			'host'=>Yii::app()->request->hostInfo,
		));        
	}
}