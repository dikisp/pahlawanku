<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLBB - Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div style="background-color: black" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="color:aliceblue">
            <div class="modal-content" style="background-color :#1E4A74">
                <div class="modal-header" style="background-color :#1E4A74" style="text-align: center;">
                    <h5>Sign in with your Moonton Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color: #163353">
                    <div>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address/Moonton Account/Phone No.">
                                <p style="margin-top: 10px;">
                                    Sign in with your Moonton Account
                                </p>
                            </div>
                            <div class="form-group">
                                <input type="password" name='pass' class="form-control" id="exampleInputPassword1" placeholder="Password" >
                                <p>Use at least 6 characters and a mix of higher and lower case letters and numbers with no special character in it</p>
                            </div>
                            <div style="text-align: center;">
                                <input type="submit" class="btn btn-secondary" name="register" value="Sign In" />

                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #132B47;">
                    <a href="" style="color:#AEA588; text-decoration:none">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>