<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Restos</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #ff8c00;
            --light: #ffe5b4;
            --dark: #333;
            --gray: #777;
            --radius: 8px;
            
            --background: #f4f4f4;
            --text-color: #333;
            --header-bg: #ffe5b4;
            --card-bg: #fff;
            --footer-bg: #333;
            --tunisian-red: #fb6a09;
            --tunisian-blue: #0a75ad;
            --banner-bg: #ffe5b4;
            --banner-color: #fb6a09;
        }

        body.dark-mode {
            --background: #1e1e1e;
            --text-color: #f0f0f0;
            --header-bg: #333;
            --card-bg: #2a2a2a;
            --footer-bg: #111;
            --tunisian-red: #d35400;
            --tunisian-blue: #085d8a;
            --light: #2a2a2a;
            --dark: #f0f0f0;
            --gray: #aaa;
            --banner-bg: #333;
            --banner-color: #f0f0f4;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background-color 0.3s, color 0.3s;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            background-color: var(--header-bg);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header .logo img {
            height: 120px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-bar input {
            padding: 8px 15px;
            border: 1px solid #ccc;
            border-radius: 20px;
            width: 220px;
            background-color: var(--card-bg);
            color: var(--text-color);
        }

        .search-bar button {
            padding: 8px 15px;
            border: none;
            background-color: var(--primary);
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-bar button:hover {
            background-color: var(--tunisian-red);
        }

        .location {
            font-size: 14px;
            color: var(--text-color);
            cursor: pointer;
        }

        section.banner {
            background-color: var(--banner-bg);
            color: var(--banner-color);
            text-align: center;
            padding: 60px 20px;
        }

        .banner h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .banner p {
            font-size: 1.2em;
        }

        section.categories {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
        }

        .category-btn {
            padding: 10px 20px;
            background-color: var(--dark);
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .category-btn:hover {
            background-color: #555;
        }

        section.restaurants {
            padding: 40px 20px;
            background-color: var(--background);
        }

        .restaurants h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary);
        }

        .restaurant-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .restaurant-item {
            background-color: var(--card-bg);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            transition: transform 0.3s;
        }

        .restaurant-item:hover {
            transform: translateY(-5px);
        }

        .restaurant-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .restaurant-info {
            padding: 15px;
            text-align: center;
        }

        .restaurant-info h3 {
            margin-bottom: 10px;
            font-size: 1.3em;
            color: var(--text-color);
        }

        .restaurant-info p {
            margin-bottom: 15px;
            font-size: 1em;
            color: var(--gray);
        }

        .order-btn {
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .order-btn:hover {
            background-color: var(--tunisian-red);
        }

        footer {
            background-color: var(--footer-bg);
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            position: relative;
        }

        .theme-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--tunisian-red);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 1000;
            font-size: 1.5rem;
            border: none;
        }

        body.dark-mode .theme-toggle {
            background: var(--tunisian-blue);
        }

        @media (max-width: 768px) {
            .theme-toggle {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
                bottom: 20px;
                right: 20px;
            }
            
            header {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
            }
            
            .search-bar {
                width: 100%;
            }
            
            .search-bar input {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logologo.png') }}" alt="Logo">
        </div>

        <div class="search-bar">
            <input type="text" id="search" placeholder="Rechercher des restaurants...">
            <button id="search-btn">Rechercher</button>
        </div>

        <div class="location" id="location">
            Sélectionnez votre localisation
        </div>
    </header>

    <section class="banner">
        <h1>Livraison rapide</h1>
        <p>Commandez vos repas préférés en quelques clics !</p>
    </section>

    <section class="restaurants">
        <h2>Nos restaurants populaires</h2>
        <div class="restaurant-list">
            <div class="restaurant-item">
                <img src="{{ asset('images/yoyo.jpg') }}" alt="Restaurant 1">
                <div class="restaurant-info">
                    <h3>YOYO FOOD</h3>
                    <p>Pizza, Pasta, Salades</p>
                    <a href="/" class="order-btn">Commander</a>
                </div>
            </div>

            <div class="restaurant-item">
                <img src="{{ asset('images/sushi.webp') }}" alt="Restaurant 2">
                <div class="restaurant-info">
                    <h3>Sushi House</h3>
                    <p>Sushi, Ramen, Sashimi</p>
                    <a href="/sushi-house" class="order-btn">Commander</a>
                </div>
            </div>

            <div class="restaurant-item">
                <img src="{{ asset('images/ohya-p1.jpg') }}" alt="Restaurant 3">
                <div class="restaurant-info">
                    <h3>oh ya !</h3>
                    <p>Burgers, Frites, Salades</p>
                    <a href="/" class="order-btn">Commander</a>
                </div>
            </div>

            <div class="restaurant-item">
                <img src="{{ asset('images/pizzeria_al_taglio_02.jpg') }}" alt="Restaurant 4">
                <div class="restaurant-info">
                    <h3>altaglio</h3>
                    <p>pizza, Vegan, Salades</p>
                    <a href="/altaglio" class="order-btn">Commander</a>
                </div>
            </div>
            <div class="restaurant-item">
                <img src="{{ asset('images/elbehi.jpg') }}" alt="Restaurant 5">
                <div class="restaurant-info">
                    <h3>ELBEHI</h3>
                    <p>plat tunisien, kafteji, lablebi</p>
                    <a href="/el-behi" class="order-btn">Commander</a>
                </div>
            </div>
            <div class="restaurant-item">
                <img src="{{ asset('images/crepe.jpg') }}" alt="Restaurant 4">
                <div class="restaurant-info">
                    <h3>crêpe club</h3>
                    <p>crêpe, donates, maccaron</p>
                    <a href="/" class="order-btn">Commander</a>
                </div>
            </div>
            <div class="restaurant-item">
                <img src="{{ asset('images/omaa.jpg') }}" alt="Restaurant 4">
                <div class="restaurant-info">
                    <h3>OMA</h3>
                    <p>Caffé glacée, jus, Caffé noir</p>
                    <a href="/oma" class="order-btn">Commander</a>
                </div>
            </div>
          
            <div class="restaurant-item">
                <img src="{{ asset('images/heav.jpg') }}" alt="Restaurant 4">
                <div class="restaurant-info">
                    <h3>heaven gates resto</h3>
                    <p>pasta, ressoto, fruit de mer</p>
                    <a href="/" class="order-btn">Commander</a>
                </div>
            </div>
            <div class="restaurant-item">
                <img src="{{ asset('images/sallem.png') }}" alt="Restaurant 4">
                <div class="restaurant-info">
                    <h3>salleme</h3>
                    <p>gateau, glace, croisson</p>
                    <a href="/sellem" class="order-btn">Commander</a>
                </div>
            </div>
            <div class="restaurant-item">
                <img src="{{ asset('images/el chi5.png') }}" alt="Restaurant 4">
                <div class="restaurant-info">
                    <h3>ELCHI5</h3>
                    <p>couscous,pates,poisson</p>
                    <a href="/el-chikh" class="order-btn">Commander</a>
                </div>
        </div>
    
        </div>
    </section>

    <footer>
        &copy; 2025 Livraison à Nabeul et Hammamet | Tous droits réservés
    </footer>

    <button class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('themeToggle');
            const body = document.body;

            if (localStorage.getItem('mode') === 'dark') {
                body.classList.add('dark-mode');
                toggleBtn.innerHTML = '<i class="fas fa-sun"></i>';
            }

            toggleBtn.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                const isDark = body.classList.contains('dark-mode');
                toggleBtn.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
                localStorage.setItem('mode', isDark ? 'dark' : 'light');
            });

            document.getElementById('search-btn').addEventListener('click', function() {
                const query = document.getElementById('search').value.toLowerCase().trim();
                const restaurants = document.querySelectorAll('.restaurant-item');

                restaurants.forEach(item => {
                    const name = item.querySelector('h3').textContent.toLowerCase();
                    const description = item.querySelector('p').textContent.toLowerCase();

                    if (name.includes(query) || description.includes(query)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });

            document.getElementById('search').addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    document.getElementById('search-btn').click();
                }
            });

            document.getElementById('location').addEventListener('click', function() {
                const newLocation = prompt('Entrez votre ville ou quartier :');
                if (newLocation) {
                    document.getElementById('location').textContent = newLocation;
                }
            });
            
        });
        
    </script>
</body>
</html>