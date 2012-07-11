# KellPro API Client Library for PHP

The KellPro API Client Library for PHP is an open source library designed to talk to the [KellPro API](http://api.kellpro.com).

### Installation

The easiest way to begin working with the library is to clone it using the following git command:

	git clone git://github.com/beaudesigns/kellpro-api-php.git /path/to/include/kellpro
    
You can also download the PHP files in the `lib/` directory and add them to your project directly.

### Requirements

The Client Library depends on PHP 5.3.0 or higher, with the libcurl extention. Make sure to check your `phpinfo()` page and verify that curl is available in your copy of PHP.

## Initialization

Load the KellPro Client library files and set your API Key.

	<?php
	require_once('path/to/include/kellpro/lib/kellpro.php');

	KellPro_Client::$apiKey = '1234567890abcdefghijklmnopqrstuv';

## API Documentation

Please see the [KellPro API](http://api.kellpro.com) for more information.