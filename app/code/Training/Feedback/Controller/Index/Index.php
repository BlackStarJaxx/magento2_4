<?php

namespace Training\Feedback\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    private $pageResultFactory;

    public function __construct(
        Context     $context,
        PageFactory $pageResultFactory
    )
    {
        $this->pageResultFactory = $pageResultFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->pageResultFactory->create();
    }
}