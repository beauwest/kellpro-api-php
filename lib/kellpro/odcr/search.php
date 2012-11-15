<?php
KellPro_Base::$classMap['odcr/search'] = 'KellPro_OKCountyRecords_Search';

class KellPro_ODCR_Search extends KellPro_Resource
{

	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}