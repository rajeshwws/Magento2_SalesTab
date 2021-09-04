<?php
namespace Interview\SalesTab\Controller\Adminhtml\Index;

class Load extends \Magento\Backend\App\Action
{
    protected $resultJsonFactory;

    protected $orderRepository;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory 
    )
    {
        parent::__construct($context);
        $this->resultFactory = $resultJsonFactory;
        $this->orderRepository = $orderRepository;
    }

    public function execute()
    {
        $orderId = $this->getRequest()->getParam('order_id');
        if($orderId){
            $order = $this->orderRepository->get($orderId);
            $orderData = [
                'entity_id'     => $order->getId(),
                'currency_code' => $order->getOrderCurrencyCode(),
                'order_status'  => $order->getStatus(),
                'entity_type'   => 'order'
            ];
            $result = $this->resultFactory->create();
            $result->setData(['CustOrderDesc' => $orderData]);
            return $result;
        }
    }
}
