<?php

include "func/config.php";
session_start();

if(!isset($_SESSION["uname"]) || $_SESSION["uname"] !=true ) {
  header("location:signin.php");
 exit;
 
}
 ?>

<?php 
  $sql = "select  count(*) as cntUser   from user";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

   $count = $row['cntUser'];
  //  $sedan = $row['sedan'];
  //  $fwd = $row['fwd'];
  //  $sports = $row['sports'];
  //  $suv = $row['suv'];

  //  $mileage1 = $row['mileage1'];
  //  $mileage2 = $row['mileage2'];
  //  $mileage3 = $row['mileage3'];

  //  $performance1 = $row['performance1'];
  //  $performance2 = $row['performance2'];
  //  $performance3 = $row['performance3'];

    // $sql2=    "select  SUM(CASE WHEN result = 'Complete Fuel System Cleaner' THEN 1 ELSE 0 END) AS complete, SUM(CASE WHEN result = 'High Mileage Fuel & Carburettor Treatment' THEN 1 ELSE 0 END) AS high_mileage, SUM(CASE WHEN result = ' Super Concentrate Injector Cleaner' THEN 1 ELSE 0 END) AS super_concentrate FROM survey_data";
    // $result2 = mysqli_query($conn,$sql2);
    // $row2 = mysqli_fetch_array($result2);
    // $complete_fuel = $row2['complete'];
    // $high_mileage = $row2['high_mileage'];
    // $super_concentrate = $row2['super_concentrate'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>STP Dashboard</title>
    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="css/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="css/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/ionicons/css/ionicons.min.css" type="text/css" />
    <link rel="stylesheet" href="css/simple-line-icons/css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

    <!-- build:css css/styles/app.min.css -->
    <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
    <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
</head>

