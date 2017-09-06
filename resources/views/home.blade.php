<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Label Initiative</title>
    <style>
    #my_step1{
    background: #FF6600  url("images/slider_4.jpg") no-repeat;
    background-size: cover;
    width: 100%;
    }
    #my_step2{
    background: #FF6600  url("images/slider2.jpg") no-repeat;
    background-size: cover;
    width: 100%;
    }
    #my_step3{
    background: #FF6600  url("images/slider3.jpg") no-repeat;
    background-size: cover;
    width: 100%;
    }
    /*sidebar*/
      #pusher{
      visibility: visible;
      }
      #navigation_menu{
      display: none;
      visibility: hidden;
      }
      #logo_left
      {
      display: none;
      }
      @media only screen and (min-width: 860px) {
      #navigation_menu{
      display: flex;
      visibility: visible;
      }
      #pusher{
      display: none;
      visibility:hidden;
      }
      #logo_left{
      display: flex;
      }
    } 
    </style>
    <link rel="shortcut icon" type="image/gif" href="images/home_iBI_icon.ico" />
    {{-- styles --}}
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rvslider.min.css') }}">
    <link rel="stylesheet" href="{{asset('modern-slide-in/css/sequence-theme.modern-slide-in.css')}}" />

  </head>
  <body>
      <div class="ui centered stackable grid">
      @include('partials.header_1')
      {{-- new row --}}
        <div class="row"  style="padding-top:0; padding-bottom: 7em">
          <div id="sequence" class="seq">
            <div class="seq-screen">
              <ul class="seq-canvas">
                <li id="my_step1">
                  <div class="seq-model">
                    <a href="/register"><img data-seq src="images/rubrique.png" alt="" /></a>
                  </div>
                  <div class="seq-title">
                    <h2 data-seq>
                    Notre objectif est de vous accompagner <br>dans la réussite de votre projet  <br>
                    <a href="/qui_sommes_nous">Découvrir Label Initiative ▶ </a>
                    </h2>
                  </div>
                </li>
                <li  id="my_step2">
                  <div class="seq-model">
                    <a href="/register"><img data-seq src="images/rubrique.png" alt="" /></a>
                    
                  </div>
                  <div class="seq-title">
                    <h2 data-seq>
                    Label Initiative organise  un festival <br>
                    Cet évènement s’inscrit dans le cadre du programme <br> « Village Durable »,<br> un projet ouvert, flexible et participatif, <br>porté par la société civile. <br>
                    <a href="">SAVOIR PLUS ▶</a>
                    </h2>
                  </div>
                </li>
                <li id="my_step3">
                  <div class="seq-model">
                    <a href="/register"><img data-seq src="images/rubrique.png" alt="" /></a>
                  </div>
                  <div class="seq-title">
                    <h2 data-seq>
                    Discours de S.M le Roi Mohammed VI, 30 juillet 2015 <br>
                    « En dépit des progrès réalisés par notre pays,<br> ce qui me désole, c’est cette situation de précarité que vivent <br>certains de nos concitoyens dans les régions éloignées et enclavées <br>, surtout sur les sommets de l’Atlas et du Rif,<br> les zones sahariennes arides et les oasis <br> ainsi que certains villages dans les plaines et sur les côtes. <br>
                    Nous avons conscience de l’ampleur <br>du déficit qui s’est accumulé depuis des décennies <br> dans ces régions, malgré toutes les initiatives <br> et tous les efforts qui ont été déployés. »
                    <a href="/qui_sommes_nous">savoir plus ▶</a>
                    </h2>
                  </div>
                </li>
              </ul>
            </div>
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
              <button type="button" class="seq-prev" aria-label="Previous">Previous</button>
              <button type="button" class="seq-next" aria-label="Next">Next</button>
            </fieldset>
          </div>
        </div>
        <!-- new row -->
        <div class=" orange middle aligned  row" style="background-color: #ff6600">
<div class=" three wide column">
  <img src="{{asset('images/home_black_and_white.png')}}" class="ui centered bordered small image" style="box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);"> 
