@if (Session::has('info'))
    <div class="alert alert-success alert-dismissible">
        <button type="submit" class="close" data-dismiss="alert" aria-label="close">&times;</button>
        {{ Session::get('info')}}
    </div>
@endif