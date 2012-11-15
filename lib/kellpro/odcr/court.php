<?php
KellPro_Base::$classMap['odcr/courts'] = 'KellPro_ODCR_Courts';

class KellPro_ODCR_Courts extends KellPro_Resource
{
	// Requests
	public static function get($court)
	{
		return KellPro_Base::_get(self::url(__CLASS__), array('code' => $court));
	}
}