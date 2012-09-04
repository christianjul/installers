<?php
namespace Composer\Installers\Scripts;

use Composer\Script\Event;

class Flow3Scripts
{
	static public function postUpdateAndInstall(Event $event) {
		var_dump($event);
	}
}