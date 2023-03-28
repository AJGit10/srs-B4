<?php

// include('../protected/header.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');

class Apartment{
    function aptInfo() {
        global $conn;

        if (isset($_SESSION['aptName'])) {
            $existingApartmentName = $_SESSION['aptName'];
        } else {
            die("Data not found");
        }

        $que = "SELECT * FROM apartment WHERE aptName = '$existingApartmentName'";

        $fetch = $conn->query($que);
        $row = mysqli_fetch_assoc($fetch);
        return $row;
    }

    function list() //view list of all users
    {
        //code to get all users 
        global $conn;

        $sql = "SELECT * FROM `apartment`";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        // echo '$num';
        $sql2 = "SELECT DISTINCT(aptId) FROM `apartment`";
        $result2 = mysqli_query($conn, $sql2);
        $num2 = mysqli_num_rows($result2);

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $apartmentList[] = $row;
            }
            return $apartmentList;
        } else {
            return 0;
        }
    }

    function add($aptId, $aptName, $aptAddress, $aptCity) //adding new apartment
    {
        //code to add new aprt entry
        global $conn;
        $sql = "INSERT INTO apartment(aptId, aptName, aptAddress, aptCity) VALUES('$aptId','$aptName','$aptAddress','$aptCity')";

        $output = $conn->query($sql);
        if (!$output) {
            echo 'not done';
        } else {
            echo ' ';
        }
    }
    function get($aptId) //get specific apartment by userId
    {
        //code to get single aprtment details from database.
        global $conn;
        $sql = "SELECT *FROM apartment where aptId ='$aptId'";
        $result = $conn->query($sql);
        $fetch = mysqli_fetch_array($result);
        return $fetch;
    }
    //new lines starts
    // function updateApartmentInfo($aptId, $aptName, $aptAddress, $aptCity)
    // {
    //     global $conn;
    //     if (isset($_SESSION['aptId'])) {
    //         $existingApartmentId = $_SESSION['aptId'];
    //     } else {
    //         die("Data not found");
    //     }

    //     $query = "UPDATE apartment SET  aptId = '$aptId' , aptName = '$aptName', aptAddress = '$aptAddress', aptCity = '$aptCity' WHERE aptName = '$existingApartmentId'";
    //     $conn->query($query);
    //     //new line ends
    // }

    function updateApartmentInfo($aptId, $aptName, $aptAddress, $aptCity)
    {
        global $conn;
        $sql = "UPDATE apartment SET aptId= '".$aptId."',aptName='".$aptName."',`aptAddress`='".$aptAddress."',aptCity='".$aptCity."'
        WHERE aptId =$aptId ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Updated successfully";
}

function  deleteApart($aptId)
    {
        global $conn;
        $sql = "DELETE FROM `apartment`
        WHERE aptId =$aptId ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Deleted SuccessFully successfully";
}}

$apartment = new Apartment();


?>