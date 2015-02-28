<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post Admin</title>
	<link type="text/css" href="<?php echo $this->html->url('/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->html->url('/bootstrap/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->html->url('/css/theme.css'); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->html->url('/images/icons/css/font-awesome.css'); ?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#">Articles</a>
                   
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                
				<div class="row">
						
                    <div class="span3">
					 <?php if(!empty($catmenu)) 
				$sr =1; 
				{
				foreach($catmenu as $find){
				
				?>
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo $this->html->url('/showcategorypost?category_id='.$find['Home']['category_id']); ?>"><i class="menu-icon icon-dashboard"></i><?php echo $find['Home']['categoryname']; ?>
                                </a></li>
                               
                                
								
							
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                         
                            <!--/.widget-nav-->
                          <?php }
					}?>	
                        </div>
                      
				  <!--/.sidebar-->
                    </div>
					
                    <!--/.span3-->
                    <div class="span9">
					<div class="content">
					<?php echo $content_for_layout; ?>
					      </div>
                           </div>
						  <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; <?php echo date("Y"); ?> Articles </b>All rights reserved.
            </div>
        </div>
        <script src="<?php echo $this->html->url('/scripts/jquery-1.9.1.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $this->html->url('/scripts/jquery-ui-1.10.1.custom.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $this->html->url('/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $this->html->url('/scripts/flot/jquery.flot.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $this->html->url('/scripts/flot/jquery.flot.resize.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $this->html->url('/scripts/datatables/jquery.dataTables.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo $this->html->url('/scripts/common.js'); ?>" type="text/javascript"></script>
      
    </body>
