<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">
        Holy *** are you crazy?
    </h1>

    <div class="container">
        <h4 class="mt-5">Your Paragraph :</h4>
        <div class="d-flex mt-4">
            <p> 
                <?php echo $_GET['badword']; ?>
            </p>
            <span class="lenght ms-5 fw-bold">
                Lenght : <?php echo strlen($_GET['badword']); ?> 
            </span>
        </div>


        <h4 class="mt-5">Censored Paragraph :</h4>
        <div class="d-flex mt-4">
            <p> 
                <?php 
                    $badWords = array("fuck", "shit", "bitch", "asshole");

                    foreach ($badWords as $word) {
                      $_GET['badword'] = str_ireplace($word, "***", $_GET['badword']);
                    }
                    echo '&nbsp';
                    
                    echo $_GET['badword'];
                ?>
            </p>
            <span class="lenght ms-5 fw-bold">
                Lenght : <?php echo strlen($_GET['badword']); ?> 
            </span>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>