<body>
    <div class="app" id="app">

        <!-- ############ LAYOUT START-->

        <!-- aside -->
        <div id="aside" class="app-aside fade nav-dropdown black">
            <!-- fluid app aside -->
            <div class="navside dk" data-layout="column">
                <div class="navbar no-radius">
                    <!-- brand -->
                    <a href="dashboard.php" class="navbar-brand">
                        <div data-ui-include="'images/logo.svg'"></div>
                        <img src="images/logo.png" alt="." class="hide">
                        <span class="hidden-folded inline">STP</span>
                    </a>
                    <!-- / brand -->
                </div>
                <div data-flex class="hide-scroll">
                    <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

                        <ul class="nav" data-ui-nav>
                            <li class="nav-header hidden-folded">
                                <span class="text-xs">Main</span>
                            </li>
                            <li>
                                <a href="dashboard.php" class="b-danger">
                                    <span class="nav-icon text-white no-fade">
                                        <i class="ion-filing"></i>
                                    </span>
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="datatable.html" class="b-success">
                                    <span class="nav-icon text-white no-fade">
                                        <i class="ion-android-apps"></i>
                                    </span>
                                    <span class="nav-text">Survey Data</span>
                                </a>
                            </li>

                        </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
                <div data-flex-no-shrink>
                    <div class="nav-fold dropup">
                        <a data-toggle="dropdown">
                            <div class="pull-left">
                                <div class="inline"><span class="avatar w-40 grey">A</span></div>
                                <img src="images/a0.jpg" alt="..." class="w-40 img-circle hide">
                            </div>
                            <div class="clear hidden-folded p-x">
                                <span class="block _500 text-muted">Admin</span>
                                <div class="progress-xxs m-y-sm lt progress">
                                    <div class="progress-bar info" style="width: 15%;">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu w dropdown-menu-scale ">
                            <!--   <a class="dropdown-item" href="profile.html">
              <span>Profile</span>
            </a>
            <a class="dropdown-item" href="setting.html">
              <span>Settings</span>
            </a>
            <a class="dropdown-item" href="app.inbox.html">
              <span>Inbox</span>
            </a>
            <a class="dropdown-item" href="app.message.html">
              <span>Message</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="docs.html">
              Need help?
            </a> -->
                            <a class="dropdown-item" href="templates/logout.php">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / -->

        <!-- content -->
        <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
            <div class="app-header white bg b-b">
                <div class="navbar" data-pjax>
                    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                        <i class="ion-navicon"></i>
                    </a>
                    <div class="navbar-item pull-left h5" id="pageTitle">Dashboard</div>
                    <!-- nabar right -->
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item dropdown pos-stc-xs">
                            <!--  <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-search w-24"></i>
                    </a> -->
                            <div class="dropdown-menu text-color w-md animated fadeInUp pull-right">
                                <!-- search form -->
                                <!--     <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                        <div class="form-group l-h m-a-0">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search projects...">
                            <span class="input-group-btn">
                              <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </form> -->
                                <!-- / search form -->
                            </div>
                        </li>
                        <li class="nav-item dropdown pos-stc-xs">

                            <!-- dropdown -->
                            <div class="dropdown-menu pull-right w-xl animated fadeIn no-bg no-border no-shadow">
                                <div class="scrollable" style="max-height: 220px">
                                    <ul class="list-group list-group-gap m-a-0">
                                        <li class="list-group-item dark-white box-shadow-z0 b">
                                            <span class="pull-left m-r">
                                                <img src="images/a0.jpg" alt="..." class="w-40 img-circle">
                                            </span>
                                            <span class="clear block">
                                                Use awesome <a href="#" class="text-primary">animate.css</a><br>
                                                <small class="text-muted">10 minutes ago</small>
                                            </span>
                                        </li>
                                        <li class="list-group-item dark-white box-shadow-z0 b">
                                            <span class="pull-left m-r">
                                                <img src="images/a1.jpg" alt="..." class="w-40 img-circle">
                                            </span>
                                            <span class="clear block">
                                                <a href="#" class="text-primary">Joe</a> Added you as friend<br>
                                                <small class="text-muted">2 hours ago</small>
                                            </span>
                                        </li>
                                        <li class="list-group-item dark-white text-color box-shadow-z0 b">
                                            <span class="pull-left m-r">
                                                <img src="images/a2.jpg" alt="..." class="w-40 img-circle">
                                            </span>
                                            <span class="clear block">
                                                <a href="#" class="text-primary">Danie</a> sent you a message<br>
                                                <small class="text-muted">1 day ago</small>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / dropdown -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link clear" data-toggle="dropdown">
                                <span class="avatar w-32">
                                    <img src="images/a3.jpg" class="w-full rounded" alt="...">
                                </span>
                            </a>
                            <div class="dropdown-menu w dropdown-menu-scale pull-right">

                                <a class="dropdown-item" href="signin.php">Sign out</a>
                            </div>
                        </li>
                    </ul>
                    <!-- / navbar right -->
                </div>
            </div>
            <div class="app-footer white bg p-a b-t">

            </div>
            <div class="app-body">

                <!-- ############ PAGE START-->
                <div class="row-col">
                    <div class="col-lg b-r">
                        <div class="row no-gutter">
                            <div class="col-xs-6 col-sm-6 b-r b-b">
                                <div class="padding">
                                    <div>
                                        <!-- <span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-ios-grid-view text-muted"></i></span> -->
                                    </div>
                                    <div class="text-center">
                                        <h2 class="text-center _600">100</h2>
                                        <p class="text-muted m-b-md">Vistors</p>
                                        <div>
                                            <!-- 	<span data-ui-jp="sparkline" data-ui-options="[2,3,2,2,1,3,6,3,2,1], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 b-r b-b">
                                <div class="padding">
                                    <div>
                                        <!-- <span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-document text-muted"></i></span> -->
                                    </div>
                                    <div class="text-center">
                                    <h2 class="text-center _600"><?php echo $count;?></h2>
                                        <p class="text-muted m-b-md">Registered Users</p>
                                        <div>
                                            <!-- <span data-ui-jp="sparkline" data-ui-options="[1,1,0,2,3,4,2,1,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                        <div class="padding">
                           

                        
                            <br>


                            <div class="box">
                                <div class="box-header b-b">
                                    <h3>Survey Status</h3>
                                </div>
                               
                                  <div class="table-responsive" id="datatable">
                                        <table data-ui-jp="dataTable" data-ui-options="{

            sAjaxSource: 'func/table_data.php',
          lengthChange: false,
          sAjaxDataProp: '',
         
          aoColumns: [
            
            { mData: 'first_name' },
             { mData: 'sur_name' },
              { mData: 'email' },
              { mData: 'barcode' },
               { mData: 'receipt' ,
                'render': function (url,type,full) {
             return '<img  src=../assets/uploads/' + full.receipt + ' width=auto height=150px;>';
       } },

              
               { mData: 'city' }, 
             
             
           
          ],
          'initComplete': function () {
            this.api().buttons().container()
              .appendTo( '#datatable .col-md-6:eq(0)' );
          }
        }" class="table table-striped b-t b-b">
                                            <thead>
                                                <tr>
                                                    <th style="width:10%">First Name</th>
                                                    <th style="width:10%">Last Name</th>
                                                    <th style="width:15%">Email</th>
                                                    <th style="width:20%">Barcode</th>
                                                    <th style="width:30%">Receipt</th>
                                                    <th style="width:10%">City</th>
                                                   


                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                </div>
                            </div>

                        </div>



                    </div>
                

            </div>



            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->


    <!-- ############ SWITHCHER START-->

    <!-- ############ SWITHCHER END-->

    <!-- ############ LAYOUT END-->
    </div>

    <!-- build:js scripts/app.min.js -->
    <!-- jQuery -->
    <script src="libs/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="libs/tether/dist/js/tether.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="libs/PACE/pace.min.js"></script>
    <script src="libs/jquery-pjax/jquery.pjax.js"></script>
    <script src="libs/blockUI/jquery.blockUI.js"></script>
    <script src="libs/jscroll/jquery.jscroll.min.js"></script>

    <script src="scripts/config.lazyload.js"></script>
    <script src="scripts/ui-load.js"></script>
    <script src="scripts/ui-jp.js"></script>
    <script src="scripts/ui-include.js"></script>
    <script src="scripts/ui-device.js"></script>
    <script src="scripts/ui-form.js"></script>
    <script src="scripts/ui-modal.js"></script>
    <script src="scripts/ui-nav.js"></script>
    <script src="scripts/ui-list.js"></script>
    <script src="scripts/ui-screenfull.js"></script>
    <script src="scripts/ui-scroll-to.js"></script>
    <script src="scripts/ui-toggle-class.js"></script>
    <script src="scripts/ui-taburl.js"></script>
    <script src="scripts/app.js"></script>
    <script src="scripts/ajax.js"></script>
    <!-- endbuild -->
</body>

</html>