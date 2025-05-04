<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $to = "contato@yuzela.com"; // Seu e-mail
    $subject = "Nova mensagem de cliente - $nome";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
}
?>