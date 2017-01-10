<?php
/*
*Template Name: New Blog Page
*/ 
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$blog_args = array(
   'post_type' => 'post',
   'posts_per_page' => 4,
   'post_status' => 'publish',
   'paged' => $paged
   );
$blog_query = new WP_Query($blog_args);
remove_filter ('the_content', 'wpautop');
$id=13; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
?><div class="container">
         <div class="row">
            <div class="col-sm-8">
               <div class="left-part">
                  <h2><?php echo $content;?></h2>

                  <?php if($blog_query->have_posts()):?>
                     <?php while($blog_query->have_posts()):$blog_query->the_post();?>
                  <div class="eachblog">
                     <h3><?php echo(strlen(get_the_title())>60)?substr(get_the_title(),0,60).'...':get_the_title();?></h3>
                     <span><?php echo get_the_date('F d, Y');?></span>
                     <p><?php echo(strlen(get_the_content())>300)?substr(get_the_content(),0,300).'...':get_the_content();?>
                     </p>
                     <div class="social-share"><?php echo do_shortcode('[wp_social_sharing show_icons="1"]');?></div>
                     <a class="readmore" href="<?php echo get_permalink(get_the_ID());?>">Read More</a>
                  </div>
                     <?php endwhile;?>
                  <?php endif;?>
                  <div class="clear"></div>
                 
                  <div class="pagination-div">
                     <!--  <ul>
                        <li><a href="#">Newer</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Older</a></li>
                     </ul>  -->
                      <?php
                     $big = 999999999; // need an unlikely integer
                      
                     echo paginate_links( array(
                         'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                         'format' => '?paged=%#%',
                         'current' => max( 1, get_query_var('paged') ),
                         'total' => $blog_query->max_num_pages,
                         'prev_text' => __('Newer'),
                         'next_text' => __('Older'),
                     ) );
                     ?>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="contact-us">
                  <h2>Contact Us</h2>
                  <h3>Reassuring Reverse Mortgages</h3>
                  <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]');?> 
               </div>
            </div>
         </div>
      </div>
      <div class="clear"></div>
      <div class="container-fluid">
         <div class="row">
            <div class="contact-ribbon">
               <h1>Are You Prepared to Survive Retirement?</h1>
               <div class="contact-btn"><a href="#">Contact Us</a></div>
            </div>
         </div>
      </div>
      <?php get_footer();?>