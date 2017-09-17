<div class="people-list" id="people-list">
    <div class="search" style="text-align: center">
        <a href="{{ url()->previous() }}" class="ui mini button" style="float:left;background-color:white;color:black">
            <i class="backward icon"></i>
            Back
        </a>
        <br><br>
        <a href="{{ url('/') }}" class="ui mini circular button" style="background-color:white;color:black">
            <i class="user icon"></i>
            {{auth()->user()->name}}
        </a>
    </div>
    <ul class="list">
        @foreach($threads as $inbox)
        @if(!is_null($inbox->thread))
        <li class="clearfix">
            <a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">

                <img src="{{asset('images/icons/man64.png')}}" alt="avatar" />
                <div class="about">
                    <div class="name">{{$inbox->withUser->name}}</div>
                    <div class="status">
                        @if(auth()->user()->id == $inbox->thread->sender->id)
                        <span class="fa fa-reply"></span>
                        @endif
                        <span>{{substr($inbox->thread->message, 0, 20)}}</span>
                    </div>
                </div>
            </a>
        </li>
        @endif
        @endforeach
    </ul>
</div>
