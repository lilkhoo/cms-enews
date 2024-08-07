<style>
    /**
* Template Name: AgriCulture
* Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
* Updated: Jun 29 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

    /*--------------------------------------------------------------
# Font & Color Variables
# Help: https://bootstrapmade.com/color-system/
--------------------------------------------------------------*/
    /* Fonts */
    :root {
        --default-font: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --heading-font: "Marcellus", sans-serif;
        --nav-font: "Marcellus", sans-serif;
    }

    /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
    :root {
        --background-color: #ffffff;
        /* Background color for the entire website, including individual sections */
        --default-color: #212529;
        /* Default color used for the majority of the text content across the entire website */
        --heading-color: #2d465e;
        /* Color for headings, subheadings and title throughout the website */
        --accent-color: #2c4666;
        /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
        --surface-color: #ffffff;
        /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
        --contrast-color: #ffffff;
        /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
    }

    /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
    :root {
        --nav-color: #212529;
        /* The default color of the main navmenu links */
        --nav-hover-color: #2c4666;
        /* Applied to main navmenu links when they are hovered over or active */
        --nav-mobile-background-color: #ffffff;
        /* Used as the background color for mobile navigation menu */
        --nav-dropdown-background-color: #ffffff;
        /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
        --nav-dropdown-color: #212529;
        /* Used for navigation links of the dropdown items in the navigation menu. */
        --nav-dropdown-hover-color: #2c4666;
        /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
    }

    /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

    .light-background {
        --background-color: #f9f9f9;
        --surface-color: #ffffff;
    }

    .dark-background {
        --background-color: #060606;
        --default-color: #ffffff;
        --heading-color: #ffffff;
        --accent-color: #2c4666;
        --surface-color: #252525;
        --contrast-color: #ffffff;
    }

    /* Smooth scroll */
    :root {
        scroll-behavior: smooth;
    }

    /*--------------------------------------------------------------
# General Styling & Shared Classes
--------------------------------------------------------------*/
    body {
        color: var(--default-color);
        background-color: var(--background-color);
        font-family: var(--default-font);
    }

    a {
        color: var(--accent-color);
        text-decoration: none;
        transition: 0.3s;
    }

    a:hover {
        color: color-mix(in srgb, var(--accent-color), transparent 25%);
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: var(--heading-color);
        font-family: var(--heading-font);
    }

    /* PHP Email Form Messages
------------------------------*/
    .php-email-form .error-message {
        display: none;
        background: #df1529;
        color: #ffffff;
        text-align: left;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .php-email-form .sent-message {
        display: none;
        color: #ffffff;
        background: #2c4666;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .php-email-form .loading {
        display: none;
        background: var(--surface-color);
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
    }

    .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid var(--accent-color);
        border-top-color: var(--surface-color);
        animation: php-email-form-loading 1s linear infinite;
    }

    @keyframes php-email-form-loading {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Pulsating Play Button
------------------------------*/
    .pulsating-play-btn {
        width: 94px;
        height: 94px;
        background: radial-gradient(var(--accent-color) 50%, color-mix(in srgb, var(--accent-color), transparent 75%) 52%);
        border-radius: 50%;
        display: block;
        position: relative;
        overflow: hidden;
    }

    .pulsating-play-btn:before {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        animation-delay: 0s;
        animation: pulsate-play-btn 2s;
        animation-direction: forwards;
        animation-iteration-count: infinite;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 5px solid color-mix(in srgb, var(--accent-color), transparent 30%);
        top: -15%;
        left: -15%;
        background: rgba(198, 16, 0, 0);
    }

    .pulsating-play-btn:after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 100;
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .pulsating-play-btn:hover:before {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border: none;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 200;
        animation: none;
        border-radius: 0;
    }

    .pulsating-play-btn:hover:after {
        border-left: 15px solid var(--accent-color);
        transform: scale(20);
    }

    @keyframes pulsate-play-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }

        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    /*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
    .header {
        color: var(--default-color);
        background-color: var(--background-color);
        padding: 20px 0;
        transition: all 0.5s;
        z-index: 997;
    }

    .header .logo {
        line-height: 1;
    }

    .header .logo img {
        max-height: 32px;
        margin-right: 8px;
    }

    .header .logo h1 {
        font-size: 30px;
        margin: 0;
        font-weight: 700;
        color: var(--heading-color);
    }

    .scrolled .header {
        box-shadow: 0px 0 18px color-mix(in srgb, var(--default-color), transparent 85%);
    }

    /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
    /* Navmenu - Desktop */
    @media (min-width: 1200px) {
        .navmenu {
            padding: 0;
        }

        .navmenu ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navmenu li {
            position: relative;
        }

        .navmenu a,
        .navmenu a:focus {
            color: var(--nav-color);
            padding: 18px 15px;
            font-size: 16px;
            font-family: var(--nav-font);
            font-weight: 400;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
            transition: 0.3s;
        }

        .navmenu a i,
        .navmenu a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
            transition: 0.3s;
        }

        .navmenu li:last-child a {
            padding-right: 0;
        }

        .navmenu li:hover>a,
        .navmenu .active,
        .navmenu .active:focus {
            color: var(--nav-hover-color);
        }

        .navmenu .dropdown ul {
            margin: 0;
            padding: 10px 0;
            background: var(--nav-dropdown-background-color);
            display: block;
            position: absolute;
            visibility: hidden;
            left: 14px;
            top: 130%;
            opacity: 0;
            transition: 0.3s;
            border-radius: 4px;
            z-index: 99;
            box-shadow: 0px 0px 30px color-mix(in srgb, var(--default-color), transparent 85%);
        }

        .navmenu .dropdown ul li {
            min-width: 200px;
        }

        .navmenu .dropdown ul a {
            padding: 10px 20px;
            font-size: 15px;
            text-transform: none;
            color: var(--nav-dropdown-color);
        }

        .navmenu .dropdown ul a i {
            font-size: 12px;
        }

        .navmenu .dropdown ul a:hover,
        .navmenu .dropdown ul .active:hover,
        .navmenu .dropdown ul li:hover>a {
            color: var(--nav-dropdown-hover-color);
        }

        .navmenu .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
        }

        .navmenu .dropdown .dropdown ul {
            top: 0;
            left: -90%;
            visibility: hidden;
        }

        .navmenu .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: -100%;
            visibility: visible;
        }
    }

    /* Navmenu - Mobile */
    @media (max-width: 1199px) {
        .mobile-nav-toggle {
            color: var(--nav-color);
            font-size: 28px;
            line-height: 0;
            margin-right: 10px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .navmenu {
            padding: 0;
            z-index: 9997;
        }

        .navmenu ul {
            display: none;
            position: absolute;
            inset: 60px 20px 20px 20px;
            padding: 10px 0;
            margin: 0;
            border-radius: 6px;
            background-color: var(--nav-mobile-background-color);
            overflow-y: auto;
            transition: 0.3s;
            z-index: 9998;
            box-shadow: 0px 0px 30px color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .navmenu a,
        .navmenu a:focus {
            color: var(--nav-dropdown-color);
            padding: 10px 20px;
            font-family: var(--nav-font);
            font-size: 17px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
            transition: 0.3s;
        }

        .navmenu a i,
        .navmenu a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: 0.3s;
            background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
        }

        .navmenu a i:hover,
        .navmenu a:focus i:hover {
            background-color: var(--accent-color);
            color: var(--contrast-color);
        }

        .navmenu a:hover,
        .navmenu .active,
        .navmenu .active:focus {
            color: var(--nav-dropdown-hover-color);
        }

        .navmenu .active i,
        .navmenu .active:focus i {
            background-color: var(--accent-color);
            color: var(--contrast-color);
            transform: rotate(180deg);
        }

        .navmenu .dropdown ul {
            position: static;
            display: none;
            z-index: 99;
            padding: 10px 0;
            margin: 10px 20px;
            background-color: var(--nav-dropdown-background-color);
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
            box-shadow: none;
            transition: all 0.5s ease-in-out;
        }

        .navmenu .dropdown ul ul {
            background-color: rgba(33, 37, 41, 0.1);
        }

        .navmenu .dropdown>.dropdown-active {
            display: block;
            background-color: rgba(33, 37, 41, 0.03);
        }

        .mobile-nav-active {
            overflow: hidden;
        }

        .mobile-nav-active .mobile-nav-toggle {
            color: #fff;
            position: absolute;
            font-size: 32px;
            top: 15px;
            right: 15px;
            margin-right: 0;
            z-index: 9999;
        }

        .mobile-nav-active .navmenu {
            position: fixed;
            overflow: hidden;
            inset: 0;
            background: rgba(33, 37, 41, 0.8);
            transition: 0.3s;
        }

        .mobile-nav-active .navmenu>ul {
            display: block;
        }
    }

    /*--------------------------------------------------------------
# Global Footer
--------------------------------------------------------------*/
    .footer {
        color: var(--default-color);
        background-color: var(--background-color);
        font-size: 14px;
        position: relative;
    }

    .footer .footer-top {
        background-color: color-mix(in srgb, var(--background-color), white 5%);
        padding-top: 50px;
    }

    .footer .footer-about .logo {
        line-height: 1;
        margin-bottom: 25px;
    }

    .footer .footer-about .logo img {
        max-height: 40px;
        margin-right: 6px;
    }

    .footer .footer-about .logo span {
        color: var(--heading-color);
        font-family: var(--heading-font);
        font-size: 26px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .footer .footer-about p {
        font-size: 14px;
        font-family: var(--heading-font);
    }

    .footer h4 {
        font-size: 16px;
        font-weight: 600;
        position: relative;
        padding-bottom: 12px;
        margin-bottom: 15px;
    }

    .footer h4::after {
        content: "";
        position: absolute;
        display: block;
        width: 20px;
        height: 2px;
        background: var(--accent-color);
        bottom: 0;
        left: 0;
    }

    .footer .footer-links {
        margin-bottom: 30px;
    }

    .footer .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer .footer-links ul i {
        padding-right: 2px;
        font-size: 12px;
        line-height: 0;
    }

    .footer .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
    }

    .footer .footer-links ul li:first-child {
        padding-top: 0;
    }

    .footer .footer-links ul a {
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        display: inline-block;
        line-height: 1;
    }

    .footer .footer-links ul a:hover {
        color: var(--accent-color);
    }

    .footer .footer-contact p {
        margin-bottom: 5px;
    }

    .footer .copyright {
        padding: 30px 0;
    }

    .footer .copyright p {
        margin-bottom: 0;
    }

    .footer .credits {
        margin-top: 5px;
        font-size: 13px;
    }

    .footer .social-links a {
        font-size: 18px;
        display: inline-block;
        background: color-mix(in srgb, var(--default-color), transparent 92%);
        color: var(--accent-color);
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 4px;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }

    .footer .social-links a:hover {
        color: var(--contrast-color);
        background: var(--accent-color);
        text-decoration: none;
    }

    /*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
    #preloader {
        position: fixed;
        inset: 0;
        z-index: 999999;
        overflow: hidden;
        background: var(--background-color);
        transition: all 0.6s ease-out;
    }

    #preloader:before {
        content: "";
        position: fixed;
        top: calc(50% - 30px);
        left: calc(50% - 30px);
        border: 6px solid #ffffff;
        border-color: var(--accent-color) transparent var(--accent-color) transparent;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: animate-preloader 1.5s linear infinite;
    }

    @keyframes animate-preloader {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /*--------------------------------------------------------------
# Scroll Top Button
--------------------------------------------------------------*/
    .scroll-top {
        position: fixed;
        visibility: hidden;
        opacity: 0;
        right: 15px;
        bottom: 15px;
        z-index: 99999;
        background-color: var(--accent-color);
        width: 40px;
        height: 40px;
        border-radius: 4px;
        transition: all 0.4s;
    }

    .scroll-top i {
        font-size: 24px;
        color: var(--contrast-color);
        line-height: 0;
    }

    .scroll-top:hover {
        background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
        color: var(--contrast-color);
    }

    .scroll-top.active {
        visibility: visible;
        opacity: 1;
    }

    /*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
    @media screen and (max-width: 768px) {
        [data-aos-delay] {
            transition-delay: 0 !important;
        }
    }

    /*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
    .page-title {
        color: var(--default-color);
        background-color: var(--background-color);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 80px 0;
        text-align: center;
        position: relative;
    }

    .page-title:before {
        content: "";
        background-color: color-mix(in srgb, var(--background-color), transparent 50%);
        position: absolute;
        inset: 0;
    }

    .page-title h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .page-title .breadcrumbs ol {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        justify-content: center;
        padding: 0;
        margin: 0;
        font-size: 16px;
        font-weight: 400;
    }

    .page-title .breadcrumbs ol li+li {
        padding-left: 10px;
    }

    .page-title .breadcrumbs ol li+li::before {
        content: "/";
        display: inline-block;
        padding-right: 10px;
        color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    /*--------------------------------------------------------------
# Global Sections
--------------------------------------------------------------*/
    section,
    .section {
        color: var(--default-color);
        background-color: var(--background-color);
        padding: 60px 0;
        scroll-margin-top: 100px;
        overflow: clip;
    }

    @media (max-width: 1199px) {

        section,
        .section {
            scroll-margin-top: 66px;
        }
    }

    /*--------------------------------------------------------------
# Global Section Titles
--------------------------------------------------------------*/
    .section-title {
        text-align: center;
        padding-bottom: 60px;
        position: relative;
    }

    .section-title h2 {
        font-size: 28px;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .section-title p {
        margin-bottom: 0;
        font-family: var(--heading-font);
        font-size: 32px;
    }

    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    .hero {
        padding: 0;
    }

    .hero .carousel {
        width: 100%;
        min-height: calc(100vh - 100px);
        padding: 0;
        margin: 0;
        background-color: var(--background-color);
        position: relative;
    }

    .hero img {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .hero .carousel-item {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .hero .carousel-item:before {
        content: "";
        background: color-mix(in srgb, var(--background-color), transparent 60%);
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    .hero .carousel-container {
        position: absolute;
        inset: 90px 64px 64px 64px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 3;
    }

    .hero h2 {
        margin-bottom: 30px;
        font-size: 48px;
        font-weight: 700;
        animation: fadeInDown 1s both;
    }

    @media (max-width: 768px) {
        .hero h2 {
            font-size: 30px;
        }
    }

    .hero p {
        animation: fadeInDown 1s both 0.2s;
    }

    @media (min-width: 1024px) {

        .hero h2,
        .hero p {
            max-width: 60%;
        }
    }

    .hero .btn-get-started {
        color: var(--contrast-color);
        background: var(--accent-color);
        font-family: var(--heading-font);
        font-weight: 500;
        font-size: 15px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 8px 32px;
        border-radius: 50px;
        transition: 0.5s;
        margin: 10px;
        animation: fadeInUp 1s both 0.4s;
    }

    .hero .btn-get-started:hover {
        background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    .hero .carousel-control-prev,
    .hero .carousel-control-next {
        width: 10%;
        transition: 0.3s;
        opacity: 0.5;
    }

    .hero .carousel-control-prev:focus,
    .hero .carousel-control-next:focus {
        opacity: 0.5;
    }

    .hero .carousel-control-prev:hover,
    .hero .carousel-control-next:hover {
        opacity: 0.9;
    }

    @media (min-width: 1024px) {

        .hero .carousel-control-prev,
        .hero .carousel-control-next {
            width: 5%;
        }
    }

    .hero .carousel-control-next-icon,
    .hero .carousel-control-prev-icon {
        background: none;
        font-size: 32px;
        line-height: 1;
    }

    .hero .carousel-indicators {
        list-style: none;
    }

    .hero .carousel-indicators li {
        cursor: pointer;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    /*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
    .services .section-title h2 {
        color: var(--accent-color);
        font-size: 20px;
    }

    .services .content .service-item {
        background-color: var(--surface-color);
        padding: 20px 30px;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        border-left: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        position: relative;
    }

    .services .content .service-item .number {
        position: absolute;
        right: 10px;
        top: 10px;
        font-weight: 400;
        color: color-mix(in srgb, var(--default-color), transparent 80%);
    }

    .services .content .service-item .service-item-icon {
        position: relative;
        margin-bottom: 20px;
        color: var(--accent-color);
    }

    .services .content .service-item .service-item-icon img {
        width: 50px;
    }

    .services .content .service-item .service-item-icon:before {
        position: absolute;
        content: "";
        transform: rotate(45deg);
        z-index: -1;
        left: -20px;
        border-top: 40px solid transparent;
        border-bottom: 40px solid transparent;
        border-right: 40px solid var(--accent-color);
        display: none;
    }

    .services .content .service-item .service-item-icon>span {
        color: var(--default-color);
        font-size: 4rem;
    }

    .services .content .service-item .service-item-content .service-heading {
        font-size: 20px;
        color: var(--default-color);
        font-weight: 400;
    }

    .services .content .service-item .service-item-content p {
        font-size: 15px;
    }

    @media (min-width: 769px) {
        .services .content [class^=col-]:nth-child(4n+4) .service-item {
            border-right: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .services .content [class^=col-]:nth-last-child(-n+4) .service-item {
            border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }
    }

    @media (max-width: 768px) {
        .services .content [class^=col-]:nth-child(2n+2) .service-item {
            border-right: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .services .content [class^=col-]:last-child .service-item,
        .services .content [class^=col-]:nth-last-child(2) .service-item {
            border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }
    }

    @media (max-width: 576px) {
        .services .content [class^=col-] .service-item {
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
            margin-bottom: 10px;
        }
    }

    /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
    .about .section-title {
        margin-bottom: 60px;
    }

    .about .content {
        background: var(--accent-color);
        color: var(--contrast-color);
        padding: 7rem 0;
    }

    .about .content .img-overlap {
        margin-top: -150px;
    }

    .about p {
        color: var(--contrast-color);
    }

    .about .content-title {
        color: var(--contrast-color);
        font-weight: 300;
        text-align: left;
    }

    .about .content-title strong {
        font-weight: 700;
    }

    .about .content-subtitle {
        font-weight: 300;
        color: var(--contrast-color);
        text-transform: uppercase;
        font-size: 1.3rem;
    }

    /*--------------------------------------------------------------
# Services 2 Section
--------------------------------------------------------------*/
    .services-2 {
        overflow: visible;
        margin-bottom: 200px;
    }

    .services-2 .section-title {
        text-align: left;
    }

    .services-2 .section-title h2 {
        color: color-mix(in srgb, var(--contrast-color), transparent 50%);
        text-transform: uppercase;
        font-size: 20px;
    }

    .services-2 .section-title p {
        color: var(--contrast-color);
    }

    .services-2 .services-carousel-wrap {
        position: relative;
        margin-bottom: -200px;
    }

    .services-2 .swiper-wrapper {
        height: auto;
    }

    .services-2 .service-item {
        position: relative;
        overflow: hidden;
    }

    .services-2 .service-item:before {
        content: "";
        background-color: color-mix(in srgb, var(--background-color), transparent 50%);
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        z-index: 1;
        transition: 0.3s all ease;
    }

    .services-2 .service-item img {
        transition: 0.5s all ease;
        transform: scale(1);
    }

    .services-2 .service-item .service-item-contents {
        z-index: 9;
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        transition: 0.3s all ease;
        transform: translateY(100%);
        opacity: 0;
        visibility: hidden;
    }

    .services-2 .service-item .service-item-contents .service-item-category {
        color: var(--accent-color);
        text-transform: uppercase;
    }

    .services-2 .service-item .service-item-contents .service-item-title {
        color: var(--contrast-color);
        margin-bottom: 0;
    }

    .services-2 .service-item:hover:before {
        opacity: 1;
        visibility: visible;
    }

    .services-2 .service-item:hover .service-item-contents {
        transform: translateY(0%);
        opacity: 1;
        visibility: visible;
    }

    .services-2 .service-item:hover img {
        transform: scale(1.2);
    }

    .services-2 .navigation-prev,
    .services-2 .navigation-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 9;
        width: 46px;
        height: 46px;
        background: var(--contrast-color);
        background-color: none;
        border: none;
        transition: 0.3s all ease;
    }

    .services-2 .navigation-prev i,
    .services-2 .navigation-next i {
        font-size: 2rem;
    }

    .services-2 .navigation-prev:hover,
    .services-2 .navigation-next:hover {
        background-color: var(--accent-color);
        color: var(--contrast-color);
    }

    .services-2 .navigation-prev {
        left: 10px;
    }

    .services-2 .navigation-next {
        right: 10px;
    }

    .services-2 .swiper {
        padding-bottom: 50px;
    }

    .services-2 .swiper-pagination {
        bottom: 0px;
    }

    .services-2 .swiper-pagination .swiper-pagination-bullet {
        border-radius: 0;
        width: 20px;
        height: 4px;
        background-color: color-mix(in srgb, var(--background-color), transparent 80%) !important;
        opacity: 1;
    }

    .services-2 .swiper-pagination .swiper-pagination-bullet-active {
        background-color: var(--accent-color) !important;
    }

    /*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
    .testimonials .testimonial img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .testimonials .testimonial blockquote p {
        font-size: 20px;
        color: var(--default-color);
        font-weight: 500;
    }

    .testimonials .testimonial .client-name {
        text-transform: uppercase;
        font-size: 1.2rem;
        color: var(--accent-color);
    }

    /*--------------------------------------------------------------
# Recent Posts Section
--------------------------------------------------------------*/
    .recent-posts .post-item {
        background: var(--surface-color);
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .recent-posts .post-item .post-img img {
        transition: 0.5s;
    }

    .recent-posts .post-item .post-date {
        position: absolute;
        right: 0;
        bottom: 0;
        background-color: var(--accent-color);
        color: var(--contrast-color);
        text-transform: uppercase;
        font-size: 13px;
        padding: 6px 12px;
        font-weight: 500;
    }

    .recent-posts .post-item .post-content {
        padding: 30px;
    }

    .recent-posts .post-item .post-title {
        color: var(--heading-color);
        font-size: 20px;
        font-weight: 700;
        transition: 0.3s;
        margin-bottom: 15px;
    }

    .recent-posts .post-item .meta i {
        font-size: 16px;
        color: var(--accent-color);
    }

    .recent-posts .post-item .meta span {
        font-size: 15px;
        color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .recent-posts .post-item hr {
        color: color-mix(in srgb, var(--default-color), transparent 80%);
        margin: 20px 0;
    }

    .recent-posts .post-item .readmore {
        display: flex;
        align-items: center;
        font-weight: 600;
        line-height: 1;
        transition: 0.3s;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .recent-posts .post-item .readmore i {
        line-height: 0;
        margin-left: 6px;
        font-size: 16px;
    }

    .recent-posts .post-item:hover .post-title,
    .recent-posts .post-item:hover .readmore {
        color: var(--accent-color);
    }

    .recent-posts .post-item:hover .post-img img {
        transform: scale(1.1);
    }

    /*--------------------------------------------------------------
# Call To Action Section
--------------------------------------------------------------*/
    .call-to-action .content {
        padding: 20px 0;
    }

    .call-to-action .content h3 {
        font-weight: 300;
        text-transform: uppercase;
    }

    .call-to-action .content .form-subscribe .form-control {
        border: 2px solid var(--accent-color);
        background: var(--surface-color);
        border-radius: 0;
    }

    .call-to-action .content .form-subscribe input[type=email] {
        height: 63px !important;
        color: var(--default-color);
    }

    .call-to-action .content .form-subscribe input[type=email]:focus {
        box-shadow: none;
    }

    .call-to-action .content .form-subscribe input[type=email]::placeholder {
        color: color-mix(in srgb, var(--contrast-color), transparent 50%);
    }

    .call-to-action .content .loading,
    .call-to-action .content .error-message,
    .call-to-action .content .sent-message {
        margin-top: 15px;
    }

    .call-to-action .content .btn {
        color: var(--contrast-color);
        background-color: var(--accent-color);
        border: 1px solid var(--accent-color);
        border-radius: 0;
    }

    .call-to-action .content .btn:hover,
    .call-to-action .content .btn:active,
    .call-to-action .content .btn:focus {
        box-shadow: none;
        outline: none;
        background-color: var(--contrast-color);
        border: 1px solid var(--contrrast-color);
    }

    /*--------------------------------------------------------------
# About 3 Section
--------------------------------------------------------------*/
    .about-3 .content-title {
        color: var(--accent-color);
        margin-bottom: 30px;
    }

    .about-3 .btn-cta {
        text-transform: uppercase;
        font-size: 14px;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 30px;
        padding-right: 30px;
        background-color: var(--accent-color);
        color: var(--contrast-color);
        border-radius: 6px;
    }

    .about-3 .list-check {
        margin-bottom: 50px;
    }

    .about-3 .list-check li {
        display: block;
        padding-left: 30px;
        position: relative;
    }

    .about-3 .list-check li:before {
        content: "\f26e";
        display: inline-block;
        font-family: "bootstrap-icons" !important;
        font-style: normal;
        font-weight: normal !important;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        vertical-align: -0.125em;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        top: 0.1rem;
        font-size: 20px;
        left: 0;
        color: var(--accent-color);
    }

    .about-3 .pulsating-play-btn {
        position: absolute;
        left: calc(50% - 47px);
        top: calc(50% - 47px);
    }

    /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
    .team .person {
        position: relative;
    }

    .team .person figure {
        margin-bottom: 0;
        padding-bottom: 0;
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
    }

    .team .person img {
        transition: 0.3s all ease;
    }

    .team .person .person-contents {
        text-align: center;
    }

    .team .person .person-contents h3 {
        color: var(--heading-color);
        font-size: 24px;
    }

    .team .person .person-contents .position {
        color: var(--accent-color);
    }

    .team .person:hover img {
        transform: scale(1.05);
    }

    .team .person .social {
        position: absolute;
        bottom: 10px;
        left: 10px;
        z-index: 2;
    }

    .team .person .social a {
        display: block;
        margin-bottom: 10px;
        width: 40px;
        height: 40px;
        background: var(--contrast-color);
        position: relative;
    }

    .team .person .social a>span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .team .person .social a:hover {
        background: var(--accent-color);
        color: var(--contrast-color);
    }

    /*--------------------------------------------------------------
# Blog Posts 2 Section
--------------------------------------------------------------*/
    .blog-posts-2 article {
        background-color: var(--surface-color);
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        border-radius: 8px;
        overflow: hidden;
    }

    .blog-posts-2 .post-img img {
        transition: 0.5s;
    }

    .blog-posts-2 .post-content {
        padding: 30px;
    }

    .blog-posts-2 .post-title {
        font-size: 20px;
        line-height: 24px;
        color: var(--heading-color);
        font-weight: 600;
        transition: 0.3s;
        margin-bottom: 20px;
    }

    .blog-posts-2 .meta {
        position: relative;
        margin-top: -20px;
        padding: 0 30px;
    }

    .blog-posts-2 .meta i {
        font-size: 16px;
        color: var(--accent-color);
    }

    .blog-posts-2 .meta span {
        font-size: 15px;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-posts-2 .meta .post-date {
        background-color: var(--accent-color);
        color: var(--contrast-color);
        font-size: 13px;
        padding: 6px 12px;
        text-align: center;
        margin-right: 15px;
        border-radius: 4px;
    }

    .blog-posts-2 .meta .post-date span {
        display: block;
        color: var(--contrast-color);
        font-weight: 700;
        font-size: 20px;
    }

    .blog-posts-2 .readmore {
        display: flex;
        align-items: center;
        font-weight: 400;
        line-height: 1;
        transition: 0.3s;
        color: color-mix(in srgb, var(--heading-color), transparent 20%);
    }

    .blog-posts-2 .readmore i {
        line-height: 0;
        margin-left: 6px;
        font-size: 16px;
    }

    .blog-posts-2 article:hover .post-title,
    .blog-posts-2 article:hover .readmore {
        color: var(--accent-color);
    }

    .blog-posts-2 article:hover .post-img img {
        transform: scale(1.1);
    }

    /*--------------------------------------------------------------
# Blog Pagination Section
--------------------------------------------------------------*/
    .blog-pagination {
        padding-top: 0;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-pagination ul {
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .blog-pagination li {
        margin: 0 5px;
        transition: 0.3s;
    }

    .blog-pagination li a {
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        padding: 7px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blog-pagination li a.active,
    .blog-pagination li a:hover {
        background: var(--accent-color);
        color: var(--contrast-color);
    }

    .blog-pagination li a.active a,
    .blog-pagination li a:hover a {
        color: var(--contrast-color);
    }

    /*--------------------------------------------------------------
# Blog Details Section
--------------------------------------------------------------*/
    .blog-details {
        padding-bottom: 30px;
    }

    .blog-details .article {
        background-color: var(--surface-color);
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog-details .post-img {
        margin: -30px -30px 20px -30px;
        overflow: hidden;
    }

    .blog-details .title {
        color: var(--heading-color);
        font-size: 28px;
        font-weight: 700;
        padding: 0;
        margin: 30px 0;
    }

    .blog-details .content {
        margin-top: 20px;
    }

    .blog-details .content h3 {
        font-size: 22px;
        margin-top: 30px;
        font-weight: bold;
    }

    .blog-details .content blockquote {
        overflow: hidden;
        background-color: color-mix(in srgb, var(--default-color), transparent 95%);
        padding: 60px;
        position: relative;
        text-align: center;
        margin: 20px 0;
    }

    .blog-details .content blockquote p {
        color: var(--default-color);
        line-height: 1.6;
        margin-bottom: 0;
        font-style: italic;
        font-weight: 500;
        font-size: 22px;
    }

    .blog-details .content blockquote:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background-color: var(--accent-color);
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .blog-details .meta-top {
        margin-top: 20px;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-details .meta-top ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .blog-details .meta-top ul li+li {
        padding-left: 20px;
    }

    .blog-details .meta-top i {
        font-size: 16px;
        margin-right: 8px;
        line-height: 0;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-details .meta-top a {
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        font-size: 14px;
        display: inline-block;
        line-height: 1;
    }

    .blog-details .meta-bottom {
        padding-top: 10px;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .blog-details .meta-bottom i {
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        display: inline;
    }

    .blog-details .meta-bottom a {
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        transition: 0.3s;
    }

    .blog-details .meta-bottom a:hover {
        color: var(--accent-color);
    }

    .blog-details .meta-bottom .cats {
        list-style: none;
        display: inline;
        padding: 0 20px 0 0;
        font-size: 14px;
    }

    .blog-details .meta-bottom .cats li {
        display: inline-block;
    }

    .blog-details .meta-bottom .tags {
        list-style: none;
        display: inline;
        padding: 0;
        font-size: 14px;
    }

    .blog-details .meta-bottom .tags li {
        display: inline-block;
    }

    .blog-details .meta-bottom .tags li+li::before {
        padding-right: 6px;
        color: var(--default-color);
        content: ",";
    }

    .blog-details .meta-bottom .share {
        font-size: 16px;
    }

    .blog-details .meta-bottom .share i {
        padding-left: 5px;
    }

    /*--------------------------------------------------------------
# Blog Comments Section
--------------------------------------------------------------*/
    .blog-comments {
        padding: 10px 0;
    }

    .blog-comments .comments-count {
        font-weight: bold;
    }

    .blog-comments .comment {
        margin-top: 30px;
        position: relative;
    }

    .blog-comments .comment .comment-img {
        margin-right: 14px;
    }

    .blog-comments .comment .comment-img img {
        width: 60px;
    }

    .blog-comments .comment h5 {
        font-size: 16px;
        margin-bottom: 2px;
    }

    .blog-comments .comment h5 a {
        font-weight: bold;
        color: var(--default-color);
        transition: 0.3s;
    }

    .blog-comments .comment h5 a:hover {
        color: var(--accent-color);
    }

    .blog-comments .comment h5 .reply {
        padding-left: 10px;
        color: color-mix(in srgb, var(--default-color), transparent 20%);
    }

    .blog-comments .comment h5 .reply i {
        font-size: 20px;
    }

    .blog-comments .comment time {
        display: block;
        font-size: 14px;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        margin-bottom: 5px;
    }

    .blog-comments .comment.comment-reply {
        padding-left: 40px;
    }

    /*--------------------------------------------------------------
# Comment Form Section
--------------------------------------------------------------*/
    .comment-form {
        padding-top: 10px;
    }

    .comment-form form {
        background-color: var(--surface-color);
        margin-top: 30px;
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .comment-form form h4 {
        font-weight: bold;
        font-size: 22px;
    }

    .comment-form form p {
        font-size: 14px;
    }

    .comment-form form input {
        background-color: var(--surface-color);
        color: var(--default-color);
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
        font-size: 14px;
        border-radius: 4px;
        padding: 10px 10px;
    }

    .comment-form form input:focus {
        color: var(--default-color);
        background-color: var(--surface-color);
        box-shadow: none;
        border-color: var(--accent-color);
    }

    .comment-form form input::placeholder {
        color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .comment-form form textarea {
        background-color: var(--surface-color);
        color: var(--default-color);
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
        border-radius: 4px;
        padding: 10px 10px;
        font-size: 14px;
        height: 120px;
    }

    .comment-form form textarea:focus {
        color: var(--default-color);
        box-shadow: none;
        border-color: var(--accent-color);
        background-color: var(--surface-color);
    }

    .comment-form form textarea::placeholder {
        color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .comment-form form .form-group {
        margin-bottom: 25px;
    }

    .comment-form form .btn-primary {
        border-radius: 4px;
        padding: 10px 20px;
        border: 0;
        background-color: var(--accent-color);
        color: var(--contrast-color);
    }

    .comment-form form .btn-primary:hover {
        color: var(--contrast-color);
        background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    /*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
    .contact {
        padding-top: 10px;
    }

    .contact .info {
        background-color: var(--surface-color);
        padding: 40px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .contact .info h3 {
        font-weight: 600;
        font-size: 24px;
    }

    .contact .info p {
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        margin-bottom: 30px;
        font-size: 15px;
    }

    .contact .info-item+.info-item {
        padding-top: 20px;
        margin-top: 20px;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .contact .info-item i {
        font-size: 24px;
        color: var(--accent-color);
        transition: all 0.3s ease-in-out;
        margin-right: 20px;
    }

    .contact .info-item h4 {
        padding: 0;
        font-size: 18px;
        line-height: 24px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .contact .info-item p {
        padding: 0;
        margin-bottom: 0;
        font-size: 14px;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .contact .php-email-form {
        width: 100%;
    }

    .contact .php-email-form .form-group {
        padding-bottom: 8px;
    }

    .contact .php-email-form input[type=text],
    .contact .php-email-form input[type=email],
    .contact .php-email-form textarea {
        color: var(--default-color);
        background-color: var(--surface-color);
        border-radius: 0px;
        box-shadow: none;
        font-size: 14px;
        border-color: color-mix(in srgb, var(--default-color), transparent 80%);
    }

    .contact .php-email-form input[type=text]:focus,
    .contact .php-email-form input[type=email]:focus,
    .contact .php-email-form textarea:focus {
        border-color: var(--accent-color);
    }

    .contact .php-email-form input[type=text]::placeholder,
    .contact .php-email-form input[type=email]::placeholder,
    .contact .php-email-form textarea::placeholder {
        color: color-mix(in srgb, var(--default-color), transparent 70%);
    }

    .contact .php-email-form input[type=text],
    .contact .php-email-form input[type=email] {
        height: 48px;
        padding: 10px 15px;
    }

    .contact .php-email-form textarea {
        padding: 10px 12px;
        height: 290px;
    }

    .contact .php-email-form button[type=submit] {
        background: var(--accent-color);
        color: var(--contrast-color);
        border: 0;
        padding: 13px 50px;
        transition: 0.4s;
        border-radius: 4px;
    }

    .contact .php-email-form button[type=submit]:hover {
        background: color-mix(in srgb, var(--accent-color) 90%, black 15%);
    }

    /*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
    .widgets-container {
        margin: 60px 0 30px 0;
    }

    .widget-title {
        color: var(--heading-color);
        font-size: 20px;
        font-weight: 600;
        padding: 0 0 10px 0;
        margin: 0 0 20px 0;
        position: relative;
    }

    .widget-title:before {
        content: "";
        position: absolute;
        display: block;
        height: 2px;
        background: color-mix(in srgb, var(--default-color), transparent 90%);
        left: 0;
        right: 0;
        bottom: 1px;
    }

    .widget-title:after {
        content: "";
        position: absolute;
        display: block;
        width: 40px;
        height: 2px;
        background: var(--accent-color);
        left: 0;
        bottom: 1px;
    }

    .widget-item {
        margin-bottom: 40px;
    }

    .widget-item:last-child {
        margin-bottom: 0;
    }

    .recent-posts-widget .post-item {
        display: flex;
        margin-bottom: 15px;
    }

    .recent-posts-widget .post-item:last-child {
        margin-bottom: 0;
    }

    .recent-posts-widget .post-item img {
        width: 80px;
        margin-right: 15px;
    }

    .recent-posts-widget .post-item h4 {
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .recent-posts-widget .post-item h4 a {
        color: var(--default-color);
        transition: 0.3s;
    }

    .recent-posts-widget .post-item h4 a:hover {
        color: var(--accent-color);
    }

    .recent-posts-widget .post-item time {
        display: block;
        font-style: italic;
        font-size: 14px;
        color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .categories-widget ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .categories-widget ul li {
        padding-bottom: 10px;
    }

    .categories-widget ul li:last-child {
        padding-bottom: 0;
    }

    .categories-widget ul a {
        color: color-mix(in srgb, var(--default-color), transparent 20%);
        transition: 0.3s;
    }

    .categories-widget ul a:hover {
        color: var(--accent-color);
    }

    .categories-widget ul a span {
        padding-left: 5px;
        color: color-mix(in srgb, var(--default-color), transparent 50%);
        font-size: 14px;
    }

    .blog-author-widget img {
        max-width: 120px;
        margin-right: 20px;
    }

    .blog-author-widget h4 {
        font-weight: 600;
        font-size: 24px;
        margin-bottom: 0px;
        padding: 0;
        color: color-mix(in srgb, var(--default-color), transparent 20%);
    }

    .blog-author-widget .social-links {
        margin: 5px 0;
    }

    .blog-author-widget .social-links a {
        color: color-mix(in srgb, var(--default-color), transparent 60%);
        margin-right: 5px;
        font-size: 18px;
    }

    .blog-author-widget .social-links a:hover {
        color: var(--accent-color);
    }

    .blog-author-widget p {
        font-style: italic;
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        margin: 10px 0 0 0;
    }

    .search-widget form {
        background: var(--background-color);
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
        padding: 3px 10px;
        position: relative;
        transition: 0.3s;
    }

    .search-widget form input[type=text] {
        border: 0;
        padding: 4px;
        border-radius: 4px;
        width: calc(100% - 40px);
        background-color: var(--background-color);
        color: var(--default-color);
    }

    .search-widget form input[type=text]:focus {
        outline: none;
    }

    .search-widget form button {
        background: var(--accent-color);
        color: var(--contrast-color);
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        font-size: 16px;
        padding: 0 15px;
        margin: -1px;
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
        line-height: 0;
    }

    .search-widget form button i {
        line-height: 0;
    }

    .search-widget form button:hover {
        background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    .search-widget form:is(:focus-within) {
        border-color: var(--accent-color);
    }

    .recent-posts-widget-2 .post-item {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .recent-posts-widget-2 .post-item:last-child {
        margin-bottom: 0;
    }

    .recent-posts-widget-2 .post-item h4 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .recent-posts-widget-2 .post-item h4 a {
        color: var(--default-color);
        transition: 0.3s;
    }

    .recent-posts-widget-2 .post-item h4 a:hover {
        color: var(--accent-color);
    }

    .recent-posts-widget-2 .post-item time {
        display: block;
        font-style: italic;
        font-size: 14px;
        color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .tags-widget ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tags-widget ul li {
        display: inline-block;
    }

    .tags-widget ul a {
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        font-size: 14px;
        padding: 6px 14px;
        margin: 0 6px 8px 0;
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 60%);
        display: inline-block;
        transition: 0.3s;
    }

    .tags-widget ul a:hover {
        background: var(--accent-color);
        color: var(--contrast-color);
        border: 1px solid var(--accent-color);
    }

    .tags-widget ul a span {
        padding-left: 5px;
        color: color-mix(in srgb, var(--default-color), transparent 60%);
        font-size: 14px;
    }
</style>

<style>
    .clockrow {
        display: inline-block;
        text-align: center;
        margin: 0 5px;
    }

    .smalltext {
        display: block;
        font-size: 12px;
    }

    #search {
        display: none;
        width: 200px;
    }

    #wrap:hover #search,
    #wrap:focus-within #search {
        display: inline-block;
    }

    .social-links a {
        margin: 0 10px;
        color: #000;
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5);
    }

    /* New styles for better mobile navigation */
    .navbar-toggler {
        border: none;
    }

    .navbar-toggler:focus {
        outline: none;
    }

    .navbar-toggler-icon {
        color: #000;
        font-size: 1.25rem;
    }

    .navbar-collapse {
        text-align: center;
    }

    .nav-item {
        margin: 5px 0;
    }

    .nav-item .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background: none;
        border: none;
        box-shadow: none;
    }

    .nav-item .dropdown-menu .dropdown-item {
        padding: 5px 10px;
    }

    .nav-item .dropdown-menu .dropdown-item .active {
        padding: 5px 10px;
        background-color: red;
    }

    .dropdown-menu .dropdown-item.dropdown-toggle::after {
        margin-left: .255em;
        vertical-align: .255em;
        content: "\f0da";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        display: inline-block;
    }

    .nav-item .dropdown-menu .dropdown-menu {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        margin-top: -1px;
    }

    .nav-item .dropdown-menu .dropdown-menu.show {
        display: block;
    }

    @media (max-width: 767px) {
        .navbar-nav {
            margin-top: 1rem;
        }

        .navbar-nav .nav-item {
            margin: 0;
        }

        .navbar-nav .nav-link {
            padding: .5rem 1rem;
        }

        .navbar-collapse {
            justify-content: center;
        }
    }

    .logo-link {
        padding: 0 10px;
        /* Adjust padding to reduce the space between logos */
    }

    .logo-link img {
        max-width: 80px;
        /* Adjust the maximum width if needed */
    }

    @media (max-width: 767px) {
        .container {
            justify-content: center;
        }

        .logo-link {
            padding: 0 5px;
            /* Further reduce padding for mobile */
        }
    }
</style>
