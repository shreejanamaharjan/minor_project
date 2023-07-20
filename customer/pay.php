<?php
$args = http_build_query(array(
  'token' => 'i7cW5Q4Tn26BthKEmcHSwC',
  'amount'  => 1000
));

$url = "https://khalti.com/api/v2/payment/verify/";

# Make the call using API.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$headers = ['Authorization: Key test_secret_key_4278fc731dd54a138b7eee98688dd9ba'];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Response
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=by, initial-scale=1.0">
    <title>Document</title>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>
<body>
<button id="payment-button" >Pay with Khalti</button>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_f9589ee50112449a840b81661a84d325",
            "productIdentity": "nepali_spice",
            "productName": "nepali_spice",
            "productUrl": "http://localhost/minor_project/",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
</body>
</html>