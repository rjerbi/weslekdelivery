<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livreurs</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #e67e22;
            --primary-dark: #d35400;
            --bg-light: #fff8f0;
            --text-dark: #333;
            --text-light: #fff;
            --accent-light: #ffe5b4;
            --shadow: 0 4px 8px rgba(0,0,0,0.1);
            
            --background: #f9f9f9;
            --text-color: #333;
            --header-bg: #ffe5b4;
            --card-bg: #fff;
            --card-text: #333;
            --footer-bg: #333;
            --tunisian-red: #fb6a09;
            --tunisian-blue: #0a75ad;
        }

        body.dark-mode {
            --background: #1e1e1e;
            --text-color: #f0f0f0;
            --header-bg: #333;
            --card-bg: #2a2a2a;
            --card-text: #f0f0f0;
            --footer-bg: #111;
            --tunisian-red: #d35400;
            --tunisian-blue: #085d8a;
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
            scroll-behavior: smooth;
        }

        header {
            background-color: var(--header-bg);
            padding: 20px;
            text-align: center;
            box-shadow: var(--shadow);
        }

        header h1 {
            color: var(--tunisian-red);
        }

        main {
            padding: 40px 20px;
            text-align: center;
        }

        .livreurs-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .livreur-card {
            background-color: var(--card-bg);
            color: var(--card-text);
            width: 240px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: transform 0.3s;
            text-align: center;
        }

        .livreur-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .livreur-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .livreur-card h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: var(--tunisian-red);
        }

        .livreur-card p {
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .status {
            font-weight: bold;
            font-size: 0.95rem;
            margin-top: 5px;
        }

        .disponible {
            color: green;
        }

        .livraison {
            color: orange;
        }

        .livreur-card .description,
        .livreur-card .details {
            font-size: 0.85rem;
            margin-top: 10px;
            color: var(--card-text);
            opacity: 0.8;
        }

        .livreur-card .details {
            font-size: 0.8rem;
            text-align: left;
        }

        footer {
            margin-top: 50px;
            background-color: var(--footer-bg);
            color: var(--text-light);
            padding: 15px;
            text-align: center;
            font-size: 0.9rem;
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
            box-shadow: var(--shadow);
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
        }

        .logo img {
        width: 200px; 
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{ asset('images/logologo.png') }}" alt="Logo">
        </div>
        <h1>Nos Livreurs</h1>
        <p>Disponibilité en temps réel</p>
    </header>

    <main>
        <div class="livreurs-list">
            <div class="livreur-card">
                <img src="{{ asset('images/im0.jpeg') }}" alt="Ahmed Ben Salah">
                <h3>Ahmed Ben Salah</h3>
                <p class="status disponible">Disponible ✅</p>
                <p class="description"> expert en livraison rapide dans les zones résidentielles et commerciales.</p>
                <div class="details">
                    <p><strong>Véhicule :</strong> Moto 125cc</p>
                    <p><strong>Téléphone :</strong> 123-456-789</p>
                    <p><strong>Adresse :</strong> 15 Rue des Palmiers, Nabeul</p>
                    <p><strong>Matricule :</strong> L12345</p>
                </div>
            </div>

            <div class="livreur-card">
                <img src="{{ asset('images/im1.jpeg') }}" alt="Amir slimi">
                <h3>Amir slimi</h3>
                <p class="status livraison">En Livraison 🚚</p>
                <p class="description"> parfait pour les livraisons urgentes en ville.</p>
                <div class="details">
                    <p><strong>Véhicule :</strong> Vélo électrique</p>
                    <p><strong>Téléphone :</strong> 987-654-321</p>
                    <p><strong>Adresse :</strong>  hammamet nord</p>
                    <p><strong>Matricule :</strong> F78901</p>
                </div>
            </div>

            <div class="livreur-card">
                <img src="{{ asset('images/im2.jpeg') }}" alt="Wassim Jouini">
                <h3>Wassim Jouini</h3>
                <p class="status disponible">Disponible ✅</p>
                <p class="description"> spécialisé dans les zones touristique et les livraisons urgentes.</p>
                <div class="details">
                    <p><strong>Véhicule :</strong> Scooter 50cc</p>
                    <p><strong>Téléphone :</strong> 654-321-987</p>
                    <p><strong>Adresse :</strong> AFH, mrezga</p>
                    <p><strong>Matricule :</strong> W23456</p>
                </div>
            </div>

            <div class="livreur-card">
                <img src="{{ asset('images/im3.jpeg') }}" alt="Houssem El Amri">
                <h3>Houssem El Amri</h3>
                <p class="status livraison">En Livraison 🚚</p>
                <p class="description">très efficace pour les livraisons dans les zones commerciales et industrielles.</p>
                <div class="details">
                    <p><strong>Véhicule :</strong> voiture</p>
                    <p><strong>Téléphone :</strong> 321-987-654</p>
                    <p><strong>Adresse :</strong>  nabeul</p>
                    <p><strong>Matricule :</strong> H45678</p>
                </div>
            </div>

            <div class="livreur-card">
                <img src="{{ asset('images/im4.jpeg') }}" alt="Aymen hmisi">
                <h3>Aymen hmisi</h3>
                <p class="status disponible">Disponible ✅</p>
                <p class="description">il livre dans les délais les plus courts.</p>
                <div class="details">
                    <p><strong>Véhicule :</strong> moto 50</p>
                    <p><strong>Téléphone :</strong> 567-890-123</p>
                    <p><strong>Adresse :</strong>  Nabeul</p>
                    <p><strong>Matricule :</strong> N34567</p>
                </div>
            </div>

            <div class="livreur-card">
                <img src="{{ asset('images/im5.jpeg') }}" alt="Karim Messaoudi">
                <h3>Karim Messaoudi</h3>
                <p class="status livraison">En Livraison 🚚</p>
                <p class="description"> idéal pour les livraisons urgentes dans les zones difficiles d'accès.</p>
                <div class="details">
                    <p><strong>Véhicule :</strong> Moto 125cc</p>
                    <p><strong>Téléphone :</strong> 432-109-876</p>
                    <p><strong>Adresse :</strong>  Hammamet</p>
                    <p><strong>Matricule :</strong> K56789</p>
                </div>
            </div>
        </div>
    </main>
 <footer>
        &copy; 2025 Weslek - Tous droits réservés.
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
        });
    </script>

</body>
</html>