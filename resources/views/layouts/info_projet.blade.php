<div class="row">


<div class="eight wide column">
    <div class="ui very padded segment">
        <div class="ui orange  header">
        
        <i class="idea icon"></i>
        <div class="content">
            {{$projet->title}}
        </div>
    </div>
    <p>{{$projet->description}} </p>

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
    </div>

</div>
<div class=" four wide column">
<div class="ui card">
  <div class="content">
    <div class="header">Createur de Projet</div>
  </div>
  <div class="content">
    <h4 class="ui sub header">Activity</h4>
    <div class="ui small feed">
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Elliot Fu</a> added <a>Jenny Hess</a> to the project
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Stevie Feliciano</a> was added as an <a>Administrator</a>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Helen Troy</a> added two pictures
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="extra content">
    <button class="ui orange  button">Envoyer un message</button>
  </div>
</div>
</div>
	

</div>