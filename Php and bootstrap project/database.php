<?php

class database{

private $conn;

public function __construct(){

    $this->conn = new mysqli("localhost", "root", "", "daewooexpress");
    if($this->conn->error){
        die("error");

    }else{
        echo "success";
    }

}

public function insert($insert){
    $sql = "INSERT INTO daewooproject SET  name = '".$insert['name']."', issued = '".$insert['issued']."', ddate = '".$insert['ddate']."', phone = '".$insert['phone']."',  time = '".$insert['time']."', route = '".$insert['route']."' ";
$result = $this->conn->query($sql);

if($result){
    header("Location: http://localhost/daewoo project/passenger.php");
}else{
    die("error");
}
      
}

public function select(){
    $sql = "SELECT * FROM daewooproject";
    $result = $this->conn->query($sql);
    $mahar = array();
    while($row = mysqli_fetch_assoc($result)){
        $mahar[] = $row;
    }
    return $mahar;
}

public function editdata($edit){
    $sql = "SELECT * FROM daewooproject WHERE id = '".$edit."' ";
    $result = $this->conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        return $row;
    }
}

public function update($insert){
    $sql = "UPDATE daewooproject SET name = '".$insert['name']."', issued = '".$insert['issued']."', ddate = '".$insert['ddate']."', phone = '".$insert['phone']."',  time = '".$insert['time']."', route = '".$insert['route']."' ";
$result = $this->conn->query($sql);
if($result){
    header("Location: passenger.php");
    
}else{
    die("die");
}
}

public function deletedata($delete){
    $sql = "DELETE FROM daewooproject WHERE id = '".$delete."' ";
    $result = $this->conn->query($sql);
    if($result){
        header("Location: http://localhost/daewoo project/passenger.php");
    }else{
        return false;
    }
}


 }

?>