<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body class="left">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="index.html"><img src="img/logo.png" alt="Bean Bliss Logo"></a>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!---gambar--->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #EAD8C0;">
                <p class="fs-2 mt-3" style="font-weight: 600; color: #74512D;">Bean Bliss</p>
                <div class="featured-image">
                    <img src="img/forgetPassword.png" class="img-fluid" style="width: 250px;">
                </div>
            </div> 

            <!---form---> 
            <div class="col-md-6 right-box">
                <form action="passwordUpdate.php" id="forgotPasswordForm" method="post">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Forgot Your Password?</h2>
                            <small class="text-wrap text-center mb-3" style="width: 17rem; color: #000;">Enter your email address and your new password below.</small>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" name="confirmPassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="input-group mb-3">
                           <button type="submit" class="btn btn-lg w-100 fs-6 Lightbtn" id="reset-button">Reset</button>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
    
    <script src="script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
