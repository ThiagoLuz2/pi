<?php
include_once '../banco/config.php';
include_once '../hoteis_tipo/favoritos.php';
include_once '../banco/header.php';

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
    <title>Hotéis Fazenda Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px 0;
        }

        .header h1 {
            color: #1e40af;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 1.1rem;
        }

        .hotels-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .hotel-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hotel-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .carousel {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            height: 100%;
        }

        .carousel-item {
            min-width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-item::before {
            content: "🏞️";
            font-size: 4rem;
            opacity: 0.7;
        }

        .carousel-item:nth-child(2)::before {
            content: "🏡";
        }

        .carousel-item:nth-child(3)::before {
            content: "🌅";
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
            transform: translateY(-50%);
        }

        .carousel-btn {
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-btn:hover {
            background: white;
            transform: scale(1.1);
        }

        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 5px;
        }

        .indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .indicator.active {
            background: white;
            transform: scale(1.2);
        }

        .hotel-content {
            padding: 25px;
        }

        .hotel-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .hotel-name {
            color: #1e40af;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .hotel-stars {
            color: #f59e0b;
            font-size: 1.1rem;
        }

        .hotel-location {
            color: #666;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .hotel-location .material-symbols-outlined {
            font-size: 1.1rem;
            color: #1e40af;
        }

        .hotel-price {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 20px;
        }

        .hotel-price span {
            font-size: 1rem;
            color: #666;
            font-weight: 400;
        }

        .hotel-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary {
            background: #1e40af;
            color: white;
        }

        .btn-primary:hover {
            background: #1e3a8a;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #f59e0b;
            color: white;
        }

        .btn-secondary:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        .btn-favorite {
            background: transparent;
            border: 2px solid #e5e7eb;
            color: #666;
        }

        .btn-favorite:hover {
            border-color: #f59e0b;
            color: #f59e0b;
        }

        .btn-favorite.active {
            background: #fef3c7;
            border-color: #f59e0b;
            color: #f59e0b;
        }

        .material-symbols-outlined {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .hotels-grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 15px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    
        <div class="header">
            <h1>NaHoraDoCheckIn - Hoteis Fazenda</h1>
            <p>Descubra os melhores hotéis fazenda para sua próxima escapada</p>
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
                    
                    <div class='hotel-location'>
                        <span class='material-symbols-outlined'>location_on</span>
                        Campos do Jordão, SP
                    </div>
                    
                    <div class='hotel-price'>
                        R$ 450<span>/noite</span>
                    </div>
                    
                    <div class='hotel-actions'>
                        <button class='btn btn-favorite' onclick='toggleFavorite(this, 1)'>
                            <span class='material-symbols-outlined'>favorite</span>
                            Favoritar
                        </button>
                        <a href='hoteis_informações/fazenda.php' class='btn btn-primary'>
                            <span class='material-symbols-outlined'>visibility</span>
                            Ver Hotel
                        </a>
                    </div>
                </div>
            </div>

           
            <div class='hotel-card'>
                <div class='carousel' id='carousel-2'>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'></div>
                        <div class='carousel-item'></div>
                        <div class='carousel-item'></div>
                    </div>
                    <div class='carousel-controls'>
                        <button class='carousel-btn prev' onclick='prevSlide(2)'>
                            <span class='material-symbols-outlined'>chevron_left</span>
                        </button>
                        <button class='carousel-btn next' onclick='nextSlide(2)'>
                            <span class='material-symbols-outlined'>chevron_right</span>
                        </button>
                    </div>
                    <div class='carousel-indicators'>
                        <span class='indicator active' onclick='goToSlide(2, 0)'></span>
                        <span class='indicator' onclick='goToSlide(2, 1)'></span>
                        <span class='indicator' onclick='goToSlide(2, 2)'></span>
                    </div>
                </div>
                <div class='hotel-content'>
                    <div class='hotel-header'>
                        <div>
                            <h3 class='hotel-name'>Sítio do Lago</h3>
                            <div class='hotel-stars'>★★★★</div>
                        </div>
                    </div>
                    
                    <div class='hotel-location'>
                        <span class='material-symbols-outlined'>location_on</span>
                        Gramado, RS
                    </div>
                    
                    <div class='hotel-price'>
                        R$ 380<span>/noite</span>
                    </div>
                    
                    <div class='hotel-actions'>
                        <button class='btn btn-favorite' onclick='toggleFavorite(this, 2)'>
                            <span class='material-symbols-outlined'>favorite</span>
                            Favoritar
                        </button>
                        <a href='sitio-do-lago.html' class='btn btn-primary'>
                            <span class='material-symbols-outlined'>visibility</span>
                            Ver Hotel
                        </a>
                    </div>
                </div>
            </div>

          
        </div>
    </div>

    <script>
       
        document.addEventListener('DOMContentLoaded', function() {
            setInterval(() => {
                const carousels = document.querySelectorAll('.carousel');
                carousels.forEach((carousel, index) => {
                    const carouselId = index + 1;
                    nextSlide(carouselId);
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            
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