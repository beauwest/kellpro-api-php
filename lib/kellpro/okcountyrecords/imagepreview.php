<?php
KellPro_Base::$classMap['okcr/imagepreview'] = 'KellPro_OKCountyRecords_ImagePreview';

class KellPro_OKCountyRecords_ImagePreview extends KellPro_Resource
{
	// Requests
	public static function get($parameters)
	{
		return KellPro_Base::_get(self::url(__CLASS__), $parameters);
	}
}