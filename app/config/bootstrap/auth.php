<?php
//enable Session support
use lithium\storage\Session;
//enable auth support
use lithium\security\Auth;

//configure sessions
Session::config(array(
    'default' => array('adapter' => 'Php')
));

//configure auth
Auth::config(array(
    'member' => array(
        'adapter' => 'Form', //specify form authentication method
        'model' => 'Users', //specify model used for auth
        'fields' => array('username', 'password') //specify fields to use
    )
));
?>
