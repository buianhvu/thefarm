<?php
$account = $_SESSION['Account'];
?>
<!DOCTYPE html>
<html lang="en">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9 ">

                <div class="row mtbox">
                    <div>
                        <a class="fancybox"><img class="img-responsive" src="public/site/assets/img/mainpage.jpg" alt=""></a>
                    </div>

                </div><!-- /row mt -->	


                <div class="row mt">
                    <!-- SERVER STATUS PANELS -->
                    <div class="col-md-3 mb">
                        <!-- WHITE PANEL - TOP USER -->
                        <div class="white-panel pn">
                            <div class="white-header">
                                <h5>BUFFALO</h5>
                            </div>
                            <p><img src="public/site/assets/img/buffalo.png" class="img-circle" width="80"></p>
                            <p><b>QUANTITY:<?php 
                                    global $conn;
                            $sql2 = "SELECT COUNT(Id)as total FROM animals WHERE Animal_ID = '2' AND Account = '$account'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row2 = mysqli_fetch_assoc($result2);
                                 echo   $total_records2 = $row2['total'];
                                   // echo     $number_buf = db_select_list($sql);  ?></b></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="small mt">RAISED SINCE</p>
                                    <p>2012</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="small mt">TOTAL PRICE</p>
                                    <p>$ <?php 
                                    echo check_price(2)?> </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col-md-4 -->


                    <div class="col-md-3 mb">
                        <!-- WHITE PANEL - TOP USER -->
                        <div class="white-panel pn">
                            <div class="white-header">
                                <h5>CHICKEN</h5>
                            </div>
                            <p><img src="public/site/assets/img/chicken.png" class="img-circle" width="80"></p>
                            <p><b>QUANTITY:
                                <?php
                                global $conn;
                            $sql4 = "SELECT COUNT(Id)as total FROM animals WHERE Animal_ID = '4' AND Account = '$account'";
                                    $result4 = mysqli_query($conn, $sql4);
                                    $row4 = mysqli_fetch_assoc($result4);
                                 echo   $total_records4 = $row4['total'];?></b></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="small mt">RAISED SINCE</p>
                                    <p>2012</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="small mt">TOTAL PRICE</p>
                                    <p>$ <?php 
                                    echo check_price(4)?> </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col-md-4 -->

                    <div class="col-md-3 mb">
                        <!-- WHITE PANEL - TOP USER -->
                        <div class="white-panel pn">
                            <div class="white-header">
                                <h5>COW</h5>
                            </div>
                            <p><img src="public/site/assets/img/cow.png" class="img-rounded" width="80"></p>
                            <p><b>QUANTITY:
                                <?php
                                global $conn;
                            $sql4 = "SELECT COUNT(Id)as total FROM animals WHERE Animal_ID = '3' AND Account = '$account'";
                                    $result4 = mysqli_query($conn, $sql4);
                                    $row4 = mysqli_fetch_assoc($result4);
                                 echo   $total_records4 = $row4['total'];?></b></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="small mt">RAISED SINCE</p>
                                    <p>2013</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="small mt">TOTAL PRICE</p>
                                    <p>$ <?php 
                                    echo check_price(3)?> </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col-md-4 -->
                    
                    <div class="col-md-3 mb">
                        <!-- WHITE PANEL - TOP USER -->
                        <div class="white-panel pn">
                            <div class="white-header">
                                <h5>PIG</h5>
                            </div>
                            <p><img src="public/site/assets/img/pig.png" class="img-circle" width="80"></p>
                             <p><b>QUANTITY:
                                <?php
                                global $conn;
                            $sql4 = "SELECT COUNT(Id)as total FROM animals WHERE Animal_ID = '1' AND Account = '$account'";
                                    $result4 = mysqli_query($conn, $sql4);
                                    $row4 = mysqli_fetch_assoc($result4);
                                 echo   $total_records4 = $row4['total'];?></b></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="small mt">RAISED SINCE</p>
                                    <p>2014</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="small mt">TOTAL PRICE</p>
                                    <p>$ <?php 
                                    echo check_price(1)?> </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col-md-4 -->


                </div><!-- /row -->


                <div class="row">
                    <!-- TWITTER PANEL -->
                    <div class="col-md-4 mb">
                        <!-- INSTAGRAM PANEL -->
                        <div class="instagram-panel pn">
                            <i class="fa fa-users fa-4x"></i>
                            <p>MANAGED BY USERS<br/>
                                Alow many users to manage their farms
                            </p>
                        </div>
                    </div><!-- /col-md-4 -->

                    <div class="col-md-4 mb">
                        <!-- INSTAGRAM PANEL -->
                        <div class="instagram-panel pn">
                            <i class="fa fa-shopping-cart fa-4x"></i>
                            <p>PROVIDING FOOD<br/>
                                Order and buy food for cattle through this Website
                            </p>
                        </div>
                    </div><!-- /col-md-4 -->

                    <div class="col-md-4 mb">
                        <!-- INSTAGRAM PANEL -->
                        <div class="instagram-panel pn">
                            <i class="fa fa-medkit fa-4x"></i>
                            <p>MEDICAL CARE<br/>
                                Warning when diseases outbreak
                            </p>
                        </div>
                    </div><!-- /col-md-4 -->
                </div><!-- /row -->

                <div class="row mt">
                    <!--CUSTOM CHART START -->
                   
