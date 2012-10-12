<?php
class KellPro_ODCR_Case extends KellPro_Resource
{
	// Requests
	public static function get($casekey)
	{
		return KellPro_Base::_get(self::url(), array('casekey' => $casekey));
	}

	protected static function url()
	{
		$url = 'odcr/case';
		self::$classMap[$url] = __CLASS__;
		return '/' . $url;
	}
}