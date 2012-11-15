<?php
KellPro_Base::$classMap['odcr/activities'] = 'KellPro_ODCR_Activities';

class KellPro_ODCR_Activities extends KellPro_Resource
{
	// Requests
	public static function get($casekey)
	{
		return KellPro_Base::_get(self::url(__CLASS__), array('casekey' => $casekey));
	}
}