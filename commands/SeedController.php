<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\Sociallink;

class SeedController extends Controller
{

	public function actionIndex($message = 'hello world')
	{
		echo $message . "\n";

		return ExitCode::OK;
	}

	public function actionSociallink()
	{
		$twitter = new Sociallink();
		$twitter->icon = 'icon fa-twitter';
		$twitter->url = 'https://twitter.com';
		$twitter->status = 1;
		$twitter->created_at = 2;
		$twitter->updated_at = 2;
		$twitter->save();

		$facebook = new Sociallink();
		$facebook->icon = 'icon fa-facebook';
		$facebook->url = 'https://www.facebook.com';
		$facebook->status = 1;
		$facebook->save();

		$instagram = new Sociallink();
		$instagram->icon = 'icon fa-instagram';
		$instagram->url = 'https://www.instagram.com';
		$instagram->status = 1;
		$instagram->save();

		$snapchat = new Sociallink();
		$snapchat->icon = 'icon fa-snapchat-ghost';
		$snapchat->url = 'https://www.snapchat.com';
		$snapchat->status = 1;
		$snapchat->save();

		$medium = new Sociallink();
		$medium->icon = 'icon fa-medium';
		$medium->url = 'https://medium.com';
		$medium->status = 1;
		$medium->save();

		echo 'Successfully' . "\n";

		return ExitCode::OK;
	}
}
