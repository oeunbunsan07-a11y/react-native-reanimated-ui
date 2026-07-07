<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Bunsan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Joomla! - Open Source Content Management">
    <title>Home​​ Page</title>
    <link href="/media/system/images/joomla-favicon.svg" rel="icon" type="image/svg+xml">
    <link href="/media/system/images/favicon.ico" rel="alternate icon" type="image/vnd.microsoft.icon">
    <link href="/media/system/images/joomla-favicon-pinned.svg" rel="mask-icon" color="#000">

    <link href="/media/system/css/joomla-fontawesome.min.css?7d03e7" rel="lazy-stylesheet"><noscript>
        <link href="/media/system/css/joomla-fontawesome.min.css?7d03e7" rel="stylesheet">
    </noscript>
    <link href="/media/templates/site/cassiopeia/css/template.min.css?7d03e7" rel="stylesheet">
    <link href="/media/templates/site/cassiopeia/css/global/colors_standard.min.css?7d03e7" rel="stylesheet">
    <style>
        :root {
            --hue: 214;
            --template-bg-light: #f0f4fb;
            --template-text-dark: #495057;
            --template-text-light: #ffffff;
            --template-link-color: var(--link-color);
            --template-special-color: #001B4C;

        }
    </style>

    <script src="/media/vendor/metismenujs/js/metismenujs.min.js?1.4.0" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js?7d03e7" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js?7d03e7" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js?7d03e7" defer></script>
    <script src="/templates/cassiopeia/js/chart-component.js?7d03e7"></script>
    <script src="/templates/cassiopeia/js/chart-config.js?7d03e7"></script>
    <script src="/templates/cassiopeia/js/stats.js?7d03e7"></script>
    <script type="application/json"
        class="joomla-script-options new">{"joomla.jtext":{"JSHOWPASSWORD":"Show Password","JHIDEPASSWORD":"Hide Password"},"system.paths":{"root":"","rootFull":"http:\/\/127.0.0.1:9090\/","base":"","baseFull":"http:\/\/127.0.0.1:9090\/"},"csrf.token":"88588dd80c096841de37b19f6245b352","system.keepalive":{"interval":840000,"uri":"\/index.php\/component\/ajax?format=json"}}</script>
    <script src="/media/system/js/core.min.js?a3d8f8"></script>
    <script src="/media/templates/site/cassiopeia/js/template.min.js?7d03e7" type="module"></script>
    <script src="/media/system/js/keepalive.min.js?08e025" type="module"></script>
    <script src="/media/system/js/fields/passwordview.min.js?61f142" defer></script>
    <script src="/media/vendor/bootstrap/js/collapse.min.js?5.3.8" type="module"></script>
    <script src="/media/templates/site/cassiopeia/js/mod_menu/menu-metismenu.min.js?7d03e7" defer></script>
    <script
        type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"http://127.0.0.1:9090/#/schema/Organization/base","name":"MPWT WEB 3","url":"http://127.0.0.1:9090/"},{"@type":"WebSite","@id":"http://127.0.0.1:9090/#/schema/WebSite/base","url":"http://127.0.0.1:9090/","name":"MPWT WEB 3","publisher":{"@id":"http://127.0.0.1:9090/#/schema/Organization/base"}},{"@type":"WebPage","@id":"http://127.0.0.1:9090/#/schema/WebPage/base","url":"http://127.0.0.1:9090/","name":"Home​​ Page","isPartOf":{"@id":"http://127.0.0.1:9090/#/schema/WebSite/base"},"about":{"@id":"http://127.0.0.1:9090/#/schema/Organization/base"},"inLanguage":"en-GB"},{"@type":"Article","@id":"http://127.0.0.1:9090/#/schema/com_content/article/1","name":"Home​​ Page","headline":"Home​​ Page","inLanguage":"en-GB","isPartOf":{"@id":"http://127.0.0.1:9090/#/schema/WebPage/base"}}]}</script>

    <link rel="stylesheet" href="/templates/cassiopeia/css/style.css">

</head>

