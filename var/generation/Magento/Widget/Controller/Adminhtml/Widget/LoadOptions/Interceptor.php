<?php
namespace Magento\Widget\Controller\Adminhtml\Widget\LoadOptions;

/**
 * Interceptor class for @see \Magento\Widget\Controller\Adminhtml\Widget\LoadOptions
 */
class Interceptor extends \Magento\Widget\Controller\Adminhtml\Widget\LoadOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Widget\Helper\Conditions $conditionsHelper = null, \Psr\Log\LoggerInterface $logger = null, \Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $conditionsHelper, $logger, $jsonHelper);
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
