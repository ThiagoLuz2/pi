<?php


?>
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
            padding-top: 80px; 
        }

        /* HEADER */
        .header {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: white;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: translateY(-2px);
        }

        .logo-icon {
            font-size: 2.5rem;
            color: #f59e0b;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-title {
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1;
            color: white;
        }

        .logo-subtitle {
            font-size: 0.8rem;
            font-weight: 300;
            color: #e0f2fe;
            margin-top: 2px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-1px);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            color: #fef3c7;
        }

        .nav-link .material-symbols-outlined {
            font-size: 1.2rem;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn-header {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-login {
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-login:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .btn-register {
            background: #f59e0b;
            color: white;
            border: 2px solid #f59e0b;
        }

        .btn-register:hover {
            background: #d97706;
            border-color: #d97706;
            transform: translateY(-2px);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* CONTEÚDO PRINCIPAL (mantendo seu estilo anterior) */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header-content {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px 0;
        }

        .header-content h1 {
            color: #1e40af;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .header-content p {
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

        /* RESPONSIVO */
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .header-container {
                height: 70px;
                padding: 0 15px;
            }

            .logo-title {
                font-size: 1.4rem;
            }

            .logo-icon {
                font-size: 2rem;
            }

            .nav-menu {
                display: none;
            }

            .header-actions {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hotels-grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 15px;
            }
            
            .header-content h1 {
                font-size: 2rem;
            }

            /* Menu Mobile */
            .nav-menu.mobile-active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }

            .nav-menu.mobile-active .nav-link {
                padding: 15px;
                justify-content: center;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }

            .header-actions.mobile-active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: calc(100% + 200px);
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
                padding: 20px;
                gap: 10px;
            }

            .header-actions.mobile-active .btn-header {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="header-container">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <span class="material-symbols-outlined logo-icon">house</span>
                <div class="logo-text">
                    <span class="logo-title">NaHoraDoCheckIn</span>
                    <span class="logo-subtitle">Sua melhor experiência hotelera</span>
                </div>
            </a>

            <!-- Menu de Navegação -->
            <nav class="nav-menu" id="navMenu">
                <a href="index.php" class="nav-link active">
                    <span class="material-symbols-outlined">home</span>
                    Início
                </a>
                <a href="hoteis.php" class="nav-link">
                    <span class="material-symbols-outlined">apartment</span>
                    Hotéis
                </a>
                <a href="favoritos.php" class="nav-link">
                    <span class="material-symbols-outlined">favorite</span>
                    Favoritos
                </a>
                <a href="sobre.php" class="nav-link">
                    <span class="material-symbols-outlined">info</span>
                    Sobre
                </a>
                <a href="contato.php" class="nav-link">
                    <span class="material-symbols-outlined">contact_support</span>
                    Contato
                </a>
            </nav>

            <!-- Ações do Header -->
            <div class="header-actions" id="headerActions">
                <button class="btn-header btn-login">
                    <span class="material-symbols-outlined">login</span>
                    Entrar
                </button>
                <a href="cadastro.php" class="btn-header btn-register">
                    <span class="material-symbols-outlined">person_add</span>
                    Cadastrar
                </a>
            </div>

            <!-- Botão Menu Mobile -->
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">
        <div class="header-content">
            <h1>🌾 Hotéis Fazenda Premium</h1>
            <p>Descubra os melhores hotéis fazenda para sua próxima escapada</p>
        </div>

        <div class="hotels-grid">
            <!-- Hotel 1: Fazenda Paraíso Verde -->
            <div class='hotel-card'>
                <div class='carousel' id='carousel-1'>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'></div>
                        <div class='carousel-item'></div>
                        <div class='carousel-item'></div>
                    </div>
                    <div class='carousel-controls'>
                        <button class='carousel-btn prev' onclick='prevSlide(1)'>
                            <span class='material-symbols-outlined'>chevron_left</span>
                        </button>
                        <button class='carousel-btn next' onclick='nextSlide(1)'>
                            <span class='material-symbols-outlined'>chevron_right</span>
                        </button>
                    </div>
                    <div class='carousel-indicators'>
                        <span class='indicator active' onclick='goToSlide(1, 0)'></span>
                        <span class='indicator' onclick='goToSlide(1, 1)'></span>
                        <span class='indicator' onclick='goToSlide(1, 2)'></span>
                    </div>
                </div>
                <div class='hotel-content'>
                    <div class='hotel-header'>
                        <div>
                            <h3 class='hotel-name'>Fazenda Paraíso Verde</h3>
                            <div class='hotel-stars'>★★★★★</div>
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
                        <a href='fazenda-paraiso-verde.html' class='btn btn-primary'>
                            <span class='material-symbols-outlined'>visibility</span>
                            Ver Hotel
                        </a>
                    </div>
                </div>
            </div>

            <!-- Adicione os outros hotéis aqui seguindo o mesmo padrão -->
            
        </div>
    </div>

    <script>
        // Funções do Carrossel (mantidas do código anterior)
        function nextSlide(carouselId) {
            const carousel = document.getElementById(`carousel-${carouselId}`);
            const inner = carousel.querySelector('.carousel-inner');
            const items = carousel.querySelectorAll('.carousel-item');
            const indicators = carousel.querySelectorAll('.indicator');
            
            const activeIndex = Array.from(items).findIndex(item => item.classList.contains('active'));
            const nextIndex = (activeIndex + 1) % items.length;
            
            updateCarousel(carouselId, nextIndex);
        }

        function prevSlide(carouselId) {
            const carousel = document.getElementById(`carousel-${carouselId}`);
            const inner = carousel.querySelector('.carousel-inner');
            const items = carousel.querySelectorAll('.carousel-item');
            const indicators = carousel.querySelectorAll('.indicator');
            
            const activeIndex = Array.from(items).findIndex(item => item.classList.contains('active'));
            const prevIndex = (activeIndex - 1 + items.length) % items.length;
            
            updateCarousel(carouselId, prevIndex);
        }

        function goToSlide(carouselId, slideIndex) {
            updateCarousel(carouselId, slideIndex);
        }

        function updateCarousel(carouselId, newIndex) {
            const carousel = document.getElementById(`carousel-${carouselId}`);
            const inner = carousel.querySelector('.carousel-inner');
            const items = carousel.querySelectorAll('.carousel-item');
            const indicators = carousel.querySelectorAll('.indicator');
            
            items.forEach(item => item.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));
            
            items[newIndex].classList.add('active');
            indicators[newIndex].classList.add('active');
            
            inner.style.transform = `translateX(-${newIndex * 100}%)`;
        }

        // Auto-rotate carousels
        document.addEventListener('DOMContentLoaded', function() {
            setInterval(() => {
                const carousels = document.querySelectorAll('.carousel');
                carousels.forEach((carousel, index) => {
                    const carouselId = index + 1;
                    nextSlide(carouselId);
                });
            }, 5000);
        });

        // Função de favoritos
        function toggleFavorite(button, hotelId) {
            button.classList.toggle('active');
            const icon = button.querySelector('.material-symbols-outlined');
            
            if (button.classList.contains('active')) {
                let favorites = JSON.parse(localStorage.getItem('favorite_hotels')) || [];
                if (!favorites.includes(hotelId)) {
                    favorites.push(hotelId);
                    localStorage.setItem('favorite_hotels', JSON.stringify(favorites));
                }
                console.log(`Hotel ${hotelId} favoritado!`);
            } else {
                let favorites = JSON.parse(localStorage.getItem('favorite_hotels')) || [];
                favorites = favorites.filter(id => id !== hotelId);
                localStorage.setItem('favorite_hotels', JSON.stringify(favorites));
                console.log(`Hotel ${hotelId} removido dos favoritos!`);
            }
        }

        // Menu Mobile
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const navMenu = document.getElementById('navMenu');
            const headerActions = document.getElementById('headerActions');
            
            navMenu.classList.toggle('mobile-active');
            headerActions.classList.toggle('mobile-active');
            
            // Alterar ícone do botão
            const icon = this.querySelector('.material-symbols-outlined');
            icon.textContent = navMenu.classList.contains('mobile-active') ? 'close' : 'menu';
        });

        // Fechar menu mobile ao clicar em um link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const navMenu = document.getElementById('navMenu');
                const headerActions = document.getElementById('headerActions');
                const mobileBtn = document.getElementById('mobileMenuBtn');
                
                if (window.innerWidth <= 768) {
                    navMenu.classList.remove('mobile-active');
                    headerActions.classList.remove('mobile-active');
                    mobileBtn.querySelector('.material-symbols-outlined').textContent = 'menu';
                }
            });
        });
    </script>
</body>
</html>