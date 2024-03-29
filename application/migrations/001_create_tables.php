<?php

class Migration_Create_tables extends CI_Migration{
    
    public function up()
    {
        /* creates table only IF NOT EXISTS*/
        
        $fields = array(
            'id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT',
            'firstname VARCHAR(50) NOT NULL',
            'lastname VARCHAR(50) NOT NULL',
            'email VARCHAR(50) NOT NULL'            
            );
        
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }
    
    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}