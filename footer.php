<div id="footer" class="container">
        <span><p><a href="<?php bloginfo('url');?>"<?php bloginfo('name');?></a>
        	&copy; 2016 menggunakan <a href="http://wordpress.com">Wordpress</a></br>
        	<?php if (!is_home()) { wp_title(''); } ?></p></span>
     </div>
    </div>
   
   <?php wp_footer(); ?>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.min.js"></script> 
	<script src="<?php bloginfo('template_url');?>/owl-carousel/owl.carousel.js"></script>

<script>
$(document).ready(function() {
  $("#owl-demo").owlCarousel({
       navigation : false,
       slideSpeed : 300,
       paginationSpeed : 400,
       singleItem : true,
       autoPlay:true
  });
});
</script>
</body>
</html>