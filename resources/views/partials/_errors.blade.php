@if ($errors->any())
    <div class="errorMain">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <h1>Hello</h1>
    </div>
@endif