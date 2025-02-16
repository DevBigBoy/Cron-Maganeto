<?php

namespace Bigboy\Example\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;

class Forword implements  ActionInterface
{
    public function __construct(
        protected readonly Context $context,
        protected readonly ForwardFactory $forwardFactory
    ){}

    public function execute()
    {
        return  $this->forwardFactory->create()->forward('page');
    }
}
