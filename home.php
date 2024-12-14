<?php
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Gp Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart.js Histogram Example</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Mapbox and Chart.js -->
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="https://api.maptiler.com/maps/satellite/leaflet.js?key=JXzWBzfh2Oerz0SBNzMA"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="aitothmane.geojson" type="text/javascript"></script>
    <script src="adassil.geojson" type="text/javascript"></script>
    <script src="amizmiz.geojson" type="text/javascript"></script>
    <script src="aourir.geojson" type="text/javascript"></script>
    <script src="asni.geojson" type="text/javascript"></script>
    <script src="assakouiIghil.geojson" type="text/javascript"></script>
    <script src="chichaoua.geojson" type="text/javascript"></script>
    <script src="imzilene.geojson" type="text/javascript"></script>
    <script src="lallaaziza.geojson" type="text/javascript"></script>
    <script src="marrakesh.geojson" type="text/javascript"></script>
    <script src="Tahnaout.geojson" type="text/javascript"></script>
    <script src="talatNYaaqoub.geojson" type="text/javascript"></script>
    <script src="tamarirt.geojson" type="text/javascript"></script>
    <script src="taroudant.geojson" type="text/javascript"></script>
    <script src="stat.geojson" type="text/javascript"></script>
    <script src="1-3.geojson" type="text/javascript"></script>
    <script src="1-4.geojson" type="text/javascript"></script>
    <script src="3-8.geojson" type="text/javascript"></script>
    <script src="4-6.geojson" type="text/javascript"></script>
    <script src="5-7.geojson" type="text/javascript"></script>
    <script src="6-5.geojson" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css" />
<script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>
<!-- Inclure la bibliothèque Leaflet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <!-- Inclure votre fichier JavaScript pour le plugin -->
  <script src="leaflet-control-swipe.js"></script>



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <!-- Inclure la feuille de style Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <!-- Inclure votre fichier CSS personnalisé pour le plugin -->
  <link rel="stylesheet" href="leaflet-control-swipe.css" />
  

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    /* Custom styling for the statistics section */
    .statistics-section {
      padding: 40px 0;
      background-color: #f8f9fa;
    }

    .analysis-box {
      padding: 20px;
      background-color: #4d4b47;
      border-radius: 10px;
      color: #c4ae75;
    }

    .analysis-box h3 {
      color: #e8b415;
    }
    /* Section for the map and info */
    .map-info-container {
      display: flex;
      gap: 20px;
      padding: 20px;
    }

    .map-section {
      flex: 3.5;
      background-color: #ffffff;
      position: relative;
    }

    #leaflet-map {
      width: 100%;
      height: 100%;
      border-radius: 10px;
    }
    

.my-button-class {
    background-color: #007bff; /* Blue background */
    color: white; /* White text */
    border: none; /* No border */
    padding: 5px 10px; /* Padding */
    cursor: pointer; /* Pointer cursor on hover */
}

