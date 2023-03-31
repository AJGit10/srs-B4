<?php
// session_start();

include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');


?>
<!-- MAIN -->
<main>
<style>
        table,
        th,
        td {
            
            border: 1px solid;
        }
    </style>
    
    <div class="head-title">
        <div class="left">
            <h1>
                Meeting List And Details
            </h1>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <!-- <i class='bx bxs-smile'></i> -->
            <span class="text">
                <h3>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Meeting Id</th>
                                <th>Venue ApartMent Id</th>
                                <th>Meeting Title</th>
                                <th>Date</th>
                                <th>Meeting Details</th>
                                <th>Update</th>
                                <th>Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM notes";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc())
                                {
                                    echo
                                    "<tr>
                                        <td>" . $row['noteId'] . "</td>
                                        <td>" . $row['aptId'] .  "</td>
                                        <td>" . $row['noteTitle'] . "</td>
                                        <td>" . $row['createdAt'] . "</td>
                                        <td>" . $row['noteDetails'] . "</td>"
                                        ?>
                                        <td><a href="./updateMeeting.php?id=<?=$row['aptId'] ?>"><button
                                                    style="background-color:green;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Update</button></a>
                                        </td>
                                        <td><a href="./deleteNote.php?id=<?=$row['aptId'] ?>"><button
                                                    style="background-color:red;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Delete</button></a>
                                        </td>
                                        </tr>
                                        
                                            <?php  ?>
                                        <?php } ?>
                                        
                        
                            </tbody>
                        </table>

                </h3>
            </span>
        </li>
    </ul>
</main>
<!-- MAIN -->

<?php
// include("../../protected/footer.php");
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?>