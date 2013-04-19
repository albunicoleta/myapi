<?php

/**
 * contains sample users
 */
class Migration_Add_sample_users extends CI_Migration{
    
    public function up()
    {
        $sql = "INSERT INTO users
                VALUES (NULL, 'Pavel', 'Ion', 'ion@yahoo.com'), 
                       (NULL, 'Georgescu', 'Maria', 'maria@yahoo.com'),
                       (NULL, 'Ionescu', 'Alin', 'alin@gmail.com'),
                       (NULL, 'Palade', 'Vasile', 'vasile@gmail.com'),
                       (NULL, 'Popescu', 'Adrian', 'adrian@gmail.com')";
        
       $this->db->query($sql);        
        
    }
    
    public function down()
    {
        $sql = "DELETE * FROM users";
        
        $this->db->query($sql);
    }
}