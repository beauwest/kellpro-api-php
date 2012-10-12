<?php
abstract class KellPro_Resource extends KellPro_Base
{
	protected $values = array();

	public function __get($key)
	{
		if(array_key_exists($key, $this->values))
		{
			return $this->values[$key];
		}
		return null;
	}

	public function __set($key, $value)
	{
		$this->values[$key] = $value;
	}

	public function __isset($key)
	{
		return isset($this->values[$key]);
	}

	public function __unset($key)
	{
		unset($this->values[$key]);
	}

}