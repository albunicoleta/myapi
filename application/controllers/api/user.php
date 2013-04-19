<?php

/**
 * Description of user
 *
 * @author Nicoleta
 * @package api
 */
class User extends MY_Controller {
    
    public function read()
    {
        $obj = array(
            'id' => 1,
            'name' => 'nico',
            'email'=> 'nico@nico.com'
            );
       echo $id = $this->uri->segment(4);
       echo json_encode($obj);
       
    }
}

