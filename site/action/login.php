i<?PHP
session_start();
session_destroy();

session_start();
$hit_login = input_post('hit_login');
$name = input_post('Account');
$pass = input_post('Password');
$wrong_password = 0;
if($hit_login){
    $sql = 'SELECT * FROM `users` WHERE Account = \''.$name.'\'';
    $admin_var = db_select_row($sql);
    if($admin_var){
    if ($admin_var['Password'] == $pass) {
        $_SESSION['Account'] = $name;
        $_SESSION['Password'] = $pass;
        $_SESSION['permission'] = 0;
        echo '<script language="javascript">';
            echo'window.location = "index.php?action=home"';
        echo '</script>';
    }
    else{
        $wrong_password = 1;
    }
    }
    else{
        $wrong_password = 1;
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>THE FARM</title>

        <!-- Bootstrap core CSS -->
        <link href="public/site/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="public/site/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="public/site/assets/css/style.css" rel="stylesheet">
        <link href="public/site/assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">

                <form class="form-login" action="" method="post">
                    <h2 class="form-login-heading">sign in now</h2>
                    <div class="login-wrap">
                        <input name="Account" type="text" value="" class="form-control" placeholder="User ID" autofocus>
                        <input type="hidden" name="hit_login" value="hit_login" id="hit_login" class="form-control" />
                        <br>
                        <input name="Password" type="password" value="" class="form-control" placeholder="Password">
                        <?PHP
                                            if($wrong_password == 1){
                                            echo '<span class="help-block">You may enter wrong username or password</a></span>';
                                            }
                                            ?>
                        <br></br>
                        <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                        <hr>


                        <div class="registration">
                            Don't have an account yet?<br/>
                            <label class="checkbox">
                            <span class="pull-center">
                                
                                <a data-toggle="modal" href="#myModal"> Create an account</a>

                            </span>
                            </label>
                        </div>

                    </div>

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                 <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Create a new account</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Enter your account.</p>
                                    <input type="text" name="dname" id="name" placeholder="ID" autocomplete="off" class="form-control placeholder-no-fix">
                                    <p>Enter your password.</p>
                                    <input type="password" name="password"  id="password"  placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
                                    <p>Confirm your password.</p>
                                    <input type="password" name="cpassword" id="cpassword"  placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">

                                </div>
                                <div class="alert alert-danger hide">
 
                        </div>
                        <div class="alert alert-success hide">
 
                        </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                    <button class="btn btn-theme" type="button" id="register-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal -->

                </form>	  	

            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="public/site/assets/js/jquery.js"></script>
        <script src="public/site/assets/js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="public/site/assets/js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("public/site/assets/img/login.jpg", {speed: 500});
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
$("#register-btn").click(function() {
var name = $("#name").val();
//var email = $("#email").val();
var password = $("#password").val();
var cpassword = $("#cpassword").val();
if (name == ''  || password == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("index.php?action=register", {
name: name,
password: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});
    </script>

    </body>
</html>
