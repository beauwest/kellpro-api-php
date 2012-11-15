<?php
KellPro_Base::$classMap['okcr/counties'] = 'KellPro_OKCountyRecords_Counties';

class KellPro_OKCountyRecords_Counties extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}