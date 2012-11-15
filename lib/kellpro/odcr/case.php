<?php
KellPro_Base::$classMap['odcr/case'] = 'KellPro_ODCR_Case';

class KellPro_ODCR_Case extends KellPro_Resource
{
	// Requests
	public static function get($casekey)
	{
		return KellPro_Base::_get(self::url(__CLASS__), array('casekey' => $casekey));
	}
}