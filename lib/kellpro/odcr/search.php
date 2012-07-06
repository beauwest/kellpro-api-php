<?php
class KellPro_ODCR_Search extends KellPro_Resource
{
	static $next;
	static $previous;

	// Requests
	public static function get($parameters, $url = '')
	{
		if(empty($url))
		{
			$url = self::url();
		}

		$results = KellPro_Base::_get($url, $parameters, preg_replace('/^\//', '', self::url()));

		self::$next = (!empty($results->references->next) ? $results->references->next : null);
		self::$previous = (!empty($results->references->previous) ? $results->references->previous : null);

		foreach($results->results as $row)
		{
			foreach($row as $key => &$value)
			{
				if(is_object($value) && !empty($value->reference))
				{
					$value = KellPro_Base::convertReference($value->reference);
				}
			}
		}
		return $results;
	}

	protected static function url()
	{
		return KellPro_Client::PATH_ODCR_SEARCH;
	}

	public function next()
	{
		if(!empty(self::$next))
		{
			return self::get(null, self::$next);
		}
		return false;
	}

	public function previous()
	{
		if(!empty(self::$previous))
		{
			return self::get(null, self::$previous);
		}
		return false;

	}
}