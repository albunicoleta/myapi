<?php

/**
 * Description of user
 *
 * @author Nicoleta
 * @package api
 */
class Users extends MY_Controller {

    /**
     * is used to display user data by id
     * 
     * @param int user id
     * @return void
     */
    public function read()
    {
        $this->load->model('user');
        if ($user = $this->user->getUserById($this->uri->segment(4))) {
            $result = json_encode($user);
        } else {
            $result = json_encode(array('result' => 'not found'));
        }

        echo $result;
    }

    /**
     * is used to delete a row from database by id
     * 
     * @return void
     */
    public function delete()
    {
        $this->load->model('user');
        if ($this->user->deleteUserById($this->uri->segment(4))) {
            $result = json_encode(array('result' => 'success'));
        } else {
            $result = json_encode(array('result' => 'not found'));
        }

        echo $result;
    }

}

