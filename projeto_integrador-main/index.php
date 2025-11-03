<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaHoraDoCheckIn2</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <header class="navbar21">
        <div class="navbar-left21">
          <span class="material-symbols-outlined icon21">home</span>
          <span class="logo21">NaHoraDoCheckIn</span>
        </div>
        <nav class="navbar-right21">
            <a href="index.php">inicio</a>
            <a href="pesquisa.php">Pesquisar</a>
            <a href="about.php">Sobre Nós</a>
            <?php if (!isset($_SESSION['usuario_id'])): ?>
                <button class="btn-login21">
                    <a href="login.php"><span class="material-symbols-outlined">person</span>Entrar</a>
                </button>
            <?php else: ?>
                <span>Olá, <?= htmlspecialchars($_SESSION['usuario_nome']) ?></span>
                <button class="btn-login21">
                    <a href="logout.php"><span class="material-symbols-outlined">logout</span>Sair</a>
                </button>
            <?php endif; ?>
        </nav>
      </header>
    <div class="sla">
      <main class="hero21">
        <h1>
          Encontre o <span class="highlight21">hotel perfeito</span><br />
          para sua próxima viagem
        </h1>
        <p>Os melhores preços e ofertas para hotéis em todo o Brasil</p>
    
        <div class="search-bar21">
          <div class="input21">
            <span class="material-symbols-outlined">location_on</span>
            <input type="text" placeholder="Localização" />
          </div>
          <div class="input21">
            <span class="material-symbols-outlined">calendar_today</span>
            <input type="date" />
          </div>
          <div class="input21">
            <span class="material-symbols-outlined">group</span>
            <select>
              <option>1 hóspede</option>
              <option>2 hóspedes</option>
              <option>3 hóspedes</option>
            </select>
          </div>
          <button class="btn-search21">
            <span class="material-symbols-outlined">search</span>
            Buscar Hotéis
          </button>
        </div>
      </main>
    </div>
    <section class="container17">
        <h2>Para viajantes profissionais</h2>
        <div class="carrosel9">
            <div class="card9">
                <h3>Otimas ofertas</h3>
                <p>Saiba quando economizar</p>
                <img src="assets/images/card.png" alt="Relógio e economia">
            </div>
            <div class="card9">
                <h3>Explore</h3>
                <p>Encontre Hoteis que cabem no seu orçamento</p>
                <img src="assets/images/card2.png" alt="Globo terrestre e lupa">
            </div>
            <div class="card9">
                <h3>Trips</h3>
                <p>Organize todos os seus planos em um só lugar</p>
                <img src="assets/images/card3.png" alt="Mapa e viagem">
            </div>
            <div class="card9">
                <h3>Alertas de Preço</h3>
                <p>Saiba quando os preços mudarem</p>
                <img src="assets/images/card4.png" alt="Celular e alertas">
            </div>
        </div>

    </section>
    <section class="sec7-destinos">
        <h2>Destinos mais populares</h2>
        <div class="cards7-destinos">
            <div class="card7-destino">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjuKf2trSHTY0kydzAR4waJ5yDHmGAbx9-og&s"
                    alt="Rio de Janeiro">
                <div class="info7-card">
                    <h3>Rio de Janeiro</h3>
                    <p>Sol, praia e diversão garantida.</p>
                    <button><a href="Pagina_riojaneiro.php">Ver hotéis</a></button>
                </div>
            </div>
            <div class="card7-destino">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUwhf3ZhM8u5WX1n3W5EeaBE9pL954Vue8fBlrUB_DgpljMQCL9prJ_7J7oCtFyzC90d0&usqp=CAU" alt="Nova York">
                <div class="info7-card">
                    <h3>Gramado</h3>
                    <p>Negócios, cultura e vida noturna.</p>
                    <button><a href="Pagina_newyork.php">Ver Hotéis</a></button>
                </div>
            </div>
            <div class="card7-destino">
                <img src="https://www.metropolisidiomas.com.br/wp-content/uploads/2018/12/londres-metroplis-post.jpg" alt="Londres">
                <div class="info7-card">
                    <h3>Florianópolis</h3>
                    <p>Destino romântico.</p>
                    <button>Ver hotéis</button>
                </div>
            </div>
            <div class="card7-destino">
                <img src="https://oficinadeinverno.com.br/cdn/shop/articles/eiffel-tower-sunrise1.jpg?v=1659494576" alt="Londres">
                <div class="info7-card">
                    <h3>Porto de Galinhas</h3>
                    <p>Destino com a melhor culinaria.</p>
                    <button>Ver hotéis</button>
                </div>
            </div>
            <div class="card7-destino">
                <img src="https://cdn5.tropicalsky.co.uk/images/800x600/kayaking-in-the-cays.jpg" alt="Londres">
                <div class="info7-card">
                    <h3>Jalapão</h3>
                    <p>Destino romântico.</p>
                    <button>Ver hotéis</button>
                </div>
            </div>
        </div>
    </section>

    <div class="galeria">
        <div class="item">
          <img src="https://images.trvl-media.com/lodging/2000000/1550000/1542100/1542064/626acd20.jpg?impolicy=resizecrop&rw=1200&ra=fit" alt="Imagem 1">
          <div class="overlay">
            <h3>Vista para o mar</h3>
            
            <button>Saiba mais</button>
          </div>
        </div>
        <div class="item">
          <img src="https://www.melhoresdestinos.com.br/wp-content/uploads/2023/07/hotel-fazenda-santa-catarina-capa.jpg" alt="Imagem 2">
          <div class="overlay">
            <h3>Hotel fazenda</h3>
            
            <button>Saiba mais</button>
          </div>
        </div>
        <div class="item">
          <img src="https://blogmaladeviagem.com.br/wp-content/uploads/2020/08/resort-brasil-lista-melhores.jpg" alt="Imagem 3">
          <div class="overlay">
            <h3>Resort</h3>
            
            <button>Saiba mais</button>
          </div>
        </div>
        <div class="item">
          <img src="https://i0.wp.com/londonso.com/wp-content/uploads/2016/11/oia-collection.jpg?fit=960%2C639&ssl=1" alt="Imagem 4">
          <div class="overlay">
            <h3>Tudo Incluso</h3>
            
            <button>Saiba mais</button>
          </div>
        </div>
      </div>
    
    <footer class="footer7">
        <div class="cta7">
            <h2>Pronto para sua próxima aventura?</h2>
            <div class="letra">
            <p>
              Registre-se agora e receba acesso a ofertas exclusivas e descontos especiais para suas próximas reservas.
            </p>
            </div>
            <div class="cta-buttons7">
              <button class="btn-primary7"><a href="login.php">Entrar / Registrar</a></button>
              <button class="btn-secondary7"><a href="#">Explorar Hotéis</a></button>
            </div>
          </div>
      
          <div class="footer-links7">
            <div class="col7">
              <h3 class="logo7">NaHoraDoCheckIn</h3>
            <div class="letra">
              <p>Encontre os melhores hotéis para suas viagens em um só lugar.</p>
            </div>
            </div>
            <div class="col7">
              <h4>Links Rápidos</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pesquisar Hotéis</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Entrar / Registrar</a></li>
              </ul>
            </div>
            <div class="col7">
              <h4>Suporte</h4>
              <ul>
                <li><a href="#">Centro de Ajuda</a></li>
                <li><a href="#">Políticas de Cancelamento</a></li>
                <li><a href="#">Contato</a></li>
              </ul>
            </div>
            <div class="col7">
              <h4>Contato</h4>
              <p>Senac, 730, Visconde de Taunay<br />Joinville, SC</p>
              <p>Email: contato@nahoradocheckin.com</p>
              <p>Tel: (47) 99706-2510</p>
            </div>
          </div>
    </footer>


    <script src="assets/js/script.js"></script>
</body>

</html>