.leaflet-swipe-divider {
    transition: left 0.2s ease; /* Smooth transition for dragging */
}

    .info-section {
      flex: 1;
      padding: 20px;
      background-color: #242424;
      border-radius: 10px;
    }

    .info-box {
      background-color: #4d4b47;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 15px;
      font-size: 1.1em;
    }

    .info-box h3 {
      color: #ffffff;
      margin-top: 0;
    }

    .tracker {
      text-align: center;
      background-color: #4d4b47;
      color: rgb(195, 249, 95);
      border-radius: 10px;
      padding: 10px;
    }

    .tracker-title {
      color: #f6f8f9;
      font-size: 1.2em;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .stats-container {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .stat-box {
      text-align: center;
      background-color: #4d4b47;
      padding: 10px;
      border-radius: 10px;
      width: 80px;
    }

    .stat-number {
      font-size: 2.1em;
      color: #ca3737;
      font-weight: bold;
    }

    .info-box:last-child {
      margin-bottom: 30px;
      background-color: #4d4b47;
    }
    
/* Conteneur pour les boutons */
.button-container {
  display: flex; /* Utilisation de flexbox pour l'alignement horizontal */
  gap: 10px; /* Espacement entre les boutons */
  margin-bottom: 20px; /* Espacement sous les boutons */
}

/* Style du bouton */
button {
  background: linear-gradient(to bottom, #2c2c2c, #800000); /* Dégradé */
  border: none;
  color: white;
  font-size: 14px;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 50px; /* Bords arrondis pour un bouton circulaire */
  cursor: pointer;
  transition: transform 0.2s, background 0.3s;
}

button:hover {
  transform: scale(1.1);
  background: linear-gradient(to bottom, #800000, #2c2c2c);
}

/* Style du menu déroulant */
.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%; /* Positionner en dessous du bouton */
  background-color: black; /* Fond noir */
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Ombre noire */
  z-index: 2000; /* Assurez-vous que la liste déroulante est au-dessus de la couche de zoom */
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-item {
  padding: 10px;
  background: black; /* Fond noir pour les éléments du menu */
  color: white; /* Texte blanc */
  border: none;
  cursor: pointer;
}

.dropdown-item:hover {
  background: #333; /* Fond gris foncé au survol */
}

/* Style des boutons de zoom */
.leaflet-control-zoom-in, .leaflet-control-zoom-out {
  background: linear-gradient(to bottom, #2c2c2c, #800000); /* Dégradé obscur vers bordeaux */
  border: none; /* Retirer les bordures */
  color: white; /* Texte blanc */
  font-size: 18px; /* Taille de texte */
  font-weight: bold; /* Texte en gras */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5); /* Ombre portée */
  transition: transform 0.2s, background 0.3s; /* Animation au survol */
}

.leaflet-control-zoom-in:hover, .leaflet-control-zoom-out:hover {
  transform: scale(1.1); /* Légère mise en relief au survol */
  background: linear-gradient(to bottom, #800000, #2c2c2c); /* Inverse le dégradé */
}
.team-member .member-img img {
  width: 100%;
  height: auto;
  object-fit: cover; /* Permet de remplir l'espace sans distorsion */
  aspect-ratio: 9 / 16; /* Définit un format rectangulaire 16:9 */
}


  </style>


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1 class="sitename">WM</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#map">Map</a></li>
          <li><a href="#services">Statistics</a></li>
          <li><a href="#portfolio">Settings</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
      <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Morocco EarthQuake 2023</h2>
            <p>La Province El Haouz</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Map and Info Section Container -->
    

  <section class="map-info-container">
  <!-- Map Section -->
  <section id="map" class="map-section">
    <div class="button-container">
        <!-- Bouton déroulant pour les bâtiments -->
        <div class="dropdown">
            <button id="dropdown-button" class="filter-button">Bâtiments</button>
            <div id="dropdown-menu" class="dropdown-menu">
                <button id="filter-damage" class="dropdown-item">Bâtiments endommagés</button>
                <button id="filter-possible" class="dropdown-item">Bâtiments possiblement endommagés</button>
            </div>
        </div>
        <!-- Bouton pour afficher les régions -->
        <button id="regionButton">Afficher les Régions</button>
        <!-- Bouton pour afficher le graphique -->
       
<button id="show-stats">Afficher les statistiques</button>


    </div>
    <div id="stats-container"></div>
   


    <!-- Résultats -->
    <pre id="results"></pre>

    

  


    <div id="leaflet-map"></div>
    
    <button class="toggle-button" id="toggle-geojson">Afficher/Masquer la Couche</button>

    

    <!-- Carte Leaflet -->
    
  </section>





      <!-- Info Section -->
      <div class="info-section" id="info-section">
        <div class="info-box" data-aos="fade-up" data-aos-duration="1000">
          <div class="tracker">
            <div class="tracker-title">Suivi des tremblements de terre au Maroc</div>
            <div class="stats-container">
              <div class="stat-box">
                <h3>Death</h3>
                <div class="stat-number" id="death-number">2901</div>
              </div>
              <div class="stat-box">
                <h3>Injured</h3>
                <div class="stat-number" id="injured-number">5530</div>
              </div>
            </div>
          </div>
        </div>

        <div class="info-box" data-aos="fade-up" data-aos-duration="1000">
          <h3>Répartition basée sur l'âge</h3>
          <canvas id="ageDistributionChart" width="400" height="300"></canvas>
        </div>
        <script>
        function createHistogram(canvasId, labels, dataValues) {
      const ctx = document.getElementById(canvasId).getContext('2d');
      const data = {
        labels: labels,
        datasets: [{
          label: 'Population',
          data: dataValues,
          backgroundColor: 'rgba(54, 162, 235, 0.8)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1,
        }]
      };
      const options = {
        responsive: true,
        plugins: {
          legend: { display: false },
          tooltip: { enabled: true },
          datalabels: {
            color: '#000',
            font: { size: 14 },
            anchor: 'end',
            align: 'top'
          }
        },
        scales: {
          x: {
            ticks: { color: '#000', font: { size: 14 } },
            grid: { display: false }
          },
          y: {
            ticks: { color: '#000', font: { size: 14 } },
            grid: { color: '#e0e0e0' }
          }
        },
        animation: {
          duration: 1000,
          easing: 'easeOutBounce'
        }
      };
      new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options,
        plugins: [ChartDataLabels]
      });
    }

    // Créez plusieurs histogrammes en appelant la fonction avec des paramètres uniques
    createHistogram('ageDistributionChart', ['Plus de 50 ans', 'Entre 35 et 50', 'Entre 26 et 35', 'Entre 18 et 25'], [40, 38, 82, 45]);
    createHistogram('ageDistributionChart', ['18-25', '26-35', '36-45', '46+'], [20, 30, 25, 15]);
  </script>
        <div class="info-box" data-aos="fade-up" data-aos-duration="1000">
          <h3>Additional Information</h3>
          <p>New details can be added here, like statistics or any other relevant information.</p>
        </div>
      </div>
      
    </section>
    <!-- Statistics Section -->
     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
      <h2>statistics</h2>
      <p>analyse</p>
    </div><!-- End Section Title -->
    <section id="services" class="statistics-section">
      <div class="container">
        <div class="row">
          <!-- Histogram (left) -->
          <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
            <canvas id="Damaged communes" width="400" height="400"></canvas>
          </div>

          <!-- Analysis (right) -->
          <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
            <div class="analysis-box">
              <h3>Histogram Analysis</h3>
              <p>Cet histogramme met en évidence l'impact du séisme du 8 septembre 2023 dans plusieurs provinces du Maroc, en comparant le nombre total de communes avec le nombre de communes sinistrées pour chaque province. On y observe que certaines provinces, comme Al Haouz et Taroudannt, ont été particulièrement touchées, avec un nombre élevé de communes sinistrées par rapport au total. Par exemple, Al Haouz a tous ses 40 communes impactées, tandis que Taroudannt en dénombre 57 sinistrées sur 89. Cette visualisation met en relief les disparités régionales dans les dégâts causés par le séisme, soulignant des zones de plus forte vulnérabilité qui pourraient bénéficier d'une attention et de ressources prioritaires pour la reconstruction et la prévention.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- Statistics Section -->
  <section id="services" class="statistics-section">
    <div class="container">
      <div class="row">
        <!-- Histogram (left) -->
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
          <canvas id="Repartition Genre" width="400" height="400"></canvas>
        </div>

        <!-- Analysis (right) -->
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="analysis-box">
            <h3>Histogram Analysis</h3>
            <p>Les données révèlent que 57% des répondants sont des femmes et 43% des hommes. Cela pourrait influencer 
              la généralisation des résultats. Une analyse stratifiée par sexe est recommandée pour identifier les différences 
              dans les perceptions et les besoins liés à l'activité sismique.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Statistics Section -->
   <section id="services" class="statistics-section">
    <div class="container">
      <div class="row">
        <!-- Histogram (left) -->
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
          <canvas id="Activity Histogram" width="400" height="400"></canvas>
        </div>

        <!-- Analysis (right) -->
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="analysis-box">
            <h3>Histogram Analysis</h3>
            <p> Le graphique met en évidence principalement la prédominance des agriculteurs et du personnel du secteur de l'éducation et du secteur social. Cette répartition reflète également les secteurs dominants dans la province, comme indiqué dans le rapport du HCP de 2023.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Statistics Section -->
  <section id="services" class="statistics-section">
    <div class="container">
      <div class="row">
        <!-- Histogram (left) -->
        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
        <canvas id="ChartParallel" width="400" height="200"></canvas>
        </div>

        <!-- Analysis (right) -->
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="analysis-box">
            <h3>Histogram Analysis</h3>
            <p> Cet histogramme compare les dommages potentiels et le nombre de camps temporaires pour différentes zones géographiques. Les barres rouges représentent les dommages estimés, tandis que les barres bleues indiquent les camps mis en place. Il permet d’identifier les disparités entre les besoins en infrastructures temporaires et les dégâts subis dans chaque région.</p>
          </div>
        </div>
      </div>
    </div>
    
    

  </section>
  <!-- Statistics Section -->
<section id="services" class="statistics-section">
  <div class="container">
    <div class="row">
      <!-- Tableau (left) -->
      <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
        <div id="tableau-container" style="overflow-x:auto;">
          <table style="width: 100%; border-collapse: collapse;">

          </table>
        </div>
      </div>

      <!-- Analysis (right) -->
      <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
        <div class="analysis-box">
          <h3>Table Analysis</h3>
          <p>Le tableau suivant montre les statistiques descriptives de perte financière causée par le séisme. 
            On remarque que la perte financière moyenne est de **36 453 DH** avec une perte minimale de **1 200 DH** 
            et une perte maximale de **6 400 DH**. Ces pertes se répartissent autour d'un écart-type de **5 254 DH**, 
            indiquant un taux de variation de **14,41%**. Ce faible taux de variation montre que les pertes sont proches 
            et que toutes les familles ont estimé des montants de perte financière similaires.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Team Section -->
  <section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>Our Team</p> 
    </div>
  
    <div class="container">
      <!-- Row 1 -->
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>ACHICH Imane</h4>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>NASSIRI Nada</h4>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>OKSIH Salwa</h4>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Row 2 -->
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>AAFFANE Fatima</h4>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-5.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>ARRADA Soukaina</h4>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="600">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-6.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>BADDOUR Omayma</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Campus Rabat, Madinat Al Irfane,Rabat, Maroc</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+212-659253647</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
 
  </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<!-- Chart.js and AOS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <style>
    .custom-popup .leaflet-popup-content-wrapper {
        background-color: black; /* Fond noir */
        color: white; /* Texte blanc */
        border-radius: 5px; /* Coins arrondis */
        padding: 5px;
    }
    .custom-popup .leaflet-popup-tip {
        background-color: black; /* Pointe du popup noir */
    }
</style>

<style>
    /* Style commun pour les boutons */
    .toggle-button, .toggle-stat-button {
        background: linear-gradient(to right, #2b2d42, #8d0801); /* Dégradé orange */
        color: white;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    /* Effet au survol */
    .toggle-button:hover, .toggle-stat-button:hover {
        background: linear-gradient(to right, #8d0801, #2b2d42); /* Dégradé inversé */
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    /* Effet au clic */
    .toggle-button:active, .toggle-stat-button:active {
        transform: scale(0.95);
    }
</style>
<style>
    /* Style commun pour les boutons filtrants */
    .filter-button {
        background: linear-gradient(to right, #2b2d42, #8d0801); /* Dégradé obscur à bordeaux */
        color: white; /* Texte blanc */
        border: none; /* Pas de bordure */
        border-radius: 20px; /* Coins arrondis */
        padding: 10px 20px; /* Espace intérieur */
        font-size: 14px; /* Taille du texte */
        font-weight: bold; /* Texte en gras */
        cursor: pointer; /* Curseur interactif */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Ombre légère */
        transition: all 0.3s ease; /* Transition fluide */
    }

    /* Effet au survol */
    .filter-button:hover {
        background: linear-gradient(to right, #8d0801, #2b2d42); /* Inversion du dégradé */
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2); /* Augmente l'ombre */
        transform: scale(1.05); /* Agrandissement au survol */
    }

    /* Effet au clic */
    .filter-button:active {
        transform: scale(0.95); /* Réduction au clic */
    }
</style>

  <!-- Mapbox and AOS initialization -->
  <script>

 
document.addEventListener("DOMContentLoaded", function () {
    // Initialiser la carte Leaflet
    const map = L.map('leaflet-map').setView([31.7917, -7.0926], 6);

    // Ajouter les couches de la carte
    const topomapLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data: &copy; <a href="https://opentopomap.org">OpenTopoMap</a>'
    }).addTo(map); // Couche par défaut
    const satelliteLayer = L.tileLayer('https://api.maptiler.com/maps/satellite/{z}/{x}/{y}.jpg?key=JXzWBzfh2Oerz0SBNzMA');

    // Créer une ligne de séparation (diviseur de swipe)
    const swipeDivider = L.DomUtil.create('div', 'leaflet-swipe-divider', map.getContainer());
    swipeDivider.style.position = 'absolute';
    swipeDivider.style.top = '0';
    swipeDivider.style.left = '50%';
    swipeDivider.style.width = '4px';
    swipeDivider.style.height = '100%';
    swipeDivider.style.background = 'black';
    swipeDivider.style.cursor = 'ew-resize';
    swipeDivider.style.zIndex = '1000';
    swipeDivider.style.display = 'none'; // Cacher par défaut

    // Variables pour le contrôle
    let isDragging = false;
    let swipeActive = false;

    // Fonction pour synchroniser les couches avec la position du diviseur
    function updateLayers(xPosition) {
        const rect = map.getContainer().getBoundingClientRect();
        const width = rect.width;
        const percentage = Math.min(Math.max(0, xPosition / width), 1); // Clamp entre 0 et 1

        // Appliquer des styles de clip aux conteneurs des couches
        const clipTopomap = `rect(0, ${width}px, ${rect.height}px, ${width * percentage}px)`;
        const clipSatellite = `rect(0, ${width * percentage}px, ${rect.height}px, 0)`;

        const satelliteContainer = satelliteLayer.getContainer();
        const topomapContainer = topomapLayer.getContainer();

        if (satelliteContainer && topomapContainer) {
            satelliteContainer.style.clip = clipSatellite;
            topomapContainer.style.clip = clipTopomap;
        }
    }

    // Gérer le glissement du diviseur
    swipeDivider.addEventListener('mousedown', (event) => {
        isDragging = true;
        L.DomEvent.stopPropagation(event); // Empêche les conflits avec Leaflet
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
    });

    document.addEventListener('mousemove', (event) => {
        if (isDragging && swipeActive) {
            const rect = map.getContainer().getBoundingClientRect();
            const x = event.clientX - rect.left;
            swipeDivider.style.left = `${Math.min(Math.max(0, x), rect.width)}px`;
            updateLayers(x);
        }
    });

    // Ajouter un bouton de contrôle pour activer/désactiver le swipe
    const swipeButton = L.control({ position: 'topright' });
    swipeButton.onAdd = function () {
        const container = L.DomUtil.create('div', 'leaflet-bar my-control');
        const button = L.DomUtil.create('button', 'my-button-class', container);
        button.innerHTML = 'Activer Swipe';

        button.addEventListener('click', function () {
            swipeActive = !swipeActive;
            if (swipeActive) {
                swipeDivider.style.display = 'block';
                satelliteLayer.addTo(map);
                updateLayers(map.getContainer().clientWidth / 2); // Initialiser à 50%
                button.innerHTML = 'Désactiver Swipe';
            } else {
                swipeDivider.style.display = 'none';
                satelliteLayer.removeFrom(map);
                satelliteLayer.getContainer().style.clip = ''; // Réinitialiser le style
                topomapLayer.getContainer().style.clip = ''; // Réinitialiser le style
                button.innerHTML = 'Activer Swipe';
            }
        });

        return container;
    };

    swipeButton.addTo(map);









       // Données GeoJSON
       var adassil = { "type": "FeatureCollection",
"name": "adassil",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "Site_ID": 0, "AgencyID": 0, "SiteName": null, "Notes": null, "Area_m2": 161303205.57100001, "Area_ha": 16130.3205571, "SHAPE_Leng": 0.50982543845999995, "SHAPE_Area": 0.0149864823, "EventCode": "EQ20230909MAR" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.404465865999953, 31.100302262000188 ], [ -8.462168148999922, 31.040085886000053 ], [ -8.52239084099989, 31.043769306000176 ], [ -8.557819402999939, 31.050700385000141 ], [ -8.517383965999954, 31.102837801000135 ], [ -8.512558379713596, 31.129936390936216 ], [ -8.493604892999883, 31.198566857000181 ], [ -8.454722295189868, 31.205938532659559 ], [ -8.445242410837864, 31.205570381811132 ], [ -8.429629483999918, 31.198180125000135 ], [ -8.404465865999953, 31.100302262000188 ] ] ] ] } }
]};
var amizmiz = { "type": "FeatureCollection",
"name": "amizmiz",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "\tEQ-2023-000166-MAR", "area_id": "02", "locality": "Amizmiz", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.18981217399994, 31.185910327000045 ], [ -8.279391302999954, 31.185910327000045 ], [ -8.279643700999941, 31.262721852000027 ], [ -8.18981217399994, 31.263108120000027 ], [ -8.18981217399994, 31.185910327000045 ] ] ] ] } }
] };
var taroudant = {
"type": "FeatureCollection",
"name": "taroudant",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "Site_ID": 0, "AgencyID": 0, "SiteName": null, "Notes": null, "Area_m2": 24280545.190499999, "Area_ha": 2428.0545190500002, "EventCode": "EQ20230909MAR", "SHAPE_Leng": 0.42108003285000001, "SHAPE_Area": 0.0097117601 }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.944505511999921, 30.497998451000058 ], [ -8.944505577999905, 30.497882325000035 ], [ -8.943261641999925, 30.497882325000035 ], [ -8.941013335999912, 30.497882325000035 ], [ -8.938765030999946, 30.497882325000035 ], [ -8.938765030999946, 30.497841454000081 ], [ -8.882557403999954, 30.497500861000049 ], [ -8.882557403999954, 30.497882325000035 ], [ -8.880309097999941, 30.497882325000035 ], [ -8.878060792999918, 30.497882325000035 ], [ -8.875812487999951, 30.497882325000035 ], [ -8.873564182999928, 30.497882325000035 ], [ -8.871315877999905, 30.497882325000035 ], [ -8.869067572999938, 30.497882325000035 ], [ -8.866819267999915, 30.497882325000035 ], [ -8.864570962999949, 30.497882325000035 ], [ -8.864570962999949, 30.497391871000048 ], [ -8.824101470999949, 30.497146644000054 ], [ -8.824101470999949, 30.497882325000035 ], [ -8.821853164999936, 30.497882325000035 ], [ -8.819604859999913, 30.497882325000035 ], [ -8.817356554999947, 30.497882325000035 ], [ -8.816013461999944, 30.497882325000035 ], [ -8.816013454999961, 30.497885936000046 ], [ -8.815103142999931, 30.497884648000081 ], [ -8.815104633999908, 30.497096355000053 ], [ -8.815108249999923, 30.497096360000057 ], [ -8.815108249999923, 30.495184359000064 ], [ -8.815108249999923, 30.492486393000036 ], [ -8.815108249999923, 30.489788427000065 ], [ -8.815108249999923, 30.487090461000037 ], [ -8.815108249999923, 30.484392495000066 ], [ -8.815108249999923, 30.481694528000048 ], [ -8.815108249999923, 30.478996562000077 ], [ -8.815369825999937, 30.478996562000077 ], [ -8.813927512999953, 30.438527070000077 ], [ -8.812859944999957, 30.438527070000077 ], [ -8.812859944999957, 30.435829104000049 ], [ -8.812859944999957, 30.433131138000078 ], [ -8.812859944999957, 30.43043317200005 ], [ -8.812859944999957, 30.427735206000079 ], [ -8.813542895999944, 30.427735206000079 ], [ -8.813538799999947, 30.427620265000087 ], [ -8.869067572999938, 30.425398211000072 ], [ -8.869067572999938, 30.425037240000051 ], [ -8.871315877999905, 30.425037240000051 ], [ -8.873564182999928, 30.425037240000051 ], [ -8.875812487999951, 30.425037240000051 ], [ -8.875812487999951, 30.422339273000034 ], [ -8.878060792999918, 30.422339273000034 ], [ -8.880309097999941, 30.422339273000034 ], [ -8.882557403999954, 30.422339273000034 ], [ -8.88480570899992, 30.422339273000034 ], [ -8.887054013999943, 30.422339273000034 ], [ -8.88930231899991, 30.422339273000034 ], [ -8.891550623999933, 30.422339273000034 ], [ -8.893798928999956, 30.422339273000034 ], [ -8.896047233999923, 30.422339273000034 ], [ -8.898295538999946, 30.422339273000034 ], [ -8.900543843999912, 30.422339273000034 ], [ -8.902792149999925, 30.422339273000034 ], [ -8.905040454999948, 30.422339273000034 ], [ -8.907288759999915, 30.422339273000034 ], [ -8.909537064999938, 30.422339273000034 ], [ -8.911785369999905, 30.422339273000034 ], [ -8.914033674999928, 30.422339273000034 ], [ -8.916281979999951, 30.422339273000034 ], [ -8.918530284999918, 30.422339273000034 ], [ -8.918530284999918, 30.423418898000079 ], [ -8.938765030999946, 30.422609179000062 ], [ -8.938765030999946, 30.422339273000034 ], [ -8.941013335999912, 30.422339273000034 ], [ -8.943261641999925, 30.422339273000034 ], [ -8.945509946999948, 30.422339273000034 ], [ -8.945509946999948, 30.425037240000051 ], [ -8.945509946999948, 30.427735206000079 ], [ -8.945509946999948, 30.43043317200005 ], [ -8.945509946999948, 30.433131138000078 ], [ -8.945509946999948, 30.435829104000049 ], [ -8.945509946999948, 30.438527070000077 ], [ -8.945509946999948, 30.441225036000048 ], [ -8.945509946999948, 30.443923003000066 ], [ -8.945509946999948, 30.446620969000037 ], [ -8.945509946999948, 30.449318935000065 ], [ -8.947758251999915, 30.449318935000065 ], [ -8.947758251999915, 30.452016901000036 ], [ -8.947758251999915, 30.454714867000064 ], [ -8.947758251999915, 30.457412833000035 ], [ -8.947758251999915, 30.460110799000063 ], [ -8.947758251999915, 30.46280876600008 ], [ -8.947758251999915, 30.465506732000051 ], [ -8.947758251999915, 30.468204698000079 ], [ -8.947758251999915, 30.47090266400005 ], [ -8.947758251999915, 30.473600630000078 ], [ -8.947758251999915, 30.476298596000049 ], [ -8.947758251999915, 30.478996562000077 ], [ -8.947758251999915, 30.481694528000048 ], [ -8.947758251999915, 30.484392495000066 ], [ -8.947758251999915, 30.487090461000037 ], [ -8.947758251999915, 30.489788427000065 ], [ -8.947758251999915, 30.492486393000036 ], [ -8.947758251999915, 30.495184359000064 ], [ -8.947758251999915, 30.497882325000035 ], [ -8.94775681099992, 30.497882325000035 ], [ -8.947756747999961, 30.497999794000066 ], [ -8.944505511999921, 30.497998451000058 ] ] ] ] } }
]
};
var tamrirt = { "type": "FeatureCollection",
"name": "tamarirt",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "\tEQ-2023-000166-MAR", "area_id": "01", "locality": "Tamarirt", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.640289157999973, 31.20730745700007 ], [ -8.688086827999939, 31.199323506000042 ], [ -8.707250555999963, 31.245803462000026 ], [ -8.702885870999978, 31.288280350000036 ], [ -8.641200216999948, 31.303812916000027 ], [ -8.62376153799994, 31.326229744000045 ], [ -8.573778438999966, 31.330943992000073 ], [ -8.51329448599995, 31.309892084000069 ], [ -8.511651319999942, 31.232573688000059 ], [ -8.582408317999977, 31.21815915600007 ], [ -8.640289157999973, 31.20730745700007 ] ] ] ] } }
]};
var tahnaout = {
"type": "FeatureCollection",
"name": "Tahnaout",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "EQ-2023-000166-MAR", "area_id": "08", "locality": "Tahnaout", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -7.900711925999929, 31.369368709000071 ], [ -7.922558110999944, 31.253498352000065 ], [ -7.931751167999948, 31.255362965000074 ], [ -7.931751167999948, 31.28349473600008 ], [ -7.999658701999977, 31.283202739000046 ], [ -7.982530228999963, 31.377613644000064 ], [ -7.900711925999929, 31.369368709000071 ] ] ] ] } }
]
};
        var talatNYaaqoub = {
"type": "FeatureCollection",
"name": "talat-NYaaqoub",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "EQ-2023-000166-MAR", "area_id": "07", "locality": "Talat-NYaaqoub", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.141781854999977, 30.94330799100004 ], [ -8.231360983999934, 30.94330799100004 ], [ -8.231613381999978, 31.020119516000079 ], [ -8.141781854999977, 31.020505784000079 ], [ -8.141781854999977, 30.94330799100004 ] ] ] ] } }
]
};
var imzilene = {
"type": "FeatureCollection",
"name": "imzilene",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "EQ-2023-000166-MAR", "area_id": "06", "locality": "Imzilene", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -9.528899005999961, 31.188590735000048 ], [ -9.618478133999929, 31.188590735000048 ], [ -9.618730532999962, 31.26540226000003 ], [ -9.528899005999961, 31.265788529000076 ], [ -9.528899005999961, 31.188590735000048 ] ] ] ] } }
]
};
        var lallaaziza = {
"type": "FeatureCollection",
"name": "lalla-aziza",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "Site_ID": 0, "AgencyID": 0, "SiteName": null, "Notes": null, "Area_m2": 381503523.85500002, "Area_ha": 38184.348599500001, "EventCode": "EQ20230909MAR", "SHAPE_Leng": 0.94602762160999998, "SHAPE_Area": 0.03609205286, "Sensor_ID": "WorldView-2", "StaffID": "VG" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.726663619999954, 31.138142463000065 ], [ -8.720056294999949, 31.138128155000061 ], [ -8.49360489299994, 31.19856685700006 ], [ -8.512403452999934, 31.130806128000074 ], [ -8.517383965999954, 31.102837801000078 ], [ -8.557819402999939, 31.050700385000084 ], [ -8.522390840999947, 31.043769306000058 ], [ -8.462168148999922, 31.040085886000043 ], [ -8.464566861999913, 31.034377649000078 ], [ -8.719552140999951, 30.964870515000086 ], [ -8.726663619999954, 31.138142463000065 ] ] ] ] } }
]
};
        var marrakesh = {
"type": "FeatureCollection",
"name": "marrakesh",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "Site_ID": 0, "AgencyID": 0, "SiteName": null, "Notes": null, "Area_m2": 52.099501069200002, "Area_ha": 5209.9501069199996, "EventCode": "EQ20230909MAR", "SHAPE_Leng": 0.56504401363000001, "SHAPE_Area": 0.00495310084 }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -7.971817689999909, 31.619306735000066 ], [ -7.968566024999916, 31.610564125000053 ], [ -7.967927561999943, 31.610738021000088 ], [ -7.966110282999921, 31.607384040000056 ], [ -7.961317631999918, 31.60927737600008 ], [ -7.958530228999905, 31.610571131000086 ], [ -7.957689457999948, 31.611076500000081 ], [ -7.956903204999946, 31.607980567000084 ], [ -7.956768989999944, 31.606879291000041 ], [ -7.954934442999956, 31.606445241000074 ], [ -7.953496142999938, 31.602008315000035 ], [ -7.951350580999929, 31.600916529000074 ], [ -7.950455856999952, 31.600283335000086 ], [ -7.94915827199992, 31.597339624000085 ], [ -7.943531973999939, 31.591767087000051 ], [ -7.945454828999914, 31.590568887000074 ], [ -7.966874607999955, 31.586090882000065 ], [ -7.978548441999919, 31.622079222000082 ], [ -7.974598082999933, 31.623849681000081 ], [ -7.970771530999912, 31.622714268000038 ], [ -7.971022597999934, 31.621285540000088 ], [ -7.971817689999909, 31.619306735000066 ] ] ], [ [ [ -7.999607422999929, 31.637360180000087 ], [ -7.999838417999911, 31.631029366000064 ], [ -8.000446599999918, 31.630278802000078 ], [ -7.999643873999958, 31.629131445000041 ], [ -8.002376897999909, 31.62788663200007 ], [ -8.002389699999924, 31.62788080100006 ], [ -8.00239808799995, 31.627870449000056 ], [ -7.996438042999955, 31.61711063000007 ], [ -7.991189077999934, 31.618064888000049 ], [ -7.989728672999945, 31.611154651000049 ], [ -7.989458617999958, 31.611023190000083 ], [ -7.989443446999928, 31.610961367000073 ], [ -7.987262190999957, 31.600758926000083 ], [ -7.985214903999918, 31.601877008000088 ], [ -7.983595351999952, 31.590135062000058 ], [ -7.981415204999905, 31.583409419000077 ], [ -7.983454490999918, 31.58294399600004 ], [ -7.981927690999953, 31.578041524000071 ], [ -7.990724952999926, 31.591390220000051 ], [ -8.004856463999943, 31.583836120000058 ], [ -8.00742647699991, 31.590576878000036 ], [ -8.012883311999929, 31.58234518800009 ], [ -8.018033329999923, 31.584995110000079 ], [ -8.015063482999949, 31.590209149000088 ], [ -8.011759243999961, 31.592547622000041 ], [ -8.016807460999928, 31.594786537000061 ], [ -8.019998407999935, 31.599866588000054 ], [ -8.026861942999915, 31.595728806000068 ], [ -8.032354221999924, 31.608184305000066 ], [ -8.034554688999947, 31.613173599000049 ], [ -8.02880874799996, 31.616080672000066 ], [ -8.028061489999914, 31.614859743000068 ], [ -8.028061515999923, 31.614859895000052 ], [ -8.019506943999943, 31.61869394100006 ], [ -8.023958741999934, 31.625088430000062 ], [ -8.025909343999956, 31.624094094000043 ], [ -8.028511813999955, 31.625426727000047 ], [ -8.027616207999927, 31.628270002000079 ], [ -8.02979733199993, 31.629939648000061 ], [ -8.029356794999956, 31.633869425000057 ], [ -8.025488759999917, 31.634238971000059 ], [ -8.02210253599992, 31.633130045000087 ], [ -8.019157592999932, 31.634418493000055 ], [ -8.020888487999912, 31.636804978000043 ], [ -8.018188668999926, 31.638238272000081 ], [ -8.016442258999916, 31.637217226000075 ], [ -8.020197028999917, 31.639933339000038 ], [ -8.041383185999905, 31.643400179000082 ], [ -8.030171849999931, 31.676370836000046 ], [ -8.007059190999939, 31.681122506000065 ], [ -7.991831763999926, 31.684503221000057 ], [ -7.971032038999908, 31.673332622000089 ], [ -7.954941353999914, 31.657420634000061 ], [ -7.95484259899996, 31.647781319000046 ], [ -7.975207341999919, 31.646986308000066 ], [ -7.994910077999918, 31.644629138000084 ], [ -7.999607422999929, 31.637360180000087 ] ] ] ] } }
]
};
var assakouiIghil = {
"type": "FeatureCollection",
"name": "assakoui-Ighil",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "EQ-2023-000166-MAR", "area_id": "04", "locality": "Assakoui-Ighil", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.388908776999926, 31.285900595000044 ], [ -8.455100219999963, 31.285900595000044 ], [ -8.455352617999949, 31.389016222000066 ], [ -8.388908776999926, 31.389402408000024 ], [ -8.388908776999926, 31.285900595000044 ] ] ] ] } }
]
};
        var aourir = {
"type": "FeatureCollection",
"name": "aourir",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "EQ-2023-000166-MAR", "area_id": "05", "locality": "Aourir", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -9.608739756999967, 30.54987849500003 ], [ -9.608739756999967, 30.472680702000048 ], [ -9.670146910999961, 30.472680702000048 ], [ -9.670396779999976, 30.473074544000042 ], [ -9.670696623999959, 30.473474335000049 ], [ -9.670771584999954, 30.473974074000068 ], [ -9.670871531999978, 30.474748670000054 ], [ -9.671421244999976, 30.475948043000074 ], [ -9.672020931999953, 30.477422274000048 ], [ -9.672195840999962, 30.478296817000057 ], [ -9.672620618999929, 30.47877156900006 ], [ -9.673320253999975, 30.478871517000073 ], [ -9.673869966999973, 30.47909640000006 ], [ -9.674544614999945, 30.478671622000036 ], [ -9.675269236999952, 30.478946478000069 ], [ -9.675369183999976, 30.479571152000062 ], [ -9.675694014999976, 30.480870474000028 ], [ -9.675843936999968, 30.481695043000059 ], [ -9.674894431999974, 30.482194782000079 ], [ -9.67479448399996, 30.482619561000035 ], [ -9.674894431999974, 30.484193739000034 ], [ -9.675244249999935, 30.484743452000032 ], [ -9.675644040999941, 30.485068282000043 ], [ -9.676368662999948, 30.48509326900006 ], [ -9.676818427999933, 30.48529316500003 ], [ -9.676793440999973, 30.485642982000059 ], [ -9.67701832299997, 30.488141678000034 ], [ -9.677443101999927, 30.492664317000049 ], [ -9.677767931999938, 30.49471324700005 ], [ -9.677842892999934, 30.495612777000076 ], [ -9.679017279999925, 30.498736147000045 ], [ -9.679591979999941, 30.500285338000026 ], [ -9.681416027999944, 30.502159360000064 ], [ -9.682015713999931, 30.501634633000037 ], [ -9.685039135999943, 30.50190949000006 ], [ -9.689236944999948, 30.506407142000057 ], [ -9.689461826999946, 30.510954768000033 ], [ -9.688648774999933, 30.511825945000055 ], [ -9.690586239999959, 30.519750176000059 ], [ -9.692385300999945, 30.524372763000031 ], [ -9.695483682999964, 30.529020336000031 ], [ -9.698518794999927, 30.533518525000034 ], [ -9.698571283999968, 30.54949222700003 ], [ -9.608739756999967, 30.54987849500003 ] ] ] ] } }
]
};
        var asni = {
"type": "FeatureCollection",
"name": "asni",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "emsr_id": "EMSR695", "glide_no": "EQ-2023-000166-MAR", "area_id": "03", "locality": "Asni", "map_type": "Grading" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -7.931751167999948, 31.206296943000041 ], [ -8.021330296999963, 31.206296943000041 ], [ -8.02158269499995, 31.283108468000023 ], [ -7.931751167999948, 31.28349473600008 ], [ -7.931751167999948, 31.206296943000041 ] ] ] ] } }
]
};
var aitothmane = {
"type": "FeatureCollection",
"name": "ait-othmane",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "Site_ID": 30, "AgencyID": 0, "SiteName": null, "Notes": null, "Area_m2": 172800546.88800001, "Area_ha": 17280.054688799999, "EventCode": "EQ20230909MAR", "SHAPE_Leng": 0.56617407435, "SHAPE_Area": 0.01634050358 }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ -8.297908547999953, 31.187571632000072 ], [ -8.341953878999959, 31.032253885000046 ], [ -8.448589943999934, 31.053117463000035 ], [ -8.404465865999953, 31.100302262000071 ], [ -8.422455826999908, 31.170277055000042 ], [ -8.411499138999943, 31.211912472000051 ], [ -8.297908547999953, 31.187571632000072 ] ] ] ] } }
]
};

