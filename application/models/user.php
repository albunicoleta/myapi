<?php

class User extends CI_Model {

    public $id;
    public $firstname;
    public $lastname;
    public $email;

    /**
     * is used to return an user by id
     * 
     * @param type int $id
     * @return mixed 
     */
    public function getUserById($id)
    {
        $this->load->database();
        $query = $this->db->get_where('users', array('id' => $id));

        if ($query->num_rows()) {
            //fetch row data from db
            $row = $query->row();
            //set row data on instance props
            $this->id = $row->id;
            $this->firstname = $row->firstname;
            $this->lastname = $row->lastname;
            $this->email = $row->email;

            return $this;
        }

        return NULL;
    }

    /**
     * deletes a row from database by id
     * 
     * @param type int $id
     * @return boolean
     */
    public function deleteUserById($id)
    {
        if ($this->getUserById($id)) {
            $this->db->delete('users', array('id' => $id));
            return TRUE;
        }
        return FALSE;
    }

}
