<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>


    <div class="wrapper">
        <div class="logo">
            <p>Nepali<span>Spice</span></p>
        </div>

        <div class="logreg-box">

            <!-- forget password form -->
            <div class="form-box_forgetpassword">
                <div class="logreg-title">
                    <i class="bx bx-user-circle"></i>
                    <p>couldn't login to your account?</p>
                </div>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" required />
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" required />
                        <label> New password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" required />
                        <label>Confirm password</label>
                    </div>

                    <button type="submit" class="btn">submit</button>

                    <div class="logreg-link">
                        <p>
                            create account. <a href="register.php" class="create-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>