<body class="site com_content wrapper-static view-article no-layout no-task itemid-101 has-sidebar-right">

    <!-- Header Section Starts -->

    <style>
        #cus-header {
            --header-text-color: #ffffff;

            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;

            background:
                transparent;

            transition: background-color .3s ease,
                box-shadow .3s ease,
                color .3s ease;
        }

        /* Only homepage gets the scroll effect */
        #cus-header.scrolled {

            --header-text-color: #ffff;

            background-color: rgb(19, 0, 89);
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }


        #cus-header .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Logo section */
        #cus-header .logo-group {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        #cus-header .logo-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            background: #d9d9d9;
        }

        #cus-header .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #cus-header .logo-text {
            width: 17rem;
            max-width: 100%;
            display: block;
        }

        /* Menu colors */
        #cus-header nav a,
        #cus-header nav span,
        #cus-header nav li {
            color: var(--header-text-color);
            transition: color .3s ease;
        }

        /* Cassiopeia menu overrides */
        #cus-header .mod-menu a,
        #cus-header .metismenu a {
            color: var(--header-text-color) !important;
            transition: color .3s ease;
        }

        /* Optional active menu item */
        #cus-header .mod-menu .active>a,
        #cus-header .mod-menu .current>a {
            font-weight: 600;
        }

        /* Mobile */
        @media (max-width: 768px) {
            #cus-header .header-inner {
                padding: 1rem;
            }

            #cus-header .logo-text {
                width: 10rem;
            }
        }
    </style>

    <header id="cus-header">
        <section class="header-inner">
            <aside class="logo-group">
                <div class="logo-circle">
                    <img src="/images/mpwt.png" alt="MPWT Logo">
                </div>

                <div>
                    <img class="logo-text" src="/images/mpwt-text.png" alt="MPWT">
                </div>

            </aside>

            <nav>
                <!-- Call the default menu module of Joomla -->
                <div class="moduletable ">

                    <nav style="display: flex;" class="navbar navbar-expand-lg" aria-label="Header">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar110" aria-controls="navbar110" aria-expanded="false"
                            aria-label="Toggle Navigation">
                            <span class="icon-menu" aria-hidden="true"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar110">
                            <ul class="mod-menu mod-menu_dropdown-metismenu metismenu mod-list ">
                                <li class="metismenu-item item-101 level-1 default current active"><a href="/index.php"
                                        aria-current="page">ទំព័រដើម</a></li>
                                <li class="metismenu-item item-102 level-1 deeper parent"><a
                                        href="/index.php/about"><span class="p-2 fa-solid fa-house"
                                            aria-hidden="true"></span>អំពីក្រសួង</a><button
                                        class="mm-collapsed mm-toggler mm-toggler-link" aria-haspopup="true"
                                        aria-expanded="false" aria-label="អំពីក្រសួង"></button>
                                    <ul class="mm-collapse">
                                        <li class="metismenu-item item-109 level-2"><a
                                                href="/index.php/about/leader">ថ្នាក់ដឹកនាំ</a></li>
                                        <li class="metismenu-item item-110 level-2"><a
                                                href="/index.php/about/2026-06-23-03-58-19">អង្គភាពចំណុះ</a></li>
                                        <li class="metismenu-item item-112 level-2"><a
                                                href="/index.php/about/background">សាវតា និងបេសកកម្ម</a></li>
                                    </ul>
                                </li>
                                <li class="metismenu-item item-103 level-1 deeper parent"><a
                                        href="/index.php/infra">ហេដ្ឋារចនាសម្ព័ន្ធ</a><button
                                        class="mm-collapsed mm-toggler mm-toggler-link" aria-haspopup="true"
                                        aria-expanded="false" aria-label="ហេដ្ឋារចនាសម្ព័ន្ធ"></button>
                                    <ul class="mm-collapse">
                                        <li class="metismenu-item item-111 level-2"><a
                                                href="/index.php/infra/testing">សាកល្បង</a></li>
                                    </ul>
                                </li>
                                <li class="metismenu-item item-104 level-1"><a href="/index.php/service">សេវាសាធារណៈ</a>
                                </li>
                                <li class="metismenu-item item-106 level-1"><a
                                        href="/index.php/documents">ឯកសារផ្លូវការ</a></li>
                                <li class="metismenu-item item-107 level-1"><a href="/index.php/info">ព័ត៌មាន</a></li>
                                <li class="metismenu-item item-108 level-1"><a href="/index.php/news">ព័ត៌មានទូទៅ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </nav>

        </section>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.getElementById('cus-header');

            function updateHeader() {
                if (window.scrollY > 80) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }

            updateHeader();
            window.addEventListener('scroll', updateHeader);
        });
    </script>
    <!-- Breadcrumbs Section Starts -->
    <section>
    </section>


    <!-- Hero Section Starts -->

    <div class="moduletable ">

        <div id="heroSlide" class="hero-slide" style="--slide-duration: 5000ms; height : 80vh">
            <div class="slide is-active" data-duration="20000"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('images/fn-2021-01-21-16-52-10-0.jpg#joomlaImage://local-images/fn-2021-01-21-16-52-10-0.jpg?width=1280&amp;height=853'); background-size: cover; background-position: center; opacity:1;">

                <section class="container"
                    style="position:absolute; top:0; left:0; right:0; height:100%; padding-top:80px; display:flex;">
                    <!-- Left Section -->
                    <aside
                        style="width:50%; display: flex; flex-direction: column; gap : 1rem; justify-content: flex-start; padding-top: 5rem;">
                        <h1 style="color : white; line-height : 1.5">សូមស្វាគមន៍មកកាន់គេហទំព័រក្រសួងសាធារណការ
                            និងដឹកជញ្ជូន</h1>
                        <p style="color : white; line-height: 2;">
                            សូមអនុញ្ញាតឱ្យខ្ញុំក្នុងនាមជារដ្ឋមន្រ្តីក្រសួងសាធារណការ និងដឹកជញ្ជូន សូមស្វាគមន៍ចំពោះ
                            ការចូលមកកាន់គេហទំព័រផ្លូវការរបស់ក្រសួង។
                            គេហទំព័រនេះត្រូវបានបង្កើតឡើងដើម្បីផ្តល់ព័ត៌មានអំពីយុទ្ធសាស្ត្រ បេសកកម្ម ការងារសំខាន់ៗ
                            ស្ថិតិ និងសេវាសាធារណៈដែលក្រសួងបាន និងកំពុងអនុវត្ត ដើម្បីបម្រើប្រជាពលរដ្ឋទាំងអស់គ្នា ...</p>
                        <button
                            style="border : 1px solid white; padding: 5px; padding-inline : 10px; background-color : transparent; border-radius: 5px; margin-top : 13rem; display : flex; flex-direction: row; justify-items: center; align-items: center;">
                            <a href="#replace_with_your_actual_link" style="color : white">អានលំអិត</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M6 13h6v4l6-5-6-5v4H6z"></path>
                            </svg>
                        </button>
                    </aside>
                    <!-- Right Section -->
                    <aside style="width:50%; position:relative; padding:20px;">
                        <img src="/images/IMG_4855-removebg-preview.png#joomlaImage://local-images/IMG_4855-removebg-preview.png?width=500&amp;height=500"
                            alt="ឯកឧត្ដម ប៉េង ពោធិ៍នា"
                            style="height:auto; position : absolute; bottom : 0; right: 0; " />

                        <div style="position:absolute; bottom:0; width:100%;">
                            <div style="position : relative; left: -130px; bottom : 10px">
                            </div>
                            <footer style="position:absolute; bottom:0; width:100%; margin-bottom: 1rem !important;">
                                <h3 style="color: white; font-weight: 600;">ឯកឧត្ដម ប៉េង ពោធិ៍នា</h3>
                                <p style="color : white; font-weight : 400; margin-top: 1rem !important;">
                                    អនុរដ្ឋមន្រ្តីក្រសួងសាធារណការ និងដឹកជញ្ជូន</p>

                                <!-- Dynamic slide indicators -->
                                <div class="indicators" role="tablist" aria-label="Slide progress">
                                    <div class="indicator" data-index="0" role="tab" aria-selected="true">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="1" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="2" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="3" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                </div>

                                <div style="display : flex; justify-content: space-between; align-items : center">
                                    <p style="color : white; font-weight: 500;">រដ្ឋមន្រ្តី</p>
                                    <p style="color : white;"></p>
                                </div>
                            </footer>
                        </div>
                    </aside>
                </section>
            </div>
            <div class="slide" data-duration="10000"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('images/DJI_20250406023621_0141_D.jpg#joomlaImage://local-images/DJI_20250406023621_0141_D.jpg?width=4032&amp;height=3024'); background-size: cover; background-position: center; opacity:0;">

                <section class="container"
                    style="position:absolute; top:0; left:0; right:0; height:100%; padding-top:80px; display:flex;">
                    <!-- Left Section -->
                    <aside
                        style="width:50%; display: flex; flex-direction: column; gap : 1rem; justify-content: flex-start; padding-top: 5rem;">
                        <h1 style="color : white; line-height : 1.5"></h1>
                        <p style="color : white; line-height: 2;"></p>
                        <button
                            style="border : 1px solid white; padding: 5px; padding-inline : 10px; background-color : transparent; border-radius: 5px; margin-top : 13rem; display : flex; flex-direction: row; justify-items: center; align-items: center;">
                            <a href="#lslsls" style="color : white">អានលំអិត</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M6 13h6v4l6-5-6-5v4H6z"></path>
                            </svg>
                        </button>
                    </aside>
                    <!-- Right Section -->
                    <aside style="width:50%; position:relative; padding:20px;">

                        <div style="position:absolute; bottom:0; width:100%;">
                            <div style="position : relative; left: -130px; bottom : 10px">

                                <style>
                                    /* Import Khmer font for optimal UI rendering and alignment */
                                    @import url('https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap');

                                    .circle-chart-wrapper {
                                        position: relative;
                                        width: 120px;
                                        height: 120px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        font-family: 'Kantumruy Pro', sans-serif !important;
                                    }

                                    .circle-chart-bg-ring {
                                        position: absolute;
                                        inset: 0;
                                        border-radius: 50%;
                                        background: conic-gradient(var(--color) var(--progress), var(--track) 0);

                                        /* Perfect circle cut-out for transparent inner background */
                                        mask: radial-gradient(circle, transparent 61%, black 62%);
                                        -webkit-mask: radial-gradient(circle, transparent 61%, black 62%);
                                    }

                                    .circle-chart-content {
                                        position: relative;
                                        z-index: 1;
                                        text-align: center;
                                        width: 75%;
                                    }

                                    .circle-chart-percentage {
                                        font-size: 1.4rem;
                                        font-weight: 700;
                                        line-height: 1.2;
                                        color: #ffffff;
                                    }

                                    .circle-chart-divider {
                                        border: 0;
                                        height: 1px;
                                        background: rgba(255, 255, 255, 0.4);
                                        margin: 4px auto;
                                        width: 80%;
                                    }

                                    .circle-chart-date {
                                        font-size: 0.75rem;
                                        letter-spacing: 0.3px;
                                        color: rgba(255, 255, 255, 0.8);
                                        line-height: 1.3;
                                    }
                                </style>

                                <div class="circle-chart-wrapper">
                                    <!-- Transparent Background Progress Ring -->
                                    <div class="circle-chart-bg-ring" style="
            --progress: 100%;
            --color: white;
            --track: rgba(255, 255, 255, 0.2);
        "></div>

                                    <!-- Inner Content Separated by Horizontal Line -->
                                    <div class="circle-chart-content">
                                        <div class="circle-chart-percentage">
                                            ១០០%
                                        </div>

                                        <hr class="circle-chart-divider">

                                        <div class="circle-chart-date">
                                            ២០២៦-០៦-៣០ </div>
                                    </div>
                                </div>
                            </div>
                            <footer style="position:absolute; bottom:0; width:100%; margin-bottom: 1rem !important;">
                                <h3 style="color: white; font-weight: 600;">ផ្លូវជាតិលេខ៤៨ </h3>
                                <p style="color : white; font-weight : 400; margin-top: 1rem !important;">សាងសង់ថ្ងៃទី០៣
                                    ខែមករា ឆ្នាំ២០២២ - បញ្ចប់នៅឆ្នាំ២០២៥</p>

                                <!-- Dynamic slide indicators -->
                                <div class="indicators" role="tablist" aria-label="Slide progress">
                                    <div class="indicator" data-index="0" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="1" role="tab" aria-selected="true">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="2" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="3" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                </div>

                                <div style="display : flex; justify-content: space-between; align-items : center">
                                    <p style="color : white; font-weight: 500;">ស្រែអំបិល-កោះកុង</p>
                                    <p style="color : white;">ប្រវែង ១៤៨ គីឡូម៉ែត្រ</p>
                                </div>
                            </footer>
                        </div>
                    </aside>
                </section>
            </div>
            <div class="slide" data-duration="30000"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('images/image-145.png#joomlaImage://local-images/image-145.png?width=1024&amp;height=544'); background-size: cover; background-position: center; opacity:0;">

                <section class="container"
                    style="position:absolute; top:0; left:0; right:0; height:100%; padding-top:80px; display:flex;">
                    <!-- Left Section -->
                    <aside
                        style="width:50%; display: flex; flex-direction: column; gap : 1rem; justify-content: flex-start; padding-top: 5rem;">
                        <h1 style="color : white; line-height : 1.5"></h1>
                        <p style="color : white; line-height: 2;"></p>
                        <button
                            style="border : 1px solid white; padding: 5px; padding-inline : 10px; background-color : transparent; border-radius: 5px; margin-top : 13rem; display : flex; flex-direction: row; justify-items: center; align-items: center;">
                            <a href="#replace_actual_link" style="color : white">អានលំអិត</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M6 13h6v4l6-5-6-5v4H6z"></path>
                            </svg>
                        </button>
                    </aside>
                    <!-- Right Section -->
                    <aside style="width:50%; position:relative; padding:20px;">

                        <div style="position:absolute; bottom:0; width:100%;">
                            <div style="position : relative; left: -130px; bottom : 10px">

                                <style>
                                    /* Import Khmer font for optimal UI rendering and alignment */
                                    @import url('https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap');

                                    .circle-chart-wrapper {
                                        position: relative;
                                        width: 120px;
                                        height: 120px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        font-family: 'Kantumruy Pro', sans-serif !important;
                                    }

                                    .circle-chart-bg-ring {
                                        position: absolute;
                                        inset: 0;
                                        border-radius: 50%;
                                        background: conic-gradient(var(--color) var(--progress), var(--track) 0);

                                        /* Perfect circle cut-out for transparent inner background */
                                        mask: radial-gradient(circle, transparent 61%, black 62%);
                                        -webkit-mask: radial-gradient(circle, transparent 61%, black 62%);
                                    }

                                    .circle-chart-content {
                                        position: relative;
                                        z-index: 1;
                                        text-align: center;
                                        width: 75%;
                                    }

                                    .circle-chart-percentage {
                                        font-size: 1.4rem;
                                        font-weight: 700;
                                        line-height: 1.2;
                                        color: #ffffff;
                                    }

                                    .circle-chart-divider {
                                        border: 0;
                                        height: 1px;
                                        background: rgba(255, 255, 255, 0.4);
                                        margin: 4px auto;
                                        width: 80%;
                                    }

                                    .circle-chart-date {
                                        font-size: 0.75rem;
                                        letter-spacing: 0.3px;
                                        color: rgba(255, 255, 255, 0.8);
                                        line-height: 1.3;
                                    }
                                </style>

                                <div class="circle-chart-wrapper">
                                    <!-- Transparent Background Progress Ring -->
                                    <div class="circle-chart-bg-ring" style="
            --progress: 55%;
            --color: white;
            --track: rgba(255, 255, 255, 0.2);
        "></div>

                                    <!-- Inner Content Separated by Horizontal Line -->
                                    <div class="circle-chart-content">
                                        <div class="circle-chart-percentage">
                                            ៥៥%
                                        </div>

                                        <hr class="circle-chart-divider">

                                        <div class="circle-chart-date">
                                            ២០២៦-០៦-៣០ </div>
                                    </div>
                                </div>
                            </div>
                            <footer style="position:absolute; bottom:0; width:100%; margin-bottom: 1rem !important;">
                                <h3 style="color: white; font-weight: 600;">ព្រែកជីកហ្វូណនតេជោ </h3>
                                <p style="color : white; font-weight : 400; margin-top: 1rem !important;">សាងសង់ថ្ងៃទី០៥
                                    ខែសីហា ឆ្នាំ២០២៤ - បញ្ចប់នៅឆ្នាំ២០២៨</p>

                                <!-- Dynamic slide indicators -->
                                <div class="indicators" role="tablist" aria-label="Slide progress">
                                    <div class="indicator" data-index="0" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="1" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="2" role="tab" aria-selected="true">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="3" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                </div>

                                <div style="display : flex; justify-content: space-between; align-items : center">
                                    <p style="color : white; font-weight: 500;">
                                        ខេត្តកណ្ដាល-ខេត្តតាកែវ-ខេត្តកំពត-ខេត្តកែប</p>
                                    <p style="color : white;">ប្រវែង ១៨០ គីឡូម៉ែត្រ</p>
                                </div>
                            </footer>
                        </div>
                    </aside>
                </section>
            </div>
            <div class="slide" data-duration="5000"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('images/image-145.png#joomlaImage://local-images/image-145.png?width=1024&amp;height=544'); background-size: cover; background-position: center; opacity:0;">

                <section class="container"
                    style="position:absolute; top:0; left:0; right:0; height:100%; padding-top:80px; display:flex;">
                    <!-- Left Section -->
                    <aside
                        style="width:50%; display: flex; flex-direction: column; gap : 1rem; justify-content: flex-start; padding-top: 5rem;">
                        <h1 style="color : white; line-height : 1.5">Title</h1>
                        <p style="color : white; line-height: 2;">Description
                        </p>
                    </aside>
                    <!-- Right Section -->
                    <aside style="width:50%; position:relative; padding:20px;">

                        <div style="position:absolute; bottom:0; width:100%;">
                            <div style="position : relative; left: -130px; bottom : 10px">

                                <style>
                                    /* Import Khmer font for optimal UI rendering and alignment */
                                    @import url('https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap');

                                    .circle-chart-wrapper {
                                        position: relative;
                                        width: 120px;
                                        height: 120px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        font-family: 'Kantumruy Pro', sans-serif !important;
                                    }

                                    .circle-chart-bg-ring {
                                        position: absolute;
                                        inset: 0;
                                        border-radius: 50%;
                                        background: conic-gradient(var(--color) var(--progress), var(--track) 0);

                                        /* Perfect circle cut-out for transparent inner background */
                                        mask: radial-gradient(circle, transparent 61%, black 62%);
                                        -webkit-mask: radial-gradient(circle, transparent 61%, black 62%);
                                    }

                                    .circle-chart-content {
                                        position: relative;
                                        z-index: 1;
                                        text-align: center;
                                        width: 75%;
                                    }

                                    .circle-chart-percentage {
                                        font-size: 1.4rem;
                                        font-weight: 700;
                                        line-height: 1.2;
                                        color: #ffffff;
                                    }

                                    .circle-chart-divider {
                                        border: 0;
                                        height: 1px;
                                        background: rgba(255, 255, 255, 0.4);
                                        margin: 4px auto;
                                        width: 80%;
                                    }

                                    .circle-chart-date {
                                        font-size: 0.75rem;
                                        letter-spacing: 0.3px;
                                        color: rgba(255, 255, 255, 0.8);
                                        line-height: 1.3;
                                    }
                                </style>

                                <div class="circle-chart-wrapper">
                                    <!-- Transparent Background Progress Ring -->
                                    <div class="circle-chart-bg-ring" style="
            --progress: 8%;
            --color: white;
            --track: rgba(255, 255, 255, 0.2);
        "></div>

                                    <!-- Inner Content Separated by Horizontal Line -->
                                    <div class="circle-chart-content">
                                        <div class="circle-chart-percentage">
                                            ៨%
                                        </div>

                                        <hr class="circle-chart-divider">

                                        <div class="circle-chart-date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer style="position:absolute; bottom:0; width:100%; margin-bottom: 1rem !important;">
                                <h3 style="color: white; font-weight: 600;"></h3>
                                <p style="color : white; font-weight : 400; margin-top: 1rem !important;"></p>

                                <!-- Dynamic slide indicators -->
                                <div class="indicators" role="tablist" aria-label="Slide progress">
                                    <div class="indicator" data-index="0" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="1" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="2" role="tab" aria-selected="false">
                                        <span class="progress"></span>
                                    </div>
                                    <div class="indicator" data-index="3" role="tab" aria-selected="true">
                                        <span class="progress"></span>
                                    </div>
                                </div>

                                <div style="display : flex; justify-content: space-between; align-items : center">
                                    <p style="color : white; font-weight: 500;"></p>
                                    <p style="color : white;"></p>
                                </div>
                            </footer>
                        </div>
                    </aside>
                </section>
            </div>

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", (event) => {
                (function () {
                    const root = document.getElementById('heroSlide');
                    const slides = root.querySelectorAll('.slide');
                    const fallbackDuration = 5000;

                    let current = 0;
                    let timer = null;

                    function getDuration(index) {
                        const raw = parseInt(slides[index].dataset.duration, 10);
                        return Number.isFinite(raw) && raw > 0 ? raw : fallbackDuration;
                    }

                    function setBars(slideEl, activeIndex) {
                        const indicators = slideEl.querySelectorAll('.indicator');
                        const bars = slideEl.querySelectorAll('.progress');

                        bars.forEach((bar, i) => {
                            bar.classList.remove('is-filling');
                            bar.style.animation = 'none';
                            bar.style.width = i < activeIndex ? '100%' : '0%';
                        });

                        indicators.forEach((el, i) => {
                            el.setAttribute('aria-selected', i === activeIndex ? 'true' : 'false');
                        });

                        const activeBar = bars[activeIndex];
                        if (!activeBar) return;
                        void activeBar.offsetWidth;
                        activeBar.style.width = '';
                        activeBar.style.animation = '';
                        activeBar.style.animationDuration = getDuration(activeIndex) + 'ms';
                        activeBar.classList.add('is-filling');
                    }

                    function showSlide(index) {
                        // Remove active class from current slide
                        slides[current].classList.remove('is-active');
                        slides[current].style.opacity = '0';

                        // Update current to the new index
                        current = (index + slides.length) % slides.length;

                        // Add active class to new slide
                        const activeSlide = slides[current];
                        activeSlide.classList.add('is-active');
                        activeSlide.style.opacity = '1';

                        // Update indicators on the active slide
                        setBars(activeSlide, current);
                    }

                    function scheduleNext() {
                        clearTimeout(timer);
                        const duration = getDuration(current);
                        timer = setTimeout(() => {
                            showSlide(current + 1);
                            scheduleNext();
                        }, duration);
                    }

                    function goTo(index) {
                        clearTimeout(timer);
                        showSlide(index);
                        scheduleNext();
                    }

                    // Click handlers
                    root.addEventListener('click', (e) => {
                        const indicatorEl = e.target.closest('.indicator');
                        if (indicatorEl) {
                            const idx = parseInt(indicatorEl.dataset.index, 10);
                            if (Number.isFinite(idx)) goTo(idx);
                            return;
                        }
                        if (e.target.closest('.prev')) { goTo(current - 1); return; }
                        if (e.target.closest('.next')) { goTo(current + 1); return; }
                    });

                    // Initialize first slide
                    slides.forEach((slide, i) => {
                        if (i === 0) {
                            slide.style.opacity = '1';
                        } else {
                            slide.style.opacity = '0';
                        }
                    });
                    setBars(slides[0], 0);
                    scheduleNext();
                })();
            });

        </script>

        <style>
            .hero-slide {
                position: relative;
                height: 100%;
                width: 100%;
                overflow: hidden;
            }

            .hero-slide .slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                opacity: 0;
                pointer-events: none;
                transition: opacity 1s ease;
            }

            .hero-slide .slide.is-active {
                opacity: 1 !important;
                pointer-events: auto;
            }

            .hero-slide button {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(0, 0, 0, 0.5);
                color: #fff;
                border: none;
                padding: 10px;
                cursor: pointer;
                z-index: 10;
            }

            .hero-slide .prev {
                left: 10px;
            }

            .hero-slide .next {
                right: 10px;
            }

            .hero-slide .indicators {
                display: flex;
                gap: 6px;
                margin: 12px 0;
            }

            .hero-slide .indicator {
                flex: 1;
                height: 3px;
                border-radius: 2px;
                background: rgba(255, 255, 255, 0.3);
                overflow: hidden;
                cursor: pointer;
            }

            .hero-slide .indicator .progress {
                display: block;
                height: 100%;
                width: 0%;
                background: #fff;
                border-radius: 2px;
            }

            .hero-slide .indicator .progress.is-filling {
                animation: heroSlideFill var(--slide-duration, 5000ms) linear forwards;
            }

            @keyframes heroSlideFill {
                from {
                    width: 0%;
                }

                to {
                    width: 100%;
                }
            }
        </style>
    </div>



    <section>
    </section>


    <!-- Marquee Section -->
    <aside style="padding: .5rem;">

        <style>
            #cus-marquee {
                display: flex;
                align-items: center;
                gap: 1rem;
                overflow: hidden;
                width: 100%;
            }

            #cus-marquee .logo {
                width: 3.5rem;
                height: 3.5rem;
                flex-shrink: 0;
                border-radius: 1rem;
                overflow: hidden;
            }

            #cus-marquee .logo img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            #cus-marquee .marquee-track {
                flex: 1;
                overflow: hidden;
                white-space: nowrap;
                position: relative;
            }

            #cus-marquee .marquee-text {
                display: inline-block;
                white-space: nowrap;
                padding-right: 2rem;
            }
        </style>

        <main id="cus-marquee">

            <div class="logo">
                <img src="/images/3.png" alt="logo">
            </div>

            <div class="marquee-track">
                <p class="marquee-text">(ភ្នំពេញ)៖ លោក ប៉េង ពោធិ៍នា រដ្ឋមន្រ្តីក្រសួងសាធារណការ និងដឹកជញ្ជូន
                    ព្រឹកថ្ងៃទី១២ ខែឧសភា ឆ្នាំ២០២៦នេះ បានអញ្ជើញជាអធិបតីក្នុងមហាសន្និបាតភាគហ៊ុនិកលើកទី១១
                    របស់កំពង់ផែស្វយ័តភ្នំពេញ។ មហាសន្និបាតភាគហ៊ុនិកលើកទី១១ នេះ ក៏មានការចូលរួមពី លោក ហ៊ឺ បាវី
                    ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជា ទទួលបន្ទុកជាប្រធានអគ្គនាយកកំពង់ផែស្វយ័តភ្នំពេញ លោក
                    លោកស្រីថ្នាក់ដឹកនាំក្រសួង សមាជិកក្រុមប្រឹក្សាភិបាល និងមន្ត្រីត្រួតពិនិត្យរដ្ឋអមកំពង់ផែស្វយ័តភ្នំពេញ
                    ឧកញ៉ា លោក លោកស្រី ភ្ញៀវកិត្តិយសជាតិ-អន្តរជាតិ ភាគហ៊ុនិក និងថ្នាក់ដឹកនាំ
                    កម្មករ-និយោជិតទាំងអស់របស់កំពង់ផែស្វយ័តភ្នំពេញ ជាច្រើនរូបទៀត៕</p>
            </div>

        </main>

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                const text = document.querySelector("#cus-marquee .marquee-text");

                // clone for seamless loop
                const clone = text.cloneNode(true);
                text.parentNode.appendChild(clone);

                const width = text.offsetWidth;

                const direction = "left";
                const speed = 50;

                const moveX = direction === "right" ? width : -width;

                gsap.set([text, clone], { x: 0 });

                gsap.to([text, clone], {
                    x: moveX,
                    duration: speed,
                    ease: "none",
                    repeat: -1
                });

            });
        </script>
    </aside>

    <aside>
        <section>
            <!-- Public Service Section Starts -->
            <aside style="margin-top: 5rem;">

                <style>
                    .hide-scrollbar::-webkit-scrollbar {
                        display: none;
                    }

                    .hide-scrollbar {
                        scrollbar-width: none;
                        /* Firefox */
                    }
                </style>

                <main id="public-service">
                    <div
                        style="display: flex; flex-direction: column; gap: .5rem; justify-content: center; align-items: center;">
                        <h3 style="color: #192879;">សេវាសាធារណៈ</h3>
                        <p>ផ្តល់ភាពងាយស្រួលជូនប្រជាពលរដ្ឋទទួលសេវាសាធារណៈ</p>
                    </div>

                    <div class="hide-scrollbar" style="
            display: flex;
            gap: .5rem;
            overflow-x: auto;
            width: 100%;
            padding-bottom: 1rem;
            margin-top : 3rem;
        ">

                        <div style="
                flex: 0 0 360px;
                height: 230px;
                border-radius: 16px;
                position: relative;
                overflow: hidden;
            ">

                            <img src="/images/hero.jpg" style="
                    position:absolute;
                    inset:0;
                    width:100%;
                    height:100%;
                    object-fit:cover;
                " alt="MPWT">


                            <footer style="
                    background: rgba(25, 40, 115, 0.45);
                    position:absolute;
                    bottom:0;
                    left:0;
                    width:100%;
                    height : 100%;
                    padding:8px;
                    box-sizing:border-box;
                    display:flex;
                    align-items:flex-end;
                    gap:10px;
                ">
                                <!-- Left side grows -->
                                <div style="flex:1;">

                                    <h3 style="
                            margin:0 0 8px 0;
                            color:white;
                            font-size: 20px;
                            font-weight : 400 !important;
                            margin-bottom : .6rem !important;
                        ">
                                        ដឹកជញ្ជូនផ្លូវគោក
                                    </h3>

                                    <div style="
    display:grid;
    grid-template-columns:repeat(2, 1fr);
    gap:5px;
">
                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ផ្តល់បណ្ណបើកបរ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ចុះបញ្ជីយានយន្ត...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>
                                    </div>

                                </div>

                                <!-- Right side keeps its natural width -->
                                <button style="
                        padding-block:.3rem;
                        padding-inline : .5rem;
                        background-color : #192879 !important;
                        border-radius:5px;
                        background:transparent;
                        color:white;
                        flex-shrink:0;
                        font-size : .8rem;
                        display : flex;
                        align-items : center;
                        gap : 5px;
                    ">
                                    អានលម្អិត
                                    <i style="font-size: .5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </footer>

                        </div>


                        <div style="
                flex: 0 0 360px;
                height: 230px;
                border-radius: 16px;
                position: relative;
                overflow: hidden;
            ">

                            <img src="/images/hero.jpg" style="
                    position:absolute;
                    inset:0;
                    width:100%;
                    height:100%;
                    object-fit:cover;
                " alt="MPWT">


                            <footer style="
                    background: rgba(25, 40, 115, 0.45);
                    position:absolute;
                    bottom:0;
                    left:0;
                    width:100%;
                    height : 100%;
                    padding:8px;
                    box-sizing:border-box;
                    display:flex;
                    align-items:flex-end;
                    gap:10px;
                ">
                                <!-- Left side grows -->
                                <div style="flex:1;">

                                    <h3 style="
                            margin:0 0 8px 0;
                            color:white;
                            font-size: 20px;
                            font-weight : 400 !important;
                            margin-bottom : .6rem !important;
                        ">
                                        ដឹកជញ្ជូនផ្លូវគោក
                                    </h3>

                                    <div style="
    display:grid;
    grid-template-columns:repeat(2, 1fr);
    gap:5px;
">
                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ផ្តល់បណ្ណបើកបរ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ចុះបញ្ជីយានយន្ត...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>
                                    </div>

                                </div>

                                <!-- Right side keeps its natural width -->
                                <button style="
                        padding-block:.3rem;
                        padding-inline : .5rem;
                        background-color : #192879 !important;
                        border-radius:5px;
                        background:transparent;
                        color:white;
                        flex-shrink:0;
                        font-size : .8rem;
                        display : flex;
                        align-items : center;
                        gap : 5px;
                    ">
                                    អានលម្អិត
                                    <i style="font-size: .5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </footer>

                        </div>


                        <div style="
                flex: 0 0 360px;
                height: 230px;
                border-radius: 16px;
                position: relative;
                overflow: hidden;
            ">

                            <img src="/images/hero.jpg" style="
                    position:absolute;
                    inset:0;
                    width:100%;
                    height:100%;
                    object-fit:cover;
                " alt="MPWT">


                            <footer style="
                    background: rgba(25, 40, 115, 0.45);
                    position:absolute;
                    bottom:0;
                    left:0;
                    width:100%;
                    height : 100%;
                    padding:8px;
                    box-sizing:border-box;
                    display:flex;
                    align-items:flex-end;
                    gap:10px;
                ">
                                <!-- Left side grows -->
                                <div style="flex:1;">

                                    <h3 style="
                            margin:0 0 8px 0;
                            color:white;
                            font-size: 20px;
                            font-weight : 400 !important;
                            margin-bottom : .6rem !important;
                        ">
                                        ដឹកជញ្ជូនផ្លូវគោក
                                    </h3>

                                    <div style="
    display:grid;
    grid-template-columns:repeat(2, 1fr);
    gap:5px;
