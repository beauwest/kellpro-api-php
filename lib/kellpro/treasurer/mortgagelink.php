<?php
class KellPro_Treasurer_Mortgagelinks extends KellPro_Resource
{
	// Requests
	public static function get($site)
	{
		return KellPro_Base::_get(self::url(), array('site_id' => $site));
	}

	public static function post($parameters = array())
	{
		print_r($parameters);
		return KellPro_Base::_post(self::url(), $parameters);
	}

	public static function delete($site_id, $record_id)
	{
		return KellPro_Base::_delete(self::url(), array('site_id' => $site_id, 'record_id' => $record_id));
	}

	protected static function url()
	{
		$url = 'treasurer/mortgagelink';
		self::$classMap[$url] = __CLASS__;
		return '/' . $url;
	}
}