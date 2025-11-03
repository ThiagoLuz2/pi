<?php

?>
<footer class="hotel-footer">
    <div class="footer-container">
        <div class="footer-content">
          
            <div class="footer-section">
                <h3>Sobre Nós</h3>
                <p>Bem-vindo ao nosso site de hospedagens para hotéis, onde oferecemos propostas únicas, memoráveis e imperdíveis para nossos usuários. Com localizações e cidades privilegiadas além dos serviços de excelência.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
            
           
            <div class="footer-section">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="acomodacoes.php">Pesquisa</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="galeria.php">Galeria</a></li>
                    <li><a href="promocoes.php">Promoções</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contato</h3>
                <div class="contact-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Rua Visconde de Taunay, 730 - Bairro Atiradoes, Joinivlle, Santa Catarina, Brasil</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-phone"></i>
                    <p>+55 (47) 99781-8323</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <p>NaHoraDoCheckIn@gmail.com</p>
                </div>
                <div class="contact-info">
                    <i class="fas fa-clock"></i>
                    <p>Atendimento das 7:00 às 22:00</p>
                </div>
            </div>
            
           
            <div class="footer-section">
                <h3>Promoções</h3>
                <p>Inscreva-se para receber nossas promoções exclusivas e novidades de hotéis feitos para você se hospedar com excelência e qualidade.</p>
                <form class="newsletter-form" action="newsletter.php" method="POST">
                    <input type="email" name="email" placeholder="Seu e-mail" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div=
        
        
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Hotel Exemplo. Todos os direitos reservados.</p>
            <div class="payment-methods">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
                <i class="fab fa-cc-paypal"></i>
            </div>
        </div>
    </div>
</footer>

<style>

.hotel-footer {
    background-color: #1a2b3c;
    color: #fff;
    padding: 50px 0 20px;
    margin-top: 50px;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}

.footer-section {
    flex: 1;
    min-width: 250px;
    margin-bottom: 30px;
    padding-right: 20px;
}

.footer-section h3 {
    color: #e6b325;
    margin-bottom: 20px;
    font-size: 1.2rem;
    position: relative;
    padding-bottom: 10px;
}

.footer-section h3::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
    background-color: #e6b325;
}

.footer-section p {
    margin-bottom: 15px;
    font-size: 0.95rem;
    color: white;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #ddd;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: #e6b325;
}

.contact-info {
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
}

.contact-info i {
    color: #e6b325;
    margin-right: 10px;
    min-width: 20px;
}

.social-links {
    display: flex;
    margin-top: 15px;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    margin-right: 10px;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s;
}

.social-links a:hover {
    background-color: #e6b325;
    transform: translateY(-3px);
}

.newsletter-form {
    display: flex;
    margin-top: 15px;
}

.newsletter-form input {
    flex: 1;
    padding: 10px 15px;
    border: none;
    border-radius: 4px 0 0 4px;
    outline: none;
}

.newsletter-form button {
    background-color: #e6b325;
    color: #1a2b3c;
    border: none;
    padding: 0 15px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.newsletter-form button:hover {
    background-color: #d4a21f;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 20px;
    text-align: center;
    font-size: 0.9rem;
    color: #aaa;
}

.payment-methods {
    display: flex;
    justify-content: center;
    margin-top: 15px;
    gap: 15px;
}

.payment-methods i {
    font-size: 2rem;
    color: #ddd;
}


@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
    }
    
    .footer-section {
        padding-right: 0;
    }
}
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">