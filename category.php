<?php 
get_header();

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'seikuo-sim',
    ),
  ),
);
$posts = new WP_Query( $args );
// echo '<pre>';
// print_r($posts->posts);
// echo '</pre>';

?>


<div class="wrap border-bottom pb-1em">
	<div class="content-news">
<?php if ($posts->have_posts()) : ?>
    <?php while ($posts->have_posts()) : $posts->the_post(); ?>
        <div class="news-detail">
            <div class="info-post">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            <div class="clear"></div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
	</div>
</div>

<?php
get_footer();
?>