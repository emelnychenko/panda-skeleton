<?php
/**
 *  Panda PHP Frameworl plugin
 *
 *  @package Panda
 *  @author  Eugen Melnychenko
 */

namespace Panda\Plugin\Controller;

/**
 *  Panda Plugin Controller
 *
 *  @subpackage Plugin
 */
class PluginController extends \Panda\Controller
{
    public function getIndex()
    {
        return $this->swift('index');
    }

    public function notFound()
    {
        return $this->swift('404');
    }
}