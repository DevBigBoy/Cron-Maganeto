<?php

declare(strict_types=1);

namespace Bigboy\WidgetExample\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Title extends Template implements BlockInterface
{
    protected $_template = 'widget/title.phtml';

}
