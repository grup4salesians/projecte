
<h1>
    Marca
    
</h1>
<ul>
    @foreach($marca as $marcas)
    <li>
        {{$marcas->marca}}
    </li>   
    @endforeach
</ul>