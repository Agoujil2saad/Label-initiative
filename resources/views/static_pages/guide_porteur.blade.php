@extends('layouts.master_1')
@section('content')
<div class="row" style="padding-top: 0;">
    <div class="four wide column">
         <img src="{{asset('images/slide_1.png')}}" class="ui medium image">
    </div>
   
    <div class="twelve wide column">
        <div class="ui very padded segment">
            <i class="huge orange announcement icon"></i>
            <h2 class="ui centered header">
                 <div class="content">
                         @lang('guide_porteur.titre1')
                </div>
            </h2>
             @lang('guide_porteur.contenu2')

        </div>
   
        <div class="ui very padded segment">
            <i class="huge orange money icon"></i>
                 <h2 class="ui centered header">
        <div class="content">
           @lang('guide_porteur.titre2')
        </div>
        </h2>
            @lang('guide_porteur.contenu2')
        </div>
    
        <div class="ui very padded segment">
            <i class="huge orange time icon"></i>
                <h2 class="ui centered header">
        <div class="content">
            @lang('guide_porteur.titre3')
        </div>
        </h2>
       @lang('guide_porteur.contenu3')
        </div>

          <div class="ui very padded segment">
            <i class="huge orange facebook square icon"></i>
            <i class="huge orange youtube square icon"></i>
            <i class="huge orange twitter square icon"></i>
            <i class="huge orange google plus square icon"></i>
            <i class="huge orange linkedin square icon"></i>
                <h2 class="ui centered header">
        <div class="content">
            @lang('guide_porteur.titre4')
        </div>
        </h2>
       @lang('guide_porteur.contenu4')
        </div>
    </div>
</div>
@endsection