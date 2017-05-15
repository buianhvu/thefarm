<?PHP
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
        $_SESSION['permission'] = $admin_var['permission'];
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
                                <a data-toggle="modal" href="login.php#myModal"> Create an account</a>

                            </span>
                            </label>
                        </div>

                    </div>

                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Create a new account</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Enter your ID.</p>
                                    <input type="text"  name="id" placeholder="ID" autocomplete="off" class="form-control placeholder-no-fix">
                                    <p>Enter your password.</p>
                                    <input type="password"  name="newpassword"  placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">

                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                    <button class="btn btn-theme" type="button">Submit</button>
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


    </body>
</html>
