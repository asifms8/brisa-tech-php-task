
<html>

<head>
    <title>update profile </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="style.css" rel="sttylesheet">
</head>

<body>

    <div class="container justify-content-center ">
        <div class="row justify-content-center ">
            <div class="col-8 col-lg-4 col-md-4 bg-light card mt-5">
               
                  <h2 class="text-center  mt-3">update profile </h2>
               <form method="post" action="login.php">
                    <div class="input-group">

                        <input type="text" class="form-control m-2 mt-4 " name="first name" placeholder="first name" autocomplete="off">
                    </div>
                 <div class="input-group">

                        <input type="text" class="form-control m-2 mt-4 " name="last name" placeholder="last name" autocomplete="off">
                    </div>
					<div class="input-group">

                        <input type="text" class="form-control m-2 mt-4 " name="Role" placeholder=" Role " autocomplete="off">
                    </div> 
                    <div class="input-group">
                        <button type="submit" 
						class="btn btn-outline-info w-100 m-2 mt-4" name="login_user">update</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

</body>

</html>