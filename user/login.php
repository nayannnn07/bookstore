<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="fullpage">
        <div class="navbar">
            <nav>
                <ul id='MenuItems'>
                    <li>
                        Home
                        <button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'"style="width:auto;">Login</button>
                    </li>
                </ul>
            </nav>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Login</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text' class='input-field' placeholder='Email Id' required>
                    <input type='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <Button type='submit' class='submit-btn'>LOG IN</button>
                </form>
                <form id='register' class='input-group-register'>
                    <input type='text' class='input-field' placeholder='First Name' required>
                    <input type='text' class='input-field' placeholder='Last Name' required>
                    <input type='email' class='input-field' placeholder='Email Id' required>
                    <input type='password' class='input-field' placeholder='Enter Password' required>
                    <input type='password' class='input-field' placeholder='Confirm Password' required>
                    <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit' class='submit-btn'>Register</button>
                </form>
            </div>
        </div>
    </div>
    
    <script> //to move login and register
        var x= document.getElementById('login');
        var y=document.getElementById('register');
        var z=document.getElementById('btn');
        function register()
        {
            x.style.left='-400px';
            y.style.left='50px';
            z.style.left='110px';
        }
        function login()
        {
            x.style.left='50px';
            y.style.left='450px';
            z.style.left='0px';
        }
    </script>
    
    <script> //when login register clicked form-box disappears
        var modal = document.getElementById('login-form');
        window.onclick = function(event){
            if (event.target == modal){
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>