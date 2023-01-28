<?php
/** @noinspection PhpUndefinedNamespaceInspection */
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpMissingParamTypeInspection */
/** @noinspection PhpMissingReturnTypeInspection */
/** @noinspection PhpUnused */

use Tinkerwell\ContextMenu\Label;
use Tinkerwell\ContextMenu\SetCode;
use Tinkerwell\ContextMenu\Separator;
use Tinkerwell\ContextMenu\OpenURL;

class RhymixTinkerwellDriver extends TinkerwellDriver
{
    /**
     * Determine if the driver can be used with the selected project path.
     *
     * @param string $projectPath
     * @return bool
     */
    public function canBootstrap ($projectPath)
    {
        return file_exists($projectPath . '/files/config/config.php');
    }

    /**
     * Bootstrap the application so that any executed can access the application in your desired state.
     *
     * @param string $projectPath
     * @return void
     */
    public function bootstrap ($projectPath)
    {
        require_once $projectPath . '/common/autoload.php';
        Context::init();

        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
    }

    /**
     * Build a context menu.
     *
     * @return array
     */
    public function contextMenu ()
    {
        return [
            Label::create('Detected Rhymix v' . RX_VERSION),
			
            OpenURL::create('Github', 'https://github.com/rhymix/rhymix'),
        ];
    }
}