">
                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ផ្តល់បណ្ណបើកបរ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ចុះបញ្ជីយានយន្ត...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>
                                    </div>

                                </div>

                                <!-- Right side keeps its natural width -->
                                <button style="
                        padding-block:.3rem;
                        padding-inline : .5rem;
                        background-color : #192879 !important;
                        border-radius:5px;
                        background:transparent;
                        color:white;
                        flex-shrink:0;
                        font-size : .8rem;
                        display : flex;
                        align-items : center;
                        gap : 5px;
                    ">
                                    អានលម្អិត
                                    <i style="font-size: .5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </footer>

                        </div>


                        <div style="
                flex: 0 0 360px;
                height: 230px;
                border-radius: 16px;
                position: relative;
                overflow: hidden;
            ">

                            <img src="/images/hero.jpg" style="
                    position:absolute;
                    inset:0;
                    width:100%;
                    height:100%;
                    object-fit:cover;
                " alt="MPWT">


                            <footer style="
                    background: rgba(25, 40, 115, 0.45);
                    position:absolute;
                    bottom:0;
                    left:0;
                    width:100%;
                    height : 100%;
                    padding:8px;
                    box-sizing:border-box;
                    display:flex;
                    align-items:flex-end;
                    gap:10px;
                ">
                                <!-- Left side grows -->
                                <div style="flex:1;">

                                    <h3 style="
                            margin:0 0 8px 0;
                            color:white;
                            font-size: 20px;
                            font-weight : 400 !important;
                            margin-bottom : .6rem !important;
                        ">
                                        ដឹកជញ្ជូនផ្លូវគោក
                                    </h3>

                                    <div style="
    display:grid;
    grid-template-columns:repeat(2, 1fr);
    gap:5px;
">
                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ផ្តល់បណ្ណបើកបរ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ចុះបញ្ជីយានយន្ត...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>
                                    </div>

                                </div>

                                <!-- Right side keeps its natural width -->
                                <button style="
                        padding-block:.3rem;
                        padding-inline : .5rem;
                        background-color : #192879 !important;
                        border-radius:5px;
                        background:transparent;
                        color:white;
                        flex-shrink:0;
                        font-size : .8rem;
                        display : flex;
                        align-items : center;
                        gap : 5px;
                    ">
                                    អានលម្អិត
                                    <i style="font-size: .5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </footer>

                        </div>


                        <div style="
                flex: 0 0 360px;
                height: 230px;
                border-radius: 16px;
                position: relative;
                overflow: hidden;
            ">

                            <img src="/images/hero.jpg" style="
                    position:absolute;
                    inset:0;
                    width:100%;
                    height:100%;
                    object-fit:cover;
                " alt="MPWT">


                            <footer style="
                    background: rgba(25, 40, 115, 0.45);
                    position:absolute;
                    bottom:0;
                    left:0;
                    width:100%;
                    height : 100%;
                    padding:8px;
                    box-sizing:border-box;
                    display:flex;
                    align-items:flex-end;
                    gap:10px;
                ">
                                <!-- Left side grows -->
                                <div style="flex:1;">

                                    <h3 style="
                            margin:0 0 8px 0;
                            color:white;
                            font-size: 20px;
                            font-weight : 400 !important;
                            margin-bottom : .6rem !important;
                        ">
                                        ដឹកជញ្ជូនផ្លូវគោក
                                    </h3>

                                    <div style="
    display:grid;
    grid-template-columns:repeat(2, 1fr);
    gap:5px;
