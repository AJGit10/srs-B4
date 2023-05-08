<?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/database.php');

?>
<head>
<style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT userId,firstName,lastName,eMail FROM user";
        $result = mysqli_query($conn, $sql);
        if (!$result) { ?>
            echo "Error:";
        
        <?php } else { ?>
            <?php
            while ($row =$result->fetch_assoc()){
                echo
                "<tr>
              <td>" . $row['userId'] . "</td>

              <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
              <td>" . $row['eMail'] . "</td>" ?>
              <td><button class= "update-btn" data-id="1" button
                                                style="background-color: green;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Update</button></td>
              <td><button class= "delete-btn" data-id="1" button
                                                style="background-color: red;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Delete</button></td>

          </tr>

            <?php } 
              
        }
      ?>
    </tbody>
</table>
</body>