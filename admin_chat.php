<!-- Admin Chat Page -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Admin Chat</title>
    <!-- Add any necessary styles or scripts here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .chat-container {
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Admin Chat</h2>
    <div class="chat-container" id="chatMessages">
        <!-- Display chat messages here -->
    </div>
    <input type="text" id="messageInput" placeholder="Type your message">
    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            var message = $('#messageInput').val();
            if (message.trim() !== '') {
                // Use AJAX to send the message to the user
                $.ajax({
                    type: 'POST',
                    url: 'send_message_to_user.php',
                    data: { message: message },
                    success: function(response) {
                        // Update the chatMessages div with the sent message
                        $('#chatMessages').append('<p
