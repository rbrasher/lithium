<?php

namespace app\models;

class Posts extends \lithium\data\Model {
    public $validates = array(
        'title' => array(
            array('notEmpty', 'message' => 'Please enter a Title')
        )
    );
}
?>
