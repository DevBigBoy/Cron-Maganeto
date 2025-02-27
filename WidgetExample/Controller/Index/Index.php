<?php

declare(strict_types=1);

namespace Bigboy\WidgetExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    private PageFactory $pageFactory;

    public function __construct(
        PageFactory $pageFactory,
    )
    {
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $page = $this->pageFactory->create();
        return $page;
    }
}
