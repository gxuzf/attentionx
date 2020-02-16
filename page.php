<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main">

	<!-- Introduction -->
	<section id="intro" class="main">
		<div class="spotlight">
			<div class="content">
				<header class="major">
					<h2><?php $this->title() ?></h2>
				</header>
				<div class="content_p">
				<p><?php $this->content(); ?></p>
				</div>

			</div>

		</div>
		<?php if($this->allow('comment')): 
	$this->need('comments.php');
endif;
?>
	</section>
</div>


<?php $this->need('footer.php'); ?>