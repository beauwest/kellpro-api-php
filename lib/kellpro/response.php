<?php
class KellPro_Response
{
	var $statusCode;
	var $headers;
	var $body;

	public function __construct($statusCode, $headers, $body)
	{
		$this->statusCode = $statusCode;
		$this->headers = $headers;
		$this->body = $body;
	}

	public function assertValidResponse()
	{
		if($this->statusCode == 200)
		{
			return;
		}

		switch($this->statusCode)
		{
			case 0:
				throw new KellPro_Error('An error occurred while connecting to the KellPro API.');
				break;
			case 401:
				throw new KellPro_UnauthorizedError('Authentication was incorrect');
				break;
			case 404:
				throw new KellPro_NotFoundError('The requested object was not found');
				break;
			case 405:
				throw new KellPro_MethodNotAllowedError('The requested method is not allowed for this resource');
				break;
			case 422:
				throw new KellPro_MissingParameters('The required parameters were not specified');
				break;
			case 500:
				throw new KellPro_ServerError('An error occurred in the KellPro API. Please report the bug to KellPro');
				break;
		}
	}
}