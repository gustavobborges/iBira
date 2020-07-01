<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iDrink</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link type="text/css" rel="stylesheet" href="style.css">


</head>

<body>



    <!-- Imagem e texto -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <div class="row">
                <img src="assets/cerveja.svg" width="30" height="30" class="d-inline-block align-top logonav" alt="">
                <div class="titulo">&nbsp; iDrink</div>
            </div>
        </a>
    </nav>


    <!--Cards Superiores -->

    <div class="container-fluid">
        <div class="d-flex flex-row flex-nowrap cardsup">
            <div class="col-4">
                <div class="card card-block cardup">

                    <div class="card-body cardtitulo">
                        <img class="card-img-top imgtop" src="fotos/fcerveja" alt="Card image cap">
                        <div class="card-title">Cerveja</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-block cardup">
                    <div class="card-body cardtitulo">
                        <img class="card-img-top imgtop" src="fotos/fwhyski.jpg" alt="Card image cap">
                        <div class="card-title">Whisky</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-block cardup">
                    <div class="card-body cardtitulo">
                        <img class="card-img-top imgtop" src="fotos/fnarguile.jpg" alt="Card image cap">
                        <div class="card-title">Tabacaria</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-block cardup">
                    <div class="card-body cardtitulo">
                        <img class="card-img-top imgtop" src="fotos/fvinho.jpg" alt="Card image cap">
                        <div class="card-title">Vinho</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Carrosel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner carrossel">
            <div class="carousel-item active">
                <img class="d-block w-100" src="fotos/cerveja.jpg" alt="Primeiro Slide">
                <div class="carousel-caption legendas">
                    <h5>Cervejas</h5>
                    <p>As melhores e mais geladas Geladas</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="fotos/combo-vodka.jpg" alt="Segundo Slide">
                <div class="carousel-caption legendas">
                    <h5>Kits</h5>
                    <p>Os melhores combos para salvar o rolê</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="fotos/narguile.jpg" alt="Terceiro Slide">
                <div class="carousel-caption legendas">
                    <h5>Tabacaria</h5>
                    <p>Os melhores artigos de tabacaria para você
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

</body>

</html>