<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Articles Admin</title>
	<link type="text/css" href="<?php echo $this->html->url('/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->html->url('/bootstrap/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->html->url('/css/theme.css'); ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo $this->html->url('/images/icons/css/font-awesome.css'); ?>" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<div id="google_translate_element" ></div>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>	</head>
 
	</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#">Articles Admin</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                       
                        <ul class="nav pull-right">
                           
                           <?php
				$adminname=$this->Session->read('Admin.name');
			  ?>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       <?php
				echo $this->Session->read('Admin.name');
			  ?>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                  
                                    <li><a href="<?php echo $this->Html->url('/admin/editprofile');?>">Edit Profile</a></li>
                                    
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $this->html->url('/admin/logout'); ?>"">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo $this->html->url('/admin');?>"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="<?php echo $this->html->url('/admin/categories');?>"><i class="menu-icon icon-list"></i>Categories List </a>
                                </li>
								
                                
									 <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Posts </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        
                                        <li><a href="<?php echo $this->html->url('/admin/posts');?>"><i class="menu-icon icon-list"></i> Posts List</a></li>
                                        <li><a href="<?php echo $this->html->url('/admin/addpost');?>"><i class="menu-icon icon-plus"></i>Add Post </a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo $this->html->url('/admin/logout'); ?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
							
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                         
                            <!--/.widget-nav-->
                          
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
                <b class="copyright">&copy; <?php echo date("Y"); ?> Articles Admin </b>All rights reserved.
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
