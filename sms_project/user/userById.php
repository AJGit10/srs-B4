<?php
session_start();
// include('../../library/user.php');
// include("../../protected/header.php");
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/user.php');                              
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');

$fetch= $user->get($userId);
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
                User Search by userId
            </h1>
        </div>
    </div>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="userId" class="btn" placeholder="userId" />
            <input type="submit" name="submit" class="btn" placeholder="search bu uId" />
        </form>
        <?php
                    if (isset($_POST['userId'])) {
                        $userId = $_POST['userId'];
                        $result = $fetch->get($userId);
                    }
                    ?>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>user Id</th>
                                <th> user Name</th>
                                <th>user Mail</th>
                                <th>user Apt ID</th>
                            </tr> <br>
                        </thead>
                        <tbody>
                            <?php
                            if(!empty($result)){
                                while (!empty($result)) {
                                    echo "<tr>
                                                <td>" . $result['userId'] . "</td>
                                                <td>" . $result['firstName'] . " " . $result['lastName'] . "</td>
                                                <td>" . $result['eMail'] . "</td>
                                                <td>" . $result['aptId'] . "</td>
                                            </tr>";
                                    break;
                                } 
                            } else {
                                echo "<tr>
                                                <td> NA </td>
                                                <td> NA </td>
                                                <td> NA </td>
                                                <td> NA </td>
                                            </tr>";
                            }
                            
                            ?>
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



                                               