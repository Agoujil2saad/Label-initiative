   <div class="row" style="border-bottom: 5px solid orange; padding:0; margin: 0; ">
          <div class="three wide column middle aligned">
           
<a href="/">
   <img src="{{asset("images/synergie.png")}}" alt="images/synergie.png" class="ui centered small image" id="logo_left">
</a>
           

            <div class="ui sidebar orange vertical menu" id="sidebar_navigation">
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

            <div class="pusher" id="pusher">
              <button class="ui orange icon button">
              <i class="sidebar icon"></i>
              </button>
            </div>

          </div>

          <div class="ten wide column middle aligned" id="navigation_menu">
            <div class="ui five stackable item secondary menu" >
              <a href="/qui_sommes_nous" class="item"> <p class="ui orange small header">Qui Sommes-nous?</p></a>
              <a href="{{URL::to('projet')}}" class="item"><p class="ui orange small header">Nos Projets</p></a>
              <a href="{{URL::to('evenement')}}" class="item">
                <p class="ui orange small header">Nos Événements</p></a>
                
                <a href="{{URL::to('partenaire')}}" class="item"><p class="ui orange small header">Nos Partenaires</p></a>
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
      
      @if(Auth::check())      
      <div class="one wide column middle aligned " id="user_notifications">
     <user-notifications></user-notifications> 
     </div>
           
     @endif



            <div class="two wide column middle aligned">         
               <a href="/"><img src="{{ asset("images/test_modified.png") }}" alt="" class="ui centered small image" id="logo_right"></a>
            </div>
            
          </div>