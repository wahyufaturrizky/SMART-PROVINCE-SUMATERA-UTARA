<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use mdm\admin\components\MenuHelper;
use yii\helpers\Url;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->registerCsrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        
        <link href="/images/favicon.ico" rel="icon" />
	</head>

	<body class="bg-gradient-primary">
		<?php $this->beginBody() ?>
        <div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    // $menuItems = [
    //     ['label' => 'Home', 'url' => ['/site/index']],
    // ];
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    // } else {
    //     // $menuItems[] = '<li>'
    //     //     . Html::beginForm(['/site/logout'], 'post')
    //     //     . Html::submitButton(
    //     //         'Logout (' . Yii::$app->user->identity->username . ')',
    //     //         ['class' => 'btn btn-link logout']
    //     //     )
    //     //     . Html::endForm()
    //     //     . '</li>';
    // }
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => $menuItems,
    // ]);

    echo Nav::widget([
        'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id)
    ]);
    NavBar::end();
    
    ?>
		<div class="container">
			<?= $content ?>
		</div>

		<footer>
			<div class="container">

				<p class="text-gray-500" style="text-align:center;">© 2019 All Rights Reserved. Powered By <a class="text-white" target="_blank"
						href="https://codinglab.id/">Codinglab</a></p>
			</div>
		</footer>

		<?php $this->endBody() ?>
	</body>

</html>
<?php $this->endPage() ?>
