<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazenda Paraíso Verde - Hotéis Fazenda</title>
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

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: #1e40af;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 30px;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background: #1e3a8a;
        }

        .hotel-detail {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Carrossel Grande */
        .main-carousel {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .main-carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            height: 100%;
        }

        .main-carousel-item {
            min-width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
        }

        .main-carousel-item:nth-child(2) {
            background: linear-gradient(135deg, #059669, #10b981);
        }

        .main-carousel-item:nth-child(3) {
            background: linear-gradient(135deg, #dc2626, #ef4444);
        }

        .main-carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            transform: translateY(-50%);
        }

        .main-carousel-btn {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.5rem;
        }

        .main-carousel-btn:hover {
            background: white;
            transform: scale(1.1);
        }

        .main-carousel-indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .main-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .main-indicator.active {
            background: white;
            transform: scale(1.3);
        }

        .hotel-info {
            padding: 40px;
        }

        .hotel-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .hotel-name {
            color: #1e40af;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .hotel-stars {
            color: #f59e0b;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .hotel-location {
            color: #666;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .hotel-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 30px;
        }

        .hotel-price span {
            font-size: 1.2rem;
            color: #666;
            font-weight: 400;
        }

        .hotel-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 30px;
        }

        .hotel-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .feature .material-symbols-outlined {
            color: #1e40af;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
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

        .action-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        @media (max-width: 768px) {
            .main-carousel {
                height: 300px;
            }
            
            .main-carousel-item {
                font-size: 4rem;
            }
            
            .hotel-header {
                flex-direction: column;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn {
                justify-content: center;
            }
            
            .hotel-info {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="back-button">
            <span class="material-symbols-outlined">arrow_back</span>
            Voltar para Hotéis
        </a>

        <div class="hotel-detail">
            <!-- Carrossel Principal -->
            <div class="main-carousel" id="mainCarousel">
                <div class="main-carousel-inner">
                    <div class="main-carousel-item active">🏞️</div>
                    <div class="main-carousel-item">🏡</div>
                    <div class="main-carousel-item">🌅</div>
                    <div class="main-carousel-item">🍽️</div>
                    <div class="main-carousel-item">🏊</div>
                </div>
                <div class="main-carousel-controls">
                    <button class="main-carousel-btn prev" onclick="prevMainSlide()">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button class="main-carousel-btn next" onclick="nextMainSlide()">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
                <div class="main-carousel-indicators">
                    <span class="main-indicator active" onclick="goToMainSlide(0)"></span>
                    <span class="main-indicator" onclick="goToMainSlide(1)"></span>
                    <span class="main-indicator" onclick="goToMainSlide(2)"></span>
                    <span class="main-indicator" onclick="goToMainSlide(3)"></span>
                    <span class="main-indicator" onclick="goToMainSlide(4)"></span>
                </div>
            </div>

            <div class="hotel-info">
                <div class="hotel-header">
                    <div class="hotel-info-content">
                        <h1 class="hotel-name">Fazenda Paraíso Verde</h1>
                        <div class="hotel-stars">★★★★★</div>
                        <div class="hotel-location">
                            <span class="material-symbols-outlined">location_on</span>
                            Campos do Jordão, SP
                        </div>
                        <div class="hotel-price">
                            R$ 450<span>/noite</span>
                        </div>
                    </div>
                </div>

                <div class="hotel-description">
                    <p>Um refúgio encantador nas montanhas de Campos do Jordão, onde a natureza e o conforto se encontram. 
                    A Fazenda Paraíso Verde oferece uma experiência única com atividades rurais autênticas, gastronomia 
                    regional e acomodações luxuosas.</p>
                    
                    <p>Desperte com o canto dos pássaros, participe de cavalgadas pelos campos, explore trilhas ecológicas 
                    e relaxe em nossa piscina com vista para as montanhas. Perfect para famílias, casais e grupos que 
                    buscam reconectar com a natureza.</p>
                </div>

                <div class="hotel-features">
                    <div class="feature">
                        <span class="material-symbols-outlined">wifi</span>
                        Wi-Fi Gratuito
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">restaurant</span>
                        Restaurante Regional
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">pool</span>
                        Piscina Aquecida
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">directions_horse</span>
                        Cavalgadas
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">hiking</span>
                        Trilhas Guiadas
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">spa</span>
                        Spa & Wellness
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">local_parking</span>
                        Estacionamento
                    </div>
                    <div class="feature">
                        <span class="material-symbols-outlined">family_restroom</span>
                        Área para Crianças
                    </div>
                </div>

                <div class="action-buttons">
                    <button class="btn btn-secondary" onclick="reservarHotel()">
                        <span class="material-symbols-outlined">book_online</span>
                        Fazer Reserva
                    </button>
                    <button class="btn btn-primary" onclick="favoritarHotel()">
                        <span class="material-symbols-outlined">favorite</span>
                        Favoritar
                    </button>
                    <a href="contato.html" class="btn btn-primary">
                        <span class="material-symbols-outlined">contact_support</span>
                        Entrar em Contato
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Funções do Carrossel Principal
        let currentMainSlide = 0;
        const totalMainSlides = 5;

        function nextMainSlide() {
            currentMainSlide = (currentMainSlide + 1) % totalMainSlides;
            updateMainCarousel();
        }

        function prevMainSlide() {
            currentMainSlide = (currentMainSlide - 1 + totalMainSlides) % totalMainSlides;
            updateMainCarousel();
        }

        function goToMainSlide(slideIndex) {
            currentMainSlide = slideIndex;
            updateMainCarousel();
        }

        function updateMainCarousel() {
            const inner = document.querySelector('.main-carousel-inner');
            const indicators = document.querySelectorAll('.main-indicator');
            
            // Move carousel
            inner.style.transform = `translateX(-${currentMainSlide * 100}%)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentMainSlide);
            });
        }

        // Auto-rotate main carousel
        setInterval(nextMainSlide, 4000);

        function reservarHotel() {
            alert('Redirecionando para página de reservas...');
            // window.location.href = 'reserva-fazenda-paraiso-verde.html';
        }

        function favoritarHotel() {
            alert('Hotel adicionado aos favoritos!');
            // Lógica para favoritar
        }
    </script>
</body>
</html>