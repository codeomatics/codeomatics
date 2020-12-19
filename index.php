<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="We Are Codeomatics A team of passionate designers and developers from Pakistan">
    <title>Codeomatics</title>
    <?php 
      $msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false; 
      $firefox= strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
      $safar = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
      $chrome= strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
      if ($msie || $safar || $firefox) {
      echo '
      <link rel="stylesheet" href="css/css-main.min.css">
      <link rel="stylesheet" href="css/Icomoon-style.css">
      ';
      }else{
        echo '
        <link rel="preload" as="style" href="css/css-main.min.css" type="text/css" onload="this.onload=null;this.rel='.'stylesheet'.'">
        <link rel="preload" href="css/Icomoon-style.css" as="style" type="text/css" onload="this.onload=null;this.rel='.'stylesheet'.'">
        ';
      }
    ?>

    <!-- Styles-->
    
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- <link rel="icon" type="image/png" href="favicons/images-favicon.png"> -->
    <!-- <script src="js/recaptcha-api.js" async defer></script> -->
    <link rel="preload" href="css/font-awsome/css/all.min.css"  as="style" type="text/css" onload="this.onload=null;this.rel='stylesheet'">
    <style>
        /*@font-face {
          font-family: 'Art Basel Text';
          src: url('fonts/ArtBaselText-Regular.woff2') format('woff2');
          font-display: swap;
        }
        @font-face {
          font-family: 'Art Basel Headline';
          src: url('fonts/ArtBaselHeadline-Bold.woff') format('woff');
          font-display: swap;
        }
        @font-face {
          font-family: 'Basel';
          src: url('fonts/Basel-Regular.woff') format('woff');
          font-display: swap;
        }*/
        body{
          font-family: Basel !important
        }
      #eapps-form-1 .eapps-form-layout-default, #eapps-form-1 .eapps-form-layout-boxed{
        padding: 0 !important;
        border: none !important;
        max-width: none !important;
      }
    </style>
  </head>
  <body>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="app" id="content" style="display: none;">
      <header>
        <div class="header-container">
          <div class="container">
            <div class="header-section d-flex justify-content-between align-items-center">
              <div class="header-logo"><a href="/"><img src="images/codeomatics.png"></a></div>
              <div class="header-menu">
                <ul class="nav nav-light"><li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><span class="nav-link" data-toggle="modal" data-target="#contactModal">Contact</span></li>
                </ul><div class="mobile-menu"><span></span><span></span></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="main-content landing">
        <section class="home-hero"><div class="hero-bg">
            <div class="hero-pattern-bg"><img class="hero-pattern-img__default" src="images/images-hero-pattern-bg.png"><img class="hero-pattern-img__large" src="images/images-hero-pattern-bg-lg.png"></div>
          </div>
          <div class="hero-character">
            <div class="hero-guy-1"><img class="hero-guy-1__default" src="images/images-hero-guy-1.png"><img class="hero-guy-1__large" src="images/images-hero-guy-1-lg.png"></div>
            <div class="hero-guy-2"><img src="images/images-hero-guy-2.png"></div>
            <div class="hero-guy-3"><img src="images/images-hero-guy-3.png"></div>
            <div class="hero-girl"><img src="images/images-hero-girl.png"></div>
          </div>
          <div class="hero-overlay"></div>
          <div class="hero-section">
            <div class="hero-container">
              <div class="hero-text">
                <h1>We Are Codeomatics</h1>
                <p>A team of passionate designers and developers from Pakistan</p>
                <div class="hero-button-float">
                  <div class="hero-button-wrapper">
                    <button class="btn btn-white btn-talk" data-toggle="modal" data-target="#contactModal"><i class="icon-pp-envelope"></i><span>Let's talk!</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><section class="home-services"><div class="container">
            <div class="services-section">
              <div class="section-title text-center">
                <h2>What We Do</h2>
              </div>
              <div class="services-container">
                <div class="row justify-content-center">
                  <div class="col-sm-4 col-6">
                    <div class="service-wrapper">
                      <div class="service-image">
                        <div class="service-icon">
                          <div class="icon-object">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><desc>Created with Sketch.</desc><defs><lineargradient id="ui-linearGradient-2" x1="12.629094%" y1="2.33397313%" x2="117.1836%" y2="130.121595%"><stop stop-color="#9CB3FF" offset="0%"></stop><stop stop-color="#B0FFE9" offset="100%"></stop></lineargradient><circle id="ui-path-3" cx="38.5" cy="38.5" r="38.5"></circle><rect id="ui-path-5" x="0" y="0" width="27" height="19" rx="2"></rect><filter id="ui-filter-6" x="-27.8%" y="-13.2%" width="137.0%" height="152.6%" filterunits="objectBoundingBox"><feoffset dx="-5" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset><fecolormatrix values="0 0 0 0 0.219607843   0 0 0 0 0.37254902   0 0 0 0 0.623529412  0 0 0 0.1 0" type="matrix" in="shadowOffsetOuter1"></fecolormatrix></filter></defs><g id="UI-Object-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="uiObject" transform="translate(62.000000, 62.000000)"><mask id="ui-mask-4" fill="white"><use xlink:href="#ui-path-3"></use></mask><use id="uiObjectBg" fill="url(#ui-linearGradient-2)" xlink:href="#ui-path-3"></use><g id="uiObjectDesktop" mask="url(#ui-mask-4)"><g transform="translate(26.000000, 29.000000)"><g id="ui-Rectangle-14" fill="none"><use fill="black" fill-opacity="1" filter="url(#ui-filter-6)" xlink:href="#ui-path-5"></use><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#ui-path-5"></use></g><path id="ui-Rectangle-14-Copy-2" d="M2,0 L25,0 C26.1045695,-2.02906125e-16 27,0.8954305 27,2 L27,5 L0,5 L0,2 C-1.3527075e-16,0.8954305 0.8954305,2.02906125e-16 2,0 Z" fill="#D6E5FF" fill-rule="evenodd"></path></g></g><g id="uiObjectPhone" mask="url(#ui-mask-4)"><g transform="translate(40.000000, 23.000000)"><rect id="ui-Rectangle-14-Copy" fill="#4C82DE" x="0" y="0" width="17" height="20" rx="2"></rect><circle id="Oval-17" fill="#FFFFFF" cx="8.5" cy="15.5" r="1.5"></circle></g></g></g></g></svg></div>
                          <div class="icon-mask">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Web Apps</title><desc>Created with Sketch.</desc><defs><lineargradient id="ui-linearGradient-1" x1="35.6647303%" y1="31.8975636%" x2="76.464791%" y2="81.5711661%"><stop stop-color="#9CB3FF" offset="0%"></stop><stop stop-color="#B0FFE9" offset="100%"></stop></lineargradient><clippath id="ui-particle"><path id="uiRect1" d="M86,83 L88,83 L88,81 L86,81 L86,83 Z M90,79 L90,85 L84,85 L84,79 L90,79 Z" fill="#FFFFFF" fill-rule="nonzero" transform="translate(87.000000, 82.000000) rotate(-315.000000) translate(-87.000000, -82.000000) "></path><path id="uiRect2" d="M92,122 L93,122 L93,121 L92,121 L92,122 Z M95,119 L95,124 L90,124 L90,119 L95,119 Z" fill="#FFFFFF" fill-rule="nonzero" transform="translate(92.500000, 121.500000) rotate(-315.000000) translate(-92.500000, -121.500000) "></path><path id="uiRect3" d="M125,108 L126,108 L126,107 L125,107 L125,108 Z M128,105 L128,110 L123,110 L123,105 L128,105 Z" fill="#FFFFFF" fill-rule="nonzero" transform="translate(125.500000, 107.500000) rotate(-315.000000) translate(-125.500000, -107.500000) "></path><path id="uiRect4" d="M86,83 L88,83 L88,81 L86,81 L86,83 Z M90,79 L90,85 L84,85 L84,79 L90,79 Z" fill="#FFFFFF" fill-rule="nonzero" transform="translate(87.000000, 82.000000) rotate(-315.000000) translate(-87.000000, -82.000000) "></path></clippath></defs><g id="UI-Mask-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="uiMask" clip-path="url(#ui-particle)"><rect id="uiRectMask" fill="url(#ui-linearGradient-1)" x="0" y="0" width="200" height="200"></rect><circle id="uiCircleMask" fill="#FFFFFF" cx="100.5" cy="100.5" r="38.5" opacity=".7"></circle></g></g></svg></div>
                        </div>
                      </div>
                      <div class="service-detail text-center">
                        <h3>Web Apps</h3>
                        <p>Cutomized Web Apps build on latest tech stack with full optimization</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6">
                    <div class="service-wrapper">
                      <div class="service-image">
                        <div class="service-icon">
                          <div class="icon-object">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><desc>Created with Sketch.</desc><defs><lineargradient id="linearGradient-2" x1="83.6648309%" y1="100%" x2="-20.4912617%" y2="-14.1158266%"><stop stop-color="#E7D1FF" offset="0%"></stop><stop stop-color="#8383EF" offset="100%"></stop></lineargradient><path id="path-3" d="M10.5,0 C16.2989899,-1.06525716e-15 21,4.70101013 21,10.5 L21,24 C21,25.1045695 20.1045695,26 19,26 L2,26 C0.8954305,26 1.3527075e-16,25.1045695 0,24 L0,10.5 C-7.10171439e-16,4.70101013 4.70101013,1.06525716e-15 10.5,0 Z M7,15 C8.65685425,15 10,13.6568542 10,12 C10,10.3431458 8.65685425,9 7,9 C5.34314575,9 4,10.3431458 4,12 C4,13.6568542 5.34314575,15 7,15 Z M14,15 C15.6568542,15 17,13.6568542 17,12 C17,10.3431458 15.6568542,9 14,9 C12.3431458,9 11,10.3431458 11,12 C11,13.6568542 12.3431458,15 14,15 Z"></path><filter id="filter-4" x="-35.7%" y="-9.6%" width="147.6%" height="138.5%" filterunits="objectBoundingBox"><feoffset dx="-5" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset><fecolormatrix values="0 0 0 0 0.356862745   0 0 0 0 0.31372549   0 0 0 0 0.760784314  0 0 0 0.1 0" type="matrix" in="shadowOffsetOuter1"></fecolormatrix></filter></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="illusObject" transform="translate(62.000000, 62.000000)"><circle id="illusObjectBg" fill="url(#linearGradient-2)" cx="38.5" cy="38.5" r="38.5"></circle><g id="illusObjectSpooky" transform="translate(26.000000, 22.000000)"><g id="Combined-Shape"><use fill="black" fill-opacity="1" filter="url(#filter-4)" xlink:href="#path-3"></use><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#path-3"></use></g><path id="Rectangle-25" d="M0,21 L21,21 L21,24 C21,25.1045695 20.1045695,26 19,26 L2,26 C0.8954305,26 1.3527075e-16,25.1045695 0,24 L0,21 Z" fill="#F0EDFF"></path></g><g id="illusObjectGhost" transform="translate(41.000000, 30.000000)"><path id="Rectangle-23" d="M8.5,0 L8.5,0 C13.1944204,-8.62351033e-16 17,3.80557963 17,8.5 L17,19 C17,20.1045695 16.1045695,21 15,21 L2,21 C0.8954305,21 1.3527075e-16,20.1045695 0,19 L0,8.5 C-5.74900688e-16,3.80557963 3.80557963,8.62351033e-16 8.5,0 Z" fill="#7567DB"></path><path id="Oval-19" d="M5,11 C5,13.209139 6.56700338,15 8.5,15 C10.4329966,15 12,13.209139 12,11" stroke="#C4B6F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g></g></g></svg></div>
                          <div class="icon-mask">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Mobile Apps</title><desc>Created with Sketch.</desc><defs><lineargradient id="linearGradient-1" x1="63.8378906%" y1="69.4511719%" x2="22.890625%" y2="26.2285156%"><stop stop-color="#E7D1FF" offset="0%"></stop><stop stop-color="#8383EF" offset="100%"></stop></lineargradient><clippath id="illus-particle"><path id="illusCircle1" d="M82.5,86 C80.5670034,86 79,84.4329966 79,82.5 C79,80.5670034 80.5670034,79 82.5,79 C84.4329966,79 86,80.5670034 86,82.5 C86,84.4329966 84.4329966,86 82.5,86 Z M82.5,84 C83.3284271,84 84,83.3284271 84,82.5 C84,81.6715729 83.3284271,81 82.5,81 C81.6715729,81 81,81.6715729 81,82.5 C81,83.3284271 81.6715729,84 82.5,84 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="illusCircle2" d="M117.5,89 C116.119288,89 115,87.8807119 115,86.5 C115,85.1192881 116.119288,84 117.5,84 C118.880712,84 120,85.1192881 120,86.5 C120,87.8807119 118.880712,89 117.5,89 Z M117.5,87 C117.776142,87 118,86.7761424 118,86.5 C118,86.2238576 117.776142,86 117.5,86 C117.223858,86 117,86.2238576 117,86.5 C117,86.7761424 117.223858,87 117.5,87 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="illusCircle3" d="M107.5,123 C106.119288,123 105,121.880712 105,120.5 C105,119.119288 106.119288,118 107.5,118 C108.880712,118 110,119.119288 110,120.5 C110,121.880712 108.880712,123 107.5,123 Z M107.5,121 C107.776142,121 108,120.776142 108,120.5 C108,120.223858 107.776142,120 107.5,120 C107.223858,120 107,120.223858 107,120.5 C107,120.776142 107.223858,121 107.5,121 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="illusCircle4" d="M82.5,86 C80.5670034,86 79,84.4329966 79,82.5 C79,80.5670034 80.5670034,79 82.5,79 C84.4329966,79 86,80.5670034 86,82.5 C86,84.4329966 84.4329966,86 82.5,86 Z M82.5,84 C83.3284271,84 84,83.3284271 84,82.5 C84,81.6715729 83.3284271,81 82.5,81 C81.6715729,81 81,81.6715729 81,82.5 C81,83.3284271 81.6715729,84 82.5,84 Z" fill="#FFFFFF" fill-rule="nonzero"></path></clippath></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="illusMask" clip-path="url(#illus-particle)"><rect id="illusRectMask" fill="url(#linearGradient-1)" x="0" y="0" width="200" height="200"></rect><circle id="illusCircleMask" fill="#FFFFFF" cx="100.5" cy="100.5" r="38.5" opacity=".7"></circle></g></g></svg></div>
                        </div>
                      </div>
                      <div class="service-detail text-center">
                        <h3>Mobile Apps</h3>
                        <p>Native apps on both Android and IOS platforms</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6">
                    <div class="service-wrapper">
                      <div class="service-image">
                        <div class="service-icon">
                          <div class="icon-object">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><desc>Created with Sketch.</desc><defs><lineargradient id="brand-linearGradient-2" x1="0%" y1="0%" x2="80.2154694%" y2="100%"><stop stop-color="#FF8989" offset="0%"></stop><stop stop-color="#FFDDC5" offset="100%"></stop></lineargradient><rect id="brand-path-3" x="0" y="0" width="23" height="23" rx="4"></rect><filter id="brand-filter-4" x="-32.6%" y="-10.9%" width="143.5%" height="143.5%" filterunits="objectBoundingBox"><feoffset dx="-5" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset><fecolormatrix values="0 0 0 0 0.809390944   0 0 0 0 0.273807347   0 0 0 0 0.247218091  0 0 0 0.1 0" type="matrix" in="shadowOffsetOuter1"></fecolormatrix></filter></defs><g id="Brand-Object-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="brandObject" transform="translate(62.000000, 62.000000)"><circle id="brandObjectBg" fill="url(#brand-linearGradient-2)" cx="38.5" cy="38.5" r="38.5"></circle><g id="brandObjectFrame" transform="translate(27.000000, 27.000000)"><g id="brand-Rectangle-24"><use fill="black" fill-opacity="1" filter="url(#brand-filter-4)" xlink:href="#brand-path-3"></use><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#brand-path-3"></use></g><rect id="brand-Rectangle-24-Copy" fill="#FFE2E0" x="5" y="5" width="13" height="13" rx="4"></rect></g><text id="brandObjectText" font-family="Montserrat-Black, Montserrat" font-size="24" font-weight="700" letter-spacing="1.255385" fill="#E86A63"><tspan x="36" y="41">A</tspan></text></g></g></svg></div>
                          <div class="icon-mask">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Branding</title><desc>Created with Sketch.</desc><defs><lineargradient id="brand-linearGradient-1" x1="31.0546875%" y1="31.0136719%" x2="61.1679688%" y2="69.2753906%"><stop stop-color="#FF8989" offset="0%"></stop><stop stop-color="#FFDDC5" offset="100%"></stop></lineargradient><clippath id="brand-particle"><path id="brandTri1" d="M118.577311,88 L122.524037,88 L120.550674,84.7110611 L118.577311,88 Z M124.239023,86.9710085 C124.80732,87.918169 124.500189,89.1466895 123.553029,89.7149859 C123.242198,89.9014843 122.886525,90 122.524037,90 L118.577311,90 C117.472741,90 116.577311,89.1045695 116.577311,88 C116.577311,87.6375121 116.675826,87.2818393 116.862325,86.9710085 L118.835688,83.6820696 C119.403985,82.7349091 120.632505,82.4277789 121.579666,82.9960753 C121.861165,83.1649748 122.09676,83.4005704 122.26566,83.6820696 L124.239023,86.9710085 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="brandTri2" d="M81,88.9436506 L79.7661904,91 L82.2338096,91 L81,88.9436506 Z M83.9487955,89.9710085 C84.5170918,90.918169 84.2099617,92.1466895 83.2628011,92.7149859 C82.9519703,92.9014843 82.5962975,93 82.2338096,93 L79.7661904,93 C78.6616209,93 77.7661904,92.1045695 77.7661904,91 C77.7661904,90.6375121 77.864706,90.2818393 78.0512045,89.9710085 L79.2850141,87.9146591 C79.8533105,86.9674986 81.081831,86.6603685 82.0289915,87.2286648 C82.3104907,87.3975643 82.5460863,87.6331599 82.7149859,87.9146591 L83.9487955,89.9710085 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="brandTri3" d="M114,118.943651 L112.76619,121 L115.23381,121 L114,118.943651 Z M116.948795,119.971008 C117.517092,120.918169 117.209962,122.14669 116.262801,122.714986 C115.95197,122.901484 115.596298,123 115.23381,123 L112.76619,123 C111.661621,123 110.76619,122.104569 110.76619,121 C110.76619,120.637512 110.864706,120.281839 111.051205,119.971008 L112.285014,117.914659 C112.85331,116.967499 114.081831,116.660368 115.028992,117.228665 C115.310491,117.397564 115.546086,117.63316 115.714986,117.914659 L116.948795,119.971008 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="brandTri4" d="M118.577311,88 L122.524037,88 L120.550674,84.7110611 L118.577311,88 Z M124.239023,86.9710085 C124.80732,87.918169 124.500189,89.1466895 123.553029,89.7149859 C123.242198,89.9014843 122.886525,90 122.524037,90 L118.577311,90 C117.472741,90 116.577311,89.1045695 116.577311,88 C116.577311,87.6375121 116.675826,87.2818393 116.862325,86.9710085 L118.835688,83.6820696 C119.403985,82.7349091 120.632505,82.4277789 121.579666,82.9960753 C121.861165,83.1649748 122.09676,83.4005704 122.26566,83.6820696 L124.239023,86.9710085 Z" fill="#FFFFFF" fill-rule="nonzero"></path></clippath></defs><g id="Brand-Mask-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="brandMask" clip-path="url(#brand-particle)"><rect id="brandRectMask" fill="url(#brand-linearGradient-1)" x="0" y="0" width="200" height="200"></rect><circle id="brandCircleMask" fill="#FFFFFF" cx="100.5" cy="100.5" r="38.5" opacity=".7"></circle></g></g></svg></div>
                        </div>
                      </div>
                      <div class="service-detail text-center">
                        <h3>Ecommerce</h3>
                        <p>Building customized eCommerce sites based on shopifiy, woo-commerce, opencart and magento.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6">
                    <div class="service-wrapper">
                      <div class="service-image">
                        <div class="service-icon">
                          <div class="icon-object">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><desc>Created with Sketch.</desc><defs><lineargradient id="fe-linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%"><stop stop-color="#FFA8E8" offset="0%"></stop><stop stop-color="#FFE6E6" offset="100%"></stop></lineargradient><rect id="fe-path-3" x="0" y="0" width="27" height="19" rx="2"></rect><filter id="fe-filter-4" x="-27.8%" y="-13.2%" width="137.0%" height="152.6%" filterunits="objectBoundingBox"><feoffset dx="-5" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset><fecolormatrix values="0 0 0 0 0.835294118   0 0 0 0 0.305882353   0 0 0 0 0.674509804  0 0 0 0.1 0" type="matrix" in="shadowOffsetOuter1"></fecolormatrix></filter></defs><g id="Fe-Object-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="feObject" transform="translate(62.000000, 62.000000)"><circle id="feObjectBg" fill="url(#fe-linearGradient-2)" cx="38.5" cy="38.5" r="38.5"></circle><g id="feObjectWindow" transform="translate(27.000000, 28.000000)"><g id="fe-Rectangle-14"><use fill="black" fill-opacity="1" filter="url(#fe-filter-4)" xlink:href="#fe-path-3"></use><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#fe-path-3"></use></g><path id="fe-Rectangle-14-Copy-2" d="M2,0 L25,0 C26.1045695,-2.02906125e-16 27,0.8954305 27,2 L27,5 L0,5 L0,2 C-1.3527075e-16,0.8954305 0.8954305,2.02906125e-16 2,0 Z" fill="#FFE6F6"></path></g><g id="feObjectCode" transform="translate(42.000000, 27.000000)" stroke="#E778C1" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><polyline id="feObjectArrow" points="0.128498246 0 6 5.93505544 0 12"></polyline><path id="fe-Path-69" d="M7,13 L15,13"></path></g></g></g></svg></div>
                          <div class="icon-mask">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Frontend</title><desc>Created with Sketch.</desc><defs><lineargradient id="fe-linearGradient-1" x1="30.9335938%" y1="31.1699219%" x2="69.8867188%" y2="69.7148438%"><stop stop-color="#FFA8E8" offset="0%"></stop><stop stop-color="#FFE6E6" offset="100%"></stop></lineargradient><clippath id="fe-particle"><path id="feRect1" d="M84,81 L84,84 L87,84 L87,81 L84,81 Z M84,79 L87,79 C88.1045695,79 89,79.8954305 89,81 L89,84 C89,85.1045695 88.1045695,86 87,86 L84,86 C82.8954305,86 82,85.1045695 82,84 L82,81 C82,79.8954305 82.8954305,79 84,79 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="feRect2" d="M90,120 L90,121 L91,121 L91,120 L90,120 Z M90,118 L91,118 C92.1045695,118 93,118.895431 93,120 L93,121 C93,122.104569 92.1045695,123 91,123 L90,123 C88.8954305,123 88,122.104569 88,121 L88,120 C88,118.895431 88.8954305,118 90,118 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="feRect3" d="M123,108 L123,109 L124,109 L124,108 L123,108 Z M123,106 L124,106 C125.104569,106 126,106.895431 126,108 L126,109 C126,110.104569 125.104569,111 124,111 L123,111 C121.895431,111 121,110.104569 121,109 L121,108 C121,106.895431 121.895431,106 123,106 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="feRect4" d="M84,81 L84,84 L87,84 L87,81 L84,81 Z M84,79 L87,79 C88.1045695,79 89,79.8954305 89,81 L89,84 C89,85.1045695 88.1045695,86 87,86 L84,86 C82.8954305,86 82,85.1045695 82,84 L82,81 C82,79.8954305 82.8954305,79 84,79 Z" fill="#FFFFFF" fill-rule="nonzero"></path></clippath></defs><g id="Fe-Mask-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="feMask" clip-path="url(#fe-particle)"><rect id="feRectmask" fill="url(#fe-linearGradient-1)" x="0" y="0" width="200" height="200"></rect><circle id="feCircleMask" fill="#FFFFFF" cx="100.5" cy="100.5" r="38.5" opacity=".7"></circle></g></g></svg></div>
                        </div>
                      </div>
                      <div class="service-detail text-center">
                        <h3>Software Development</h3>
                        <p>Building Desktop Apps, customized softwares and tools for different industries to automate them.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6">
                    <div class="service-wrapper">
                      <div class="service-image">
                        <div class="service-icon">
                          <div class="icon-object">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><desc>Created with Sketch.</desc><defs><lineargradient id="anim-linearGradient-2" x1="1.79567921%" y1="-11.5959074%" x2="100%" y2="100%"><stop stop-color="#FFAF73" offset="0%"></stop><stop stop-color="#FFFECC" offset="100%"></stop></lineargradient><rect id="anim-path-3" x="0" y="0" width="23" height="23" rx="4"></rect><filter id="anim-filter-4" x="-32.6%" y="-10.9%" width="143.5%" height="143.5%" filterunits="objectBoundingBox"><feoffset dx="-5" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset><fecolormatrix values="0 0 0 0 0.730282738   0 0 0 0 0.448360217   0 0 0 0 0.188405685  0 0 0 0.1 0" type="matrix" in="shadowOffsetOuter1"></fecolormatrix></filter></defs><g id="Anim-Object-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="animObject" transform="translate(62.000000, 62.000000)"><circle id="animObjectBg" fill="url(#anim-linearGradient-2)" cx="38.5" cy="38.5" r="38.5"></circle><g id="animObjectFrame" transform="translate(27.000000, 27.000000)"><g id="anim-Rectangle-24"><use fill="black" fill-opacity="1" filter="url(#anim-filter-4)" xlink:href="#anim-path-3"></use><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#anim-path-3"></use></g><path id="anim-Rectangle-24-Copy-2" d="M4,-5.42101086e-20 L19,0 C21.209139,-4.05816873e-16 23,1.790861 23,4 L23,5 L0,5 L0,4 C-2.705415e-16,1.790861 1.790861,4.05816873e-16 4,0 Z" fill="#FFF3E5"></path><path id="anim-Rectangle-24-Copy-3" d="M4,18 L19,18 C21.209139,18 23,19.790861 23,22 L23,23 L0,23 L0,22 C-2.705415e-16,19.790861 1.790861,18 4,18 Z" fill="#FFF3E5" transform="translate(11.500000, 20.500000) scale(1, -1) translate(-11.500000, -20.500000) "></path></g><g id="animObjectPlay" transform="translate(38.000000, 22.000000)"><circle id="anim-Oval-21" fill="#FF9147" cx="10" cy="10" r="10"></circle><path id="anim-Path-71" d="M8,8.000049 L8,12.5614909 C8,13.1137757 8.44771525,13.5614909 9,13.5614909 C9.22090737,13.5614909 9.43559748,13.4883431 9.61055102,13.3534679 L12.5689907,11.0727469 C13.0063875,10.7355489 13.0876146,10.1076157 12.7504166,9.67021894 C12.6979826,9.60220412 12.6370055,9.54122704 12.5689907,9.48879304 L9.61055102,7.20807208 C9.17315425,6.87087406 8.5452211,6.9521012 8.20802308,7.38949798 C8.07314785,7.56445152 8,7.77914163 8,8.000049 Z" fill="#FFFFFF"></path></g></g></g></svg></div>
                          <div class="icon-mask">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Animation</title><desc>Created with Sketch.</desc><defs><lineargradient id="anim-linearGradient-1" x1="30.9785156%" y1="25.7265625%" x2="71.109375%" y2="68.6582031%"><stop stop-color="#FFAF73" offset="0%"></stop><stop stop-color="#FFFECC" offset="100%"></stop></lineargradient><clippath id="anim-particle"><path id="animPenta1" d="M112.5,117.236068 L110.346873,118.800407 L111.169294,121.331559 L113.830706,121.331559 L114.653127,118.800407 L112.5,117.236068 Z M113.675571,115.618034 L115.828698,117.182373 C116.529673,117.691661 116.822989,118.594395 116.55524,119.418441 L115.732819,121.949593 C115.46507,122.773639 114.697158,123.331559 113.830706,123.331559 L111.169294,123.331559 C110.302842,123.331559 109.53493,122.773639 109.267181,121.949593 L108.44476,119.418441 C108.177011,118.594395 108.470327,117.691661 109.171302,117.182373 L111.324429,115.618034 C112.025404,115.108746 112.974596,115.108746 113.675571,115.618034 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="animPenta2" d="M123.201882,95.91245 L123.662979,97.3315595 L125.155119,97.3315595 L125.616216,95.91245 L124.409049,95.035392 L123.201882,95.91245 Z M126.791786,94.294416 C127.492761,94.803704 127.786077,95.7064386 127.518329,96.530484 L127.057232,97.9495935 C126.789484,98.7736388 126.021572,99.3315595 125.155119,99.3315595 L123.662979,99.3315595 C122.796526,99.3315595 122.028615,98.7736388 121.760866,97.9495935 L121.299769,96.530484 C121.032021,95.7064386 121.325337,94.803704 122.026312,94.294416 L123.233479,93.4173581 C123.934453,92.90807 124.883645,92.90807 125.58462,93.4173581 L126.791786,94.294416 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="animPenta3" d="M82.0411799,86.91245 L82.5022766,88.3315595 L83.9944166,88.3315595 L84.4555133,86.91245 L83.2483466,86.035392 L82.0411799,86.91245 Z M85.6310838,85.294416 C86.3320586,85.803704 86.6253748,86.7064386 86.3576263,87.530484 L85.8965297,88.9495935 C85.6287811,89.7736388 84.8608691,90.3315595 83.9944166,90.3315595 L82.5022766,90.3315595 C81.6358241,90.3315595 80.8679121,89.7736388 80.6001635,88.9495935 L80.1390669,87.530484 C79.8713184,86.7064386 80.1646346,85.803704 80.8656094,85.294416 L82.0727761,84.4173581 C82.7737509,83.90807 83.7229423,83.90807 84.4239171,84.4173581 L85.6310838,85.294416 Z" fill="#FFFFFF" fill-rule="nonzero"></path><path id="animPenta4" d="M123.201882,95.91245 L123.662979,97.3315595 L125.155119,97.3315595 L125.616216,95.91245 L124.409049,95.035392 L123.201882,95.91245 Z M126.791786,94.294416 C127.492761,94.803704 127.786077,95.7064386 127.518329,96.530484 L127.057232,97.9495935 C126.789484,98.7736388 126.021572,99.3315595 125.155119,99.3315595 L123.662979,99.3315595 C122.796526,99.3315595 122.028615,98.7736388 121.760866,97.9495935 L121.299769,96.530484 C121.032021,95.7064386 121.325337,94.803704 122.026312,94.294416 L123.233479,93.4173581 C123.934453,92.90807 124.883645,92.90807 125.58462,93.4173581 L126.791786,94.294416 Z" fill="#FFFFFF" fill-rule="nonzero"></path></clippath></defs><g id="Anim-Mask-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="animMask" clip-path="url(#anim-particle)"><rect id="animRectMask" fill="url(#anim-linearGradient-1)" x="0" y="0" width="200" height="200"></rect><circle id="animCircleMask" fill="#FFFFFF" cx="100.5" cy="100.5" r="38.5" opacity=".7"></circle></g></g></svg></div>
                        </div>
                      </div>
                      <div class="service-detail text-center">
                        <h3>Blockchain Development</h3>
                        <p>Building customized proof-of-work and proof-of-stake blockchains based on secured encryption.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-6">
                    <div class="service-wrapper">
                      <div class="service-image">
                        <div class="service-icon">
                          <div class="icon-object">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Photography</title><desc>Created with Sketch.</desc><defs><lineargradient id="photo-linearGradient-2" x1="1.79567921%" y1="-11.5959074%" x2="100%" y2="100%"><stop stop-color="#59DBB0" offset="0%"></stop><stop stop-color="#FEFFB5" offset="100%"></stop></lineargradient><rect id="photo-path-3" x="0" y="0" width="27" height="24" rx="2"></rect><filter id="photo-filter-4" x="-27.8%" y="-10.4%" width="137.0%" height="141.7%" filterunits="objectBoundingBox"><feoffset dx="-5" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"></feoffset><fecolormatrix values="0 0 0 0 0.204768089   0 0 0 0 0.667649872   0 0 0 0 0.42024754  0 0 0 0.1 0" type="matrix" in="shadowOffsetOuter1"></fecolormatrix></filter></defs><g id="Photo-Object-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="photoObject" transform="translate(62.000000, 62.000000)"><circle id="photoObjectBg" fill="url(#photo-linearGradient-2)" cx="38.5" cy="38.5" r="38.5"></circle><g id="photoObjectFrame" transform="translate(25.000000, 27.000000)"><g id="photo-Rectangle-26"><use fill="black" fill-opacity="1" filter="url(#photo-filter-4)" xlink:href="#photo-path-3"></use><use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#photo-path-3"></use></g><rect id="photo-Rectangle-26-Copy" fill="#E8F9ED" x="2" y="2" width="23" height="15" rx="1"></rect></g><g id="photoObjectCamera" transform="translate(37.000000, 37.000000)"><rect id="photo-Rectangle-27" fill="#47BF82" x="0" y="0" width="21" height="16.8" rx="2"></rect><circle id="photo-Oval-20" fill="#FFFFFF" cx="8.4" cy="8.4" r="4.2"></circle><path id="photoObjectFlash" d="M14.7550233,3.675 L17.1791474,3.675" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></g></g></g></svg></div>
                          <div class="icon-mask">
                            <svg width="200px" height="200px" viewbox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch--><title>Photography</title><desc>Created with Sketch.</desc><defs><lineargradient id="photo-linearGradient-1" x1="31.6680129%" y1="26.4698709%" x2="69.6555399%" y2="69.3945556%"><stop stop-color="#59DBB0" offset="0%"></stop><stop stop-color="#FEFFB5" offset="100%"></stop></lineargradient><clippath id="photo-particle"><path id="photoPlus1" d="M78.8,85.8 L78.8,85 C78.8,84.4477153 79.2477153,84 79.8,84 L80.2,84 C80.7522847,84 81.2,84.4477153 81.2,85 L81.2,85.8 L82,85.8 C82.5522847,85.8 83,86.2477153 83,86.8 L83,87.2 C83,87.7522847 82.5522847,88.2 82,88.2 L81.2,88.2 L81.2,89 C81.2,89.5522847 80.7522847,90 80.2,90 L79.8,90 C79.2477153,90 78.8,89.5522847 78.8,89 L78.8,88.2 L78,88.2 C77.4477153,88.2 77,87.7522847 77,87.2 L77,86.8 C77,86.2477153 77.4477153,85.8 78,85.8 L78.8,85.8 Z" fill="#FFFFFF"></path><path id="photoPlus2" d="M124.333333,85.6666667 L126,85.6666667 C126.552285,85.6666667 127,86.1143819 127,86.6666667 L127,87.3333333 C127,87.8856181 126.552285,88.3333333 126,88.3333333 L124.333333,88.3333333 L124.333333,90 C124.333333,90.5522847 123.885618,91 123.333333,91 L122.666667,91 C122.114382,91 121.666667,90.5522847 121.666667,90 L121.666667,88.3333333 L120,88.3333333 C119.447715,88.3333333 119,87.8856181 119,87.3333333 L119,86.6666667 C119,86.1143819 119.447715,85.6666667 120,85.6666667 L121.666667,85.6666667 L121.666667,84 C121.666667,83.4477153 122.114382,83 122.666667,83 L123.333333,83 C123.885618,83 124.333333,83.4477153 124.333333,84 L124.333333,85.6666667 Z" fill="#FFFFFF"></path><path id="photoPlus3" d="M107.8,122.8 L107.8,122 C107.8,121.447715 108.247715,121 108.8,121 L109.2,121 C109.752285,121 110.2,121.447715 110.2,122 L110.2,122.8 L111,122.8 C111.552285,122.8 112,123.247715 112,123.8 L112,124.2 C112,124.752285 111.552285,125.2 111,125.2 L110.2,125.2 L110.2,126 C110.2,126.552285 109.752285,127 109.2,127 L108.8,127 C108.247715,127 107.8,126.552285 107.8,126 L107.8,125.2 L107,125.2 C106.447715,125.2 106,124.752285 106,124.2 L106,123.8 C106,123.247715 106.447715,122.8 107,122.8 L107.8,122.8 Z" fill="#FFFFFF"></path><path id="photoPlus4" d="M78.8,85.8 L78.8,85 C78.8,84.4477153 79.2477153,84 79.8,84 L80.2,84 C80.7522847,84 81.2,84.4477153 81.2,85 L81.2,85.8 L82,85.8 C82.5522847,85.8 83,86.2477153 83,86.8 L83,87.2 C83,87.7522847 82.5522847,88.2 82,88.2 L81.2,88.2 L81.2,89 C81.2,89.5522847 80.7522847,90 80.2,90 L79.8,90 C79.2477153,90 78.8,89.5522847 78.8,89 L78.8,88.2 L78,88.2 C77.4477153,88.2 77,87.7522847 77,87.2 L77,86.8 C77,86.2477153 77.4477153,85.8 78,85.8 L78.8,85.8 Z" fill="#FFFFFF"></path></clippath></defs><g id="Photo-Mask-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="photoMask" clip-path="url(#photo-particle)"><rect id="photoRectMask" fill="url(#photo-linearGradient-1)" x="0" y="0" width="200" height="200"></rect><circle id="photoCircleMask" fill="#FFFFFF" cx="100.5" cy="100.5" r="38.5" opacity=".7"></circle></g></g></svg></div>
                        </div>
                      </div>
                      <div class="service-detail text-center">
                        <h3>Smart Contracts</h3>
                        <p>Building and Deployment of smart contracts based on solidity on varies public/private blockchains incorporating the latest in DeFi.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><section class="home-clients"><div class="container">
            <div class="clients-section">
              <div class="section-title text-center">
                <h2>Our Projects</h2>
                <p>We&rsquo;ve been busy</p>
              </div>
              <div class="clients-container">
                <div class="clients-group">
                  <div class="clients-item hoopsai"><img src="images/bitcoinpk.png"></div>
                </div>
                <div class="clients-group">
                  <div class="clients-item agoda"><img src="images/studio.png"></div>
                  <div class="clients-item getsafe"><img src="images/LJO.png"></div>
                </div>
                <div class="clients-group">
                  <div class="clients-item anyleads"><img src="images/readyhai.png"></div>
                  <div class="clients-item grab"><img src="images/handier.png"></div>
                  <div class="clients-item anyleads connect"><img src="images/connect.png"></div>
                </div>
                <div class="clients-group">
                  <div class="clients-item teachable"><img src="images/certifypk.png"></div>
                  <div class="clients-item flyr"><img src="images/clobbers.png"></div>
                </div>
                <div class="clients-group">
                  <div class="clients-item roger"><img src="images/pumpify.png"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- <section class="home-works"><div class="container">
            <div class="works-section">
              <div class="section-title text-center">
                <h2>Our Latest Works</h2>
              </div>
              <div class="works-container">
                <div class="work-list crisp-works">
                  <div class="work-wrapper d-flex">
                    <div class="work-description">
                      <div class="work-detail d-flex flex-column justify-content-between">
                        <div>
                          <h3>Redesigning Crisp.im</h3>
                          <p>Illustration, Web Design</p>
                        </div>
                        <div><a class="btn btn-work" href="https://www.behance.net/gallery/50451725/Crisp" target="_blank">View Project</a></div>
                      </div>
                    </div>
                    <div class="work-image d-flex justify-content-center align-items-center"><img src="images/images-crisp-works.png"></div>
                  </div>
                </div>
                <div class="work-list lifecycle-works">
                  <div class="work-wrapper d-flex">
                    <div class="work-description">
                      <div class="work-detail d-flex flex-column justify-content-between">
                        <div>
                          <h3>Beautiful Landing Page for Lifecycle</h3>
                          <p>Illustration, Web Design</p>
                        </div>
                        <div><a class="btn btn-work" href="https://www.behance.net/gallery/52119809/Lifecycle" target="_blank">View Project</a></div>
                      </div>
                    </div>
                    <div class="work-image d-flex justify-content-center align-items-center"><img src="images/images-lifecycle-works.png"></div>
                  </div>
                </div>
                <div class="work-list calendar-works">
                  <div class="work-wrapper d-flex">
                    <div class="work-description">
                      <div class="work-detail d-flex flex-column justify-content-between">
                        <div>
                          <h3>2018 Desk Calendar Inventor Edition</h3>
                          <p>Illustration, Product Design</p>
                        </div>
                        <div><a class="btn btn-work" href="https://www.behance.net/gallery/60092409/Paperpillar-2018-Calendar" target="_blank">View Project</a></div>
                      </div>
                    </div>
                    <div class="work-image"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
      </div>
      <footer>
        <div class="footer-bg">
          <div class="footer-pattern-bg"><img class="footer-pattern-bg__default" src="images/images-footer-pattern-bg.png"><img class="footer-pattern-bg__large" src="images/images-footer-pattern-bg-lg.png"></div>
        </div>
        <div class="footer-white-mask"><img class="footer-white-mask__default" src="images/images-footer-white-mask.png"><img class="footer-white-mask__large" src="images/images-footer-white-mask-lg.png"></div>
        <div class="footer-container">
          <div class="container">
            <div class="footer-text text-center">
              <p>Interested to work with us?</p>
              <button class="btn btn-primary btn-talk" data-toggle="modal" data-target="#contactModal">Let's talk!</button>
            </div>
            <div class="footer-social">
              <div class="social-container d-flex justify-content-center">
                <div class="social-wrapper"><a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="icon-pp-instagram"></i></a></div>
                <div class="social-wrapper"><a href="https://www.linkedin.com/company/codeomatics/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></div>
                <div class="social-wrapper"><a href="https://www.facebook.com/Codeomatics-107126827864960" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></div>
                <div class="social-wrapper"><a href="https://github.com/codeomatics" target="_blank" title="Github"><i class="fab fa-github"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- <div class="modal contact-modal fade" id="contactModal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <svg width="742px" height="918px" viewbox="0 0 742 918" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><clippath id="myClip"><path d="M30.723868,23.5811095 C144.050861,7.86036983 257.377853,0 370.704846,0 C484.031838,0 597.358831,7.86036982 710.685823,23.5811095 L710.685823,23.5811095 C717.704865,24.5547922 723.272289,32.000975 724.059029,41.467178 C735.626137,180.644785 741.409692,319.822393 741.409692,459 C741.409692,598.177607 735.626137,737.355214 724.059029,876.532821 L724.05903,876.532821 C723.27229,885.999025 717.704865,893.445208 710.685824,894.418891 C597.358831,910.139631 484.031838,918 370.704846,918 C257.377853,918 144.050861,910.139631 30.7238682,894.418891 L30.7238682,894.41889 C23.7048271,893.445208 18.1374026,885.999025 17.3506626,876.532822 C5.7835542,737.355215 0,598.177607 0,459 C0,319.822393 5.78355416,180.644786 17.3506625,41.4671796 L17.3506612,41.4671794 C18.1374013,32.0009757 23.7048263,24.5547922 30.723868,23.5811095 Z" id="path-1"></path></clippath></defs></svg><svg width="742px" height="768px" viewbox="0 0 742 768" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><clippath id="myClip2"><path d="M31.223868,19.727987 C144.550861,6.57599568 257.877853,0 371.204846,0 C484.531838,0 597.858831,6.57599567 711.185823,19.727987 C718.204865,20.5425712 723.772289,26.7720575 724.559029,34.6914953 C736.126137,151.127663 741.909692,267.563832 741.909692,384 C741.909692,500.436168 736.126137,616.872336 724.559029,733.308504 C723.77229,741.227942 718.204865,747.457429 711.185824,748.272014 C597.858831,761.424005 484.531838,768 371.204846,768 C257.877853,768 144.550861,761.424005 31.2238682,748.272014 C24.2048271,747.457429 18.6374026,741.227942 17.8506626,733.308505 C6.2835542,616.872337 0.5,500.436168 0.5,384 C0.5,267.563832 6.28355416,151.127664 17.8506625,34.6914967 C18.6374013,26.7720581 24.2048263,20.5425712 31.223868,19.727987 Z" id="path-1"></path></clippath></defs></svg><div class="modal-content"><span data-dismiss="modal"><img src="images/icons-modal-close.png"></span>
          <div class="modal-body">
            <div class="modal-success hide">
              <div class="text-center">
                <h3>Thank You!</h3>
                <p>We will be in contact with you within 1 to 2 working dasys!</p>
              </div>
            </div>
            <div class="modal-form show">
              <div>
                <div class="form-wrapper">
                  <div class="elfsight-app-1f01fcca-f5d0-4ddc-9520-6699109ed9cc"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <script src="js/2.22.2-moment.min.js"></script> -->
    <script src="js/js-main.min.js"></script>
    <script src="js/p-platform.js"></script>
    <script type="text/javascript">
      $('body').toggleClass('loaded');
      setTimeout(()=>{
        document.getElementById('content').style.display =""
      },400)
    </script>
  </body>
</html>