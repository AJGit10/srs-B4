
<!DOCTYPE html>
<html lang="en">
<head>                                                          
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moving Button</title>


    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/3a3e121ecf.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="signup-box">

<img src="https://i.postimg.cc/pThS1pyL/Untitled-design.png" alt="Code Fed">

<form action="submitted.php" name="suForm" id="supform">
    <input type="text" placeholder="Full name" id="name" onclick="resetBtn()" maxlength="30">
    <input type="text" placeholder="Email" id="email" onclick="resetBtn()">
    <input type="password" placeholder="Password" id="pass" onclick="resetBtn()" minlength="8">
    
    <input type="checkbox" name="check1" id="check" onclick="resetBtn()">
    <label for="check" class="label">I agree to the 'Terms and policies'.</label>

    <input type="submit" id="submit-btn" value="Sign Up" onmouseover="mouseOver()">
</form>
</div>










 


</body>
</html>