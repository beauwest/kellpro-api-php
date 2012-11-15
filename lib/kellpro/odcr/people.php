<?php
KellPro_Base::$classMap['odcr/people'] = 'KellPro_ODCR_People';

class KellPro_ODCR_People extends KellPro_Resource
{
	// Requests
	public static function get($casekey)
	{
		return KellPro_Base::_get(self::url(__CLASS__), array('casekey' => $casekey));
	}
}