<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes articles</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="index.php" class="flex items-center">
        <img src="logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ArtiNews</span>
    </a>
    <a href="index.php" class="flex items-center">
    <img src="2206368.png" class="h-8 mr-3" alt="admin Logo"/>
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Administrateur</span>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

        <li>
          <a href="ajouter_article.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ajouter</a>
        </li>
        <li>
          <a href="modifierpage_article.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Modifier</a>
        </li>
        <li>
          <a href="supprimerpage_article.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Supprimer</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</head>

<body>
<br><br><br>
    <div class="grid grid-cols-3 gap-8 mx-auto container items-center">
        <?php 
        $json = file_get_contents('bdd.json');         
        $articles = json_decode($json, true);

        foreach ($articles as $index => $a) : ?>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="details_article.php?index=<?php echo $index; ?>">
                    <img class="rounded-t-lg" src="<?php echo $a['image']; ?>" alt="" />
                </a>
                <div class="p-5">
                    <a href="details_article.php?index=<?php echo $index; ?>">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo $a['titre']; ?></h2>
                    </a>
                    <p class="mb-3 font-normal text-gray-700"><?php echo substr($a['contenu'], 0, 200); ?>...</p>
                    <form action="modifier_article.php" method="post">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-full mt-2">Modifier</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>
