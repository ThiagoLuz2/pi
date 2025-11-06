<?php
include_once '../config/database.php';
include_once '../classes/Favorito.php';
include_once '../includes/header.php';

$database = new Database();
$db = $database->getConnection();
$favorito = new Favorito($db);


$query = "SELECT * FROM hoteis ORDER BY nome";
$stmt = $db->prepare($query);
$stmt->execute();
$hoteis = $stmt->fetchAll(PDO::FETCH_ASSOC);


$total_favoritos = $favorito->contarFavoritos($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotéis - Descubra Seu Lugar Ideal</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        
        <div class="header">
            <div class="user-info">
                <span>Olá, <?php echo $_SESSION['usuario_nome']; ?>!</span>
                <a href="favoritos.php" class="favoritos-link">
                    ❤️ Meus Favoritos (<?php echo $total_favoritos; ?>)
                </a>
            </div>
            <h1>🏨 Descubra Hotéis Incríveis</h1>
            <p>Encontre o lugar perfeito para sua próxima viagem</p>
        </div>

        
        <?php if(isset($_SESSION['mensagem'])): ?>
            <div class="mensagem <?php echo $_SESSION['tipo_mensagem']; ?>">
                <?php 
                echo $_SESSION['mensagem']; 
                unset($_SESSION['mensagem']);
                unset($_SESSION['tipo_mensagem']);
                ?>
            </div>
        <?php endif; ?>

        
        <div class="hotel-grid">
            <?php foreach($hoteis as $hotel): ?>
                <?php
                $favorito->usuario_id = $_SESSION['usuario_id'];
                $favorito->hotel_id = $hotel['id'];
                $is_favorito = $favorito->isFavorito();
                ?>
                
                <div class="hotel-card">
                    <div class="hotel-image" onclick="window.location.href='detalhes_hotel.php?id=<?php echo $hotel['id']; ?>'">
                        <img src="<?php echo $hotel['imagem_url'] ?: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400'; ?>" alt="<?php echo $hotel['nome']; ?>">
                        <div class="hotel-overlay">
                            <span class="ver-detalhes">Ver Detalhes</span>
                        </div>
                    </div>
                    
                    <div class="hotel-info">
                        <h3 class="hotel-nome"><?php echo htmlspecialchars($hotel['nome']); ?></h3>
                        
                        <div class="hotel-localizacao">
                            📍 <?php echo htmlspecialchars($hotel['localizacao']); ?>
                        </div>
                        
                        <?php if($hotel['preco_medio']): ?>
                            <div class="hotel-preco">
                                R$ <?php echo number_format($hotel['preco_medio'], 2, ',', '.'); ?> / noite
                            </div>
                        <?php endif; ?>
                        
                        <p class="hotel-descricao">
                            <?php echo htmlspecialchars(mb_strimwidth($hotel['descricao'], 0, 120, '...')); ?>
                        </p>
                        
                        <div class="hotel-actions">
                            <button class="btn-detalhes" onclick="window.location.href='detalhes_hotel.php?id=<?php echo $hotel['id']; ?>'">
                                🔍 Ver Detalhes
                            </button>
                            
                            <form method="POST" action="gerenciar_favorito.php" class="favorito-form">
                                <input type="hidden" name="hotel_id" value="<?php echo $hotel['id']; ?>">
                                <input type="hidden" name="acao" value="<?php echo $is_favorito ? 'remover' : 'adicionar'; ?>">
                                <input type="hidden" name="redirect_to" value="index.php">
                                <button type="submit" class="btn-favorito <?php echo $is_favorito ? 'favoritado' : ''; ?>">
                                    <?php echo $is_favorito ? '❤️' : '🤍'; ?>
                                    <?php echo $is_favorito ? 'Favorito' : 'Favoritar'; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if(empty($hoteis)): ?>
            <div class="empty-state">
                <h2>Nenhum hotel encontrado</h2>
                <p>Volte em breve para descobrir novos hotéis!</p>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Efeitos interativos
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.hotel-card');
            
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Animações de botão favorito
            const favoritoButtons = document.querySelectorAll('.btn-favorito');
            favoritoButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    if (this.classList.contains('favoritado')) {
                        this.innerHTML = '🤍 Favoritar';
                        this.classList.remove('favoritado');
                    } else {
                        this.innerHTML = '❤️ Favorito';
                        this.classList.add('favoritado');
                    }
                });
            });
        });
    </script>
</body>
</html>