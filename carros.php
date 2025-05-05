<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carros Increíbles</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #1a1a1a;
      color: #fff;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #b30000;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
    }

    .car-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .car-card {
      background-color: #330000;
      border: 2px solid #ff1a1a;
      border-radius: 15px;
      padding: 20px;
      transition: transform 0.3s;
    }

    .car-card:hover {
      transform: scale(1.05);
    }

    .car-card h2 {
      color: #ff4d4d;
    }

    .car-card p {
      color: #f2f2f2;
    }

    footer {
      background-color: #800000;
      text-align: center;
      padding: 15px;
      color: #ddd;
    }

    button {
      background-color: #ff1a1a;
      border: none;
      padding: 10px 15px;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #e60000;
    }
  </style>
</head>
<body>

  <header>
    <h1>Catálogo de Carros Increíbles</h1>
    <button onclick="agregarCarro()">Agregar Carro Aleatorio</button>
  </header>

  <div class="car-container" id="carContainer">
    <!-- Autos se agregan aquí con JS    -->
  </div>

  <footer>
    &copy; 2025 Mundo Carros. Todos los derechos reservados.
  </footer>

  <script>
    const autos = [
      { nombre: "Ferrari F8", descripcion: "Un superdeportivo italiano con un diseño agresivo y potente motor V8." },
      { nombre: "Lamborghini Aventador", descripcion: "Icónico y veloz, ideal para los amantes de la adrenalina." },
      { nombre: "Tesla Model S", descripcion: "Elegancia eléctrica con tecnología de punta y gran autonomía." },
      { nombre: "Ford Mustang GT", descripcion: "Muscle car americano con gran presencia y sonido inolvidable." }
    ];

    function agregarCarro() {
      const contenedor = document.getElementById("carContainer");
      const auto = autos[Math.floor(Math.random() * autos.length)];

      const card = document.createElement("div");
      card.className = "car-card";
      card.innerHTML = `<h2>${auto.nombre}</h2><p>${auto.descripcion}</p>`;

      contenedor.appendChild(card);
    }

    // Agrega algunos carros al cargar la página
    window.onload = () => {
      for (let i = 0; i < 2; i++) agregarCarro();
    };
  </script>

</body>
</html>
