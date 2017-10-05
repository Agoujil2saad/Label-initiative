@extends('layouts.master_1')
@section('content')
<div class="row">

    <div class=" twelve wide column">

        <p class="ui  segment  header" style="padding: 2em; margin: 3em;" >
            <img src="{{asset('images/home.png')}}" class="ui tiny image">
            Label Initiative est une plateforme de communication et de mise en relation destinée à des porteurs de projets créateurs d'énergie positive. Les associations, coopératives, entreprises, start-up, désireuses de contribuer au développement de leur territoire peuvent s'inscrire sur le site, à condition de porter un projet répondant à un besoin. Votre plateforme encourage et valorise vos initiatives en vous assurant une visibilité au niveau national et international.
            <br>
            <br>
            Label Initiative vous permet d'entrer en contact avec des partenaires publics et privés.
        </p>

        <div class="ui one cards">


            <div class="ui card">
                <div class="content">
                    <div class="ui header">
                        
                   Mode d'emploi :
                    </div>
               </div>
               <div class="image"> 
                <img src="{{asset('images/wtc_porteur.jpg')}}">
            </div>   
        </div>

    </div>
</div>

</div>
@endsection