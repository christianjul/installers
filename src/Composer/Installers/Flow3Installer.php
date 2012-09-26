<?php
namespace Composer\Installers;

/**
 * An installer to handle FLOW3 specifics when installing packages.
 */
class Flow3Installer extends BaseInstaller {

    /**
     * Modify the package name to be a FLOW3 style key.
     *
     * @param array $vars
     * @return array
     */
    public function inflectPackageVars($vars) {

        // infer package location from package type
        $packageLocation = strtolower(substr($vars['type'], strpos($vars['type'], '-') + 1));
        switch ($packageLocation) {
            case 'package':
                $this->locations['package'] = 'Packages/Application/{$name}/';
                break;
            case 'plugin':
            case 'site':
                $this->locations[$packageLocation] = 'Packages/' . ucfirst($packageLocation) . 's/{$name}/';
                break;
            default:
                $this->locations[$packageLocation] = 'Packages/' . ucfirst($packageLocation) . '/{$name}/';
                break;
        }

        $autoload = $this->package->getAutoload();
        $namespace = key($autoload['psr-0']);
        $vars['name'] = str_replace('\\', '.', $namespace);

        return $vars;
    }
}

?>