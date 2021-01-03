<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../scripts/header.js"></script>
    <title>INICIO - MAKEUP VIBES</title>
</head>
<body>
    <?php  require '../partials/header.php' ?>
    <section class="contenido">

        <input type="radio" id="1" name="image-slide" hidden/> 
        <input type="radio" id="2" name="image-slide" hidden/> 
        <input type="radio" id="3" name="image-slide" hidden/> 
        <input type="radio" id="4" name="image-slide" hidden/> 

        <div class="slide">
            <div class="item-slide">
                <img src="../Images/imagesiniciox1.png">
            </div>
            <div class="item-slide">
                <img src="../Images/imagesiniciox2.png" >
            </div>
            <div class="item-slide">
                <img src="../Images/imagesiniciox3.png">
            </div>
            <div class="item-slide">
                <img src="../Images/imagesiniciox4.png">
            </div>
        </div>
        <div class="pagination">
            <label class="pagination-item" for="1">
                <img src="../Images/imagesiniciox1.png">
            </label>
            <label class="pagination-item" for="2">
                <img src="../Images/imagesiniciox2.png">
            </label>
            <label class="pagination-item" for="3">
                <img src="../Images/imagesiniciox3.png">
            </label>
            <label class="pagination-item" for="4">
                <img src="../Images/imagesiniciox4.png">
            </label>
        </div>
        <h2> NUESTROS RECOMENDADOS</h2>
        <div class="cards">
            <div class="card1">
                <img src="../Images/prueba.webp">
                <img src="../Images/prueba.webp">
                <img src="../Images/prueba.webp">
                <img src="../Images/prueba.webp">
                <h4></h4>
            </div>
            <div class="card1">
                <img src="../Images/prueba.webp">
                <img src="../Images/prueba.webp">
                <img src="../Images/prueba.webp">
                <img src="../Images/prueba.webp">

                <h4></h4>

            </div>

        </div>   
    </section>    
    <?php  require '../partials/footer.php' ?>
</body>
</html>