<?php
class KellPro_ODCR_Courts extends KellPro_Resource
{
	// Requests
	public static function get($court)
	{
		return KellPro_Base::_get(self::url(), array('code' => $court));
	}

	protected static function url()
	{
		$url = 'odcr/courts';
		self::$classMap[$url] = __CLASS__;
		return '/' . $url;
	}
}