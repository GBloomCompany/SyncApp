<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        include "../Resources/header.html"
    ?>
    <div class="customDiv">
        <h1>
            New here? Register your account!
        </h1>
        <div class="formContainer">
            <form method="POST">
                
                <input type="hidden" name="formType" value="register"> <!--Allows me to tell whether im registering or logging in-->

                <div class="mb-3 asd">
                    <label for="usernameregister" class="form-label">Enter your username</label>
                    <input type="text" name="Ruser" id="usernameregister" required>
                </div>

                <div class="mb-3 asd">
                    <label for="emailregister" class="form-label">Enter your email</label>
                    <input type="email" name="Remail" id="emailregister">
                </div>

                <div class="mb-3 asd">
                    <label for="passwordregister" class="form-label">Enter your password</label>
                    <input type="password" name="Rpassword" id="passwordregister" required>
                </div>

                <button type="submit" class="btn btn-primary" id="submit">Register</button>
            </form>
        </div>  
    </div>
    

    <?php
        include "accManager.php";
    ?>
    <script src="inputControl.js"></script>
</body>
</html>