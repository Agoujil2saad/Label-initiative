@extends('layouts.master_1')
@section('content')
<div class="row">
	
	<div class="row">
		<h1 id="centred_title">Page {{ $projets->currentPage() }} of {{ $projets->lastPage() }}</h1>
		<div class="ui container  cards">
			@foreach($projets as $projet)
			<div class="ui card">
				<div class="content">
					<div class="header"><a href="{{route('projet.show',$projet->id)}}">{{$projet->title}}</a></div>
					
					<div class="description">
						<p> 
                               
                                {{  str_limit($projet->description, 100) }} {{-- Limit teaser to 100 characters --}}
						</p>
					</div>
					<div class="meta">{{$projet->created_at->diffForHumans()}}</div>
				</div>
			</div>
			@endforeach
		</div>
		{{$projets->links()}}
	</div>
</div>
@endsection