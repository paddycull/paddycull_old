
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
	
		<title>Patrick Cull - Blog</title>
	<meta name="keywords" content="patrick, cull, blog, patrick cull, web developer, ireland">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

jQuery(document).ready(function($){

   $(".entry").hide();

   $(".post-header").click(function(){

$(this).parent().children(".entry").slideToggle();
})
});

jQuery(document).ready(function($){

   $(".allcomments").hide();

   $(".showcomments").click(function(){

$(this).parent().children(".allcomments").slideToggle();
})
});



</script>


</head>

<body>
	<div class="nav">
		<div class="items">
			<a href="index.html"><div class="nav-item">Home</div></a>
			<a href="blog.php"><div class="current nav-item">Blog</div></a>
			<a href="contact.html"><div class="nav-item">Contact</div></a>
		</div>
	</div>
	<div class="shadow"></div>
	
<?php
require('blog/wp-blog-header.php');
?>
<div class="content">
	<div class = "header">My Blog</div>
	
	<div class="sub-header">
	This is the my blog. Feel free to read any of the posts, and feedback is always appreciated!
	</div>

	<div class="blog">
		 <!-- Start the Loop. -->
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		 
		 <div class="post">
		


		 <!-- Display the Title as a link to the Post's permalink. -->
		<div class="post-header">
			<div class="post-title">
				<?php the_title_attribute(); ?>
			</div>


			 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

			 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

		</div>
		 <!-- Display the Post's content in a div box. -->

		 <div class="entry" >
		   <?php the_content();?>

		 </div>

		 </div> <!-- closes the first div box -->



		 <!-- Stop The Loop (but note the "else:" - see next line). -->

		 <?php endwhile; else: ?>


		 <!-- The very first "if" tested to see if there were any Posts to -->
		 <!-- display.  This "else" part tells what do if there weren't any. -->
		 <p>Sorry, no posts matched your criteria.</p>


		 <!-- REALLY stop The Loop. -->
		 <?php endif; ?>
	</div>
	<br clear="all" />
</div>