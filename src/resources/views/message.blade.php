@if(count($errors) > 0)
    <div class="alert alert-danger fade in display-hide" style="display: block;">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="fa fa-times"></i>
        </button>
        @foreach($errors->all() as $error)
            <p style="color:#a94442;">{{$error}}</p>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success fade in display-hide" style="display: block;">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="fa fa-times"></i>
        </button>
        <p>{{session('success')}}</p>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger fade in display-hide" style="display: block;">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="fa fa-times"></i>
        </button>
        <p style="color:#a94442;">{{session('error')}}</p>
    </div>
@endif
