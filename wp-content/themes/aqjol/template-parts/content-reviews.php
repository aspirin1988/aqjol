
<!-- ОТЗЫВЫ -->
<div class="container reviews">
	<h3 class="text-center"><?=get_the_title()?></h3>
<?php $comments=get_comments(); echo get_the_post_thumbnail_url($comments[0]->post_author) ?>

	<article class="row">
		<img class="avatar" src="images/reviews/shevchenko.jpg" alt="Ава">
		<div class="review-text">
			<h4>Имя автора</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid beatae dolor id in, mollitia
				officia quia quidem suscipit totam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eaque
				iure
				magnam omnis quis. Assumenda aut consectetur corporis culpa debitis dolore eius eligendi, harum magnam,
				minus perferendis quae, tempora?</p></div>
		<p class="date">11.11.11</p>
	</article>

	<article class="row">
		<img class="avatar" src="images/reviews/shevchenko.jpg" alt="Ава">
		<div class="review-text">
			<h4>Имя автора</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid beatae dolor id in, mollitia
				officia quia quidem suscipit totam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eaque
				iure
				magnam omnis quis. Assumenda aut consectetur corporis culpa debitis dolore eius eligendi, harum magnam,
				minus perferendis quae, tempora?</p></div>
		<p class="date">11.11.11</p>
	</article>

	<article class="row">
		<img class="avatar" src="images/reviews/shevchenko.jpg" alt="Ава">
		<div class="review-text">
			<h4>Имя автора</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid beatae dolor id in, mollitia
				officia quia quidem suscipit totam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eaque
				iure
				magnam omnis quis. Assumenda aut consectetur corporis culpa debitis dolore eius eligendi, harum magnam,
				minus perferendis quae, tempora?</p></div>
		<p class="date">11.11.11</p>
	</article>


</div>
<!-- конец ОТВЕТЫ -->

<!-- ОСТАВИТЬ ОТЗЫВ (стили берутся из такой же формы "задать вопрос" на странице вопросы/ответы) -->
<div class="container ask">
	<div class="row">
		<div class="col-lg-12">
			<h3>Задать вопрос</h3>
			<form action="">
				<input type="text" class="name" placeholder="Имя">
				<input type="email" class="email" placeholder="E-mail">
				<textarea name="ask" id="ask" rows="10" placeholder="Введите свой отзыв"></textarea>
				<input type="submit" class="gen-button" value="Отправить">
			</form>
		</div>
	</div>
</div>
<!-- конец ОСТАВИТЬ ОТЗЫВ (стили берутся из такой же формы "задать вопрос" на странице вопросы/ответы) -->
