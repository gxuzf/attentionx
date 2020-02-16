<?php
/**
 * 极简风格响应式主题。
 * @package AttentionX
 * @author Taolinxs && FlyGoat
 * @version 1.0
 * @link https://github.com/FlyGoat/Typecho-Theme-AttentionX
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div id="main">
	<!-- Introduction -->
	<?php while($this->next()): ?>
		<section id="intro" class="main">
			<div class="spotlight">
				<div class="content">
					<header class="major">
						<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2><h5><?php $this->date('Y-m-d'); ?> &nbsp;&nbsp;<?php $this->category(','); ?></h5>
					</header>
					<div class="content_p">
						<p><?php $this->content('阅读全文...'); ?></p>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</div>
<center>
	<br>
	<?php $this->pageLink('下一页','next'); ?>
	<?php $this->pageLink('上一页'); ?>
</center>
<?php $this->need('footer.php'); ?>