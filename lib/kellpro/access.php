<?php
class KellPro_Access extends KellPro_Resource
{
	// Requests
	public static function get($parameters = array())
	{
		return KellPro_Base::_get(self::url(), $parameters);
	}

	public static function post($parameters = array())
	{
		return KellPro_Base::_post(self::url(), $parameters);
	}

	public static function delete($parameters = array())
	{
		return KellPro_Base::_delete(self::url(), $parameters);
	}

	protected static function url()
	{
		return KellPro_Client::PATH_ACCESS;
	}

	// Response
}