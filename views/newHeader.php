<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>MVC</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/foundation.css"/>
        <script src="<?php echo URL; ?>public/js/vendor/modernizr.js"></script>

        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/>
        <!-- jQuery UI stylesheet -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css"/>
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-1.11.3.min.js"></script>
        <!-- jQuery UI library -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <?php
        if (isset($this->js)) {
            //echo 'Called by setting a JS var to the "View Obj" in dashboard.php</br>';
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
        <?php Session::init(); ?><!-- Or else we would get a undefined _Session variable error -->    


    </head>
    <body>



        <div class="row">
            <div class="large-3 columns">
                <h1><img src="http://placehold.it/400x100&text=Logo"/></h1>
            </div>
            <div id="header" class="large-9 columns">
                <ul class="inline-list right">

                    <?php if (Session::get('loggedIn') == true): ?>
                        <li><a href="<?php echo URL ?>dashboard">Dashboard</a></li>
                        <li><a href="<?php echo URL ?>note">Notes</a></li>
                        <li><a href="<?php echo URL; ?>formm">Form</a></li>
                        <?php if (Session::get('role') == 'owner'): ?>
                            <li><a href="<?php echo URL; ?>users">Users</a></li>
                        <?php endif; ?>

                        <li><a href="<?php echo URL ?>dashboard/logout">Logout</a></li>

                    <?php else: ?>
                        <li><a href="<?php echo URL; ?>index">Index</a></li>
                        <li><a href="<?php echo URL; ?>help">Help</a></li>
                        <li><a href="<?php echo URL; ?>login">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="large-12 columns">
            <div id="content">
                





