@extends('layouts.master_1')
@section('content')
<div class="row" style="padding-top: 0;">
    <img src="{{asset('images/qui_sommes_nous.jpg')}}"  class="ui fluid image" style="margin-bottom: 30px;">
    <div class="twelve wide column">
        <h2 class="ui header">
        <div class="content">
            <img src="{{asset("images/synergie.png")}}" alt="images/synergie.png" class="ui centered small image">
            Synergie pour le Développement des Territoires.
        </div>
        </h2>
        <div class="ui very padded segment">
            <div class="ui header">L'association marocaine "Synergie pour le Développement des Territoires" a pour mission de :</div>
            <ul class="initiative_list">
                <li>Définir et réguler la stratégie du projet "Label Initiative"</li>
                <li>Faciliter les partenariats publics, associatifs et privés, au niveau national et international</li>
                <li>Assurer la communication des porteurs de projets</li>
                <li>Veiller au respect de la charte éthique</li>
            </ul>
        </div>
        <h2 class="ui header">
        <div class="content">
            <img src="{{asset("images/logo_modified.png")}}" alt="Label Initiative logo" class="ui centered small image">
            Présentation de Label Initiative
        </div>
        </h2>
        <div class="ui very padded segment">
            <ul class="initiative_list">
                <li >
                    Label Initiative  est un projet territorial inclusif, porté par les acteurs locaux  de la Province de Kenitra. Ce projet  est ouvert, flexible et participatif et ne saurait être mené par une seule entité. Les membres actifs de l'association sont essentiellement des experts bénévoles. Ceux-ci apportent leur soutien aux porteurs de projets à travers des actions de conseil, de formation et d'assistance techniques.
                </li>
                <li>
                    Le projet vise l'émergence d'une vision stratégique du territoire de la Province de Kenitra,  où les projets développés répondent à des besoins et sont portés par les acteurs locaux. L’organisation Synergie pour le Développement des Territoires permet l’unité du réseau et la mutualisation des moyens selon des objectifs partagés. Un comité éthique indépendant assure le respect de la charte éthique.
                </li>
                <li>
                    Label Initiative ne veut en aucun cas se substituer aux structures existantes, notamment les partenaires institutionnels, mais se positionne comme un facilitateur, un fédérateur, un catalyseur.
                </li>
            </ul>
        </div>
        <h2 class="ui header">
        <div class="content">
            <img src="{{asset("images/help_people.jpg")}}" alt="help_people.jpg" class="ui centered small image">
            Les 7 objectifs de Label Initiative
        </div>
        </h2>
        <div class="ui very padded segment">
            <ul class="initiative_list">
                <li> Créer une dynamique de développement territorial en encourageant l'esprit d'initiatives et en valorisant les actions entreprises par les acteurs locaux</li>
                <li> Freiner l’exode rural en préconisant territorial et la solidarité Urbain-Rural </li>
                <li> Diffuser les pratiques de développement durable auprès des acteurs locaux</li>
                <li> Faciliter les partenariats et prôner pour la bonne gouvernance des territoires</li>
                <li> Promouvoir l'innovation, les savoir-faire locaux et l'utilisation des ressources locales</li>
                <li> Promouvoir le rôle des migrants dans le co-développement des territoires</li>
                <li> Créer un modèle reproductible </li>
            </ul>
        </div>
    </div>
</div>
@endsection