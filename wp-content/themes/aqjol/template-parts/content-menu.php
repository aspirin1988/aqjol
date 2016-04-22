<?php
$categories = get_category_by_slug('menu');
$args = array(
	'type'         => 'post',
	'child_of'     => $categories->term_id,
	'parent'       => '',
	'orderby'      => 'ID',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'taxonomy'     => 'category',
	'pad_counts'   => false,
);
$categories = get_categories( $args );
?>
<!-- МЕНЮ -->
<div class="container menu">
	<h3 class="text-center">Меню</h3>
	<div class="row">
		<?php foreach($categories as $value): $args = array( 'posts_per_page' =>10, 'cat'=> $value->cat_ID ); $post=get_posts($args); ?>
		<div class="col-sm-6">
			<div class="img-container">
				<img src="<?=get_the_post_thumbnail_url($post[0]->ID)?>" alt="Меню">
				<h2><?=$value->post_title?></h2>
			</div>
			<?php  foreach($post as $val): ?>
				<a href="<?=get_permalink($val->ID)?>"><p><?=$val->post_title?><span><?=get_field('price',$val->ID)?></span></p></a>
				<?php endforeach; ?>
		</div>
		<?php endforeach; ?>


	</div>
</div>
<!-- конец МЕНЮ -->