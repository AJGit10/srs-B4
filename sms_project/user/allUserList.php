<?php
session_start();
include("./protected/header.php");
include('./library/user.php');
?>
<!-- MAIN -->
<main>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM user";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc())
                                echo
                                    "<tr>
                                        <td>" . $row['userId'] . "</td>
                                        <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
                                        <td>" . $row['eMail'] . "</td>
                                        <td>" . $row['aptId'] . "</td>
                                    </tr>"
                                    ?>
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
include("../../protected/footer.php");
?>