<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotéis Fazenda - NaHoraDoCheckIn</title>
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
        
        
        .hero {
            background: linear-gradient(to right, var(--azul-principal), var(--azul-medio));
            background-size: cover;
            background-position: center;
            color: var(--branco);
            text-align: center;
            padding: 5rem 1rem;
            margin-bottom: 2rem;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        
        .search-bar {
            display: flex;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        
        .search-bar input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: none;
            font-size: 1rem;
        }
        
        .search-bar button {
            background-color: var(--laranja-principal);
            color: var(--branco);
            border: none;
            padding: 0 1.5rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .search-bar button:hover {
            background-color: var(--laranja-secundario);
        }
        
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem 3rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--azul-principal);
            position: relative;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--laranja-principal);
            margin: 0.5rem auto;
        }
        
        .hotels-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .hotel-card {
            background-color: var(--branco);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .hotel-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .hotel-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .favorite-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .favorite-btn:hover {
            background-color: var(--branco);
        }
        
        .favorite-btn i {
            color: var(--cinza-escuro);
            font-size: 1.2rem;
            transition: color 0.3s;
        }
        
        .favorite-btn.active i {
            color: var(--laranja-principal);
        }
        
        .hotel-info {
            padding: 1.5rem;
        }
        
        .hotel-name {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--azul-principal);
        }
        
        .hotel-location {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 0.5rem;
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
        
        .hotel-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--azul-principal);
            margin-bottom: 1rem;
        }
        
        .hotel-price span {
            font-size: 0.9rem;
            font-weight: normal;
            color: var(--cinza-escuro);
        }
        
        .hotel-actions {
            display: flex;
            justify-content: space-between;
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
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .hotels-grid {
                grid-template-columns: 1fr;
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
                    <li><a href="index.php">voltar</a></li>
                    <li><a href="pesquisa.php">Pesquisa</a></li>
                    <li><a href="about.php">Sobre nós</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    <section class="hero">
        <h2>Encontre o Hotel Fazenda Perfeito</h2>
        <p>Descubra refúgios rurais incríveis para relaxar e reconectar com a natureza</p>
    
    </section>

    <main>
        <h2 class="section-title">Nossos Hotéis Fazenda</h2>
        <div class="hotels-grid">
            
            <div class="hotel-card">
                <div class="hotel-image" style="background-image: url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    <button class="favorite-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="hotel-info">
                    <h3 class="hotel-name">Fazenda Serenidade</h3>
                    <div class="hotel-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Campos do Jordão, SP</span>
                    </div>
                    <div class="hotel-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="hotel-price">R$ 420<span>/noite</span></div>
                    <div class="hotel-actions">
                        <button class="btn btn-primary">Ver Mais</button>
                        <button class="btn btn-secondary">favoritar</button>
                    </div>
                </div>
            </div>

            <div class="hotel-card">
                <div class="hotel-image" style="background-image: url('https://images.unsplash.com/photo-1590073242678-70ee3fc28e8e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    <button class="favorite-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="hotel-info">
                    <h3 class="hotel-name">Recanto das Montanhas</h3>
                    <div class="hotel-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Gramado, RS</span>
                    </div>
                    <div class="hotel-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="hotel-price">R$ 380<span>/noite</span></div>
                    <div class="hotel-actions">
                        <button class="btn btn-primary">Ver Mais</button>
                        <button class="btn btn-secondary">favoritar</button>
                    </div>
                </div>
            </div>

            <div class="hotel-card">
                <div class="hotel-image" style="background-image: url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    <button class="favorite-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="hotel-info">
                    <h3 class="hotel-name">Vale da Lua</h3>
                    <div class="hotel-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Chapada dos Veadeiros, GO</span>
                    </div>
                    <div class="hotel-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="hotel-price">R$ 320<span>/noite</span></div>
                    <div class="hotel-actions">
                        <button class="btn btn-primary">Ver Mais</button>
                        <button class="btn btn-secondary">favoritar</button>
                    </div>
                </div>
            </div>

            <div class="hotel-card">
                <div class="hotel-image" style="background-image: url('https://images.unsplash.com/photo-1552733407-5d5c46c3bb3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    <button class="favorite-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="hotel-info">
                    <h3 class="hotel-name">Fazenda do Sol</h3>
                    <div class="hotel-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bonito, MS</span>
                    </div>
                    <div class="hotel-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="hotel-price">R$ 450<span>/noite</span></div>
                    <div class="hotel-actions">
                        <button class="btn btn-primary">Ver Mais</button>
                        <button class="btn btn-secondary">favoritar</button>
                    </div>
                </div>
            </div>

            <div class="hotel-card">
                <div class="hotel-image" style="background-image: url('https://images.unsplash.com/photo-1586375300773-8384e3e4916f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    <button class="favorite-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="hotel-info">
                    <h3 class="hotel-name">Refúgio das Águas</h3>
                    <div class="hotel-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Brotas, SP</span>
                    </div>
                    <div class="hotel-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="hotel-price">R$ 290<span>/noite</span></div>
                    <div class="hotel-actions">
                        <button class="btn btn-primary">Ver Mais</button>
                        <button class="btn btn-secondary">favoritar</button>
                    </div>
                </div>
            </div>

            <div class="hotel-card">
                <div class="hotel-image" style="background-image: url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    <button class="favorite-btn"><i class="far fa-heart"></i></button>
                </div>
                <div class="hotel-info">
                    <h3 class="hotel-name">Sítio das Flores</h3>
                    <div class="hotel-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Petrópolis, RJ</span>
                    </div>
                    <div class="hotel-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="hotel-price">R$ 350<span>/noite</span></div>
                    <div class="hotel-actions">
                        <button class="btn btn-primary">Ver Mais</button>
                        <button class="btn btn-secondary">favoritar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
                    <li><a href="#">sobre nós</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contato</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Senac, 730, Visconde de Taunay, Joinville, SC</li>
                    <li><i class="fas fa-phone"></i> (47) 99706-2510</li>
                    <li><i class="fas fa-envelope"></i>contato@nahoradocheckin.com</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Newsletter</h3>
                <p>Inscreva-se para receber ofertas exclusivas</p>
                <div class="search-bar" style="margin-top: 1rem;">
                    <input type="email" placeholder="Seu e-mail">
                    <button><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 NaHoraDoCheckIn. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.favorite-btn').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    this.classList.add('active');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    this.classList.remove('active');
                }
            });
        });

        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('click', function() {
                const hotelName = this.closest('.hotel-card').querySelector('.hotel-name').textContent;
                alert(`Mais informações sobre ${hotelName} em breve!`);
            });
        });

        document.querySelectorAll('.btn-secondary').forEach(button => {
            button.addEventListener('click', function() {
                const hotelName = this.closest('.hotel-card').querySelector('.hotel-name').textContent;
                alert(`Iniciando reserva para ${hotelName}!`);
            });
        });
    </script>
</body>
</html>