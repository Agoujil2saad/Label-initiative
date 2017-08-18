<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <style>
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
    
    </style>

      <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
  <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
            appId: "fde5427c-6447-4dc6-ae18-528489e21018",
            autoRegister: false,
            notifyButton: {
                enable: true /* Set to false to hide */
            },
            welcomeNotification: {
                "title": "My Custom Title",
                "message": "Thanks for subscribing!",
                // "url": "" /* Leave commented for the notification to not open a window on Chrome and Firefox (on Safari, it opens to your webpage) */
            },
            promptOptions: {
                /* actionMessage limited to 90 characters */
                actionMessage: "We'd like to show you notifications for the latest news and updates.",
                /* acceptButtonText limited to 15 characters */
                acceptButtonText: "ALLOW",
                /* cancelButtonText limited to 15 characters */
                cancelButtonText: "NO THANKS"
            }
        }]);
    </script>
    <script data-cfasync="false">
        window.OneSignal = window.OneSignal || [];

        /* In milliseconds, time to wait before prompting user. This time is relative to right after the user presses <ENTER> on the address bar and navigates to your page */
        var notificationPromptDelay = 30000;

        /* Why use .push? See: http://stackoverflow.com/a/38466780/555547 */
        window.OneSignal.push(function() {
            /* Use navigation timing to find out when the page actually loaded instead of using setTimeout() only which can be delayed by script execution */
            var navigationStart = window.performance.timing.navigationStart;

            /* Get current time */
            var timeNow = Date.now();

            /* Prompt the user if enough time has elapsed */
            setTimeout(promptAndSubscribeUser, Math.max(notificationPromptDelay - (timeNow - navigationStart), 0));
        });

        function promptAndSubscribeUser() {
            window.OneSignal.isPushNotificationsEnabled(function(isEnabled) {
                if (!isEnabled) {
                  /* Want to trigger different permission messages? See: https://documentation.onesignal.com/docs/permission-requests#section-onesignal-permission-messages */
                    window.OneSignal.showHttpPrompt();
                }
            });
        }
    </script>

  </head>
  <body>
    <div class="ui centered grid">
      
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

        <div class="ten wide column middle aligned" id="navigation_menu">
          <div class="ui five stackable item secondary menu" >
            <a href="" class="item"> <p class="ui orange small header">Qui Sommes-nous?</p></a>
            <a href="{{URL::to('projet')}}" class="item"><p class="ui orange small header">Nos Projets</p></a>
            <a href="{{URL::to('evenement')}}" class="item">
              <p class="ui orange small header">Nos Événements</p></a>
              
              <a href="{{URL::to('partenaire')}}" class="item"><p class="ui orange small header">Nos Partenaires</p></a>

             <a class="item" href="{{URL::to('login')}}">
              @if(Auth::guest())
              <div class="ui orange button">Se connecter</div>
              @else
              <div class="ui dropdown">
                <div class="text">
                  <img class="ui avatar image" src="{{asset('images/man.jpg')}}" alt="" >
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
          </div>
          <div class="three wide column middle aligned">
            <img src="{{ asset("images/test_modified.png") }}" alt="" class="ui centered small image" id="logo_right">
          </div>
        </div>
        @yield('content')
      </div>
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
                  <a href="https://www.facebook.com" target="_blank"><img src="{{asset("images/if_facebook_313103.png")}}" alt="facebook" class="footer_img"></a>
                  <a href="https://www.google.com" target="_blank"><img src="{{asset("images/if_googleplus_313110.png")}}" alt="google" class="footer_img"></a>
                  <a href="https://www.youtube.com" target="_blank"><img src="{{asset("images/if_youtube_313083.png")}}" alt="youtube" class="footer_img"></a>
                </li>
              </ul>
            </div>
          </div>
          <hr>
          <div id="copyright">Copyright © 2017 - Synergie pour le Développement des Territoires</div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="{{ asset('js/semantic.min.js') }}"></script>
      <script>
      $("#pusher").click(function(){
      $('.ui.sidebar')
      .sidebar('toggle')
      ;
      });
      $('.ui.dropdown').dropdown();
      </script>
</body>
  </html>