<?php
KellPro_Base::$classMap['okcr/legals'] = 'KellPro_OKCountyRecords_Legals';

class KellPro_OKCountyRecords_Legals extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}