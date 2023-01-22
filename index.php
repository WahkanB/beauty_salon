<?php
require_once "include/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Be beauty</title>
</head>

<body data-bs-spy="scroll" data-bs-target="navbar">
    <!--navbar-->
    <header id="home" >
        <nav class="navbar navbar-expand-lg fixed-top " id="">
            <div class="container">
                <a class="navbar-brand" href="#">ANI ADI style</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">За Нас</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Услуги</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#team">Екип</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Отзиви</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#galery">Галерия</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Контакти</a>
                        </li>

                    </ul>
                    <a href="#appointment" class="btn btn-brand ms-lg-4">Направи запитване</a>

                </div>
            </div>
        </nav>

        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="display-4">Нека вашата коса започне да говори</h1>
                        <p>Нашата мисия е вашата красота!</p>
                        <a href="#services" class="btn btn-brand">виж повече</a>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!--//navbar-->


    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="images/pexels-thgusstavo-santana-2040189.jpg" alt="">

                </div>
                <div class="col-lg-4">
                    <h2>За нас</h2>
                    <h1>За Боби</h1>
                    <p>професионално обслужване, опит и резултати над очакванията!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->


    <!--services-->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 intro ">
                    <h3>За нас</h3>
                    <h1>Какво предлагаме</h1>
                    <h4>Подстригването е резултат от техника и визия.
                        Всяка прическа ще започне с пълна консултация за персонализирано подстригване, което да
                        отговаря на вашата текстура на косата,
                        структура на лицето и нужди за оформяне
                    </h4>

                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="services">
                        <img src="images/pexels-thgusstavo-santana-2809652.jpg" alt="">
                        <h3>Подстригване</h3>
                        <p>Подстригването е резултат от техника и визия.
                            Всяка прическа ще започне с пълна консултация за персонализирано подстригване, което да
                            отговаря на вашата текстура на косата,
                            структура на лицето и нужди за оформяне
                        </p>
                        <a href="#" class="link-more">Повече <i class="fa-solid fa-arrow-right icon"></i></a>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services">
                        <img src="images/paint.jpg" alt="">
                        <h3>Боядисване</h3>
                        <p>Нищо не може да повдигне външния ви вид и духа ви като нов цвят на косата!
                            Дръзкият нов цвят на косата ви позволява да погледнете на себе си по съвсем нов начин.
                            Нашата мисия и страст е да създадем тон или нюанс, който подхожда не само на косата ви, но и
                            на
                            тена на кожата,
                            формата на лицето и начина ви на живот.
                        </p>
                        <a href="#" class="link-more">Повече <i class="fa-solid fa-arrow-right icon"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="services">
                        <img src="images/style.jpg" alt="">
                        <h3>Прическа</h3>
                        <p>Следващия път, когато се подготвяте за вечер в града,
                            празнично парти или някакъв специален повод, помислете за салон Nesin .
                        </p>
                        <a href="#" class="link-more">Повече <i class="fa-solid fa-arrow-right icon"></i></a>
                    </div>

                </div>
            </div>
        </div>


        </div>
    </section>
    <!--//services-->

    <section id="team">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 intro text-center">
                    <h3>Екип</h3>
                    <h1>Запознайте се с екипа ни</h1>
                </div>




                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="images/member3.jpg" alt="">
                        <div class="social-links">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <h4 class="mt-4">Боби</h4>
                        <small>Барбер</small>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="images/member1.jpg" alt="">
                        <div class="social-links">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <h4 class="mt-4">Ани</h4>
                        <small>фризьор</small>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="team-member">
                        <img src="images/membwr4.jpg" alt="">
                        <div class="social-links">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <h4 class="mt-4">Ади</h4>
                        <small>Гримьор</small>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section id="reviews">
        <div class="container">
            <div class="row ">
                <div class="col-12 intro text-center">
                    <h3>Отзиви</h3>
                    <h1>Клиентите за нас</h1>
                </div>



                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="reviews">
                            <div class="d-flex">
                                <img src="images/review1.jpg" alt="">
                                <div class="ms-3 ">
                                    <h4>Ивана</h4>
                                    <small>@ivanaVania</small>
                                </div>
                                <div class="icon"><i class="fa-brands fa-facebook"></i></div>
                            </div>
                            <p class="mt-4">Страхотно преживяване !</p>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="reviews">
                            <div class="d-flex">
                                <img src="images/review2.jpg" alt="">
                                <div class="ms-3 ">
                                    <h4>Митко</h4>
                                    <small>@mitacheto</small>
                                </div>
                                <div class="icon"><i class="fa-brands fa-facebook"></i></div>
                            </div>
                            <p class="mt-4">Всичко беше на ниво </p>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="reviews">
                            <div class="d-flex">
                                <img src="images/review3.jpg" alt="">
                                <div class="ms-3 ">
                                    <h4>Даная</h4>
                                    <small>@danidaia</small>
                                </div>
                                <div class="icon"><i class="fa-brands fa-facebook"></i></div>
                            </div>
                            <p class="mt-4">Най-добрите.Уникални сте,благодаря ви!</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="reviews">
                            <div class="d-flex">
                                <img src="images/review3.jpg" alt="">
                                <div class="ms-3 ">
                                    <h4>Стефани</h4>
                                    <small>@stefana</small>
                                </div>
                                <div class="icon"><i class="fa-brands fa-facebook"></i></div>
                            </div>
                            <p class="mt-4">Най-добрите.Уникални сте,благодаря ви!</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="reviews">
                            <div class="d-flex">
                                <img src="images/review3.jpg" alt="">
                                <div class="ms-3 ">
                                    <h4>Стаси</h4>
                                    <small>@stasita</small>
                                </div>
                                <div class="icon"><i class="fa-brands fa-facebook"></i></div>
                            </div>
                            <p class="mt-4">Най-добрите.Уникални сте,благодаря ви!</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="reviews">
                            <div class="d-flex">
                                <img src="images/review3.jpg" alt="">
                                <div class="ms-3 ">
                                    <h4>Angel</h4>
                                    <small>@Angelboy</small>
                                </div>
                                <div class="icon"><i class="fa-brands fa-facebook"></i></div>
                            </div>
                            <p class="mt-4">Най-добрите.Уникални сте,благодаря ви!</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        </div>

    </section>

    <section id="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="row">
                        <?php
                        if (isset($message)) {
                            foreach ($message as $message) {
                                echo '<p class="message">' . $message . '</p>';
                            }
                        }
                        ?>
                        <div class="col-12 mb-4">
                            <h1>Направи запитване</h1>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="name" class="form-control" placeholder="Име" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="email" name="email" class="form-control" placeholder="Имейл" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" name="number" class="form-control" placeholder="Телефон" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="datetime-local" name="date" class="form-control" placeholder="DD/MM/YYYY" required>
                        </div>
                        <div class="form-group col-12">
                            <textarea  name="comment" class="form-control" id="" cols="30"></textarea required>
                        </div>
                        <div class="form-group col-12">
                            <button  type="submit" name="submit"  class="btn-btn-brand mt-2 mb-2">Изпрати</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="footer-top">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4">
                        <h3>Ani Adi Style</h3>
                        <h4>Да се свържем!</h4>
                        <div class="social-links">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <h4 class="mb-3">Работно време</h4>
                        <div>
                            <h5>Понеделник-Събота</h5>
                            <p>08:30am - 19:00pm </p>
                        </div>
                        <div>
                            <h5>Неделя</h5>
                            <p>затворено </p>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-1">
                        <h4 class="mb-3">Контакти</h4>
                        <div>
                            <p> <i class="fa-solid fa-map-location-dot"></i></p>
                            <span>гр.Кърджали,бул.България,6600</span>
                        </div>
                        <div>
                            <p> <i class="fa-solid fa-envelope"></i></p>
                            <span>ani_adi@salon.com</span>
                        </div>

                        <div>
                            <p> <i class="fa-solid fa-phone"></i></p>
                            <span>0888888888</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="container ">
                <div class="row ">
                    <dic class="col-auto ">
                        <p> This template is made with <a class="site-link " href="">♥by
                                Boby</a> </p>
                    </dic>
                </div>
            </div>
        </div>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>