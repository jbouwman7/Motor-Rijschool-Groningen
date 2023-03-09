<?php

session_start();

if (!isset($_SESSION['loggedInUser'])) {
  header('location: login.php');
}

require('dbFunctions.php');
require('db_pdo.php');
require('reviewFunctions.php');

$id = $_GET['id'];

$reviews = $pdo->query("SELECT * FROM reviews WHERE id = $id")->fetchAll();


// if (isset($_POST['submit'])) {
//     $form = $_POST;
//     updateReview($pdo, $id, $form);
//     var_dump($_POST);
//     header('location:' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../dist/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
      <div class="space-y-6 sm:space-y-5">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Bewerk hier de review met ID:
          <?= $id ?>
        </h3>

  	  <form action="saveReview.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <?php foreach ($reviews as $review) : ?>
        <div class="space-y-6 sm:space-y-5">


          <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Geschreven door:</label>
            <div class="mt-1 sm:col-span-2 sm:mt-0">
              <div class="flex max-w-lg rounded-md shadow-sm">
                <input type="text" name="title" id="title" autocomplete="title" value="<?= $review['title'] ?>"
                  class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="description"
              class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">description</label>
            <div class="mt-1 sm:col-span-2 sm:mt-0">
              <textarea id="description" name="description" rows="3"
                class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"><?= $review['description'] ?></textarea>
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="rating" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">rating</label>
            <div class="mt-1 sm:col-span-2 sm:mt-0">
              <input type="number" min="0" max="5" name="rating" id="rating" autocomplete="rating"
                value="<?= $review['rating'] ?>"
                class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
          </div>


          <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Huidige
              afbeelding
              <img src="./images/<?= $review['image'] ?>" alt="" class="w-36"> 
            </label>
              
              
            <div class="mt-1 sm:col-span-2 sm:mt-0">
              <div
                class="flex max-w-lg justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                    aria-hidden="true">
                    <path
                      d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="image"
                      class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                      <span>Upload a file</span>
                      <input id="image" name="image" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-5">
      <div class="flex justify-end">
      <button type="submit" name="edit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
        <button type="submit" name="delete"
          class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
        <!-- <button type="submit" value="submit" name="submit"
          class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button> -->
      </div>
    </div>
    <?php endforeach; ?>
  </form> 

</body>

</html>