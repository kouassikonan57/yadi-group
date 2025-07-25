<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Yadi Group</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link
    href="assets/vendor/bootstrap/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link
    href="assets/vendor/glightbox/css/glightbox.min.css"
    rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />

  <style>
    /* Fonts */
    :root {
      --default-font: "Roboto", system-ui, -apple-system, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --heading-font: "Raleway", sans-serif;
      --nav-font: "Inter", sans-serif;
    }

    /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
    :root {
      --background-color: #ffffff;
      /* Background color for the entire website, including individual sections */
      --default-color: #444444;
      /* Default color used for the majority of the text content across the entire website */
      --heading-color: #273d4e;
      /* Color for headings, subheadings and title throughout the website */
      --accent-color: #ff4a17;
      /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
      --surface-color: #ffffff;
      /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
      --contrast-color: #ffffff;
      /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
    }

    /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
    :root {
      --nav-color: #e5eaee;
      /* The default color of the main navmenu links */
      --nav-hover-color: #ff4a17;
      /* Applied to main navmenu links when they are hovered over or active */
      --nav-mobile-background-color: #ffffff;
      /* Used as the background color for mobile navigation menu */
      --nav-dropdown-background-color: #ffffff;
      /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
      --nav-dropdown-color: #444444;
      /* Used for navigation links of the dropdown items in the navigation menu. */
      --nav-dropdown-hover-color: #ff4a17;
      /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
    }

    /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

    .light-background {
      --background-color: #f1f4fa;
      --surface-color: #ffffff;
    }

    .dark-background {
      --background-color: #000910;
      --default-color: #ffffff;
      --heading-color: #ffffff;
      --surface-color: #28323a;
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
      background: #059652;
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
      background: radial-gradient(var(--accent-color) 50%,
          color-mix(in srgb, var(--accent-color), transparent 75%) 52%);
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
      --background-color: rgba(0, 0, 0, 0);
      --default-color: #ffffff;
      --heading-color: #ffffff;
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
      max-height: 80px;
      margin-right: 8px;
    }

    .header .logo h1 {
      font-size: 30px;
      margin: 0;
      font-weight: 700;
      color: var(--heading-color);
    }

    .header .cta-btn,
    .header .cta-btn:focus {
      color: var(--contrast-color);
      font-size: 13px;
      padding: 7px 25px;
      margin: 0 0 0 30px;
      border-radius: 4px;
      transition: 0.3s;
      text-transform: uppercase;
      border: 2px solid var(--contrast-color);
    }

    .header .cta-btn:hover,
    .header .cta-btn:focus:hover {
      color: var(--contrast-color);
      background: var(--accent-color);
      border-color: var(--accent-color);
    }

    @media (max-width: 1200px) {
      .header .logo {
        order: 1;
      }

      .header .cta-btn {
        order: 2;
        margin: 0 15px 0 0;
        padding: 6px 15px;
      }

      .header .navmenu {
        order: 3;
      }
    }

    .scrolled .header {
      box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
    }

    /* Global Header on Scroll
------------------------------*/
    .scrolled .header {
      --background-color: rgba(21, 34, 43, 0.85);
    }

    /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
    /* Desktop Navigation */
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

      .navmenu>ul>li {
        white-space: nowrap;
        padding: 15px 14px;
      }

      .navmenu>ul>li:last-child {
        padding-right: 0;
      }

      .navmenu a,
      .navmenu a:focus {
        color: var(--nav-color);
        font-size: 13px;
        padding: 0 2px;
        font-family: var(--nav-font);
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: space-between;
        white-space: nowrap;
        transition: 0.3s;
        position: relative;
        text-transform: uppercase;
      }

      .navmenu a i,
      .navmenu a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
        transition: 0.3s;
      }

      .navmenu>ul>li>a:before {
        content: "";
        position: absolute;
        height: 2px;
        bottom: -6px;
        left: 0;
        background-color: var(--nav-hover-color);
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
      }

      .navmenu a:hover:before,
      .navmenu li:hover>a:before,
      .navmenu .active:before {
        visibility: visible;
        width: 100%;
      }

      .navmenu li:hover>a,
      .navmenu .active,
      .navmenu .active:focus {
        color: color-mix(in srgb, var(--nav-color) 90%, white 15%);
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
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
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

    /* Mobile Navigation */
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
        list-style: none;
        position: absolute;
        inset: 60px 20px 20px 20px;
        padding: 10px 0;
        margin: 0;
        border-radius: 6px;
        background-color: var(--nav-mobile-background-color);
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        box-shadow: none;
        overflow-y: auto;
        transition: 0.3s;
        z-index: 9998;
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
      padding-top: 50px;
      border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
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
      font-size: 26px;
      font-weight: 700;
      letter-spacing: 1px;
      font-family: var(--heading-font);
      color: var(--heading-color);
    }

    .footer .footer-about p {
      font-size: 14px;
      font-family: var(--heading-font);
    }

    .footer .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
      font-size: 16px;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
      margin-right: 10px;
      transition: 0.3s;
    }

    .footer .social-links a:hover {
      color: var(--accent-color);
      border-color: var(--accent-color);
    }

    .footer h4 {
      font-size: 16px;
      font-weight: bold;
      position: relative;
      padding-bottom: 12px;
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
      padding-right: 3px;
      font-size: 13px;
      line-height: 0;
      color: var(--accent-color);
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

    .footer .footer-newsletter .newsletter-form {
      margin-top: 30px;
      margin-bottom: 15px;
      padding: 6px 8px;
      position: relative;
      border-radius: 4px;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
      display: flex;
      background-color: var(--background-color);
      transition: 0.3s;
    }

    .footer .footer-newsletter .newsletter-form:focus-within {
      border-color: var(--accent-color);
    }

    .footer .footer-newsletter .newsletter-form input[type="email"] {
      border: 0;
      padding: 4px;
      width: 100%;
      background-color: var(--background-color);
      color: var(--default-color);
    }

    .footer .footer-newsletter .newsletter-form input[type="email"]:focus-visible {
      outline: none;
    }

    .footer .footer-newsletter .newsletter-form input[type="submit"] {
      border: 0;
      font-size: 16px;
      padding: 0 20px;
      margin: -7px -8px -7px 0;
      background: var(--accent-color);
      color: var(--contrast-color);
      transition: 0.3s;
      border-radius: 0 4px 4px 0;
    }

    .footer .footer-newsletter .newsletter-form input[type="submit"]:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    .footer .copyright {
      padding: 25px 0;
      border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .footer .copyright p {
      margin-bottom: 0;
    }

    .footer .credits {
      margin-top: 6px;
      font-size: 13px;
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
      padding: 160px 0 80px 0;
      text-align: center;
      position: relative;
    }

    .page-title:before {
      content: "";
      background: color-mix(in srgb, var(--background-color), transparent 30%);
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
      scroll-margin-top: 90px;
      overflow: clip;
    }

    @media (max-width: 1199px) {

      section,
      .section {
        scroll-margin-top: 76px;
      }
    }

    /*--------------------------------------------------------------
# Global Section Titles
--------------------------------------------------------------*/
    .section-title {
      padding-bottom: 60px;
      position: relative;
    }

    .section-title h2 {
      font-size: 14px;
      font-weight: 500;
      padding: 0;
      line-height: 1px;
      margin: 0;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: color-mix(in srgb, var(--default-color), transparent 50%);
      position: relative;
    }

    .section-title h2::after {
      content: "";
      width: 120px;
      height: 1px;
      display: inline-block;
      background: var(--accent-color);
      margin: 4px 10px;
    }

    .section-title p {
      color: var(--heading-color);
      margin: 0;
      font-size: 36px;
      font-weight: 800;
      text-transform: uppercase;
      font-family: var(--heading-font);
    }

    @media (max-width: 768px) {
      .section-title p {
        font-size: 24px;
      }
    }

    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    .hero {
      width: 100%;
      min-height: 100vh;
      position: relative;
      padding: 80px 0;
      display: flex;
      align-items: center;
      justify-content: center;
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

    .hero:before {
      content: "";
      background: color-mix(in srgb, var(--background-color), transparent 30%);
      position: absolute;
      inset: 0;
      z-index: 2;
    }

    .hero .container {
      position: relative;
      z-index: 3;
    }

    .hero h2 {
      margin: 0;
      font-size: 48px;
      font-weight: 700;
      text-transform: uppercase;
    }

    .hero p {
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      margin: 10px 0 0 0;
      font-size: 24px;
    }

    .hero .btn-get-started {
      background: var(--accent-color);
      color: var(--contrast-color);
      font-weight: 400;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 30px;
      border-radius: 4px;
      transition: 0.3s;
      text-transform: uppercase;
    }

    .hero .btn-get-started:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    .hero .btn-watch-video {
      font-size: 16px;
      transition: 0.5s;
      margin-left: 25px;
      font-weight: 400;
      color: var(--default-color);
    }

    .hero .btn-watch-video i {
      color: var(--accent-color);
      font-size: 32px;
      transition: 0.3s;
      line-height: 0;
      margin-right: 8px;
    }

    .hero .btn-watch-video:hover {
      color: var(--accent-color);
    }

    .hero .btn-watch-video:hover i {
      color: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    @media (max-width: 768px) {
      .hero h2 {
        font-size: 32px;
      }

      .hero p {
        font-size: 18px;
      }
    }

    .hero {
      width: 100%;
      min-height: 100vh;
      position: relative;
      overflow: hidden;
    }

    /* Video Background Only */
    .hero-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 2;
    }

    /* Slides Container */
    .hero-slides {
      position: relative;
      width: 100%;
      height: 100vh;
      z-index: 3;
    }

    /* Individual Slides */
    .slide {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: opacity 1.2s ease;
    }

    .slide.active {
      opacity: 1;
    }

    /* Transparent Image Over Video */
    .slide-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 110%;
      background-size: cover;
      background-position: center;
      opacity: 0.5;
      /* Adjust transparency here */
      z-index: 1;
    }

    /* Content Styling (from your original CSS) */
    .slide-content {
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      z-index: 2;
    }

    .hero h2 {
      margin: 0;
      font-size: 48px;
      font-weight: 700;
      text-transform: uppercase;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero p {
      color: rgba(255, 255, 255, 0.9);
      margin: 10px 0 0 0;
      font-size: 24px;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .hero .btn-get-started {
      background: var(--accent-color);
      color: var(--contrast-color);
      font-weight: 400;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 30px;
      border-radius: 4px;
      transition: 0.3s;
      text-transform: uppercase;
      margin-top: 20px;
    }

    .hero .btn-get-started:hover {
      background: rgba(var(--accent-color-rgb), 0.8);
    }

    /* Navigation */
    .slide-nav {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 10px;
      z-index: 4;
    }

    .nav-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .nav-dot.active {
      background: var(--accent-color);
      transform: scale(1.3);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero h2 {
        font-size: 32px;
      }

      .hero p {
        font-size: 18px;
      }
    }

    /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
    .about h3 {
      font-weight: 700;
      font-size: 28px;
      margin-bottom: 20px;
    }

    .about .fst-italic {
      color: color-mix(in srgb, var(--default-color), var(--contrast-color) 50%);
    }

    .about .content ul {
      list-style: none;
      padding: 0;
    }

    .about .content ul li {
      padding: 0 0 10px 30px;
      position: relative;
    }

    .about .content ul i {
      position: absolute;
      font-size: 20px;
      left: 0;
      top: -3px;
      color: var(--accent-color);
    }

    .about .content p:last-child {
      margin-bottom: 0;
    }

    .about .pulsating-play-btn {
      position: absolute;
      left: calc(50% - 47px);
      top: calc(50% - 47px);
    }

    /*--------------------------------------------------------------
# Stats Section
--------------------------------------------------------------*/
    .stats .stats-item {
      background-color: var(--surface-color);
      box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .stats .stats-item i {
      color: var(--accent-color);
      font-size: 42px;
      line-height: 0;
      margin-right: 20px;
    }

    .stats .stats-item span {
      color: var(--heading-color);
      font-size: 36px;
      display: block;
      font-weight: 600;
    }

    .stats .stats-item p {
      padding: 0;
      margin: 0;
      font-family: var(--heading-font);
      font-size: 16px;
    }

    /*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
    .services .img {
      border-radius: 8px;
      overflow: hidden;
    }

    .services .img img {
      transition: 0.6s;
    }

    .services .details {
      background: color-mix(in srgb, var(--surface-color), transparent 5%);
      padding: 50px 30px;
      margin: -100px 30px 0 30px;
      transition: all ease-in-out 0.3s;
      position: relative;
      text-align: center;
      border-radius: 8px;
      box-shadow: 0px 0 25px rgba(0, 0, 0, 0.1);
    }

    .services .details .icon {
      margin: 0;
      width: 72px;
      height: 72px;
      background: var(--accent-color);
      color: var(--contrast-color);
      border: 6px solid var(--contrast-color);
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      font-size: 28px;
      transition: ease-in-out 0.3s;
      position: absolute;
      top: -36px;
      left: calc(50% - 36px);
    }

    .services .details h3 {
      font-weight: 700;
      margin: 10px 0 15px 0;
      font-size: 22px;
      transition: ease-in-out 0.3s;
    }

    .services .details p {
      color: color-mix(in srgb, var(--default-color), transparent 10%);
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .services .service-item:hover .details h3 {
      color: var(--accent-color);
    }

    .services .service-item:hover .details .icon {
      background: var(--surface-color);
      border: 2px solid var(--accent-color);
    }

    .services .service-item:hover .details .icon i {
      color: var(--accent-color);
    }

    .services .service-item:hover .img img {
      transform: scale(1.2);
    }

    /*--------------------------------------------------------------
# Clients Section
--------------------------------------------------------------*/
    .clients {
      padding: 20px 0;
    }

    .clients .client-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .clients .client-logo img {
      padding: 20px 40px;
      max-width: 90%;
      transition: 0.3s;
      opacity: 0.5;
      filter: grayscale(100);
    }

    .clients .client-logo img:hover {
      filter: none;
      opacity: 1;
    }

    @media (max-width: 640px) {
      .clients .client-logo img {
        padding: 20px;
      }
    }

    /*--------------------------------------------------------------
# Features Section
--------------------------------------------------------------*/
    .features .nav-tabs {
      border: 0;
    }

    .features .nav-link {
      background-color: var(--surface-color);
      color: var(--heading-color);
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
      padding: 15px 20px;
      transition: 0.3s;
      border-radius: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      height: 100%;
    }

    .features .nav-link i {
      padding-right: 15px;
      font-size: 48px;
    }

    .features .nav-link h4 {
      font-size: 18px;
      font-weight: 600;
      margin: 0;
    }

    .features .nav-link:hover {
      color: var(--accent-color);
      border-color: var(--accent-color);
    }

    .features .nav-link.active {
      background: var(--accent-color);
      color: var(--contrast-color);
      border-color: var(--accent-color);
    }

    .features .nav-link.active h4 {
      color: var(--contrast-color);
    }

    @media (max-width: 768px) {
      .features .nav-link i {
        padding: 0;
        line-height: 1;
        font-size: 36px;
      }
    }

    @media (max-width: 575px) {
      .features .nav-link {
        padding: 15px;
      }

      .features .nav-link i {
        font-size: 24px;
      }
    }

    .features .tab-content {
      margin-top: 30px;
    }

    .features .tab-pane h3 {
      color: var(--heading-color);
      font-weight: 700;
      font-size: 26px;
    }

    .features .tab-pane ul {
      list-style: none;
      padding: 0;
    }

    .features .tab-pane ul li {
      padding-bottom: 10px;
    }

    .features .tab-pane ul i {
      font-size: 20px;
      padding-right: 4px;
      color: var(--accent-color);
    }

    .features .tab-pane p:last-child {
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Services 2 Section
--------------------------------------------------------------*/
    .services-2 .service-item {
      background-color: var(--surface-color);
      padding: 30px;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
      transition: 0.3s;
    }

    .services-2 .service-item .icon {
      font-size: 36px;
      line-height: 0;
      margin-right: 30px;
      color: var(--accent-color);
    }

    .services-2 .service-item .title {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 20px;
    }

    .services-2 .service-item .title a {
      color: var(--heading-color);
    }

    .services-2 .service-item .description {
      line-height: 24px;
      font-size: 14px;
      margin: 0;
    }

    .services-2 .service-item:hover {
      border-color: var(--accent-color);
    }

    .services-2 .service-item:hover .title a {
      color: var(--accent-color);
    }

    /*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
    .testimonials {
      padding: 80px 0;
      position: relative;
    }

    .testimonials:before {
      content: "";
      background: color-mix(in srgb, var(--background-color), transparent 30%);
      position: absolute;
      inset: 0;
      z-index: 2;
    }

    .testimonials .testimonials-bg {
      position: absolute;
      inset: 0;
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .testimonials .container {
      position: relative;
      z-index: 3;
    }

    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
      overflow: hidden;
    }

    .testimonials .testimonial-item {
      text-align: center;
    }

    .testimonials .testimonial-item .testimonial-img {
      width: 100px;
      border-radius: 50%;
      border: 6px solid color-mix(in srgb, var(--default-color), transparent 85%);
      margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
      font-size: 20px;
      font-weight: bold;
      margin: 10px 0 5px 0;
    }

    .testimonials .testimonial-item h4 {
      font-size: 14px;
      margin: 0 0 15px 0;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .testimonials .testimonial-item .stars {
      margin-bottom: 15px;
    }

    .testimonials .testimonial-item .stars i {
      color: #ffc107;
      margin: 0 1px;
    }

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      font-size: 26px;
      line-height: 0;
    }

    .testimonials .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
      transform: scale(-1, -1);
    }

    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 auto 15px auto;
    }

    .testimonials .swiper-wrapper {
      height: auto;
    }

    .testimonials .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: color-mix(in srgb, var(--default-color), transparent 50%);
      opacity: 0.5;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: var(--default-color);
      opacity: 1;
    }

    @media (min-width: 992px) {
      .testimonials .testimonial-item p {
        width: 80%;
      }
    }

    /*--------------------------------------------------------------
# Portfolio Section
--------------------------------------------------------------*/
    .portfolio .portfolio-filters {
      padding: 0;
      margin: 0 auto 20px auto;
      list-style: none;
      text-align: center;
    }

    .portfolio .portfolio-filters li {
      cursor: pointer;
      display: inline-block;
      padding: 0;
      font-size: 18px;
      font-weight: 500;
      margin: 0 10px;
      line-height: 1;
      margin-bottom: 5px;
      transition: all 0.3s ease-in-out;
    }

    .portfolio .portfolio-filters li:hover,
    .portfolio .portfolio-filters li.filter-active {
      color: var(--accent-color);
    }

    .portfolio .portfolio-filters li:first-child {
      margin-left: 0;
    }

    .portfolio .portfolio-filters li:last-child {
      margin-right: 0;
    }

    @media (max-width: 575px) {
      .portfolio .portfolio-filters li {
        font-size: 14px;
        margin: 0 5px;
      }
    }

    .portfolio .portfolio-content {
      position: relative;
      overflow: hidden;
    }

    .portfolio .portfolio-content img {
      transition: 0.3s;
    }

    .portfolio .portfolio-content .portfolio-info {
      opacity: 0;
      position: absolute;
      inset: 0;
      z-index: 3;
      transition: all ease-in-out 0.3s;
      background: rgba(0, 0, 0, 0.6);
      padding: 15px;
    }

    .portfolio .portfolio-content .portfolio-info h4 {
      font-size: 14px;
      padding: 5px 10px;
      font-weight: 400;
      color: #ffffff;
      display: inline-block;
      background-color: var(--accent-color);
    }

    .portfolio .portfolio-content .portfolio-info p {
      position: absolute;
      bottom: 10px;
      text-align: center;
      display: inline-block;
      left: 0;
      right: 0;
      font-size: 16px;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.8);
    }

    .portfolio .portfolio-content .portfolio-info .preview-link,
    .portfolio .portfolio-content .portfolio-info .details-link {
      position: absolute;
      left: calc(50% - 40px);
      font-size: 26px;
      top: calc(50% - 14px);
      color: #fff;
      transition: 0.3s;
      line-height: 1.2;
    }

    .portfolio .portfolio-content .portfolio-info .preview-link:hover,
    .portfolio .portfolio-content .portfolio-info .details-link:hover {
      color: var(--accent-color);
    }

    .portfolio .portfolio-content .portfolio-info .details-link {
      left: 50%;
      font-size: 34px;
      line-height: 0;
    }

    .portfolio .portfolio-content:hover .portfolio-info {
      opacity: 1;
    }

    .portfolio .portfolio-content:hover img {
      transform: scale(1.1);
    }

    /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
    .team .member {
      position: relative;
    }

    .team .member .pic {
      overflow: hidden;
      margin-bottom: 50px;
    }

    .team .member .member-info {
      background-color: var(--surface-color);
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      position: absolute;
      bottom: -50px;
      left: 20px;
      right: 20px;
      padding: 20px 15px;
      overflow: hidden;
      transition: 0.5s;
    }

    .team .member h4 {
      font-weight: 700;
      margin-bottom: 10px;
      font-size: 16px;
      position: relative;
      padding-bottom: 10px;
    }

    .team .member h4::after {
      content: "";
      position: absolute;
      display: block;
      width: 50px;
      height: 1px;
      background: color-mix(in srgb, var(--default-color), transparent 60%);
      bottom: 0;
      left: 0;
    }

    .team .member span {
      font-style: italic;
      display: block;
      font-size: 13px;
    }

    .team .member .social {
      position: absolute;
      right: 15px;
      bottom: 15px;
    }

    .team .member .social a {
      transition: color 0.3s;
      color: color-mix(in srgb, var(--default-color), transparent 70%);
    }

    .team .member .social a:hover {
      color: var(--accent-color);
    }

    .team .member .social i {
      font-size: 16px;
      margin: 0 2px;
    }

    /*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
    .contact .info-item {
      background-color: var(--surface-color);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      padding: 24px 0 30px 0;
    }

    .contact .info-item i {
      font-size: 20px;
      color: var(--accent-color);
      width: 56px;
      height: 56px;
      font-size: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 4px;
      transition: all 0.3s ease-in-out;
      border-radius: 50%;
      border: 2px dotted color-mix(in srgb, var(--accent-color), transparent 40%);
    }

    .contact .info-item h3 {
      font-size: 20px;
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      font-size: 18px;
      font-weight: 700;
      margin: 10px 0;
    }

    .contact .info-item p {
      padding: 0;
      margin-bottom: 0;
      font-size: 14px;
    }

    .contact .php-email-form {
      background-color: var(--surface-color);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      height: 100%;
      padding: 30px;
    }

    @media (max-width: 575px) {
      .contact .php-email-form {
        padding: 20px;
      }
    }

    .contact .php-email-form input[type="text"],
    .contact .php-email-form input[type="email"],
    .contact .php-email-form textarea {
      font-size: 14px;
      padding: 10px 15px;
      box-shadow: none;
      border-radius: 0;
      color: var(--default-color);
      background-color: var(--surface-color);
      border-color: color-mix(in srgb, var(--default-color), transparent 80%);
    }

    .contact .php-email-form input[type="text"]:focus,
    .contact .php-email-form input[type="email"]:focus,
    .contact .php-email-form textarea:focus {
      border-color: var(--accent-color);
    }

    .contact .php-email-form input[type="text"]::placeholder,
    .contact .php-email-form input[type="email"]::placeholder,
    .contact .php-email-form textarea::placeholder {
      color: color-mix(in srgb, var(--default-color), transparent 70%);
    }

    .contact .php-email-form button[type="submit"] {
      color: var(--contrast-color);
      background: var(--accent-color);
      border: 0;
      padding: 10px 30px;
      transition: 0.4s;
      border-radius: 50px;
    }

    .contact .php-email-form button[type="submit"]:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    /*--------------------------------------------------------------
# Portfolio Details Section
--------------------------------------------------------------*/
    .portfolio-details .portfolio-details-slider img {
      width: 100%;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: color-mix(in srgb, var(--default-color), transparent 85%);
      opacity: 1;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
      background-color: var(--accent-color);
    }

    .portfolio-details .portfolio-info {
      background-color: var(--surface-color);
      padding: 30px;
      box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
    }

    .portfolio-details .portfolio-info h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
    }

    .portfolio-details .portfolio-info ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .portfolio-details .portfolio-info ul li+li {
      margin-top: 10px;
    }

    .portfolio-details .portfolio-description {
      padding-top: 30px;
    }

    .portfolio-details .portfolio-description h2 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .portfolio-details .portfolio-description p {
      padding: 0;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    /*--------------------------------------------------------------
# Service Details Section
--------------------------------------------------------------*/
    .service-details .services-list {
      background-color: var(--surface-color);
      padding: 10px 30px;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      margin-bottom: 20px;
    }

    .service-details .services-list a {
      display: block;
      line-height: 1;
      padding: 8px 0 8px 15px;
      border-left: 3px solid color-mix(in srgb, var(--default-color), transparent 70%);
      margin: 20px 0;
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      transition: 0.3s;
    }

    .service-details .services-list a.active {
      color: var(--heading-color);
      font-weight: 700;
      border-color: var(--accent-color);
    }

    .service-details .services-list a:hover {
      border-color: var(--accent-color);
    }

    .service-details .services-img {
      margin-bottom: 20px;
    }

    .service-details h3 {
      font-size: 26px;
      font-weight: 700;
    }

    .service-details h4 {
      font-size: 20px;
      font-weight: 700;
    }

    .service-details p {
      font-size: 15px;
    }

    .service-details ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .service-details ul li {
      padding: 5px 0;
      display: flex;
      align-items: center;
    }

    .service-details ul i {
      font-size: 20px;
      margin-right: 8px;
      color: var(--accent-color);
    }

    .filiales-section {
      padding: 80px 20px;
      background-color: #f9f9f9;
    }

    .section-title {
      font-size: 2.5rem;
      margin-bottom: 60px;
      color: #2c3e50;
      position: relative;
    }

    .filiales-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .filiale-item {
      width: 300px;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }

    .filiale-item.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .filiale-link {
      display: flex;
      flex-direction: column;
      text-decoration: none;
      color: inherit;
      height: 100%;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .filiale-link:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .filiale-logo-container {
      padding: 30px;
      background: #f8f8f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
    }

    .filiale-logo {
      max-width: 80%;
      max-height: 80%;
      object-fit: contain;
      transition: transform 0.3s ease;
    }

    .filiale-link:hover .filiale-logo {
      transform: scale(1.05);
    }

    .filiale-description {
      padding: 25px;
      text-align: center;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .filiale-description h3 {
      margin-top: 0;
      color: #2c3e50;
      font-size: 1.5rem;
    }

    .filiale-description p {
      color: #7f8c8d;
      line-height: 1.6;
    }

    /* Animation de l'arbre */
    .filiales-container {
      position: relative;
    }

    .filiales-container::before {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      left: 50%;
      width: 4px;
      background: #ff4a17;
      transform: translateX(-50%);
      z-index: 0;
    }

    .filiale-item {
      position: relative;
      z-index: 1;
    }

    .filiale-item::before {
      content: "";
      position: absolute;
      top: 100px;
      left: -20px;
      width: 20px;
      height: 4px;
      background: #ff4a17;
      display: none;
    }

    @media (min-width: 768px) {
      .filiale-item:nth-child(odd)::before {
        display: block;
        left: auto;
        right: -20px;
      }

      .filiale-item:nth-child(even)::before {
        display: block;
      }
    }

    /* Responsive */
    @media (max-width: 767px) {
      .filiales-container::before {
        display: none;
      }

      .filiale-item::before {
        display: none !important;
      }

      .filiale-item {
        width: 100%;
        max-width: 500px;
      }
    }

    .empty-content {
      background-color: #e85d00;
      color: #fff;
      padding: 30px 50px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      animation: pulse 2s infinite;
      margin: 40px auto;
      max-width: 80%;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.05);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Pour le responsive */
    @media (max-width: 768px) {
      .empty-content {
        padding: 20px 30px;
        font-size: 20px;
        max-width: 90%;
      }
    }

    .text-orange {
      color: #ff7a00 !important;
    }

    .bg-orange {
      background-color: #ff7a00;
    }

    .bio-titles {
      border-left: 2px solid #ff7a00;
      padding-left: 1.5rem;
    }

    .bio-titles li {
      position: relative;
    }

    .img-fluid {
      max-height: 500px;
      width: 100%;
      object-fit: cover;
    }

    @media (max-width: 992px) {
      .ps-lg-5 {
        padding-left: 0 !important;
        margin-top: 2rem;
      }
    }

    .presentation {
      line-height: 1.8;
      font-size: 1rem;
    }

    .lead-paragraph {
      font-size: 1.15rem;
      line-height: 1.9;
    }

    .entreprise-bullet {
      font-size: 1.5rem;
      line-height: 1.2;
    }

    .company-highlight {
      transition: all 0.3s ease;
    }

    .company-highlight:hover {
      background-color: rgba(255, 122, 0, 0.1) !important;
    }

    @media (max-width: 992px) {

      .pe-lg-4,
      .ps-lg-4 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }

      .presentation {
        font-size: 1rem;
      }

      .lead-paragraph {
        font-size: 1.05rem;
        padding: 1rem !important;
      }
    }

    .partners {
      overflow: hidden;
      padding: 60px 0;
    }

    .partner-slider {
      width: 100%;
      position: relative;
    }

    .partner-track {
      display: flex;
      animation: scroll 30s linear infinite;
      width: calc(250px * 20);
      /* Largeur d'un logo × nombre total */
    }

    .partner-logo {
      flex-shrink: 0;
      width: 250px;
      padding: 0 15px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .partner-logo img {
      max-width: 50%;
      height: auto;
      filter: grayscale(100%);
      transition: filter 0.3s ease;
    }

    .partner-logo img:hover {
      filter: grayscale(0%);
    }

    @keyframes scroll {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(calc(-250px * 10));
      }

      /* Déplacement de la moitié des logos */
    }

    /* Ajoutez ceci à votre CSS */
    #hardworkers-counter::after,
    #happy-clients-counter::after,
    #projects-counter::after {
      content: "+";
      margin-left: 2px;
    }
  </style>
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div
      class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo_yg.png" alt="" />
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#about" class="active">À propos</a></li>
          <li><a href="#filiales-section">Nos filliales</a></li>
          <li><a href="#features">Engagements</a></li>
          <li><a href="#portfolio">Actualités</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <!-- Hero Section - Video Background with Transparent Image Slides -->
    <section id="hero" class="hero">
      <!-- Video Background Only -->
      <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/videos/video_zone_hero.mp4" type="video/mp4" />
        <!-- Fallback removed since you only want video -->
      </video>
      <div class="hero-overlay"></div>

      <!-- Slides Container -->
      <div class="hero-slides">
        <!-- Slide 1 -->
        <div class="slide active">
          <div
            class="slide-image"
            style="background-image: url('assets/img/slides_hero/groupe.jpg')"></div>
          <div class="container slide-content">
            <h2>PLANIFIER. LANCER. DÉVELOPPER.</h2>
            <p>
              Yadi Group, c'est l'ambition de construire, d'innover et de
              connecter.
            </p>
            <a href="#" class="btn-get-started">En savoir plus</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
          <div
            class="slide-image"
            style="background-image: url('assets/img/slides_hero/btp.jpeg')"></div>
          <div class="container slide-content">
            <h2>BTP & CONSTRUCTION</h2>
            <p>Solutions innovantes pour des constructions durables.</p>
            <a href="#" class="btn-get-started">Découvrir</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
          <div
            class="slide-image"
            style="background-image: url('assets/img/slides_hero/garage.jpg')"></div>
          <div class="container slide-content">
            <h2>AUTOMOBILE</h2>
            <p>Technologies de pointe pour une mobilité intelligente.</p>
            <a href="#" class="btn-get-started">Explorer</a>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide">
          <div
            class="slide-image"
            style="background-image: url('assets/img/slides_hero/vroom.jpg')"></div>
          <div class="container slide-content">
            <h2>TRANSPORT</h2>
            <p>Réseaux optimisés pour une connectivité sans frontières.</p>
            <a href="#" class="btn-get-started">Voir solutions</a>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="slide">
          <div
            class="slide-image"
            style="background-image: url('assets/img/slides_hero/ddcs.jpeg')"></div>
          <div class="container slide-content">
            <h2>TECHNOLOGIE</h2>
            <p>
              Solutions digitales avancées pour transformer les industries.
            </p>
            <a href="#" class="btn-get-started">Nos innovations</a>
          </div>
        </div>

        <!-- Navigation -->
        <div class="slide-nav">
          <button class="nav-dot active" data-slide="0"></button>
          <button class="nav-dot" data-slide="1"></button>
          <button class="nav-dot" data-slide="2"></button>
          <button class="nav-dot" data-slide="3"></button>
          <button class="nav-dot" data-slide="4"></button>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <!-- Photo du DG -->
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
            <div class="position-relative">
              <img
                src="assets/img/image_dg.jpeg"
                class="img-fluid rounded-4 shadow-lg"
                alt="Photo du Directeur Général"
                style="border: 3px solid #ff7a00; width: 450px" />
              <div
                class="position-absolute bottom-0 end-0 bg-orange text-white p-2 rounded-start">
                <i class="fas fa-quote-left fs-1"></i>
              </div>
            </div>
          </div>

          <!-- Biographie -->
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
            <div class="ps-lg-5">
              <h2 class="mb-4" style="color: #ff7a00">
                BIOGRAPHIE YACOUBA DIABY
              </h2>

              <div class="biographie-content">
                <p class="lead fw-bold">M. YACOUBA DIABY</p>

                <ul
                  class="list-unstyled bio-titles"
                  style="text-align: justify">
                  <li class="mb-2">
                    <i
                      class="fas fa-circle text-orange me-2"
                      style="font-size: 8px"></i>
                    Manager Général du Conglomérat d’Entreprises qu’il a
                    fondé, avec un chiffre d’affaires de plus de 5,6 milliards
                    FCFA.
                  </li>
                  <li class="mb-2">
                    <i
                      class="fas fa-circle text-orange me-2"
                      style="font-size: 8px"></i>
                    Précurseur en Côte d’Ivoire dans les domaines du BTP/Génie
                    civil et des Systèmes d’Information.
                  </li>
                  <li class="mb-2">
                    <i
                      class="fas fa-circle text-orange me-2"
                      style="font-size: 8px"></i>
                    Ancien cadre de plusieurs sociétés de renom en Europe et
                    en Afrique.
                  </li>
                  <li class="mb-2">
                    <i
                      class="fas fa-circle text-orange me-2"
                      style="font-size: 8px"></i>
                    Fondateur de la société DIGITAL DATA CAPTURE SOLUTION
                    (DDCS), partenaire de référence en technologies
                    numériques.
                  </li>
                  <li class="mb-2">
                    <i
                      class="fas fa-circle text-orange me-2"
                      style="font-size: 8px"></i>
                    Investisseur dans les secteurs du transport, de la
                    logistique et de l’automobile.
                  </li>
                  <li>
                    <i
                      class="fas fa-circle text-orange me-2"
                      style="font-size: 8px"></i>
                    Encadre une équipe de techniciens et de consultants
                    expérimentés pour soutenir le développement industriel en
                    Côte d’Ivoire et dans la sous-région.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Présentation Fondateur Section -->
      <section id="presentation" class="presentation section bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <!-- En-tête -->
              <div class="section-header text-center mb-5" data-aos="fade-up">
                <h1
                  class="display-4 fw-bold"
                  style="color: #ff7a00; font-size: 1.2rem">
                  PRÉSENTATION DU FONDATEUR
                </h1>
                <div
                  class="divider mx-auto"
                  style="background-color: #ff7a00; height: 3px; width: 100px"></div>
              </div>

              <!-- Contenu en deux colonnes -->
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <!-- Colonne 1 (3 premiers blocs) -->
                <div class="col-lg-6 pe-lg-4" style="text-align: justify">
                  <!-- Premier paragraphe avec mise en valeur -->
                  <div
                    class="lead-paragraph mb-4 p-4 bg-white rounded-3 shadow-sm"
                    style="border-left: 4px solid #ff7a00">
                    <p class="fs-5">
                      <span class="fw-bold" style="color: #ff7a00">YACOUBA DIABY</span>, jeune ivoirien de la Diaspora Allemande qui, inspiré
                      par la politique d'investissement et le climat de paix
                      et de confiance instauré par le Président de la
                      République de Côte d'Ivoire, SEM Alassane OUATTARA, a
                      entrepris de mettre sur pied un Conglomérat
                      d'Entreprises dont il est le Manager Général et qui
                      revendique à ce jour plus de
                      <span class="fw-bold">5,6 Milliards CA</span>.
                    </p>
                  </div>

                  <!-- Paragraphe 2 -->
                  <p class="mb-4">
                    Ayant exercé pendant plusieurs années dans diverses
                    Sociétés de renoms, YACOUBA DIABY fait partie des
                    précurseurs de plusieurs technologies en Côte d'Ivoire
                    dans divers domaines dont celui des BTP/Génie Civil et des
                    Systèmes d'Information (SI). Toutefois, en homme
                    polyvalent et averti, YACOUBA DIABY investira aussi dans
                    plusieurs autres secteurs d'activités, en l'occurrence le
                    secteur de l'Automobile à travers un Pôle logistique de
                    transport de matières premières de béton prêt à l'emploi.
                    Il s'entoure à cet effet de collaborateurs expérimentés en
                    recrutant des techniciens chevronnés qu'il encadre avec
                    l'aide de Consultants expérimentés afin de révolutionner
                    lesdits secteurs en Côte d'Ivoire et dans la sous-région.
                  </p>

                  <!-- Paragraphe 3 avec entreprise en évidence -->
                  <div
                    class="company-highlight mb-4 p-3 rounded-2"
                    style="
                        background-color: rgba(255, 122, 0, 0.05);
                        border-left: 3px solid #ff7a00;
                      ">
                    <p class="mb-0">
                      Ainsi, partant de sa première Entreprise
                      <span class="fw-bold" style="color: #ff7a00">DIGITAL DATA CAPTURE SOLUTION (DDCS)</span>, Partenaire de référence dans le domaine de la
                      Communication Unifiée, Représentante exclusive du Label
                      LIFESIZE, et pionnière de la Visioconférence Haute
                      Définition, d'autres Entreprises verront le jour.
                    </p>
                  </div>
                </div>

                <!-- Colonne 2 (2 derniers blocs) -->
                <div class="col-lg-6 ps-lg-4" style="text-align: justify">
                  <!-- Liste des entreprises -->
                  <div class="entreprise-list mb-4">
                    <div class="entreprise-item d-flex mb-3">
                      <div
                        class="entreprise-bullet me-3"
                        style="color: #ff7a00">
                        •
                      </div>
                      <div>
                        <p class="mb-1 fw-bold" style="color: #ff7a00">
                          YDIA CONSTRUCTION
                        </p>
                        <p class="mb-0">
                          Entreprise spécialisée dans les BTP/Génie Civil, par
                          ailleurs Représentante exclusive du Groupe Turque
                          ENEZCAM pour la Sous-région Ouest-Africaine en
                          matière des produits dérivés de Menuiserie Aluminium
                          (tous types de systèmes en aluminium, systèmes en
                          verre, systèmes de portes, systèmes de volets,
                          systèmes métal-fer, etc.).
                        </p>
                      </div>
                    </div>

                    <div class="entreprise-item d-flex mb-3">
                      <div
                        class="entreprise-bullet me-3"
                        style="color: #ff7a00">
                        •
                      </div>
                      <div>
                        <p class="mb-1 fw-bold" style="color: #ff7a00">
                          YADI CAR CENTER
                        </p>
                        <p class="mb-0">
                          Qui excelle aujourd'hui dans la Mécanique Générale
                          via son réseau de garage automobile, dans
                          l'entretien et la réparation de véhicules de toutes
                          marques et dans l'installation de Quick Service au
                          profit de grandes Groupes telles que ORANGE CI et
                          AFG.
                        </p>
                      </div>
                    </div>

                    <div class="entreprise-item d-flex">
                      <div
                        class="entreprise-bullet me-3"
                        style="color: #ff7a00">
                        •
                      </div>
                      <div>
                        <p class="mb-1 fw-bold" style="color: #ff7a00">
                          VROOM
                        </p>
                        <p class="mb-0">
                          Dont le périmètre d'activités couvre les secteurs de
                          la logistique et du Transport grand public et privé.
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- Paragraphe final -->
                  <div
                    class="closing-paragraph p-3 rounded-2"
                    style="
                        background-color: #f8f9fa;
                        border-top: 2px solid #ff7a00;
                      ">
                    <p class="mb-0">
                      Ce conglomérat qui tend à s'étendre avec d'autres
                      Entreprises en cours de création dans des domaines à
                      forte valeur ajoutée pour l'économie ivoirienne traduit
                      la volonté de YACOUBA DIABY et celle de son équipe à
                      poursuivre les efforts pour l'émergence de la Côte
                      d'Ivoire. Sa particularité réside dans son caractère
                      familial mais très strict, qui met l'aspect Humain au
                      cœur de ses priorités et sur un principe de choix fondé
                      sur les valeurs de
                      <span class="fw-bold">Responsabilité – Ethique – Qualité</span>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                  id="happy-clients-counter"></span>
                <p>Clients satisfaits</p>
              </div>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i
                class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                  id="projects-counter"></span>
                <p>Projets</p>
              </div>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1463"
                  data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Heures d'assistance</p>
              </div>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="100"
                  data-purecounter-duration="1"
                  class="purecounter"
                  id="hardworkers-counter"></span>
                <p>Travailleurs acharnés</p>
              </div>
            </div>
          </div>
          <!-- End Stats Item -->
        </div>
      </div>
    </section>

    <section class="filiales-section" id="filiales-section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Filiales</h2>
        <p>Nos Filiales<br /></p>
      </div>
      <div class="filiales-container">
        <!-- Filiale 1 -->
        <div class="filiale-item">
          <a
            href="https://www.filiale1.com"
            target="_blank"
            class="filiale-link">
            <div class="filiale-logo-container">
              <img
                src="assets/img/logo yadi car center-01.png"
                alt="Logo Filiale 1"
                class="filiale-logo" />
            </div>
            <div class="filiale-description">
              <h3>YADI CAR CENTER</h3>
              <p style="text-align: justify">
                Depuis 2019, YADI CAR CENTER vous accueille dans un garage
                moderne, équipé des meilleures technologies et d’un personnel
                hautement qualifié. Confort et efficacité réunis pour votre
                tranquillité.
              </p>
            </div>
          </a>
        </div>

        <!-- Filiale 2 -->
        <div class="filiale-item">
          <a
            href="https://www.filiale2.com"
            target="_blank"
            class="filiale-link">
            <div class="filiale-logo-container">
              <img
                src="assets/img/YADI Group_Logotype_DDCS_- Vf.jpg"
                alt="Logo Filiale 2"
                class="filiale-logo" />
            </div>
            <div class="filiale-description">
              <h3>DDCS</h3>
              <p style="text-align: justify">
                Intégrateur technologique depuis 2017, nous optimisons la
                performance et sécurisons les systèmes des entreprises grâce à
                des solutions sur mesure et innovantes.
              </p>
            </div>
          </a>
        </div>

        <!-- Filiale 3 -->
        <div class="filiale-item">
          <a
            href="https://www.filiale3.com"
            target="_blank"
            class="filiale-link">
            <div class="filiale-logo-container">
              <img
                src="assets/img/logo_Ydia.png"
                alt="Logo Filiale 3"
                class="filiale-logo" />
            </div>
            <div class="filiale-description">
              <h3>YDIA-CONSTRUCTION</h3>
              <p style="text-align: justify">
                Fondée en 2022, YDIA CONSTRUCTION est spécialisée dans le BTP
                (Batiment et Travaux Publics), avec des solutions innovantes
                et durables pour tous vos projets.
              </p>
            </div>
          </a>
        </div>

        <!-- Filiale 4 -->
        <div class="filiale-item">
          <a
            href="https://www.filiale4.com"
            target="_blank"
            class="filiale-link">
            <div class="filiale-logo-container">
              <img
                src="assets/img/vroom.jpeg"
                alt="Logo Filiale 4"
                class="filiale-logo" />
            </div>
            <div class="filiale-description">
              <h3>VROOM</h3>
              <p style="text-align: justify">
                Créée en 2021, VROOM propose des solutions de transport sur
                mesure partout en Côte d’Ivoire, avec fiabilité, sécurité et
                professionnalisme.
              </p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <!-- <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Featured Srvices<br /></p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-5">
            <div
              class="col-xl-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="200"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/services-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-activity"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Nesciunt Mete</h3>
                  </a>
                  <p>
                    Provident nihil minus qui consequatur non omnis maiores. Eos
                    accusantium minus dolores iure perferendis.
                  </p>
                </div>
              </div>
            </div>

            <div
              class="col-xl-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="300"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/services-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-broadcast"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Eosle Commodi</h3>
                  </a>
                  <p>
                    Ut autem aut autem non a. Sint sint sit facilis nam iusto
                    sint. Libero corrupti neque eum hic non ut nesciunt dolorem.
                  </p>
                </div>
              </div>
            </div>
           

            <div
              class="col-xl-4 col-md-6"
              data-aos="zoom-in"
              data-aos-delay="400"
            >
              <div class="service-item">
                <div class="img">
                  <img
                    src="assets/img/services-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="details position-relative">
                  <div class="icon">
                    <i class="bi bi-easel"></i>
                  </div>
                  <a href="service-details.html" class="stretched-link">
                    <h3>Ledo Markt</h3>
                  </a>
                  <p>
                    Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                    Minus ea aut. Vel qui id voluptas adipisci eos earum
                    corrupti.
                  </p>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section> -->

    <!-- Partners Section -->
    <section id="partners" class="partners section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Partenaires</h2>
        <p>Nos Partenaires<br /></p>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="partner-slider">
          <div class="partner-track">
            <!-- Première série de logos -->
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/0.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/1.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/2.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/3.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/4.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/5.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/6.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/7.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/8.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/9.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>

            <!-- Duplication pour effet de boucle continu -->
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/10.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/11.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/12.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/13.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/14.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/15.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/16.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/17.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/18.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/19.jpg"
                class="img-fluid"
                alt="Partenaire" />
            </div>
            <div class="col-xl-2 col-md-3 col-6 partner-logo">
              <img
                src="assets/img/clients/20.png"
                class="img-fluid"
                alt="Partenaire" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Nos Engagements</h2>
        <p>Les valeurs qui unissent nos 4 entreprises</p>
      </div>
      <div class="container">
        <ul
          class="nav nav-tabs row d-flex"
          data-aos="fade-up"
          data-aos-delay="100">
          <li class="nav-item col-3">
            <a
              class="nav-link active show"
              data-bs-toggle="tab"
              data-bs-target="#features-tab-1">
              <i class="bi bi-people-fill"></i>
              <h4 class="d-none d-lg-block">Impact Social</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              data-bs-target="#features-tab-2">
              <i class="bi bi-tree-fill"></i>
              <h4 class="d-none d-lg-block">Éco-responsabilité</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              data-bs-target="#features-tab-3">
              <i class="bi bi-award-fill"></i>
              <h4 class="d-none d-lg-block">Excellence</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              data-bs-target="#features-tab-4">
              <i class="bi bi-lightbulb-fill"></i>
              <h4 class="d-none d-lg-block">Innovation</h4>
            </a>
          </li>
        </ul>
        <!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Développement humain et local</h3>
                <p class="fst-italic">
                  "Nous investissons dans les talents et les communautés où
                  nous opérons"
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>750 emplois créés en 2023 dont 65% pour les
                      jeunes</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>15 écoles rénovées dans nos zones d'intervention</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>Programme "Femmes Entrepreneures" avec 30
                      bénéficiaires</span>
                  </li>
                </ul>
                <p>
                  Notre fonds social consacre 5% de nos bénéfices annuels à
                  des initiatives éducatives et de formation professionnelle.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img
                  src="assets/img/engagement-social.png"
                  alt="Impact social"
                  class="img-fluid" />
              </div>
            </div>
          </div>
          <!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Engagement environnemental</h3>
                <p>
                  Nos 4 entreprises unies pour réduire notre empreinte
                  écologique :
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>90% des déchets de construction recyclés</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>30% de véhicules hybrides dans notre flotte d'ici
                      2024</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>Politique Zéro Plastique dans toutes nos agences</span>
                  </li>
                </ul>
                <p class="fst-italic">
                  Nous visons la neutralité carbone pour 2030 à travers nos
                  investissements dans les énergies renouvelables.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img
                  src="assets/img/engagement-eco.png"
                  alt="Éco-responsabilité"
                  class="img-fluid" />
              </div>
            </div>
          </div>
          <!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Exigence qualité</h3>
                <p class="fst-italic">
                  "Nous ne livrons que ce que nous pouvons garantir"
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>Certifications ISO 9001 pour toutes nos filières</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>97% de satisfaction client en 2023</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>50 heures de formation annuelle par collaborateur</span>
                  </li>
                </ul>
                <p>
                  Notre système qualité unifié assure les mêmes standards
                  élevés à travers l'ensemble de nos entreprises.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img
                  src="assets/img/engagement-quality.png"
                  alt="Excellence"
                  class="img-fluid" />
              </div>
            </div>
          </div>
          <!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Innovation collaborative</h3>
                <p>
                  Synergies entre nos 4 entreprises pour inventer demain :
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>15 projets R&D en cours inter-entreprises</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>Prix "Best Innovator" 2023 pour notre solution BTP
                      4.0</span>
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>5 brevets déposés en 3 ans</span>
                  </li>
                </ul>
                <p class="fst-italic">
                  8% de notre chiffre d'affaires est réinvesti en innovation
                  chaque année.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img
                  src="assets/img/engagement-innovation.png"
                  alt="Innovation"
                  class="img-fluid" />
              </div>
            </div>
          </div>
          <!-- End Tab Content Item -->
        </div>
      </div>
    </section>
    <!-- /Features Section -->

    <!-- Services 2 Section -->
    <!-- <section id="services-2" class="services-2 section light-background">
        
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>CHECK OUR SERVICES</p>
        </div>
      

        <div class="container">
          <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item d-flex position-relative h-100">
                <i class="bi bi-briefcase icon flex-shrink-0"></i>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Lorem Ipsum</a>
                  </h4>
                  <p class="description">
                    Voluptatum deleniti atque corrupti quos dolores et quas
                    molestias excepturi sint occaecati cupiditate non provident
                  </p>
                </div>
              </div>
            </div>
           

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item d-flex position-relative h-100">
                <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Dolor Sitema</a>
                  </h4>
                  <p class="description">
                    Minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat tarad limino ata
                  </p>
                </div>
              </div>
            </div>
            

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item d-flex position-relative h-100">
                <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Sed ut perspiciatis</a>
                  </h4>
                  <p class="description">
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div>
            

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item d-flex position-relative h-100">
                <i class="bi bi-binoculars icon flex-shrink-0"></i>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Magni Dolores</a>
                  </h4>
                  <p class="description">
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </p>
                </div>
              </div>
            </div>
         

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item d-flex position-relative h-100">
                <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Nemo Enim</a>
                  </h4>
                  <p class="description">
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque
                  </p>
                </div>
              </div>
            </div>
          

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item d-flex position-relative h-100">
                <i class="bi bi-calendar4-week icon flex-shrink-0"></i>
                <div>
                  <h4 class="title">
                    <a href="#" class="stretched-link">Eiusmod Tempor</a>
                  </h4>
                  <p class="description">
                    Et harum quidem rerum facilis est et expedita distinctio.
                    Nam libero tempore, cum soluta nobis est eligendi
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section> -->
    <!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">
      <img
        src="assets/img/testimonials-bg.jpg"
        class="testimonials-bg"
        alt="" />

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="assets/img/testimonials/1-yc.png"
                  class="testimonial-img"
                  alt="" />
                <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>La construction n'est pas simplement une question de
                    béton et de briques, c'est l'art de façonner l'avenir,
                    brique par brique, en construisant des espaces qui
                    inspirent et durent pour les générations à venir. Chaque
                    projet est une promesse de qualité et de solidité, un
                    investissement pour demain.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="assets/img/testimonials/2-y.png"
                  class="testimonial-img"
                  alt="" />
                <!-- <h3>Sara Wilsson</h3>
                  <h4>Designer</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Chaque véhicule est bien plus qu'un simple moyen de
                    transport : c'est une extension de notre quotidien. Dans
                    notre garage, nous ne nous contentons pas de réparer des
                    voitures, nous offrons la tranquillité d'esprit, un
                    service impeccable et la certitude que chaque conducteur
                    pourra reprendre la route en toute sécurité.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="assets/img/testimonials/3.jpeg"
                  class="testimonial-img"
                  alt="" />
                <!-- <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Que ce soit pour un déplacement professionnel ou pour un
                    événement spécial, chaque voyage mérite d'être
                    exceptionnel. Nos services de transport sont conçus pour
                    vous offrir un confort optimal, une ponctualité sans
                    faille et un trajet sans souci. Le transport n'est pas
                    seulement une question de distance, mais
                    d'expérience.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="assets/img/testimonials/4.jpg"
                  class="testimonial-img"
                  alt="" />
                <!-- <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>La technologie n'est pas seulement un outil, elle est le
                    moteur qui propulse l'innovation et transforme le monde.
                    Que ce soit dans la gestion de projets, l'automatisation
                    des processus ou les nouvelles découvertes, la technologie
                    est au cœur de toutes les révolutions qui façonnent notre
                    avenir.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img
                  src="assets/img/testimonials/5-g.png"
                  class="testimonial-img"
                  alt="" />
                <!-- <h3>John Larson</h3>
                  <h4>Entrepreneur</h4> -->
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>L'excellence dans notre métier ne vient pas seulement de
                    l'exécution parfaite, mais de l'engagement constant à
                    améliorer chaque aspect de nos services, de la qualité des
                    matériaux à l'efficacité des solutions technologiques que
                    nous utilisons. Chaque projet, chaque transport, chaque
                    service compte.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Actualités</h2>
        <p>CONSULTEZ NOTRE Actualités</p>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="empty-content" data-aos="fade-up" data-aos-delay="200">
          Disponible bientôt
        </div>
        <div
          class="isotope-layout"
          data-default-filter="*"
          data-layout="masonry"
          data-sort="original-order">
          <!-- <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul> -->
          <!-- End Portfolio Filters -->

          <!-- <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/app-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/app-1.jpg"
                      title="App 1"
                      data-gallery="portfolio-gallery-app"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
             

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/product-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Product 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/product-1.jpg"
                      title="Product 1"
                      data-gallery="portfolio-gallery-product"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
             

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/branding-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Branding 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/branding-1.jpg"
                      title="Branding 1"
                      data-gallery="portfolio-gallery-branding"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/books-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Books 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/books-1.jpg"
                      title="Branding 1"
                      data-gallery="portfolio-gallery-book"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/app-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/app-2.jpg"
                      title="App 2"
                      data-gallery="portfolio-gallery-app"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/product-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Product 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/product-2.jpg"
                      title="Product 2"
                      data-gallery="portfolio-gallery-product"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
             

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/branding-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Branding 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/branding-2.jpg"
                      title="Branding 2"
                      data-gallery="portfolio-gallery-branding"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
             
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/books-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Books 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/books-2.jpg"
                      title="Branding 2"
                      data-gallery="portfolio-gallery-book"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              
              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/app-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/app-3.jpg"
                      title="App 3"
                      data-gallery="portfolio-gallery-app"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/product-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Product 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/product-3.jpg"
                      title="Product 3"
                      data-gallery="portfolio-gallery-product"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/branding-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Branding 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/branding-3.jpg"
                      title="Branding 2"
                      data-gallery="portfolio-gallery-branding"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              

              <div
                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books"
              >
                <div class="portfolio-content h-100">
                  <img
                    src="assets/img/portfolio/books-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  <div class="portfolio-info">
                    <h4>Books 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a
                      href="assets/img/portfolio/books-3.jpg"
                      title="Branding 3"
                      data-gallery="portfolio-gallery-book"
                      class="glightbox preview-link"
                      ><i class="bi bi-zoom-in"></i
                    ></a>
                    <a
                      href="portfolio-details.html"
                      title="More Details"
                      class="details-link"
                      ><i class="bi bi-link-45deg"></i
                    ></a>
                  </div>
                </div>
              </div>
              
            </div> -->
        </div>
      </div>
    </section>
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Équipe</h2>
        <p>CONSULTEZ NOTRE ÉQUIPE</p>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row gy-5">
          <div
            class="col-lg-4 col-md-6"
            data-aos="fade-up"
            data-aos-delay="100">
            <div class="member">
              <div class="pic">
                <img src="assets/img/team/dg.png" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <h4>M. Yacouba Diaby</h4>
                <span>Directeur général</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <div
            class="col-lg-4 col-md-6"
            data-aos="fade-up"
            data-aos-delay="200">
            <div class="member">
              <div class="pic">
                <img
                  src="assets/img/team/team_b.png"
                  class="img-fluid"
                  alt="" />
              </div>
              <div class="member-info">
                <h4></h4>
                <span>Chef de produit</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <div
            class="col-lg-4 col-md-6"
            data-aos="fade-up"
            data-aos-delay="300">
            <div class="member">
              <div class="pic">
                <img
                  src="assets/img/team/team_b.png"
                  class="img-fluid"
                  alt="" />
              </div>
              <div class="member-info">
                <h4></h4>
                <span>Directeur technique</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Nous Contacter</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-lg-12">
                <div
                  class="info-item d-flex flex-column justify-content-center align-items-center"
                  data-aos="fade-up"
                  data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adresse</h3>
                  <p>Rond point CNPS, Cocody, Abidjan</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div
                  class="info-item d-flex flex-column justify-content-center align-items-center"
                  data-aos="fade-up"
                  data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Appelez-nous</h3>
                  <p>(+225) 27 22 39 14 40</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div
                  class="info-item d-flex flex-column justify-content-center align-items-center"
                  data-aos="fade-up"
                  data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Envoyez-nous un e-mail</h3>
                  <p>Groupe@yadi.ci</p>
                </div>
              </div>
              <!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-6">
            <form
              action="forms/contact.php"
              method="post"
              class="php-email-form"
              data-aos="fade-up"
              data-aos-delay="500">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Votre Nom complet"
                    required="" />
                </div>

                <div class="col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Votre Email"
                    required="" />
                </div>

                <div class="col-md-12">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    placeholder="Sujet"
                    required="" />
                </div>

                <div class="col-md-12">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="4"
                    placeholder="Message"
                    required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Chergement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Votre message a été envoyé. Merci !
                  </div>

                  <button type="submit">Envoyer un message</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- /Contact Section -->
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">Yadi-Group</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Rond point CNPS</p>
            <p>Cocody, Abidjan</p>
            <p class="mt-3">
              <strong>Téléphone:</strong> <span>(+225) 27 22 39 14 40</span>
            </p>
            <p><strong>Email:</strong> <span>Groupe@yadi.ci</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens rapides</h4>
          <ul>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">À propos</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Nos filliales</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i> <a href="#">Engagements</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Actualités</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Contact</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos filliales</h4>
          <ul>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Yadi-Car-Center</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">DDCS</a>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <a href="#">Ydia-Construction</a>
            </li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Vroom</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Notre newsletter</h4>
          <p>
            Abonnez-vous à notre newsletter et recevez les dernières
            nouveautés sur nos produits et services !
          </p>
          <form
            action="forms/newsletter.php"
            method="post"
            class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email" /><input
                type="submit"
                value="S'abonner" />
            </div>
            <div class="loading">Chargement</div>
            <div class="error-message"></div>
            <div class="sent-message">
              Votre demande d'abonnement a bien été envoyée. Merci !
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>
        © <span>Copyright</span>
        <strong class="px-1 sitename">Yadi-Group</strong>
        <span>Tous droits réservés</span>
      </p>
      <div class="credits">
        Conçu par
        <a href="https://github.com/kouassikonan57/">KFernand</a> Distribué
        par
        <a href="mailto:Groupe@yadi.ci">Yadi-Group</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a
    href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/filiales.js"></script>

  <!-- <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Délai en ms (ajustez-le si l'animation est plus lente)
        const animationDuration = 1500; 

        setTimeout(function() {
          // Cible les 3 compteurs et ajoute "+"
          const counters = [
            { id: "hardworkers-counter", suffix: "+" },  // Travailleurs acharnés (100+)
            { id: "happy-clients-counter", suffix: "+" }, // Clients satisfaits (232+)
            { id: "projects-counter", suffix: "+" }       // Projets (521+)
          ];

          counters.forEach(counter => {
            const element = document.getElementById(counter.id);
            if (element) {
              element.textContent += counter.suffix;
            }
          });
        }, animationDuration);
      });
    </script> -->

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const slides = document.querySelectorAll(".slide");
      const dots = document.querySelectorAll(".nav-dot");
      let currentIndex = 0;
      const slideDuration = 6000; // 6 seconds per slide
      let slideInterval;

      function showSlide(index) {
        slides.forEach((slide) => slide.classList.remove("active"));
        dots.forEach((dot) => dot.classList.remove("active"));

        slides[index].classList.add("active");
        dots[index].classList.add("active");
        currentIndex = index;
      }

      function nextSlide() {
        const newIndex = (currentIndex + 1) % slides.length;
        showSlide(newIndex);
      }

      function startSlideshow() {
        slideInterval = setInterval(nextSlide, slideDuration);
      }

      // Initialize
      showSlide(0);
      startSlideshow();

      // Dot navigation
      dots.forEach((dot) => {
        dot.addEventListener("click", function() {
          const slideIndex = parseInt(this.getAttribute("data-slide"));
          showSlide(slideIndex);
          clearInterval(slideInterval);
          startSlideshow();
        });
      });
    });
  </script>

  <script>
    /**
     * Template Name: Dewi
     * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
     * Updated: Aug 07 2024 with Bootstrap v5.3.3
     * Author: BootstrapMade.com
     * License: https://bootstrapmade.com/license/
     */

    (function() {
      "use strict";

      /**
       * Apply .scrolled class to the body as the page is scrolled down
       */
      function toggleScrolled() {
        const selectBody = document.querySelector('body');
        const selectHeader = document.querySelector('#header');
        if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
        window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
      }

      document.addEventListener('scroll', toggleScrolled);
      window.addEventListener('load', toggleScrolled);

      /**
       * Mobile nav toggle
       */
      const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

      function mobileNavToogle() {
        document.querySelector('body').classList.toggle('mobile-nav-active');
        mobileNavToggleBtn.classList.toggle('bi-list');
        mobileNavToggleBtn.classList.toggle('bi-x');
      }
      mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

      /**
       * Hide mobile nav on same-page/hash links
       */
      document.querySelectorAll('#navmenu a').forEach(navmenu => {
        navmenu.addEventListener('click', () => {
          if (document.querySelector('.mobile-nav-active')) {
            mobileNavToogle();
          }
        });

      });

      /**
       * Toggle mobile nav dropdowns
       */
      document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
        navmenu.addEventListener('click', function(e) {
          e.preventDefault();
          this.parentNode.classList.toggle('active');
          this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
          e.stopImmediatePropagation();
        });
      });

      /**
       * Preloader
       */
      const preloader = document.querySelector('#preloader');
      if (preloader) {
        window.addEventListener('load', () => {
          preloader.remove();
        });
      }

      /**
       * Scroll top button
       */
      let scrollTop = document.querySelector('.scroll-top');

      function toggleScrollTop() {
        if (scrollTop) {
          window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
      }
      scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });

      window.addEventListener('load', toggleScrollTop);
      document.addEventListener('scroll', toggleScrollTop);

      /**
       * Animation on scroll function and init
       */
      function aosInit() {
        AOS.init({
          duration: 600,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        });
      }
      window.addEventListener('load', aosInit);

      /**
       * Initiate glightbox
       */
      const glightbox = GLightbox({
        selector: '.glightbox'
      });

      /**
       * Initiate Pure Counter
       */
      new PureCounter();

      /**
       * Init swiper sliders
       */
      function initSwiper() {
        document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
          let config = JSON.parse(
            swiperElement.querySelector(".swiper-config").innerHTML.trim()
          );

          if (swiperElement.classList.contains("swiper-tab")) {
            initSwiperWithCustomPagination(swiperElement, config);
          } else {
            new Swiper(swiperElement, config);
          }
        });
      }

      window.addEventListener("load", initSwiper);

      /**
       * Init isotope layout and filters
       */
      document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
        let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
        let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
        let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

        let initIsotope;
        imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
          initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
            itemSelector: '.isotope-item',
            layoutMode: layout,
            filter: filter,
            sortBy: sort
          });
        });

        isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
          filters.addEventListener('click', function() {
            isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
            this.classList.add('filter-active');
            initIsotope.arrange({
              filter: this.getAttribute('data-filter')
            });
            if (typeof aosInit === 'function') {
              aosInit();
            }
          }, false);
        });

      });

      /**
       * Correct scrolling position upon page load for URLs containing hash links.
       */
      window.addEventListener('load', function(e) {
        if (window.location.hash) {
          if (document.querySelector(window.location.hash)) {
            setTimeout(() => {
              let section = document.querySelector(window.location.hash);
              let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
              window.scrollTo({
                top: section.offsetTop - parseInt(scrollMarginTop),
                behavior: 'smooth'
              });
            }, 100);
          }
        }
      });

      /**
       * Navmenu Scrollspy
       */
      let navmenulinks = document.querySelectorAll('.navmenu a');

      function navmenuScrollspy() {
        navmenulinks.forEach(navmenulink => {
          if (!navmenulink.hash) return;
          let section = document.querySelector(navmenulink.hash);
          if (!section) return;
          let position = window.scrollY + 200;
          if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
            document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
            navmenulink.classList.add('active');
          } else {
            navmenulink.classList.remove('active');
          }
        })
      }
      window.addEventListener('load', navmenuScrollspy);
      document.addEventListener('scroll', navmenuScrollspy);

    })();
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Animation au scroll
      const filialeItems = document.querySelectorAll('.filiale-item');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');

            // Animation séquentielle pour chaque élément
            const index = Array.from(filialeItems).indexOf(entry.target);
            entry.target.style.transitionDelay = `${index * 0.1}s`;
          }
        });
      }, {
        threshold: 0.1
      });

      filialeItems.forEach(item => {
        observer.observe(item);
      });

      // Redirection au clic sur toute la carte filiale
      document.querySelectorAll('.filiale-link').forEach(link => {
        link.addEventListener('click', function(e) {
          // Si on clique directement sur un lien dans la description, on ne fait rien de plus
          if (e.target.tagName === 'A' && e.target.href !== this.href) {
            return;
          }

          // Sinon, on redirige vers le lien principal de la filiale
          if (e.target !== this && !this.contains(e.target)) return;

          e.preventDefault();
          window.open(this.href, '_blank');
        });
      });
    });
  </script>
</body>

</html>