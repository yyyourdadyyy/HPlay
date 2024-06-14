<?php
session_start();

$isUserLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <script defer src="js/app.js"></script>
    <title>Методики</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                    <img src="img/logo.svg" alt="Logo">
                    <p class="logo-text">HAPPY <span>PLAYLAND</span></p>
                    <p class="main-text-mobilu">Методики</p>
                </div>
                <div class="link-nav-login">
                    <a class="link-nav active" href="metods.php">Методики</a>
                    <a class="link-nav" href="task.php">Задания</a>
                    <a class="link-nav" href="work.php">Работа с детьми</a>
                    <a class="link-nav" href="cartoons.php">Мультфильмы</a>
                    <div class="login">
                    <?php
                    if (!$isUserLoggedIn) {
                echo '<a href="login.html" class="login-button">Войти</a>';
            }else {
                echo '<a href="auth/dashboard.php" class="login-button">Профиль</a>';
            }
            ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <h1 class="task-title">Методики</h1>
            <div class="grid-container">
                <div class="item1">
                <img class="img-metods" src="img/icon-card-metods(2).svg.svg" alt="">
                <p class="title-metods">Сенсорная интеграция</p>
                <a class="link-metods" href="metods/horse.html">ПОДРОБНЕЕ</a>
                </div>
                <div class="item2">
                    <img class="img-metods" src="img/icon-card-metods(1).svg.svg" alt="">
                    <p class="title-metods">Иппотерапия</p>
                    <a class="link-metods color-orange" href="metods/horse.html">ПОДРОБНЕЕ</a>
                </div>
                <div class="item3">
                    <img class="img-metods item3-img" src="img/icon-card-metods(3).svg.svg" alt="">
                    <p class="title-metods">Карточки PECS</p>
                    <a class="link-metods color-green" href="metods/pecs.html">ПОДРОБНЕЕ</a>
                </div>
                <div class="item4">
                    <img class="img-metods" src="img/icon-card-metods(4).svg" alt="">
                    <p class="title-metods">Холдинг-терапия</p>
                    <a class="link-metods" href="metods/pecs.html">ПОДРОБНЕЕ</a>
                </div>
                <div class="item5">
                    <img class="img-metods" src="img/icon-card-metods(5).svg" alt="">
                    <p class="title-metods">АВА-терапия</p>
                    <a class="link-metods color-pink" href="metods/horse.html">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
    </main>
    <div class="menu-mobilu">
        <div class="inner-menu-mobilu">
            <div class="flex-mobilu">
                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="img-menu active-menu" d="M11 17.4L4.4 14.1V8.09998L0.200001 5.99998L11 0.599976L21.8 5.99998V13.8H20V6.89998L17.6 8.09998V14.1L11 17.4ZM11 9.37498L17.775 5.99998L11 2.62498L4.225 5.99998L11 9.37498ZM11 15.375L15.8 12.975V8.99998L11 11.4L6.2 8.99998V12.975L11 15.375Z" fill="#D9D9D9"/>
                    </svg>
                <a class="link-menu active-menu" href="metods.html">Методики</a>
            </div>
            <div class="flex-mobilu">
                <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="img-menu" d="M7.57157 17.325L13.8416 11.055L12.595 9.80842L7.5625 14.8409L4.90407 12.1825L3.66657 13.42L7.57157 17.325ZM1.83342 22C1.33842 22 0.909058 21.8182 0.545325 21.4547C0.181775 21.0909 0 20.6616 0 20.1666V1.83342C0 1.33842 0.181775 0.909059 0.545325 0.545325C0.909058 0.181775 1.33842 0 1.83342 0H11.385L17.6 6.215V20.1666C17.6 20.6616 17.4182 21.0909 17.0547 21.4547C16.6909 21.8182 16.2616 22 15.7666 22H1.83342ZM10.4684 7.07658V1.83342H1.83342V20.1666H15.7666V7.07658H10.4684Z" fill="#D9D9D9"/>
                    </svg>                    
                <a class="link-menu" href="task.html">Задания</a>
            </div>
            <div class="flex-mobilu">
                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="img-menu" d="M10.9955 15.4121C11.8751 15.4121 12.6585 15.1509 13.3457 14.6286C14.033 14.1064 14.5323 13.4329 14.8439 12.6082H7.14705C7.45859 13.4329 7.95797 14.1064 8.64518 14.6286C9.3324 15.1509 10.1158 15.4121 10.9955 15.4121ZM8.2466 11.0139C8.70474 11.0139 9.09416 10.8535 9.41487 10.5328C9.73557 10.2121 9.89592 9.82271 9.89592 9.36456C9.89592 8.90642 9.73557 8.51699 9.41487 8.19629C9.09416 7.87559 8.70474 7.71524 8.2466 7.71524C7.78845 7.71524 7.39903 7.87559 7.07833 8.19629C6.75763 8.51699 6.59728 8.90642 6.59728 9.36456C6.59728 9.82271 6.75763 10.2121 7.07833 10.5328C7.39903 10.8535 7.78845 11.0139 8.2466 11.0139ZM13.7443 11.0139C14.2025 11.0139 14.5919 10.8535 14.9126 10.5328C15.2333 10.2121 15.3937 9.82271 15.3937 9.36456C15.3937 8.90642 15.2333 8.51699 14.9126 8.19629C14.5919 7.87559 14.2025 7.71524 13.7443 7.71524C13.2862 7.71524 12.8968 7.87559 12.5761 8.19629C12.2554 8.51699 12.095 8.90642 12.095 9.36456C12.095 9.82271 12.2554 10.2121 12.5761 10.5328C12.8968 10.8535 13.2862 11.0139 13.7443 11.0139ZM6.21848 4.9147L9.39205 0.797171C9.59968 0.528515 9.84296 0.328489 10.1219 0.197093C10.401 0.0656974 10.6927 0 10.9971 0C11.3015 0 11.5926 0.0656974 11.8704 0.197093C12.1484 0.328489 12.3912 0.528515 12.5989 0.797171L15.7724 4.9147L20.589 6.53323C21.0288 6.67984 21.374 6.93557 21.6245 7.30044C21.8748 7.66512 22 8.06811 22 8.50939C22 8.71299 21.9708 8.91641 21.9123 9.11964C21.854 9.32269 21.7581 9.51731 21.6245 9.7035L18.5274 14.1201L18.6373 18.7932C18.6434 19.3856 18.4448 19.8866 18.0416 20.296C17.6385 20.7052 17.161 20.9098 16.6092 20.9098C16.5746 20.9098 16.3923 20.8823 16.0624 20.8273L10.9955 19.4163L5.93233 20.826C5.83813 20.8635 5.73899 20.8869 5.6349 20.8961C5.53099 20.9052 5.4357 20.9098 5.34902 20.9098C4.79448 20.9098 4.31874 20.704 3.92181 20.2924C3.52469 19.8808 3.33529 19.3749 3.35362 18.7748L3.46357 14.0879L0.37577 9.68535C0.242175 9.49806 0.146148 9.30225 0.0876889 9.09792C0.0292297 8.89359 0 8.68926 0 8.48493C0 8.05115 0.123241 7.65495 0.369722 7.29632C0.616021 6.93768 0.960087 6.68332 1.40192 6.53323L6.21848 4.9147ZM7.3304 6.49667L1.72271 8.3659L5.31438 13.5613L5.18629 19.1046L10.9955 17.5012L16.8046 19.1321L16.6765 13.5613L20.2682 8.42088L14.6605 6.49667L10.9955 1.72271L7.3304 6.49667Z" fill="#D9D9D9"/>
                    </svg>                    
                <a class="link-menu" href="work.html">Развитие</a>
            </div>
            <div class="flex-mobilu">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="img-menu" d="M1.83343 22C1.33843 22 0.909058 21.8182 0.545325 21.4547C0.181775 21.0909 0 20.6616 0 20.1666V8.43342C0 7.93843 0.181775 7.50906 0.545325 7.14533C0.909058 6.78178 1.33843 6.6 1.83343 6.6H20.1666C20.6616 6.6 21.0909 6.78178 21.4547 7.14533C21.8182 7.50906 22 7.93843 22 8.43342V20.1666C22 20.6616 21.8182 21.0909 21.4547 21.4547C21.0909 21.8182 20.6616 22 20.1666 22H1.83343ZM1.83343 20.1666H20.1666V8.43342H1.83343V20.1666ZM8.92843 18.4984L15.18 14.3L8.92843 10.12V18.4984ZM1.99843 5.13342V3.3H20.0016V5.13342H1.99843ZM5.5 1.83342V0H16.5V1.83342H5.5Z" fill="#D9D9D9"/>
                    </svg>                    
                <a class="link-menu" href="cartoons.html">Смотреть</a>
            </div>
            <div class="flex-mobilu">
                <svg  width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="img-menu" d="M11 10.5414C9.4875 10.5414 8.23086 10.0412 7.23009 9.04063C6.22955 8.03985 5.72928 6.78322 5.72928 5.27072C5.72928 3.75822 6.22955 2.50158 7.23009 1.50081C8.23086 0.500272 9.4875 0 11 0C12.5125 0 13.7691 0.500272 14.7699 1.50081C15.7704 2.50158 16.2707 3.75822 16.2707 5.27072C16.2707 6.78322 15.7704 8.03985 14.7699 9.04063C13.7691 10.0412 12.5125 10.5414 11 10.5414ZM0 21.5645V18.127C0 17.2866 0.211979 16.5513 0.635938 15.9211C1.0599 15.2909 1.61184 14.8116 2.29178 14.4832C3.78893 13.7882 5.2517 13.2668 6.68009 12.9192C8.10872 12.5715 9.54869 12.3977 11 12.3977C12.4513 12.3977 13.8874 12.5753 15.3082 12.9305C16.7291 13.2857 18.1875 13.8048 19.6835 14.4877C20.3833 14.8181 20.9443 15.2972 21.3665 15.9249C21.7888 16.5526 22 17.2866 22 18.127V21.5645H0ZM2.29178 19.2727H19.7082V18.127C19.7082 17.7986 19.6147 17.4892 19.4277 17.1988C19.2405 16.9085 19.0056 16.6908 18.723 16.5457C17.3327 15.8658 16.0225 15.3865 14.7926 15.1078C13.5629 14.8289 12.2987 14.6895 11 14.6895C9.70131 14.6895 8.42944 14.8289 7.18438 15.1078C5.93931 15.3865 4.62928 15.8658 3.25428 16.5457C2.97149 16.6908 2.74038 16.9085 2.56094 17.1988C2.3815 17.4892 2.29178 17.7986 2.29178 18.127V19.2727ZM11 8.25C11.8479 8.25 12.5564 7.96538 13.1254 7.39613C13.6947 6.82711 13.9793 6.11864 13.9793 5.27072C13.9793 4.4228 13.6947 3.71433 13.1254 3.14531C12.5564 2.57606 11.8479 2.29144 11 2.29144C10.1521 2.29144 9.44361 2.57606 8.87459 3.14531C8.30534 3.71433 8.02072 4.4228 8.02072 5.27072C8.02072 6.11864 8.30534 6.82711 8.87459 7.39613C9.44361 7.96538 10.1521 8.25 11 8.25Z" fill="#D9D9D9"/>
                    </svg>                    
                <a class="link-menu" href="use.html">Профиль</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        
    </footer>
</body>
</html>