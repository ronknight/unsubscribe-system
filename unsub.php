<?php
// Define variables to hold confirmation and error messages
$confirmation_message = '';
$error_message = '';

// Check if email and batch parameters are set in the URL
if(isset($_GET['email']) && isset($_GET['batch'])) {
    // Extract email, batch, and timestamp from the URL parameters
    $email = $_GET['email'];
    $batch = $_GET['batch'];
    $timestamp = date('Y-m-d H:i:s'); // Current timestamp
    
    // Get the IP address of the user
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Perform the unsubscribe operation here
    $log_message = "Timestamp: $timestamp | Email: $email | Batch: $batch | IP Address: $ip_address\n";
    
    // Append data to log file
    file_put_contents('unsubscribe.log', $log_message, FILE_APPEND);
    // Track the unsubscribe event
    trackUnsubscribe($email, $batch, $timestamp, $ip_address);

    // Set confirmation message
    $confirmation_message = 'You have been successfully unsubscribed.';
} else {
    // Set error message
    $error_message = 'Error: Email or batch parameters are missing.';
}

// Function to track unsubscribe event and redirect
function trackUnsubscribe($email, $batch, $timestamp, $ip_address) {
    // Your tracking code here
    echo "<script>
            gtag('event', 'unsubscribe', {
                'event_category': 'Email',
                'event_label': 'User unsubscribed from email',
                'value': 1,
                'ip_address': '$ip_address'
            });
            redirectTo4sgm(); // Redirect after tracking
          </script>";
}


// Function to redirect
function redirectTo4sgm() {
    echo "<script>window.location.href = 'https://4sgm.com/?utm_source=smtp&utm_medium=email&utm_campaign=DOI-Unsubscribe';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsubscribe Status</title>
</head>
<body>
    <h1>Unsubscribe Status</h1>
    <?php if(!empty($confirmation_message)): ?>
        <p style="color: green;"><?php echo $confirmation_message; ?></p>
    <?php elseif(!empty($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
</body>
</html>
