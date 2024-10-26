<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Your database username
$password = "";     // Your database password
$dbname = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

// Insert data into the feedback table
$sql = "INSERT INTO feedback (name, email, feedback, rating)
        VALUES ('$name', '$email', '$feedback', $rating)";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully. <a href='feedback_form.html'>Submit another feedback</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
