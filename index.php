<?php

require_once 'models/functions/ProfileModel.php';
require_once 'models/database/database.php';
require_once 'models/functions/ContesModel.php';
require_once 'models/functions/ResponseModel.php';
require_once 'models/functions/UserModel.php';


session_start();

require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

require_once 'controllers/router.php';

require_once 'views/templates/footer.php';
