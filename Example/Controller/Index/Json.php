<?php

namespace Bigboy\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface
{

    public function __construct(
        protected readonly JsonFactory $jsonFactory
    )
    {}

    public function execute(){
    return $this->jsonFactory->create()->setHeader('Content-Type', 'application/json')->setData(
        [
            'success' => true,
            'message' => 'Test message'
        ]
    );
    }
}
