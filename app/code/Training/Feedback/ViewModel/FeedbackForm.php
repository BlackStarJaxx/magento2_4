<?php

namespace Training\Feedback\ViewModel;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class FeedbackForm implements ArgumentInterface
{
    private $urlBuilder;

    public function __construct(
        UrlInterface $urlBuilder
    )
    {
        $this->urlBuilder = $urlBuilder;
    }

    public function getActionUrl():string
    {
        return $this->urlBuilder->getUrl('feedback/');
    }
}