
    <div class="row">
      

                <div class="ui cards">
                @foreach($users as $user)
                    <div class="card">
                        <content>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Send Message</a>
                            </td>
                        </content>
                    </div>
                @endforeach
                </div>
            
    
    </div>