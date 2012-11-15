<?php
KellPro_Base::$classMap['treasurer/mortgagelink'] = 'KellPro_Treasurer_Mortgagelinks';

class KellPro_Treasurer_Mortgagelinks extends KellPro_Resource
{
	// Requests
	public static function get($site)
	{
		return KellPro_Base::_get(self::url(__CLASS__), array('site_id' => $site));
	}

	public static function post($parameters = array())
	{
		print_r($parameters);
		return KellPro_Base::_post(self::url(__CLASS__), $parameters);
	}

	public static function delete($site_id, $record_id)
	{
		return KellPro_Base::_delete(self::url(__CLASS__), array('site_id' => $site_id, 'record_id' => $record_id));
	}
}