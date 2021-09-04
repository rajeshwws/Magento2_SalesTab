<?php
namespace Interview\SalesTab\Model;

class OrderManagement{

    /**
    * @var Publisher
    */
    private $publisher;

    /**
    * @var Publisher
    */
    private $orderRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository,
        \Interview\SalesTab\Publisher\OrderExport\Publish $publisher,
        array $data = []
    ){
        $this->orderRepository = $orderRepository;
        $this->publisher = $publisher;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder($id)
    {
        if(empty($id)){
            throw new \Magento\Framework\Exception\InputException(__('id is required.'));
        }else{
            return $this->orderRepository->get($id);
        }
    }

    /**
    *  @param \Interview\SalesTab\Api\Data\OrderUpdateInterface $CustOrderDesc
    *  @return mixed
    */
    public function updateOrder($CustOrderDesc){
        return $this->publisher->publish([
            'customer_order_id' => $CustOrderDesc->getCustomerOrderId(),
            'currency_code' => $CustOrderDesc->getCurrencyCode(),
            'order_status' => $CustOrderDesc->getOrderStatus(),
            'entity_type' => $CustOrderDesc->getEntityType(),
            'entity_id' => $CustOrderDesc->getEntityId()
       ]);
    }
}
