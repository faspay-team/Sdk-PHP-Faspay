# Faspay SDK CREDIT

this SDK 


for import

```php
require_once '../../credit/entity/payment/FaspayPaymentCreditWrapperProd.php';
require_once '../../credit/entity/payment/FaspayPaymentCredit.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditTransactionData.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditShopperData.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditConfigApp.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditBillData.php';


require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditShippingdata.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditItemData.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditDomicileData.php';
require_once '../../credit/entity/payment/wrapper/FaspayPaymentCreditCardData.php';

require_once '../../credit/entity/inquiry/InquiryRequestCredit.php';
require_once '../../credit/entity/inquiry/InquiryRequestCreditWrapper.php';
require_once '../../credit/entity/inquiry/InquiryResponseCredit.php';
require_once '../../credit/FaspayConfigCreditProd.php';

require_once '../../credit/FaspayUserCredit.php';
require_once '../../credit/TestUser2.php';
require_once '../../credit/service/FaspayCreditService.php';
require_once '../../credit/service/FaspayCreditServiceImpl.php';

```



# User Object

just like debit payment, this SDK needs user object, 

```php
    class TestProdUser extends FaspayUserCredit{
        function __construct() {
            $this->setMerchantId("faspay");
            $this->setPass("abcde");
        }

    }

```



# Faspay Credit Create Payment

just like debit function, this function create the payment but user must fill the form of html 

```php
    //sample code
        //create the items first
        $item = array();
        array_push($item, "Item 1");
        array_push($item, "Item 2");
        array_push($item, "Item 3");

                //from previous code 
                $usr = new TestProdUser();
                
```

create credit card data;
```php
$ccdata = new FaspayPaymentCreditCardData()
```

create domicile data
```php
$domData = new FaspayPaymentCreditDomicileData();
```
create item wrapper data
```php
$itemData = new FaspayPaymentCreditItemData($item)
```

create shipping data
```php
            //$shipping_address, 
            //$shipping_address_city, 
            //$shipping_address_region, 
            //$shipping_address_state, 
            //$shipping_address_poscode, 
            //$shipping_address_country_code, 
            //$shippingcost
$shipData = new FaspayPaymentCreditShippingdata("addr", "city", "region", "state", "poscode", "ID", 100000);
```
create bill data

```php
//$billing_address
// $billing_address_city
// $billing_address_region
// $billing_address_state
// $billing_address_poscode
/ $billing_address_country_code
$billData = new FaspayPaymentCreditBillData("adr", "city", "region", "state", "poscode", "ID");
```
create the config 

```php
//FaspayPaymentCredit::RESPONSE_TYPE_POST see #https://faspay.co.id/docs/index-business.html?json#request-parameter

$configApp = new FaspayPaymentCreditConfigApp(FaspayPaymentCredit::RESPONSE_TYPE_POST, "http://<<URL CALLBACK>>")
```


create shopper data
```php
//$custname, $custemail
// $shopper_ip
// $description
// $cardno
// $cardname
// $cardtype
// $expirymonth
// $expiryyear
// $phone_no
$shopperData = new FaspayPaymentCreditShopperData("ha", "ha@ha.com",
                        "192.168.100.1","desc", "9612361233123", "Test user", 
                        FaspayPaymentCredit::CARD_TYPE_AMEX, 10, "2020", "081236125123");
```


create transaction data

```php
$transData = new FaspayPaymentCreditTransactionData($usr, uniqid(), "IDR", 100000)
```


wrap it up
```php
$paymentWrapper = new FaspayPaymentCreditWrapperProd($usr,
                $transData,
                $ShopperData,
                $configApp,
                $billData,
                $shipData,
                $itemData,
                $domData,
                $ccdata);
```

and generate html
```php
echo $paymentWrapper->generateHtml()
```



# Faspay Credit Capture Payment

imports
```php
require_once '../../credit/entity/capture/CaptureRequest.php';
require_once '../../credit/entity/capture/CaptureRequestWrapperDev.php';
require_once '../../credit/TestUser2.php';
require_once '../../credit/FaspayConfigCreditDev.php';
```


```php
//create the user
$user = new TestUser2();  
//change configuration
$conf = new FaspayConfigCreditDev();
//wrap request
$c = new CaptureRequestWrapperDev($user , "5d078fc52877e", "D4701B33-BED5-404B-BBAC-BA1DBE60F759", "100000", "ada deh", "adade@g.com", "pala lu", "<<URL_CALLBACK>>");
//show the html
echo $c->generateHtml();
```






# Faspay Credit Inquiry  Payment



```php
    require_once '../../credit/entity/inquiry/InquiryRequestCredit.php';
    require_once '../../credit/entity/inquiry/InquiryRequestCreditWrapper.php';
    require_once '../../credit/entity/inquiry/InquiryResponseCredit.php';
    require_once '../../credit/FaspayConfigCreditDev.php';
    require_once '../../credit/service/FaspayCreditService.php';
    require_once '../../credit/service/FaspayCreditServiceImpl.php';
    require_once '../../credit/FaspayUserCredit.php';
    require_once '../../credit/TestUser2.php';
    $user = new TestUser2();  
    $conf = new FaspayConfigCreditDev();
    $service = new FaspayCreditServiceImpl($conf);
    $re = new InquiryRequestCreditWrapper($user,  "5d078fc52877e", 100000);

    echo $service->inquiry($re);

```



# Faspay Credit Refund  Payment
this example will generate the HTML of php code
```php
require_once '../../credit/FaspayUserCredit.php';
require_once '../../credit/TestUser2.php';
require_once '../../credit/entity/refund/RefundRequest.php';
require_once '../../credit/entity/refund/RefundRequestWrapperDev.php';
$user = new TestUser2();
$html = new RefundRequestWrapperDev($user, 
        "5d078fc52877e", 
        "D4701B33-BED5-404B-BBAC-BA1DBE60F759", 
        100000, "merhcant test CC", "haha@haha.com", "ddddd ", "<<URL_CALLBACK>>",10000);

echo $html->generateHtml();
```



# Faspay Credit Void  Payment


```php
this example will generate the HTML of your php code
# Faspay Credit Void  Payment
require_once '../../credit/FaspayUserCredit.php';
require_once '../../credit/TestUser2.php';
require_once '../../credit/entity/void/VoidRequestCredit.php';
require_once '../../credit/entity/void/VoidRequestWrapperDev.php';
$user = new TestUser2();
$html = new VoidRequestWrapperDev($user, "5d078fc52877e", "D4701B33-BED5-404B-BBAC-BA1DBE60F759", 100000, "merhcant test CC", "haha@haha.com", "ddddd ", "https://programmermiskin.chickenkiller.com/faspay/api/notify");
echo $html->generateHtml();
```