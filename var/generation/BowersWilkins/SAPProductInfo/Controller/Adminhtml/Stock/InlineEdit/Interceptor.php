<?php
namespace BowersWilkins\SAPProductInfo\Controller\Adminhtml\Stock\InlineEdit;

/**
 * Interceptor class for @see \BowersWilkins\SAPProductInfo\Controller\Adminhtml\Stock\InlineEdit
 */
class Interceptor extends \BowersWilkins\SAPProductInfo\Controller\Adminhtml\Stock\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \BowersWilkins\SAPProductInfo\Api\SapStockRepositoryInterface $sapStockRepository, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $sapStockRepository, $jsonFactory);
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
