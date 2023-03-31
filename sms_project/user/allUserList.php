<?php
// session_start();
// include("./protected/header.php");
// include('./library/user.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/user.php');

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
                List of All Users
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
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>User Mail</th>
                                <th>User Apt Id</th>
                                <th>Role</th>
                                <th>Update</th>
                                <th>Delete</th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sqljoin = "SELECT user.userId, user.firstName, user.lastName, user.eMail, user.aptId, role.roleLabel FROM user JOIN role ON user.rollId = role.rollId";
                            $result = $conn->query($sqljoin);

                            if (!$result) { ?>
                                <tr>
                                    <td colspan="6">No Results found</td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                while ($row3 = $result->fetch_assoc()) {
                                    echo
                                        "<tr>
                                        <td>" . $row3['userId'] . "</td>
                                        <td>" . $row3['firstName'] . " " . $row3['lastName'] . "</td>
                                        <td>" . $row3['eMail'] . "</td>
                                        <td>" . $row3['aptId'] . "</td>
                                        <td>" . $row3['roleLabel'] . "</td>" ?>
                                    <td><a href="./updateUser.php?id=<?= $row3['userId'] ?> "><button
                                                style="background-color: purple;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Update</button></a>
                                    </td>
                                    <td><a href="./userDelete.php?id=<?=$row3['userId'] ?>"><button
                                                style="background-color:red;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Delete</button></a>
                                    </td>
                                    </tr>
                                    <?php ?>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                        </table>

                        <!-- <?php
                            // $result = $user->list();
                            // foreach ($result as $key => $value) {
                            
                            //     echo $value['userId'] . "  " . $value['firstName'] . " " . $value['lastName'];
                            //     echo '<br>';
                            // }
                            ?> -->
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