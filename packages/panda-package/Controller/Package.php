<?php
/**
 *  Panda PHP Frameworl plugin
 *
 *  @package Panda
 *  @author  Eugen Melnychenko
 */

namespace Panda\Package\Controller;

/**
 *  Panda Plugin Controller
 *
 *  @subpackage Plugin
 */
class Package extends \Panda\Http\ControllerAbstract
{
    public function getIndex()
    {
        return $this->view('index');
    }

    public function notFound()
    {
        return $this->view('404');
    }
}