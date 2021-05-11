<!-- Requires all necessary files that we need  -->

<!-- Require libraries -->
<?php
   // Load Config
   require_once 'config/config.php';

   // Load Helpers
   require_once 'helpers/url_helper.php';

   // Autoload Core Libraries
   spl_autoload_register(function($className) {
     require_once 'libraries/' . $className . '.php';
   });


      // require_once 'libraries/core.php';
      // require_once 'libraries/controller.php';
      // require_once 'libraries/database.php';