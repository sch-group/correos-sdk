CORREOS DELIVERY SYSTEM PHP SDK

Initialization

```
        $correosConfig = new CorreosConfig(
            $config['login'],
            $config['password'],
            $config['client_code'],
            'dev');

        $senderAddress = new Address(
            $config['sender_city_name'],
            $config['sender_street_name'],
            $config['sender_province_name'],
            $config['sender_street_number']
        );
        $senderIdentification = new Identification(
            $config['sender_name'],
            $config['sender_company_name'],
            $config['sender_name'],
            $config['sender_first_name'],
            $config['sender_second_name']
        );
        $senderUnitedIdentity = new SenderUnitedIdentity(
            $senderAddress,
            $senderIdentification,
            $config['sender_postcode'],
            $config['sender_phone'],
            $config['sender_email']
        );

        $this->client = new CorreosConnector($correosConfig, $senderUnitedIdentity);

```
Create Shipment:
```
        $totalPrice = 500032; // Eurconts
        $receiverAddress = new Address(
            "Barcelona",
            "Delpotro street",
            "Catalonia",
            "20"
        );
        $receiverIdentity = new Identification(
            "Ainuro Mainurio"
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "42300", // must be less than < 6 postcode
            "423000", international postcode
            "RU", // country iso
            "89274269594",
            "ainur_ahmetgalie@mail.ru"
        );

        $product = new ProductDescription(
            '1', // quantity 
            '189', // code of product Annex 2
            '200', // weight 
            '96000' // price 
        );
        $productList = new ProductList();
        $productList->addProduct($product);

        $sendingInsides = new SendingInsides(
            "2", // GOODS,
            "S", // Y
            $totalPrice > 50000 ? "S" : null,
            $productList,
            $totalPrice > 50000 ? "N" : null
        );
        $packageSize = new PackageSize(
            15, // heigh
            15, // length
            15, // width
            "500" // weight
        );

        $sendingContent = new SendingContent(
            SendingContent::PAQ_LIGHT_INTERNATIONAL_TARIFF, // PAQ LIGHT INTERNATIONAL(I)
            SendingContent::POSTAGE_PAID_PAYMENT_TYPE,
            SendingContent::STANDARD_DELIVERY_MODE,
            $packageSize,
            $sendingInsides
        );
        $sendingContent->setCustomerShipmentCode("order: 123456");

        $invoice = new Invoice($receiverUnitedIdentity, $sendingContent);
        $response = $this->client->createShipment($invoice);

        eche $ingoice->getInvoiceNumber()