<?php
class KellPro_ODCR_Search extends KellPro_Resource
{

	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(), $parameters);
	}

	protected static function url()
	{
		$url = 'odcr/search';
		self::$classMap[$url] = __CLASS__;
		return '/' . $url;
	}
}