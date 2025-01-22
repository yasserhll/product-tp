<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Titre par défaut')</title> {{-- Titre par défaut si non défini --}}
    <link rel="stylesheet" href="https://cdn.example.com/style.css">
</head>
<body>
    <header>
        <h1>Application Laravel</h1>
        @yield('header') {{-- Zone de contenu personnalisable pour le header --}}
    </header>

    <nav>
        @yield('nav', 'Menu de navigation par défaut') {{-- Contenu par défaut si non défini --}}
    </nav>

    <main>
        @yield('content') {{-- Contenu principal à personnaliser --}}
    </main>

    <footer>
        <p>&copy; 2025 - Tous droits réservés.</p>
    </footer>
</body>
</html>