function createLayer(data, color, name) {
    return L.geoJSON(data, {
        style: { color: color },
        onEachFeature: function (feature, layer) {
            // Créer le contenu de la popup avec les informations
            var popupContent = `
                <div class='popup'>
                    <div>Nom: ${name}</div>
                    <div>Surface: ${feature.properties.Area_ha || 'Non spécifiée'} ha</div>
                </div>`;
            layer.bindPopup(popupContent);
        }
    });
}



        var layers = {
            adassil: createLayer(adassil, "blue", "Adassil"),
            amizmiz: createLayer(amizmiz, "red", "Amizmiz"),
            taroudant: createLayer(taroudant, "green", "Taroudant"),
            tamrirt: createLayer(tamrirt, "purple", "Tamrirt"),
            tahnaout: createLayer(tahnaout, "gray", "Tahnaout"),
            talatNYaaqoub: createLayer(talatNYaaqoub, "lightblue", "Talat N'Yaaqoub"),
            imzilene: createLayer(imzilene, "magenta", "Imzilene"),
            lallaaziza: createLayer(lallaaziza, "brown", "Lalla Aziza"),
            marrakesh: createLayer(marrakesh, "pink", "Marrakesh"),
            assakouiIghil: createLayer(assakouiIghil, "yellow", "Assakoui Ighil"),
            aourir: createLayer(aourir, "orange", "Aourir"),
            asni: createLayer(asni, "cyan", "Asni"),
            aitothmane: createLayer(aitothmane, "lightgreen", "Ait Othmane")
        };

        // Bouton pour afficher/masquer les couches
        document.getElementById('regionButton').addEventListener('click', function () {
            Object.values(layers).forEach(layer => {
                if (!map.hasLayer(layer)) {
                    layer.addTo(map);
                } else {
                    map.removeLayer(layer);
                }
            });
        });


    





    let vectorLayer = null; // Couche pour les bâtiments

