<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php  bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="mainFrame">
        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <nav class="pull">
                            <ul class="top-nav">
                                <li><a href="#canDo">Наши IT специалисты могут сделать <span class="indicator"><i
                                                class="fa fa-angle-right"></i></span></a></li>
                                <li><a href="#ourTeam">Опис скилов <span class="indicator"><i
                                                class="fa fa-angle-right"></i></span></a>
                                </li>
                                <li><a href="#howItWorks">Как это работает <span class="indicator"><i
                                                class="fa fa-angle-right"></i></span></a>
                                </li>
                                <li><a href="#projects">Проекты <span class="indicator"><i
                                                class="fa fa-angle-right"></i></span></a>
                                </li>
                                <li><a href="#about">О нас <span class="indicator"><i
                                                class="fa fa-angle-right"></i></span></a>
                                </li>
                                <li><a href="#contacts">Контакти <span class="indicator"><i
                                                class="fa fa-angle-right"></i></span></a></li>
                                <li><a href="#reviews">Отзывы <span class="indicator"><i class="fa fa-angle-right"></i></span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    <div class="wrapper__topMenu">
        <div class="menu__wrapper">
            <div class="wrapper__logo">
                <img src="<?php bloginfo('template_url') ?>/img/JunFarmlogo.png" alt="Logo">
            </div>
            <div class="mainMenu__wrapper">
                <ul class="topMenu">
                    <li><a href="#canDo">Наши IT специалисты могут сделать:</a></li>
                    <li><a href="#ourTeam">Описание скилов</a></li>
                    <li><a href="#howItWorks">Как это работает</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                </ul>
            </div>
            <div class="col-md-12 text-right navicon">
                <div id="nav-toggle" class="nav_slide_button" href="#">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>