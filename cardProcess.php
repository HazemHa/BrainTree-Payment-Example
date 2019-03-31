<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['card_number']) && !empty($_POST['expiry_month']) && !empty($_POST['expiry_year']) && !empty($_POST['cvv'])) {
    $card_number = str_replace("+", "", $_POST['card_number']);
    $card_name = $_POST['card_number'];
    $expiry_month = $_POST['expiry_month'];
    $expiry_year = $_POST['expiry_year'];
    $cvv = $_POST['cvv'];
    $expirationDate = $expiry_month . '/' . $expiry_year;

    require_once 'braintree/Braintree.php';
    Braintree_Configuration::environment('environment'); /* this is sandbox or production */
    Braintree_Configuration::merchantId('merchantId');
    Braintree_Configuration::publicKey('publicKey');
    Braintree_Configuration::privateKey('privateKey	');

    $result = Braintree_Transaction::sale(array(
        'amount' => 0,
        'creditCard' => array(
            'number' => $card_number,
            'cardholderName' => $card_name,
            'expirationDate' => $expirationDate,
            'cvv' => $cvv,
        ),
    ));

//echo "<pre>";
    echo $result->message;
    die;
    if ($result->success) {
        //print_r("success!: " . $result->transaction->id);
        if ($result->transaction->id) {
            $braintreeCode = $result->transaction->id;
            echo "<h2>Your payment successfully done " . $braintreeCode . "</h2>";
        }
    } else if ($result->transaction) {
        echo "<pre>";
        print_r($result->transaction);
        //echo '{"OrderStatus": [{"status":"2"}]}';

    } else {

        echo "<h2>Your payment is not completed</h2>";
    }

}
