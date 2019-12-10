# Faspay SDK




Sdk for developing faspay API for PHP

  
this sdk contains 2 parts of payment ,debit and credit, debit mostly use POST Rest API with json, all objects are wrapped
for faspay credit - __[click here ](https://github.com/hilmanshini/FaspayApI_PHP/blob/master/README_CREDIT.MD)__ - 


for faspay debit you can follow docs below 
# Faspay Debit

to begin, you must extends the class faspay_user like this:


```php
require_once '../faspay_user.php';
class test_user extends faspay_user{
    //put your code here
    function __construct() {
        $this->setMerchantName("SINTESA");
        $this->setMerchantId("32254");
        $this->setUserId("bot32254");
        $this->setPassword("p@ssw0rd");
        $this->setRedirectUrl("p@ssw0rd");
    }

}
```

you can switch between dev/prod
```php
$config = new configs_dev($user);
//
$config = new configs_prod($user);
```

you can switch between dev/prod
```php
$config = new configs_dev($user);
//
$config = new configs_prod($user);
```


here is the service
all function are start here
```php
$service = new FaspayServiceImpl($config);
```

#Faspay Debit, inquiry payment channel

to get your list of payment channel

just use

```php
$service->inqueryPaymentChannel();
```

# Faspay Debit, create payment

lets say you need to send payment , you need to get the payment channel object from fuction inqueryPaymentChannel or you can 
set the object by using this code

```php
$alfaPC = new FaspayPaymentChannel();
$alfaPC->setPg_code("402");
$alfaPC->setPg_name("Alfa");
```

create the items 


```php
$item = Array();
$order = new FaspayPayment("Item #1", 1, 100000, FaspayPayment::PAYMENT_PLAN_FULL_SETTLEMENT, $config->getUser()->getMerchantId(), FaspayPayment::TENOR_FULL);
array_push($item, $order);
$order = new FaspayPayment("Item #2", 1, 100000, FaspayPayment::PAYMENT_PLAN_FULL_SETTLEMENT, $config->getUser()->getMerchantId(), FaspayPayment::TENOR_FULL);
array_push($item, $order);
....

```



set the data of your payment. Bill data, , User data , shipping data
```php
$userBillData = FaspayPaymentRequestBillData::managed("123123", "x", 10, "10000", $item,FaspayPaymentRequestBillData::PAY_TYPE_MIXED);
$userData = new FaspayPaymentRequestUserData("087123123123", "hil@hil.com", FaspayPaymentRequestWrapper::TERMINAL_MOBILE_APP_ANDROID, "123123", "hahahaha");
$shippingBillData = new FaspayPaymentRequestShippingData();
```


wrap and create billing 
```php
$requestPaymentWrapper = new FaspayPaymentRequestWrapper($config, $userBillData, $alfaPC, $userData, $shippingBillData);
echo json_encode($service->createBilling($requestPaymentWrapper));
```




# Faspay Debit, cancel payment



to cancel payment 
```php
echo json_encode($service->cancelTransaction(new FaspayPaymentCancelRequestWrapper("8986322540000844","123123","123",$config)));
```

# Faspay Debit, jnquiry payment

to inquiry the status of payment

```php
echo json_encode($service->inqueryPaymentStatus(new FaspayPaymentStatusRequestWrapper("x","8986322540000844", "123123", $config)));
```


# IMPORTANT! Faspay Payment Notification
when users accept payment or cancel payment the notification of payment status are sent to your server , Contact faspay support to register your callback url notification, 

your callback controller from your http server  must response the request from faspay in the format that suits faspay needs , 
the format could be generated with this code in your controller



```php

require_once '../../vendor/autoload.php';
require_once '../entity/notify/NotifyHandler.php';


$a = new NotifyHandler();
//get the notification from $a you can  save to database

echo $a->handle();
```