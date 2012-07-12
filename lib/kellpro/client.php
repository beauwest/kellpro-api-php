<?php
class KellPro_Client
{
	public static $apiURL = 'https://api.kellpro.com/v2';
	public static $apiKey;
	private $_acceptLanguage = 'en-US';

	const GET = 'GET';
	const POST = 'POST';
	const PUT = 'PUT';
	const DELETE = 'DELETE';

	const API_CLIENT_VERSION = '0.1';

	const PATH_ACCESS = '/access';
	const PATH_ODCR_CASE = '/odcr/case';
	const PATH_ODCR_COURT = '/odcr/courts';
	const PATH_ODCR_OFFENSES = '/odcr/offenses';
	const PATH_ODCR_PEOPLE = '/odcr/people';
	const PATH_ODCR_ACTIVITIES = '/odcr/activities';
	const PATH_ODCR_SEARCH = '/odcr/search';

	public function request($method, $url, $parameters = array())
	{
		if(stripos($url, 'http') === false)
		{
			$url = self::$apiURL . $url;
		}

		if(!empty($parameters))
		{
			$url .= '?' . http_build_query($parameters);
		}

		$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($curlHandle, CURLOPT_MAXREDIRS, 1);
		curl_setopt($curlHandle, CURLOPT_HEADER, true);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT, 45);
		curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
			'Accept: application/json',
			self::__userAgent(),
			'Accept-Language: ' . $this->_acceptLanguage
		));
		curl_setopt($curlHandle, CURLOPT_USERPWD, self::$apiKey . ':xxx');

		if($method == self::GET)
		{
			curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, $method);
		}
		elseif($method == self::POST)
		{
			curl_setopt($curlHandle, CURLOPT_POST, true);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $parameters);
		}
		elseif($method == self::DELETE)
		{
			curl_setopt($curlHandle, CURLOPT_CUSTOMREQUEST, $method);
		}

		$response = curl_exec($curlHandle);

		$statusCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
		curl_close($curlHandle);

		list($header, $body) = explode("\r\n\r\n", $response, 2);
		$headers = self::getHeaders($header);

		return new Kellpro_Response($statusCode, $headers, $body);
	}

	private static function getHeaders($header)
	{
		$headers = explode("\r\n", $header);
		$returnHeaders = array();
		foreach($headers as &$header)
		{
			preg_match('/([^:]+): (.*)/', $header, $matches);
			if(sizeof($matches) > 2)
				$returnHeaders[$matches[1]] = trim($matches[2]);
		}
		return $returnHeaders;
	}

	private static function __userAgent()
	{
		return 'User-Agent: KellPro/' . self::API_CLIENT_VERSION . '; PHP ' . phpversion() . ' [' . php_uname('s') . ']';
	}
}