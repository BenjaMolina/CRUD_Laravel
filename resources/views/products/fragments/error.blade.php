@if (count($errors))
    <div class="alert alert-danger">
        <button type="submit" class="close" data-dismiss="alert" aria-label="close">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif