<!--PHP-->
<?php
$userName=$_POST['name'];
$email=$_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST ['message'];

$to = "musea@musea.pl";
$body="";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to,$messageSubject, $body);

?>

<!--HTML-->
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSEA Kopie i reprinty muzealne</title>
    <meta name="description" content="Wysokiej jakości kopie i reprinty dla muzeów i instytucji kultury">
    <meta name="keywords" content="kopie, reprinty, kopie papierowe, repliki, repliki muzealne, musea, muzeum">
    <meta name="author" content="Lukasz Smutek">
    <meta name="copyright" content="Lukasz Smutek">
    <meta http-equiv="expires" content="43200">
    <!--favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="./components/icons/favicons/favicon.ico">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@0;1&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <!--stylesheet-->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div id="start" class="wrapper">
        <!--header-->
        <header class="header"><a href="#start">
            <div class="header__logo">
            </div></a>
            <nav class="header__navigation">
                <div class="header__hamburger-container">
                    <div class="header__hamburger-icon">
                        <span class="header__hamburger-line">
                        </span>
                    </div>
                </div>
                <div class="header__menu-container">
                    <ul class="header__menu">
                        <li class="header__menu-item-wrapper"><a href="#about"><div class="header__menu-item">O nas</div></a>
                            
                        </li>
                        <li class="header__menu-item-wrapper">
                            <a href="#products"><div class="header__menu-item">Oferta</div></a>
                        </li>
                        <li class="header__menu-item-wrapper">
                            <a href="#contact"><div class="header__menu-item">Kontakt</div></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!--main-->
        <main class="main">
            <!--hero-->
            <div class="main__hero">
                <h1 class="main__hero-header">
                    Kopie &&nbsp;reprinty muzealne
                </h1>
            </div>
            <!--about-->
            <div class="main__articles">
                <article id="about" class="main__article main__article--about">
                    <div class="main__article-title-container">
                        <h2 class="main__article-title">MUSEA</h2>
                    </div>
                    <div class="main__article-content">
                        <div class="main__section">
                            <h4 class="main__section-title">Co robimy?</h4>
                            <p class="main__section-paragraph">
                                Specjalizujemy się w&nbsp;produkcji wysokiej jakości kopii, reprintów oraz tapet
                                edukacyjnych na
                                potrzeby muzeów, ekspozycji historycznych, wystaw oraz scenografii. Od 2012 r.
                                wykonaliśmy
                                ponad
                                dwa tysiące kopii i&nbsp;reprintów dla placówek muzealnych w&nbsp;całym kraju.
                                Współpracujemy z&nbsp;muzeami,
                                architektami, projektantami i&nbsp;wykonawcami wystaw muzealnych.
                            </p>
                        </div>
                    </div>
                </article>
                <!--service-->
                <div id="products" class="main__products">
                    <div class="main__article">
                        <div class="main__article-title-container">
                            <h2 class="main__article-title">Kopie i&nbsp;reprinty</h2>
                        </div>
                        <div class="main__article-content">
                            <section class="main__section">
                                <h4 class="main__section-title">Dlaczego kopie i&nbsp;reprinty?</h4>
                                <p class="main__section-paragraph">
                                    Eksponaty papierowe znajdujące się w&nbsp;kolekcjach muzealnych są szczególnie
                                    wrażliwe
                                    na wilgoć i&nbsp;światło, przez co czas ich ekspozycji jest ograniczony. Kopie
                                    i&nbsp;reprinty
                                    pozwalają tymczasowo lub trwale zastąpić obiekty oryginalne i&nbsp;uniknąć ryzyka
                                    częstych
                                    zmian scenariusza wystawy, co w&nbsp;przypadku rozbudowanych ekspozycji bywa
                                    zazwyczaj
                                    skomplikowane i&nbsp;kosztowne. Zastosowanie kopii i&nbsp;reprintów jest dobrym
                                    rozwiązaniem także
                                    w&nbsp;przypadku, kiedy muzeum nie dysponuje obiektem oryginalnym, kluczowym do
                                    budowania
                                    narracji wystawy.
                                </p>
                            </section>
                            <section class="main__section">
                                <h4 class="main__section-title">Kopia czy&nbsp;reprint?</h4>
                                <p class="main__section-paragraph">
                                    Produkowane przez nas reprinty to wysokiej jakości wydruki cyfrowe oddające rozmiar
                                    i&nbsp;kolorystykę oryginału. Pełniejsze wyobrażenie o&nbsp;obiekcie oryginalnym
                                    dają
                                    kopie, które
                                    poza kolorystyką i&nbsp;rozmiarem odtwarzają pozostałe cechy&nbsp;- rodzaj papieru,
                                    strukturę
                                    zastosowane technologie uszlachetniania druku, a&nbsp;nawet stopień zniszczenia
                                    i&nbsp;zużycia
                                    oryginału.
                                </p>
                                <p class="main__section-paragraph">edukatorów muzealnych kopie na materiałach
                                    syntetycznych</p>
                            </section>
                            <section class="main__section">
                                <h4 class="main__section-title">Jak powstają nasze kopie i&nbsp;reprinty</h4>
                                <p class="main__section-paragraph">
                                    Kopie i&nbsp;reprinty wykonujemy korzystając z&nbsp;dokumentacji własnej lub
                                    powierzonej, przy
                                    użyciu najwyższej jakości materiałów spełniających wytyczne konserwatorskie oraz
                                    normy
                                    DIN, ISO i&nbsp;ANSI dla archiwaliów.
                                    Dzięki wykorzystaniu szerokiej gamy papierów, pergaminów, bibuł i&nbsp;innych
                                    podłoży
                                    jakości
                                    muzealnej do każdego obiektu podchodzimy indywidualnie, dbając o&nbsp;detale
                                    i&nbsp;naturalny
                                    wygląd gotowej kopii.
                                    Łączymy nowoczesne i&nbsp;tradycyjne technologie, co pozwala na odwzorowanie zarówno
                                    eksponatów jednoelementowych (rękopisy, dokumenty, zdjęcia) jak i&nbsp;złożonych
                                    (legitymacje, paszporty, książki etc.) Odtwarzamy
                                    złocenia, tłoczenia, pieczęcie, perforacje oraz inne metody uszlachetniające.
                                    Kluczowe
                                    etapy prac, takie jak dobór podłoży czy wydruki próbne, przeprowadzamy w&nbsp;muzeum
                                    w&nbsp;porozumieniu z&nbsp;konserwatorami, kuratorami i&nbsp;kustoszami, dzięki
                                    czemu
                                    efekt końcowy jest
                                    jak najbardziej zbliżony do oryginału.
                                </p>
                            </section>
                        </div>
                    </div>
                    <div class="main__article">
                        <div class="main__article-title-container">
                            <h2 class="main__article-title">Tapety edukacyjne</h2>
                        </div>
                        <div class="main__article-content">
                            <section class="main__section">
                                <h4 class="main__section-title">Czym są tapety edukacyjne?</h4>
                                <p class="main__section-paragraph">
                                    Tapety edukacyjne to rozwiązanie umożliwiające pokrywanie dużych powierzchni
                                    wysokiej
                                    jakości drukiem i&nbsp;maksymalne wykorzystanie przestrzeni ekspozycyjnej. Stanowią
                                    integralną część scenografii wystawy jako tło dla multimediów i&nbsp;eksponatów.
                                    Łatwy
                                    montaż
                                    i&nbsp;demontaż sprawiają, że tapety edukacyjne sprawdzą się szczególnie przy
                                    projektowaniu
                                    wystaw czasowych. Możliwość pisania i&nbsp;rysowania po zalaminowanej, zmywalnej
                                    powierzchni
                                    tapet ścieralnymi flamastrami, czyni z&nbsp;nich idealny materiał wykończeniowy
                                    w&nbsp;strefach
                                    edukacji i&nbsp;zabawy dla najmłodszych. Oferujemy kompleksową usługę projektowania,
                                    wydruku
                                    i&nbsp;montażu tapet edukacyjnych w&nbsp;muzeach, szkołach szpitalach itp.
                                </p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!--gallery-->
            <div class="main__gallery-container">
                <div class="main__gallery-title"></div>
                <div class="main__gallery">
                    <div class="main__gallery-carousel-container">
                        <ul class="main__gallery-carousel">
                            <li class="main__gallery-carousel-slide current-slide"><img
                                    src="./components/images/slide_00.jpg" alt="" class="main__gallery-image"></li>
                            <li class="main__gallery-carousel-slide"><img src="./components/images/slide_01.jpg" alt=""
                                    class="main__gallery-image"></li>
                            <li class="main__gallery-carousel-slide"><img src="./components/images/slide_02.jpg" alt=""
                                    class="main__gallery-image"></li>
                        </ul>
                        <div class="main__gallery-btn-container main__gallery-btn-container--prev is-hidden">
                            <button class="main__gallery-btn main__gallery-btn--prev"></button>
                        </div>
                        <div class="main__gallery-btn-container main__gallery-btn-container--next">
                            <button class="main__gallery-btn main__gallery-btn--next"></button>
                        </div>
                    </div>

                    <div class="main__gallery-nav">
                        <button class="main__gallery-nav-indicator active"></button>
                        <button class="main__gallery-nav-indicator"></button>
                        <button class="main__gallery-nav-indicator"></button>
                    </div>
                </div>
            </div>

            <!--contact-->
            <article id="contact" class="main__contact-container">
                <div class="main__contact">
                    <h2 class="main__contact-title">Bądźmy w&nbsp;kontakcie</h2>
                    <div class="main__contact-content">
                        <div class="main__contact-icon-container">
                            <img src="./components/icons/contact/phone.svg" alt="phone" class="main__contact-icon">
                            <a href="tel:795-057-442" class="main__contact-anchor">
                                <span class="main__contact-span">795-057-442</span>
                            </a>
                        </div>
                        <div class="main__contact-icon-container">
                            <img src="./components/icons/contact/mail.svg" alt="mail" class="main__contact-icon">
                            <a href=”mailto:contact@musea.pl” target=”_blank” rel="noopener noreferrer"
                                class="main__contact-anchor">
                                <span class="main__contact-span">kontakt@musea.pl</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main__contact-form-container">
                    <form action="index.php" method="POST" class="main__form">
                        <h2 class="main__form-header">Napisz do nas</h2>
                        <div class="main__form-input-container">
                            <input type="text" name="name" class="main__form-input main__form-input--name">
                            <label for="name" class="main__form-label">Imię</label>
                            <span class="main__form-span">Imię</span>
                            <span class="main__form-span--alert">Wpisz swoje imię</span>
                        </div>
                        <div class="main__form-input-container">
                            <input type="email" name="email" class="main__form-input main__form-input--email" required>
                            <label for="email" class="main__form-label"> Email</label>
                            <span class="main__form-span">Email</span>
                            <span class="main__form-span--alert">Wpisz poprawny adres email</span>
                        </div>
                        <div class="main__form-input-container">
                            <input type="text" name="subject" class="main__form-input">
                            <label for="subject" class="main__form-label">Temat</label>
                            <span class="main__form-span">Temat</span>
                        </div>
                        <div class="main__form-input-container">
                            <textarea name="message" class="main__form-input main__form-input--textarea"></textarea>
                            <label for="message" class="main__form-label">Wiadomość</label>
                            <span class="main__form-span">Wiadomość</span>
                            <span class="main__form-span--alert">Wpisz treść wiadomości</span>
                        </div>
                        <input type="submit" value="Wyślij" class="main__form-submit">
                    </form>
                </div>
            </article>
            <article class="main__clients-container">
                <div class="main__clients">
                    <h5 class="main__article-title">Nasi klienci</h5>
                    <div class="clients__icons-container">
                        <ul class="clients__icons">
                            <li class="clients__icon"><img src="./components/images/nbp.svg"
                                    alt="Centrum Pieniądza Polskiego NBP" title=""></li>
                            <li class="clients__icon"><img src="./components/images/ms.svg" alt="Muzeum Śląskie"
                                    title="">
                            </li>
                            <li class="clients__icon"><img src="./components/images/polin.svg" alt="POLIN" title="">
                            </li>
                            <li class="clients__icon"><img src="./components/images/mjp.svg"
                                    alt="Muzeum Józefa Piłsudskiego" title=""></li>
                            <li class="clients__icon"><img src="./components/images/zih.svg"
                                    alt="Żydowski Instytut Historyczny" title=""></li>
                        </ul>
                    </div>
                </div>
            </article>
            <!--clients-->

            <!--media-->
            <div class="social-media__icons-container">
                <div class="social-media__icons">
                    <button class="social-media__icon social-media__icon--top">In</button>
                    <button class="social-media__icon social-media__icon--middle">Ig</button>
                    <button class="social-media__icon social-media__icon--bottom">Fb</button></div>

            </div>
        </main>
        <!--footer-->
        <footer class="footer">
            <div class="footer__copyright-container">
                <h5 class="footer__copyright-header">&copy; MUSEA 2020</h5>
            </div>
            <div class="footer__company-info-container">

                <address class="footer__company-info">
                    <ul class="company-info__address">
                        <li>ul. Żeromskiego 49b</li>
                        <li>23-213 Zakrzówek</li>
                    </ul>
                    <ul class="company-info__contact">
                        <li>tel: <a href="tel:+48 795-057-442">+48 795-057-442</a></li>
                        <li>e-mail: <a href=”mailto:contact@musea.pl” target=”_blank” rel=noopener
                                noreferrer””>contact@musea.pl</a></li>
                    </ul>
                    <ul class="company-info__payments">
                        <li>nip: PL 715-173-08-23</li>
                        <li>konto bankowe: ING Bank Śląski, SWIFT: INGBPLPW66105014611000009134079301</li>
                    </ul>
                    <ul class="company-info__media">
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>LinkedIn</li>
                    </ul>
                </address>
            </div>
        </footer>
    </div>
    <!--scripts-------------------------------------------->
    <script src="./script.js"></script>
</body>

</html>