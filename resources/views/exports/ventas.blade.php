<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nro</th>
                <th>ORDEN</th>
                <th>CLIENTE</th>
                <th>RUT</th>
                <th>FECHA</th>
                <th>CANT.</th>
                <th>PRODUCTOS</th>
                <th>MONTO</th>
                <th>ESTATUS</th>
            </tr><!-- .nk-tb-item -->
        </thead>
        <tbody>
            @foreach ($ventas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>#{{ $item->nro_orden }}</td>
                <td>{{ $item->cliente->nombre }} {{ $item->cliente->apellido }}</td>
                <td>{{ $item->cliente->rut }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d/m/Y')  }}</td>
                <td>{{ $item->detallesCompra->count() }}</td>
                <td>
                    @foreach ($item->detallesCompra as $dato)
                    <span style="white-space: pre-wrap;">* {{ $dato->producto->name }}</span><br>
                    @endforeach
                </td>
                <td>
                    $ {{ number_format($item->monto, 0, ",", "."); }}
                </td>
                <td>{{$item->estatus}}</td>
            </tr><!-- .nk-tb-item -->
            @endforeach
        </tbody>
    </table>
</body>
</html>
