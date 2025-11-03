<?php

session_start();
require 'Banco/config.php';
$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'] ?? '';

    $stmt = $pdo->prepare("SELECT id_usario, nome_usuario, senha FROM usuario WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['usuario_id'] = $user['id_usario'];
            $_SESSION['usuario_nome'] = $user['nome_usuario'];
            $_SESSION['usuario_email'] = $email;
            $sucesso = "Login realizado com sucesso!";
            header('Location: index.php');
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Email não cadastrado!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>NaHoraDoCheckIn - Entrar</title>
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
      <button class="bntmenu21">Entrar</button>
      <button class="bntmenu22"><a href="index.php">Voltar</a></button>
    </div>
  </header>

  <main class="main22">
    <h2>Bem-vindo ao <span class="highlight22">NaHoraDoCheckIn</span></h2>
    <p>Entre ou <a href="cadastro.php">cadastre-se</a> para encontrar os melhores hotéis</p>

    <div class="form-wrapper21">
      <div class="form-messages">
        <?php if (!empty($sucesso)): ?>
            <div class="success-message"><?= htmlspecialchars($sucesso) ?></div>
        <?php endif; ?>
        <?php if (!empty($erro)): ?>
            <div class="error-message"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>
      </div>

      <form id="loginForm" class="form21" method="POST" action="login.php">
          <input type="hidden" name="login" value="1">
          <label>Email</label>
          <input type="email" name="email" placeholder="seu@email.com" required />
      
          <label>Senha <a href="#" class="forgot21">Esqueceu a senha?</a></label>
          <input type="password" name="senha" placeholder="********" required />
      
          <button class="btn-primary21" type="submit">Entrar</button>
      </form>
    </div>
  </main>

 <?php include 'banco/footer.php'; ?>

  <script src="assets/js/login.js"></script>
</body>
</html>