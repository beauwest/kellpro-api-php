<?php
class KellPro_ODCR_Activities extends KellPro_Resource
{
	// Requests
	public static function get($casekey)
	{
		return KellPro_Base::_get(self::url(), array('casekey' => $casekey));
	}

	protected static function url()
	{
		return KellPro_Client::PATH_ODCR_ACTIVITIES;
	}
}