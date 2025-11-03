const hotels = [
    {
      name: "Hotel Tannenhof",
      price: 274,
      stars: 4,
      type: "hotel",
      location: "Joinville",
      lat: -26.304,
      lng: -48.846,
      image: "https://media.staticontent.com/media/pictures/00125a85-d970-4748-8c43-16e664bf8589/853x380"
    },
    {
      name: "Bourbon Joinville",
      price: 310,
      stars: 5,
      type: "Hotel",
      location: "Joinville",
      lat: -26.3047,
      lng: -48.8482,
      image: "https://i.ytimg.com/vi/FyfHY4SOTyE/maxresdefault.jpg"
    },
    {
      name: "Confort Hotel Joinville",
      price: 285,
      stars: 3,
      type: "Hotel",
      location: "Joinville",
      lat: -26.306349,
      lng: -48.851489,
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/6f/69/d6/comfort-hotel-joinville.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Hostel Joinville",
      price: 160,
      stars: 2,
      type: "hostel",
      location: "Joinville",
      lat: -26.308,
      lng: -48.845,
      image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/476492214.jpg?k=37b5d52fbb13b57ea0509b2ead05a2f653327ffccf4dd8ff3b9ee9fe73e6cb99&o=&hp=1"
    },
    {
        name: "Le Canard Joinville",
        price: 350,
        stars: 3,
        type: "hotel",
        location: "Joinville",
        lat: -26.297226,
        lng: -48.862716,
        image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/174284535.jpg?k=95a754e1aeb4a5bb1936bced5df06578ae836681aa00379a4732e3c2cea0b518&o=&hp=1"
      },
      {
        name: "Hotel Dona Francisca",
        price: 1040,
        stars: 4,
        type: "hotel",
        location: "Joinville",
        lat: -26.211030,
        lng: -49.053226,
        image: "https://www.hoteisfazenda.net/images/hoteis/hotel-fazenda-dona-francisca/galeria/hotel-fazenda-dona-francisca03.jpg"
      },
      {
        name: "Mercure Prinz Joinville Hotel",
        price: 421,
        stars: 4,
        type: "hotel",
        location: "Joinville",
        lat: -26.479346,
        lng: -49.083414,
        image: "https://photos.hotelbeds.com/giata/bigger/05/052954/052954a_hb_a_073.jpg"
      },
      {
        name: "Hotel Plaza Norte Joinville",
        price: 319,
        stars: 3,
        type: "hotel",
        location: "Joinville",
        lat: -26.268613,
        lng: -48.857888,
        image: "https://www.holidaycheck.de/main-photo-redirect/96b16512-98d7-382a-9fa7-e2ed1a3666cf"
      },
      {
        name: "Naalt Hotel Joinville",
        price: 347,
        stars: 4,
        type: "hotel",
        location: "Joinville",
        lat: -26.292864,
        lng: -48.880030,
        image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/f8/76/25/naalt-hotel-joinville.jpg?w=1400&h=-1&s=1"
      },
      {
        name: "Blue Tree Towers Joinville",
        price: 387,
        stars: 5,
        type: "hotel",
        location: "Joinville",
        lat: -26.304151,
        lng: -48.846779,
        image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/90/4e/16/hotel-blue-tree-towers.jpg?w=1200&h=-1&s=1"
      },
     
    // Hotéis em Curitiba
    {
      name: "Hotel Curitiba Palace",
      price: 320,
      stars: 3,
      type: "hotel",
      location: "Curitiba",
      lat: -25.4294,
      lng: -49.2719,
      image: "https://www.guiadasemana.com.br/contentFiles/system/pictures/2013/7/82901/original/palacehotel.jpg"
    },
    {
      name: "Bourbon Curitiba",
      price: 400,
      stars: 4,
      type: "hotel",
      location: "Curitiba",
      lat: -25.4292,
      lng: -49.2715,
      image: "https://irp.cdn-website.com/da7e3151/dms3rep/multi/29.jpg"
    },
    {
        name: "Nomaa Hotel Curitiba",
        price: 1100,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.438094,
        lng: -49.286425,
        image: "https://www.thehotelguru.com/_images/19/08/19087c6e4ffe142fb37c93e5d3f94061/nomaa-hotel-s1180x560.jpg"
      },
      {
        name: "QOYA Hotel Curitiba, Curio Collection by Hilton",
        price: 744,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.442659,
        lng: -49.279199,
        image: "https://pics.tui.com/pics/pics1600x1200/tui/d/dfc981374a34da05_614e59e657bd43e2299e511e2ff56be3.jpg"
      },
      {
        name: "Radisson Hotel Curitiba",
        price: 552,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.445726,
        lng: -49.288238,
        image: "https://media-cdn.tripadvisor.com/media/photo-s/05/7b/9f/33/radisson-hotel-curitiba.jpg"
      },
      {
        name: "Grand Mercure Curitiba Rayon",
        price: 387,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.434676,
        lng: -49.276629,
        image: "https://www.ahstatic.com/photos/b8p5_ho_00_p_1024x768.jpg"
      },
      {
        name: "FULL JAZZ by Slaviero Hotéis",
        price: 400,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.4292,
        lng: -49.2715,
        image: "https://irp.cdn-website.com/da7e3151/dms3rep/multi/29.jpg"
      },
      {
        name: "Bourbon Curitiba",
        price: 400,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.4292,
        lng: -49.2715,
        image: "https://irp.cdn-website.com/da7e3151/dms3rep/multi/29.jpg"
      },
      {
        name: "Bourbon Curitiba",
        price: 400,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.4292,
        lng: -49.2715,
        image: "https://irp.cdn-website.com/da7e3151/dms3rep/multi/29.jpg"
      },
      {
        name: "Bourbon Curitiba",
        price: 400,
        stars: 5,
        type: "hotel",
        location: "Curitiba",
        lat: -25.4292,
        lng: -49.2715,
        image: "https://irp.cdn-website.com/da7e3151/dms3rep/multi/29.jpg"
      },
    // Hotéis em Florianópolis
    {
      name: "Pousada do Santinho",
      price: 180,
      stars: 3,
      type: "hotel",
      location: "Florianópolis",
      lat: -27.4025,
      lng: -48.4458,
      image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/382604755.jpg"
    },
    {
      name: "Hotel Ilhas do Caribe",
      price: 250,
      stars: 4,
      type: "hotel",
      location: "Florianópolis",
      lat: -27.4401,
      lng: -48.4852,
      image: "https://cf.bstatic.com/xdata/images/hotel/max1024x768/285268707.jpg"
    }
  ];
  
  let map;
  let markers = [];
  
  const citiesCoordinates = {
    "Joinville": [-26.304, -48.848],
    "Curitiba": [-25.4294, -49.2719],
    "Florianópolis": [-27.4425, -48.4515]
  };
  
  function renderHotels(hotelsToShow) {
    const container = document.getElementById("hotelList");
    container.innerHTML = "";
  
    clearMap();
  
    hotelsToShow.forEach(hotel => {
      const card = document.createElement("div");
      card.className = "hotel-card0";
  
      card.innerHTML = `
        <img class="hotel-image0" src="${hotel.image}" alt="${hotel.name}">
        <div class="hotel-info0">
          <h2>${hotel.name}</h2>
          <p>${hotel.location}</p>
          <p><strong>R$ ${hotel.price}</strong> - ${hotel.stars}★ - ${hotel.type}</p>
          <p>${hotel.distancia ? `Distância: ${hotel.distancia.toFixed(2)} km` : ""}</p>
          <button><a href="hoteis_informações/hotel1.php">Ver oferta</a></button>
        </div>
      `;
  
      container.appendChild(card);
  
      const marker = L.marker([hotel.lat, hotel.lng])
        .addTo(map)
        .bindPopup(`<strong>${hotel.name}</strong><br>R$ ${hotel.price}`);
      markers.push(marker);
    });
  }
  
  function clearMap() {
    markers.forEach(marker => map.removeLayer(marker));
    markers = [];
  }
  
  function filterHotels() {
    const search = document.getElementById("searchInput").value.toLowerCase();
    const maxPrice = document.getElementById("priceFilter").value;
    const stars = document.getElementById("starsFilter").value;
    const type = document.getElementById("typeFilter").value;
    const city = document.getElementById("cityFilter").value;
  
    let filtered = hotels.filter(hotel =>
      hotel.name.toLowerCase().includes(search) ||
      hotel.location.toLowerCase().includes(search)
    );
  
    if (maxPrice !== "all") {
      filtered = filtered.filter(h => h.price <= parseInt(maxPrice));
    }
  
    if (stars !== "all") {
      filtered = filtered.filter(h => h.stars >= parseInt(stars));
    }
  
    if (type !== "all") {
      filtered = filtered.filter(h => h.type === type);
    }
  
    if (city !== "all") {
      filtered = filtered.filter(h => h.location === city);
      updateMapForCity(city);  // Atualiza a posição do mapa para a cidade filtrada
    }
  
    renderHotels(filtered);
  }
  
  function updateMapForCity(city) {
    const cityCoords = citiesCoordinates[city];
    
    if (cityCoords) {
      map.setView(cityCoords, 13);  // Ajusta a visão do mapa para a cidade
    }
  }
  
  function getDistance(lat1, lon1, lat2, lon2) {
    const R = 6371;
    const dLat = (lat2 - lat1) * Math.PI / 180;
    const dLon = (lon2 - lon1) * Math.PI / 180;
    const a = 
      Math.sin(dLat/2) * Math.sin(dLat/2) +
      Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
      Math.sin(dLon/2) * Math.sin(dLon/2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    return R * c;
  }
  
  function recomendarProximos() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(pos => {
        const userLat = pos.coords.latitude;
        const userLng = pos.coords.longitude;
  
        const ordenados = hotels
          .map(hotel => ({
            ...hotel,
            distancia: getDistance(userLat, userLng, hotel.lat, hotel.lng)
          }))
          .sort((a, b) => a.distancia - b.distancia);
  
        renderHotels(ordenados.slice(0, 3));
  
        const userMarker = L.marker([userLat, userLng])
          .addTo(map)
          .bindPopup("Você está aqui")
          .openPopup();
        markers.push(userMarker);
  
        map.setView([userLat, userLng], 13);
      }, () => {
        alert("Não foi possível obter sua localização.");
      });
    } else {
      alert("Geolocalização não é suportada neste navegador.");
    }
  }
  
  function initMap() {
    map = L.map("map").setView([-26.3045, -48.848], 13);
  
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: "© OpenStreetMap contributors"
    }).addTo(map);
  
    renderHotels(hotels);
  }
  
  window.onload = initMap;
  