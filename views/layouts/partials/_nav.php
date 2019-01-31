<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<nav id="menu">
    <header class="major">
        <h2>Menu</h2>
    </header>
    <ul>
        <li><a href="<?= Url::to(['site/index']); ?>">Home</a></li>
        <li>
            <span class="opener">Categories</span>
            <ul>
                <li><a href="#">Lorem Dolor</a></li>
                <li><a href="#">Ipsum Adipiscing</a></li>
                <li><a href="#">Tempus Magna</a></li>
                <li><a href="#">Feugiat Veroeros</a></li>
            </ul>
        </li>
        <li><a href="<?= Url::to(['blog/index']); ?>">Blog</a></li>
        <li><a href="<?= Url::to(['site/about']); ?>">About</a></li>
        <li><a href="<?= Url::to(['site/contact']); ?>">Contact</a></li>
        <li>
            <span class="opener">Account</span>
            <ul>
				<?php if (Yii::$app->user->isGuest): ?>
                    <li><a href="<?= Url::to(['auth/login']); ?>">Login</a></li>
                    <li><a href="<?= Url::to(['auth/signup']); ?>">Create an Account</a></li>
                    <li><a href="<?= Url::to(['auth/request-password-reset']); ?>">Reset Password</a></li>
				<?php else: ?>
                    <li><a href="<?= Url::to(['auth/logout']); ?>" data-method="post">Logout</a></li>
                    <li><?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?></li>
				<?php endif; ?>
            </ul>
        </li>
    </ul>
</nav>
