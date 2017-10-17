@extends('layouts.master_1')
@section('content')
<div class="row">

    <div class=" twelve wide column">
        <img src="{{asset('images/home.png')}}" class="ui centered tiny image">
       <h3 class="ui  very padded segment">

        Label Initiative est une plateforme de communication et de mise en relation destinée à des porteurs de projets créateurs d'énergie positive. Les associations, coopératives, entreprises, start-up, désireuses de contribuer au développement de leur territoire peuvent s'inscrire sur le site, à condition de porter un projet répondant à un besoin. Votre plateforme encourage et valorise vos initiatives en vous assurant une visibilité au niveau national et international.
        <br>
        <br>
        Label Initiative vous permet d'entrer en contact avec des partenaires publics et privés.
    </h3>

    <div class="ui very padded segment">
        <h2 class="ui centered header">
            <div class="content">
                <img src="{{asset("images/help_people.jpg")}}" alt="help_people.jpg" class="ui centered small image">
                @lang('qui_sommes_nous.titre3')
            </div>
        </h2>
        @lang('qui_sommes_nous.contenu3')
    </div>

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