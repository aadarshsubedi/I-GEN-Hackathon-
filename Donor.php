<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Form</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2a76a4;
        }

        .section {
            margin-bottom: 20px;
        }

        .section label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .section input[type="text"],
        .section input[type="email"],
        .section input[type="tel"],
        .section select,
        .section textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        .section textarea {
            resize: vertical;
        }

        .section button {
            background-color: #2a76a4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .section button:hover {
            background-color: #1d5a6b;
        }

        .section select {
            height: 40px;
        }

        .note {
            font-size: 0.9em;
            color: #555;
            margin-top: 5px;
        }
    </style>
    </style>
</head>
<body>
<div class="container">
    <h1>Educational Donation Form - Donors</h1>
    <form method="POST" action="process_donor.php">
        <div class="section">
            <label for="donorName">Full Name</label>
            <input type="text" id="donorName" name="donorName" required>
        </div>
        <div class="section">
            <label for="donorEmail">Email Address</label>
            <input type="email" id="donorEmail" name="donorEmail" required>
        </div>
        <div class="section">
            <label for="donorPhone">Phone Number</label>
            <input type="tel" id="donorPhone" name="donorPhone">
        </div>
        <div class="section">
            <label for="donationAmount">Donation Amount</label>
            <input type="text" id="donationAmount" name="donationAmount" placeholder="Enter amount in Nepali Rupees" required>
        </div>
        <div class="section">
            <label for="paymentMethod">Preferred Payment Method</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="credit-card">Credit/Debit Card</option>
                <option value="bank-transfer">Bank Transfer</option>
                <option value="ime-pay">IME Pay</option>
                <option value="esewa">eSewa</option>
            </select>
        </div>
        <?php
        if (isset($_POST['paymentMethod'])) {
            $method = $_POST['paymentMethod'];
            if ($method === 'credit-card') {
                echo '<div class="section">';
                echo '<label for="cardNumber">Card Number</label>';
                echo '<input type="text" id="cardNumber" name="cardNumber">';
                echo '</div>';
            } elseif ($method === 'bank-transfer') {
                echo '<div class="section">';
                echo '<label for="bankName">Bank Name</label>';
                echo '<input type="text" id="bankName" name="bankName">';
                echo '</div>';
            }
        }
        ?>
        <div class="section">
            <label for="donorMessage">Message to the Student (Optional)</label>
            <textarea id="donorMessage" name="donorMessage" rows="4"></textarea>
        </div>
        <div class="section">
            <button type="submit">Donate</button>
        </div>
    </form>
</div>
</body>
</html>
