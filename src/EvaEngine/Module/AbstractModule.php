<?php
/**
 * EvaEngine (http://evaengine.com/)
 * A development engine based on Phalcon Framework.
 *
 * @copyright Copyright (c) 2014-2015 EvaEngine Team (https://github.com/EvaEngine/EvaEngine)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Eva\EvaEngine\Module;

use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;

/**
 * Class AbstractModule
 * @package Eva\EvaEngine\Module
 */
abstract class AbstractModule implements StandardInterface, ModuleDefinitionInterface
{
    /**
     * @return array|void
     */
    public static function registerGlobalAutoloaders()
    {
        return array();
    }

    /**
     * @return array|void
     */
    public static function registerGlobalEventListeners()
    {
        return array();
    }

    /**
     * @return array|void
     */
    public static function registerGlobalViewHelpers()
    {
        return array();
    }

    /**
     * @return array|void
     */
    public static function registerGlobalRelations()
    {
        return array();
    }

    /**
     * @return array|void
     */
    public static function registerGlobalServices()
    {
        return array();
    }

    /**
     * Registers the module auto-loader
     * @param DiInterface $diInterface
     * @internal param $
     */
    public function registerAutoloaders(DiInterface $diInterface = null)
    {
    }

    /**
     * Registers the module-only services
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
    }
}
