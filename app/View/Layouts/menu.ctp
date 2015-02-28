<!doctype html>
<html>
<head>

  <meta charset="utf-8">

    <title>Off-Canvas Sliding Navigation</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Samuel Dalusung for Designmodo" name="author" >

    <!-- Styles -->
    <link href="<?php echo $this->html->url('/css/reset.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->html->url('/css/style.css'); ?>" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 <meta name="robots" content="noindex,follow" />


    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
  <div id="container">

        <div id="canvas">
	
<div id="nav">

                    <h2 id="title"><i class="fa fa-sitemap"></i> Categories </h2>
                         <ul id="toggle">
						 <?php if(!empty($catemenu)) 
				$sr =1; 
				{
				foreach($catmenu as $find){
				
				?>
        <li>
            <div class="border">
                <span class="menu-icons fa fa-home"></span><a href="<?php echo $this->html->url('/posts?category_id='.$find['Article']['category_id']); ?>"><?php echo $find['Article']['categoryname']; ?></a>
            </div>
		
        </li>
<?php  
			 }
} ?>
</ul>
    
             </div>

            <a href="#" class="toggle-nav" id="bars"><i class="fa fa-bars"></i></a>


            
           
            <?php echo $content_for_layout; ?>
       </div>

    </div>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo $this->html->url('/js/custom.js'); ?>"></script>

</body>
</html>
