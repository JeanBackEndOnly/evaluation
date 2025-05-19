<?php include '../templates/header.php';?>

    <main id="main" class="login-page mb-3">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 col-12 mx-auto"> -->
                    <div class="card">
                         <div class="card-headers">
                            <h1 class="fs-2 text-center" style="font-family: 'Poppins', sans-serif; background:none; padding-top: 2rem;">ZPPSU EVALUATION SYSTEM</h1>
                        </div>
                        <div class="card-headers">
                            <h1 class="fs-2 text-center" style="font-family: 'Poppins', sans-serif; background:none;">Login</h1>
                        </div>
                        <div class="card-body">
                            <form action = "../login/login.php" method = "post">

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username: " required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password: " required>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
                                </div>
                                <div class="mb-3 text-center">
                                    <a href="register.php" style="color: blue;">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </main>
<?php
    approvedSuccess();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../webApp/main.js"></script>
<?php include '../templates/footer.php'?>