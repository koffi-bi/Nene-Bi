<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <!-- Inclure Font Awesome et un fichier CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="dashboard">
       
        <!-- Menu latéral -->
        <aside class="sidebar">
          
                <div class="logo">
                    <img src= "assets/log.jpng" alt="FlyFret">
                </div>
           
            <ul>
                
                <li>
                    <a href="#" class=".menu-link">
                        <i class="fas fa-users"></i> Gestion des Clients <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Liste des Clients</a></li>
                        
                    </ul>
                </li>

                <hr>

                <li>
                    <a href="#" class=".menu-link">
                        <i class="fas fa-file-alt"></i> Gestion des Bordereaux <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Historique</a></li>
                    </ul>
                </li>
                <hr>

                <li>
                    <a href="#">
                        <i class="fas fa-box"></i> Suivis des Colis <i class="fas fa-chevron-down arrow-blue"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                
               <hr class="hr">
                <li class="para1">
                    <a href="#" class=".menu-link">
                        <i class="fas fa-cog"></i> Paramètres <i class="fas fa-chevron-down arrow"></i>
                  </a>
                  <ul class="submenu">
                    <li><a href="#">se deconnecter</a></li>
                </ul>
                </li> 
            
            </ul>
        </aside>

        <!-- Contenu principal -->
        <main class="main-content">
            <!-- En-tête -->
            <header>
                <h1>Tableaux de Bord</h1>
                <div class="user-icon">
                  <i class="fas fa-user-circle"></i>
                </div>
            </header>

            <!-- Statistiques -->

            <section class="stats">
                <div class="stat-item">
                    <i class="fas fa-home"></i>
                    <p>XX</p>
                    <span>Dépôts</span>
                </div>
                <div class="stat-item">
                    <i class="fas fa-download"></i>
                    <p>XX</p>
                    <span>Retraits</span>
                </div>
               
            </section>

             <!-- Fin Statistiques -->
           

            <!-- Diagramme circulaire -->
            <section class="chart">
                <div class="donut-chart"></div>
                <ul class="chart-legend">
                    <li class="rose"><span class="color en-cours"></span> En cours</li>
                    <li class="rose-1"><span class="color arriver"></span> Arriver</li>
                    <li class="viollet"><span class="color disponible"></span> Disponible</li>
                </ul>
            </section>



              <!--Fin  Diagramme circulaire -->
           
        </main>
    </div>
    <!-- Mon code javascript -->
    <script>
        // Récupère tous les éléments ayant un sous-menu
        document.querySelectorAll('.menu-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault(); // Empêche le comportement par défaut du lien
    
                // Sélectionne le parent (li) et ajoute/supprime la classe 'open'
                const parentLi = this.parentElement;
                parentLi.classList.toggle('open');
    
                // Récupère le sous-menu
                const submenu = parentLi.querySelector('.submenu');
    
                // Affiche/masque le sous-menu
                if (submenu.style.display === 'block') {
                    submenu.style.display = 'none';
                } else {
                    submenu.style.display = 'block';
                }
            });
        });
    </script>
    
  
    
</body>
</html>
