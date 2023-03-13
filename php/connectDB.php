<?php
class CreateDB{
    public $servername;
    public $username;
    public $dbname;
    public $password;
    public $tablename;
    public $conn;
    
    public function __construct(
        $dbname,
        $tablename,
        $servername="localhost",
        $username="root",
        $password="")
    {
        $this->$servername=$servername;
        $this->$username=$username;
        $this->$password=$password;
        $this->dbname=$dbname;
        $this->$tablename=$tablename;
        
        //create connection
        $this->conn = mysqli_connect($servername,$username,$password);
     
        if(!$this->conn){
            die("Connection falied:".mysqli_connect_error());
        }

        $sql="create database  if not exists $dbname";
        if(mysqli_query($this->conn,$sql)){
            $this->conn=mysqli_connect($servername,$username,$password,$dbname);

            $sql="CREATE TABLE IF NOT EXISTS $tablename (id int(11) auto_increment primary key,employee_name varchar(50) not null, email varchar(40) not null unique, mobile int(10) not null, debut date not null,photo varchar(100));";
            if(!mysqli_query($this->conn,$sql)){
                echo 'Error creating table'.mysqli_error($this->conn);
            }
        }else{
            return false;
        }
    }
}
?>