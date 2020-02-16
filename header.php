<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title><?php $this->archiveTitle(array(
		'category'  =>  _t(' %s 下的文章'),
		'search'    =>  _t('包含关键字 %s 的文章'),
		'tag'       =>  _t('标签 %s 下的文章'),
		'author'    =>  _t('%s 发布的文章')
		), '', ' - '); ?><?php $this->options->title(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/ie9.css'); ?>" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/ie8.css'); ?>" /><![endif]-->
<?php $this->header(); ?>
	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<span class="logo"><a href="<?php $this->options->siteUrl(); ?>"><img class="logo_pic" src="<?php $this->options->themeUrl('images/logo.jpg'); ?>" alt="" width="100"/></a></span>
				<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
				<p><?php $this->options->description() ?></p>
			</header>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
					 <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</nav>

		