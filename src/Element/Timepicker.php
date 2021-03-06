<?php
/**
 * This file is part of Vegas package
 *
 * @author Arkadiusz Ostrycharz <aostrycharz@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Vegas\Forms\Element;

use Vegas\Forms\Decorator;

class Timepicker extends \Phalcon\Forms\Element\Text implements Decorator\DecoratedInterface
{
    use Decorator\DecoratedTrait;

    public function __construct($name, $attributes = null)
    {
        $templatePath = implode(DIRECTORY_SEPARATOR, [dirname(__FILE__), 'Timepicker', 'views', '']);
        $this->setDecorator(new Decorator($templatePath));
        $this->getDecorator()->setTemplateName('jquery');
        parent::__construct($name, $attributes);
    }
}
