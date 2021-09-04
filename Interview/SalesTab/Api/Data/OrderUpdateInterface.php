<?php
namespace Interview\SalesTab\Api\Data;

/**
 * @api
 */
interface OrderUpdateInterface {

    /**
     * Get CustomerOrderId
     *
     * @return mixed
    */
    public function getCustomerOrderId();
    

    /**
     * Set CustomerOrderId
     *
     * @param mixed $customerOrderId
     * @return $this
    */
    public function setCustomerOrderId($customerOrderId);  

    /**
     * Get CurrencyCode
     *
     * @return mixed
    */
    public function getCurrencyCode();


    /**
     * Set CurrencyCode
     *
     * @param mixed $currencyCode
     * @return $this
    */
    public function setCurrencyCode($currencyCode);


    /**
     * Get OrderStatus
     *
     * @return mixed
    */
    public function getOrderStatus();

    /**
     * Set OrderStatus
     *
     * @param mixed $orderStatus
     * @return $this
    */
    public function setOrderStatus($orderStatus);


    /**
     * Get EntityType
     *
     * @return mixed
    */
    public function getEntityType();

    /**
     * Set EntityType
     *
     * @param mixed $entityType
     * @return $this
    */
    public function setEntityType($entityType);


    /**
     * Get EntityId
     *
     * @return mixed
    */
    public function getEntityId();

    /**
     * Set EntityId
     *
     * @param mixed $entityId
     * @return $this
    */
    public function setEntityId($entityId);
}
