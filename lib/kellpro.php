<?php

// Require all KellPro API classes.
require_once(dirname(__FILE__) . '/kellpro/base.php');
require_once(dirname(__FILE__) . '/kellpro/resource.php');
require_once(dirname(__FILE__) . '/kellpro/stub.php');
require_once(dirname(__FILE__) . '/kellpro/client.php');
require_once(dirname(__FILE__) . '/kellpro/response.php');
require_once(dirname(__FILE__) . '/kellpro/exceptions.php');

require_once(dirname(__FILE__) . '/kellpro/access.php');

require_once(dirname(__FILE__) . '/kellpro/odcr/search.php');
require_once(dirname(__FILE__) . '/kellpro/odcr/case.php');
require_once(dirname(__FILE__) . '/kellpro/odcr/court.php');
require_once(dirname(__FILE__) . '/kellpro/odcr/offenses.php');
require_once(dirname(__FILE__) . '/kellpro/odcr/people.php');
require_once(dirname(__FILE__) . '/kellpro/odcr/activities.php');

require_once(dirname(__FILE__) . '/kellpro/okcountyrecords/search.php');
require_once(dirname(__FILE__) . '/kellpro/okcountyrecords/instrument.php');
require_once(dirname(__FILE__) . '/kellpro/okcountyrecords/images.php');
require_once(dirname(__FILE__) . '/kellpro/okcountyrecords/imagepreview.php');

require_once(dirname(__FILE__) . '/kellpro/treasurer/mortgagelink.php');