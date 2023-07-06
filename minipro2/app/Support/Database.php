<?php


namespace App\Support;



use mysqli;


abstract class Database {

    /**
     * private properties(variables) for database connection.
     */
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "miniprotwo";
    private $connection;

    /**
     * private method(function) for database connection.
     */
    private function connection(){
        return $this -> connection = new mysqli($this -> $db_host, $this -> $db_user, $this ->  $db_pass, $this -> $db_name);
    }

    /**
     * protected create method query for database
     */
    protected function create(string $table, array $data){
        //database column
      $arr_keys = array_keys($data);
      echo $db_col = implode(', ', $arr_keys);

      //array values
     $arr_val = array_values($data);
     

      $data_str ='';
      foreach($arr_val as $val){
        $data_str .= "'" . $val . "',";
      }



    $data_val = substr($data_str, 0, -1);
    $this -> connection() ->query("INSERT INTO $table($db_col)VALUES($data_val)");

      
        
    }
    /**
     * protected Show method query for database
     */
    protected function all($table, $order='DESC'){
        return $this-> connection() -> query("SELECT * FROM $table ORDER by id $order");
        
    }
    /**
     * protected find method query for database
     */
    protected function find(){
        
    }
    /**
     * protected delete method query for database
     */
    protected function delete($table, $id){
        return $this -> connection() -> query("DELETE FROM $table WHERE id = '$id' "); 
    }
    /**
     * protected update method query for database
     */
    protected function update(){
        
    }

 

}










?>
