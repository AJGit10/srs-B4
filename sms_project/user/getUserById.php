<?php
session_start();
include('../../library/user.php');
include("../../protected/header.php");

?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>
                User Search by userId
            </h1>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <!-- <i class='bx bxs-smile'></i> -->
            <span class="text">
                <h3>
                    <?php
                    if (isset($_POST['searchUserId'])) {
                        $userId = $_POST['userId'];
                        $result = $u1->get($userId);
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
include("../../protected/footer.php");
?>