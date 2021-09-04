<?php
namespace Interview\SalesTab\Block\Adminhtml\Order\Tab;

class OrderExport extends \Magento\Backend\Block\Template implements \Magento\Backend\Block\Widget\Tab\TabInterface
{
    protected $_template = 'tab/view/order/export.phtml';
 
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
    public function getOrder()
    {
        return $this->_coreRegistry->registry('current_order');
    }
    public function getOrderId()
    {
        return $this->getOrder()->getEntityId();
    }
    public function getOrderIncrementId()
    {
        return $this->getOrder()->getIncrementId();
    }
    public function getTabLabel()
    {
        return __('Order Exporter');
    }
    public function getTabTitle()
    {
        return __('Order Exporter');
    }
    public function canShowTab()
    {
        return true;
    }
    public function isHidden()
    {
        return false;
    }

}