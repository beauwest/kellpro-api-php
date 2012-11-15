<?php
KellPro_Base::$classMap['access'] = 'KellPro_Access';

class KellPro_Access extends KellPro_Resource
{
	public static function get($parameters = array())
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}

	public static function post($parameters = array())
	{
		return KellPro_Base::_post(self::url(__CLASS__), $parameters);
	}

	public static function delete($parameters = array())
	{
		return KellPro_Base::_delete(self::url(__CLASS__), $parameters);
	}
}