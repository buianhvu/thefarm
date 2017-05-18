<?php
require 'system/animal.php';
$aniaml = get_all_cow();
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
                <h3><i class="fa fa-angle-right"></i> Cow </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Cow List</h4>
                            <section id="unseen">
                                
                                <table class="table table-bordered table-striped table-advanced"
                                    <thead>
                                        <tr>
                                            <th class="numeric">ID</th>
                                            <th class="numeric">Animal</th>
                                            <th class="numeric">Sex</th>
                                            <th class="numeric">Health index</th>
                                            <th class="numeric">Weight</th>
                                            <th>Source</th>
                                            <th>Account</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="numeric">3</td>
                                            <td class="numeric">3</td>
                                            <td class="numeric">$1.38</td>
                                            <td class="numeric">-0.01</td>
                                            <td class="numeric">-0.36%</td>
                                            <td>Vietnam</td>
                                            <td>hoangdinhtuan</td>
                                        </tr>
                                        <?php foreach ($aniaml as $item) { ?>
                                                        <tr>
                                                          <td class="numeric"><?php echo $item['Id']; ?></td>
                                                          <td class="numeric"><?php echo $item['Animal_ID']; ?></td>
                                                          <td class="numeric"><?php echo $item['Sex']; ?></td>
                                                          <td class="numeric"><?php echo $item['Health_Index']; ?></td>
                                                          <td class="numeric"><?php echo $item['Weight']; ?></td>
                                                          <td><?php echo $item['Source']; ?></td>
                                                          <td><?php echo $item['Account']; ?>
                                                              <form method="post" action="index.php?action=animal_delete">
                                                                    <input type="hidden" name="id" value="<?php echo $item['Id']; ?>"/>
                                                                    
                                            <button onclick="return confirm('Bạn có chắc muốn xóa không?');"class="pull-right" class="btn btn-danger btn-xs" type="submit" name="delete" value="Xóa"><i class="fa fa-trash-o"></i></button>
                                                              </form>
                                                          </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                
                                <form method="post" action="index.php?action=list/add_animal">
                                                   
                                      <input type="hidden" name="animal_id" value="3"/>
                                    <input type="submit" name="submit" value="add a cow" style="float: right;">
                                            </form>
                            </section>
                        </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->			
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->

        <!--main content end-->
</html>
