<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div id="main">

        <div class="error-page">
            <h1 class="post-title">404 - <?php _e('页面没找到'); ?></h1>
            <p><?php _e('您想查看的页面已被转移或删除'); ?></p>
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