// Fonction pour exécuter la requête et afficher les icônes SVG
async function fetchFilteredData(filterValues) {
    // Construire la requête pour plusieurs valeurs
    const conditions = Array.isArray(filterValues)
        ? filterValues.map(value => `'${value}'`).join(", ")
        : `'${filterValues}'`;
    const query = `SELECT gid, main_dmg, ST_AsGeoJSON(geom) as geometry FROM buildings WHERE main_dmg IN (${conditions})`;

    try {
        const response = await fetch('query.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `query=${encodeURIComponent(query)}`,
        });

        const data = await response.json();

        if (response.ok) {
            // Supprimer la couche précédente si elle existe
            if (vectorLayer) {
                map.removeLayer(vectorLayer);
            }

            // Transformer les données en GeoJSON
            const geojsonData = {
                type: "FeatureCollection",
                features: data.map(row => ({
                    type: "Feature",
                    geometry: JSON.parse(row.geometry), // Convertir la géométrie GeoJSON
                    properties: {
                        gid: row.gid,
                        main_dmg: row.main_dmg
                    }
                }))
            };

            // Ajouter les bâtiments avec SVG dynamique
            vectorLayer = L.geoJSON(geojsonData, {
                pointToLayer: (feature, latlng) => {
                    // Couleur dynamique selon `main_dmg`
                    const fillColor = feature.properties.main_dmg === "Damage"
                        ? "red"
                        : "yellow";

                    // Création d'une icône SVG personnalisée
                    const svgIcon = L.divIcon({
                        className: '', // Pas de classe CSS
                        html: `
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 580 580">
                                <path 
                                    d="m290.329 128.447l-.329-.337-160.549 164.781-.758.777h32.672v212.402h97.049v-125.353h65.369v125.353h94.854v-212.402h32.67z" 
                                    fill="${fillColor}" 
                                    fill-opacity="0.8" 
                                    stroke="black" 
                                    stroke-opacity="0.6" 
                                    stroke-width="10"
                                />
                            </svg>
                        `,
                        iconSize: [40, 40], // Taille de l'icône
                        iconAnchor: [20, 20] // Ancrage au centre
                    });

                    return L.marker(latlng, { icon: svgIcon });
                },
                onEachFeature: (feature, layer) => {
                    // Ajouter un popup pour chaque bâtiment
                    layer.bindPopup(`
                        <b>GID:</b> ${feature.properties.gid}<br>
                        <b>Damage:</b> ${feature.properties.main_dmg}
                    `);
                }
            }).addTo(map);

            // Ajuster la vue pour englober tous les points
            map.fitBounds(vectorLayer.getBounds());
        } else {
            console.error(`Erreur : ${data.error}`);
        }
    } catch (error) {
        console.error(`Erreur : ${error.message}`);
    }
}
document.getElementById('dropdown-button').addEventListener('click', () => {
    const dropdownMenu = document.getElementById('dropdown-menu');
    dropdownMenu.classList.toggle('show');
});

