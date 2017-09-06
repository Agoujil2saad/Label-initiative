<div class="people-list" id="people-list">
    <div class="ui inverted  orange segment">
        <a href="{{url('/')}}" class="ui label">
        <i class="inverted circular user icon"></i> {{auth()->user()->name}}</a>
    </div>
    <div class="ui vertical fluid  very padded menu" style="height:100vh; overflow: scroll; border:0;">
        @foreach($threads as $inbox)
            @if(!is_null($inbox->thread))
        <li class=" item">
            <a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
            <img src="{{asset('images/man.jpg')}}" alt="avatar" class="ui avatar image" />
                @if($inbox->withUser->isOnline())
<i class="green circle icon"></i>
@else
<i class="red circle icon"></i>
    @endif
                <p>
                <i class="user icon"></i>{{$inbox->withUser->name}}</p>
                <div class="ui tag label">
                    @if(auth()->user()->id == $inbox->thread->sender->id)
                        <span class="orange star icon"></span>
                    @endif
                    <span>
<i class="ui orange talk icon"></i>

                    {{substr($inbox->thread->message, 0, 20)}}</span>
           </div> 
            </a>
        </li>
            @endif
        @endforeach

    </div>
</div>
