<!doctype html>
<html lang="ru" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comfort CRM</title>
      
        <!--
          custom css link
        -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

       
        <link rel="stylesheet" href="{{asset('fa-icons/css/all.css')}}">
      
        <!--
          Google fonts
        -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      
        <!--
          link to slick-style css
        -->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
      
      </head>
      <body>
        <header class="header">
          <div class="header__top fw-300-16-19">
            <div class="container-outer">
              <nav class="header__navbar center">
                <ul class="navbar-list">
                  <li class="navbar-list__item center"><a href="">О нас</a></li>
                  <li class="navbar-list__item center"><a href={{route('catalogs.index')}}>Каталог</a></li>
                  <li class="navbar-list__item center"><a href="">Прайс</a></li>
                  <li class="navbar-list__item center"><a href="">Наша команда</a></li>
                  <li class="navbar-list__item center"><a href="">Статьи</a></li>
                  <li class="navbar-list__item center"><a href="">Видео</a></li>
                  <li class="navbar-list__item center"><a href="">Отзывы</a></li>
                  <li class="navbar-list__item center"><a href="">Новости</a></li>
                  <li class="navbar-list__item center"><a href="">Контакты</a></li>
                </ul>
                <ul class="auth-navbar-list">
                  <li class="auth-navbar-list__item">
                    <div class="login-icon auth-navbar-list__login-icon">
                      <ion-icon name="log-in-outline"></ion-icon>
                    </div>
                    <div class="auth-navbar-list__login-label center">
                      <p><a href="">Вход</a></p>
                    </div>
                  </li>
                  <li class="auth-navbar-list__item center">
                    <p><a href="">Регистрация</a></p>
                  </li>
                </ul>
              </nav>
              <!-- Mobile burger -->
              <div class="mobile-menu">
                <span class="menu-line line-one"></span>
                <span class="menu-line line-two"></span>
                <span class="menu-line line-three"></span>
              </div>
            </div>
          </div>
          <div class="header__bottom">
              <div class="container-lower">
                <div class="header-bottom-inner">
                  <div class="logo">
                    <a href=""><img class="logo" src="{{asset('images/logo.svg')}}" alt="Логотип" /></a>
                  </div>
                  <div class="search-wrapper header-bottom__search-wrapper fw-400-16-19">
                    <input class="search-input" type="text" name="search" id="search" placeholder="Поиск" />
                    <div class="search-icon-wrapper center">
                      <img width="15px" height="15px" src="{{asset('images/search.svg')}}" alt="./assets/images/search.svg" />
                    </div>
                  </div>
                  <div class="contact-info-wrapper header-bottom__contact-info-wrapper">
                    <div class="contact-info__left">
                      <div class="header-phone-icon-wrapper center">
                        <img src="{{asset('images/phone.svg')}}" alt="./assets/images/phone.svg" />
                      </div>
                    </div>
                    <div class="contact-info__right">
                      <div class="header-tel-wrapper">
                        <div class="header-tel black fw-400-16-19">
                          <p>+7(777) 777 77 77</p>
                        </div>
                        <div class="header-tel-chevron-icon center">
                          <img src="{{asset('images/chevron-down.svg')}}" alt="./assets/images/chevron-down.svg" />
                        </div>
                      </div>
                      <div class="order-callback purple fw-700-14-17">
                        <a href="">Заказать обратный звонок</a>
                      </div>
                    </div>
                  </div>
                  <div class="header-media-icons-wrapper">
                    <div class="header-whatsapp center">
                      <a href=""><img class="whatsapp" src="{{asset('images/whatsapp.svg')}}" alt="./assets/images/whatsapp.svg" /></a>
                    </div>
                    <div class="header-insta center">
                      <a href=""><img class="insta" src="{{asset('images/insta.svg')}}" alt="./assets/images/insta.svg" /></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- <div class="mobile-sidebar header__mobile-sidebar fw-300-16-19">
            <div class="mobile-sidebar__link">
              <a href="">О нас</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Все услуги</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Прайс</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Наша команда</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Статьи</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Видео</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Отзывы</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Новости</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
            <div class="mobile-sidebar__link">
              <a href="">Контакты</a>
              <div class="mobile-sidebar__chevron">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </div>
            </div>
          </div> -->
        </header>
 


    {{$slot}}






    <footer>
        <div class="container-outer" style="height: 100%">
          <div class="footer__outer">
            <div class="footer__inner">
              <div class="footer__logo-wrapper">
                <a href=""><img src="{{asset('images/logo_vertical.svg')}}" alt="./assets/images/logo_vertical.svg" /></a>
              </div>
              <ul class="footer__navbar">
                <li class="footer-navbar__item">
                  <div class="footer-navbar-item__title fw-600-18-22">
                    <p>Услуги</p>
                  </div>
                  <ul class="footer-navbar-item__menu fw-400-18-22">
                    <li>
                      <a href=""><p>Команда</p></a>
                    </li>
                    <li>
                      <a href=""><p>Партнеры</p></a>
                    </li>
                    <li>
                      <a href=""><p>Прайс</p></a>
                    </li>
                  </ul>
                </li>
                <li class="footer-navbar__item">
                  <div class="footer-navbar-item__title fw-600-18-22">
                    <p>Товары</p>
                  </div>
                  <ul class="footer-navbar-item__menu fw-400-18-22">
                    <li>
                      <a href=""><p>Каталог продукции</p></a>
                    </li>
                    <li>
                      <a href=""><p>Новинки</p></a>
                    </li>
                    <li>
                      <a href=""><p>Оплата и доставка</p></a>
                    </li>
                  </ul>
                </li>
                <li class="footer-navbar__item">
                  <div class="footer-navbar-item__title fw-600-18-22">
                    <p>Контакты</p>
                  </div>
                  <div class="footer-contacts-wrapper">
                    <div class="footer-contacts-tel-wrapper">
                      <div class="icon-wrapper center">
                        <img src="{{asset('images/phone.svg')}}" alt="">
                      </div>
                      <div class="footer-contacts-details-wrapper">
                        <div class="footer-contacts-num-wrapper">
                          <div class="footer-num-wrapper">
                            <p>+7 (777) 777 77 77</p>
                          </div>
                          <div class="footer-num-chevron-wrapper center">
                            <img src="{{asset('images/chevron-down.svg')}}" alt="./assets/images/chevron-down.svg" />
                          </div>
                        </div>
                        <div class="order-callback purple">
                          <a href=""><p>Заказать обратный звонок</p></a>
                        </div>
                      </div>
                    </div>
                    <div class="footer-contacts-email-wrapper">
                      <div class="icon-wrapper center">
                        <img src="{{asset('images/email.svg')}}" alt="./assets/images/email.svg" />
                      </div>
                      <div class="email-wrapper center fw-400-16-19">
                        <p>почта@почта.com</p>
                      </div>
                      
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- bottom copyright info -->
            <div class="footer-copy-wrapper center fw-400-14-17">
              <p>&copy; 2022</p>
            </div>
            <div class="go-top-wrapper">
              <div class="go-top-arrow-wrapper">
                <img src="{{asset('images/arrow-top.svg')}}" alt="./assets/images/arrow-top.svg" />
              </div>
            </div>
          </div>
        </div>
    
      </footer>
    


  <!--
    link to jQuery
  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!--
    link to slick-carousel
  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--
    custom js link
  -->
  <script src={{ asset('js/script.js') }}></script>
  <script src={{ asset('js/slick.js') }}></script>

  <!--
    ion-icon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>





</body>
</html>