// Gérer les clics sur les options
document.getElementById('filter-damage').addEventListener('click', () => {
    fetchFilteredData('Damage'); // Appeler votre fonction pour les bâtiments endommagés
});

document.getElementById('filter-possible').addEventListener('click', () => {
    fetchFilteredData(['Possible damaged', 'Possible damage']); // Appeler votre fonction pour les bâtiments possiblement endommagés
});

// Cacher le menu déroulant lorsqu'on clique en dehors
document.addEventListener('click', (event) => {
    const dropdown = document.querySelector('.dropdown');
    if (!dropdown.contains(event.target)) {
        document.getElementById('dropdown-menu').classList.remove('show');
    }
});
async function fetchDamageStats() {
    const query = `
        SELECT 
            CASE 
                WHEN main_dmg = 'Damage' THEN 'Damage'
                WHEN main_dmg IN ('Possible damaged', 'Possible damage') THEN 'Possible Damage'
            END AS damage_category,
            COUNT(*) as count
        FROM buildings 
        WHERE main_dmg IN ('Damage', 'Possible damaged', 'Possible damage') 
        GROUP BY damage_category
    `;

    try {
        const response = await fetch('query.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `query=${encodeURIComponent(query)}`,
        });

        const data = await response.json();

        if (response.ok) {
            // Affichage des statistiques
            const statsContainer = document.getElementById('stats-container');
            statsContainer.innerHTML = ''; // Réinitialiser le contenu

            data.forEach(row => {
                const stat = document.createElement('p');
                stat.textContent = `${row.damage_category}: ${row.count}`;
                statsContainer.appendChild(stat);
            });
        } else {
            console.error(`Erreur : ${data.error}`);
        }
    } catch (error) {
        console.error(`Erreur : ${error.message}`);
    }
}
document.getElementById('show-stats').addEventListener('click', () => {
    fetchDamageStats(); // Appeler la fonction pour afficher les statistiques
});







        
   


   
        
        // Vérifiez que vos GeoJSON sont correctement définis
        if (typeof geojsonFile1 === "undefined" || typeof geojsonFile2 === "undefined") {
            console.error("Les fichiers GeoJSON ne sont pas définis.");
            return;
        }

        // Fonction pour appliquer un style
        function getStyle(color) {
            return {
                color: color,
                weight: 2,
                opacity: 1
            };
        }

        function onLayerClick(intensity) {
    return function (event) {
        const clickedLatLng = event.latlng; // Récupérer les coordonnées du clic
        const popupContent = "Intensité : " + intensity;

        // Créer un popup à l'endroit cliqué avec la classe personnalisée
        L.popup({ className: 'custom-popup' }) // Ajouter la classe CSS
            .setLatLng(clickedLatLng) // Positionner le popup
            .setContent(popupContent) // Définir le contenu du popup
            .openOn(map); // Afficher le popup sur la carte
    };
}
// Chargement des couches GeoJSON avec des styles spécifiques et événements de clic
const layer1 = L.geoJSON(geojsonFile1, { style: getStyle('#b1f0f5') })
    .on('click', onLayerClick(3))
    .addTo(map);

