<?php

namespace Bigboy\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{

    public function __construct(
        protected readonly PageFactory $pageFactory,
    )
    {}

    public function execute()
    {
        $page  = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set( "Page Test");
        return $page;
    }
}
