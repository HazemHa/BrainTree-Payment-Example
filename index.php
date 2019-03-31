<!DOCTYPE html>
<html>
<head>
<title>Credit Card</title>
<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.creditCardValidator.js"></script>
<script type="text/javascript" src="js/card.js"></script>
</head>
<body>
<div id="container">

<h1>BrainTree Payment Integration with PHP. </h1>

<div id="paymentGrid">
<div style="float:left;widht:450px">
<form method="post" id="paymentForm" action="cardProcess.php">


                    <h4>Payment details</h4>

                    <ul>
                        <li>
                            <label for="card_number">Card Number </label>
                            <input type="text" name="card_number" id="card_number"  maxlength="20" placeholder="1234 5678 9012 3456">

                        </li>

                        <li class="vertical">
                            <ul>
                                <li>
                                    <label for="expiry_date">Expires</label>
                                    <input type="text" name="expiry_month" id="expiry_month" maxlength="2" placeholder="MM" class="inputLeft marginRight">
                                    <input type="text" name="expiry_year" id="expiry_year" maxlength="2" placeholder="YY" class="inputLeft "><br/>
                                    <span >Month</span> <span style="margin-left:35px">Year</span>
                                </li>

                                <li style="text-align:right">
                                    <label for="cvv">CVV</label>
                                    <input type="text" name="cvv" id="cvv" maxlength="3" placeholder="123" class="inputRight">
                                </li>
                            </ul>
                        </li>
                       <li style="clear:both;">
                        <input type="submit" id="paymentButton" value="Proceed" disabled="disabled" class="disable">
                        </li>


                    </ul>
                </form>
                </div>


                </div>

</body>
</html>
