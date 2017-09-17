@extends('layouts.master_1')
@section('content')
<div class="row" style="padding-top: 0;">
    <img src="{{asset('images/qui_sommes_nous.jpg')}}"  class="ui fluid image" style="margin-bottom: 30px;">

    <div class="twelve wide column">
        <div class="ui very padded segment">
            <div class="ui centered header">
                 <div class="content">
                        <img src="{{asset("images/synergie.png")}}" alt="images/synergie.png" class="ui centered small image">
                         @lang('qui_sommes_nous.titre1')
                </div>
            </div>
            @lang('qui_sommes_nous.contenu1')
        </div>
   
        <div class="ui very padded segment">
                 <h2 class="ui centered header">
        <div class="content">
            <img src="{{asset("images/logo_modified.png")}}" alt="Label Initiative logo" class="ui centered small image">
           @lang('qui_sommes_nous.titre2')
        </div>
        </h2>
            @lang('qui_sommes_nous.contenu2')
        </div>
    
        <div class="ui very padded segment">
                <h2 class="ui centered header">
        <div class="content">
            <img src="{{asset("images/help_people.jpg")}}" alt="help_people.jpg" class="ui centered small image">
            @lang('qui_sommes_nous.titre3')
        </div>
        </h2>
       @lang('qui_sommes_nous.contenu3')
        </div>
    </div>
</div>
@endsection