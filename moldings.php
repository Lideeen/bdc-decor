<!DOCTYPE html>
<html>
    <head>
        <title>Молдинги</title>
        <script src="fancybox/jquery-1.3.2.min.js"></script>
        <script src="fancybox/jquery.fancybox-1.2.1.pack.js"></script>
        <script>
            var jQuery_1_3_2 = jQuery.noConflict();
        </script>
        <?php include "includes/links.php"; ?>
        <script>
            (function($){
                $(document).ready(function(){
                    $(".collection-arrow").click(function(){
                        $(this).parents(".collection").next().slideToggle();
                    });
                });
            })(jQuery);

            (function($){
                $(document).ready(function(){
                    $("a.gallery").fancybox();
                });
            })(jQuery_1_3_2);
        </script>
    </head>
    <body>
        <div id="header">
            <!-- Navigation Bloc -->
            <div id="subheader">
                <div>
                    <div>
                        <img src="img/logo.png" alt="" />
                        <span>BDC Decor</span>
                    </div>
                </div>
            </div>
            <?php include "includes/nav.php"; ?>
            <!-- Navigation Bloc END -->
        </div>
        <!-- Main -->
        <div id="main" class="container">
            <?php include "includes/under-menu.php"; ?>
            <div class="container" id="intro">
                <div>
                    <div class="intro-line"></div>
                    <div class="title">интерьерные молдинги</div>
                    <div class="intro-line"></div>
                </div>
                <p>Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст
                    законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание грязи
                    и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением вашего
                    интерьера.
                    На сегодняшний день рынок предлагает покупателю широкий выбор напольного плинтуса: напольный плинтус пластиковый, плинтус напольный деревянный,
                    плинтус из полиуретана, плинтус напольный из дюрополимера. Что позволяет покупателю выбрать напольный плинтус в Минске, который подойдет и по
                    функциональным качествам и по дизайну.</p>
            </div>
            <div class="container" id="goods">
                <div class="collection row">
                    <div class="col-sm-3 section">
                        <div>
                            <p class="topic">Белая <br />коллекция</p>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <img class="collection-arrow" src="img/left-arrow.png" alt="" />
                    </div>
                </div>
                <div class="collection-content">
                    <div class="row">
                        <div class="col-sm-6 left">
                            <table>
                                <tr>
                                    <td class="pictures"></td>
                                    <td class="white">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6 right">
                            <table>
                                <tr>
                                    <td class="black">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                    <td class="pictures"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 left">
                            <table>
                                <tr>
                                    <td class="pictures"></td>
                                    <td class="white">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6 right">
                            <table>
                                <tr>
                                    <td class="black">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                    <td class="pictures"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 left">
                            <table>
                                <tr>
                                    <td class="pictures"></td>
                                    <td class="white">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6 right">
                            <table>
                                <tr>
                                    <td class="black">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                    <td class="pictures"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 left">
                            <table>
                                <tr>
                                    <td class="pictures">
                                        <a class="gallery" rel="group" href="img/under-menu/predmety-interiera.jpg">
                                            <img class="main-image-item" src="img/under-menu/predmety-interiera.jpg" alt="" />
                                        </a>
                                        <div>
                                            <a class="gallery" rel="group" href="img/under-menu/int-lepnina.jpg">
                                                <img src="img/under-menu/int-lepnina.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group" href="img/under-menu/falsh-balki.jpg">
                                                <img src="img/under-menu/falsh-balki.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group" href="img/under-menu/predmety-interiera.jpg">
                                                <img src="img/under-menu/predmety-interiera.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a class="gallery" rel="group" href="img/under-menu/karnizy.jpg">
                                                <img src="img/under-menu/karnizy.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group" href="img/under-menu/plintus-napolny.jpg">
                                                <img src="img/under-menu/plintus-napolny.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group" href="img/under-menu/predmety-interiera.jpg">
                                                <img src="img/under-menu/predmety-interiera.jpg" alt="" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="white">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-6 right">
                            <table>
                                <tr>
                                    <td class="black">
                                        <span class="goods-name">D005</span>
                                        <div class="goods-line"></div><br />
                                        <span>размеры:</span>
                                        <p>высота <span>80 мм</span></p>
                                        <p>ширина <span>13 мм</span></p>
                                        <p>длина <span>2000 мм</span></p><br /><br />
                                        <div class="goods-line"></div>
                                        <span>цена за метр</span><br />
                                        <span class="goods-price">11,53 руб.</span><br />
                                        <span class="goods-inst-price">цена монтажа 50 руб.</span>
                                    </td>
                                    <td class="pictures">
                                        <a class="gallery" rel="group-1" href="img/under-menu/int-lepnina.jpg">
                                            <img class="main-image-item" src="img/under-menu/int-lepnina.jpg" alt="" />
                                        </a>
                                        <div>
                                            <a class="gallery" rel="group-1" href="img/under-menu/int-lepnina.jpg">
                                                <img src="img/under-menu/int-lepnina.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group-1" href="img/under-menu/falsh-balki.jpg">
                                                <img src="img/under-menu/falsh-balki.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group-1" href="img/under-menu/predmety-interiera.jpg">
                                                <img src="img/under-menu/predmety-interiera.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div>
                                            <a class="gallery" rel="group-1" href="img/under-menu/karnizy.jpg">
                                                <img src="img/under-menu/karnizy.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group-1" href="img/under-menu/plintus-napolny.jpg">
                                                <img src="img/under-menu/plintus-napolny.jpg" alt="" />
                                            </a>
                                            <a class="gallery" rel="group-1" href="img/under-menu/predmety-interiera.jpg">
                                                <img src="img/under-menu/predmety-interiera.jpg" alt="" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="container middle-slider">
                        <div class="under-nav">
                            <img src="img/under-menu/predmety-interiera.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/int-lepnina.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/falsh-balki.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/karnizy.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/plintus-napolny.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/plintus-potolochny.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div id="under-collections">
                    <p>Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст
                        законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание
                        грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением
                        вашего интерьера. Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не
                        только придаст</p>
                    <div class="container middle-slider">
                        <div class="under-nav">
                            <img src="img/under-menu/predmety-interiera.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/int-lepnina.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/falsh-balki.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/karnizy.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/plintus-napolny.jpg" alt="" />
                        </div>
                        <div class="under-nav">
                            <img src="img/under-menu/plintus-potolochny.jpg" alt="" />
                        </div>
                    </div>
                    <p>Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не только придаст
                        законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым предотвращая попадание
                        грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным декоративным решением
                        вашего интерьера. Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру. Плинтус напольный не
                        только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует щели, тем самым
                        предотвращая попадание грязи и пыли, спрячет кабель телефонной линии и электропроводки. Наряду с функциональностью это станет отличным
                        декоративным решением вашего интерьера.Напольный плинтус – это неотъемлемый элемент отделки для придания завершенности любому интерьеру.
                        Плинтус напольный не только придаст законченный вид вашему интерьеру, но и искусно скроет недостатки стыков стены и пола, замаскирует
                        щели, тем самым предотвращая попадание грязи и пыли, спрячет кабель.</p>
                </div>
            </div>
        </div>
        <!-- Main END -->
        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
        <!-- Footer END -->
        <script type="text/javascript" src="slick/slick.js"></script>
        <script>
            (function($) {
                $(document).ready(function ($) {
                    $('.multiple-items').slick({
                        infinite: true,
                        slidesToShow: 6,
                        slidesToScroll: 1
                    });

                    $('.middle-slider').slick({
                        infinite: true,
                        slidesToShow: 4,
                        slidesToScroll: 1
                    });
                });
            })(jQuery);
        </script>
    </body>
</html>