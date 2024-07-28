<?php
// Replace 'YOUR_BOT_TOKEN' with your actual Telegram Bot API token
$botToken = 'YOUR_BOT_TOKEN';
// Replace 'YOUR_CHAT_ID' with the chat ID where you want to send the message
$chatId = 'YOUR_CHAT_ID';

if (isset($_POST['send_message'])) {
    $message = 'Hello World';
    $url = "https://api.telegram.org/bot{'7276660681:AAEO2aSOyUfglCAKAuoXnceY_52pxRVpZvg'}/sendMessage";
    $data = [
        'chat_id' => '910302781',
        'text' => $message
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type:application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "Error sending message";
    } else {
        echo "Message sent successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message to Telegram Bot</title>
</head>
<body>
    <h1>Send Message to Telegram Bot</h1>
    <form method="post">
        <button type="submit" name="send_message">Send Hello World</button>
    </form>
</body>
</html>
