<?php
namespace Composer\Installers;

class Flow3Installer extends BaseInstaller
{
    protected $locations = array(
        'framework'     => 'framework/{$name}/',
        'package'     => 'application/{$name}/',
    );
}
