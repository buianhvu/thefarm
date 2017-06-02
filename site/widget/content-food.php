<?php
require 'system/animal.php';
require_once  'system/operation.php';
$account = $_SESSION['Account'];
 $money=get_balance($account);
 
 $sql_food = "SELECT * FROM food NATURAL JOIN food_kind WHERE Account='$account'ORDER BY  `food`.`Food_ID` ASC";
    $food = db_select_list($sql_food);
// $food=get_food_info($account);
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

  
   <body>

        <section id="main-content">
            <section class="wrapper">
                <div class="row mt">
                    <div class="col-lg-8">
                        <div class="content-panel">
                            <h4><i class="fa fa-dollar"></i> MONEY: <?php echo $money ?>$</h4>
                         
                                           
                            <section id="unseen">
                                <form method="post" action="index.php?action=buy_food">
                                    <input type="hidden" name="animal_id" value="<?php echo $animal_id ?>"/>
                                    <button  type="submit" name="submit" value="Buy food" style="float: left;" class="btn btn-theme03"><i class="fa fa-check"></i>Buy food</button>
                            </form>
                                <table class="table table-bordered table-striped table-condensed"
                                    <thead>
                                        <tr>
                                            <th class="col-lg-3">Food</th>
                                            <th class="col-lg-3" class="numeric">Quantity(kg)</th>
                                            <th class="col-lg-3" class="numeric">Price per unit</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <?php foreach ($food as $item) { ?>
                                                        <td class="pull-center"> <?php echo $item['Food_Name']?></td>
                                                        <td class="numeric"><?php echo $item['Quantity']?></td>
                                                        <td class="numeric"><?php echo $item['Price_Per_Unit']?></td>
                                                
                                                        
                                                      
                                                    </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                               
                             
                                
                                
                            </section>
                        </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->			
                </div><!-- /row -->

<!-- js placed at the end of the document so the pages load faster -->
       
        <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->

            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->

        <!--main content end-->
</html>

