<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Ajax;

/**
 * Interface of AJAX class. This interface forces to implement the ajax
 * method which is a callback of Wordpress AJAX action.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AjaxInterface
{
    /**
     * The Wordpress AJAX process callback method.
     */
    public function ajax();
}
