@if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->All() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif