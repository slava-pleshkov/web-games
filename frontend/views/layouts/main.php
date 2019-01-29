<?php
/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use frontend\widgets\IconsWidget;
use frontend\widgets\SettingWidget;
use frontend\widgets\BannersWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body class="is-preload">
<?php $this->beginBody() ?>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            <header id="header">
                <a href="<?= Url::to(['site/index']); ?>" class="logo"><strong><?= Yii::$app->name ?></strong></a>
				<?= IconsWidget::widget() ?>
            </header>
			<?= $content ?>
        </div>
    </div>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">
            <!-- Search -->
			<?= $this->render('partials/_search'); ?>

			<?= $this->render('partials/_nav.php'); ?>

			<?= BannersWidget::widget(); ?>

			<?= SettingWidget::widget(); ?>

			<?= $this->render('partials/_footer'); ?>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

