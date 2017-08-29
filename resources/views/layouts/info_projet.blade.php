<div class="row">
    <div class="eight wide column">
        <div class="ui  segment">
                
            
            <div id="app">
                       @if (Auth::check())
                       @can('Like Projet')
    <div class="inverted ui fluid button ">
        <favorite
            :projet={{ $projet->id }}
            :favorited={{ Auth::user()->hasFavorited($projet) ? 'true' : 'false' }}
        ></favorite>
    </div>
          @endcan
@endif
                <template>
                <el-tabs type="border-card">
                <el-tab-pane>
                <span slot="label"><i class="announcement icon"></i> Accueil</span>
                <center>
                <div class="ui huge header">
                    <i class="idea icon"></i>
                    <div class="content">
                        {{$projet->title}}
                    </div>
                </div>
                </center>
                @if(count($projet->photos)>0)
                <el-carousel indicator-position="outside">
                @foreach($projet->photos as $photo)
                <el-carousel-item>
                <center>
                <img src="{{asset('storage/'.$photo->filename)}}" class="ui medium  image"  style="border: 2px solid orange;">
                </center>
                </el-carousel-item>
                @endforeach
                </el-carousel>
                
                @endif
 
                <p class="ui sub header">
                <i class="home icon"></i> A propos</p>
               <div id="message_principale" style="color:black; margin:20px; text-align:left; position:static;">
     {{$projet->description}} 
          </div>
               

                {!! Form::open(['method' => 'DELETE', 'route' => ['projet.destroy', $projet->id] ]) !!}
                <a href="{{ url()->previous() }}" class="ui orange button">
                <i class="backward icon"></i>Back</a>
                @can('Edit Post')
                <a href="{{ route('projet.edit', $projet->id) }}" class="ui buttom" role="button">
                <i class="edit icon"></i>Edit</a>
                @endcan
                @can('Delete Projet')
                {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
                @endcan
                {!! Form::close() !!}
                
                </el-tab-pane>
                <el-tab-pane>
                <span slot="label"><i class="newspaper icon "></i> News</span>

@foreach($projet->nouvelles as $nouvelle)

    <div class="image">
   <img src="{{asset('images/photo_nouvelles/'.$nouvelle->photo)}}">
  </div>
  <div class="content">
    <a class="header">{{$nouvelle->title}}</a>
    <div class="meta">
      <span class="date">Joined in 2013</span>
    </div>
    <div class="description">
      {{$nouvelle->description}}
    </div>
  </div>
<div class="ui divider"></div>
@endforeach



                </el-tab-pane>
                </el-tabs>
                </template>
            </div>
        </div>
    </div>
    <div class=" four wide column">
        <div class="ui card">
            <div class="content">
                <div class="header">Createur de Projet</div>
            </div>
            <div class="content">
                <center>
                <h3 class="ui sub header">{{$projet->owner->name}}</h3>
                </center>
                <div class="ui small feed">
                    <div class="event">
                        <div class="content">
                            <center>
                            <div class="summary">
                                <i class="pin orange  icon "></i>
                                REGION:
                                {{$projet->owner->region}}
                            </div>
                            </center>
                        </div>
                    </div>
                    <div class="event">
                        <div class="content">
                            <center>
                            <div class="summary">
                                <i class="mail orange  icon "></i>
                                Email:
                                {{$projet->owner->email}}
                            </div>
                            </center>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="extra content">
                <center>
                <button class="ui orange  button">Envoyer un message</button>
                </center>
            </div>
        </div>
    </div>
    
</div>