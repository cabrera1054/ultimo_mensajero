@extends('layouts.stark')
@section('content')
<header>
        <div class="container">
          <div class="brand">
            <h1 class="brand_name"><a href="./"><img src="images/portada.jpg" alt="muestra esto" width=500ph height=200></a></h1>
          </div>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">INICIO</a>
                </li>
                <li><a href="/admin">ADMINISTRADOR</a>
                </li>
                <li><a href="index-1.html">ESPECIALISTA</a>
                </li>
                <li><a href="index-2.html">EDITOR</a>
                </li>
                <li><a href="index-3.html">CONTACTANOS</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="images/portada.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">BOLETIN 1</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide02.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">BOLETIN 2</div>
                  </div>
                </div>
              </div>
            </div>
            <div data-src="images/page-1_slide03.jpg">
              <div class="camera_caption fadeIn">
                <div class="container">
                  <div class="row">
                    <div class="preffix_6 grid_6">BOLETIN 3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
         
             
            </ul>
          </div>
        </section>

        
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      <footer>
        <section class="well3">
          <div class="container">
            <ul class="row contact-list">
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>4578 Marmora Road,Glasgow<br/> D04 89GR</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6789</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6790</a></div>
                </div>
              </li>
              <li class="grid_4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="copyright">GENESYS SOFT © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=418&type=1" target="_blank">Business Templates at TemplateMonster.com</a>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
@endsection