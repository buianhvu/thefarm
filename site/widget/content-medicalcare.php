<?php
require_once  'system/operation.php';
$account = $_SESSION['Account'];
update_medical($account);
$care=get_medical_animals($account);
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
    <link rel="public/site/stylesheet" type="text/css" href="public/site/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="public/site/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="public/site/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="public/site/assets/css/style.css" rel="stylesheet">
    <link href="public/site/assets/css/style-responsive.css" rel="stylesheet">

    <script src="public/site/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
   <body>

        <section id="main-content">
            <section class="wrapper">
                <div class="row mt">
                    <div class="col-lg-8">
                        <div class="content-panel">
                          
                                           
                            <section id="unseen">
                                <h4><i class="fa fa-medkit"></i> Medical care </h4>
                           
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-3" class="numeric">ID</th>
                                            <th class="col-lg-3" class="numeric">Weight</th>
                                            <th class="col-lg-3" class="numeric">Animal ID</th>
                                            <th class="col-lg-3" class="numeric">Temperature</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php foreach($care as $item){?>
                                                        <tr>
                                                          <td class="numeric"><?php echo $item['Id']; ?></td>
                                                          <td class="numeric"><?php echo $item['Weight']; ?></td>
                                                          <td class="numeric"><?php echo $item['Animal_ID']; ?></td>
                                                          <td class="numeric"><?php echo $item['Temperature']; ?></td>
                                        </tr>
                                          <?php }?>
                                    </tbody>
                                </table>
                                
                                

                            </section>
                        </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->			
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->

        <!--main content end-->
</html>


