<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipient Form</title>
    <style>
        /* Include your CSS styles here */
    </style>
</head>
<body>
<div class="container">
    <h1>Educational Assistance Form - Recipients</h1>
    <form method="POST" action="process_recipient.php" enctype="multipart/form-data">
        <div class="section">
            <label for="recipientName">Full Name</label>
            <input type="text" id="recipientName" name="recipientName" required>
        </div>
        <div class="section">
            <label for="recipientAge">Age</label>
            <input type="number" id="recipientAge" name="recipientAge" required>
        </div>
        <div class="section">
            <label for="school">School/University</label>
            <input type="text" id="school" name="school" required>
        </div>
        <div class="section">
            <label for="grade">Grade/Class/Level</label>
            <input type="text" id="grade" name="grade" required>
        </div>
        <div class="section">
            <label for="recipientEmail">Email Address</label>
            <input type="email" id="recipientEmail" name="recipientEmail" required>
        </div>
        <div class="section">
            <label for="assistanceNeeded">Type of Assistance Needed</label>
            <select id="assistanceNeeded" name="assistanceNeeded" required>
                <option value="tuition">Tuition Fee Assistance</option>
                <option value="study-materials">Study Materials</option>
                <option value="technology">Technology (Laptop, Tablet)</option>
                <option value="transportation">Transportation</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="section">
            <label for="description">Brief Description of Your Situation</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="section">
            <label for="verificationDocs">Upload Verification Documents (Optional)</label>
            <input type="file" id="verificationDocs" name="verificationDocs">
            <p class="note">Please upload a document proving your Nepali citizenship (e.g., Citizenship Certificate, Passport, etc).</p>
        </div>
        <div class="section">
            <button type="submit">Apply for Assistance</button>
        </div>
    </form>
</div>
</body>
</html>
