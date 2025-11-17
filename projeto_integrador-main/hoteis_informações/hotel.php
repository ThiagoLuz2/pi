<?php
session_start();
$name = isset($_GET['name']) ? htmlspecialchars(urldecode($_GET['name'])) : 'Nome não informado';
$price = isset($_GET['price']) ? htmlspecialchars(urldecode($_GET['price'])) : '---';
$image = isset($_GET['image']) ? htmlspecialchars(urldecode($_GET['image'])) : '';
$stars = isset($_GET['stars']) ? htmlspecialchars(urldecode($_GET['stars'])) : '';
$location = isset($_GET['location']) ? htmlspecialchars(urldecode($_GET['location'])) : '';


include_once __DIR__ . '/../banco/config.php';

$feedbacks = [];
$feedback_error = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_feedback'])) {
    if (empty($_SESSION['usuario_id'])) {
        $feedback_error = 'Você precisa estar logado para enviar uma avaliação.';
    } else {
        $usuario_id = (int) $_SESSION['usuario_id'];
        $nota = isset($_POST['nota']) ? (int) $_POST['nota'] : 0;
        $comentario = trim($_POST['comentario'] ?? '');

        if ($nota < 1 || $nota > 5) {
            $feedback_error = 'Nota inválida.';
        } elseif (mb_strlen($comentario) > 2000) {
            $feedback_error = 'Comentário muito longo.';
        } else {
            try {
                $stmtIns = $pdo->prepare("INSERT INTO feedback (nome_hotel, nota, autor, data_do_comentario, comentario) VALUES (:hotel, :nota, :autor, NOW(), :comentario)");
                $stmtIns->execute([
                    ':hotel' => $name,
                    ':nota' => $nota,
                    ':autor' => $usuario_id,
                    ':comentario' => $comentario
                ]);
                
                header('Location: ' . $_SERVER['REQUEST_URI']);
                exit;
            } catch (Exception $e) {
                $feedback_error = 'Erro ao salvar avaliação: ' . $e->getMessage();
            }
        }
    }
}


if (!empty($name)) {
    try {
        $sql = "
            SELECT 
                f.nota AS rating,
                f.autor AS author_id,
                f.data_do_comentario AS data_do_comentario,
                f.comentario AS comment,
                COALESCE(u.nome_usuario, '') AS author_name
            FROM feedback f
            LEFT JOIN usuario u ON f.autor = u.id_usario
            WHERE f.nome_hotel = :hotel
            ORDER BY f.data_do_comentario DESC
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':hotel' => $name]);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($rows) {
            foreach ($rows as $r) {
                $date = '';
                if (!empty($r['data_do_comentario'])) {
                    $ts = strtotime($r['data_do_comentario']);
                    $date = ($ts !== false) ? date('d/m/y', $ts) : $r['data_do_comentario'];
                }
                $feedbacks[] = [
                    'rating'  => isset($r['rating']) ? (int)$r['rating'] : 0,
                    'author'  => !empty($r['author_name']) ? $r['author_name'] : 'Anônimo',
                    'date'    => $date,
                    'comment' => $r['comment'] ?? ''
                ];
            }
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
    }
}


