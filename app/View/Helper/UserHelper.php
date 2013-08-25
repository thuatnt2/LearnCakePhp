<?php
App::uses('AppHelper', 'View/Helper');

class UserHelper extends AppHelper {
    public $helpers = array('Html');

    public function makeEdit($title, $url) {
        // Use the HTML helper to output
        // formatted data:

        $link = $this->Html->link($title, $url, array('class' => 'edit'));

        return '<div class="editOuter">' . $link . '</div>';
    }

}