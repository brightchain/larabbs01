@if (count($errors) > 0)
    <div class="alert alert-danger">
        <p>有错误发生.</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif