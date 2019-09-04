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
        $receiverAddress = new Address(
                  "TEST LAKEPORT",
                  "TEST STREET NAME",
                  "TEST NAME",
                  "20"
              );
              $receiverIdentity = new Identification(
                  "TEST TEST",
              );
              $receiverUnitedIdentity = new ReceiverUnitedIdentity(
                  $receiverAddress,
                  $receiverIdentity,
                  "48059", // must be less than < 6
                  "48059",
                  "US",
                  "89274269592",
                  "ainur_ahmetgalie@mail.ru"
              );
      
              $product = new ProductDescription(
                  '1',
                  '189',
                  '200',
                  '96000'
              );
              $productList = new ProductList();
              $productList->addProduct($product);
      
              $sendingInsides = new SendingInsides(
                  SendingInsides::GOODS_CONTENT_TYPE, // GOODS,
                  SendingInsides::YES_CHOICE, // Y
                   SendingInsides::YES_CHOICE,
                  $productList,
                  SendingInsides::NO_CHOICE
              );
              $packageSize = new PackageSize(
                  15,
                  15,
                  15,
                  500
              );
      
              $sendingContent = new SendingContent(
                  SendingContent::PAQ_LIGHT_INTERNATIONAL_TARIFF, // PAQ LIGHT INTERNATIONAL(I)
                  SendingContent::POSTAGE_PAID_PAYMENT_TYPE,
                  SendingContent::STANDARD_DELIVERY_MODE,
                  $packageSize,
                  $sendingInsides
              );
      
              $sendingContent->setCustomerShipmentCode("test order: 123456");
      
              $shipment = new Shipment($receiverUnitedIdentity, $sendingContent);
      
              $createdInvoice = $this->client->createShipment($shipment);
```
Print labels:

```
    $trackNumber = $shipment->getClippedTrackNumber();

    $createdShipmentDateTime = $shipment->getDateRequest();

    $labelPdfByteCode = $this->client->printLabel($trackNumber, $createdShipmentDateTime);

```

Cancel shipment :
```
    $trackNumber = $invoice->getClippedTrackNumber();

    $isCancelShipment = $this->client->cancelShipment($trackNumber);

```

Update shipment :

```
   $receiverAddress = new Address(
            "TEST CITY NAME",
            "TEST STREET NAME",
            "MADRIDO",
            "20"
        );
        $receiverIdentity = new Identification(
            "TEST TEST",
        );
        $receiverUnitedIdentity = new ReceiverUnitedIdentity(
            $receiverAddress,
            $receiverIdentity,
            "42300", // must be less than < 6
            "480590", // Zip
            "RU", // ISO CODE
            "+79274269591",
            "ainurio@mail.ru"

        );

        $product = new ProductDescription(
            '1',
            '189',
            '200',
            '96000'
        );
        $productList = new ProductList();
        $productList->addProduct($product);

        $sendingInsides = new SendingInsides(
            SendingInsides::GOODS_CONTENT_TYPE, // GOODS,, // GOODS,
            SendingInsides::YES_CHOICE, // S
            $totalPrice > 50000 ? SendingInsides::YES_CHOICE : null,
            $productList,
            $totalPrice > 50000 ? SendingInsides::NO_CHOICE : null
        );
        $packageSize = new PackageSize(
            15,
            15,
            15,
            500
        );

        $sendingContent = new SendingContent(
            SendingContent::PAQ_LIGHT_INTERNATIONAL_TARIFF, // PAQ LIGHT INTERNATIONAL(I)
            SendingContent::POSTAGE_PAID_PAYMENT_TYPE,
            SendingContent::STANDARD_DELIVERY_MODE,
            $packageSize,
            $sendingInsides
        );

        $shipment = new Shipment($receiverUnitedIdentity, $sendingContent);
        $shipment->setTrackNumber($createdShipment->getTrackNumber());
        $shipment->setDateRequest($createdShipment->getDateRequest());

        $shipment = $this->client->updateShipment($shipment);

```