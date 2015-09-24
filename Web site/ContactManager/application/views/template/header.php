<!DOCTYPE HTML>
<html lang="en">
    <head>
	    <!-- start: Meta -->
	    <meta charset="utf-8">
        <title>SLIIT Extension Management System</title>
	    <meta name="apple-mobile-web-app-capable" content="yes"/>
	    <meta name="description" content="SimpliQ - Flat &amp; Responsive Bootstrap Admin Template.">
	    <meta name="author" content="Laky Sam">
	    <meta name="keyword" content="Test, Sample, Help">
	    <!-- end: Meta -->
	
	    <!-- start: Mobile Specific -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- end: Mobile Specific -->
	
	    <!-- start: CSS -->
        <link rel="stylesheet" href="<?php echo $base_url ?>assets/datatables/css/jquery.dataTables.css">
        <link rel="stylesheet" href="<?php echo $base_url ?>assets/chosen/chosen.css">

	    <!--link href="http://beta20.fidenz.com/simReg/simreg/assets/css/bootstrap.min.css" rel="stylesheet"-->
	    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo $base_url ?>assets/bootstrap/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo $base_url ?>assets/bootstrap/css/bootstrap-theme.min.css">

        
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/custom.css">
        <link rel="stylesheet" href="<?php echo $base_url ?>assets/fontawesome/css/font-awesome.min.css">
	    <!-- end: CSS -->

        <!-- start: JS -->
        <script src="<?php echo $base_url ?>assets/js/jquery-2.1.0.min.js"></script>
        <script src="<?php echo $base_url ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $base_url ?>assets/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo $base_url ?>assets/chosen/chosen.jquery.js"></script>
        <!-- end: JS-->

    </head>
    <body>

        <div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">                <!--start: Top Navigation-->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav class="navbar navbar-default" role="navigation">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">SLIIT Extension Management System</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <!--ul class="nav navbar-nav">
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                              </ul>
                            </li>
                          </ul-->
                          <!--form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form-->
                          <ul class="nav navbar-nav navbar-right">
                            <!--li><a href="#">Link</a></li-->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, admin <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <!--li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li-->
                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
                <!--end: Top Navigation-->

                <!--start: Content Container-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                        <!--start: Left Nivagation-->
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                               <!--     
                                <div class="list-group">
                                    <a data-nav="pending" href="<?php echo $base_url ?>/index.php/jobs/pending" class="list-group-item "><span class="badge">15</span> Pending Jobs</a>
                                    <a data-nav="completed" href="http://beta20.fidenz.com/simReg/simreg/index.php/jobs/completed" class="list-group-item"> Completed Jobs</a>
                                </div>-->
                                <div class="list-group">
                                    <a data-nav="groups" href="<?php echo $base_url ?>index.php/groups" class="list-group-item"> Groups</a>
                                    <a data-nav="persons" href="<?php echo $base_url ?>index.php/persons" class="list-group-item"> Persons</a>
                                    <a data-nav="extensions" href="<?php echo $base_url ?>index.php/extensions" class="list-group-item"> Extensions</a>
                                    <a data-nav="locations" href="<?php echo $base_url ?>index.php/locations" class="list-group-item"> Locations</a>
                                    </br>
                                     <a data-nav="extmaps" href="<?php echo $base_url ?>index.php/extmap" class="list-group-item"> Assign Extensions</a>
                                </div>

                            </div>
                        <!--end: Left Nivagation-->
                        
                        <!--start: Dynamic Content-->
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">