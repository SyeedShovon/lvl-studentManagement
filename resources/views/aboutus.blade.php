<div>
    {{-- This is server side comment
        so it wil not be available in the client browser
    --}}

    <!-- This is client side comment
        so it will be available in the browser
    -->
    <h1>About us</h1>
    <h2>Name: {{$name}}</h2>
    <h2>Email: {{$email}}</h2>

    @for ($i=1;$i<6;$i++)
        <p>{{$i}}</p>
        @if ($i==5)
            <h5>Reached i=5 !!</h5>
        @endif
    @endfor
</div>
