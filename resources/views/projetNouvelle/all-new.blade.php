<div class="row">
    <div class="ui four cards">
        @foreach($projet->nouvelles as $nouvelle)
        <div class="card">
            <div class="image">
                <img src="{{asset('images/photo_nouvelles/'.$nouvelle->photo)}}">
            </div>
            <div class="content">
                <a class="header">{{$nouvelle->title}}</a>
                <div class="meta">
                    <span class="date">{{$nouvelle->created_at->diffForHumans()}}</span>
                </div>
                <div class="description">
                    {{$nouvelle->description}}
                </div>
            </div>
            <div class="extra">
                {!! Form::open(['method' => 'DELETE', 'route' => ['deletephoto_nouvelle', $nouvelle->id],'id'=>'myform' ]) !!}
                {!! Form::submit(__('lang.delete'), ['class' => 'ui red button', 'id'=>'delete']) !!}
                {!! Form::close() !!}
            </div>
            
        </div>
        @endforeach
    </div>
</div>
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
$(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var self = $(this);
        swal({
                    title: "Are you sure?",
                    text: "All of the sub categories will be deleted also!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: true
                },
                function(isConfirm){
                    if(isConfirm){
                        swal("Deleted!","la nouvelle est supprimée", "success");
                        setTimeout(function() {
                            self.parents("#myform").submit();
                        }, 500);
                    }
                    else{
                        
                         setTimeout(function() {
                            swal("cancelled","Your categories are safe", "error");
                        }, 500);
                    }
                });
    });
</script>

@endsection
