<?php 
        if ( !isset($_SESSION) ) session_start();

        if(isset($_SESSION["user"]))
        {
            header("Location: customerhome.php");
        }


?>

<html>
<head>
	
<meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./style.css">

</head>  
<body>  


		<br><br>
		<div class="container">

	    	<div class="d-flex justify-content-center align-items-center ">
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<h3><b>SIGNUP/REGISTER</b></h3>
	    			    <hr>
	    			</div>
	    		</div>
	    		<div class="row">
	    		
	    			<div class="col-sm-4">
                    <?php 

                            if(isset($_SESSION["error"]))
                            {
                                echo "<p class=\"text-danger\">",$_SESSION["error"],"</p>" ;
                                unset($_SESSION["error"]);
                            }
                            


                    ?>

	    				
	    				<form action = "authenticationSignup.php"  method = "POST">
							UserName  : <input autocomplete="off" class="form-control" type="text" name="user" required="">
							<br><br>

							Password  : <input autocomplete="off" class="form-control" type="password" name="pass" required="">
							<br><br>
							
							<button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Signup</button>
				        </form>
						<br>
						already signed up? <a href="login.php">login</a>
	    			</div>
	    		
	    	    </div>
	    		
	    	</div>
    	
        </div>

       
		



	
 
</body>  
</html>  