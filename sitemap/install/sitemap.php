<?php
/**
 *
 * Файл конфигурации модуля sitemap
 *
 * Адаптация sitemap для Yii в виде модуля для Yupe
 * Оригинал тут: http://www.elisdn.ru/blog/38/sitemap-for-yii-project
 *
 * @author Timurio <info@easy-tickets.ru>
 * @link http://yupe.ru
 * @copyright 2014 yupe
 * @package yupe.modules.sitemap.install
 * 
 */
return array(
    'module'   => array(
        'class'  => 'application.modules.sitemap.SitemapModule',
    ),
    'import'    => array(
        'application.modules.sitemap.models.*',
    ),
    'component' => array(),
    'rules'     => array(
        'sitemap.xml'=>'sitemap/sitemap/index'
    ),
);