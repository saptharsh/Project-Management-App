<?php
require 'config.php';

//using an autoloader. Also, take a look on spl_autoload_register 
/*
 * When the MCV app (index page) loads, it automatically includes all the classes specified in the autoloader 
 */
//The classes are case-sensitive in Unix, but in windows they are not case-sensitive
function __autoload($class) {
    require Libs . $class . '.php';
}

$app = new Bootstrap();
?>

<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>MVC</title>
        <link rel="stylesheet" href="public/css/foundation.css"/>
        <script src="../assets/js/modernizr.js"></script>

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/>
        <!-- jQuery UI stylesheet -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css"/>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-1.11.3.min.js"></script>
        <!-- jQuery UI library -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <?php
        /*
          if (isset($this->js)) {
          //echo 'Called by setting a JS var to the "View Obj" in dashboard.php</br>';
          foreach ($this->js as $js) {
          echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
          }
          }
         * 
         */
        ?>
        <?php //Session::init(); ?><!-- Or else we would get a undefined _Session variable error -->    


    </head>
    <body>

<?php echo URL; ?>

        <div class="row">
            <div class="large-3 columns">
                <h1><img src="http://placehold.it/400x100&text=Logo"/></h1>
            </div>
            <div id="header" class="large-9 columns">
                <ul class="inline-list right">

<?php //if (Session::get('loggedIn') == true):  ?>
                    <li><a href="<?php echo URL ?>dashboard">Dashboard</a></li>
                    <li><a href="<?php echo URL ?>note">Notes</a></li>

<?php //if (Session::get('role') == 'owner'):  ?>
                    <li><a href="<?php echo URL; ?>users">Users</a></li>
                    <?php //endif; ?>

                    <li><a href="<?php echo URL ?>dashboard/logout">Logout</a></li>

<?php //else:  ?>
                    <li><a href="<?php echo URL; ?>index">Index</a></li>
                    <li><a href="<?php echo URL; ?>help">Help</a></li>
                    <li><a href="<?php echo URL; ?>formm">Form</a></li>
                    <li><a href="<?php echo URL; ?>login">Login</a></li>
<?php //endif;  ?>
                </ul>
            </div>
        </div>

        <div class="row">

            <div id="content">


                <div class="large-9 push-3 columns">
                    <h3>Page Title <small>Page subtitle</small></h3>

                </div>


                <div class="large-3 pull-9 columns">
                    <ul class="side-nav">
                        <li><a href="#">Section 1</a></li>
                        <li><a href="#">Section 2</a></li>
                        <li><a href="#">Section 3</a></li>
                        <li><a href="#">Section 4</a></li>
                        <li><a href="#">Section 5</a></li>
                        <li><a href="#">Section 6</a></li>
                    </ul>
                    <p><img src="http://placehold.it/320x240&text=Ad"/></p>
                </div>
            
















        <!-- Place this in Footer -->        
            </div>
        </div>

            <footer class="row">
                <div class="large-12 columns">
                
                    
                
                        <div id="footer">
                    <div class="row">
                        <div class="large-6 columns">
                            <p>&copy; Copyright no one at all. Go to town.</p>
                        </div>
                        <div class="large-6 columns">
                            <ul class="inline-list right">
                                <li><a href="#">Section 1</a></li>
                                <li><a href="#">Section 2</a></li>
                                <li><a href="#">Section 3</a></li>
                                <li><a href="#">Section 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    
                </div>
            </footer>

            <script src="public/js/vendor/jquery.js"></script>
            <script src="public/js/foundation.min.js"></script>
            <script>
                $(document).foundation();
            </script>

            <script>
                $(document).foundation();

                var doc = document.documentElement;
                doc.setAttribute('data-useragent', navigator.userAgent);
            </script>
    </body>
</html>