# My-Code-Liberary
define( 'WPCF7_VALIDATE_CONFIGURATION', false );




<header class="<?php if ( is_page( 9 ) ) { echo "abt-sec"; } if ( is_page( 13 ) ) { echo "service-sec"; } if ( is_page( 11 ) ) { echo "contact"; }?>">

  <header 
  <?php if ( is_page( 9 ) ) { ?> style="background:url(<?php echo the_field('about_header_background_image'); ?>) no-repeat 0px 0px;" <? }  ?>
  <?php if ( is_page( 13 ) ) { ?> style="background:url(<?php echo the_field('service_background_image'); ?>) no-repeat 0px 0px;" <? }  ?>
  <?php if ( is_page( 11 ) ) { ?> style="background:url(<?php echo the_field('contact_background_image'); ?>) no-repeat 0px 0px;" <? }  ?>
  <?php if ( is_page( 4 ) ) { ?> style="background:url(<?php echo the_field('header_background_image'); ?>) no-repeat 0px 0px;" <? }  ?>>

<div style="background-image: url('http://www.mypicx.com/uploadimg/1312875436_05012011_2.png')"></div>






		<?php
         if (have_posts()) :
          while (have_posts()) : the_post();
          the_content();
          endwhile; endif;

        ?>






register_sidebar( array(
		'name' =>'Facebook Feed',
		'id' => 'facebook feed',
		'before_widget' => '<div class="facebook feed">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
) );

<?php dynamic_sidebar( 'Facebook Feed' ); ?>








<script>
/*Placeholder For Contact Us Form Including Name and Phone Field For reservation Form*/
$("input[name=the-flavour_name]").attr("placeholder", "Name");
$("input[name=the-flavour_email]").attr("placeholder", "Email");
$("input[name=the-flavour_phone]").attr("placeholder", "Phone");
$("textarea[name=the-flavour_comment]").attr("placeholder", "Message");
</script>





 <div class="address-dtl"><span class="address-icon"><img src="http://paccannins.com/wp-content/themes/PacificCannabis/images/location-icon.png" alt=""/></span>
          <p>Pacific Cannabis Insurance  Services<br>
            3845 Via Nona Marie #222411<br>
            Carmel, CA 93922</p>
        </div>
        <div class="address-dtl phone"><span class="address-icon"><img src="http://paccannins.com/wp-content/themes/PacificCannabis/images/phone2.png" alt=""/></span>
          <p class="number">831-578-4566</p>
        </div>
      <div class="address-dtl"><span class="address-icon"><img src="http://paccannins.com/wp-content/uploads/2016/07/img-2.png" alt=""/></span>
          <p><a href="mailto:gene@paccannins.com">gene@paccannins.com</a></p>
        </div>



<p id="demo">demo</p>
<code>
<script>// <![CDATA[
var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; var d = new Date(); var strDate =d.getDate() + " " + monthNames[d.getMonth()] + " " + d.getFullYear() + ", " +dayNames[d.getDay()]; document.getElementById("demo").innerHTML = strDate;
// ]]></script></code>



<p id="demo">demo</p>
<code><script>// <![CDATA[
var now = new Date(); months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']; days = ['Sunday','Monday','Tuesday','Wednesday','Thrusday','Friday','Saturday']; var formattedDate = now.getDate()+" "+months[now.getMonth()]+" "+now.getFullYear()+", "+days[now.getDay()]; document.getElementById("demo").innerHTML = formattedDate;
// ]]></script></code>


 <p id="demo">demo</p>
<code><script>// <![CDATA[
var now = new Date(); var formattedDate = now.getDate()+" "+(now.getMonth()+1)+" "+now.getFullYear(); document.getElementById("demo").innerHTML = formattedDate;
// ]]></script></code>













<?php $results = $wpdb->get_results( "select * from $wpdb->posts where post_type LIKE 'article' AND post_status LIKE 'publish' ORDER BY post_modified DESC ", ARRAY_A );
$args = array(
'post_type' => 'article',
'posts_per_page' => 50,
'orderby' => 'date',
'order' => 'DESC',
'meta_query' => ''
);
$loop = new WP_Query($args); 
 ?>
 <?php while ( $loop->have_posts($posts_array) ) : $loop->the_post();
							$post_article = get_post_custom($post_id); 
