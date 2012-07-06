<?php
class KellPro_Access extends KellPro_Resource
{
	// Requests
	public static function get()
	{
		return KellPro_Base::_get(self::url());
	}

	protected static function url()
	{
		return KellPro_Client::PATH_ACCESS;
	}

	// Response
}