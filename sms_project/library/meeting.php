<?php

// include('../protected/header.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');

class Meet{
    function meetInfo() {
        global $conn;

        if (isset($_SESSION['noteId'])) {
            $existingNoteId = $_SESSION['noteId'];
        } else {
            die("Data not found");
        }

        $que = "SELECT * FROM notes WHERE noteId = '$existingNoteId'";

        $fetch = $conn->query($que);
        $row = mysqli_fetch_assoc($fetch);
        return $row;
    }

    function list() //view list of all meets notes
    {
        //code to get all mettng details
        global $conn;

        $sql = "SELECT * FROM `notes`";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        // echo '$num';
        $sql2 = "SELECT DISTINCT(noteId) FROM `notes`";
        $result2 = mysqli_query($conn, $sql2);
        $num2 = mysqli_num_rows($result2);

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $meetingList[] = $row;
            }
            return $meetingList;
        } else {
            return 0;
        }
    }

    function add($meetId, $meetAptId, $meetTitle, $meetDate , $meetDetails) //adding new apartment
    {
        //code to add new aprt entry
        global $conn;
        $sql = "INSERT INTO notes(noteId, aptId, noteTitle, createdAt, noteDetails) VALUES('$meetId','$meetAptId','$meetTitle','$meetDate','$meetDetails')";

        $output = $conn->query($sql);
        if (!$output) {
            echo 'not done';
        } else {
            echo ' ';
        }
    }
    function get($meetId) //get specific apartment by userId
    {
        //code to get single aprtment details from database.
        global $conn;
        $sql = "SELECT *FROM notes where noteId ='$meetId'";
        $result = $conn->query($sql);
        $fetch = mysqli_fetch_array($result);
        return $fetch;
    }
    //new lines starts
    // function updateMeetInfo($meetId, $meetAptId, $meetTitle, $meetDate , $meetDetails)
    // {
    //     global $conn;
    //     if (isset($_SESSION['noteID'])) {
    //         $existingNoteId = $_SESSION['noteId'];
    //     } else {
    //         die("Data not found");
    //     }

    //     $query = "UPDATE notes SET noteId = '$meetId', aptId = '$meetAptId', noteTitle = '$meetTitle', createdAt = '$meetDate' , noteDetails = '$meetDetails' WHERE noteId = '$existingNoteId'";
    //     $conn->query($query);
    //     //new line ends
    // }
    function  updateMeetInfo($meetId, $meetAptId, $meetTitle, $meetDate , $meetDetails)
    {
        global $conn;
        $sql = "UPDATE notes SET noteId= '".$meetId."',aptId='".$meetAptId."',`noteTitle`='".$meetTitle."',createdAt='".$meetDate."',noteDetails= '".$meetDetails."'
        WHERE noteId =$meetId ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Updated successfully";
}

function  deleteMeeting($noteId)
// , $userfirstName, $userlastName, $userEmail,$userAptId)
    {
        global $conn;
        $sql = "DELETE FROM `notes`
        WHERE noteId =$noteId ";
        // echo $sql;
        $result =$conn->query($sql);
        echo "Deleted SuccessFully";
}

function updateNoteByCp($noteId,$noteAptId, $noteTitle, $noteDetails)
    {
        global $conn;
        $query = "UPDATE note SET noteId = $noteId, aptId = $noteAptId, noteTitle = '$noteTitle', noteDetails = '$noteDetails' WHERE aptId = '$noteAptId'";
        $conn->query($query);
    }
}
// $Apartment = new Meet();


?>