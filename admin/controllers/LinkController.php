<?php
/**
 * 
 */
class LinkController
{
	
	public function getLinkController()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : 'home/index';
		$arrUrl = explode('/', $url);
		$action = $arrUrl[0];
		$module = LinkModel::getLinkModel($action);
		return $module;
	}
}