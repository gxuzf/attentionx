<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main">

	<!-- Introduction -->
	<section id="intro" class="main">
		<div class="spotlight">
			<div class="content">
				<header class="major">
					<h2><?php $this->title() ?></h2><h5><?php $this->date('Y-m-d'); ?> &nbsp;&nbsp;<?php $this->category(','); ?></h5>
				</header>
				<div class="content_p">
				<p><?php $this->content(); ?></p>
				</div>
				<p id="tags_post">
					标签: <?php $this->tags(' ', true, 'none'); ?>
				</p>
				<p id="prev_next">
					<span id="theprev">上一篇：<?php $this->thePrev('%s','<span>没有更多了</span>'); ?></span>
					<span id="thenext">下一篇：<?php $this->theNext('%s','<span>没有更多了</span>'); ?></span>
				</p>
			</div>

		</div>
		<?php $this->need('comments.php'); ?>
	</section>
	
</div>

<?php $this->need('footer.php'); ?>