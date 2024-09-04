<?php
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];
    $paragraphLen = strlen($paragraph);
    $wordCensored = str_replace($badword, '***', $paragraph);
    $censoredLen = strlen($wordCensored);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="text-center fw-bold">Paragrafo con la lunghezza</h2>
                <p class="fs-3"><span class="fw-bold">Paragrafo:</span> <?php echo $paragraph ?> </p>
                <p class="fs-3"><span class="fw-bold">Lunghezza paragrafo:</span> <?php echo $paragraphLen ?> </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="text-center fw-bold">Paragrafo con anche la parola censurata</h2>
                <p class="fs-3"><span class="fw-bold">Paragrafo censurato:</span> <?php echo $wordCensored ?> </p>
                <p class="fs-3"><span class="fw-bold">Lunghezza paragrafo censurato:</span> <?php echo $censoredLen ?> </p>
            </div>
        </div>
    </div>
</body>
</html>