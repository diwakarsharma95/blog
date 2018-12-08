@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>
@endif


{{--Turn of javascript validitoin in create.blade.php page to see the changes--}}
{{--With javascript validation this error message will not show--}}
@if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <strong>Errors:</strong>
            <ul>
            @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
@endif