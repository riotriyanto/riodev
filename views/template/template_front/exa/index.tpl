<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{$dataaplikasi['nama_singkat_app']}</title> 
    <link rel="icon" type="image/png" href="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}"/>
    <link rel="stylesheet" href="{$theme_path}/css/components.css">
    <link rel="stylesheet" href="{$theme_path}/css/icons.css">
    <link rel="stylesheet" href="{$theme_path}/css/responsee.css">
    <link rel="stylesheet" href="{$theme_path}/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{$theme_path}/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="{$theme_path}/css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="{$theme_path}/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="{$theme_path}/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{$theme_path}/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{$theme_path}/js/responsee.js"></script>
    <script type="text/javascript" src="{$theme_path}/js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="{$theme_path}/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{$theme_path}/js/template-scripts.js"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<!--  -->
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              
              <ul class="right chevron">
                <li><a href="{$basedir}">Home</a></li>
                <li><a href="{$basedir}about">About Us</a></li>             
                <li><a href="{$basedir}contact">Contact</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        {$content}
      </main>
      
      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">TWITTER</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.instagram.com"><i class="icon-instagram_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
          <a target="_blank" href="https://www.linkedin.com"><i class="icon-linked_in_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">LINKEDIN</span></a>                                                                         
        </div>

        <!-- Main Footer -->
        <section class="section-small-padding text-center background-dark full-width">
          <div class="line">
            <div class="margin">
              <!-- Collumn 1 -->              
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <h3 class="text-size-16">Company Address</h3>
                <p class="text-size-14">
                   {$dataaplikasi['alamat']}
                </p>               
              </div>
              <!-- Collumn 2 -->
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <h3 class="text-size-16">E-mail</h3>
                <p class="text-size-14">
                   {$dataaplikasi['email']}
                </p>              
              </div>
              <!-- Collumn 3 -->
              <div class="s-12 m-12 l-4 ">
                <h3 class="text-size-16">Phone Numbers</h3>
                <p class="text-size-14">
                   {$dataaplikasi['telp']}
                </p>             
              </div>
            </div>
          </div>  
        </section>
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
        
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Copyright 2020</p>
          </div>
        </section>
      </footer>
    </div>
    
  </body>
</html>