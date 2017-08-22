<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <title>Label Initiative</title>
    <style>
#my_step1{
  background: #FF6600  url("images/slider1.jpg") no-repeat;
   background-position: 0% 100%;
  background-size: cover;

}
#my_step2{
  background: #FF6600  url("images/slider2.jpg") no-repeat;
   background-position: 0% 100%;
  background-size: cover;


}
#my_step3{
  background: #FF6600  url("images/slider3.jpg") no-repeat;
   background-position: 0% 100%;
  background-size: cover;
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
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("images/loader-128x/Preloader_3.gif") center no-repeat #fff;
    }
    </style> 
      <link rel="shortcut icon" href="images/home.png" />
{{-- styles --}}
  <link rel="stylesheet" href="{{asset('modern-slide-in/css/sequence-theme.modern-slide-in.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rvslider.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
    $(window).load(function() {
    $(".se-pre-con").fadeOut("slow");
    });
    </script>
  </head>
  <body>
    <div class="se-pre-con"></div>
    <div class="ui stackable grid">

  <div class="row">
  <div class="three wide column middle aligned">
          <img src="{{asset("images/synergie.png")}}" alt="images/synergie.png" class="ui centered small image" id="logo_left">

                <div class="ui sidebar orange vertical menu" id="sidebar_navigation">
            <a class="item">
              Qui Sommes-nous?
            </a>
            <a class="item" href="{{URL::to('projet')}}">
              Nos Projets
            </a>
            <a class="item" href="{{URL::to('partenaire')}}">
              Nos Partenaires
            </a>
            <a class="item" href="{{URL::to('evenement')}}">
              Nos Événements
            </a>
            <a class="item">
              @if(Auth::guest())
              <div class="ui orange button">Se connecter</div>
              @else
              <div class="ui dropdown">
                <div class="text">
                  <img class="ui avatar image" src="images/man.jpg" alt="" >
                  {{ Auth::user()->name }}
                </div>
                <i class="dropdown icon"></i>
                <div class="menu">
                  @role('Admin') {{-- Laravel-permission blade helper --}}
                  <a href="#"><i class="unlock alternate icon"></i>Admin</a>
                  @endrole
                  
                  <div class="item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>
                  
                </div>
              </div>
              @endif
            </a>
          </div>
          <div class="pusher" id="pusher">
            <button class="ui orange icon button">
            <i class="sidebar icon"></i>
            </button>
          </div>
  </div>

     <div class="nine wide column middle aligned" id="navigation_menu">
          <div class="ui five stackable item secondary menu" >

            <a href="" class="item"> 
            <p class="ui orange small header">Qui Sommes-nous?</p>
            </a>

            <a href="{{URL::to('projet')}}" class="item">
            <p class="ui orange small header">Nos Projets</p></a>

            <a href="{{URL::to('evenement')}}" class="item">
              <p class="ui orange small header">Nos Événements</p>
            </a>
              
              <a href="{{URL::to('partenaire')}}" class="item"><p class="ui orange small header">Nos Partenaires</p>
              </a>
{{-- condition --}}
             @if(Auth::guest())

              <a class="item" href="{{URL::to('login')}}">
                <div class="ui orange button">Se connecter</div>
              </a>
                @else

            <div class="item">
              <div class="ui dropdown">
                <div class="text">
                  <img class="ui avatar image" src="{{asset('images/man.jpg')}}" alt="" >
                  {{ Auth::user()->name }}
                </div>
                <i class="dropdown icon"></i>
                <div class="menu">
                  @role('Admin') {{-- Laravel-permission blade helper --}}
                  <div  class="text" href="#"><i class="unlock alternate icon"></i>Admin</div>
                  @endrole
                  
                  <div class="item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </div>                
                </div>
              </div>
           </div> 
           @endif
</div>
  </div>

        <div class="three wide column middle aligned">
          <img src="images/test_modified.png" alt="" class="ui centered small image" id="logo_right">
        </div>



      </div>
      
      <div class="row">
        <div id="sequence" class="seq">
          <div class="seq-screen">
            <ul class="seq-canvas">
              <li id="my_step1">
                <div class="seq-model">
                  <a href=""><img data-seq src="images/rubrique.png" alt="" /></a>
                </div>
                <div class="seq-title">
                  <h2 data-seq>
                  Notre objectif est de vous accompagner <br>dans la réussite de votre projet  <br>
                  <a href="">Découvrir Label Initiative ▶ </a>
                  </h2>
                </div>
              </li>
              <li  id="my_step2">
                <div class="seq-model">
                  <a href=""><img data-seq src="images/rubrique.png" alt="" /></a>
                  
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
                  <img data-seq src="images/rubrique.png" alt="" />
                </div>
                <div class="seq-title">
                  <h2 data-seq>
            Discours de S.M le Roi Mohammed VI, 30 juillet 2015 <br>
            « En dépit des progrès réalisés par notre pays,<br> ce qui me désole, c’est cette situation de précarité que vivent <br>certains de nos concitoyens dans les régions éloignées et enclavées <br>, surtout sur les sommets de l’Atlas et du Rif,<br> les zones sahariennes arides et les oasis <br> ainsi que certains villages dans les plaines et sur les côtes. <br>
