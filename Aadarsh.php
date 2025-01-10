<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics Cards</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fc; /* Light background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns per row */
            gap: 20px; /* Spacing between boxes */
            width: 80%; /* Container width */
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px); /* Hover effect */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 50px;
            margin-bottom: 15px;
        }

        .card h1 {
            font-size: 2.5rem;
            color: #007bff; /* Blue text */
            margin: 0;
        }

        .card p {
            margin: 10px 0 0;
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="card-container">
        <!-- Row 1: Card 1 -->
        <div class="card">
            <img src="document_1648040.png" alt="Icon">
            <h1>2</h1>
            <p>Projects Completed</p>
        </div>
        <!-- Row 1: Card 2 -->
        <div class="card">
            <img src="school_8074788.png" alt="Icon">
            <h1>30</h1>
            <p>School Impacted</p>
        </div>
        <!-- Row 1: Card 3 -->
        <div class="card">
            <img src="donation_872778.png" alt="Icon">
            <h1>50+</h1>
            <p>Count Of Donation Received</p>
        </div>
        <!-- Row 2: Card 4 -->
        <div class="card">
            <img src="turnover_18559144.png" alt="Icon">
            <h1>14000+</h1>
            <p>Engage & Contributor</p>
        </div>
        <!-- Row 2: Card 5 -->
        <div class="card">
            <img src="teamwork_18549257.png" alt="Icon">
            <h1>75+</h1>
            <p>Partners,Volunteers & Collaborators</p>
        </div>
        <!-- Row 2: Card 6 -->
        <div class="card">
            <img src="money_8510562.png" alt="Icon">
            <h1>Rs.100000+</h1>
            <p>Aids Distributed</p>
        </div>
    </div>
</body>
</html>
