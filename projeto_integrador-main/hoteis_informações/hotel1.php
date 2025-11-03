<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NaHoraDoCheckIn - Informações</title>
    <style>
        :root {
            --primary-color: #023047;
            --secondary-color: #ffb703;
            --accent-color: #fb8500;
            --light-color: #ecf0f1;
            --dark-color: #023047;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .logo span {
            color: var(--secondary-color);
        }
        
        .hotel-detail {
            display: flex;
            gap: 2rem;
            margin: 2rem 0;
        }
        
        .hotel-gallery {
            flex: 1;
        }
        
        .main-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .image-thumbnails {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.5rem;
        }
        
        .thumbnail {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        
        .thumbnail:hover {
            opacity: 0.8;
        }
        
        .hotel-info {
            flex: 1;
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            height: fit-content;
        }
        
        .hotel-name {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        
        .hotel-location {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #666;
        }
        
        .hotel-rating {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .stars {
            color: #f39c12;
            margin-right: 0.5rem;
        }
        
        .rating-value {
            font-weight: bold;
            margin-right: 0.5rem;
        }
        
        .reviews {
            color: #666;
        }
        
        .hotel-description {
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .amenities {
            margin-bottom: 1.5rem;
        }
        
        .amenities h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
        }
        
        .amenity {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .amenity i {
            margin-right: 0.5rem;
            color: var(--secondary-color);
        }
        
        .booking-card {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .price-period {
            font-size: 0.9rem;
            color: #666;
            font-weight: normal;
        }
        
        .booking-info {
            margin-bottom: 1.5rem;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .btn-book {
            display: block;
            width: 100%;
            padding: 1rem;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            text-decoration: none;
        }
        
        .btn-book:hover {
            background-color: #2980b9;
        }
        
        .hotel-details {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .detail-category h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .detail-item {
            margin-bottom: 0.5rem;
        }
        
        .reviews-section {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        
        .review {
            border-bottom: 1px solid #eee;
            padding: 1rem 0;
        }
        
        .review:last-child {
            border-bottom: none;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        
        .review-author {
            font-weight: bold;
        }
        
        .review-date {
            color: #666;
        }
        
        .review-rating {
            color: #f39c12;
            margin-bottom: 0.5rem;
        }
        
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
        }
        
        .footer-section {
            flex: 1;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-section a {
            color: #ddd;
            text-decoration: none;
        }
        
        .footer-section a:hover {
            color: white;
        }
        
        .copyright {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        @media (max-width: 768px) {
            .hotel-detail {
                flex-direction: column;
            }
            
            .amenities-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">NaHora<span>DoCheckIn</span></div>
                <nav>
                    <a href="#" style="color: white; text-decoration: none;">Voltar para a pesquisa</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="hotel-detail">
            <div class="hotel-gallery">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Hotel Paradise" class="main-image" id="mainImage">
                <div class="image-thumbnails">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Quarto" class="thumbnail" onclick="changeImage(this.src)">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Piscina" class="thumbnail" onclick="changeImage(this.src)">
                    <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Restaurante" class="thumbnail" onclick="changeImage(this.src)">
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Spa" class="thumbnail" onclick="changeImage(this.src)">
                </div>
            </div>
            
            <div class="hotel-info">
                <h1 class="hotel-name">Hotel Paradise Resort</h1>
                <div class="hotel-location">
                    <i>📍</i> Av. Beira Mar, 1234 - Florianópolis, SC
                </div>
                <div class="hotel-rating">
                    <div class="stars">★★★★★</div>
                    <div class="rating-value">4.8</div>
                    <div class="reviews">(247 avaliações)</div>
                </div>
                <p class="hotel-description">
                    Localizado à beira-mar, o Hotel Paradise Resort oferece uma experiência única de hospedagem com quartos luxuosos, piscina infinita, spa completo e restaurante gourmet. Ideal para casais em lua de mel e famílias que buscam conforto e tranquilidade.
                </p>
                
                <div class="amenities">
                    <h3>Comodidades</h3>
                    <div class="amenities-grid">
                        <div class="amenity"><i>✓</i> Wi-Fi gratuito</div>
                        <div class="amenity"><i>✓</i> Piscina</div>
                        <div class="amenity"><i>✓</i> Academia</div>
                        <div class="amenity"><i>✓</i> Spa</div>
                        <div class="amenity"><i>✓</i> Estacionamento</div>
                        <div class="amenity"><i>✓</i> Restaurante</div>
                        <div class="amenity"><i>✓</i> Bar</div>
                        <div class="amenity"><i>✓</i> Quartos para não-fumantes</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="booking-card">
            <div class="price">R$ 250,00 <span class="price-period">/ noite</span></div>
            <div class="booking-info">
                <div class="info-item">
                    <span>Check-in:</span>
                    <span>15:00 - 00:00</span>
                </div>
                <div class="info-item">
                    <span>Check-out:</span>
                    <span>até 12:00</span>
                </div>
                <div class="info-item">
                    <span>Quartos disponíveis:</span>
                    <span>12</span>
                </div>
            </div>
            <a href="https://www.hotelparadise.com/reservas" class="btn-book" target="_blank">
                Fazer Reserva no Site Oficial
            </a>
        </div>
        
        <div class="hotel-details">
            <h2>Detalhes do Hotel</h2>
            <div class="details-grid">
                <div class="detail-category">
                    <h3>Localização</h3>
                    <div class="detail-item"><strong>Endereço:</strong> Av. Beira Mar, 1234</div>
                    <div class="detail-item"><strong>Cidade:</strong> Florianópolis, SC</div>
                    <div class="detail-item"><strong>Distância do centro:</strong> 5 km</div>
                    <div class="detail-item"><strong>Distância do aeroporto:</strong> 20 km</div>
                </div>
                <div class="detail-category">
                    <h3>Serviços</h3>
                    <div class="detail-item"><strong>Recepção 24h</strong></div>
                    <div class="detail-item"><strong>Serviço de quarto</strong></div>
                    <div class="detail-item"><strong>Lavanderia</strong></div>
                    <div class="detail-item"><strong>Business center</strong></div>
                </div>
                <div class="detail-category">
                    <h3>Políticas</h3>
                    <div class="detail-item"><strong>Cancelamento gratuito:</strong> Até 48h antes</div>
                    <div class="detail-item"><strong>Cartões aceitos:</strong> Todos principais</div>
                    <div class="detail-item"><strong>Idiomas:</strong> PT, EN, ES</div>
                    <div class="detail-item"><strong>Idade mínima:</strong> 18 anos</div>
                </div>
            </div>
        </div>
        
        <div class="reviews-section">
            <h2>Avaliações dos Hóspedes</h2>
            <div class="review">
                <div class="review-header">
                    <div class="review-author">Maria Silva</div>
                    <div class="review-date">15 de Agosto, 2023</div>
                </div>
                <div class="review-rating">★★★★★</div>
                <p>Hotel incrível! Atendimento impecável, quarto espaçoso e limpo, e a vista do mar é deslumbrante. Com certeza voltarei!</p>
            </div>
            <div class="review">
                <div class="review-header">
                    <div class="review-author">João Santos</div>
                    <div class="review-date">02 de Julho, 2023</div>
                </div>
                <div class="review-rating">★★★★☆</div>
                <p>Experiência muito boa. O café da manhã é excelente e a localização é perfeita. Senti falta de mais opções no cardápio do restaurante.</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Hotel Paradise</h3>
                    <p>Oferecendo experiências únicas de hospedagem desde 2005.</p>
                </div>
                <div class="footer-section">
                    <h3>Contato</h3>
                    <ul>
                        <li>Av. Beira Mar, 1234</li>
                        <li>Florianópolis, SC</li>
                        <li>(48) 3333-4444</li>
                        <li>contato@hotelparadise.com</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Termos e condições</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Trabalhe conosco</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023 Hotel Paradise. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
</body>
</html>