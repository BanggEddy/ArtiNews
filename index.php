<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - ArtiNews</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700 py-4">
        <div class="container mx-auto flex items-center justify-between">
            <a href="index.php" class="flex items-center">
                <img src="logo.png" class="h-8 mr-3" alt="marque Logo" />
                <span class="text-2xl font-semibold dark:text-white">ArtiNews</span>
            </a>
        </div>
    </header>
    <br>
    <?php if (!empty($_GET['error'])) : ?>
        <p class="border border-red-500 rounded p-4 text-red-500 w-full max-w-md mb-8 mx-auto">Une erreur est survenue. Veuillez réessayer.</p>
    <?php endif; ?>
    <form action="connexion_action.php" method="post" class="max-w-md mx-auto mt-8 p-6 bg-white shadow-md rounded">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="w-full px-3 py-2 text-gray-700 border rounded focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Email">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Mot de passe
            </label>
            <input class="w-full px-3 py-2 text-gray-700 border rounded focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************">
        </div>
        <div class="flex items-center justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Connexion
            </button>
        </div>
    </form>
</body>

</html>
