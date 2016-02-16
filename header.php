<html>
<style type="text/css">
  #header {
    background : url(<?php header_image(); ?>) no-repeat center center fixed; 
     -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
  }

  .blogtitle a, .description {
    color: <?php header_textcolor(); ?>
  }
 </style>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head();
	?>

</head>
<body>

      <div id="wrap">
      	<div id="header">
       	<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	      
		      <div id="menu">
		      	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		      </div>
		     
		     </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="container desnam">
			<h1 class="blogtitle"><?php bloginfo( 'name' );?></h1>
			<p class="description"><?php bloginfo( 'description' ); ?></p>
		</div>
		</div>