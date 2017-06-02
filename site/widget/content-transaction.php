<?php

require_once  'system/operation.php';

$account = $_SESSION['Account'];
$money=get_balance($account);
$sql_tran = "SELECT * FROM transaction WHERE Account='$account'";
    $transaction = db_select_list($sql_tran);
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
                    <div class="col-lg-10">
                        <div class="content-panel">
                            <h4><i class="fa fa-credit-card"></i> Transaction:</h4>
                          <h4><i class="fa fa-dollar"></i> MONEY: <?php echo $money ?>$</h4>
                          
                                           
                            <section id="unseen">
                                
                                <table class="table table-bordered table-striped table-condensed"
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1" class="numeric">ID</th>
                                            <th class="col-lg-2">Type</th>
                                            <th class="col-lg-2">Action</th>
                                            <th class="col-lg-2" class="numeric">Money($)</th>
                                            <th class="col-lg-3">Date</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       
                                       
                                         <?php foreach ($transaction as $item) { ?>
                                                        <td class="pull-center"> <?php echo $item['Transaction_ID']?></td>
                                                        <td class="numeric"><?php echo $item['Type']?></td>
                                                        <td class="numeric"><?php echo $item['Action']?></td>
                                                        <td class="numeric"><?php echo $item['Money']?></td>
                                                        <td class="numeric"><?php echo $item['Trans_Date']?></td>
                                                        
                                                
                                                    </td>
                                        </tr>
                                    <?php } ?>
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