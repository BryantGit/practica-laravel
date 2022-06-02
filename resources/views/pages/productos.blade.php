<h1>Hola {{$nombre}} desde la Vista </h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Activo</th>
        <th>Caducidad</th>
        <th>Creacion</th>
    </tr>
    <tbody>
        <tr>
        @foreach ($productos as $producto)
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->cantidad}}</td>
                @if ($producto->activo === 1)
                    <td>Activo</td>
                @else
                    <td>Inactivo</td>
                @endif
                <td>{{$producto->activo}}</td>
                <td>{{$producto->f_caducidad}}</td>
                <td>{{$producto->created_at}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
