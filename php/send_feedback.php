<?php
$name = $_POST['name'];
$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);

$comment = $_POST['comment'];
$comment = htmlspecialchars($comment);
$comment = urldecode($comment);
$comment = trim($comment);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);




$to = "petruniv.s.i@gmail.com";
$subject = "Відгук з Трансфер Буковель";
$massage = "Імя : " . $name . "\r\n" . "Відгук : " . $comment . "\r\n" . "E-mail : " . $email;
$headers = "From: transfer@bukoveltransfer.com.ua" . "\r\n";


if (mail($to, $subject, $massage, $headers)) {
    echo "<h3 style=\"font-weight: 300;\">Відгук відправлено! Дякуємо, " . $name . ", що користались нашими послугами</h3>";
} else {
    echo "<h3 style=\"font-weight: 300;\>При відправці відгуку виникла помилка(/h3)";
} 
?>

<!--<Переадресация на главную страницу сайта, через 3 секунды--->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://bukoveltransfer.com.ua");}
window.setTimeout("changeurl();",3000);
</script>