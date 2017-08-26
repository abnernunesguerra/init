<?php

/*
 * @package     RubriccatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io
 * @copyright   2017 
 * 
 */


namespace Rubricate\Kernel;

class ControllerNamespaceKernel implements IControllerNamespaceKernel
{
    private $controllerNamespace;


    public function __construct($controllerNamespace)
    {
        self::setControllerNamespace($controllerNamespace);
    }


    public function get()
    {
        return $this->controllerNamespace;
    } 


    private function setControllerNamespace($controllerNamespace)
    {
        $ns = str_replace('.', '\\', $controllerNamespace);
        $this->controllerNamespace = rtrim($ns, '\\') . '\\' ;

        return $this;
    } 



}    