">
                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ផ្តល់បណ្ណបើកបរ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ចុះបញ្ជីយានយន្ត...
                                        </button>

                                        <button style="
        padding:.3rem;
        border:1px solid white;
        border-radius:5px;
        background:transparent;
        color:white;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    ">
                                            ត្រួតពិនិត្យលក្ខណៈ...
                                        </button>
                                    </div>

                                </div>

                                <!-- Right side keeps its natural width -->
                                <button style="
                        padding-block:.3rem;
                        padding-inline : .5rem;
                        background-color : #192879 !important;
                        border-radius:5px;
                        background:transparent;
                        color:white;
                        flex-shrink:0;
                        font-size : .8rem;
                        display : flex;
                        align-items : center;
                        gap : 5px;
                    ">
                                    អានលម្អិត
                                    <i style="font-size: .5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </footer>

                        </div>


                    </div>
                </main>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        console.log("Public service loaded")
                    });
                </script>
            </aside>

            <!-- Plate Section Starts -->
            <aside style="margin-top: 5rem; display: flex; flex-direction: column; gap: 2rem;">

                <style>
                    .hide-scrollbar::-webkit-scrollbar {
                        display: none;
                    }

                    .hide-scrollbar {
                        scrollbar-width: none;
                        /* Firefox */
                    }
                </style>

                <main style="display: flex; flex-direction : column; gap : 2rem">
                    <div
                        style="display: flex; flex-direction: column; gap: .5rem; justify-content: center; align-items: center;">
                        <h3 style="color: #192879;">លេខពិសេសកំពុងពេញនិយម</h3>
                        <p>ទិញលេខពិសេសកំពុងពេញនិយមតាមប្រព័ន្ធអនឡាញ ងាយស្រួលនិងសុវត្ថិភាព</p>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <aside style="display: flex; align-items: center; gap: 1rem;">
                            <!-- <div style="width: 5rem; height: 2rem; background-color: aquamarine;"></div> -->
                            <img style="width: 86px; height: auto;" src="/images/plate-car.png" />

                            <p style=" font-size: 1.2rem; color: #192879;">រថយន្ត</p>
                        </aside>

                        <a href="/index.php/infra"
                            style="display: flex; align-items: center; gap: .2rem; cursor: pointer;">
                            <p style="font-size: .8rem;">ស្វែងរកបន្ថែម</p>
                            <i class="fa-solid fa-chevron-right" style="font-size: .5rem;"></i>
                        </a>
                    </div>

                    <main class="hide-scrollbar"
                        style="display: flex; gap: 4rem; overflow-x: auto; overflow-y: hidden !important; height: 150px; margin-top: 2rem;">

                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                J.NEANG </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>11,230,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                J.NEANG </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>11,230,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                    </main>
                </main>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        console.log("Public service loaded")
                    });
                </script>
                <style>
                    .hide-scrollbar::-webkit-scrollbar {
                        display: none;
                    }

                    .hide-scrollbar {
                        scrollbar-width: none;
                        /* Firefox */
                    }
                </style>

                <main style="display: flex; flex-direction : column; gap : 2rem">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <aside style="display: flex; align-items: center; gap: 1rem;">
                            <!-- <div style="width: 5rem; height: 2rem; background-color: aquamarine;"></div> -->
                            <img style="width: 86px; height: auto;" src="/images/plate-motor.png" />

                            <p style=" font-size: 1.2rem; color: #192879;">ទោចក្រយានយន្ត ត្រីចក្រយានយន្ដ និងម៉ូតូកង់បួន
                            </p>
                        </aside>

                        <a href="/index.php/infra"
                            style="display: flex; align-items: center; gap: .2rem; cursor: pointer;">
                            <p style="font-size: .8rem;">ស្វែងរកបន្ថែម</p>
                            <i class="fa-solid fa-chevron-right" style="font-size: .5rem;"></i>
                        </a>
                    </div>

                    <main class="hide-scrollbar"
                        style="display: flex; gap: 4rem; overflow-x: auto; overflow-y: hidden !important; height: 150px; margin-top: 2rem;">

                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                J.NEANG </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>11,230,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                J.NEANG </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>11,230,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                        <article
                            style="width: 202px; height: 100px; background-color: white; border-radius: 16px; position: relative; display: flex; flex-direction: column; justify-content: center; align-items: center; border: .5px solid #192879; flex-shrink: 0;">

                            <h5 style="color: #192879;">
                                កម្ពុជា </h5>

                            <p style="font-size: 1.5rem; font-weight: 500; color: #192879;">
                                K.SOKHA </p>

                            <footer
                                style="position: relative; bottom: 0; width: 100%; border-top: 1px solid blue; visibility: hidden;">
                                <p style="color: red; text-align: center;">CAMBODIA</p>
                            </footer>

                            <footer style="position: absolute; bottom: 0; width: 100%; border-top: .5px solid #192879;">
                                <p style="color: red; text-align: center;">
                                    CAMBODIA </p>
                            </footer>

                            <i style="position: absolute; right: 8px; bottom: 5px;" class="fa-solid fa-qrcode"></i>

                            <div style="position: absolute; top: 100%; padding-top: .5rem; right: 0;">
                                <p>8,500,000 រៀល</p>
                            </div>
                        </article>
                    </main>
                    </div>
                </main>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        console.log("Public service loaded")
                    });
                </script>
            </aside>

            <!-- Digital App Section Starts -->

            <main>

                <!-- Header -->
                <div style="display : flex; flex-direction: column; justify-content: center; align-items : center">
                    <h2>កម្មវិធីឌីជីថល</h2>

                    <p>
                        ការអភិវឌ្ឍកម្មវិធីឌីជីថល ដើម្បីបម្រើការផ្តល់សេវាសាធារណៈប្រកបដោយប្រសិទ្ធភាព
                        និងការពង្រឹងយន្តការគ្រប់គ្រងរដ្ឋបាល
                    </p>
                </div>

                <!-- App List -->
                <div style="
        display:flex;
        gap:20px;
        overflow-x:auto;
        overflow-y:hidden;
        padding-bottom:20px;
        scroll-behavior:smooth;
        -webkit-overflow-scrolling:touch;
        justify-content : center;
    ">


                    <div class="app-card" data-index="0" style="
                    flex:0 0 220px;
                    background:#f8f9fa;
                    border-radius:16px;
                    padding:20px;
                    cursor:pointer;
                    text-align:center;
                    transition:.3s;
                    border:2px solid transparent;
                ">

                        <div style="
                    width:80px;
                    height:80px;
                    margin:auto;
                    border-radius:16px;
                    overflow:hidden;
                    background:#fff;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    box-shadow:0 3px 8px rgba(0,0,0,.08);
                ">

                            <img src="/images/apps/app-1.png"
                                style="max-width:100%;max-height:100%;object-fit:contain;">

                        </div>

                        <h4 style="margin-top:15px;font-size:18px;">
                            កម្មវិធីស្វែងយល់ទ្រឹស្តីនៃការបើកបរ </h4>

                        <p style="color:#666;">
                            (Cambodia Driving Rules) </p>

                    </div>


                    <div class="app-card" data-index="1" style="
                    flex:0 0 220px;
                    background:#f8f9fa;
                    border-radius:16px;
                    padding:20px;
                    cursor:pointer;
                    text-align:center;
                    transition:.3s;
                    border:2px solid transparent;
                ">

                        <div style="
                    width:80px;
                    height:80px;
                    margin:auto;
                    border-radius:16px;
                    overflow:hidden;
                    background:#fff;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    box-shadow:0 3px 8px rgba(0,0,0,.08);
                ">

                            <img src="/images/apps/app-2.png"
                                style="max-width:100%;max-height:100%;object-fit:contain;">

                        </div>

                        <h4 style="margin-top:15px;font-size:18px;">
                            កម្មវិធីតាមដានសេវាសាធារណៈ </h4>

                        <p style="color:#666;">
                            (Service Tracking) </p>

                    </div>


                    <div class="app-card" data-index="2" style="
                    flex:0 0 220px;
                    background:#f8f9fa;
                    border-radius:16px;
                    padding:20px;
                    cursor:pointer;
                    text-align:center;
                    transition:.3s;
                    border:2px solid transparent;
                ">

                        <div style="
                    width:80px;
                    height:80px;
                    margin:auto;
                    border-radius:16px;
                    overflow:hidden;
                    background:#fff;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    box-shadow:0 3px 8px rgba(0,0,0,.08);
                ">

                            <img src="/images/apps/app-3.png"
                                style="max-width:100%;max-height:100%;object-fit:contain;">

                        </div>

                        <h4 style="margin-top:15px;font-size:18px;">
                            កម្មវិធីព័ត៌មានសាធារណការ </h4>

                        <p style="color:#666;">
                            (MPWT News) </p>

                    </div>


                    <div class="app-card" data-index="3" style="
                    flex:0 0 220px;
                    background:#f8f9fa;
                    border-radius:16px;
                    padding:20px;
                    cursor:pointer;
                    text-align:center;
                    transition:.3s;
                    border:2px solid transparent;
                ">

                        <div style="
                    width:80px;
                    height:80px;
                    margin:auto;
                    border-radius:16px;
                    overflow:hidden;
                    background:#fff;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    box-shadow:0 3px 8px rgba(0,0,0,.08);
                ">

                            <img src="/images/apps/app-4.png"
                                style="max-width:100%;max-height:100%;object-fit:contain;">

                        </div>

                        <h4 style="margin-top:15px;font-size:18px;">
                            សេវាដឹកជញ្ជូនផ្លូវគោក </h4>

                        <p style="color:#666;">
                            (Land Transport Public Service) </p>

                    </div>


                    <div class="app-card" data-index="4" style="
                    flex:0 0 220px;
                    background:#f8f9fa;
                    border-radius:16px;
                    padding:20px;
                    cursor:pointer;
                    text-align:center;
                    transition:.3s;
                    border:2px solid transparent;
                ">

                        <div style="
                    width:80px;
                    height:80px;
                    margin:auto;
                    border-radius:16px;
                    overflow:hidden;
                    background:#fff;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    box-shadow:0 3px 8px rgba(0,0,0,.08);
                ">

                            <img src="/images/apps/app-5.png"
                                style="max-width:100%;max-height:100%;object-fit:contain;">

                        </div>

                        <h4 style="margin-top:15px;font-size:18px;">
                            កម្មវិធីថែទាំផ្លូវ </h4>

                        <p style="color:#666;">
                            (Road Care) </p>

                    </div>


                </div>

                <!-- Details -->
                <div id="details" style="
            margin-top:50px;
            display:flex;
            gap:50px;
            align-items:center;
            flex-wrap:wrap;
            background:#f8f9fa;
            padding:40px;
            border-radius:20px;
            opacity:1;
            transform:translateY(0);
            transition:opacity .35s ease, transform .35s ease;
         ">

                    <div style="flex:1;min-width:300px;">

                        <h2 id="detail-title"></h2>

                        <h4 id="detail-subtitle" style="color:#666;"></h4>

                        <p id="detail-description" style="
                    margin-top:20px;
                    white-space:pre-line;
                    line-height:1.8;
               ">
                        </p>
                    </div>

                    <div style="flex:1;min-width:300px; height : 300px; text-align:center;">
                        <img id="detail-image" style="
                    max-width:100%;
                    height:100%;
                    object-fit : contain;
            ">
                    </div>
                </div>
            </main>

            <script>

                const apps = [{ "image": "app-1.png", "detail_image": "details\/app-1-detail.png", "title": "កម្មវិធីស្វែងយល់ទ្រឹស្តីនៃការបើកបរ", "subtitle": "(Cambodia Driving Rules)", "description": "បង្កើតឡើងដើម្បីសម្រាប់ប្រជាពលរដ្ឋខ្មែរ និងជនបរទេស៖\n\n• យល់ដឹងពីទ្រឹស្តីនៃការបើកបរ\n• ប្រឡងសាកល្បងអំពីទ្រឹស្តីនៃការបើកបរ\n• យល់ដឹងពីច្បាប់ និងបទប្បញ្ញត្តិទាក់ទងនឹងការធ្វើចរាចរណ៍\n• លេងកម្សាន្ត និងចែករំលែកចំណេះដឹង", "link": "#" }, { "image": "app-2.png", "detail_image": "details\/app-2-detail.png", "title": "កម្មវិធីតាមដានសេវាសាធារណៈ", "subtitle": "(Service Tracking)", "description": "ព័ត៌មានលម្អិតអំពីកម្មវិធីតាមដានសេវាសាធារណៈ...", "link": "#" }, { "image": "app-3.png", "detail_image": "details\/app-3-detail.png", "title": "កម្មវិធីព័ត៌មានសាធារណការ", "subtitle": "(MPWT News)", "description": "ព័ត៌មានលម្អិតអំពីកម្មវិធីព័ត៌មានសាធារណការ...", "link": "#" }, { "image": "app-4.png", "detail_image": "details\/app-4-detail.png", "title": "សេវាដឹកជញ្ជូនផ្លូវគោក", "subtitle": "(Land Transport Public Service)", "description": "ព័ត៌មានលម្អិតអំពីសេវាដឹកជញ្ជូនផ្លូវគោក...", "link": "#" }, { "image": "app-5.png", "detail_image": "details\/app-5-detail.png", "title": "កម្មវិធីថែទាំផ្លូវ", "subtitle": "(Road Care)", "description": "ព័ត៌មានលម្អិតអំពីកម្មវិធីថែទាំផ្លូវ...", "link": "#" }];

                const imagePath = "/images/apps/";

                const cards = document.querySelectorAll(".app-card");

                function showApp(index) {

                    const details = document.getElementById("details");

                    // Fade out
                    details.style.opacity = "0";
                    details.style.transform = "translateY(15px)";

                    setTimeout(() => {

                        const app = apps[index];

                        document.getElementById("detail-title").textContent = app.title;
                        document.getElementById("detail-subtitle").textContent = app.subtitle;
                        document.getElementById("detail-description").textContent = app.description;
                        document.getElementById("detail-image").src = imagePath + app.detail_image;

                        cards.forEach(card => {
                            card.style.border = "2px solid transparent";
                        });

                        cards[index].style.border = "2px solid #0d6efd";

                        // Fade in
                        details.style.opacity = "1";
                        details.style.transform = "translateY(0)";

                    }, 300);

                }
                cards.forEach(card => {

                    card.addEventListener("click", function () {

                        showApp(this.dataset.index);

                    });

                });

                // Default selected app
                showApp(0);

            </script>
            <!-- Infomation Section Starts -->

            <style>

            </style>

            <main>
                <div
                    style="display: flex; flex-direction: column; gap: .5rem; justify-content: center; align-items: center;">
                    <h3>ព័ត៌មានសំខាន់ៗ</h3>
                    <p>តាមដានព័ត៌មានសំខាន់ៗរបស់ក្រសួងសាធារណការ និងដឹកជញ្ជូន</p>
                </div>

                <div style="
            display: flex;
            gap: .5rem;
            overflow-x: auto;
            width: 100%;
            padding-bottom: 1rem;
            margin-top : 3rem;
        ">
                    <h3>Listing</h3>

                </div>
            </main>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    console.log("Public service loaded")
                });
            </script>
            <!-- Subordinate Section Starts -->

            <style>
                .department-grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 1rem;
                    margin-top: 2rem;
                }

                .department-card {
                    box-shadow: 0 2px 8px #0000001A;
                    min-height: 60px;
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    gap: 1rem;
                    padding: 1rem;
                    background: #fff;
                }

                .department-card img {
                    width: 30px;
                    height: auto;
                    object-fit: contain;
                    flex-shrink: 0;
                }

                .department-card p {
                    margin: 0;
                    color: #00000099;
                }

                /* Tablet */
                @media (max-width: 991px) {
                    .department-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                /* Mobile */
                @media (max-width: 767px) {
                    .department-grid {
                        grid-template-columns: 1fr;
                    }
                }
            </style>

            <main>
                <div>
                    <h3 style="color: #192879; text-align: center;">
                        អង្គភាពក្រោមឱវាទ
                    </h3>


                    <h3 style="color: #192879; font-weight: 400;">
                        ថ្នាក់ជាតិ
                    </h3>

                    <aside class="department-grid">
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានរដ្ឋបាល និងហិរញ្ញវត្ថុ" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានរដ្ឋបាល និងហិរញ្ញវត្ថុ </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានផែនការ និងគោលនយោបាយ" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានផែនការ និងគោលនយោបាយ </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានបច្ចេកទេស" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានបច្ចេកទេស </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានសាធារណការ" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានសាធារណការ </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានដឹកជញ្ជូនផ្លូវគោក" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានដឹកជញ្ជូនផ្លូវគោក </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានដឹកជញ្ជូនផ្លូវទឹក ផ្លូវសមុទ្រ និងកំពង់ផែ" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានដឹកជញ្ជូនផ្លូវទឹក ផ្លូវសមុទ្រ និងកំពង់ផែ </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានភស្តុភារកម្ម" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានភស្តុភារកម្ម </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានប្រព័ន្ធចម្រោះទឹកកខ្វក់" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានប្រព័ន្ធចម្រោះទឹកកខ្វក់ </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គនាយកដ្ឋានបច្ចេកវិទ្យា និងទំនាក់ទំនងសាធារណៈ" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គនាយកដ្ឋានបច្ចេកវិទ្យា និងទំនាក់ទំនងសាធារណៈ </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="វិទ្យាស្ថានតេជោសែនសាធារណការ និងដឹកជញ្ជូន (TSI)" />

                            <p style="color:#00000099; margin:0;">
                                វិទ្យាស្ថានតេជោសែនសាធារណការ និងដឹកជញ្ជូន (TSI) </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អគ្គាអធិការដ្ឋាន" />

                            <p style="color:#00000099; margin:0;">
                                អគ្គាអធិការដ្ឋាន </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="នាយកដ្ឋានសវនកម្មផ្ទៃក្នុង" />

                            <p style="color:#00000099; margin:0;">
                                នាយកដ្ឋានសវនកម្មផ្ទៃក្នុង </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="នាយកដ្ឋានផ្លូវដែក" />

                            <p style="color:#00000099; margin:0;">
                                នាយកដ្ឋានផ្លូវដែក </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="អង្គភាពលទ្ធកម្ម" />

                            <p style="color:#00000099; margin:0;">
                                អង្គភាពលទ្ធកម្ម </p>
                        </article>
                        <article class="department-card">
                            <img style="width:30px; height:auto; object-fit:contain;" src="/images/mpwt.png"
                                alt="មន្ទីរពិសោធន៍សំណង់​ និងសាធារណការ" />

                            <p style="color:#00000099; margin:0;">
                                មន្ទីរពិសោធន៍សំណង់​ និងសាធារណការ </p>
                        </article>
                    </aside>
                </div>

            </main>
            <!-- Partner Section Starts -->

            <main>
                <div>
                    <h3 style="color: #192879; text-align: center;">ដៃគូអភិវឌ្ឍន៍</h3>
                    <aside style="display: flex; justify-content: space-around; margin-top: 2rem;">
                        <img style="width: 70px; height: auto; object-fit: contain;"
                            src="/images/partners/world-bank.png" />
                        <img style="width: 70px; height: auto; object-fit: contain;"
                            src="/images/partners/Asian_Development_Bank_logo.png" />
                        <img style="width: 70px; height: auto; object-fit: contain;"
                            src="/images/partners/Seal_of_the_United_States.png" />
                        <img style="width: 70px; height: auto; object-fit: contain;" src="/images/partners/Japan.png" />
                        <img style="width: 70px; height: auto; object-fit: contain;" src="/images/partners/test.png" />
                        <img style="width: 70px; height: auto; object-fit: contain;"
                            src="/images/partners/testing.png" />
                    </aside>

                    <div style="margin-top:20px; border:2px solid red;">

                        <div class="ui-select ">

                            <select id="province" name="province" class="ui-select__field">

                                <option value="">
                                    ជ្រើសរើសខេត្ត </option>

                                <option value="phnom_penh">
                                    Phnom Penh </option>
                                <option value="siem_reap">
                                    Siem Reap </option>

                            </select>

                        </div>
                    </div>
                </div>
            </main>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    console.log("Partner loaded")
                });
            </script>
            <!-- Daily News Section Starts -->

            <style>

            </style>

            <main>
                <div
                    style="display: flex; flex-direction: column; gap: .5rem; justify-content: center; align-items: center;">
                    <h3>ព័ត៌មានសំខាន់ៗ</h3>
                    <p>តាមដានព័ត៌មានសំខាន់ៗរបស់ក្រសួងសាធារណការ និងដឹកជញ្ជូន</p>
                </div>

                <div style="width:100%; display:flex; gap:1rem; flex-wrap:wrap; padding-block: 10px; margin-top: 2rem;">
                    <!-- Left Side -->
                    <aside style="flex:1 1 500px; min-height:383px; position:relative; overflow:hidden;">
                        <img style="width:100%; height:100%; object-fit:cover; position:absolute; inset:0;"
                            src="/images/daily-news.png" />

                        <article
                            style="position:relative; z-index:2; width:100%; height:100%; display:flex; flex-direction:column; justify-content:flex-end; padding:1rem; gap:1rem; background:linear-gradient(to top, rgba(0,0,0,.7), rgba(0,0,0,.1));">
                            <p style="font-weight:500; color:white;">
                                ឯកឧត្តម ប៉េង ពោធិ៍នា រដ្ឋមន្ត្រីក្រសួងសាធារណការ និងដឹកជញ្ជូន
                                <br>
                                នឹងអញ្ជើញចូលរួមកិច្ចប្រជុំរដ្ឋមន្ត្រីដឹកជញ្ជូនអាស៊ាន ...
                            </p>

                            <footer
                                style="display:flex; justify-content:space-between; align-items:center; gap:1rem; flex-wrap:wrap;">
                                <aside style="display:flex; align-items:center; gap:.25rem;">
                                    <img style="width:17px; height:auto; object-fit:contain;"
                                        src="/images/icons/date.png" />
                                    <p style="color:white; margin:0;">២០-១១-២០២៥</p>
                                </aside>

                                <button
                                    style="padding:.3rem .5rem; background:#192879; border:none; border-radius:5px; color:white; font-size:.8rem; display:flex; align-items:center; gap:5px;">
                                    អានលម្អិត
                                    <i style="font-size:.5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </footer>
                        </article>
                    </aside>

                    <!-- Right Side -->
                    <aside style="flex:1 1 500px; display : flex; gap: 1rem; flex-direction: column;">
                        <article
                            style="width:100%; display:flex; gap:1rem; align-items:stretch; padding:1rem; box-shadow:0 2px 8px #0000001A; border-radius:5px;">
                            <aside style="width:160px; flex-shrink:0;">
                                <img style="width:100%; height:100%; object-fit:cover; border-radius:5px;"
                                    src="/images/daily-news-2.png" />
                            </aside>

                            <aside style="display:flex; flex-direction:column; gap:.25rem;">
                                <p style="font-size:1.2rem; font-weight:500;">
                                    ចំណុចគួរយល់ដឹងបន្ថែមទាក់ទងនឹងសុវត្ថិភាពក្នុងការធ្វើដំណើរលើផ្លូវល្បឿនលឿន...
                                </p>

                                <p>
                                    ចំណុចគួរយល់ដឹងបន្ថែមទាក់ទងនឹងសុវត្ថិភាពក្នុងការធ្វើដំណើរលើផ្លូវល្បឿនលឿនភ្នំពេញ-ក្រុងព្រះសីហនុ......
                                </p>

                                <div style="display:flex; gap:.5rem; align-items:center;">
                                    <img style="width:17px; height:auto; object-fit:contain;"
                                        src="/images/icons/date-dark.png" />
                                    <p>០៣-១១-២០២៥</p>
                                </div>

                                <button
                                    style="padding:.3rem .5rem; background:#192879; border:none; border-radius:5px; color:white; font-size:.8rem; display:flex; align-items:center; gap:5px; width:fit-content;">
                                    អានលម្អិត
                                    <i style="font-size:.5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </aside>


                        </article>

                        <article
                            style="width:100%; display:flex; gap:1rem; align-items:stretch; padding:1rem; box-shadow:0 2px 8px #0000001A; border-radius:5px;">
                            <aside style="width:160px; flex-shrink:0;">
                                <img style="width:100%; height:100%; object-fit:cover; border-radius:5px;"
                                    src="/images/daily-news-3.png" />
                            </aside>

                            <aside style="display:flex; flex-direction:column; gap:.25rem;">
                                <p style="font-size:1.2rem; font-weight:500;">
                                    លក្ខខណ្ឌគួរយល់ដឹងអំពី "ការកំណត់ល្បឿនបើកបរ" នៅលើផ្លូវល្បឿនលឿនភ្នំពេញ-ក្រុងព្រះសីហនុ
                                    ...
                                </p>

                                <p>
                                    លក្ខខណ្ឌគួរយល់ដឹងអំពី "ការកំណត់ល្បឿនបើកបរ"
                                    នៅលើផ្លូវល្បឿនលឿនភ្នំពេញ-ក្រុងព្រះសីហនុ ...
                                </p>

                                <div style="display:flex; gap:.5rem; align-items:center;">
                                    <img style="width:17px; height:auto; object-fit:contain;"
                                        src="/images/icons/date-dark.png" />
                                    <p>៣១-១០-២០២៥</p>
                                </div>

                                <button
                                    style="padding:.3rem .5rem; background:#192879; border:none; border-radius:5px; color:white; font-size:.8rem; display:flex; align-items:center; gap:5px; width:fit-content;">
                                    អានលម្អិត
                                    <i style="font-size:.5rem;" class="fa-solid fa-chevron-right"></i>
                                </button>
                            </aside>
                        </article>
                    </aside>
                </div>

            </main>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    console.log("Public service loaded")
                });
            </script>

            <style>

            </style>

            <main>
                <div>
                    <h3 style="color: #192879; text-align: center; font-weight: 400 !important;">
                        បណ្តាញសង្គមក្រសួងសាធារណការ និងដឹកជញ្ជូន</h3>
                    <aside style="display: flex; justify-content : center; margin-top: 1rem;">

                        <style>
                            a {
                                color: $s_color;
                                text-decoration: none;
                            }

                            .author {
                                position: absolute;
                                left: 35px;
                                top: 35px;
                            }

                            .outside-border {
                                /* Image Used to Display the BG */
                                background-image: url("https://webdevartur.com/wp-content/uploads/2022/08/ryan-klaus-8QjsdoXDsZs-unsplash-scaled.jpg");
                                background-repeat: no-repeat;
                                background-size: cover;
                                position: relative;
                                width: 212px;
                                height: 438px;
                                border: 0.6px solid white;
                                margin-left: -9px;
                                margin-top: 37px;
                                border-radius: 35px;
                            }

                            .silencer {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                width: 2px;
                                height: 13px;
                                left: -2px;
                                top: 81.5px;
                                opacity: 0.8;
                            }

                            .volume- {

                                &up,
                                &down {
                                    position: absolute;
                                    background-color: white;
                                    border-radius: 5px;
                                    height: 28px;
                                    width: 1px;
                                    left: -1.5px;
                                    opacity: 0.8;
                                }

                                &up {
                                    top: 110px;
                                }

                                &down {
                                    top: 148px;
                                }
                            }

                            .button-on {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                height: 45px;
                                width: 2px;
                                right: -2px;
                                opacity: 0.8;
                                top: 121px;
                            }

                            .inside-border {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                width: 100%;
                                height: 100%;
                                border: 6px solid black;
                                border-radius: 35px;
                            }

                            .camera {
                                display: flex;
                                justify-content: center;
                                position: relative;
                                width: 76px;
                                height: 20px;
                                background-color: black;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px;
                                top: 0;
                            }

                            .camera-dot {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                background-color: rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                width: 5px;
                                height: 5px;
                                left: 12px;
                                top: 5px;
                            }

                            .camera-dot-2 {
                                position: absolute;
                                background-color: #fff;
                                border-radius: 50%;
                                width: 4px;
                                height: 4px;
                                opacity: 0.3;
                                box-shadow: $box_shadow;
                                filter: blur(1px);
                            }

                            .camera-dot-3 {
                                position: absolute;
                                background-color: #000;
                                border-radius: 50%;
                                width: 1px;
                                height: 1px;
                                opacity: 0.7;
                            }

                            .camera-speaker {
                                position: absolute;
                                background-color: #fff;
                                width: 28px;
                                height: 1px;
                                border-radius: 20px;
                                top: -3px;
                                opacity: 0.2;
                            }

                            .lock {
                                position: absolute;
                                width: 12px;
                                height: 10px;
                                top: 34px;
                                background-color: white;
                                border-radius: 2px;
                            }

                            .lock-locked {
                                position: absolute;
                                width: 9px;
                                height: 15px;
                                border: 1.5px solid white;
                                border-radius: 20px;
                                top: -7px;
                                left: 1.7px;
                            }

                            .time {
                                position: absolute;
                                top: 46px;
                                font-size: 42px;
                                font-weight: 100;
                            }

                            .date {
                                position: absolute;
                                top: 92px;
                                font-size: 10px;
                                font-weight: 100;
                            }

                            .t-r-info {
                                display: flex;
                                gap: 5px;
                                position: absolute;
                                right: 17px;
                                top: 8px;
                                font-size: 10px;
                            }

                            .battery {
                                position: relative;
                                margin-top: 4px;
                                height: 7px;
                                width: 14px;
                                border: 0.7px solid rgba(255, 255, 255, 0.709);
                                border-radius: 2px;

                                .bar {
                                    width: calc(80% - 2px);
                                    height: calc(100% - 2px);
                                    background-color: #fff;
                                    margin: 1px;
                                    border-radius: 1px;
                                }

                                .dot {
                                    position: absolute;
                                    right: -2px;
                                    top: 1.5px;
                                    width: 1px;
                                    height: 3px;
                                    background-color: rgba(255, 255, 255, 0.709);
                                    border-radius: 2px;
                                }
                            }

                            .torch-outter {
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                left: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .light {
                                    width: 6px;
                                    height: 1px;
                                    background-color: #fff;
                                    border-radius: 3px;
                                }

                                .top {
                                    margin-top: 1px;
                                    width: 6px;
                                    height: 4px;
                                    background-color: #fff;
                                    border-top-left-radius: 0.5px;
                                    border-top-right-radius: 0.5px;
                                    border-bottom-left-radius: 50%;
                                    border-bottom-right-radius: 50%;
                                }

                                .switch-section {
                                    margin-top: -1px;
                                    width: 3px;
                                    height: 9px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .switch {
                                    position: absolute;
                                    top: 10px;
                                    left: 10.5px;
                                    border-radius: 50%;
                                    width: 2px;
                                    height: 4px;
                                    background-color: #000;

                                    .dot {
                                        position: absolute;
                                        bottom: 0.4px;
                                        left: 0.4px;
                                        width: 1.2px;
                                        height: 1.2px;
                                        background-color: #fff;
                                        border-radius: 50%;
                                    }
                                }
                            }

                            .camera-outter {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                right: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .box {
                                    width: 12px;
                                    height: 8px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .eye {
                                    position: absolute;
                                    background-color: #fff;
                                    width: 5px;
                                    height: 2px;
                                    top: 6px;
                                    border-top-left-radius: 1px;
                                    border-top-right-radius: 1px;
                                }

                                .circle {
                                    position: absolute;
                                    top: 9px;
                                    width: 5px;
                                    height: 5px;
                                    border: 1px solid #000;
                                    border-radius: 50%;
                                }

                                .dot {
                                    position: absolute;
                                    width: 5px;
                                    height: 5px;
                                    top: 7px;
                                    right: 5.2px;
                                    background-color: #000;
                                    border-radius: 50%;
                                    transform: scale(0.2);
                                }
                            }

                            .bottom-line {
                                position: absolute;
                                height: 2px;
                                width: 80px;
                                background-color: black;
                                bottom: 6px;
                                border-radius: 2px;
                                opacity: 0.8;
                            }
                        </style>

                        <section style="transform: scale(0.7);">
                            <div class="outside-border">
                                <div class="silencer"></div>
                                <div class="volume-up"></div>
                                <div class="volume-down"></div>
                                <div class="button-on"></div>
                                <div class="inside-border" style="overflow: hidden;">
                                    <!-- Place you image here -->
                                    <img />
                                    <img style="width: 100%; height: auto; object-fit: cover;"
                                        src="/images/socials/facebook.jpg" />

                                    <div class="bottom-line"></div>
                                </div>
                            </div>
                        </section>
                        <style>
                            a {
                                color: $s_color;
                                text-decoration: none;
                            }

                            .author {
                                position: absolute;
                                left: 35px;
                                top: 35px;
                            }

                            .outside-border {
                                /* Image Used to Display the BG */
                                background-image: url("https://webdevartur.com/wp-content/uploads/2022/08/ryan-klaus-8QjsdoXDsZs-unsplash-scaled.jpg");
                                background-repeat: no-repeat;
                                background-size: cover;
                                position: relative;
                                width: 212px;
                                height: 438px;
                                border: 0.6px solid white;
                                margin-left: -9px;
                                margin-top: 37px;
                                border-radius: 35px;
                            }

                            .silencer {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                width: 2px;
                                height: 13px;
                                left: -2px;
                                top: 81.5px;
                                opacity: 0.8;
                            }

                            .volume- {

                                &up,
                                &down {
                                    position: absolute;
                                    background-color: white;
                                    border-radius: 5px;
                                    height: 28px;
                                    width: 1px;
                                    left: -1.5px;
                                    opacity: 0.8;
                                }

                                &up {
                                    top: 110px;
                                }

                                &down {
                                    top: 148px;
                                }
                            }

                            .button-on {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                height: 45px;
                                width: 2px;
                                right: -2px;
                                opacity: 0.8;
                                top: 121px;
                            }

                            .inside-border {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                width: 100%;
                                height: 100%;
                                border: 6px solid black;
                                border-radius: 35px;
                            }

                            .camera {
                                display: flex;
                                justify-content: center;
                                position: relative;
                                width: 76px;
                                height: 20px;
                                background-color: black;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px;
                                top: 0;
                            }

                            .camera-dot {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                background-color: rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                width: 5px;
                                height: 5px;
                                left: 12px;
                                top: 5px;
                            }

                            .camera-dot-2 {
                                position: absolute;
                                background-color: #fff;
                                border-radius: 50%;
                                width: 4px;
                                height: 4px;
                                opacity: 0.3;
                                box-shadow: $box_shadow;
                                filter: blur(1px);
                            }

                            .camera-dot-3 {
                                position: absolute;
                                background-color: #000;
                                border-radius: 50%;
                                width: 1px;
                                height: 1px;
                                opacity: 0.7;
                            }

                            .camera-speaker {
                                position: absolute;
                                background-color: #fff;
                                width: 28px;
                                height: 1px;
                                border-radius: 20px;
                                top: -3px;
                                opacity: 0.2;
                            }

                            .lock {
                                position: absolute;
                                width: 12px;
                                height: 10px;
                                top: 34px;
                                background-color: white;
                                border-radius: 2px;
                            }

                            .lock-locked {
                                position: absolute;
                                width: 9px;
                                height: 15px;
                                border: 1.5px solid white;
                                border-radius: 20px;
                                top: -7px;
                                left: 1.7px;
                            }

                            .time {
                                position: absolute;
                                top: 46px;
                                font-size: 42px;
                                font-weight: 100;
                            }

                            .date {
                                position: absolute;
                                top: 92px;
                                font-size: 10px;
                                font-weight: 100;
                            }

                            .t-r-info {
                                display: flex;
                                gap: 5px;
                                position: absolute;
                                right: 17px;
                                top: 8px;
                                font-size: 10px;
                            }

                            .battery {
                                position: relative;
                                margin-top: 4px;
                                height: 7px;
                                width: 14px;
                                border: 0.7px solid rgba(255, 255, 255, 0.709);
                                border-radius: 2px;

                                .bar {
                                    width: calc(80% - 2px);
                                    height: calc(100% - 2px);
                                    background-color: #fff;
                                    margin: 1px;
                                    border-radius: 1px;
                                }

                                .dot {
                                    position: absolute;
                                    right: -2px;
                                    top: 1.5px;
                                    width: 1px;
                                    height: 3px;
                                    background-color: rgba(255, 255, 255, 0.709);
                                    border-radius: 2px;
                                }
                            }

                            .torch-outter {
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                left: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .light {
                                    width: 6px;
                                    height: 1px;
                                    background-color: #fff;
                                    border-radius: 3px;
                                }

                                .top {
                                    margin-top: 1px;
                                    width: 6px;
                                    height: 4px;
                                    background-color: #fff;
                                    border-top-left-radius: 0.5px;
                                    border-top-right-radius: 0.5px;
                                    border-bottom-left-radius: 50%;
                                    border-bottom-right-radius: 50%;
                                }

                                .switch-section {
                                    margin-top: -1px;
                                    width: 3px;
                                    height: 9px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .switch {
                                    position: absolute;
                                    top: 10px;
                                    left: 10.5px;
                                    border-radius: 50%;
                                    width: 2px;
                                    height: 4px;
                                    background-color: #000;

                                    .dot {
                                        position: absolute;
                                        bottom: 0.4px;
                                        left: 0.4px;
                                        width: 1.2px;
                                        height: 1.2px;
                                        background-color: #fff;
                                        border-radius: 50%;
                                    }
                                }
                            }

                            .camera-outter {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                right: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .box {
                                    width: 12px;
                                    height: 8px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .eye {
                                    position: absolute;
                                    background-color: #fff;
                                    width: 5px;
                                    height: 2px;
                                    top: 6px;
                                    border-top-left-radius: 1px;
                                    border-top-right-radius: 1px;
                                }

                                .circle {
                                    position: absolute;
                                    top: 9px;
                                    width: 5px;
                                    height: 5px;
                                    border: 1px solid #000;
                                    border-radius: 50%;
                                }

                                .dot {
                                    position: absolute;
                                    width: 5px;
                                    height: 5px;
                                    top: 7px;
                                    right: 5.2px;
                                    background-color: #000;
                                    border-radius: 50%;
                                    transform: scale(0.2);
                                }
                            }

                            .bottom-line {
                                position: absolute;
                                height: 2px;
                                width: 80px;
                                background-color: black;
                                bottom: 6px;
                                border-radius: 2px;
                                opacity: 0.8;
                            }
                        </style>

                        <section style="transform: scale(0.8);">
                            <div class="outside-border">
                                <div class="silencer"></div>
                                <div class="volume-up"></div>
                                <div class="volume-down"></div>
                                <div class="button-on"></div>
                                <div class="inside-border" style="overflow: hidden;">
                                    <!-- Place you image here -->
                                    <img />
                                    <img style="width: 100%; height: auto; object-fit: cover;"
                                        src="/images/socials/facebook.jpg" />

                                    <div class="bottom-line"></div>
                                </div>
                            </div>
                        </section>


                        <style>
                            a {
                                color: $s_color;
                                text-decoration: none;
                            }

                            .author {
                                position: absolute;
                                left: 35px;
                                top: 35px;
                            }

                            .outside-border {
                                /* Image Used to Display the BG */
                                background-image: url("https://webdevartur.com/wp-content/uploads/2022/08/ryan-klaus-8QjsdoXDsZs-unsplash-scaled.jpg");
                                background-repeat: no-repeat;
                                background-size: cover;
                                position: relative;
                                width: 212px;
                                height: 438px;
                                border: 0.6px solid white;
                                margin-left: -9px;
                                margin-top: 37px;
                                border-radius: 35px;
                            }

                            .silencer {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                width: 2px;
                                height: 13px;
                                left: -2px;
                                top: 81.5px;
                                opacity: 0.8;
                            }

                            .volume- {

                                &up,
                                &down {
                                    position: absolute;
                                    background-color: white;
                                    border-radius: 5px;
                                    height: 28px;
                                    width: 1px;
                                    left: -1.5px;
                                    opacity: 0.8;
                                }

                                &up {
                                    top: 110px;
                                }

                                &down {
                                    top: 148px;
                                }
                            }

                            .button-on {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                height: 45px;
                                width: 2px;
                                right: -2px;
                                opacity: 0.8;
                                top: 121px;
                            }

                            .inside-border {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                width: 100%;
                                height: 100%;
                                border: 6px solid black;
                                border-radius: 35px;
                            }

                            .camera {
                                display: flex;
                                justify-content: center;
                                position: relative;
                                width: 76px;
                                height: 20px;
                                background-color: black;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px;
                                top: 0;
                            }

                            .camera-dot {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                background-color: rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                width: 5px;
                                height: 5px;
                                left: 12px;
                                top: 5px;
                            }

                            .camera-dot-2 {
                                position: absolute;
                                background-color: #fff;
                                border-radius: 50%;
                                width: 4px;
                                height: 4px;
                                opacity: 0.3;
                                box-shadow: $box_shadow;
                                filter: blur(1px);
                            }

                            .camera-dot-3 {
                                position: absolute;
                                background-color: #000;
                                border-radius: 50%;
                                width: 1px;
                                height: 1px;
                                opacity: 0.7;
                            }

                            .camera-speaker {
                                position: absolute;
                                background-color: #fff;
                                width: 28px;
                                height: 1px;
                                border-radius: 20px;
                                top: -3px;
                                opacity: 0.2;
                            }

                            .lock {
                                position: absolute;
                                width: 12px;
                                height: 10px;
                                top: 34px;
                                background-color: white;
                                border-radius: 2px;
                            }

                            .lock-locked {
                                position: absolute;
                                width: 9px;
                                height: 15px;
                                border: 1.5px solid white;
                                border-radius: 20px;
                                top: -7px;
                                left: 1.7px;
                            }

                            .time {
                                position: absolute;
                                top: 46px;
                                font-size: 42px;
                                font-weight: 100;
                            }

                            .date {
                                position: absolute;
                                top: 92px;
                                font-size: 10px;
                                font-weight: 100;
                            }

                            .t-r-info {
                                display: flex;
                                gap: 5px;
                                position: absolute;
                                right: 17px;
                                top: 8px;
                                font-size: 10px;
                            }

                            .battery {
                                position: relative;
                                margin-top: 4px;
                                height: 7px;
                                width: 14px;
                                border: 0.7px solid rgba(255, 255, 255, 0.709);
                                border-radius: 2px;

                                .bar {
                                    width: calc(80% - 2px);
                                    height: calc(100% - 2px);
                                    background-color: #fff;
                                    margin: 1px;
                                    border-radius: 1px;
                                }

                                .dot {
                                    position: absolute;
                                    right: -2px;
                                    top: 1.5px;
                                    width: 1px;
                                    height: 3px;
                                    background-color: rgba(255, 255, 255, 0.709);
                                    border-radius: 2px;
                                }
                            }

                            .torch-outter {
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                left: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .light {
                                    width: 6px;
                                    height: 1px;
                                    background-color: #fff;
                                    border-radius: 3px;
                                }

                                .top {
                                    margin-top: 1px;
                                    width: 6px;
                                    height: 4px;
                                    background-color: #fff;
                                    border-top-left-radius: 0.5px;
                                    border-top-right-radius: 0.5px;
                                    border-bottom-left-radius: 50%;
                                    border-bottom-right-radius: 50%;
                                }

                                .switch-section {
                                    margin-top: -1px;
                                    width: 3px;
                                    height: 9px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .switch {
                                    position: absolute;
                                    top: 10px;
                                    left: 10.5px;
                                    border-radius: 50%;
                                    width: 2px;
                                    height: 4px;
                                    background-color: #000;

                                    .dot {
                                        position: absolute;
                                        bottom: 0.4px;
                                        left: 0.4px;
                                        width: 1.2px;
                                        height: 1.2px;
                                        background-color: #fff;
                                        border-radius: 50%;
                                    }
                                }
                            }

                            .camera-outter {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                right: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .box {
                                    width: 12px;
                                    height: 8px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .eye {
                                    position: absolute;
                                    background-color: #fff;
                                    width: 5px;
                                    height: 2px;
                                    top: 6px;
                                    border-top-left-radius: 1px;
                                    border-top-right-radius: 1px;
                                }

                                .circle {
                                    position: absolute;
                                    top: 9px;
                                    width: 5px;
                                    height: 5px;
                                    border: 1px solid #000;
                                    border-radius: 50%;
                                }

                                .dot {
                                    position: absolute;
                                    width: 5px;
                                    height: 5px;
                                    top: 7px;
                                    right: 5.2px;
                                    background-color: #000;
                                    border-radius: 50%;
                                    transform: scale(0.2);
                                }
                            }

                            .bottom-line {
                                position: absolute;
                                height: 2px;
                                width: 80px;
                                background-color: black;
                                bottom: 6px;
                                border-radius: 2px;
                                opacity: 0.8;
                            }
                        </style>

                        <section style="transform: scale(1);">
                            <div class="outside-border">
                                <div class="silencer"></div>
                                <div class="volume-up"></div>
                                <div class="volume-down"></div>
                                <div class="button-on"></div>
                                <div class="inside-border" style="overflow: hidden;">
                                    <!-- Place you image here -->
                                    <img />
                                    <img style="width: 100%; height: auto; object-fit: cover;"
                                        src="/images/socials/facebook.jpg" />

                                    <div class="bottom-line"></div>
                                </div>
                            </div>
                        </section>


                        <style>
                            a {
                                color: $s_color;
                                text-decoration: none;
                            }

                            .author {
                                position: absolute;
                                left: 35px;
                                top: 35px;
                            }

                            .outside-border {
                                /* Image Used to Display the BG */
                                background-image: url("https://webdevartur.com/wp-content/uploads/2022/08/ryan-klaus-8QjsdoXDsZs-unsplash-scaled.jpg");
                                background-repeat: no-repeat;
                                background-size: cover;
                                position: relative;
                                width: 212px;
                                height: 438px;
                                border: 0.6px solid white;
                                margin-left: -9px;
                                margin-top: 37px;
                                border-radius: 35px;
                            }

                            .silencer {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                width: 2px;
                                height: 13px;
                                left: -2px;
                                top: 81.5px;
                                opacity: 0.8;
                            }

                            .volume- {

                                &up,
                                &down {
                                    position: absolute;
                                    background-color: white;
                                    border-radius: 5px;
                                    height: 28px;
                                    width: 1px;
                                    left: -1.5px;
                                    opacity: 0.8;
                                }

                                &up {
                                    top: 110px;
                                }

                                &down {
                                    top: 148px;
                                }
                            }

                            .button-on {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                height: 45px;
                                width: 2px;
                                right: -2px;
                                opacity: 0.8;
                                top: 121px;
                            }

                            .inside-border {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                width: 100%;
                                height: 100%;
                                border: 6px solid black;
                                border-radius: 35px;
                            }

                            .camera {
                                display: flex;
                                justify-content: center;
                                position: relative;
                                width: 76px;
                                height: 20px;
                                background-color: black;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px;
                                top: 0;
                            }

                            .camera-dot {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                background-color: rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                width: 5px;
                                height: 5px;
                                left: 12px;
                                top: 5px;
                            }

                            .camera-dot-2 {
                                position: absolute;
                                background-color: #fff;
                                border-radius: 50%;
                                width: 4px;
                                height: 4px;
                                opacity: 0.3;
                                box-shadow: $box_shadow;
                                filter: blur(1px);
                            }

                            .camera-dot-3 {
                                position: absolute;
                                background-color: #000;
                                border-radius: 50%;
                                width: 1px;
                                height: 1px;
                                opacity: 0.7;
                            }

                            .camera-speaker {
                                position: absolute;
                                background-color: #fff;
                                width: 28px;
                                height: 1px;
                                border-radius: 20px;
                                top: -3px;
                                opacity: 0.2;
                            }

                            .lock {
                                position: absolute;
                                width: 12px;
                                height: 10px;
                                top: 34px;
                                background-color: white;
                                border-radius: 2px;
                            }

                            .lock-locked {
                                position: absolute;
                                width: 9px;
                                height: 15px;
                                border: 1.5px solid white;
                                border-radius: 20px;
                                top: -7px;
                                left: 1.7px;
                            }

                            .time {
                                position: absolute;
                                top: 46px;
                                font-size: 42px;
                                font-weight: 100;
                            }

                            .date {
                                position: absolute;
                                top: 92px;
                                font-size: 10px;
                                font-weight: 100;
                            }

                            .t-r-info {
                                display: flex;
                                gap: 5px;
                                position: absolute;
                                right: 17px;
                                top: 8px;
                                font-size: 10px;
                            }

                            .battery {
                                position: relative;
                                margin-top: 4px;
                                height: 7px;
                                width: 14px;
                                border: 0.7px solid rgba(255, 255, 255, 0.709);
                                border-radius: 2px;

                                .bar {
                                    width: calc(80% - 2px);
                                    height: calc(100% - 2px);
                                    background-color: #fff;
                                    margin: 1px;
                                    border-radius: 1px;
                                }

                                .dot {
                                    position: absolute;
                                    right: -2px;
                                    top: 1.5px;
                                    width: 1px;
                                    height: 3px;
                                    background-color: rgba(255, 255, 255, 0.709);
                                    border-radius: 2px;
                                }
                            }

                            .torch-outter {
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                left: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .light {
                                    width: 6px;
                                    height: 1px;
                                    background-color: #fff;
                                    border-radius: 3px;
                                }

                                .top {
                                    margin-top: 1px;
                                    width: 6px;
                                    height: 4px;
                                    background-color: #fff;
                                    border-top-left-radius: 0.5px;
                                    border-top-right-radius: 0.5px;
                                    border-bottom-left-radius: 50%;
                                    border-bottom-right-radius: 50%;
                                }

                                .switch-section {
                                    margin-top: -1px;
                                    width: 3px;
                                    height: 9px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .switch {
                                    position: absolute;
                                    top: 10px;
                                    left: 10.5px;
                                    border-radius: 50%;
                                    width: 2px;
                                    height: 4px;
                                    background-color: #000;

                                    .dot {
                                        position: absolute;
                                        bottom: 0.4px;
                                        left: 0.4px;
                                        width: 1.2px;
                                        height: 1.2px;
                                        background-color: #fff;
                                        border-radius: 50%;
                                    }
                                }
                            }

                            .camera-outter {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                right: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .box {
                                    width: 12px;
                                    height: 8px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .eye {
                                    position: absolute;
                                    background-color: #fff;
                                    width: 5px;
                                    height: 2px;
                                    top: 6px;
                                    border-top-left-radius: 1px;
                                    border-top-right-radius: 1px;
                                }

                                .circle {
                                    position: absolute;
                                    top: 9px;
                                    width: 5px;
                                    height: 5px;
                                    border: 1px solid #000;
                                    border-radius: 50%;
                                }

                                .dot {
                                    position: absolute;
                                    width: 5px;
                                    height: 5px;
                                    top: 7px;
                                    right: 5.2px;
                                    background-color: #000;
                                    border-radius: 50%;
                                    transform: scale(0.2);
                                }
                            }

                            .bottom-line {
                                position: absolute;
                                height: 2px;
                                width: 80px;
                                background-color: black;
                                bottom: 6px;
                                border-radius: 2px;
                                opacity: 0.8;
                            }
                        </style>

                        <section style="transform: scale(0.8);">
                            <div class="outside-border">
                                <div class="silencer"></div>
                                <div class="volume-up"></div>
                                <div class="volume-down"></div>
                                <div class="button-on"></div>
                                <div class="inside-border" style="overflow: hidden;">
                                    <!-- Place you image here -->
                                    <img />
                                    <img style="width: 100%; height: auto; object-fit: cover;"
                                        src="/images/socials/facebook.jpg" />

                                    <div class="bottom-line"></div>
                                </div>
                            </div>
                        </section>
                        <style>
                            a {
                                color: $s_color;
                                text-decoration: none;
                            }

                            .author {
                                position: absolute;
                                left: 35px;
                                top: 35px;
                            }

                            .outside-border {
                                /* Image Used to Display the BG */
                                background-image: url("https://webdevartur.com/wp-content/uploads/2022/08/ryan-klaus-8QjsdoXDsZs-unsplash-scaled.jpg");
                                background-repeat: no-repeat;
                                background-size: cover;
                                position: relative;
                                width: 212px;
                                height: 438px;
                                border: 0.6px solid white;
                                margin-left: -9px;
                                margin-top: 37px;
                                border-radius: 35px;
                            }

                            .silencer {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                width: 2px;
                                height: 13px;
                                left: -2px;
                                top: 81.5px;
                                opacity: 0.8;
                            }

                            .volume- {

                                &up,
                                &down {
                                    position: absolute;
                                    background-color: white;
                                    border-radius: 5px;
                                    height: 28px;
                                    width: 1px;
                                    left: -1.5px;
                                    opacity: 0.8;
                                }

                                &up {
                                    top: 110px;
                                }

                                &down {
                                    top: 148px;
                                }
                            }

                            .button-on {
                                position: absolute;
                                background-color: white;
                                border-radius: 5px;
                                height: 45px;
                                width: 2px;
                                right: -2px;
                                opacity: 0.8;
                                top: 121px;
                            }

                            .inside-border {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                width: 100%;
                                height: 100%;
                                border: 6px solid black;
                                border-radius: 35px;
                            }

                            .camera {
                                display: flex;
                                justify-content: center;
                                position: relative;
                                width: 76px;
                                height: 20px;
                                background-color: black;
                                border-bottom-left-radius: 15px;
                                border-bottom-right-radius: 15px;
                                top: 0;
                            }

                            .camera-dot {
                                position: relative;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                background-color: rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                width: 5px;
                                height: 5px;
                                left: 12px;
                                top: 5px;
                            }

                            .camera-dot-2 {
                                position: absolute;
                                background-color: #fff;
                                border-radius: 50%;
                                width: 4px;
                                height: 4px;
                                opacity: 0.3;
                                box-shadow: $box_shadow;
                                filter: blur(1px);
                            }

                            .camera-dot-3 {
                                position: absolute;
                                background-color: #000;
                                border-radius: 50%;
                                width: 1px;
                                height: 1px;
                                opacity: 0.7;
                            }

                            .camera-speaker {
                                position: absolute;
                                background-color: #fff;
                                width: 28px;
                                height: 1px;
                                border-radius: 20px;
                                top: -3px;
                                opacity: 0.2;
                            }

                            .lock {
                                position: absolute;
                                width: 12px;
                                height: 10px;
                                top: 34px;
                                background-color: white;
                                border-radius: 2px;
                            }

                            .lock-locked {
                                position: absolute;
                                width: 9px;
                                height: 15px;
                                border: 1.5px solid white;
                                border-radius: 20px;
                                top: -7px;
                                left: 1.7px;
                            }

                            .time {
                                position: absolute;
                                top: 46px;
                                font-size: 42px;
                                font-weight: 100;
                            }

                            .date {
                                position: absolute;
                                top: 92px;
                                font-size: 10px;
                                font-weight: 100;
                            }

                            .t-r-info {
                                display: flex;
                                gap: 5px;
                                position: absolute;
                                right: 17px;
                                top: 8px;
                                font-size: 10px;
                            }

                            .battery {
                                position: relative;
                                margin-top: 4px;
                                height: 7px;
                                width: 14px;
                                border: 0.7px solid rgba(255, 255, 255, 0.709);
                                border-radius: 2px;

                                .bar {
                                    width: calc(80% - 2px);
                                    height: calc(100% - 2px);
                                    background-color: #fff;
                                    margin: 1px;
                                    border-radius: 1px;
                                }

                                .dot {
                                    position: absolute;
                                    right: -2px;
                                    top: 1.5px;
                                    width: 1px;
                                    height: 3px;
                                    background-color: rgba(255, 255, 255, 0.709);
                                    border-radius: 2px;
                                }
                            }

                            .torch-outter {
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                align-items: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                left: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .light {
                                    width: 6px;
                                    height: 1px;
                                    background-color: #fff;
                                    border-radius: 3px;
                                }

                                .top {
                                    margin-top: 1px;
                                    width: 6px;
                                    height: 4px;
                                    background-color: #fff;
                                    border-top-left-radius: 0.5px;
                                    border-top-right-radius: 0.5px;
                                    border-bottom-left-radius: 50%;
                                    border-bottom-right-radius: 50%;
                                }

                                .switch-section {
                                    margin-top: -1px;
                                    width: 3px;
                                    height: 9px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .switch {
                                    position: absolute;
                                    top: 10px;
                                    left: 10.5px;
                                    border-radius: 50%;
                                    width: 2px;
                                    height: 4px;
                                    background-color: #000;

                                    .dot {
                                        position: absolute;
                                        bottom: 0.4px;
                                        left: 0.4px;
                                        width: 1.2px;
                                        height: 1.2px;
                                        background-color: #fff;
                                        border-radius: 50%;
                                    }
                                }
                            }

                            .camera-outter {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                position: absolute;
                                width: 23px;
                                height: 23px;
                                background-color: rgba(255, 255, 255, 0.202);
                                right: 29px;
                                bottom: 30px;
                                border-radius: 50%;
                                cursor: pointer;
                                transition-duration: 250ms;

                                &:hover {
                                    scale: 1.3
                                }

                                .box {
                                    width: 12px;
                                    height: 8px;
                                    background-color: #fff;
                                    border-radius: 1px;
                                }

                                .eye {
                                    position: absolute;
                                    background-color: #fff;
                                    width: 5px;
                                    height: 2px;
                                    top: 6px;
                                    border-top-left-radius: 1px;
                                    border-top-right-radius: 1px;
                                }

                                .circle {
                                    position: absolute;
                                    top: 9px;
                                    width: 5px;
                                    height: 5px;
                                    border: 1px solid #000;
                                    border-radius: 50%;
                                }

                                .dot {
                                    position: absolute;
                                    width: 5px;
                                    height: 5px;
                                    top: 7px;
                                    right: 5.2px;
                                    background-color: #000;
                                    border-radius: 50%;
                                    transform: scale(0.2);
                                }
                            }

                            .bottom-line {
                                position: absolute;
                                height: 2px;
                                width: 80px;
                                background-color: black;
                                bottom: 6px;
                                border-radius: 2px;
                                opacity: 0.8;
                            }
                        </style>

                        <section style="transform: scale(0.7);">
                            <div class="outside-border">
                                <div class="silencer"></div>
                                <div class="volume-up"></div>
                                <div class="volume-down"></div>
                                <div class="button-on"></div>
                                <div class="inside-border" style="overflow: hidden;">
                                    <!-- Place you image here -->
                                    <img />
                                    <img style="width: 100%; height: auto; object-fit: cover;"
                                        src="/images/socials/facebook.jpg" />

                                    <div class="bottom-line"></div>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </main>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    console.log("Partner loaded")
                });
            </script>

            <style>
                .stats-layout {
                    display: flex;
                    gap: 24px;
                    margin-top: 1rem;
                    align-items: stretch;
                }

                .chart-left,
                .chart-right {
                    flex: 1;
                }

                /* Right side: 2 columns × 2 rows */
                .chart-right {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 20px;
                }

                .chart-card {
                    background: #fff;
                    border: 1px solid #e5e5e5;
                    border-radius: 12px;
                    padding: 16px;
                    height: 200px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    position: relative;
                }

                .chart-card canvas,
                .chart-left canvas {
                    width: 100% !important;
                    height: 100% !important;
                    max-width: 100%;
                    max-height: 100%;
                }

                .chart-left {
                    background: #fff;
                    border: 1px solid #e5e5e5;
                    border-radius: 12px;
                    padding: 16px;
                    min-height: 300px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                /* Tablet */
                @media (max-width: 992px) {
                    .stats-layout {
                        flex-direction: column;
                    }

                    .chart-right {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .chart-left {
                        min-height: 350px;
                    }
                }

                /* Mobile */
                @media (max-width: 576px) {
                    .chart-right {
                        grid-template-columns: 1fr;
                    }

                    .chart-card {
                        min-height: 250px;
                    }
                }
            </style>

            <main>
                <aside
                    style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;">
                    <h3 style="color: #192879; text-align: center; font-weight: 400 !important;">ស្ថិតិសំខាន់ៗ</h3>
                    <p>ស្ថិតិសំខាន់ៗបង្ហាញពីសមិទ្ធផលក្នុងវិស័យសាធារណការ និងដឹកជញ្ជូន</p>
                </aside>

                <aside class="stats-layout">
                    <!-- Left Side -->
                    <article class="chart-left">
                        <canvas id="myChart"></canvas>
                    </article>

                    <!-- Right Side -->
                    <article class="chart-right">
                        <div class="chart-card">
                            <canvas id="chart1"></canvas>
                        </div>

                        <div class="chart-card">
                            <canvas id="chart2"></canvas>
                        </div>

                        <div class="chart-card">
                            <canvas id="chart3"></canvas>
                        </div>

                        <div class="chart-card">
                            <canvas id="chart4"></canvas>
                        </div>
                    </article>
                </aside>
            </main>

            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    // ============================================================
                    // 1. LEFT CHART - Bar Chart (Monthly Vehicle Registrations)
                    // ============================================================
                    const ctx = document.getElementById('myChart');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['មករា', 'កុម្ភៈ', 'មីនា', 'មេសា', 'ឧសភា', 'មិថុនា'],
                            datasets: [{
                                label: 'ចុះបញ្ជីយានយន្ត',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: 'rgba(25, 40, 121, 0.7)',
                                borderColor: '#192879',
                                borderWidth: 2,
                                borderRadius: 6
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    labels: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 12
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 11
                                        }
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 11
                                        }
                                    }
                                }
                            }
                        }
                    });

                    // ============================================================
                    // 2. CHART 1 (Top-Left) - Doughnut Chart (Vehicle Types)
                    // ============================================================
                    const ctx1 = document.getElementById('chart1');
                    new Chart(ctx1, {
                        type: 'doughnut',
                        data: {
                            labels: ['ម៉ូតូ', 'រថយន្ត', 'ឡានដឹកទំនិញ', 'ឡានក្រុង'],
                            datasets: [{
                                data: [45, 30, 15, 10],
                                backgroundColor: ['#192879', '#2E4A9E', '#4A6FB5', '#6B8FC9'],
                                borderWidth: 2,
                                borderColor: '#fff'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 10
                                        },
                                        boxWidth: 12,
                                        padding: 8
                                    }
                                }
                            },
                            cutout: '65%'
                        }
                    });

                    // ============================================================
                    // 3. CHART 2 (Top-Right) - Line Chart (Road Accidents Trend)
                    // ============================================================
                    const ctx2 = document.getElementById('chart2');
                    new Chart(ctx2, {
                        type: 'line',
                        data: {
                            labels: ['ចន្ទ', 'អង្គារ', 'ពុធ', 'ព្រហ', 'សុក្រ', 'សៅរ៍', 'អាទិ'],
                            datasets: [{
                                label: 'គ្រោះថ្នាក់ចរាចរ',
                                data: [5, 8, 3, 7, 9, 12, 6],
                                borderColor: '#E74C3C',
                                backgroundColor: 'rgba(231, 76, 60, 0.1)',
                                fill: true,
                                tension: 0.3,
                                pointBackgroundColor: '#E74C3C',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2,
                                pointRadius: 4
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    labels: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 10
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 9
                                        }
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 9
                                        }
                                    }
                                }
                            }
                        }
                    });

                    // ============================================================
                    // 4. CHART 3 (Bottom-Left) - Pie Chart (Infrastructure Projects)
                    // ============================================================
                    const ctx3 = document.getElementById('chart3');
                    new Chart(ctx3, {
                        type: 'pie',
                        data: {
                            labels: ['ស្ពាន', 'ផ្លូវ', 'ប្រឡាយ', 'អគារ'],
                            datasets: [{
                                data: [25, 40, 20, 15],
                                backgroundColor: ['#2ECC71', '#3498DB', '#F39C12', '#9B59B6'],
                                borderWidth: 2,
                                borderColor: '#fff'
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 10
                                        },
                                        boxWidth: 12,
                                        padding: 8
                                    }
                                }
                            }
                        }
                    });

                    // ============================================================
                    // 5. CHART 4 (Bottom-Right) - Horizontal Bar Chart (Budget Allocation)
                    // ============================================================
                    const ctx4 = document.getElementById('chart4');
                    new Chart(ctx4, {
                        type: 'bar',
                        data: {
                            labels: ['ថវិកាឆ្នាំ២០២៤', 'ថវិកាឆ្នាំ២០២៥', 'ថវិកាឆ្នាំ២០២៦'],
                            datasets: [{
                                label: 'ថវិកា (លានរៀល)',
                                data: [120, 180, 250],
                                backgroundColor: ['#F1C40F', '#E67E22', '#1ABC9C'],
                                borderRadius: 6,
                                borderSkipped: false
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    labels: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 10
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    ticks: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 9
                                        }
                                    }
                                },
                                y: {
                                    ticks: {
                                        font: {
                                            family: '"Kantumruy Pro", "Google Sans", sans-serif',
                                            size: 9
                                        }
                                    }
                                }
                            }
                        }
                    });
                });

                // ============================================================
                // Optional: Product fetch function (kept for reference)
                // ============================================================
                const handleFetchProducts = async () => {
                    try {
                        const res = await fetch('https://dummyjson.com/products');
                        const data = await res.json();

                        const container = document.getElementById("product");

                        if (!container) return;

                        container.innerHTML = data.products.map(product => `
            <div style="
                border: 1px solid #ddd;
                padding: 10px;
                margin: 10px;
                width: 250px;
                display: inline-block;
                vertical-align: top;
                border-radius: 8px;
            ">
                <img src="/${product.thumbnail}" alt="${product.title}" style="width:100%; height:150px; object-fit:cover; border-radius:6px;">
                <h4 style="margin: 8px 0;">${product.title}</h4>
                <p style="font-size: 14px; color: #555;">${product.description.slice(0, 60)}...</p>
                <strong>$${product.price}</strong>
            </div>
        `).join("");

                    } catch (error) {
                        console.error("Fetch error:", error);
                    }
                };
            </script>

            <style>
                .card-carousel {
                    position: relative;
                    overflow: hidden;
                    padding-bottom: 50px;
                }

                /* Track */
                .card-track {
                    display: flex;
                    gap: 16px;
                    overflow-x: auto;
                    scroll-behavior: smooth;
                    padding-bottom: 10px;
                }

                .card-track::-webkit-scrollbar {
                    display: none;
                }

                /* Card */
                .card {
                    flex: 0 0 auto;
                    width: 264px;
                    text-decoration: none;
                    color: inherit;
                }

                .card article {
                    width: 264px;
                    height: 258px;
                    position: relative;
                    border-radius: 10px;
                    overflow: hidden;
                    background: #ccc;
                }

                .card img {
                    position: absolute;
                    inset: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                /* Overlay */
                .overlay {
                    position: absolute;
                    inset: 0;
                    display: flex;
                    align-items: flex-end;
                    background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
                }

                .overlay p {
                    color: white;
                    margin: 0;
                    font-size: 14px;
                }

                /* Badge */
                .badge {
                    position: absolute;
                    right: 10px;
                    bottom: 10px;
                    width: 16px;
                    height: 16px;
                    background: #192879;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .badge i {
                    color: white;
                    font-size: 6px;
                    transform: rotate(40deg);
                }

                /* Controls */
                .controls {
                    position: absolute;
                    bottom: 20px;
                    left: 0;
                    right: 0;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                /* Buttons */
                .buttons button {
                    border: none;
                    background: #192879;
                    color: white;
                    width: 32px;
                    height: 32px;
                    border-radius: 50%;
                    cursor: pointer;
                }

                /* Dots */
                .dots {
                    display: flex;
                    gap: 6px;
                    padding-right: 10px;
                }

                .dots button {
                    width: 8px;
                    height: 8px;
                    border-radius: 50%;
                    border: none;
                    background: #ccc;
                    cursor: pointer;
                }

                .dots button.active {
                    background: #192879;
                }
            </style>

            <main>
                <aside
                    style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;">
                    <h3 style="color: #192879; text-align: center; font-weight: 400 !important;">ព័ត៌មានប្រចាំថ្ងៃ</h3>
                    <p>តាមដានព័ត៌មានប្រចាំថ្ងៃរបស់ក្រសួងសាធារណការ និងដឹកជញ្ជូន</p>
                </aside>

                <aside class="card-carousel">

                    <!-- Track -->
                    <div class="card-track" id="cardTrack">


                        <a href="#" class="card">

                            <article>

                                <img src="/images/carousel/item-1.png" alt="thumbnail">

                                <div class="overlay">
                                    <p style="
                                padding: 1rem;
                                color: #fff;
                                background: rgba(255, 255, 255, 0.15);
                                backdrop-filter: blur(10px);
                                -webkit-backdrop-filter: blur(10px);
                            ">
                                        ឆៀកចល័តតាមខេត្ត នឹងដំណើរការ នៅខេត្តត្បូងឃ្មុំ ពោធិ៍សាត់ កោះកុង ... </p>
                                </div>

                                <div class="badge">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </div>

                            </article>

                        </a>


                        <a href="#" class="card">

                            <article>

                                <img src="/images/carousel/item-2.png" alt="thumbnail">

                                <div class="overlay">
                                    <p style="
                                padding: 1rem;
                                color: #fff;
                                background: rgba(255, 255, 255, 0.15);
                                backdrop-filter: blur(10px);
                                -webkit-backdrop-filter: blur(10px);
                            ">
                                        ឆៀកចល័តតាមខេត្ត នឹងដំណើរការ នៅខេត្តត្បូងឃ្មុំ ពោធិ៍សាត់ កោះកុង ... </p>
                                </div>

                                <div class="badge">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </div>

                            </article>

                        </a>


                        <a href="#" class="card">

                            <article>

                                <img src="/images/carousel/item-3.png" alt="thumbnail">

                                <div class="overlay">
                                    <p style="
                                padding: 1rem;
                                color: #fff;
                                background: rgba(255, 255, 255, 0.15);
                                backdrop-filter: blur(10px);
                                -webkit-backdrop-filter: blur(10px);
                            ">
                                        ឆៀកចល័តតាមខេត្ត នឹងដំណើរការ នៅខេត្តត្បូងឃ្មុំ ពោធិ៍សាត់ កោះកុង ... </p>
                                </div>

                                <div class="badge">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </div>

                            </article>

                        </a>


                        <a href="#" class="card">

                            <article>

                                <img src="/images/carousel/item-4.png" alt="thumbnail">

                                <div class="overlay">
                                    <p style="
                                padding: 1rem;
                                color: #fff;
                                background: rgba(255, 255, 255, 0.15);
                                backdrop-filter: blur(10px);
                                -webkit-backdrop-filter: blur(10px);
                            ">
                                        ឆៀកចល័តតាមខេត្ត នឹងដំណើរការ នៅខេត្តត្បូងឃ្មុំ ពោធិ៍សាត់ កោះកុង ... </p>
                                </div>

                                <div class="badge">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </div>

                            </article>

                        </a>


                        <a href="/documents" class="card">

                            <article>

                                <img src="/images/carousel/item-1.png" alt="thumbnail">

                                <div class="overlay">
                                    <p style="
                                padding: 1rem;
                                color: #fff;
                                background: rgba(255, 255, 255, 0.15);
                                backdrop-filter: blur(10px);
                                -webkit-backdrop-filter: blur(10px);
                            ">
                                        ឆៀកចល័តតាមខេត្ត នឹងដំណើរការ នៅខេត្តត្បូងឃ្មុំ ពោធិ៍សាត់ កោះកុង ... </p>
                                </div>

                                <div class="badge">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </div>

                            </article>

                        </a>


                    </div>

                    <!-- Controls -->
                    <div class="controls">

                        <div class="buttons">
                            <button id="prevBtn">‹</button>
                            <button id="nextBtn">›</button>
                        </div>

                        <div class="dots" id="dots"></div>

                    </div>

                </aside>
            </main>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const track = document.getElementById("cardTrack");
                    const cards = document.querySelectorAll(".card");
                    const prevBtn = document.getElementById("prevBtn");
                    const nextBtn = document.getElementById("nextBtn");
                    const dotsContainer = document.getElementById("dots");

                    let index = 0;

                    const cardWidth = cards[0].offsetWidth + 16;

                    const total = cards.length;

                    // Create dots
                    for (let i = 0; i < total; i++) {
                        const dot = document.createElement("button");
                        if (i === 0) dot.classList.add("active");

                        dot.addEventListener("click", () => {
                            index = i;
                            update();
                        });

                        dotsContainer.appendChild(dot);
                    }

                    const dots = dotsContainer.querySelectorAll("button");

                    function update() {

                        track.scrollTo({
                            left: index * cardWidth,
                            behavior: "smooth"
                        });

                        dots.forEach(d => d.classList.remove("active"));
                        dots[index].classList.add("active");
                    }

                    prevBtn.addEventListener("click", () => {
                        index = Math.max(0, index - 1);
                        update();
                    });

                    nextBtn.addEventListener("click", () => {
                        index = Math.min(total - 1, index + 1);
                        update();
                    });

                });
            </script>
            <style>
                /* ===========================
   Official Document Section
=========================== */

                #official-document {
                    max-width: 1200px;
                    margin: 60px auto;
                    padding: 0 20px;
                    font-family: "Battambang", "Khmer OS Siemreap", sans-serif;
                }

                /* Header */

                .document-header {
                    text-align: center;
                    margin-bottom: 35px;
                }

                .document-header h2 {
                    font-size: 2.2rem;
                    color: #1f3c88;
                    margin-bottom: 10px;
                    font-weight: 700;
                }

                .document-header p {
                    max-width: 760px;
                    margin: auto;
                    color: #666;
                    line-height: 1.8;
                }

                /* Table Wrapper */

                .document-table {
                    background: #fff;
                    border-radius: 18px;
                    overflow: hidden;
                }

                /* Horizontal Scroll */

                .table-responsive {
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }

                /* Scrollbar */

                .table-responsive::-webkit-scrollbar {
                    height: 8px;
                }

                .table-responsive::-webkit-scrollbar-track {
                    background: #edf1f5;
                }

                .table-responsive::-webkit-scrollbar-thumb {
                    background: #1f3c88;
                    border-radius: 20px;
                }

                /* Table */

                #official-document table {
                    width: 100%;
                    min-width: 850px;
                    border-collapse: collapse;
                }

                #official-document thead {
                    background: transparent;
                }

                #official-document thead th {
                    color: black;
                    padding: 18px;
                    text-align: center;
                    font-weight: 600;
                    letter-spacing: .3px;
                    white-space: nowrap;
                }

                #official-document tbody td {
                    padding: 18px;
                    text-align: center;
                    color: #444;
                    border-bottom: 1px solid #edf1f5;
                    transition: .25s;
                }

                #official-document tbody tr:last-child td {
                    border-bottom: none;
                }

                #official-document tbody tr:nth-child(even) {
                    background: #fafbfc;
                }

                #official-document tbody tr:hover {
                    background: #eef5ff;
                }

                /* Title Column */

                #official-document tbody td:nth-child(3) {
                    text-align: left;
                    font-weight: 500;
                }

                /* Buttons */

                .btn-view,
                .btn-download {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    gap: 6px;
                    padding: 8px 16px;
                    border-radius: 50px;
                    color: #fff;
                    text-decoration: none;
                    font-size: 14px;
                    font-weight: 600;
                    transition: all .3s ease;
                }

                .btn-view {
                    background: #2563eb;
                }

                .btn-view:hover {
                    background: #1d4ed8;
                    transform: translateY(-2px);
                }

                .btn-download {
                    background: #16a34a;
                }

                .btn-download:hover {
                    background: #15803d;
                    transform: translateY(-2px);
                }

                /* Empty State */

                .no-data {
                    text-align: center;
                    color: #888;
                    padding: 40px;
                }

                /* Responsive */

                @media (max-width: 768px) {

                    #official-document {
                        padding: 0 15px;
                        margin: 40px auto;
                    }

                    .document-header h2 {
                        font-size: 1.8rem;
                    }

                    .document-header p {
                        font-size: 14px;
                    }

                    #official-document table {
                        min-width: 750px;
                    }

                    #official-document th,
                    #official-document td {
                        padding: 14px;
                    }

                    .btn-view,
                    .btn-download {
                        font-size: 13px;
                        padding: 7px 14px;
                    }
                }
            </style>

            <main id="official-document">

                <!-- Header -->
                <header class="document-header">
                    <h2>ឯកសារផ្លូវការ</h2>
                    <p>
                        This is the official document section. You can find all official documents related to our
                        organization here.
                        Please check back regularly for updates and new releases.
                    </p>
                </header>

                <!-- Table -->
                <section class="document-table">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>លេខ</th>
                                    <th>ប្រភេទ</th>
                                    <th>ចំណងជើង</th>
                                    <th>បង្ហាញ</th>
                                    <th>ទាញយក</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td style="font-size: 13px;">D3 101D-2025</td>
                                    <td style="font-size: 13px;">ឯកសារផ្សេងៗ</td>
                                    <td style="font-size: 13px;">បទដ្ឋានសិក្សាគម្រោងផ្លូវថ្នល់៖ ផ្នែកទី 1D
                                        សុវត្ថិភាពដងផ្លូវ និងរបាំងការពារ (Rev 2)</td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/meeting-announcement.pdf"
                                            target="_blank" class="btn-view">
                                            👁 View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/meeting-announcement.pdf" download
                                            class="btn-download">
                                            ⬇ Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px;">D3 101D-2025</td>
                                    <td style="font-size: 13px;">សេចក្តីជូនដំណឹង</td>
                                    <td style="font-size: 13px;">សេចក្តីជូនដំណឹងស្តីពីការអញ្ជើញចូលរួមដេញថ្លៃការជួសជុល
                                        និងខណ្ឌបន្ទប់នៅអគាររដ្ឋបាលកណ្ដាល ...</td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/workshop-invitation.pdf"
                                            target="_blank" class="btn-view">
                                            👁 View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/workshop-invitation.pdf" download
                                            class="btn-download">
                                            ⬇ Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px;">D3 101D-2025</td>
                                    <td style="font-size: 13px;">សេចក្តីសម្រេច</td>
                                    <td style="font-size: 13px;">សេចក្តីសម្រេចស្តីពីការបង្កើតគណៈកម្មការបច្ចេកទេស ដឹកនាំ
                                        និងសម្របសម្រួលក្នុងការកែសម្រួលបទដា្ឋន ...</td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/annual-report-2025.pdf" target="_blank"
                                            class="btn-view">
                                            👁 View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/annual-report-2025.pdf" download
                                            class="btn-download">
                                            ⬇ Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px;">D3 101D-2025</td>
                                    <td style="font-size: 13px;">សេចក្ដីជូនដំណឹង</td>
                                    <td style="font-size: 13px;">
                                        សេចក្ដីជូនដំណឹងស្ដីពីការដាក់ដំណើរការសាកល្បងប្រព័ន្ធចុះបញ្ជីលេខពិសេសផ្ទាល់ខ្លួនសម្រាប់ទោចក្រយានយន្ត
                                        ...</td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/annual-report-2025.pdf" target="_blank"
                                            class="btn-view">
                                            👁 View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/annual-report-2025.pdf" download
                                            class="btn-download">
                                            ⬇ Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 13px;">D3 101D-2025</td>
                                    <td style="font-size: 13px;">ប្រកាស</td>
                                    <td style="font-size: 13px;">ប្រកាសអន្តរក្រសួងស្តីពីការលក់
                                        និងការដេញថ្លៃលេខចុះបញ្ជីពិសេសផ្ទាល់ខ្លួនសម្រាប់យានជំនិះ</td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/annual-report-2025.pdf" target="_blank"
                                            class="btn-view">
                                            👁 View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="http://127.0.0.1:9090/documents/annual-report-2025.pdf" download
                                            class="btn-download">
                                            ⬇ Download
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </section>

            </main>

            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

            <style>
                /* Modern Design Variables */
                :root {
                    --primary-color: #2563eb;
                    --primary-hover: #1d4ed8;
                    --primary-dark: #1e3a8a;
                    --accent-color: #f59e0b;
                    --bg-light: #f8fafc;
                    --text-dark: #1e293b;
                    --text-muted: #64748b;
                    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12);
                    --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
                    --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
                    --radius: 12px;
                    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .location-section {
                    max-width: 1400px;
                    margin: 0 auto;
                    padding: 2rem 1rem;
                    background: var(--bg-light);
                }

                .page-header {
                    text-align: center;
                    margin-bottom: 2.5rem;
                    padding: 1rem;
                }

                .page-header h2 {
                    font-size: 2.5rem;
                    color: var(--text-dark);
                    margin-bottom: 0.5rem;
                    font-weight: 700;
                    position: relative;
                    display: inline-block;
                }

                .page-header h2::after {
                    content: '';
                    position: absolute;
                    bottom: -8px;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 60px;
                    height: 4px;
                    background: var(--primary-color);
                    border-radius: 2px;
                }

                .page-header p {
                    color: var(--text-muted);
                    font-size: 1.1rem;
                    margin-top: 1rem;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .location-wrapper {
                    display: flex;
                    gap: 1.5rem;
                    height: 600px;
                    background: white;
                    border-radius: var(--radius);
                    box-shadow: var(--shadow-lg);
                    overflow: hidden;
                }

                /* Left Side - Location List */
                .location-list {
                    flex: 1;
                    overflow-y: auto;
                    padding: 1.5rem;
                    background: white;
                    width: 500px;
                }

                /* Custom Scrollbar for Location List */
                .location-list::-webkit-scrollbar {
                    width: 6px;
                }

                .location-list::-webkit-scrollbar-track {
                    background: #e2e8f0;
                    border-radius: 10px;
                }

                .location-list::-webkit-scrollbar-thumb {
                    background: var(--primary-color);
                    border-radius: 10px;
                    transition: var(--transition);
                }

                .location-list::-webkit-scrollbar-thumb:hover {
                    background: var(--primary-hover);
                }

                .location-list {
                    scrollbar-width: thin;
                    scrollbar-color: var(--primary-color) #e2e8f0;
                }

                .location-item {
                    display: flex;
                    gap: 1rem;
                    align-items: center;
                    padding: 1rem;
                    background: var(--bg-light);
                    margin-bottom: 1rem;
                    border-radius: var(--radius);
                    cursor: pointer;
                    transition: var(--transition);
                    border: 2px solid transparent;
                    position: relative;
                    box-shadow: var(--shadow-sm);
                }

                .location-item:hover {
                    transform: translateX(8px);
                    border-color: var(--primary-color);
                    box-shadow: var(--shadow-md);
                }

                .location-item.active {
                    border-color: var(--primary-color);
                    background: #eff6ff;
                    box-shadow: var(--shadow-md);
                }

                .location-item .icon-wrapper {
                    width: 4.5rem;
                    height: 4.5rem;
                    background: linear-gradient(135deg, var(--accent-color), #f97316);
                    border-radius: var(--radius);
                    flex-shrink: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 1.8rem;
                    transition: var(--transition);
                }

                .location-item:hover .icon-wrapper {
                    transform: scale(1.05) rotate(-5deg);
                }

                .location-item .info {
                    flex: 1;
                    min-width: 0;
                }

                .location-item .info h3 {
                    margin: 0;
                    font-weight: 600;
                    color: var(--text-dark);
                    font-size: 1rem;
                    line-height: 1.4;
                }

                .location-item .info p {
                    margin: 4px 0;
                    color: var(--text-muted);
                    font-size: 0.9rem;
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                }

                .location-item .info p i {
                    width: 16px;
                    font-size: 0.8rem;
                }

                .location-item .arrow-btn {
                    width: 2.5rem;
                    height: 2.5rem;
                    background: var(--primary-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    transition: var(--transition);
                    flex-shrink: 0;
                    border: none;
                    cursor: pointer;
                }

                .location-item:hover .arrow-btn {
                    transform: translateX(4px) scale(1.1);
                    background: var(--primary-hover);
                }

                /* Right Side - Map */
                .map-container {
                    flex: 1;
                    background: #f1f5f9;
                    position: relative;
                    min-height: 100%;
                }

                #cambodia-map {
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                }

                /* Map Popup Customization */
                .custom-popup .leaflet-popup-content-wrapper {
                    border-radius: var(--radius);
                    padding: 0;
                    overflow: hidden;
                    box-shadow: var(--shadow-lg);
                }

                .custom-popup .leaflet-popup-content {
                    margin: 0;
                    padding: 0;
                    min-width: 200px;
                    max-width: 280px;
                }

                .popup-content {
                    padding: 1rem;
                }

                .popup-content h4 {
                    color: var(--text-dark);
                    font-size: 1rem;
                    margin-bottom: 0.25rem;
                    font-weight: 600;
                }

                .popup-content .popup-address {
                    color: var(--text-muted);
                    font-size: 0.85rem;
                    margin: 0.25rem 0;
                }

                .popup-content .popup-phone {
                    color: var(--primary-color);
                    font-weight: 500;
                    font-size: 0.9rem;
                    margin: 0.25rem 0;
                }

                .popup-content .popup-phone i {
                    margin-right: 0.3rem;
                }

                /* Map Controls */
                .map-controls {
                    position: absolute;
                    top: 1rem;
                    right: 1rem;
                    z-index: 1000;
                    background: white;
                    border-radius: var(--radius);
                    box-shadow: var(--shadow-md);
                    padding: 0.5rem;
                    display: flex;
                    flex-direction: column;
                    gap: 0.25rem;
                }

                .map-controls button {
                    background: none;
                    border: none;
                    padding: 0.5rem;
                    cursor: pointer;
                    border-radius: 6px;
                    transition: var(--transition);
                    color: var(--text-muted);
                    font-size: 1rem;
                }

                .map-controls button:hover {
                    background: var(--bg-light);
                    color: var(--primary-color);
                }

                /* Responsive Design */
                @media (max-width: 1024px) {
                    .location-wrapper {
                        flex-direction: column;
                        height: auto;
                    }

                    .location-list {
                        max-width: 100%;
                        max-height: 400px;
                        min-width: unset;
                    }

                    .map-container {
                        height: 500px;
                        min-height: 400px;
                    }
                }

                @media (max-width: 640px) {
                    .page-header h2 {
                        font-size: 1.8rem;
                    }

                    .location-item {
                        padding: 0.75rem;
                    }

                    .location-item .icon-wrapper {
                        width: 3.5rem;
                        height: 3.5rem;
                        font-size: 1.4rem;
                    }

                    .location-item .info h3 {
                        font-size: 0.9rem;
                    }

                    .map-container {
                        height: 350px;
                    }
                }

                /* Loading Animation */
                .map-loading {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 0;
                    color: var(--text-muted);
                    font-size: 1rem;
                }

                .map-loading i {
                    display: block;
                    margin: 0 auto 0.5rem;
                    font-size: 2rem;
                    animation: spin 1s linear infinite;
                }

                @keyframes spin {
                    0% {
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }
            </style>

            <main id="location" class="location-section">
                <header class="page-header">
                    <h2><i class="fas fa-map-marked-alt"
                            style="color: var(--primary-color); margin-right: 0.5rem;"></i>ទីតាំងសំខាន់ៗក្នុងវិស័យសាធារណការ
                    </h2>
                    <p>ស្វែងរកទីតាំងក្រសួង និងមន្ទីរសាធារណការនៅទូទាំងប្រទេសកម្ពុជា</p>
                </header>

                <div class="location-wrapper">
                    <!-- Left Side - Location List -->
                    <aside class="location-list" id="locationList">
                        <article class="location-item" data-index="0" data-lat="11.5564" data-lng="104.9282">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>ទីស្តីការក្រសួងសាធារណការ និងដឹកជញ្ជូន</h3>
                                <p><i class="fas fa-map-pin"></i> ផ្លូវលេខ 598, សង្កាត់ច្រាំងចំរេះ2, ខណ្ឌប្ញស្សីកែវ,
                                    ភ្នំពេញ</p>
                                <p><i class="fas fa-phone"></i> 1275</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                        <article class="location-item" data-index="1" data-lat="13.3618" data-lng="103.8606">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>មន្ទីរសាធារណការ ខេត្តសៀមរាប</h3>
                                <p><i class="fas fa-map-pin"></i> ក្រុងសៀមរាប, ខេត្តសៀមរាប</p>
                                <p><i class="fas fa-phone"></i> 1234</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                        <article class="location-item" data-index="2" data-lat="13.0957" data-lng="103.2022">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>មន្ទីរសាធារណការ ខេត្តបាត់ដំបង</h3>
                                <p><i class="fas fa-map-pin"></i> ក្រុងបាត់ដំបង, ខេត្តបាត់ដំបង</p>
                                <p><i class="fas fa-phone"></i> 4567</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                        <article class="location-item" data-index="3" data-lat="12.0021" data-lng="105.4515">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>មន្ទីរសាធារណការ ខេត្តកំពង់ចាម</h3>
                                <p><i class="fas fa-map-pin"></i> ក្រុងកំពង់ចាម, ខេត្តកំពង់ចាម</p>
                                <p><i class="fas fa-phone"></i> 7890</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                        <article class="location-item" data-index="4" data-lat="11.4751" data-lng="104.5283">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>មន្ទីរសាធារណការ ខេត្តកំពង់ស្ពឺ</h3>
                                <p><i class="fas fa-map-pin"></i> ក្រុងច្បារមន, ខេត្តកំពង់ស្ពឺ</p>
                                <p><i class="fas fa-phone"></i> 2345</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                        <article class="location-item" data-index="5" data-lat="10.9647" data-lng="104.7654">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>មន្ទីរសាធារណការ ខេត្តតាកែវ</h3>
                                <p><i class="fas fa-map-pin"></i> ក្រុងដូនកែវ, ខេត្តតាកែវ</p>
                                <p><i class="fas fa-phone"></i> 6789</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                        <article class="location-item" data-index="6" data-lat="10.6256" data-lng="103.5219">
                            <div class="icon-wrapper">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="info">
                                <h3>មន្ទីរសាធារណការ ខេត្តព្រះសីហនុ</h3>
                                <p><i class="fas fa-map-pin"></i> ក្រុងព្រះសីហនុ, ខេត្តព្រះសីហនុ</p>
                                <p><i class="fas fa-phone"></i> 3456</p>
                            </div>
                            <div class="arrow-btn">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </article>
                    </aside>

                    <!-- Right Side - Map -->
                    <div class="map-container">
                        <div class="map-loading" id="mapLoading">
                            <i class="fas fa-spinner"></i>
                            <span>កំពុងផ្ទុកផែនទី...</span>
                        </div>
                        <div id="cambodia-map"></div>
                        <div class="map-controls">
                            <button onclick="resetMapView()" title="Reset View">
                                <i class="fas fa-home"></i>
                            </button>
                            <button onclick="zoomIn()" title="Zoom In">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button onclick="zoomOut()" title="Zoom Out">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </main>

            <script>
                // PHP locations data passed to JavaScript
                const locations = [{ "title": "\u1791\u17b8\u179f\u17d2\u178f\u17b8\u1780\u17b6\u179a\u1780\u17d2\u179a\u179f\u17bd\u1784\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1793\u17b7\u1784\u178a\u17b9\u1780\u1787\u1789\u17d2\u1787\u17bc\u1793", "address": "\u1795\u17d2\u179b\u17bc\u179c\u179b\u17c1\u1781 598, \u179f\u1784\u17d2\u1780\u17b6\u178f\u17cb\u1785\u17d2\u179a\u17b6\u17c6\u1784\u1785\u17c6\u179a\u17c1\u17c72, \u1781\u178e\u17d2\u178c\u1794\u17d2\u1789\u179f\u17d2\u179f\u17b8\u1780\u17c2\u179c, \u1797\u17d2\u1793\u17c6\u1796\u17c1\u1789", "phone": "1275", "lat": 11.5564, "lng": 104.9282, "description": "\u1780\u17d2\u179a\u179f\u17bd\u1784\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1793\u17b7\u1784\u178a\u17b9\u1780\u1787\u1789\u17d2\u1787\u17bc\u1793" }, { "title": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u179f\u17c0\u1798\u179a\u17b6\u1794", "address": "\u1780\u17d2\u179a\u17bb\u1784\u179f\u17c0\u1798\u179a\u17b6\u1794, \u1781\u17c1\u178f\u17d2\u178f\u179f\u17c0\u1798\u179a\u17b6\u1794", "phone": "1234", "lat": 13.3618, "lng": 103.8606, "description": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u179f\u17c0\u1798\u179a\u17b6\u1794" }, { "title": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1794\u17b6\u178f\u17cb\u178a\u17c6\u1794\u1784", "address": "\u1780\u17d2\u179a\u17bb\u1784\u1794\u17b6\u178f\u17cb\u178a\u17c6\u1794\u1784, \u1781\u17c1\u178f\u17d2\u178f\u1794\u17b6\u178f\u17cb\u178a\u17c6\u1794\u1784", "phone": "4567", "lat": 13.0957, "lng": 103.2022, "description": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1794\u17b6\u178f\u17cb\u178a\u17c6\u1794\u1784" }, { "title": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1780\u17c6\u1796\u1784\u17cb\u1785\u17b6\u1798", "address": "\u1780\u17d2\u179a\u17bb\u1784\u1780\u17c6\u1796\u1784\u17cb\u1785\u17b6\u1798, \u1781\u17c1\u178f\u17d2\u178f\u1780\u17c6\u1796\u1784\u17cb\u1785\u17b6\u1798", "phone": "7890", "lat": 12.0021, "lng": 105.4515, "description": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1780\u17c6\u1796\u1784\u17cb\u1785\u17b6\u1798" }, { "title": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1780\u17c6\u1796\u1784\u17cb\u179f\u17d2\u1796\u17ba", "address": "\u1780\u17d2\u179a\u17bb\u1784\u1785\u17d2\u1794\u17b6\u179a\u1798\u1793, \u1781\u17c1\u178f\u17d2\u178f\u1780\u17c6\u1796\u1784\u17cb\u179f\u17d2\u1796\u17ba", "phone": "2345", "lat": 11.4751, "lng": 104.5283, "description": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1780\u17c6\u1796\u1784\u17cb\u179f\u17d2\u1796\u17ba" }, { "title": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u178f\u17b6\u1780\u17c2\u179c", "address": "\u1780\u17d2\u179a\u17bb\u1784\u178a\u17bc\u1793\u1780\u17c2\u179c, \u1781\u17c1\u178f\u17d2\u178f\u178f\u17b6\u1780\u17c2\u179c", "phone": "6789", "lat": 10.9647, "lng": 104.7654, "description": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u178f\u17b6\u1780\u17c2\u179c" }, { "title": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1796\u17d2\u179a\u17c7\u179f\u17b8\u17a0\u1793\u17bb", "address": "\u1780\u17d2\u179a\u17bb\u1784\u1796\u17d2\u179a\u17c7\u179f\u17b8\u17a0\u1793\u17bb, \u1781\u17c1\u178f\u17d2\u178f\u1796\u17d2\u179a\u17c7\u179f\u17b8\u17a0\u1793\u17bb", "phone": "3456", "lat": 10.6256, "lng": 103.5219, "description": "\u1798\u1793\u17d2\u1791\u17b8\u179a\u179f\u17b6\u1792\u17b6\u179a\u178e\u1780\u17b6\u179a \u1781\u17c1\u178f\u17d2\u178f\u1796\u17d2\u179a\u17c7\u179f\u17b8\u17a0\u1793\u17bb" }];

                // Initialize map
                let map;
                let markers = [];
                let activeMarker = null;

                function initMap() {
                    // Cambodia center coordinates
                    const cambodiaCenter = [12.5657, 104.9910];

                    map = L.map('cambodia-map', {
                        center: cambodiaCenter,
                        zoom: 7,
                        zoomControl: false,
                        fadeAnimation: true,
                        zoomAnimation: true,
                        markerZoomAnimation: true
                    });

                    // Add tile layer with OpenStreetMap
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap contributors',
                        maxZoom: 18,
                        minZoom: 5
                    }).addTo(map);

                    // Hide loading indicator
                    document.getElementById('mapLoading').style.display = 'none';

                    // Add markers for each location
                    locations.forEach((location, index) => {
                        const marker = L.marker([location.lat, location.lng], {
                            title: location.title,
                            riseOnHover: true
                        }).addTo(map);

                        // Custom popup
                        const popupContent = `
            <div class="popup-content">
                <h4>${location.title}</h4>
                <p class="popup-address"><i class="fas fa-map-pin"></i> ${location.address}</p>
                <p class="popup-phone"><i class="fas fa-phone"></i> ${location.phone}</p>
            </div>
        `;

                        marker.bindPopup(popupContent, {
                            className: 'custom-popup',
                            maxWidth: 300,
                            minWidth: 200
                        });

                        // Store marker reference
                        marker.locationIndex = index;
                        markers.push(marker);

                        // Click event to highlight list item
                        marker.on('click', function () {
                            highlightLocation(this.locationIndex);
                        });
                    });

                    // Add click event to location items
                    document.querySelectorAll('.location-item').forEach(item => {
                        item.addEventListener('click', function () {
                            const index = parseInt(this.dataset.index);
                            const lat = parseFloat(this.dataset.lat);
                            const lng = parseFloat(this.dataset.lng);

                            // Highlight the clicked location
                            highlightLocation(index);

                            // Fly to location on map
                            flyToLocation(lat, lng, index);
                        });
                    });

                    // Initial highlight of first location
                    if (locations.length > 0) {
                        setTimeout(() => {
                            highlightLocation(0);
                            flyToLocation(locations[0].lat, locations[0].lng, 0);
                        }, 500);
                    }
                }

                function highlightLocation(index) {
                    // Remove active class from all items
                    document.querySelectorAll('.location-item').forEach(el => {
                        el.classList.remove('active');
                    });

                    // Add active class to selected item
                    const items = document.querySelectorAll('.location-item');
                    if (items[index]) {
                        items[index].classList.add('active');

                        // Scroll to the item if it's not visible
                        const listContainer = document.getElementById('locationList');
                        const itemTop = items[index].offsetTop;
                        const containerHeight = listContainer.clientHeight;
                        const itemHeight = items[index].clientHeight;

                        if (itemTop > containerHeight || itemTop < 0) {
                            listContainer.scrollTop = itemTop - containerHeight / 2 + itemHeight / 2;
                        }
                    }
                }

                function flyToLocation(lat, lng, index) {
                    map.flyTo([lat, lng], 13, {
                        duration: 1.5,
                        easeLinearity: 0.25
                    });

                    // Open popup for the marker
                    if (markers[index]) {
                        setTimeout(() => {
                            markers[index].openPopup();
                        }, 800);
                    }
                }

                function resetMapView() {
                    map.flyTo([12.5657, 104.9910], 7, {
                        duration: 1.5,
                        easeLinearity: 0.25
                    });
                    // Close all popups
                    map.closePopup();
                }

                function zoomIn() {
                    map.zoomIn();
                }

                function zoomOut() {
                    map.zoomOut();
                }

                // Initialize map when DOM is ready
                document.addEventListener('DOMContentLoaded', function () {
                    // Small delay to ensure map container is rendered
                    setTimeout(initMap, 100);
                });

                // Handle window resize
                window.addEventListener('resize', function () {
                    if (map) {
                        setTimeout(() => {
                            map.invalidateSize();
                        }, 200);
                    }
                });
            </script>
        </section>
    </aside>

    <!-- Children -->
    <main style="background: white; ">
        <section>
            <div class="com-content-article item-page">
                <meta itemprop="inLanguage" content="en-GB">
                <div class="page-header">
                    <h1> ទំព័រដើម </h1>
                </div>







                <div class="com-content-article__body">
                    <p><span style="text-decoration: underline;"><strong>This is the Home Page</strong></span></p>
                    <div class="text font-i2"><span style="text-decoration: underline;">(ភ្នំពេញ)៖ លោក ប៉េង ពោធិ៍នា
                            រដ្ឋមន្រ្តីក្រសួងសាធារណការ និងដឹកជញ្ជូន ព្រឹកថ្ងៃទី១២ ខែឧសភា ឆ្នាំ២០២៦នេះ
                            បានអញ្ជើញជាអធិបតីក្នុងមហាសន្និបាតភាគហ៊ុនិកលើកទី១១ របស់កំពង់ផែស្វយ័តភ្នំពេញ។
                            មហាសន្និបាតភាគហ៊ុនិកលើកទី១១ នេះ ក៏មានការចូលរួមពី លោក ហ៊ឺ បាវី ប្រតិភូរាជរដ្ឋាភិបាលកម្ពុជា
                            ទទួលបន្ទុកជាប្រធានអគ្គនាយកកំពង់ផែស្វយ័តភ្នំពេញ លោក លោកស្រីថ្នាក់ដឹកនាំក្រសួង
                            សមាជិកក្រុមប្រឹក្សាភិបាល និងមន្ត្រីត្រួតពិនិត្យរដ្ឋអមកំពង់ផែស្វយ័តភ្នំពេញ ឧកញ៉ា លោក លោកស្រី
                            ភ្ញៀវកិត្តិយសជាតិ-អន្តរជាតិ ភាគហ៊ុនិក និងថ្នាក់ដឹកនាំ
                            កម្មករ-និយោជិតទាំងអស់របស់កំពង់ផែស្វយ័តភ្នំពេញ ជាច្រើនរូបទៀត៕</span></div>
                    <div>
                        <div class="sidebar"> </div>
                    </div>
                </div>


            </div>

        </section>
    </main>

    <!-- Footer Section Starts -->
    <footer>

        <style>
            .footer-wrapper {
                background: #F7F7F780;
                padding: 2rem;
            }

            .footer-grid {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 2rem;
                max-width: 1200px;
                margin: auto;
            }

            .footer-col p {
                margin-bottom: .5rem;
                color: #192879;
                font-weight: 500
            }

            .footer-col ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .footer-col li {
                margin-bottom: .4rem;
                font-size: 0.95rem;
                cursor: pointer;
                font-size: .9rem;
            }

            /* Tablet */
            @media (max-width: 992px) {
                .footer-grid {
                    grid-template-columns: repeat(3, 1fr);
                }
            }

            /* Mobile */
            @media (max-width: 600px) {
                .footer-grid {
                    grid-template-columns: repeat(1, 1fr);
                    text-align: center;
                }
            }
        </style>

        <footer class="footer-wrapper">

            <!-- Logo Section -->
            <aside style="display:flex; flex-direction:column; gap:.2rem; align-items:center; margin-bottom:2rem;">
                <img style="width:81px;" src="/images/mpwt.png" />
                <img style="width:343px;" src="/images/ក្រសួងសាធារណការ និងដឹកជញ្ជូន.png" />
                <img style="width:346px;" src="/images/MINISTRY OF PUBLIC WORKS AND TRANSPORT.png" />
            </aside>

            <!-- 5 Columns -->
            <div class="footer-grid" style="margin-top: 2.5rem !important;">
                <aside class="footer-col">

                    <!-- Title -->
                    <p>អំពីក្រសួង</p>

                    <!-- Items -->
                    <ul style="display: flex; flex-direction: column; gap: .6rem; margin-top: .6rem;">
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ព័ត៌មានទូទៅ </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ថ្នាក់ដឹកនាំ </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ទំនាក់ទំនង </span>

                        </li>
                    </ul>

                </aside>
                <aside class="footer-col">

                    <!-- Title -->
                    <p>ហេដ្ឋារចនាសម្ព័ន្ធ</p>

                    <!-- Items -->
                    <ul style="display: flex; flex-direction: column; gap: .6rem; margin-top: .6rem;">
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ផ្លូវថ្នល់-ស្ពាន </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ប្រព័ន្ធចម្រោះទឹកកខ្វក់ </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ផ្លូវទឹក </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ផ្លូវដែក </span>

                        </li>
                    </ul>

                </aside>
                <aside class="footer-col">

                    <!-- Title -->
                    <p>សេវាសាធារណៈ</p>

                    <!-- Items -->
                    <ul style="display: flex; flex-direction: column; gap: .6rem; margin-top: .6rem;">
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ដឹកជញ្ជូនផ្លូវគោក </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ដឹកជញ្ជូនផ្លូវទឹក </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ហេដ្ឋារចនាសម្ព័ន្ធ </span>

                        </li>
                    </ul>

                </aside>
                <aside class="footer-col">

                    <!-- Title -->
                    <p>ឯកសារផ្លូវការ</p>

                    <!-- Items -->
                    <ul style="display: flex; flex-direction: column; gap: .6rem; margin-top: .6rem;">
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ច្បាប់ </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ព្រះរាជក្រឹត្យ </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                អនុក្រឹត្យ </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ប្រកាស </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 10px; height: auto;" src="/images/icons/Back.png" alt="icon" />

                            <span>
                                ឯកសារផ្សេងៗ </span>

                        </li>
                    </ul>

                </aside>
                <aside class="footer-col">

                    <!-- Title -->
                    <p>ទំនាក់ទំនង</p>

                    <!-- Items -->
                    <ul style="display: flex; flex-direction: column; gap: .6rem; margin-top: .6rem;">
                        <li class="footer-item">

                            <img style="width: 18px; height: auto;" src="/images/icons/Email.png" alt="icon" />

                            <span>
                                info@mpwt.gov.kh </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 18px; height: auto;" src="/images/icons/Phone.png" alt="icon" />

                            <span>
                                1275 (ឥតគិតថ្លៃ) </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 18px; height: auto;" src="/images/icons/Delivery Time.png" alt="icon" />

                            <span>
                                ចន្ទ-សុក្រ 8:00 - 12:00 14:00 - 17:00 </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 18px; height: auto;" src="/images/icons/Internet.png" alt="icon" />

                            <span>
                                www.mpwt.gov.kh </span>

                        </li>
                        <li class="footer-item">

                            <img style="width: 18px; height: auto;" src="/images/icons/Address.png" alt="icon" />

                            <span>
                                ផ្លូវលេខ ៥៩៨ សង្កាត់ច្រាំងចំរេះ២ ខណ្ឌឬស្សីកែវ រាជធានីភ្នំពេញ </span>

                        </li>
                    </ul>

                </aside>
            </div>

        </footer>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                console.log("Footer loaded");
            });
        </script>
    </footer>

    <footer style="background-color : #192879; padding: .7rem; color: white">
        <section style=" display: flex; justify-content: space-between; align-items: center;">
            <p>© ២០២៦ រក្សាសិទ្ធិគ្រប់យ៉ាងដោយ ​ក្រសួងសាធារណការ និង ដឹកជញ្ជូន</p>

            <aside style="display: flex; gap: 1rem;">
                <img style="width: 18px; height: auto;" src="/images/Facebook F.png" />
                <img style="width: 18px; height: auto;" src="/images/Telegram App.png" />
                <img style="width: 18px; height: auto;" src="/images/YouTube.png" />
                <img style="width: 18px; height: auto;" src="/images/TikTok.png" />
                <img style="width: 18px; height: auto;" src="/images/Google Play.png" />
                <img style="width: 18px; height: auto;" src="/images/Apple Inc.png" />
            </aside>
        </section>
    </footer>



</body>

</html>