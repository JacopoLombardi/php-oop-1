
<?php 

require_once __DIR__ . '/Model/Movie.php';

$movie1 = new Movie('StarWars', 'loremmm', 'science fiction', '2006');
$movie2 = new Movie('Matrix', 'loremmm', 'science fiction', '2005');

var_dump($movie1)

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>Document</title>
</head>
<body>
   
   <div class="container  text-center  mt-5  pt-4">
      <h1>Film</h1>

      <div class="d-flex  flex-wrap  justify-content-center  mt-4">

         <div class="col-4  border  p-4">
            <h3> <?php echo $movie1 -> getMovieInfo() ?> </h3>

            <?php foreach($movie1 as $movie): ?>
               <p> <?php echo $movie ?> </p>
            <?php endforeach ?>
         </div>

         

         <div class="col-4  border  p-4">
            <h3> <?php echo $movie2 -> getMovieInfo() ?> </h3>

            <?php foreach($movie2 as $movie): ?>
               <p> <?php echo $movie ?> </p>
            <?php endforeach ?>
         </div>

      </div>

   </div>

</body>
</html>