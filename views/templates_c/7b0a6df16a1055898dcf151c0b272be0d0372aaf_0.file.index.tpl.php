<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-13 06:17:16
  from 'C:\xampp\htdocs\rto_base\views\template\template_front\prospera\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60751b4c593798_84224414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b0a6df16a1055898dcf151c0b272be0d0372aaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_front\\prospera\\index.tpl',
      1 => 1618287434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60751b4c593798_84224414 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/css/components.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/css/icons.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/css/responsee.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
  </head>  
  
  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner">    
      <!-- Top Bar -->
      <div class="top-bar hide-s hide-m background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact">
              <p class="text-size-12">Contact Us: <?php echo $_smarty_tpl->tpl_vars['data']->value['set']['telp'];?>
 | <a class="text-orange-hover" href="mailto:<?php echo $_smarty_tpl->tpl_vars['data']->value['set']['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['set']['email'];?>
</a></p>
            </div>
          </div>
          <div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
" class="logo"><img style="max-width: 50px;" src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
views/assets/aplikasi/<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['gambar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['set']['nama_singkat_app'];?>
"></a>
          </div>
          <div class="top-nav s-12 l-10">
            
            <!-- <ul class="right chevron">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Home</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Products</a></li>
              <li><a>Services</a>
                <ul>
                  <li><a>Service 1</a>
                    <ul>
                      <li><a>Service 1 A</a></li>
                      <li><a>Service 1 B</a></li>
                    </ul>
                  </li>
                  <li><a>Service 2</a></li>
                </ul>
              </li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">About</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Gallery</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Contact</a></li>
            </ul> -->
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
            <!-- <div class="item">
              <div class="s-12 center">
                <img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/01-boxed.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">Prospera is the New Amazing HTML5 Template</p>
                      <p class="text-white text-size-16 margin-bottom-40">Duis autem vel eum iriure dolor in hendrerit in vulputate velit<br> esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>  
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/02-boxed.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">With Fully Responsive Components</p>
                      <p class="text-white text-size-16 margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>    
                    </div>                  
                  </div>
                </div>
              </div>
            </div> -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['slide'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
              <div class="item">
                <div class="s-12 center">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
views/assets/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value['gambar'];?>
" alt="">
                  <div class="carousel-content">
                    <div class="padding-2x">
                      <div class="s-12 m-12 l-8">
                        <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"><?php echo $_smarty_tpl->tpl_vars['slide']->value['judul'];?>
</p>
                        <p class="text-white text-size-16 margin-bottom-30"><?php echo $_smarty_tpl->tpl_vars['slide']->value['keterangan'];?>
</p>    
                      </div>                  
                    </div>
                  </div>
                </div>
              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>  
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/img-01.jpg" alt="">
              <h2 class="text-thin">Clean Design</h2>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p> 
              <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/img-02.jpg" alt="">
              <h2 class="text-thin">Valid code</h2>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p> 
              <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/img-03.jpg" alt="">
              <h2 class="text-thin">Totally free</h2>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p> 
              <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>                
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 2 -->
      <section class="section background-primary text-center">
        <div class="line">
          <div class="s-12 m-10 l-8 center">
            <h2 class="headline text-thin text-s-size-30">We are Web Design Heroes</h2>
            <p class="text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          </div>
        </div>  
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white">
        <div class="full-width text-center">
          <img class="center margin-bottom-30" style="margin-top: -210px;" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/bio.png" alt="">
          <div class="line">
            <h2 class="headline text-thin text-s-size-30">Fully <span class="text-primary">Responsive</span> HTML5 Template</h2>
            <p class="text-size-20 text-s-size-16 text-thin">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
            <i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
            <p class="text-size-20 text-s-size-16 text-thin text-primary">Try resize your browser window</p>
          </div>  
        </div>  
      </section>
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 --> 
      <section class="section background-white">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Blog</span></h2>
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-05.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-03.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
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
                        <a class="image-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-04.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-02.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
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
                        <a class="image-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-01.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-06.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Lorem Ipsum Dolor sit Amet</a></h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                        <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>    
      </section>
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Our Philosophy</h4>
              <p class="text-size-20"><em>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt."</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">About Our Company</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/img/blog-04.jpg" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contact Us</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adress:</b> Responsive Street 7, London, UK</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
" class="text-primary-hover"><b>E-mail:</b> contact@sampledomain.com</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Phone:</b> 0700 000 987</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Leave a Message</h4>
              <form class="customform text-white">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" type="submit">Submit Button</button></div> 
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
            <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12" href="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
          </div>
        </div>
      </section>
    </footer> 
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/js/responsee.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/js/template-scripts.js"><?php echo '</script'; ?>
>   
   </body>
</html><?php }
}