</div>
          <div class="ten wide column">
            <p class="main-title">
         Vous êtes une association ou une coopérative de la province de <b>KENITRA ?</b> <br>
         
              Vous cherchez des solutions à vos besoins ? <br>
             Vous souhaitez participer au développement de votre territoire<br>
          et trouver des partenaires et gagner en visibilité ? <br>
    
            </p>
          </div>
        </div>
        <div class="row">    
        <div class="eight wide column">
        <p class="main-title" style="font-size: 1.9em; font-family: 'Open Sans Condensed';">
            <b style="color:rgb(127,128,127) ; font-size:24px;"> LABEL INITIATIVE</b> 
            <span style="color: #ff6600;">vous accompagne et facilite la réalisation de vos projets.</span>
              <br>
              <a class="ui orange large  labeled icon button" href="/deposer" style="padding: 20px; margin-top: 20px; ">
              <i class="idea icon"></i>
              Déposer mon projet
              </a>
              </p>
          </div>
        </div>
        <!-- new row -->
        <div class="row">
          <div class="ui horizontal large divider" id="centred_title">
   <h2> <i class=" chevron down icon "></i> DÉCOUVRIR LES PROJETS</h2>
   </div>
          <div class="ui three special container  doubling cards">
            @foreach($projets as $projet)
            <div class="card">
              <div class=" blurring dimmable image">
                <div class="ui dimmer">
                  <div class="content">
                    <div class="center">
                      <div class="ui orange button">Découvrir</div>
                    </div>
                  </div>
                </div>
                <img src="images/5.jpg" alt="">
                <div id="message_principale"
                style="position: static; padding: 20px;">{{$projet->title}}</div>
              </div>
              <div class="extra">
                <i class=" red heart icon"></i>{{count($projet->favoriters)}}
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- new row -->
        <div class="row">
          <div class="column">
            <center><a class="ui orange large button" href="{{URL::to('projet')}}">Tous Les Projets</a></center>
                      <div class="ui horizontal divider" id="centred_title">
                      <h2> <i class=" chevron down icon "></i>    DES CHIFFRES CLÉS</h2>

   </div>
            <div class="ui four statistics" >
              <div class="statistic">
                <div class="value">
                  <i class="idea orange icon"></i><span class="timer count-title count-number" data-to="{{count($projets)}}" data-speed="3000"\> 
                </div>
                <div class="label">
                  Projets
                </div>
              </div>
              <div class="statistic" >
                <div class="value">
                  <i class="users orange  icon"></i>   <span class="timer count-title count-number" data-to="300" data-speed="3000"\>
                </div>
                <div class="label">
                  Membres Actifs
                </div>
              </div>
              <div class="statistic" >
                <div class="value">
                  <i class="id orange badge icon"></i>  
                      <span class="timer count-title count-number" data-to="300" data-speed="3000"\>
                </div>
                <div class="label">
                  Associations
                </div>
              </div>
              
              <div class="statistic">
                <div class="value">
                  <i class="handshake orange icon"></i> <span class="timer count-title count-number" data-to="{{count($partenaires)}}" data-speed="3000"></span>
                </div>
                <div class="label">
                  Sponsors Permanents
                </div>
              </div>
              
            </div>
          </div>
        </div>
        {{-- new row --}}
        <div class="row">
                         <div class="ui horizontal large divider" id="centred_title">
   <h2> <i class=" chevron down icon "></i> PARTENAIRES OFFICIELS</h2>
   </div>
          <div class=" six wide column">
            <div id="photo_caroussel">
              <el-carousel :interval="4000" type="card" height="200px">
              @foreach($partenaires as $partenaire)
              <el-carousel-item>
              <center>
              <img src="{{  asset('images/partners/'.$partenaire->logo)}}" alt="partenaire" class="ui small image">
              </center>
              
              </el-carousel-item>
              @endforeach
              </el-carousel>
            </div>
          </div>
    <div class="ui horizontal large divider" id="centred_title">
   <h2> <i class=" chevron down icon "></i> VIDÉOTHÈQUE</h2>
   </div>
        </div>

      </div>
      <!-- new row -->
      <div class="rvs-container rvs-horizontal rvs-light rvs-orange-highlight rvs-large-thumbs" style="max-width: 100%">
        <div class="rvs-item-container" >
          <div class="rvs-item-stage">
            <!-- The below is a single item, simply duplicate this layout for each item -->
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/kiY79L_s1BU/maxresdefault.jpg)">
              <p class="rvs-item-text">Festival Village Durable <small>LABEL-INITIATIVE</small></p>
              <a href="https://www.youtube.com/embed/kiY79L_s1BU" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/qh49jlLjQZ8/maxresdefault.jpg)">
              <p class="rvs-item-text">Film sur les actions de la Fondation Village Durable Région de  Moulay Bousselham<small>LABEL-INITIATIVE</small></p>
              <a href="https://www.youtube.com/embed/qh49jlLjQZ8" class="rvs-play-video"></a>
            </div>
            <!-- new item -->
            <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/KpQYOVDFC7U/hqdefault.jpg)">
              <p class="rvs-item-text">Film sur les actions de la Fondation Village Durable Région de Casablanca. <small>LABEL-INITIATIVE</small></p>
              <a href="https://www.youtube.com/embed/KpQYOVDFC7U" class="rvs-play-video"></a>
            </div>
          </div>
        </div>
        <div class="rvs-nav-container">
          <a class="rvs-nav-prev"></a>
          <div class="rvs-nav-stage">
            <!-- The below is the corresponding nav item for the single item, simply duplicate this layout for each item -->
            <a class="rvs-nav-item">
              <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/kiY79L_s1BU/maxresdefault.jpg)"></span>
              <h4 class="rvs-nav-item-title">Festival Village Durable</h4>
              <small class="rvs-nav-item-credits">LABEL-INITIATIVE</small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
              <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/qh49jlLjQZ8/maxresdefault.jpg)"></span>
              <h4 class="rvs-nav-item-title">Film sur les actions de la Fondation Village Durable Région de  Moulay Bousselham.</h4>
              <small class="rvs-nav-item-credits">LABEL-INITIATIVE</small>
            </a>
            <!-- new item -->
            <a class="rvs-nav-item">
              <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/KpQYOVDFC7U/2.jpg)"></span>
              <h4 class="rvs-nav-item-title">Film sur les actions de la Fondation Village Durable Région de Casablanca.</h4>
              <small class="rvs-nav-item-credits">LABEL-INITIATIVE</small>
            </a>
          </div>
          <a class="rvs-nav-next"></a>
        </div>
      </div>
      
      <!-- new row -->
 @include('partials.footer_1')
     <script src="{{ mix('js/user-notifications.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{asset('js/rvslider.min.js')}}"></script>
  <script>
  jQuery(function($){
  $('.rvs-container').rvslider();
  });
  </script>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script>
           $('.ui.dropdown').dropdown();
           
        $("#pusher").click(()=>{
        $('.ui.sidebar')
        .sidebar('toggle')
        ;
        });

    $('.special.cards .image').dimmer({
    on: 'hover'
    });

        </script>

    <script src="{{asset('modern-slide-in/scripts/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('modern-slide-in/scripts/hammer.min.js')}}"></script>
  <script src="{{asset('modern-slide-in/scripts/sequence.min.js')}}"></script>
  <script src="{{asset('modern-slide-in/scripts/sequence-theme.modern-slide-in.js')}}"></script>

</body>
</html>