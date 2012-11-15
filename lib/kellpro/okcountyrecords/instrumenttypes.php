<?php
KellPro_Base::$classMap['okcr/instrumenttypes'] = 'KellPro_OKCountyRecords_InstrumentTypes';

class KellPro_OKCountyRecords_InstrumentTypes extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}