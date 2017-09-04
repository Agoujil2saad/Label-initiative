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
    html.ios {
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch;
}
html.ios,
html.ios body {
  height: initial !important;
}
    #my_step1{
    background: #FF6600  url("images/slider_1.jpg") no-repeat;
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
    #logo_left
    {
    display: none;
    }
    #hidden_mobile{
      display: none;
    }
    @media only screen and (min-width: 860px) {
    #navigation_menu{
    display: flex;
    visibility: visible;
    }
      #hidden_mobile{
      display: flex;
    }

    }
    </style>
    <link rel="shortcut icon" type="image/gif" href="images/home_iBI_icon.ico" />
    {{-- styles --}}
    <link rel="stylesheet" href="{{asset('modern-slide-in/css/sequence-theme.modern-slide-in.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rvslider.min.css') }}">
    
  </head>
  <body>
    <div class="ui top  attached compact  inverted secondary  menu" >
      <a class="item">
        <i class=" orange large sidebar icon" id="menulancher"></i>
      </a>
      <a href="/" class="item" style="padding: 0;" id="hidden_mobile">
        <img src="{{asset("images/synergie.png")}}" alt="images/synergie.png" class="ui centered small image">
      </a>
      <a href="/qui_sommes_nous" class="item" id="hidden_mobile">
        <p class="ui orange small header">Qui Sommes-nous?</p>
      </a>
      <a href="{{URL::to('projet')}}" class="item" id="hidden_mobile">
        <p class="ui orange small header">Nos Projets</p></a>
        <a href="{{URL::to('evenement')}}" class="item" id="hidden_mobile">
          <p class="ui orange small header">Nos Événements</p>
        </a>
        
        <a href="{{URL::to('partenaire')}}" class="item" id="hidden_mobile"><p class="ui orange small header">Nos Partenaires</p>
      </a>
      {{-- condition --}}
      <a class="item" href="/login">
        @if(Auth::guest())
        <div class="ui orange button">Se connecter</div>
        @else
        <div class="ui inline compact selection orange dropdown " style="padding: 23px; border:0;  color:black">
          <div class="  text">
            <img class="ui avatar image" src="images/man.jpg" alt="" >
            <p class="ui orange label">{{ Auth::user()->name }}</p>
          </div>
          <i class="orange dropdown icon"></i>
          <div class="menu">
            @role('Admin') {{-- Laravel-permission blade helper --}}
            <a href="#"><i class="unlock alternate icon"></i>Admin</a>
            @endrole
            
            <div class="item">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <label class="ui red label">
                  <i class="sign out icon"></i>
                  Logout
                </label>
                
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
            
          </div>
        </div>
        @endif
      </a>
      <a href="/" class="item right floated">
        <img src="images/test_modified.png" alt="" class="ui centered small image" id="logo_right">
      </a>
    </div>
  </div>
  <div class="ui bottom attached segment" style="height: 100%;
    width: 100%;
    overflow: hidden;
    position: relative;">
    <div class="ui sidebar orange vertical menu">
      <a class="item" href="/qui_sommes_nous">
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
    <div class="pusher" style=" 
        position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: -17px; /* Increase/Decrease this value for cross-browser compatibility */
    overflow-y: scroll;">
      <div class="ui centered stackable grid">
        <div class="row" >
          <div id="sequence" class="seq" style="border-top: 4px solid orange;">
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
        <div class="orange  row">
          <div class="sixteen wide column" id="app">
            <div id="message_principale">
              
              <vue-particles class="particles-background"
              color="#fff"
              :particle-opacity="0.7"
              :particles-Number="80"
              shape-type="circle"
              :particle-size="4"
              lines-color="#fff"
              :lines-width="1"
              :line-linked="true"
              :line-opacity="0.4"
              :lines-distance="150"
              :move-speed="2"
              :hover-effect="true"
              hover-mode="grab"
              :click-effect="true"
              click-mode="push"
              >
              </vue-particles>
            </div>
            <p class="main-title">Vous êtes une association ou une coopérative de la province de <b style="color: black">KENITRA</b>,<br> vous cherchez des solutions à vos besoins,<br> vous souhaitez participer au développement de votre territoire,<br> trouver des partenaires et gagner en visibilité,<br>   <b style="color: black"> LABEL INITIATIVE</b> vous accompagne et facilite la réalisation de vos projets.
              <br>
              <a class="ui inverted large  labeled icon button" href="/deposer">
              <i class="idea icon"></i>
              Déposer mon projet
              </a>
            </p>
          </div>
        </div>
        <!-- new row -->
        <div class="row">
          <h1 id="centred_title">DÉCOUVRIR LES PROJETS</h1>
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
            <h1 id="centred_title">DES CHIFFRES CLÉS</h1>
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
        <div class="row">
          <div class=" six wide column">
            <h1 id="centred_title">PARTENAIRES OFFICIELS</h1>
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
        </div>
      </div>
      <!-- new row -->
      <h1 id="centred_title">VIDÉOTHÈQUE </h1>
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
      <div class="ui orange vertical footer segment" id="footer">
        <div class="ui center aligned container">
          <div class="ui stackable grid">
            <div class="five wide column">
              <h4 class="ui orange header" id="footer_titles">LABEL-INITIATIVE</h4>
              <div class="ui inverted link list" id="footer_items">
                <a href="/qui_sommes_nous" class="item">Qui sommes-nous</a>
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
  <script src="{{asset('modern-slide-in/scripts/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('modern-slide-in/scripts/hammer.min.js')}}"></script>
  <script src="{{asset('modern-slide-in/scripts/sequence.min.js')}}"></script>
  <script src="{{asset('modern-slide-in/scripts/sequence-theme.modern-slide-in.js')}}"></script>
  <script src="{{ asset('js/semantic.min.js') }}"></script>
  <script>

  $('.ui.sidebar').sidebar({
  context: $('.bottom.segment')
  })

  .sidebar('attach events', '.menu .item #menulancher');
  $('.special.cards .image').dimmer({
  on: 'hover'
  });
  
  $('.ui.dropdown').dropdown();

(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});

  
  </script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>