const layer2 = L.geoJSON(geojsonFile2, { style: getStyle('#bbff4a') })
    .on('click', onLayerClick(4))
    .addTo(map);

const layer3 = L.geoJSON(geojsonFile3, { style: getStyle('#e36a6c') })
    .on('click', onLayerClick(5))
    .addTo(map);

const layer4 = L.geoJSON(geojsonFile4, { style: getStyle('#fcc401') })
    .on('click', onLayerClick(6))
    .addTo(map);

const layer5 = L.geoJSON(geojsonFile5, { style: getStyle('#ff5500') })
    .on('click', onLayerClick(7))
    .addTo(map);

const layer6 = L.geoJSON(geojsonFile6, { style: getStyle('#f6e600') })
    .on('click', onLayerClick(8))
    .addTo(map);

// Gestion des couches avec un bouton
let layersVisible = true;
function toggleLayers() {
    [layer1, layer2, layer3, layer4, layer5, layer6].forEach(layer => {
        if (layersVisible) {
            map.removeLayer(layer);
        } else {
            layer.addTo(map);
        }
    });
    layersVisible = !layersVisible;
}

// Bouton pour basculer les couches
const toggleButton = L.control({ position: 'topright' });
toggleButton.onAdd = function () {
    const button = L.DomUtil.create('button', 'toggle-button'); // Ajout de la classe CSS
    button.innerText = 'Intensité'; // Texte du bouton
    button.onclick = toggleLayers; // Événement de clic pour basculer les couches
    return button;
};
toggleButton.addTo(map);
       // Variable pour stocker la couche GeoJSON
       let layerAitOthmane;

