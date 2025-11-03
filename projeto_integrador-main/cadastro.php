

<?php

session_start();
require 'banco/config.php';
$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'] ?? '';
    $confirmar_senha = $_POST['confirmar_senha'] ?? '';

    if ($senha !== $confirmar_senha) {
        $erro = "As senhas não coincidem!";
    } else {
        $stmt = $pdo->prepare("SELECT 1 FROM usuario WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $erro = "Email já cadastrado!";
        } else {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO usuario (nome_usuario, email, senha) VALUES (?, ?, ?)");
            if ($stmt->execute([$nome, $email, $senha_hash])) {
                $usuario_id = $pdo->lastInsertId();
                $_SESSION['usuario_id'] = $usuario_id;
                $_SESSION['usuario_nome'] = $nome;
                $_SESSION['usuario_email'] = $email;
                header('Location: index.php');
                exit;
            } else {
                $erro = "Erro ao cadastrar!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>NaHoraDoCheckIn - Cadastrar</title>
<link rel="stylesheet" href="assets/css/styles.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=home" />
</head>
<body>
  <header class="navbar21">
    <div class="logo-area21">
      <span class="material-symbols-outlined">home</span>
      <span class="logo21">NaHoraDoCheckIn</span>
    </div>
    <div class="menu24">
      <button class="bntmenu21"><a href="login.php">Entrar</a></button>
      <button class="bntmenu22"><a href="index.php">Voltar</a></button>
    </div>
  </header>

  <main class="main22">
    <h2>Cadastre-se no <span class="highlight22">NaHoraDoCheckIn</span></h2>
    <p>Preencha seus dados para criar uma conta</p>

    <div class="form-wrapper21">
      <div class="form-messages">
        <?php if (!empty($sucesso)): ?>
            <div class="success-message"><?= htmlspecialchars($sucesso) ?></div>
        <?php endif; ?>
        <?php if (!empty($erro)): ?>
            <div class="error-message"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>
      </div>

      <form id="registerForm" class="form21" method="POST" action="">
        <input type="hidden" name="register" value="1">
        <label>Email</label>
        <input type="email" placeholder="seu@email.com" name="email" required />

        <label>Nome Completo</label>
        <input type="text" placeholder="Seu Nome" name="nome" required />

        <label>Senha</label>
        <input type="password" placeholder="********" name="senha" required />

        <label>Confirmar Senha</label>
        <input type="password" placeholder="********" name="confirmar_senha" required />

        <button class="btn-primary21" type="submit">Cadastrar</button>
      </form>
    </div>
  </main>

 <?php include 'banco/footer.php'; ?>
</body>
</html>