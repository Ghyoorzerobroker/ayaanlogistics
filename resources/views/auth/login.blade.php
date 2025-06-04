
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #F2F7FB;
        box-sizing: border-box;
    }
    .wrap-login-page {
        width: 100%;
        max-width: 470px;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 100vh;
        padding: 40px 20px;
        box-sizing: border-box;
    }

    .login-box {
        background: #fff;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        text-align: left;
    }
.top-text{
    margin-bottom:18px;
}
    .login-box h3 {
        margin-bottom: 10px;
        font-size: 24px;
        color: #333;
        margin-top:0px;
    }

    .body-text {
        color: #666;
        font-size: 14px;
        margin-bottom: 25px;
    }

    .login-box label {
        display: block;
        margin-bottom: 6px;
        font-size: 15px;
        color: #444;
        font-weight:600;
    }

    .login-box input {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;

    }
    .login-box input:focus {
    border-color: #007bff; 
    outline: none; 
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
}

    .login-box button {
        width: 100%;
        padding: 12px;
        background: #007BFF;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .login-box button:hover {
        background: #0056b3;
    }

    .error-message {
        margin-top: 10px;
        padding: 10px;
        background-color: #ffe5e5;
        color: red;
        border-radius: 6px;
        font-size: 14px;
    }

    #site-logo-inner {
        display: block;
        margin: 0 auto 30px auto;
        text-align: center;
    }

    #site-logo-inner img {
        max-height: 60px;
    }
.password-wrapper {
    position: relative;
    width: 100%;
}

.input-container {
    position: relative;
    width: 100%;
}

.input-container input {
    width: 100%;
    padding: 10px 40px 10px 12px; /* space for icon */
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

.show-pass {
    position: absolute;
    top: 52%;
    right: 16px;
    transform: translateY(-50%);
    cursor: pointer;
}

.show-icon,
.hide-icon {
    font-size: 16px;
    color: #888;
    display: none;
}

.show-icon.active,
.hide-icon.active {
    display: inline;
}


    @media (max-width: 480px) {
        .login-box {
            padding: 30px 20px;
        }
    }
    </style>
</head>
<body>
   
   
    
    <div class="wrap-login-page" >
                <div class="flex-grow flex flex-column justify-center gap30">
                    <a href="index.html" id="site-logo-inner">
                        
                    </a>
                    <div class="login-box">
                        <div class="top-text">
                            <h3>Vendor Login</h3>
                            <div class="">Enter your email &amp; password to login</div>
                        </div>
                        <form action="" method="POST">
      
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

       <div class="password-wrapper">
    <label for="password">Password</label>
        <input type="password" name="password" id="password" class="password-input" required>
        <span class="show-pass">
            <i class="fas fa-eye show-icon active"></i>
            <i class="fas fa-eye-slash hide-icon"></i>
        </span>
    
</div>

        <button type="submit">Login</button> 

        @if($errors->any())
            <div style="color:red;">
                <strong>{{ $errors->first() }}</strong>
            </div>
        @endif
    </form>
                       
                       
                    </div>
                </div>
                
    </div>
    
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const passwordInput = document.querySelector(".password-input");
        const showIcon = document.querySelector(".show-icon");
        const hideIcon = document.querySelector(".hide-icon");

        showIcon.classList.add("active");

        document.querySelector(".show-pass").addEventListener("click", function () {
            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";

            showIcon.classList.toggle("active", !isPassword);
            hideIcon.classList.toggle("active", isPassword);
        });
    });
</script>

</body>
</html>