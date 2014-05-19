<?php
/**
 * This file is part of Vegas package
 *
 * @author Radosław Fąfara <radek@archdevil.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://bitbucket.org/amsdard/vegas-phalcon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vegas\Forms\Builder\Exception;

use \Vegas\Forms\Exception as FormsException;

/**
 *
 * @package Vegas\Forms\Exception
 */
class BuilderNotFoundException extends FormsException
{
    protected $message = 'Input builder not found';
}
