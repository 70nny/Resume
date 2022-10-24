$tg_user = '1001201541'; // id пользователя, для отправки сообщения
$bot_token = '5665128925:AAHA-mQKtxARBoWMAhERUx49bjlNtYYavjc'; // токен бота
$name = $_GET['nm']
$email = $_GET['em']
$message = $_GET['msg']

echo 'ваше имя';
echo $name;
echo '<br>';

echo 'ваш email';
echo $email;
echo '<br>';

echo 'ваше сообщение';
echo $message;
echo '<br>';

echo '<a href="https://api.telegram.org/bot' . $bot_token . '/sendMessage?chat_id=' . $tg_user . '&text=' . $name . '%0A' . $email . '%0A' . $message . '">Подтвердить</a>';
