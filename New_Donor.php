<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
</head>
<body>
    <form action="Post" action="Payment.php">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        .section {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Donor Information</h1>
    <form method="POST" action="Payment.php">
        <div class="section">
            <label for="donorName">Full Name</label>
            <input type="text" id="donorName" name="donorName" placeholder="Enter your full name" required>
        </div>
        <div class="section">
            <label for="donorEmail">Email Address</label>
            <input type="email" id="donorEmail" name="donorEmail" placeholder="Enter your email address" required>
        </div>
        <div class="section">
            <label for="donorPhone">Phone Number</label>
            <input type="tel" id="donorPhone" name="donorPhone" placeholder="Enter your phone number">
        </div>
        <button type="submit">Next</button>
    </form>
</body>
</html>

    </form>
    
</body>
</html>