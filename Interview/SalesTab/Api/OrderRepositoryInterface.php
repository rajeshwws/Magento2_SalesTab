<?php
namespace Interview\SalesTab\Api;
 
interface OrderRepositoryInterface {


    /**
     * GET for order api
     * @param integer $id Order Id
     * @return \Magento\Sales\Api\Data\OrderInterface Order interface
     */
    
    public function getOrder($id);

    /**
    *  @param \Interview\SalesTab\Api\Data\OrderUpdateInterface $CustOrderDesc
    *  @return mixed
    */
    public function updateOrder($CustOrderDesc);
}
