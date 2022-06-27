<?php

namespace Training\TestOM\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Index extends Action implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * Index constructor.
     *
     * @param Context $context
     */

    private \Training\TestOM\Model\Test $test;

    public function __construct(
        Context $context,
        \Training\TestOM\Model\Test $test
    ) {
        $this->test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->test->log();
    }
}
