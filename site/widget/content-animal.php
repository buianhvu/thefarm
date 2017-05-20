<?php
require 'system/animal.php';
$animal_id=$_GET['Animal_Id'];

$sql = 'SELECT * FROM animals WHERE Animal_ID = ' . $animal_id . '';
$animal = db_select_list($sql);
if ($animal_id == 1) {
    $animal_kind = 'Pig';
}
if ($animal_id == 2) {
    $animal_kind = 'Buffalo';
}
if ($animal_id == 3) {
    $animal_kind = 'Cow';
}
if ($animal_id == 4) {
    $animal_kind = 'Chicken';
}
;
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
                <h3><i class="fa fa-angle-right"></i> <?php echo $animal_kind ?> </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> <?php echo $animal_kind ?> List</h4>
                            <form method="post" action="index.php?action=animal_add">
                                    <input type="hidden" name="animal_id" value="<?php echo $animal_id ?>"/>
                                    <button  type="submit" name="submit" value="add a <?php echo $animal_kind ?>" style="float: left;" class="btn btn-theme03"><i class="fa fa-check"></i>Add a <?php echo $animal_kind ?></button>
                            </form>
                            <button class="btn btn-theme04"><i class="fa fa-trash-o"></i>Delete selected <?php echo $animal_kind ?></button>
                            <section id="unseen">
                                
                                <table class="table table-hover table-striped table-advanced"
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1"></th>
                                            <th class="col-lg-1" class="numeric">ID</th>
                                            <th class="col-lg-1" class="numeric">Animal</th>
                                            <th class="col-lg-1" class="numeric">Sex</th>
                                            <th class="col-lg-1" class="numeric">Health index</th>
                                            <th class="col-lg-1" class="numeric">Weight</th>
                                            <th class="col-lg-2" class="pull-center">Source</th>
                                            <th class="col-lg-2" class="pull-right">Account</th>
                                            <th class="col-lg-2" class="pull-left"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($animal as $item) { ?>
                                                        <tr>
                                                          <td><input type="checkbox" name="check" value="ON" />  
                                                          <td class="numeric"><?php echo $item['Id']; ?></td>
                                                          <td class="numeric"><?php echo $item['Animal_ID']; ?></td>
                                                          <td class="numeric"><?php echo $item['Sex']; ?></td>
                                                          <td class="numeric"><?php echo $item['Health_Index']; ?></td>
                                                          <td class="numeric"><?php echo $item['Weight']; ?></td>
                                                          <td class="pull-center"><?php echo $item['Source']; ?></td>
                                                          <td class="pull-center"><?php echo $item['Account']; ?></td>
                                                          <td><form method="post" action="index.php?action=animal_delete">
                                                               <input type="hidden" name="id" value="<?php echo $item['Id']; ?>"/>
                                                               <input type="hidden" name="animal_id" value="<?php echo $item['Animal_ID']; ?>"/>
                                                               <button onclick="return confirm('Bạn có chắc muốn xóa không?');" class="btn btn-danger btn-xs" type="submit" name="delete" value="Xóa"><i class="fa fa-trash-o"></i></button>
                                                              </form>
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
