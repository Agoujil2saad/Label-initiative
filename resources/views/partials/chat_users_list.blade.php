<div class="row">
    <div class="ui cards">
        @foreach($favoriters as $favoriter)
        <div class="card">
            <content>
            <td>
                {{$favoriter->name}}
            </td>
            <td>
                <a href="{{route('message.read', ['id'=>$favoriter->id])}}" class="btn btn-success pull-right">Send Message</a>
            </td>
            </content>
        </div>
        @endforeach
    </div>
</div>