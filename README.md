CORREOS DELIVERY SYSTEM PHP SDK


        $totalPrice = 5000.32;
        $totalPrice = $totalPrice * 100;
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
            "42300", // must be less than < 6
            "423000",
            "RU",
            "89274269594",
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
            "2", // GOODS,
            "S", // Y
            $totalPrice > 50000 ? "S" : null,
            $productList,
            $totalPrice > 50000 ? "N" : null
        );
        $packageSize = new PackageSize(
            15,
            15,
            15,
            "500"
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