<?php
?>
<?php
?>

<!DOCTYPE html>
<html lang="nl" class="focus-outline-visible">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Damiën</title>
    <!--    favicon ingeladen-->
    <link rel="icon" type="image/x-icon" href="/asset/favicon.png">
    <meta name="author" content="Damiën van den IJssel">
    <!--    font ingeladen-->
    <link rel="stylesheet" href="/views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <!--    js hier ingeladen want als ik hem in de footer inlaadt geeft hij al zonder input een result aan. -->
    <script src="/views/javascript/main.js"></script>
</head>
<body>
<!--          Header             -->
<header>
    <!--    Titel    -->
    <section>
        <a href="/" id="headerTitle"><p>Damiën van den IJssel</p></a>
    </section>
    <!--    Links    -->
    <section>
        <nav>
            <!--            Sidebar voor kleinere schermformaten-->
            <ul class="sidebar">
                <li onclick=hideSidebar()>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             fill="black">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                        </svg>
                    </a>
                </li>
                <li><a href="/">Home</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li><a href="/login">My Profile</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li onclick="darkMode()">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             fill="grey">
                            <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm40-83q119-15 199.5-104.5T800-480q0-123-80.5-212.5T520-797v634Z"/>
                        </svg>
                    </a>
                </li>

            </ul>
            <!--            Nav bar met JS functie voor darkmode-->
            <ul>
                <li class="hideOnMobile"><a href="/">Home</a></li>
                <li class="hideOnMobile"><a href="/portfolio">Portfolio</a></li>
                <li class="hideOnMobile"><a href="/login">My Profile</a></li>
                <li class="hideOnMobile"><a href="/about">About</a></li>
                <li class="hideOnMobile"><a href="/blog">Blog</a></li>
                <li class="hideOnMobile"><a href="/contact">Contact</a></li>
                <li class="hideOnMobile" onclick="darkMode()">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             fill="grey">
                            <path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm40-83q119-15 199.5-104.5T800-480q0-123-80.5-212.5T520-797v634Z"/>
                        </svg>
                    </a>
                </li>
                <li onclick=showSidebar() class="hideOnFullscreen">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                             fill="grey">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</header>

