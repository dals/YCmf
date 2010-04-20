<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Fluid 960 Grid System | 16-column Grid</title>
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/text.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/grid.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/layout.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/nav.css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="/<?=Yii::app()->theme->baseUrl;?>/css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="/<?=Yii::app()->theme->baseUrl;?>/css/ie.css" media="screen" /><![endif]-->
	</head>
	<body>
		<div class="container_16">
			<div class="grid_16">
				<h1 id="branding">
					<a href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
				</h1>
			</div>
			<div class="clear"></div>
			<div class="grid_16">
				<ul class="nav main">
					<li>
						<a href="../../../12/">Fluid 12-column</a>
						<ul>
							<li>
								<a href="../../../12/fluid/mootools/">MooTools</a>
							</li>
							<li>
								<a href="../../../12/fluid/jquery/">jQuery</a>
							</li>
							<li>
								<a href="../../../12/fluid/none/">No Javascript</a>
							</li>
						</ul>
					</li>
					<li class="secondary">
						<a href="http://960.gs/" title="960.gs | A CSS grid system developed by Nathan Smith">The 960 Grid System</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
                        <?php echo $content;?>
			<div class="clear"></div>
		</div>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/jquery-ui.js"></script>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/jquery-fluid16.js"></script>
	</body>
</html>