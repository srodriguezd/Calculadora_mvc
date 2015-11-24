<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 16:55
 */

namespace controllers;


class IndexController
{
    public function indexAction()
    {
        require 'application/views/index.phtml';
    }
}