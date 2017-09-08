<div class="row">
    <div class="ui cards">
        @foreach($projets as $projet)
        <div class="card">
            <content>
            <td>
                {{$projet->owner->name}}
            </td>
            <td>
                <a href="{{route('message.read', ['id'=>$projet->owner->id])}}" class="btn btn-success pull-right">Send Message</a>
            </td>
            </content>
        </div>
        @endforeach
    </div>
</div>