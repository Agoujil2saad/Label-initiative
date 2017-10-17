<div class="row" style="border-bottom: 5px solid orange; padding:1em 0; margin: 0;">
    <div class="four wide column middle aligned">
       <center>
        <a href="/"><img src="{{ asset("images/test_modified.png") }}" alt="" class="ui  right floating small image" id="logo_right"></a>
    </center>


    <div class="ui sidebar  compact orange vertical menu" id="sidebar_navigation">
      <a href="/guide_porteur" class="item">
        <h3 class="ui orange small header">
          @lang('lang.footer_guide')
      </h3>
  </a>
  <a class="item" href="{{URL::to('projet')}}">
   @lang('lang.header_projets')
</a>
<a class="item" href="{{URL::to('partenaire')}}">
 @lang('lang.header_partners')
</a>
<a class="item" href="{{URL::to('evenement')}}">
    @lang('lang.header_events')
</a>
<a class="item">
    @if(Auth::guest())
    <div class="ui orange button">
     @lang('lang.header_connect')
 </div>
 @else
 <div class="ui dropdown">
    <div class="text">
        <img class="ui avatar image" src="images/man.jpg" alt="" >
        {{ Auth::user()->name }}
    </div>
    <i class="dropdown icon"></i>
    <div class="menu">
        @role('Admin')
        <a href="#"><i class="unlock alternate icon"></i>
            @lang('lang.header_admin')
        </a>
        @endrole

        <div class="item">
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="sign out icon"></i>
            @lang('lang.header_logout')
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

<div class="eleven wide column middle aligned" id="navigation_menu">
    <div class="ui six orange compact item secondary menu">
      <a href="/guide_porteur" class="item">
          <h3 class="ui orange small header">
              @lang('lang.footer_guide')
          </h3>
      </a>
      <a href="{{URL::to('projet')}}" class=" item">
        <p class=" ui small orange header">
            @lang('lang.header_projets')
        </p> 
    </a>
    <a href="{{URL::to('evenement')}}" class="item">
     <p class=" ui small orange header">
         @lang('lang.header_events')
     </p>  
 </a>

 <a href="{{URL::to('partenaire')}}" class="item">
     <p class=" ui small orange header">
        @lang('lang.header_partners')
    </p>
</a>

@if(Auth::guest())
<a class="item"  href="{{URL::to('login')}}">
    <div class="ui orange button">
        @lang('lang.header_connect')
    </div>
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
            @role('Admin')
            <div  class="text" href="#">
                <i class="unlock alternate icon"></i>
                @lang('lang.header_admin')
            </div>
            @endrole

            @role('Porteur de Projet')
            <a class="item" href="/espace_porteur">
                <i class="home icon"></i>
                @lang('lang.header_myspace')
            </a>
            @endrole

            @role('Partenaire Projet')
            <a class="item" href="/espace_partenaire">
                <i class="home icon"></i>
                @lang('lang.header_myspace')
            </a>
            @endrole
            <div class="item">
                <div onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="sign out icon"></i>
                    @lang('lang.header_logout')
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>
@endif

<div class="item">  
    <center>
        
 
     <div class="ui dropdown">
        <i class="world icon"></i>
        <span class="text">
            @if(App::getLocale()=="ar")
            <i class="ma flag"></i>
            العربية
            @else
            <i class="{{App::getLocale()}} flag"></i>
            Francais
            @endif

        </span>       
        <div class="menu">
            @foreach ( config('app.languages') as $user)
            @if($user !== config('app.locale'))
            <div class="item">
                <a href="{!! url('language') !!}/{{ $user }}">
                    @if($user=="ar")
                    <i class=" ma flag"></i>
                    العربية
                    @else
                    <i class="{{$user}} flag"></i>
                    Francais
                    @endif
                </a>
            </div>
            @endif
            @endforeach       
        </div>
    </div>
       </center>
</div>
</div>
</div>

@if(Auth::check())
<div class="one wide column middle aligned">
    <user-notifications></user-notifications>
</div>        
@endif


</div>