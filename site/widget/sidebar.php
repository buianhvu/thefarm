<?php
session_start();
require_once  'system/operation.php';
$account = $_SESSION['Account'];
$money=get_balance($account);

?>
<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a ><img src="public/site/assets/img/logo.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $account?></h5>
              	  	 <h5 class="centered">Balance: <?php echo $money?> $</h5>
                  <li class="mt">
                      <a class="active" href="index.php?action=home">
                          <i class="fa fa-home"></i>
                          <span>MAIN PAGE</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>CATTLE</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?action=animal_list&Animal_Id=2">Buffalo</a></li>
                          <li><a  href="index.php?action=animal_list&Animal_Id=4">Chicken</a></li>
                          <li><a  href="index.php?action=animal_list&Animal_Id=3">Cow</a></li>
                          <li><a  href="index.php?action=animal_list&Animal_Id=1">Pig</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-gift"></i>
                          <span>FOOD</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?action=food">Manage</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dollar"></i>
                          <span>Finance</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?action=transaction">Transaction</a></li>
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-medkit"></i>
                          <span>Medical</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?action=medicalcare">Medical care</a></li>
                          <li><a  href="index.php?action=Sick_animal">Sick animal</a></li>
                      </ul>
                  </li>
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <script src="public/site/assets/js/jquery.js"></script>

    <script src="public/site/assets/js/jquery-1.8.3.min.js"></script>
    <script src="public/site/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="public/site/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="public/site/assets/js/jquery.scrollTo.min.js"></script>
    <script src="public/site/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="public/site/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="public/site/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="public/site/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="public/site/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="public/site/assets/js/sparkline-chart.js"></script>    
	<script src="public/site/assets/js/zabuto_calendar.js"></script>	
<!--	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to The Farm!',
            // (string | mandatory) the text inside the notification
            text: 'A website help you to manage your farm.',
            // (string | optional) the image to display on the left
            image: 'public/site/assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>-->
	
      </body>
</html>
