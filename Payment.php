<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAYMENT DETAILS</title>
</head>
<body>
    <form action="Post" action="Completetrans.php">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <style>
        .image-container img {
            width: 300px; /* Adjust the size of the image */
            height: auto;
        }
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        .section {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .hidden {
            display: none;
        }
        .img{
            align-items: self-end;
        }
    </style>
    <script>
        function togglePaymentDetails() {
            const method = document.getElementById('paymentMethod').value;

            // Hide all payment detail sections
            document.querySelectorAll('.payment-details').forEach(section => section.classList.add('hidden'));

            // Show the relevant section based on selected payment method
            if (method === 'credit-card') {
                document.getElementById('creditCardDetails').classList.remove('hidden');
            } else if (method === 'bank-transfer') {
                document.getElementById('bankDetails').classList.remove('hidden');
            } else if (method === 'wallet') {
                document.getElementById('walletDetails').classList.remove('hidden');
            }
        }
    </script>
</head>
<body>
    <h1>Payment Method</h1>
    <div>
    <img src="frame.png" class="image_container" style="width: 60px; height: 60px;align-content: end; margin-right: 5px;" >
        </div>
        <form action="process_payment.php" method="POST">
        <div class="section">
        <label for="paymentMethod">Select Payment Method</label>
         <select id="paymentMethod" name="paymentMethod" onchange="togglePaymentDetails()" required>
    <option value="" selected disabled>-- Select Payment Method --</option>
    <option value="credit-card">Credit/Debit Card</option>
    <option value="bank-transfer">Bank Transfer</option>
    <option value="wallet">Digital Wallet</option>
</select>
            </select>
        </div>

        <!-- Credit/Debit Card Details -->
        <div id="creditCardDetails" class="payment-details hidden">
            <div class="section">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456">
            </div>
            <div class="section">
                <label for="cardExpiry">Expiry Date</label>
                <input type="text" id="cardExpiry" name="cardExpiry" placeholder="MM/YY">
            </div>
            <div class="section">
                <label for="cardCVV">CVV</label>
                <input type="text" id="cardCVV" name="cardCVV" placeholder="123">
            </div>
            <div class="section">
                <label for="fileupload">Upload  Payment Details</label>
                <input type="file" id="fileupload" name="fileupload"  >
            </div>
        </div>

        <!-- Bank Transfer Details -->
        <div id="bankDetails" class="payment-details hidden">
            <div class="section">
                <label for="bankName">Bank Name</label>
                <input type="text" id="bankName" name="bankName" placeholder="Enter bank name">
            </div>
            <div class="section">
                <label for="accountNumber">Account Number</label>
                <input type="text" id="accountNumber" name="accountNumber" placeholder="Enter account number">
            </div>
            <div class="section">
                <label for="fileupload">Upload  Payment Details</label>
                <input type="file" id="fileupload" name="fileupload"  >
            </div>
        </div>

        <!-- Digital Wallet Details -->
        <div id="walletDetails" class="payment-details hidden">
            <div class="section">
                <label for="walletID">Wallet ID</label>
                <input type="text" id="walletID" name="walletID" placeholder="Enter wallet ID">
            </div>
            <div class="section">
                <label for="fileupload">Upload  Payment Details</label>
                <input type="file" id="fileupload" name="fileupload"  >
            </div>
        </div>
        <button type="submit">Submit Payment</button>
    </form>
    
</body>
</html>
