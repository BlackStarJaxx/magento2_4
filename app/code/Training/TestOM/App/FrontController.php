<?php

namespace Training\TestOM\App;

use Magento\Framework\App\ActionFlag;
use Magento\Framework\App\AreaList;
use Magento\Framework\App\Request\ValidatorInterface as RequestValidator;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterListInterface;
use Magento\Framework\App\State;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use Magento\Framework\Message\ManagerInterface as MessageManager;
use Psr\Log\LoggerInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var RouterListInterface
     */
    private $routerList;
    /**
     * @var ResponseInterface
     */
    protected $response;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param RouterListInterface $routerList
     * @param ResponseInterface $response
     * @param ?RequestValidator $requestValidator
     * @param ?MessageManager $messageManager
     * @param ?LoggerInterface $logger
     * @param ?State $appState
     * @param ?AreaList $areaList
     * @param ?ActionFlag $actionFlag
     * @param ?EventManagerInterface $eventManager
     * @param ?RequestInterface $request
     */

    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        ?RequestValidator $requestValidator = null,
        ?MessageManager $messageManager = null,
        ?LoggerInterface $logger = null,
        ?State $appState = null,
        ?AreaList $areaList = null,
        ?ActionFlag $actionFlag = null,
        ?EventManagerInterface $eventManager = null,
        ?RequestInterface $request = null
    ) {
        parent::__construct(
            $routerList,
            $response,
            $requestValidator,
            $messageManager,
            $logger,
            $appState,
            $areaList,
            $actionFlag,
            $eventManager,
            $request
        );
    }

    public function dispatch(RequestInterface $request)
    {
        $routerList  = $this->routerList;
        if ($routerList !== null) {
            foreach ($routerList as $router) {
                $this->logger->info(get_class($router));
            }
        }

        return parent::dispatch($request);
    }
}