<!--                    <div class="custom-bar-chart">
                        <ul class="y-axis">
                            <li><span>10.000</span></li>
                            <li><span>8.000</span></li>
                            <li><span>6.000</span></li>
                            <li><span>4.000</span></li>
                            <li><span>2.000</span></li>
                            <li><span>0</span></li>
                        </ul>
                        <div class="bar">
                            <div class="title">JAN</div>
                            <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">FEB</div>
                            <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">MAR</div>
                            <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">APR</div>
                            <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                        </div>
                        <div class="bar">
                            <div class="title">MAY</div>
                            <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">JUN</div>
                            <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                        </div>
                        <div class="bar">
                            <div class="title">JUL</div>
                            <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                        </div>
                    </div>-->
                    <!--custom chart end-->
                </div><!-- /row -->	

            </div><!-- /col-lg-9 END SECTION MIDDLE -->


            <!-- **********************************************************************************************************************************************************
            RIGHT SIDEBAR CONTENT
            *********************************************************************************************************************************************************** -->                  

            <div class="col-lg-3 ds">
                <!--COMPLETED ACTIONS DONUTS CHART-->
                <h3>NOTIFICATIONS</h3>

                <!-- First Action -->
                <div class="desc">
                    <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div class="details">
                        <p><muted>17 Minutes Ago</muted><br/>
                        <a href="#">buianhvu</a> Buy some food<br/>
                        </p>
                    </div>
                </div>
                <!-- Second Action -->
                <div class="desc">
                    <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div class="details">
                        <p><muted>3 Hours Ago</muted><br/>
                        <a href="#">hoangdinhtuan</a> Sell some cows<br/>
                        </p>
                    </div>
                </div>
                
                <div class="desc">
                    <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div class="details">
                        <p><muted>3 Hours Ago</muted><br/>
                        <a href="#">dinhanhdung</a> Just login and check<br/>
                        </p>
                    </div>
                </div>


                <!-- USERS ONLINE SECTION -->
                <h3>USERS</h3>
                <!-- First Member -->
                <div class="desc">
                    <div class="thumb">
                        <img class="img-circle" src="public/site/assets/img/dung.png" width="35px" height="35px" align="">
                    </div>
                    <div class="details">
                        <p><a href="#">DINH ANH DUNG</a><br/>
                        <muted>Available</muted>
                        </p>
                    </div>
                </div>
                <!-- Second Member -->
                <div class="desc">
                    <div class="thumb">
                        <img class="img-circle" src="public/site/assets/img/vu.png" width="35px" height="35px" align="">
                    </div>
                    <div class="details">
                        <p><a href="#">BUI ANH VU</a><br/>
                        <muted>I am Busy</muted>
                        </p>
                    </div>
                </div>
                <!-- Third Member -->
                <div class="desc">
                    <div class="thumb">
                        <img class="img-circle" src="public/site/assets/img/quang.png" width="35px" height="35px" align="">
                    </div>
                    <div class="details">
                        <p><a href="#">DO NHAT QUANG</a><br/>
                        <muted>Available</muted>
                        </p>
                    </div>
                </div>
                <!-- Fourth Member -->
                <div class="desc">
                    <div class="thumb">
                        <img class="img-circle" src="public/site/assets/img/tuan.png" width="35px" height="35px" align="">
                    </div>
                    <div class="details">
                        <p><a href="#">HOANG DINH TUAN</a><br/>
                        <muted>Available</muted>
                        </p>
                    </div>
                </div>
                
                <!-- CALENDAR-->
                <div id="calendar" class="mb">
                    <div class="panel green-panel no-margin">
                        <div class="panel-body">
                            <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                <div class="arrow"></div>
                                <h3 class="popover-title" style="disadding: none;"></h3>
                                <div id="date-popover-content" class="popover-content"></div>
                            </div>
                            <div id="my-calendar"></div>
                        </div>
                    </div>
                </div><!-- / calendar -->

            </div><!-- /col-lg-3 -->
        </div><! --/row -->
    </section>
</section>

<!--main content end-->
<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2017 - Thefarm.vn
        <a href="index.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>
</html>
<!-- js placed at the end of the document so the pages load faster 
<script src="public/site/assets/js/jquery.js"></script>
<script src="public/site/assets/js/jquery-1.8.3.min.js"></script>
<script src="public/site/assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="public/site/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="public/site/assets/js/jquery.scrollTo.min.js"></script>
<script src="public/site/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="public/site/assets/js/jquery.sparkline.js"></script>


common script for all pages
<script src="public/site/assets/js/common-scripts.js"></script>

<script type="text/javascript" src="public/site/assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="public/site/assets/js/gritter-conf.js"></script>

script for this page
<script src="public/site/assets/js/sparkline-chart.js"></script>    
<script src="public/site/assets/js/zabuto_calendar.js"></script>	-->

<!--

<script type="application/javascript">
    $(document).ready(function () {
    $("#date-popover").popover({html: true, trigger: "manual"});
    $("#date-popover").hide();
    $("#date-popover").click(function (e) {
    $(this).hide();
    });

    $("#my-calendar").zabuto_calendar({
    action: function () {
    return myDateFunction(this.id, false);
    },
    action_nav: function () {
    return myNavFunction(this.id);
    },
    ajax: {
    url: "show_data.php?action=1",
    modal: true
    },
    legend: [
    {type: "text", label: "Special event", badge: "00"},
    {type: "block", label: "Regular event", }
    ]
    });
    });


    function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data("to");
    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>-->


</body>

