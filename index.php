<? include_once 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <title>Главная страница</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                                <img src="image/logo.jpg" alt="" width="70" height="70">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="trash.php">КОРЗИНА</a>
                                    <a class="nav-link" href="about.html">О НАС</a>
                                    <a class="nav-link" href="katalog.html">КАТАЛОГ</a>
                                    <?if (isset($_SESSION['logged_user']) && $_SESSION['logged_user']['access_level'] > 0):
                                    ?>
                                    <a class="nav-link" href="adminka.php">АДМИНКА</a>
                                <? endif; ?>
                                </div>
                            </div>
                            <? if(empty($_SESSION['logged_user'])):?>
                            <a class="navbar-brand" class="auth" href="auth/signUp.php">
                                <img src="image/auth.png" alt="" width="45" height="45">
                            </a>
                            <? else:?>
                            <a class="navbar-brand" class="auth" href="auth/logOut.php">
                                <img src="image/logOut.png" alt="" width="45" height="45">
                            </a>
                            <?endif;?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="name">
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-xs-4 col-md-12">
                    <div class="card bg-dark text-white">
                        <img src="image/background-name.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h1 class="card-title">Magnolia</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="car">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/ypak.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Наша упаковка не только красивая, но и экологичная</h5>
                                    <p>Мы заботимся о природе</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/natyr.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Для изготовления нашей продукции используются только натуральные продукты</h5>
                                    <p>Мы заботимся о наших клиентах</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/alerg.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Наша продукция полностью гипоаллергенная</h5>
                                    <p>Мы забатимся о вашей коже</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img style="width: 100%; height: 100%;" src="image/skin.jpg" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h2>Главные особенности нашей косметики</h2> <br>
                    <h5>Она на 100% натуральная. Она для тех, кто делает выбор в пользу косметических средств без
                        опасной химии: без парабенов, без лаурил сульфатов, без химических красителей, без
                        ароматизаторов и консервантов.</h5> <br>
                    <h5>В ее составах 5 видов редких минералов, 18 видов лекарственных растений, 33 вида целебных трав,
                        5 видов солей. И большая часть этих компонентов находится в ней в таком же виде, как и в
                        природе, поэтому она полностью совместима с клеточными структурами кожи.</h5>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="image/one.one.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="image/two.two.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="image/three.three.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="image/four.four.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="image/five.five.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/six.six.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/seven.seven.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/eight.eight.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/nine.nine.jpg" class="img-fluid" alt="image">
                </div>

            </div>
        </div>
    </section>


    <section class="skin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <h2>Как подобрать средства для ухода?</h2>
                    <p>Ежедневный домашний уход за кожей лица индивидуален. Не стоит пренебрегать советами косметолога
                        и самостоятельно подбирать средства по уходу.Средства для ежедневного ухода за кожей должен
                        подбирать врач-косметолог относительно типа и
                        состояния кожи, возраста, наличия дефектов кожи.</p>
                    <h2>Что нужно для ухода за кожей на каждый день?</h2>
                    <p>20+.
                        Ежедневный уход за кожей после 25 лет базируется на использовании увлажняющих и антиоксидантных
                        средств. </p>
                    <p>30+. Советы косметолога по уходу за кожей после 35 основаны на
                        применении антиоксидантных средств и кремов для защиты от ультрафиолета, антивозрастных формул с
                        гиалуроновой кислотой.</p>
                    <p>40+.
                        Советы косметологов по уходу за кожей 45 лет – пополнить косметичку средствами с ретинолом,
                        пептидами, гиалуроновой кислотой.</p>
                    <p>50+. Совет косметолога по уходу за кожей
                        после 55 лет – использование антивозрастных формул с мощным эффектом, нацеленных на восполнение
                        недостатка влаги и коллагеновых волокон.</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img style="width: 90%; height: 90%;" src="image/pohemu.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="image/one.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="image/two.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="image/three.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="image/four.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-6">
                    <img src="image/five.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/six.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/seven.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/eight.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-3">
                    <img src="image/nine.jpg" class="img-fluid" alt="image">
                </div>

            </div>
        </div>
    </section>

    <section class="formm">
        <div class="container">
            <div class="row">
                <div id="wrapper">

                    <div id="register_wrapper">
                        <h1>Подпишитесь на наши рассылки</h1>
                        <form class="registratie_form" action="create.php" method="post">
                            <input type="text" id="Name" name="Name" required placeholder="Name" maxlenght='100'>

                            <input type="email" id="Email" name="Email" required placeholder="Email" maxlenght='100'>
                            <br>
                            <div class="vvv">
                                <button type="submit" class="btn btn-success btn-block mb-4">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <section class="foooter">
        <div class="container-fluid p-0 m-0">
            <div class="row">
                <footer class="bg-light text-center text-lg-start">

                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2023 Copyright:
                        <a class="text-dark" href="index.html">Magnolia.com</a>
                    </div>

                </footer>
            </div>
        </div>

    </section>






    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>