<?php
Class Chairmen{

    function list($aptId){
        global $conn;
        $sql="SELECT * FROM user WHERE aptId=$aptId ";
        $result= $conn->query($sql);
        //$row3= mysqli_fetch_assoc($result3);
        return $result;
    }
    function delete($userId){ 
        global $conn;
        $sql="DELETE FROM user WHERE userId='$userId'";
        $result= $conn->query($sql);
        
        return $result;
    }
    function Update($userId,$firstName,$lastName,$userName,$password){ 
        global $conn;
        
        $sql="UPDATE user SET firstName='".$firstName."',lastName='".$lastName."',email='".$userName."',passWord='".$password."' where userId=$userId";
        $result= $conn->query($sql);
        echo "Updated successfully";
        return $result;
    }
    function add($firstName,$lastName,$userName,$password,$aptId){
        global $conn;

        $sql4="INSERT INTO user(firstName,lastName,eMail,passWord,aptId) VALUES 
        ('$firstName','$lastName','$userName','$password',$aptId)";        
        $result4= $conn->query($sql4);  
        echo "Add successfully";

        return $result4;
      }
    function list_note($aptId){
        global $conn;
        $sql="SELECT * FROM notes WHERE aptId= $aptId";
        $result= $conn->query($sql);
        return $result;
    }
   
    

   
    

}
 ?>