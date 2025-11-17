<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazenda Serenidade - Detalhes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />

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
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--cinza-claro);
            color: var(--cinza-escuro);
            line-height: 1.6;
        }
        
        
        header {
            background: linear-gradient(to right, var(--azul-principal), var(--azul-secundario));
            color: var(--branco);
            padding: 1rem 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo span {
            font-size: 2rem;
            color: var(--laranja-principal);
        }
        
        .logo h1 {
            font-size: 1.8rem;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        nav a {
            color: var(--branco);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: var(--laranja-secundario);
        }
        
        
        .breadcrumb {
            max-width: 1200px;
            margin: 1rem auto;
            padding: 0 1rem;
        }
        
        .breadcrumb a {
            color: var(--azul-principal);
            text-decoration: none;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
        
        .hotel-details {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem 3rem;
        }
        
        .hotel-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2rem;
        }
        
        .hotel-title h1 {
            font-size: 2.5rem;
            color: var(--azul-principal);
            margin-bottom: 0.5rem;
        }
        
        .hotel-location {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 1rem;
            color: var(--cinza-escuro);
        }
        
        .hotel-location i {
            color: var(--laranja-principal);
        }
        
        .hotel-rating {
            display: flex;
            gap: 3px;
            margin-bottom: 1rem;
        }
        
        .hotel-rating i {
            color: var(--laranja-principal);
        }
        
        .hotel-rating span {
            margin-left: 10px;
            color: var(--cinza-escuro);
        }
        
        .hotel-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: var(--azul-principal);
            color: var(--branco);
        }
        
        .btn-primary:hover {
            background-color: var(--azul-secundario);
        }
        
        .btn-secondary {
            background-color: var(--laranja-principal);
            color: var(--branco);
        }
        
        .btn-secondary:hover {
            background-color: var(--laranja-secundario);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--azul-principal);
            color: var(--azul-principal);
        }
        
        .btn-outline:hover {
            background-color: var(--azul-claro);
        }
        
        
        .carousel-container {
            position: relative;
            margin-bottom: 2rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .carousel {
            display: flex;
            transition: transform 0.5s ease;
            height: 500px;
        }
        
        .carousel-slide {
            min-width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1.2rem;
            color: var(--azul-principal);
        }
        
        .carousel-btn:hover {
            background-color: var(--branco);
        }
        
        .carousel-prev {
            left: 20px;
        }
        
        .carousel-next {
            right: 20px;
        }
        
        .carousel-indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }
        
        .carousel-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .carousel-indicator.active {
            background-color: var(--branco);
        }
        
        
        .hotel-info {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }
        
        .hotel-description {
            background-color: var(--branco);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            color: var(--azul-principal);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: var(--laranja-principal);
            position: absolute;
            bottom: 0;
            left: 0;
        }
        
        .hotel-description p {
            margin-bottom: 1.5rem;
        }
        
        .amenities {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .amenity {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .amenity i {
            color: var(--laranja-principal);
            width: 20px;
        }
        
        /* Booking Card */
        .booking-card {
            background-color: var(--branco);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 100px;
        }
        
        .price {
            font-size: 2rem;
            font-weight: bold;
            color: var(--azul-principal);
            margin-bottom: 1rem;
        }
        
        .price span {
            font-size: 1rem;
            font-weight: normal;
            color: var(--cinza-escuro);
        }
        
        .booking-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .form-group label {
            font-weight: 500;
            color: var(--cinza-escuro);
        }
        
        .form-group input, .form-group select {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .guests-selector {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .guest-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .guest-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid var(--azul-principal);
            background-color: transparent;
            color: var(--azul-principal);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .guest-btn:hover {
            background-color: var(--azul-claro);
        }
        
        .total-price {
            display: flex;
            justify-content: space-between;
            margin: 1.5rem 0;
            padding-top: 1rem;
            border-top: 1px solid #eee;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        /* Reviews */
        .reviews {
            margin-top: 3rem;
        }
        
        .review-card {
            background-color: var(--branco);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        
        .reviewer {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .reviewer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--azul-claro);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--azul-principal);
            font-weight: bold;
        }
        
        .review-date {
            color: var(--cinza-escuro);
            font-size: 0.9rem;
        }
        
        
        footer {
            background-color: var(--azul-principal);
            color: var(--branco);
            padding: 3rem 1rem 1rem;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .footer-column h3 {
            color: var(--laranja-principal);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-column a {
            color: var(--branco);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column a:hover {
            color: var(--laranja-secundario);
        }
        
        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: background-color 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--laranja-principal);
        }
        
        .copyright {
            text-align: center;
            margin-top: 3rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }
            
            nav ul {
                gap: 1rem;
            }
            
            .hotel-header {
                flex-direction: column;
                gap: 1rem;
            }
            
            .carousel {
                height: 300px;
            }
            
            .hotel-info {
                grid-template-columns: 1fr;
            }
            
            .booking-card {
                position: static;
            }
        }
    </style>
</head>
<body>
    
    <header>
        <div class="header-container">
            <div class="logo">
                <span class="material-symbols-outlined">home</span>
                <h1>NaHoraDoCheckIn</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Hotéis</a></li>
                    <li><a href="#">Destinos</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    <div class="breadcrumb">
        <a href="#">Início</a> > <a href="#">Hotéis Fazenda</a> > <span>Fazenda Dona francisca</span>
    </div>

    
    <main class="hotel-details">
        <div class="hotel-header">
            <div class="hotel-title">
                <h1>Hotel fazenda Dona francisca</h1>
                <div class="hotel-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>SC-418,- Km 19 - Pirabeiraba, Joinville - SC</span>
                </div>
                <div class="hotel-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span>4.5 (5,4 mil avaliações)</span>
                </div>
            </div>
            <div class="hotel-actions">
                <button class="btn btn-outline"><i class="far fa-heart"></i> Favoritar</button>
                <button class="btn btn-primary"><i class="fas fa-share-alt"></i> Compartilhar</button>
            </div>
        </div>

        
        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-slide" style="background-image: url('https://static.wixstatic.com/media/9653d9_e087082f8c294b089ca96680a20754ce~mv2.png/v1/fit/w_1440,h_797,q_90,enc_avif,quality_auto/9653d9_e087082f8c294b089ca96680a20754ce~mv2.png');"></div>
                <div class="carousel-slide" style="background-image: url('https://static.wixstatic.com/media/9653d9_8a60ed17b659468b9048f20bcf4107bf~mv2.png/v1/fill/w_350,h_230,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/HDF%20%E2%80%A2%C2%A0site%20%E2%80%A2%2015.png');"></div>
                <div class="carousel-slide" style="background-image: url('https://static.wixstatic.com/media/9653d9_ca78dc661182475ca1c95df6708c7d1a~mv2.png/v1/fill/w_350,h_230,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Ala%20Mirante%20com%20p%C3%B4r%20do%20sol.png');"></div>
                <div class="carousel-slide" style="background-image: url('https://static.wixstatic.com/media/9653d9_192730544c2b46a380a667b0024e98db~mv2.png/v1/fill/w_280,h_280,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Master%20Mirante.png');"></div>
            </div>
            <button class="carousel-btn carousel-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-btn carousel-next"><i class="fas fa-chevron-right"></i></button>
            <div class="carousel-indicators">
                <div class="carousel-indicator active"></div>
                <div class="carousel-indicator"></div>
                <div class="carousel-indicator"></div>
                <div class="carousel-indicator"></div>
            </div>
        </div>

        <div class="hotel-info">
            <div class="hotel-description">
                <h2 class="section-title">Sobre o Hotel</h2>
                <p>Localizada na serra da Dona francisca, o hotel fazenda oferece uma experiência única de imersão na natureza com todo o conforto e sofisticação. A propriedade é um refúgio perfeito para quem busca tranquilidade e reconexão com o ambiente rural.</p>
                
                <p>Com arquitetura rústica e aconchegante, as acomodações foram cuidadosamente planejadas para proporcionar máximo conforto. Todas as suítes possuem lareira, varanda privativa com vista para as montanhas e banheira de hidromassagem.</p>
                
                <h2 class="section-title">Comodidades</h2>
                <div class="amenities">
                    <div class="amenity">
                        <i class="fas fa-wifi"></i>
                        <span>Wi-Fi gratuito</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-swimming-pool"></i>
                        <span>Piscina aquecida</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-utensils"></i>
                        <span>Restaurante</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-spa"></i>
                        <span>Spa</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-horse"></i>
                        <span>Cavalaria</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-hiking"></i>
                        <span>Trilhas guiadas</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-paw"></i>
                        <span>Permitido animais</span>
                    </div>
                    <div class="amenity">
                        <i class="fas fa-car"></i>
                        <span>Estacionamento gratuito</span>
                    </div>
                </div>
                
                <h2 class="section-title">Atividades Incluídas</h2>
                <ul>
                    <li>Café da manhã colonial com produtos da fazenda</li>
                    <li>Trilhas ecológicas com guia especializado</li>
                    <li>Passeio a cavalo pela propriedade</li>
                    <li>Arco e flecha para adultos e crianças</li>
                    <li>Atividades para crianças no espaço kids</li>
                </ul>
                
                <button class="btn btn-primary" style="margin-top: 2rem;">Mais Detalhes</button>
                
                <div class="reviews">
                    <h2 class="section-title">Avaliações</h2>
                    
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer">
                                <div class="reviewer-avatar">MC</div>
                                <div>
                                    <h4>Davi Henrique</h4>
                                    <div class="hotel-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="review-date">15 de Maio, 2023</div>
                        </div>
                        <p>Experiência incrível! A Fazenda Dona francisca superou todas as expectativas. As acomodações são impecáveis, a comida deliciosa e a equipe extremamente atenciosa. Voltaremos com certeza!</p>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer">
                                <div class="reviewer-avatar">RS</div>
                                <div>
                                    <h4>Thiago Soares da Luz</h4>
                                    <div class="hotel-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="review-date">02 de Abril, 2023</div>
                        </div>
                        <p>Lugar perfeito para descansar. As trilhas são lindas e o café da manhã é divinal. Só senti falta de mais opções no juro, mas no geral foi excelente.</p>
                    </div>
                </div>
            </div>
            
            <div class="booking-card">
                <div class="price">R$ 420 <span>/noite</span></div>
                
                <div class="booking-form">
                    <div class="form-group">
                        <label for="checkin">Check-in</label>
                        <input type="date" id="checkin">
                    </div>
                    
                    <div class="form-group">
                        <label for="checkout">Check-out</label>
                        <input type="date" id="checkout">
                    </div>
                    
                    <div class="form-group">
                        <label for="guests">Hóspedes</label>
                        <div class="guests-selector">
                            <span>Adultos</span>
                            <div class="guest-control">
                                <button class="guest-btn minus">-</button>
                                <span id="adult-count">2</span>
                                <button class="guest-btn plus">+</button>
                            </div>
                        </div>
                        <div class="guests-selector">
                            <span>Crianças</span>
                            <div class="guest-control">
                                <button class="guest-btn minus">-</button>
                                <span id="child-count">0</span>
                                <button class="guest-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="room-type">Tipo de Acomodação</label>
                        <select id="room-type">
                            <option>Suíte Standard</option>
                            <option>Suíte Superior</option>
                            <option>Suíte Premium com Vista</option>
                            <option>Chalé Familiar</option>
                        </select>
                    </div>
                    
                    <div class="total-price">
                        <span>Total:</span>
                        <span>R$ 1.260</span>
                    </div>
                    
                    <button class="btn btn-secondary" style="width: 100%;">Reservar Agora</button>
                    <button class="btn btn-outline" style="width: 100%;">Adicionar aos Favoritos</button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Sobre Nós</h3>
                <p>Somos especialistas em conectar você aos melhores hotéis fazenda do Brasil, proporcionando experiências únicas em contato com a natureza.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Hotéis</a></li>
                    <li><a href="#">Destinos</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contato</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Rua das Flores, 123 - São Paulo, SP</li>
                    <li><i class="fas fa-phone"></i> (11) 3456-7890</li>
                    <li><i class="fas fa-envelope"></i> contato@hoteisfazenda.com</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Inscreva-se para receber ofertas exclusivas</p>
                <div style="display: flex; margin-top: 1rem;">
                    <input type="email" placeholder="Seu e-mail" style="flex: 1; padding: 0.8rem; border: none; border-radius: 5px 0 0 5px;">
                    <button style="background-color: var(--laranja-principal); color: white; border: none; padding: 0 1rem; border-radius: 0 5px 5px 0; cursor: pointer;"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Hotéis Fazenda. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        // Carousel functionality
        const carousel = document.querySelector('.carousel');
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');
        let currentSlide = 0;
        
        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }
        
        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        });
        
        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateCarousel();
        });
        
        // Add click events to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                updateCarousel();
            });
        });
        
        // Auto-advance carousel
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        }, 5000);
        
        // Guest counter functionality
        const adultMinus = document.querySelector('.guests-selector:nth-child(1) .minus');
        const adultPlus = document.querySelector('.guests-selector:nth-child(1) .plus');
        const adultCount = document.getElementById('adult-count');
        
        const childMinus = document.querySelector('.guests-selector:nth-child(2) .minus');
        const childPlus = document.querySelector('.guests-selector:nth-child(2) .plus');
        const childCount = document.getElementById('child-count');
        
        adultMinus.addEventListener('click', () => {
            let count = parseInt(adultCount.textContent);
            if (count > 1) {
                adultCount.textContent = count - 1;
            }
        });
        
        adultPlus.addEventListener('click', () => {
            let count = parseInt(adultCount.textContent);
            if (count < 10) {
                adultCount.textContent = count + 1;
            }
        });
        
        childMinus.addEventListener('click', () => {
            let count = parseInt(childCount.textContent);
            if (count > 0) {
                childCount.textContent = count - 1;
            }
        });
        
        childPlus.addEventListener('click', () => {
            let count = parseInt(childCount.textContent);
            if (count < 10) {
                childCount.textContent = count + 1;
            }
        });
        
        // More details button
        document.querySelector('.btn-primary').addEventListener('click', function() {
            alert('Mais informações detalhadas sobre a Fazenda Serenidade serão exibidas em breve!');
        });
    </script>
</body>
</html>