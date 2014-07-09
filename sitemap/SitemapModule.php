<?php
use yupe\components\WebModule;

class SitemapModule extends WebModule
{
	// название модуля
	public function getName()
	{
	    return Yii::t('SitemapModule.sitemap', 'Sitemap');
	}
	
	// зависимости модуля
	public function getDependencies()
    	{
        	return array(
            		'news',
			'page',
		);
	}

	// описание модуля
	public function getDescription()
	{
		return Yii::t('SitemapModule.sitemap', 'Module used for generating "sitemap.xml"');
	}
 
	// автор модуля (Ваше Имя, название студии и т.п.)
	public function getAuthor()
	{
	    return Yii::t('SitemapModule.sitemap', 'Timurio');
	}
 
	// контактный email автора
	public function getAuthorEmail()
	{
	    return Yii::t('SitemapModule.sitemap', 'info@easy-tickets.ru');
	}
 
	// сайт автора или страничка модуля
	public function getUrl()
	{
	    return Yii::t('SitemapModule.sitemap', 'http://yupe.ru');
	}
	
	// категория модуля
	public function getCategory()
	{
		return Yii::t('SitemapModule.sitemap', 'Sitemap');
	}
	
	public function init()
	{
		$this->setImport(array(
			'sitemap.models.*',
			'sitemap.components.*',
		));
	}

}
