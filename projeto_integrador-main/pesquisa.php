<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Busca de Hotéis</title>
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  />
</head>
<body>

  <header class="header2">
    <div class="titulo">
    <h1>NaHoraDoCheckIn</h1>
    </div>
    <nav>
      <button class="botão"><a href="index.php">Inicio</a></button>
      <button class="botão"><a href="#">Favoritos</a></button>
      <button class="botão" ><a href="about.php">Contato</a></button>
    </div>
  </header>

  <main class="main-container">
    <aside class="filters">
      <h2>Filtros</h2>
      <button onclick="recomendarProximos()">Hotéis perto de mim</button>

      <input type="text" id="searchInput" placeholder="Buscar nome/local" />
      
      <label>Cidade:</label>
      <select id="cityFilter">
        <option value="all">Todas</option>
        <option value="Joinville">Joinville</option>
        <option value="Curitiba">Curitiba</option>
        <option value="Florianópolis">Florianópolis</option>
      </select>

      <label>Preço máximo:</label>
      <select id="priceFilter">
        <option value="all">Qualquer valor</option>
        <option value="200">Até R$ 200</option>
        <option value="300">Até R$ 300</option>
        <option value="400">Até R$ 400</option>
      </select>

      <label>Estrelas:</label>
      <select id="starsFilter">
        <option value="all">Todas</option>
        <option value="3">3 estrelas+</option>
        <option value="4">4 estrelas+</option>
        <option value="5">5 estrelas</option>
      </select>

      <label>Tipo:</label>
      <select id="typeFilter">
        <option value="all">Todos</option>
        <option value="hotel">Hotel</option>
        <option value="hostel">Hostel</option>
        <option value="apart">Apartamento</option>
      </select>

      <button onclick="filterHotels()">Filtrar</button>
    </aside>

    <section class="hotel-list0" id="hotelList">
      
    </section>

    <section id="map"></section>
  </main>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="assets/js/pesquisa.js"></script>
</body>
</html>
