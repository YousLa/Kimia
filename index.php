<?php

require_once 'models/functions/ProfileModel.php';
require_once 'models/database/database.php';
require_once 'models/functions/ContesModel.php';
require_once 'models/functions/ResponseModel.php';
require_once 'models/functions/UserModel.php';


session_start();
// ↓ Initialize les variables $view, $css et $js
require_once 'controllers/router.php';

// ↓ Template
require_once 'views/templates/header.php';

require_once 'views/templates/nav.php';

require_once $view;

require_once 'views/templates/footer.php';
