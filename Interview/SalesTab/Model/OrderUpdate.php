<?php

namespace Interview\SalesTab\Model;

class OrderUpdate implements \Interview\SalesTab\Api\Data\OrderUpdateInterface
{
    protected $customerOrderId;

    protected $currencyCode;

    protected $orderStatus;

    protected $entityType;

    protected $entityId;

    public function getCustomerOrderId(){
        return $this->customerOrderId;
    }

    public function setCustomerOrderId($customerOrderId){
        $this->customerOrderId = $customerOrderId;
        return $this;
    }

    public function getCurrencyCode(){
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode){
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function getOrderStatus(){
        return $this->orderStatus;
    }

    public function setOrderStatus($orderStatus){
        $this->orderStatus = $orderStatus;
        return $this;
    }

    public function getEntityType(){
        return $this->entityType;
    }

    public function setEntityType($entityType){
        $this->entityType = $entityType;
        return $this;
    }

    public function getEntityId(){
        return $this->entityId;
    }

    public function setEntityId($entityId){
        $this->entityId = $entityId;
        return $this;
    }

}
