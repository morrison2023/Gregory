<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = '6123456789ser@gmail.com'; // адрес, на который будет отправлена почта
  $subject = 'Новое сообщение от ' . $name; // тема письма
  
  $headers = "From: $name <$email>\r\n"; // заголовки письма
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
  // тело письма
  $body = "<p><strong>Имя:</strong> $name</p>
           <p><strong>Фамилия:</strong> $surname</p>
           <p><strong>Телефон:</strong> $phone</p>
           <p><strong>Email:</strong> $email</p>
           <p><strong>Сообщение:</strong></p>
           <p>$message</p>";
  
  // отправка письма
  if(mail($to, $subject, $body, $headers)) {
    echo '<p>Ваше сообщение отправлено!</p>';
  } else {
    echo '<p>Ошибка при отправке сообщения. Попробуйте еще раз.</p>';
  }
}
?>