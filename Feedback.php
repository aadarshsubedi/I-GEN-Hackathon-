<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <style>
        /* General Body Styling */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
            color: black;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        /* Feedback Form */
        .feedback-form {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .feedback-form h2 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        .form-group textarea {
            resize: none;
            height: 120px;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.4);
        }

        /* Feedback Section */
        .feedback-section {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .feedback-section h2 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .review {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }

        .review:last-child {
            border-bottom: none;
        }

        .review .name {
            font-weight: bold;
            font-size: 1.2rem;
            color: #333;
        }

        .review .role {
            font-size: 0.9rem;
            color: #666;
            margin-top: 5px;
        }

        .review .stars {
            color: gold;
            font-size: 1.4rem;
            margin-top: 5px;
        }

        .review .feedback {
            margin-top: 15px;
            font-style: italic;
            color: #555;
        }

        /* Specific Sections for Donors and Receivers */
        .donor-feedback, .receiver-feedback {
            margin-top: 20px;
        }

        .feedback-category {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .feedback-category h3 {
            color: #007bff;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .submit-btn {
                font-size: 0.9rem;
                padding: 10px;
            }

            .review .name {
                font-size: 1.1rem;
            }

            .review .feedback {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback Page</h1>

        <!-- Feedback Submission Form -->
        <div class="feedback-form">
            <h2>Submit Your Feedback</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="">Select your role</option>
                        <option value="Donor">Donor</option>
                        <option value="Receiver">Receiver</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea id="feedback" name="feedback" placeholder="Write your feedback here..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select id="rating" name="rating" required>
                        <option value="1">⭐ 1 Star</option>
                        <option value="2">⭐⭐ 2 Stars</option>
                        <option value="3">⭐⭐⭐ 3 Stars</option>
                        <option value="4">⭐⭐⭐⭐ 4 Stars</option>
                        <option value="5">⭐⭐⭐⭐⭐ 5 Stars</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Submit Feedback</button>
            </form>
        </div>

        <!-- General Feedback Section -->
        <div class="feedback-section">
            <h2>What People Say</h2>
            <!-- Review Examples -->
            <div class="review">
                <div class="name">John Doe</div>
                <div class="role">Donor</div>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <div class="feedback">
                    "This is such a rewarding experience! I'm glad to contribute to such a meaningful cause."
                </div>
            </div>
            <div class="review">
                <div class="name">Jane Smith</div>
                <div class="role">Receiver</div>
                <div class="stars">⭐⭐⭐⭐</div>
                <div class="feedback">
                    "I am extremely grateful for the support provided. This has made a big difference in my life."
                </div>
            </div>
        </div>

        <!-- Donor-Specific Feedback -->
        <div class="feedback-category donor-feedback">
            <h3>Donor Feedback</h3>
            <div class="review">
                <div class="name">Emily Brown</div>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <div class="feedback">
                    "Supporting this initiative has been one of the most fulfilling things I've ever done."
                </div>
            </div>
        </div>

        <!-- Receiver-Specific Feedback -->
        <div class="feedback-category receiver-feedback">
            <h3>Receiver Feedback</h3>
            <div class="review">
                <div class="name">Rahul Singh</div>
                <div class="stars">⭐⭐⭐⭐</div>
                <div class="feedback">
                    "This aid has been a game-changer for me. Thank you for your generosity!"
                </div>
            </div>
        </div>
    </div>
</body>
</html>
