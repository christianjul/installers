<?php
namespace Composer\Installers;

class Flow3Installer extends BaseInstaller
{
    protected $locations = array(
        'framework'     => 'Packages/Framework/{$name}/',
        'package'     => 'Packages/Application/{$name}/',
    );
}
