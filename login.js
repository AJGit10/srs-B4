//how to create a login form with moving submit button?
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <style>
        .login-form {
            width: 300px;
            margin: 0 auto;
            font-family: Tahoma, Geneva, sans-serif;
        }
        .login-form h1 {
            text-align: center;
            color: #4d4d4d;
            font-size: 24px;
            padding: 20px 0 20px 0;
        }
        .login-form input[type="password"],
        .login-form input[type="text"] {
            width: 100%;
            padding: 15px;
            border: 1px solid #dddddd;
            margin-bottom: 15px;
            box-sizing:border-box;
        }
        .login-form input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #535b63;
            border: 0;
            box-sizing: border-box;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
        }
        </style>
    </head>
    <body>
        <div class="login-form">
            <h1>Please enter a password:</h1>
            <form>
                <input id="passwordTextbox" type="password" name="password" placeholder="Password" required>
                <input id="submitButton" type="submit" value="Send" />
            </form>
        </div>
        <script type="text/javascript">

            window.addEventListener('DOMContentLoaded', function(event){
                document.getElementById('submitButton').addEventListener('click', function(e){
                    e.preventDefault();
                    var value = document.getElementById('passwordTextbox').value;
                    if (value=='1111') {
                        window.location.href = 'https://www.google.com';
                    } else if (value=='1234') {
                        window.location.href = 'https://www.youtube.com';
                    } else {
                        // show error
                        alert('Password is invalid');
                    }
                });
            });

        </script>
    </body>
</html>




//Source: https://stackoverflow.com/questions/55652125


