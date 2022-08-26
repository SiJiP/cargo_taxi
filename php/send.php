<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);

    $name = urldecode($name);
    $phone = urldecode($phone);

    $name = trim($name);
    $phone = trim($phone);


    $to = "petruniv.s.i@gmail.com";
    $subject = "Заявка з Трансфер Буковель на зворотній звязок";
    $massage = "Імя : " . $name . "\r\n" ."Номер телефону : " . $phone;
    $headers = "From: transfer@bukoveltransfer.com.ua" . "\r\n";


    if (mail($to, $subject, $massage, $headers)) {
        echo "<h3 style=\"font-weight: 300;\">Заявку відправлено! Дякуємо, " . $name . ", ми незабаром звяжемось з вами<h3>";
    } else {
        echo "<h3 style=\"font-weight: 300;\">При відправці заявки виникла помилка</h3>";
    } 
    
?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="https://bukoveltransfer.com.ua");}
    window.setTimeout("changeurl();",3000);
</script>