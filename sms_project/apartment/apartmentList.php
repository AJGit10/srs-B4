<?php


include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
$auth->isLoggedin();
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
                List Of All Apartments
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
                                <th>Apartment Id</th>
                                <th>Apartment Name</th>
                                <th>Apt Address</th>
                                <th>Total User In Apartment</th>
                                <th>Update</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM apartment";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc())
                            {echo
                                    "<tr>
                                        <td>" . $row['aptId'] . "</td>
                                        <td>" . $row['aptName'] . "</td>
                                        <td>" . $row['aptAddress'] . "</td>
                                        <td>" . $row['userId'] . "</td>"
                                        ?>
                                    <td><a href="./updateApartment.php?id=<?=$row['aptId'] ?>"><button
                                                style="background-color:green;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Update</button></a>
                                    </td>
                                    <td><a href="./apartDelete.php?id=<?=$row['aptId'] ?>"><button
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

include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?>



