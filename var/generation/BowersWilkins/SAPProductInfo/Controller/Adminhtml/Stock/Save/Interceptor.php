<?php
namespace BowersWilkins\SAPProductInfo\Controller\Adminhtml\Stock\Save;

/**
 * Interceptor class for @see \BowersWilkins\SAPProductInfo\Controller\Adminhtml\Stock\Save
 */
class Interceptor extends \BowersWilkins\SAPProductInfo\Controller\Adminhtml\Stock\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \BowersWilkins\SAPProductInfo\Model\SapStockFactory $pageFactory = null, \BowersWilkins\SAPProductInfo\Api\SapStockRepositoryInterface $pageRepository = null)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $pageFactory, $pageRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