/* echo "<pre>"; 
 print_r($post_article);
 echo "</pre>"; */
 //echo $post_article['article_title'] [0];
 //echo $post_article['article_image'] [0];
 //echo $post_article['article_updated_date'] [0];
 //echo $post_article['article_author_name'] [0];
 //echo $post_article['article_description'] [0];
 //echo $post_article['article_sub_description'] [0];
 
							?>
  <?php endwhile; ?>

<div class="article-wrapper">

	<div class="wrapper">

		<div class="article-sec">

        <h3>Articles</h3>

        <div id="owl-demo-02" class="owl-carousel">
 <?php while ( $loop->have_posts($posts_array) ) : $loop->the_post();
							$post_article = get_post_custom($post_id);
							?>
        	<div class="item">

        	<div class="article-box">

            	<div class="article-image">

                	<a href="javascript:void(0)">

                    <img src="<?php echo  get_field("article_image",$post_id);?>" alt="" width="362" height="342" />

                    <span class="link-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue-arrow.png" alt="" width="52" height="52" /></span>

                    </a>

                </div>

                <div class="heading-box">

                	<div class="lft-heading"><h2><?php echo  $post_article['article_title'] [0];?></h2></div>

                    <div class="rt-heading">

                    	<h5><?php echo  $post_article['article_updated_date'] [0];?><br />

  

<a href="javascript:void(0)"><?php echo  $post_article['article_author_name'] [0];?></a></h5>

                    </div>

                </div>

                <h4><?php echo  $post_article['article_description'] [0];?></h4>

<p><?php echo  $post_article['article_sub_description'] [0];?></p>

            	

            </div>

            </div>
			 <?php endwhile; ?>



        </div>

        </div><!--- article-sec end here --->

    </div><!-- wrapper end here --->

</div><!-- article-wrapper end here --->


Note:-Custom field type will be post type















<!------------------------------------------------------------------------->


<?php $cma_thread = $wpdb->get_results( "select * from $wpdb->posts where post_type='cma_thread' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 3", ARRAY_A );
/* echo "<pre>";
echo print_r($cma_thread);
echo "</pre>"; */
?>

<div class="blog-wrapper">

	<div class="wrapper">

		<div class="blog-sec">
		<h5>Forum</h5>
<?php foreach($cma_thread as $cma_threadlist) { 
/* echo "<pre>";
echo print_r($cma_threadlist);
echo "</pre>"; */
echo $cma_threadlist['post_content'];
?>

			<div class="lft-blog-sec">

				<h2><?php echo $cma_threadlist['post_name'];?></h2>

                <div class="update-info">

                	<h3><?php echo $cma_threadlist['post_date'];?> <a href="javascript:void(0)"><?php echo $cma_threadlist['post_author'];?></a></h3>

                </div>

                <h4><?php echo $cma_threadlist['post_content'];?></h4>

<a href="javascript:void(0)" class="readmore-btn">READ MORE</a>

            </div>
<?php } ?>




















<?php $cma_thread = $wpdb->get_results( "select * from $wpdb->posts where post_type='cma_thread' AND post_status = 'publish' ORDER BY post_date DESC LIMIT 3", ARRAY_A );
/* echo "<pre>";
echo print_r($cma_thread);
echo "</pre>"; */
?>

<div class="blog-wrapper">

	<div class="wrapper">

		<div class="blog-sec">
		<h5>Forum</h5>
<?php
$i = 1;
 foreach($cma_thread as $cma_threadlist) { 
/* echo "<pre>";
echo print_r($cma_threadlist);
echo "</pre>"; */
//$cma_threadlist['post_content'];
//echo "hhhhhhhhhhh". $i;
?>


			<div class="<?php if($i==1){ echo "lft-blog-sec";}?> <?php if($i==2){ echo "rt-blog-sec";}?> <?php if($i==3){ echo "rt-blog-sec";}?>">

				<h2><?php echo $cma_threadlist['post_title'];?></h2>

                <div class="update-info">

                	<h3><?php echo $cma_threadlist['post_date'];?> <a href="javascript:void(0)"><?php echo $cma_threadlist['post_author'];?></a></h3>

                </div>

                <h4><?php echo $cma_threadlist['post_content'];?></h4>

<a href="javascript:void(0)" class="<?php if($i==1){ echo "readmore-btn";}?>">READ MORE</a>

            </div>
<?php $i++; } ?>




<!------------------------------------------------------------------------->
