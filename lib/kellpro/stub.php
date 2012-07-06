<?php

class KellPro_Stub extends KellPro_Base
{
	function __construct($url)
	{
		parent::__construct($url);
	}

	function get()
	{
		return self::_get($this->_url, array(), $this->getClassName());
	}

	private function getClassName()
	{
		$className = str_replace(KellPro_Client::$apiURL . '/', '', $this->_url);
		$className = preg_replace('/\?(.*)$/', '', $className);
		return $className;
	}
}
