<?php

namespace Training\TestOM\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Training\TestOM\Model\PlayWithTest;
use Training\TestOM\Model\Test;

class Index extends Action implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * Index constructor.
     *
     * @param Context $context
     */

    private Test $test;
    private PlayWithTest $playWithTest;
    private $resultRawFactory;

    public function __construct(
        Context $context,
        Test $test,
        PlayWithTest $playWithTest,
        RawFactory $resultRawFactory
    ) {
        $this->test = $test;
        $this->playWithTest = $playWithTest;
        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');
        return $resultRaw;
//        return $this->playWithTest->run();
    }
}
