<?php
$animal_id=$_POST['animal_id'];
$account = $_SESSION['Account'];

if ($animal_id == 1) {
    $animal_kind = 'PIG';
}
if ($animal_id == 2) {
    $animal_kind = 'BUFFALO';
}
if ($animal_id == 3) {
    $animal_kind = 'COW';
}
if ($animal_id == 4) {
    $animal_kind = 'CHICKEN';
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


<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> BUY A <?php echo $animal_kind ?> </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form </h4>
                      <form class="form-horizontal style-form" action="index.php?action=manage_add" method="POST">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Health Index</label>
                              <div class="col-sm-2">
                                  <input type="number" name="health_index" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Weight</label>
                              <div class="col-sm-2">
                                  <input type="text" name="weight" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Source</label>
                              <div class="col-sm-2">                                  
                              <select class="form-control" title="Place" name="source">                                                            
                                 <option value="USA">USA</option>
                                 <option value="Japan">Japan</option>
                                 <option value="Russia">Russia</option>
                                 <option value="France">France</option>
                               
                              </select>
                              </div>    
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date Import</label>
                              <div class="col-sm-3">
                                  <input type="text" name="date" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sex</label>
                              <div class="col-sm-1">                                  
                              <select class="form-control" name="txtSex">                                                            
                                 <option value="1">Male</option>
                                 <option value="0">Female</option>
                              </select>
                              </div>    
                          </div>
                          <div class="form-group">
                              
                              <div>    
                          <input type="hidden" name="animal_id"value="<?php echo $animal_id?>"/>
                          <button type="submit" value="Add" class="btn btn-theme"><i class="fa fa-check">Add</i></button>
                          <div class="col-lg-1">
                          <button style="float: left" type="reset" value="Reset" class="btn btn-theme"><i class="fa fa-check">Reset</i></button>
                              </div>
                          </div>
                          </div>
                      </form>
                          <div class="form-group">
                              <button class="btn btn-theme" value="cancel" /><a href="index.php?action=Animal_list&Animal_Id= <?php echo $animal_id ?>" /><i class="fa fa-arrow-left">Cancel</i></button>
                          </div>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
</html>