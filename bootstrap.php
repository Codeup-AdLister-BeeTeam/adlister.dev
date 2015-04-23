<?php 
// Load environment variables. 
 
$_ENV = include_once '.env.php';

require_once 'utils/db_connect.php';
require_once 'models/BaseModel.php';
require_once 'models/Ads.php';
require_once 'models/Users.php';
require_once 'utils/Auth.php';
require_once 'utils/Input.php';
require_once 'utils/Logger.php';

// $dbc = something::dbconnect();



 ?>