<?php
KellPro_Base::$classMap['okcr/images'] = 'KellPro_OKCountyRecords_Images';

class KellPro_OKCountyRecords_Images extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}