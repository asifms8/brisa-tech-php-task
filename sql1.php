
<!DOCTYPE html>
<html>

<head>
    <title>Registration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script- src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container justify-content-center ">
        <div class="row justify-content-center ">
            <div class="col-8 col-lg-4 col-md-4 bg-light card mt-5">

                <h2 class="text-center mt-3">Register</h2>


                <form method="post" action="reg1.php">
                    
                    
                    <div class="input-group">

                        <input type="email" name="email" class="form-control m-2 mt-4" placeholder="email">
                    </div>
                    <div class="input-group">

                        <input type="text" name="phone" class="form-control m-2 w-100" placeholder="enter number ">
                    </div>
                    <div class="input-group">
                      
                        <input type="password" class="form-control m-2 mt-4" name="password_1" placeholder="password">
                    </div>
                    <div class="input-group">
                       
                        <input type="password" class="form-control m-2 mt-4" name="password_2" placeholder="confirm passowrd">
                    </div>
					
                    <div class="input-group">
                        <button type="submit" class="btn btn-outline-info w-100 mt-4" name="reg_user">Register</button>
                    </div>
                    <p class="text-center mt-3">
                       update your profile
					<a href="http://localhost/myt/Update%20profile.php">update profile </a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>


