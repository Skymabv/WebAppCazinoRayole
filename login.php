<?php
session_start();
require 'db_connection.php'; 

// Eventuele foutmelding van inlogpoging
$error = isset($_SESSION['error']) ? $_SESSION['error'] : null;
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij het Online Casino</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/achtergrond-zwart.jpeg');
            background-color: #B01A1A;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: 'Times New Roman', serif;
            color: #ffd700;
        }
        .navbar-brand, .nav-link {
            color: #ffd700 !important;
        }
        .card {
            background-color: #3a3a3a;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .card-title {
            color: #ffd700;
            font-size: 1.5rem;
        }
        .form-control {
            border-radius: 5px;
            border: 2px solid #000000;
            padding: 10px;
            font-size: 16px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
            background-color: #2c2c2c;
            color: #ffd700;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #333333;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .hero-image {
            background-position: center;
            background-size: cover;
            text-align: center;
            color: white;
            padding: 80px 20px;
            border-radius: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .hero-image h1 {
            font-size: 3rem;
        }
        .hero-image p {
            font-size: 1.5rem;
        }
        .navbar-brand img {
            height: 100px;
            width: auto;
        }
        footer {
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Navigatiebalk -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logorayole.jpeg" alt="Logo" class="navbar-brand-img" >
                CAZINO RAYOLE
            </a>
            <!-- Navbar Toggler (voor mobiel) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigatie links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Games
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="roulette.php">Roulette</a>
                            <a class="dropdown-item" href="slots.php">Slots</a>
                            <a class="dropdown-item" href="blackjack.php">Blackjack</a>
                            <a class="dropdown-item" href="poker.php">Poker</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="promotions.php">Promotions</a></li>
                    <li class="nav-item"><a class="nav-link" href="bingo_chat.php">Bingo + Chat</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Afbeelding -->
    <div class="hero-image">
        <h1>Welkom bij Cazino Rayole !</h1>
        <p>Inloggen om te spelen</p>
    </div>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Inloggen</h5>
                        <form action="login_process.php" method="post">
                            <div class="form-group">
                                <label for="gebruikersnaam">Gebruikersnaam</label>
                                <input type="text" name="gebruikersnaam" class="form-control" id="gebruikersnaam" placeholder="Gebruikersnaam" required>
                            </div>
                            <div class="form-group">
                                <label for="wachtwoord">Wachtwoord</label>
                                <input type="password" name="wachtwoord" class="form-control" id="wachtwoord" placeholder="Wachtwoord" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Inloggen</button>
                        </form>
                        <p class="mt-3 text-center">Nog geen account? <a href="register.php" class="text-warning">Registreren</a></p>
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Online Casino. Alle rechten voorbehouden.</p>
    </footer>

    <!-- Bootstrap JS en jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
