<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:title" content="BERANDA - Rio Web Developer | Jasa Buat Website" />
    <meta property="og:description" content="Rio Web Developer | Jasa Buat Website" />
    <meta name="keywords" content="Rio, RioDev, Rio Dev,rio dev, Web, Developer, |, Jasa, Buat, Website, Jogja, buat web, buat website, web sekolah,aplikasi web,E-Raport,raport online,raport,blogspot,wordpress,web developer, web, developer, yogyakarta, jogja, gunungkidul, bantul, sleman, php, css, javascript, jquery, bootstrap, responsive, buat web jogja, buat web jogja, jasa buat web jogja, jasa buat website jogja, jasa buat web,jasa buat website">
    <meta property="og:image" itemprop="image" content="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />


    <title>{$data['set']['nama_singkat_app']}</title>
    <link rel="stylesheet" href="{$theme_path}/css/components.css">
    <link rel="stylesheet" href="{$theme_path}/css/icons.css">
    <link rel="stylesheet" href="{$theme_path}/css/responsee.css">
    <link rel="stylesheet" href="{$theme_path}/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{$theme_path}/owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{$theme_path}/css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{$theme_path}/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{$theme_path}/js/jquery-ui.min.js"></script>
    <style type="text/css">
      /* wa */
.fixed-whatsapp {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  z-index: 9999;
}
.fixed-whatsapp:before {
  content: "";
  background-repeat: no-repeat;
  background-size: 34px 34px;
  background-position: center center;
  width: 50px;
  height: 50px;
  background-image: url("data:image/svg+xml;charset=utf8,%3csvg viewBox='0 0 24 24' width='32' height='32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cg%3e%3cpath style='fill:%23ffffff' d='M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,7 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z'%3e%3c/path%3e%3c/g%3e%3c/svg%3e");
  background-color: #00c853;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 100%;
  box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, 0.12), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
}
/* endwa */
/* load */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #fff;
}
.preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  font: 14px arial;
}
/* endload */

    </style>
  </head>  
  
  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner">    
      <!-- Top Bar -->
      <div class="top-bar hide-s hide-m background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact">
              <p class="text-size-12">Kontak : {$data['set']['telp']} | <a class="text-orange-hover" href="mailto:{$data['set']['email']}">{$data['set']['email']}</a></p>
            </div>
          </div>
          <div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="{$data['set']['fb']}"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
                <li><a href="{$data['set']['tw']}"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
                <li><a href="mailto:{$data['set']['email']}"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
                <li><a href="{$data['set']['ig']}"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="{$basedir}" class="logo"><img style="max-width: 50px;" src="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}" alt="{$data['set']['nama_singkat_app']}"></a>
          </div>
          <div class="top-nav s-12 l-10">
            
            <ul class="right chevron">
              <li><a href="{$basedir}">Home</a></li>
              <li><a href="#projek">Projek</a></li>
              <!-- <li><a>Services</a>
                <ul>
                  <li><a>Service 1</a>
                    <ul>
                      <li><a>Service 1 A</a></li>
                      <li><a>Service 1 B</a></li>
                    </ul>
                  </li>
                  <li><a>Service 2</a></li>
                </ul>
              </li> -->
              <li><a href="#about">Tentang</a></li>
              <!-- <li><a href="{$basedir}">Gallery</a></li> -->
              <li><a href="#kontak">Kontak</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            {foreach $data['slide'] as $slide}
              <div class="item">
                <div class="s-12 center">
                  <img src="{$rootdir}views/assets/slider/{$slide['gambar']}" alt="">
                  <div class="carousel-content">
                    <div class="padding-2x">
                      <div class="s-12 m-12 l-8">
                        <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">{$slide['judul']}</p>
                        <p class="text-white text-size-16 margin-bottom-30">{$slide['keterangan']}</p>    
                      </div>                  
                    </div>
                  </div>
                </div>
              </div>
            {/foreach}
          </div>  
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white" id="projek"> 
        <div class="line">
          <div class="margin">
            {foreach $data['projek'] as $p}
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <img class="margin-bottom" src="{$rootdir}views/assets/projek/{$p['gambar']}" alt="">
                <h2 class="text-thin">{$p['judul']}</h2>
                <p>{$p['keterangan']}</p> 
                <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>                
              </div>
            {/foreach}
          </div>
        </div>
      </section>
      
      <!-- Section 2 -->
      <section class="section background-primary text-center" id="about">
        <div class="line">
          <div class="s-12 m-10 l-8 center">
            <h2 class="headline text-thin text-s-size-30">We are Web Development Heroes</h2>
            <p class="text-size-20">Jasa pembuatan website dan Sistem Informasi</p>
          </div>
        </div>  
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white">
        <div class="full-width text-center">
          <!-- <img class="center margin-bottom-30" style="margin-top: -210px;" src="{$theme_path}/img/bio.png" alt=""> -->
          <img class="center margin-bottom-30 img-thumbnail" style="max-width: 50%;margin-top: -160px;" src="{$rootdir}/views/assets/aplikasi/gambar.jpg" alt="">
          <div class="line">
            <h2 class="headline text-thin text-s-size-30">Fully <span class="text-primary">Responsive</span> HTML5 Template</h2>
            <p class="text-size-20 text-s-size-16 text-thin">Website sangat penting peranannya bagi perusahaan. Menjangkau lebih banyak pelanggan kapanpun & dimanapun. Tampilan responsive menambah kenyaman anda ketika menggunakan sistem.</p>
            <i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
            <p class="text-size-20 text-s-size-16 text-thin text-primary">Try resize your browser window</p>
          </div>  
        </div>  
      </section>
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 --> 
      <!-- <section class="section background-white">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Blog</span></h2>
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="{$basedir}"><img src="{$theme_path}/img/blog-05.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="{$basedir}">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="{$theme_path}/img/blog-03.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="{$basedir}">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="{$basedir}"><img src="{$theme_path}/img/blog-04.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="{$basedir}">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="{$theme_path}/img/blog-02.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="{$basedir}">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="{$basedir}"><img src="{$theme_path}/img/blog-01.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="{$basedir}">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="{$basedir}"><img src="{$theme_path}/img/blog-06.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="{$basedir}">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>    
      </section> -->
      
    </main>
    
    <!-- FOOTER -->
    <footer id="kontak">
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="{$data['set']['fb']}"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="{$data['set']['tw']}"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="mailto:{$data['set']['email']}"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="{$data['set']['ig']}"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">{$data['set']['nama_singkat_app']}</h4>
              <p class="text-size-20"><em>"Membangun negeri dengan teknologi informasi."</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">Tentang</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="{$basedir}"><img src="{$rootdir}views/assets/aplikasi/{$dataaplikasi['gambar']}" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Web Developer berpengalaman sejak 2019.</p>
                    <!-- <a class="text-more-info text-primary-hover" href="{$basedir}">Read more</a> -->
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Kontak</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Alamat:</b> {$data['set']['alamat']}</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="{$basedir}" class="text-primary-hover"><b>E-mail:</b> {$data['set']['email']}</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Phone:</b> {$data['set']['telp']}</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="{$data['set']['tw']}" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="{$data['set']['fb']}" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Kirim Pesan</h4>
              <form class="customform text-white">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email border-radius" placeholder="E-mail" title="Your e-mail" type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Nama anda" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="Pesan" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" type="submit">Kirim</button></div> 
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright</p>
            <p class="text-size-12"></p>
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12" href="{$basedir}" title="Responsee - lightweight responsive framework"></a>
          </div>
        </div>
      </section>
    </footer> 
    <script type="text/javascript" src="{$theme_path}/js/responsee.js"></script>
    <script type="text/javascript" src="{$theme_path}/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{$theme_path}/js/template-scripts.js"></script>

    <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=6282327775694' rel='hubungi Rio Dev' target='_blank' title='Whatsapp' />   
   </body>
</html>