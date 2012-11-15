<?php
KellPro_Base::$classMap['odcr/offenses'] = 'KellPro_ODCR_Offenses';

class KellPro_ODCR_Offenses extends KellPro_Resource
{
	// Requests
	public static function get($casekey)
	{
		return KellPro_Base::_get(self::url(__CLASS__), array('casekey' => $casekey));
	}
}