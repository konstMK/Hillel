<?php

class SqlController
{
    public $label;
    private $sql;
    public $key;
    public $value;

    public function __construct()
    {
        //$dbh = new PDO("", root, '');
    }


    /**
     * @param string $label according to homework 1-10
     * @return string
     */
    public function showInfo( $label = "all" )
    {
        $this->label = $label;

        switch( $this->label ) {
            case "all":
                return $this->sql = 'SELECT id, first_name, last_name FROM `hillel_hm`.`clients`';
            case "active":
                return $this->sql = 'SELECT id, first_name, last_name FROM `hillel_hm`.`clients` where `is_active`= 1';
            case "age":
                return $this->sql = 'SELECT id, first_name, last_name, age FROM `hillel_hm`.`clients` where `age`>= 30';
            case "name":
                return $this->sql = 'SELECT * FROM `hillel_hm`.`clients` WHERE `first_name` LIKE \'В%\'';
            case "count":
                return $this->sql = 'SELECT count(id) FROM `hillel_hm`.`clients`';
            case "maxAge":
                return $this->sql = 'SELECT max(age) FROM `hillel_hm`.`clients`';
            case "countActive":
                return $this->sql = 'SELECT count(id) FROM `hillel_hm`.`clients` WHERE `is_active` = 1';
            case "orderByAge":
                return $this->sql = 'SELECT id, first_name, last_name, age FROM `hillel_hm`.`clients` ORDER BY `age`';
            case "orderByName":
                return $this->sql = 'SELECT id, first_name, last_name, age FROM `hillel_hm`.`clients` ORDER BY 
                                                                                                        `first_name` DESC';
            case "activeOlder25":
                return $this->sql = 'SELECT count(id) FROM `hillel_hm`.`clients` WHERE `age` > 25 AND `is_active` = 1';
        }

    }

    public function addClient( string $name, string $last_name, string $email, string $company, int $age )
    {
        $this->sql = "INSERT INTO `hillel_hm`.`clients` (
                                                          `first_name`,
                                                          `last_name`, 
                                                          `email`,
                                                          `company_name`,
                                                          `is_active`,
                                                          `age`
                      ) 
                      VALUES (':first_name', ':last_name', ':email', ':company', ':is_active', ':age')";
    }

    protected function updateClient( int $id, $array)
    {
        if ( $id >= 0 ) {

            $this->id = $id;

            foreach ($array as $key => $value) {

                // update client when inputed id match with id in db
                if ($this->key == 'id' && $this->value == $this->id) {
                    $this->sql = "UPDATE `hillel_hm`.`clients` SET $this->key = $this->value WHERE id = $this->id";
                    $this->key = $key;
                    $this->value = $value;
                }
            }
        }
    }

    protected function deleteClient( string $key, $value )
    {
        $this->sql = "DELETE FROM `hillel_hm`.`clients` WHERE $key = $value";
    }

    public function delete( string $key, $value  )
    {
        $this->deleteClient( $key, $value );
    }
}
/*
 * update - delete sql statements
 * 1. UPDATE `hillel_hm`.`clients` SET age = 45 WHERE id = 2;
 * 2. UPDATE `hillel_hm`.`clients` SET name = 'Жорик' WHERE id = 1;
 * 3. UPDATE `hillel_hm`.`clients` SET is_active = 0 WHERE id = 3;
 * 4. DELETE FROM `hillel_hm`.`clients` WHERE is_active = 0;
 * 5. DELETE FROM `hillel_hm`.`clients` WHERE id > 6;
 */


