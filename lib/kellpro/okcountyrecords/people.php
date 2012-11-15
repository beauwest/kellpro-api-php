<?php
KellPro_Base::$classMap['okcr/people'] = 'KellPro_OKCountyRecords_People';

class KellPro_OKCountyRecords_People extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}