if (empty($feedbacks) && isset($_GET['feedback'])) {
    $decoded = json_decode(urldecode($_GET['feedback']), true);
    if (is_array($decoded)) {
        $feedbacks = $decoded;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $name ?> - NaHoraDoCheckIn</title>
  <style>
    
    :root {
     --azul-principal: #023047;
            --azul-secundario: #023047;
            --azul-medio: #126782;
            --azul-claro: #dbeafe;
            --laranja-principal: #f97316;
            --laranja-secundario: #fdba74;
            --branco: #ffffff;
            --cinza-claro: #f8fafc;
            --cinza-escuro: #334155;
      --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background-color: var(--branco   );
      color: var(--dark-text);
      line-height: 1.6;
    }
    
    
    header {
      background-color: white;
      padding: 1rem 2rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      border-bottom: 1px solid var(--azul-principal);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary-color);
    }
    
    .back-button {
      color: var(--secondary-color);
      text-decoration: none;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      transition: all 0.3s ease;
      padding: 0.5rem 1rem;
      border-radius: 4px;
      border: 1px solid var(--border-color);
    }
    
    .back-button:hover {
      background-color: var(--secondary-color);
      color: white;
      transform: translateX(-3px);
    }
    
    .back-button::before {
      content: "←";
      margin-right: 8px;
    }
    
   
    .hotel-detail {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1.5rem;
    }
    
    .hotel-header {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      margin-bottom: 2rem;
    }
    
    .hotel-image-container {
      flex: 1;
      min-width: 300px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: var(--card-shadow);
    }
    
    .hotel-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    
    .hotel-image:hover {
      transform: scale(1.03);
    }
    
    .hotel-info {
      flex: 1;
      min-width: 300px;
      padding: 1.5rem;
      background: white;
      border-radius: 8px;
      box-shadow: var(--card-shadow);
    }
    
    .hotel-name {
      font-size: 1.8rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
      padding-bottom: 0.5rem;
      border-bottom: 2px solid var(--secondary-color);
    }
    
    .hotel-details {
      margin: 1.5rem 0;
    }
    
    .detail-item {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding: 0.5rem 0;
    }
    
    .detail-label {
      font-weight: 600;
      min-width: 100px;
      color: var(--light-text);
    }
    
    .detail-value {
      flex: 1;
    }
    
    .stars {
      color: #f39c12;
      font-size: 1.1rem;
      letter-spacing: 2px;
    }
    
    .price {
      font-size: 1.6rem;
      font-weight: 700;
      color: var(--accent-color);
    }
    
    .location {
      display: flex;
      align-items: center;
      color: var(--light-text);
    }
    
    .location::before {
      content: "📍";
      margin-right: 8px;
    }
    
   
    .reservation-section {
      text-align: center;
      margin-top: 2rem;
      padding: 2rem;
      background: white;
      border-radius: 8px;
      box-shadow: var(--card-shadow);
    }
    
    .reservation-button {
      display: inline-block;
      background-color: var(--accent-color);
      color: white;
      padding: 1rem 2.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      text-decoration: none;
      border-radius: 4px;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 255, 64, 1);
    }
    
    .reservation-button:hover {
      background-color: #ffffffff;
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0, 255, 55, 1);
      color: white;
    }
    
    .reservation-button:active {
      transform: translateY(1px);
    }
    
    
    .services-section {
      margin-top: 2rem;
      padding: 1.5rem;
      background: white;
      border-radius: 8px;
      box-shadow: var(--card-shadow);
    }
    
    .services-title {
      font-size: 1.3rem;
      margin-bottom: 1rem;
      color: var(--primary-color);
      border-bottom: 1px solid var(--border-color);
      padding-bottom: 0.5rem;
    }
    
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 1rem;
    }
    
    .service-item {
      display: flex;
      align-items: center;
      padding: 0.5rem;
    }
    
    .service-icon {
      margin-right: 10px;
      color: var(--secondary-color);
    }
    
   
    .reviews-section {
      margin-top: 2rem;
      padding: 1.5rem;
      background: white;
      border-radius: 8px;
      box-shadow: var(--card-shadow);
    }
    
    .reviews-title {
      font-size: 1.3rem;
      margin-bottom: 1rem;
      color: var(--primary-color);
      border-bottom: 1px solid var(--border-color);
      padding-bottom: 0.5rem;
    }
    
    .review-item {
      padding: 1rem 0;
      border-bottom: 1px solid var(--border-color);
    }
    
    .review-item:last-child {
      border-bottom: none;
    }
    
    .review-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.5rem;
    }
    
    .review-author {
      font-weight: 600;
    }
    
    .review-date {
      color: var(--light-text);
      font-size: 0.9rem;
    }
    
  
    .error-message {
      color: #e74c3c;
      background: #f9d6d5;
      border: 1px solid #e74c3c;
      padding: 0.75rem;
      border-radius: 4px;
      margin-bottom: 1.5rem;
    }
    
    
    .feedback-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 1rem;
    }
    
    .feedback-form label {
      font-weight: 600;
      color: var(--dark-text);
    }
    
    .feedback-form select,
    .feedback-form textarea {
      padding: 0.75rem;
      border: 1px solid var(--border-color);
      border-radius: 4px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    
    .feedback-form select:focus,
    .feedback-form textarea:focus {
      border-color: var(--accent-color);
      outline: none;
    }
    
    .feedback-form button {
      background-color: var(--accent-color);
      color: white;
      padding: 0.75rem;
      font-size: 1.1rem;
      font-weight: 600;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .feedback-form button:hover {
      background-color: #f97316;
    }
    
   
    @media (max-width: 768px) {
      .hotel-header {
        flex-direction: column;
      }
      
      .hotel-name {
        font-size: 1.5rem;
      }
      
      .price {
        font-size: 1.4rem;
      }
      
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }
    }
    
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .hotel-image-container, .hotel-info, .reservation-section, .services-section, .reviews-section {
      animation: fadeInUp 0.6s ease forwards;
    }
    
    .hotel-info {
      animation-delay: 0.1s;
      opacity: 0;
    }
    
    .reservation-section {
      animation-delay: 0.2s;
      opacity: 0;
    }
    
    .services-section {
      animation-delay: 0.3s;
      opacity: 0;
    }
    
    .reviews-section {
      animation-delay: 0.4s;
      opacity: 0;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">NaHoraDoCheckIn</div>
    <a href="../pesquisa.php" class="back-button">Voltar para Pesquisa</a>
  </header>

  <main class="hotel-detail">
    <div class="hotel-header">
      <div class="hotel-image-container">
        <?php if ($image): ?>
          <img src="<?= $image ?>" alt="<?= $name ?>" class="hotel-image">
        <?php else: ?>
          <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Imagem+do+Hotel" alt="Imagem do hotel" class="hotel-image">
        <?php endif; ?>
      </div>
      
      <div class="hotel-info">
        <h1 class="hotel-name"><?= $name ?></h1>
        
        <div class="hotel-details">
          <div class="detail-item">
            <span class="detail-label">Local:</span>
            <span class="detail-value location"><?= $location ?></span>
          </div>
          
          <div class="detail-item">
            <span class="detail-label">Preço:</span>
            <span class="detail-value price">R$ <?= $price ?></span>
          </div>
          
          <div class="detail-item">
            <span class="detail-label">Estrelas:</span>
            <span class="detail-value stars"><?= $stars ?></span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="services-section">
      <h2 class="services-title">Serviços do Hotel</h2>
      <div class="services-grid">
        <div class="service-item">
          <span class="service-icon">✓</span> Wi-Fi Gratuito
        </div>
        <div class="service-item">
          <span class="service-icon">✓</span> Café da Manhã
        </div>
        <div class="service-item">
          <span class="service-icon">✓</span> Piscina
        </div>
        <div class="service-item">
          <span class="service-icon">✓</span> Estacionamento
        </div>
        <div class="service-item">
          <span class="service-icon">✓</span> Academia
        </div>
        <div class="service-item">
          <span class="service-icon">✓</span> Ar Condicionado
        </div>
      </div>
    </div>
    
    <div class="reviews-section">
      <h2 class="reviews-title">Avaliações dos Hóspedes</h2>

      <?php if (!empty($feedback_error)): ?>
        <div class="error-message"><?= htmlspecialchars($feedback_error) ?></div>
      <?php endif; ?>

      <?php if (!empty($feedbacks)): ?>
        <?php foreach ($feedbacks as $fb): 
          $nota = isset($fb['nota']) ? intval($fb['nota']) : 0;
          $autor = isset($fb['autor']) ? htmlspecialchars($fb['autor']) : 'Anônimo';
          $date = isset($fb['date']) ? htmlspecialchars($fb['date']) : '';
          $comentario = isset($fb['comentario']) ? htmlspecialchars($fb['comentario']) : '';
          $starsStr = str_repeat('★', $nota) . str_repeat('☆', max(0, 5-$nota));
        ?>
          <div class="review-item">
            <div class="review-header">
              <span class="review-autor"><?= $autor ?></span>
              <span class="review-date"><?= $date ?></span>
            </div>
            <div class="stars"><?= $starsStr ?></div>
            <p><?= $comentario ?></p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Nenhuma avaliação ainda.</p>
      <?php endif; ?>

      <hr />

      <?php if (!empty($_SESSION['usuario_id'])): ?>
        <form method="POST" class="feedback-form">
          <label for="nota">Nota</label>
          <select name="nota" id="nota" required>
            <option value="">--</option>
            <?php for ($i=5;$i>=1;$i--): ?>
              <option value="<?= $i ?>"><?= $i ?> estrela<?= $i>1 ? 's' : '' ?></option>
            <?php endfor; ?>
          </select>

          <label for="comentario">Comentário</label>
          <textarea name="comentario" id="comentario" rows="4" maxlength="2000" required></textarea>

          <button type="submit" name="submit_feedback">Enviar Avaliação</button>
        </form>
      <?php else: ?>
        <p>Faça <a href="/login.php">login</a> ou <a href="/cadastro.php">cadastre-se</a> para enviar uma avaliação.</p>
      <?php endif; ?>

    </div>
    
    <div class="reservation-section">
      <a href="#" class="reservation-button">Fazer Reserva Agora</a>
    </div>
  </main>
</body>
</html>