Nous avons conscience de l’ampleur <br>du déficit qui s’est accumulé depuis des décennies <br> dans ces régions, malgré toutes les initiatives <br> et tous les efforts qui ont été déployés. »
                  <a href="">savoir plus ▶</a>
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
      <div class=" orange middle aligned row">
        <p id="message_principale">Vous êtes une association ou une coopérative de la province de <b>KENITRA</b>,<br> vous cherchez des solutions à vos besoins,<br> vous souhaitez participer au développement de votre territoire,<br> trouver des partenaires et gagner en visibilité,<br>   <b> LABEL INITIATIVE</b> vous accompagne et facilite la réalisation de vos projets.
          <br><br>
          <button class="ui inverted  button">Déposer mon projet</button>
        </p>
      </div>
      <!-- new row -->
      <div class="row">
        <h1 id="centred_title">DÉCOUVRIR LES PROJETS</h1>
        <div class="ui three special container  cards">
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
              <div id="mask">{{$projet->title}}</div>
            </div>
            <div class="extra">
              Rating:
              <div class="ui star rating" data-rating="4"></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- new row -->
      <div class="row">
        <p id="centred"><a class="ui orange large button" href="{{URL::to('projet')}}">Tous Les Projets</a></p>
        <h1 id="centred_title">LES CHIFFRES CLÉS</h1>
        <div class="ui container four  statistics" id="numbers_1">
          <div class="statistic" >
            <div class="value" id="chiffre_cles">
              <p>{{count($projets)}}</p>
            </div>
            <div class="label">
              <h2>Projets</h2>
            </div>
          </div>
          <div class="statistic" >
            <div class="value" id="chiffre_cles">
              <p>400</p>
            </div>
            <div class="label">
              <h2>Membres <br>actifs</h2>
            </div>
          </div>
          <div class="statistic" >
            <div class="value" id="chiffre_cles">
              <p>80</p>
            </div>
            <div class="label">
              <h2>Associations</h2>
            </div>
          </div>
          <div class="statistic" >
            <div class="value" id="chiffre_cles">
              <p>{{count($partenaires)}}</p>
            </div>
            <div class="label">
              <h2>Sponsors <br>Permanents</h2>
            </div>
          </div>
        </div>
        <h1 id="centred_title">PARTENAIRES OFFICIELS</h1>
        <div class="owl-carousel"  id="owl-carousel_1">
          @foreach($partenaires as $partenaire)
          <div class="item">
            <img src="{{  asset('images/partners/'.$partenaire->logo)}}" alt="partenaire">
            <h1 class="ui medium orange  center aligned header">{{$partenaire->name}}</h1>
          </div>
         @endforeach
        </div>
        <h1 id="centred_title">VIDÉOTHÈQUE </h1>
      </div>
    </div>
    <!-- new row -->
    
    <div class="rvs-container">
      <div class="rvs-item-container">
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
          <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/KpQYOVDFC7U/maxresdefault.jpg)">
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
            <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/KpQYOVDFC7U/maxresdefault.jpg)"></span>
            <h4 class="rvs-nav-item-title">Film sur les actions de la Fondation Village Durable Région de Casablanca.</h4>
            <small class="rvs-nav-item-credits">LABEL-INITIATIVE</small>
          </a>
        </div>
        <a class="rvs-nav-next"></a>
      </div>
    </div>
    
    <!-- new row -->
    <div class="ui orange vertical footer segment" id="footer">
            <div class="ui center aligned container">
                <div class="ui stackable grid">
                    <div class="five wide column">
                        <h4 class="ui orange header" id="footer_titles">LABEL-INITIATIVE</h4>
                        <div class="ui inverted link list" id="footer_items">
                            <a href="#" class="item">Qui sommes-nous</a>
                            <a href="#" class="item">Espace Presse</a>
                            <a href="#" class="item">Contact</a>
                            <a href="#" class="item">Réclamation</a>
                        </div>
                    </div>
                    <div class="five wide column">
                        <h4 class="ui orange header" id="footer_titles">SAVOIR PLUS</h4>
                        <div class="ui inverted link list" id="footer_items">
                            <a href="#" class="item">Foire aux questions</a>
                            <a href="#" class="item">L'équipe</a>
                            <a href="#" class="item">Le guide du porteur de projet</a>
                            <a href="#" class="item">Investissement participatif</a>
                        </div>
                    </div>
                    <div class="six wide column">
                        <h4 class="ui orange header" id="footer_titles">SUIVEZ NOUS SUR</h4>
                        <ul class="footer_list">
                            <li>
                                <a href="https://www.facebook.com" target="_blank"><img src="images/if_facebook_313103.png" alt="facebook" class="footer_img"></a>
                                <a href="https://www.google.com" target="_blank"><img src="images/if_googleplus_313110.png" alt="google" class="footer_img"></a>
                                <a href="https://www.youtube.com" target="_blank"><img src="images/if_youtube_313083.png" alt="youtube" class="footer_img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div id="copyright">Copyright © 2017 - Synergie pour le Développement des Territoires</div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('js/rvslider.min.js')}}"></script>
    <script>
    jQuery(function($){
    $('.rvs-container').rvslider();
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
   <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script src="{{asset('modern-slide-in/scripts/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('modern-slide-in/scripts/hammer.min.js')}}"></script>
    <script src="{{asset('modern-slide-in/scripts/sequence.min.js')}}"></script>
    <script src="{{asset('modern-slide-in/scripts/sequence-theme.modern-slide-in.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    items:7,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
    });
    $('.rating')
    .rating('disable')
    ;
    $('.special.cards .image').dimmer({
    on: 'hover'
    });
    });

$("#pusher").click(function(){
  $('.ui.sidebar')
  .sidebar('toggle')
;
});
$('.ui.dropdown').dropdown();

    
    </script>
  </body>
</html>