// Charger et créer la couche GeoJSON
fetch('ait-othmane.geojson')
    .then(response => response.json())
    .then(data => {
        layerAitOthmane = L.geoJSON(data, {
            onEachFeature: function (feature, layer) {
                // Ajouter un popup avec des informations sur les entités
                layer.bindPopup(`<b>Nom:</b> ${feature.properties.nom || 'Sans nom'}`);
            }
        });
    });

// Variable pour gérer la visibilité de la couche
let layerVisible = false;

// Gestionnaire d'événement pour afficher/masquer la couche
document.getElementById('toggle-geojson').onclick = function () {
    if (layerVisible) {
        map.removeLayer(layerAitOthmane); // Masquer la couche
    } else {
        layerAitOthmane.addTo(map); // Afficher la couche
        map.fitBounds(layerAitOthmane.getBounds()); // Ajuster la vue
    }
    layerVisible = !layerVisible; // Basculer l'état
};
       
// Définir un SVG personnalisé pour les stations de mesure
const svgIcon = L.divIcon({
    className: 'svg-icon', // Ajout d'une classe pour personnalisation CSS
    html: `
        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 579.997 579.997" width="40" fill="#FFF">
            <path d="m231.846 472.572v-440.766h-22.18v440.557c-34.016 2.649-59.419 18.767-59.419 38.871 0 22.021 30.456 39.271 69.337 39.271 38.877 0 69.332-17.25 69.332-39.271.001-19.639-24.242-35.47-57.07-38.662z"/>
            <path d="m235.243 29.492l-1.52 178.136 196.026 2.701z"/>
        </svg>
    `
});

