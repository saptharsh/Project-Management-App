<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC</title>
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
    </head>
    <?php Session::init(); ?><!-- Or else we would get a undefined _Session variable error -->    
    <body>
        <div id="header">

            <!-- Advanced Kind a If Else loop -->
            <?php if (Session::get('loggedIn') == true): ?>
                <a href="<?php echo URL ?>dashboard">Dashboard</a>
                <a href="<?php echo URL ?>note">Notes</a>

                <?php if (Session::get('role') == 'owner'): ?>
                    <a href="<?php echo URL; ?>users">Users</a>
                <?php endif; ?>

                <a href="<?php echo URL ?>dashboard/logout">Logout</a>
            <?php else: ?>
                <a href="<?php echo URL; ?>index">Index</a>
                <a href="<?php echo URL; ?>help">Help</a>
                <a href="<?php echo URL; ?>formm">Form</a>
                <a href="<?php echo URL; ?>login">Login</a>
            <?php endif; ?>
        </div>

        <div id="content">

            <!--php code goes here.-->

