<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/text.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/grid.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/layout.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/nav.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl;?>/css/uni-form.css" media="screen" />
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
                            <?php $this->widget('zii.widgets.CMenu',array(
                                    'items'=>array(
                                            array('label'=>'Home', 'url'=>array('/site/index')),
                                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'secondary')),
                                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'secondary'))
                                    ),
                                    'htmlOptions'=>array('class'=>'nav main'),
                            )); ?>
			</div>
			<div class="clear"></div>
                        
                        <div id="content">
                            <?php echo $content;?>
                        </div>
			<div class="clear"></div>

                        <div class="grid_16" id="footer">
                            &copy; 2010 Dals, MIT License
                        </div>
                        <div class="clear"></div>
		</div>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/jquery-fluid16.js"></script>
		<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl;?>/js/uni-form.jquery.js"></script>
	</body>
</html>