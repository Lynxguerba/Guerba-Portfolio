<?php
include("conn.php");

// Fetch initial messages from the database
$sql = "SELECT id, name, message FROM messages ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="roboto.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        * {
            font-family: 'Roboto';
            
        }
        body{
            background: #dddddd;
        }
        .messages {
            
            padding: 20px;
            background: white;
            margin-bottom: 10px;
            border-radius: 10px;
            box-shadow: 10px 15px 20px gray;
        }
        .main{
            width: 100%;

        }
    </style>
</head>
<body>
    <div class="admin">
        <div class="container-fluid">
            <div class="container d-grid justify-content-center">
                <div class="main">
                <h1 class="fw-bold mt-5 mb-3">Admin</h1>
                
                <div id="messagesList">
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="mb-3 messages" id="message-' . $row['id'] . '">';
                        echo '<h5 class="fw-bold">' . htmlspecialchars($row['name']) . '</h5>';
                        echo '<p>' . htmlspecialchars($row['message']) . '</p>';
                        echo '<button class="btn btn-primary delete-btn" data-id="' . $row['id'] . '">Delete</button>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No messages found.</p>";
                }
                
                $conn->close();
                ?>
                </div>
                </div>
               
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function fetchMessages() {
                $.ajax({
                    url: 'fetch_messages.php',
                    type: 'GET',
                    success: function(response) {
                        var messages = JSON.parse(response);
                        var messagesList = '';
                        $.each(messages, function(index, message) {
                            messagesList += '<div class="mb-3 messages" id="message-' + message.id + '">' +
                                '<h5 class="fw-bold">' + htmlspecialchars(message.name) + '</h5>' +
                                '<p>' + htmlspecialchars(message.message) + '</p>' +
                                '<button style="width:100%" class="btn btn-primary delete-btn" data-id="' + message.id + '">Delete</button>' +
                                '</div>';
                        });
                        $('#messagesList').html(messagesList);
                        attachDeleteHandlers(); // Attach delete handlers to new elements
                    }
                });
            }

            function attachDeleteHandlers() {
                $('.delete-btn').on('click', function() {
                    var id = $(this).data('id');
                    if (confirm('Are you sure to DELETE this message?')) {
                        $.ajax({
                            url: 'delete_message.php',
                            type: 'POST',
                            data: {deleteId: id},
                            success: function(response) {
                                if (response == 'success') {
                                    $('#message-' + id).remove();
                                } else {
                                    alert('Failed to delete the message.');
                                }
                            }
                        });
                    }
                });
            }

            function htmlspecialchars(str) {
                if (typeof str === "string") {
                    return str.replace(/&/g, "&amp;")
                              .replace(/</g, "&lt;")
                              .replace(/>/g, "&gt;")
                              .replace(/"/g, "&quot;")
                              .replace(/'/g, "&#039;");
                }
                return str;
            }

            // Poll for new messages every 5 seconds
            setInterval(fetchMessages, 5000);
            fetchMessages(); // Initial fetch
        });
    </script>
</body>
</html>