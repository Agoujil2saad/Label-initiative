	<div class="row">
	<div class="twelve side column">
		<h1 id="centred_title">Page {{ $projets->currentPage() }} of {{ $projets->lastPage() }}</h1>
		<div class="ui container  cards">
			@foreach($projets as $projet)


			<div class="ui  card">
@if(count($projet->photos)>0)
    <img src="{{asset('storage/'.$projet->photos[0]->filename)}}" class="ui image" >
@endif
  <div class="content">
    <a class="header"><a href="{{route('projet.show',$projet->id)}}">{{$projet->title}}</a>. Poste par {{$projet->owner->name}}</a>
    <div class="meta">

      <span class="date">{{$projet->created_at->diffForHumans()}}</span>
    </div>
  </div>

  <div class=" extra content">
    <div class="header">
    <i class=" money orange huge  icon"></i>
{{$projet->montant_estime}}</div>
    <div class=" large meta">
{{str_limit($projet->description,100)}}
    </div>
  </div>

 
</div>		
			@endforeach
		</div>
		{{$projets->links()}}
	</div>
</div>
