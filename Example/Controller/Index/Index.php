<?php

declare(strict_types=1);

namespace Bigboy\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry;

//class Index extends \Magento\Framework\App\Action\Action
class Index implements ActionInterface
{
    public function __construct(
//        protected readonly PageFactory $pageFactory,
        protected readonly RawFactory $resultFactory,
        protected readonly Registry $coreRegistry
    ) {}

//    public function dispatch(RequestInterface $request)
//    {
//        if (!$request->isDispatched()) {
//            return parent::dispatch($request);
//        }

        // Example: If `test=1` is passed in the URL, return a special response
//        if ($request->getParam('test') == '1') {
//            $result = $this->resultFactory->create();
//            return $result->setContents('Dispatch Override!');
//            dd($request->getActionName(), $request->getParams(), $request->isPost());
//        }

//        return parent::dispatch($request);
//    }

    public function execute()
    {
        // Register a value in the Magento Registry
//        $this->coreRegistry->register('name', 'Shezo');

        // Retrieve it
//        $name = $this->coreRegistry->registry('name');

        $name = "Shezo";
        // Create a response using RawFactory
//        $result = $this->ra->create();
//        return $result->setContents('Hello, ' . $name);

       return $this->resultFactory->create()->setContents('Hello World');
    }
}
