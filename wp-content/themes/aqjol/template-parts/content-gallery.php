
<!-- ГЛАВНЫЙ РАЗДЕЛ -->
<div class="main-section gallery text-center">
	<div class="container">
		<h3 class="center-text"><?=the_title()?></h3>
		<br>
		<img class="img-responsive main-image" src="<?=get_the_post_thumbnail_url()?>" alt="Интерьер">
		<div class="link-captions">
			<?php $gallery=get_galls(); foreach($gallery as $value):?>
			<p class="<?php if (!$key) echo'selected';?>" ><a href="#<?=$value['gallerey']?>" data-toggle="tab"><?=$value['gallerey']?></a></p>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- конец ГЛАВНЫЙ РАЗДЕЛ -->

<!-- Tab panes -->
<div class="tab-content">
	<?php foreach($gallery as $key=>$value):?>
	<div class="tab-pane <?php if (!$key) echo'active';?> " id="<?=$value['gallerey']?>">
		<div class="container heading-and-breadcrumbs">
			<h2><?=$value['gallerey']?></h2>
			<p>
				<span><a href="/">Главная</a></span> >
				<span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span> >
				<span><a class="gallery" href="#">Зал торжеств</a></span>
			</p>
		</div>
		<div class="container photolist">
		<?php $image=get_gall($value['gallerey']); foreach($image as $key1=>$value1):?>
			<div class="col-sm-4">
				<a href="#" data-toggle="modal" data-target="#galleryModal"><img data-id="<?=$key1?>" class="img-responsive" src="<?=$value1['path']?>" alt="Интерьер"></a>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<!-- MODAL -->
<div class="modal fade" id="galleryModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content--> <!--модалка привязана к первой фотке, после портирования шаблона удалить этот коммент-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Название фото</h4>
			</div>
			<div class="modal-body">
				<img class="img-responsive" src="images/gallery/photo-item.jpg" alt="Интерьер">
				<a id="pref" href="#"><img src="<?php bloginfo('template_directory') ?>/public/images/gallery/arrow-left.png" alt="Предыдущая" class="arrow left"></a>
				<a id="next" href="#"><img src="<?php bloginfo('template_directory') ?>/public/images/gallery/arrow-right.png" alt="Предыдущая" class="arrow right"></a>
			</div>
		</div>

	</div>
</div>
<!-- конец MODAL -->