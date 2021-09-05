# Custom Sales module

Custom sales module with rest api and rabbitmq implementation

## Case 1) Admin Customization

Add a tab to the sales order view named Order Exporter - A button to Load should load the order details. The detail should also be editable.
Example: currency_code from AED to USD


![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/orderexport.jpg)
![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/orderinfos.jpg)
![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/rabbitmq.jpg)
![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/exportlog.jpg)



## Case 2) API Customization

GET requests to http://magento2.local/rest/V1/order/details/57
should list details of the order.
![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/postapi.jpg)
Case 2.2)
POST http://magento2.local/rest/V1/order/update

![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/getapi.jpg)

![Alt text](https://github.com/rajeshwws/docker-m2-with-rabbitmq-instance/blob/main/rabbitmq.jpg)