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
		return KellPro_Client::PATH_ODCR_SEARCH;
	}
}