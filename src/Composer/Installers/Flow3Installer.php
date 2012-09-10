<?php
namespace Composer\Installers;

class Flow3Installer extends BaseInstaller
{
    protected $locations = array(
        'framework'     => 'Packages/Framework/{$name}/',
        'package'     => 'Packages/Application/{$name}/',
    );

	public function inflectPackageVars($vars) {
		$autoload = $this->package->getAutoload();
		$namespace = key($autoload['psr-0']);
		$vars['name'] = str_replace('\\','.',$namespace);
		return $vars;
	}
}