// Ajout de la couche stat avec SVG comme icône
const layerStat = L.geoJSON(stat, {
    pointToLayer: function (feature, latlng) {
        // Créer un marqueur avec l'icône SVG pour chaque station
        return L.marker(latlng, { icon: svgIcon });
    },
    onEachFeature: function (feature, layer) {
        // Ajouter un popup avec des informations pour chaque station
        layer.bindPopup(`
            <b>GID:</b> ${feature.properties.gid}<br>
            <b>Type:</b> ${feature.properties.type}<br>
            <b>Station:</b> ${feature.properties.name}
        `);
    }
}).addTo(map);

// Gestion du bouton pour basculer la visibilité de la couche stat (stations)
let statLayerVisible = true;
const toggleStatButton = L.control({ position: 'topleft' });
toggleStatButton.onAdd = function () {
    const button = L.DomUtil.create('button', 'toggle-stat-button'); // Ajout de la classe CSS
    button.innerText = 'Stations de mesure'; // Texte du bouton
    button.onclick = function () {
        if (statLayerVisible) {
            map.removeLayer(layerStat); // Masquer la couche
        } else {
            layerStat.addTo(map); // Afficher la couche
        }
        statLayerVisible = !statLayerVisible; // Basculer l'état
    };
    return button;
};
toggleStatButton.addTo(map);

// Ajuster la vue de la carte pour englober les stations
map.fitBounds(layerStat.getBounds());
    });
  
    
    
    </script>


    <script>
    AOS.init();

    // Fonction pour créer et ajouter le tableau
    function ajouterTableau() {
        const data = [
            ["Statistique", "Moyen", "Minimum", "Maximum", "Écart-type"],
            ["Perte financière", 36453, 1200, 6400, 5254],
        ];

        const tableau = document.createElement("table");
        tableau.style.width = "100%";
        tableau.style.borderCollapse = "collapse";

        // Ajout des lignes au tableau
        data.forEach((ligne, index) => {
            const tr = document.createElement("tr");
            ligne.forEach(cellule => {
                const td = document.createElement("td");
                td.textContent = cellule;
                td.style.border = "1px solid black";
                td.style.padding = "8px";
                td.style.textAlign = "center";
                tr.appendChild(td);
            });
            tableau.appendChild(tr);
        });

        // Ajout du tableau au conteneur
        document.getElementById("tableau-container").appendChild(tableau);
    }

    // Appel de la fonction pour ajouter le tableau
    ajouterTableau();

    // Chart.js histogram initialization with animation
    const ctx = document.getElementById('Damaged communes').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Azilal', 'Al Haouz', 'Chichaoua', 'Marrakech', 'Ouarzazate', 'Taroudannt'],
            datasets: [
                {
                    label: 'Nombre total de communes',
                    data: [44, 40, 35, 19, 17, 89],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Nombre de communes sinistrées',
                    data: [10, 40, 32, 13, 17, 57],
                    backgroundColor: 'rgba(255, 150, 60, 0.5)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: { y: { beginAtZero: true } },
            plugins: { tooltip: { enabled: true } }
        }
    });

    // Diagramme circulaire : Répartition selon le genre
    const data = {
        labels: ['Hommes', 'Femmes'],
        datasets: [{
            data: [43, 57],
            backgroundColor: ['#89CFF0', '#ED7F10', 0.1],
            borderWidth: 2,
            hoverOffset: 5
        }]
    };

    const config = {
        type: 'pie',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                        }
                    }
                }
            }
        }
    };

    const ctxPie = document.getElementById('Repartition Genre').getContext('2d');
    new Chart(ctxPie, config);

    const dataLabels = [
        "Agriculture",
        "Fonctionnaire",
        "Emploi informel",
        "Employé",
        "Entrepreneur",
        "Sans emploi",
        "Transporteur"
    ];

    const dataValues = [5, 5, 10, 11, 26, 37, 6];

    const ctxActivity = document.getElementById("Activity Histogram").getContext("2d");

    new Chart(ctxActivity, {
        type: "bar",
        data: {
            labels: dataLabels,
            datasets: [
                {
                    label: "Répartition par secteur d'activité (%)",
                    data: dataValues,
                    backgroundColor: [
                        "#4caf50",
                        "#2196f3",
                        "#ff9800",
                        "#9c27b0",
                        "#f44336",
                        "#8bc34a",
                        "#607d8b"
                    ],
                    borderColor: "#000000",
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true
                },
                tooltip: {
                    callbacks: {
                        label: (context) => `${context.raw}%`
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 40,
                    title: {
                        display: true,
                        text: "Pourcentage"
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: "Secteur d'activité"
                    }
                }
            }
        }
    });

    // Histogramme pour Sum of Damage_Pot et Sum of TempCamp
    const ctxParallel = document.getElementById('ChartParallel').getContext('2d');

    new Chart(ctxParallel, {
        type: 'bar',
        data: {
            labels: ['Adebdi', 'Talat-NYaaqoub', 'Taroudant', 'AitOthmane', 'Adassil', 
                    'Tamarirt', 'Chichaoua', 'Amizmiz', 'Lalla Aaziza', 'Imzilene', 
                    'Asni', 'Tahnaout', 'Aourir', 'Marrakesh', 'Assakoui-Ighil', 'Ouarzazate'],
            datasets: [
                {
                    label: 'Sum of Damage_Pot',
                    data: [2575, 757, 617, 606, 488, 273, 271, 192, 170, 132, 98, 93, 82, 77, 36, 0],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Sum of TempCamp',
                    data: [11, 0, 34, 16, 40, 0, 5, 5, 6, 0, 53, 9, 0, 4, 0, 0],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Entités'
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Valeurs'
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.dataset.label}: ${context.raw}`;
                        }
                    }
                },
                legend: {
                    position: 'top'
                }
            }
        }
    });



</script>
</body>
</html>