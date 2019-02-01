<?php

class SqlController
{
    public $label;
    private $sql;
    private $pdo;
    public $key;
    public $value;
    public $data;

    public function __construct()
    {

        try {
            $pdo = new PDO('mysql:host=127.0.0.1; dbname=hillel_hm', 'root', '');
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
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
                return $this->sql = 'SELECT id, first_name, last_name, email, age FROM `hillel_hm`.`clients`';
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

    /**
     * @param string $first_name
     * @param string $last_name
     * @param string $email
     * @param string $company
     * @param int $is_sctive
     * @param int $age
     */
    public function addClient( string $first_name, string $last_name, string $email, string $company, int $is_sctive, int $age )
    {
        $stmt = $this->pdo->prepare( 
                                     "INSERT INTO 
                                     `hillel_hm`.`clients` (
                                                            `first_name`,
                                                            `last_name`, 
                                                            `email`,
                                                            `company_name`,
                                                            `is_active`,
                                                            `age`
                                                            ) 
                                     VALUES (
                                             :first_name, 
                                             :last_name, 
                                             :email, 
                                             :company, 
                                             :is_active, 
                                             :age
                                             )" 
        );


        $stmt->execute(
            [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'company' => $company,
                'is_active' => $is_sctive,
                'age' => $age,
            ]
        );
    }


    /**
     * @param int $id
     * @param $key
     * @param $value
     */
    protected function updateClient( int $id, $key, $operator, $value )
    {
        if ( $id >= 0 ) {
            $this->queryData($this->sql = "UPDATE `hillel_hm`.`clients` 
                                           SET $key $operator $value 
                                           WHERE id = $id"
            );
        }
    }

    /**
     * @param $id
     * @param $key
     * @param $value
     */
    public function update( $id, $key, $operator, $value )
    {
        $this->updateClient($id, $key, $operator, $value);
    }

    /**
     * query sql statement
     */
    public function queryData($sql)
    {
        return $this->pdo->query($sql);
    }


    public function fetchData( $sql )
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        /*$stmt = $this->pdo->fetch($sql);
        foreach ( $stmt as $row ) {
            echo $row['id'] . $row['first_name'] . "\n";
        }*/
    }


    protected function deleteClient( string $key, $operator, $value )
    {
        return "DELETE FROM `hillel_hm`.`clients` WHERE $key $operator $value";
    }

    public function delete( string $key, $value )
    {
        $this->queryData( $this->deleteClient( $key, $operator, $value ) );
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


$class = new SqlController();
//$class->addClient('Женя', 'Иванов','t@r.cor', 'Intel', 1, 33);
//print_r($class->fetchData($class->showInfo()));
$class->update(1, 'age', '=', 38);
print_r($class->fetchData($class->showInfo()));
//$class->delete('is_active', '>', 6 );
//var_dump($class);
