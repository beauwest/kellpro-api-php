<?php
KellPro_Base::$classMap['okcr/imageprint'] = 'KellPro_OKCountyRecords_ImagePrint';

class KellPro_OKCountyRecords_ImagePrint extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}