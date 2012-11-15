<?php
KellPro_Base::$classMap['okcr/instrument'] = 'KellPro_OKCountyRecords_Instrument';

class KellPro_OKCountyRecords_Instrument extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}