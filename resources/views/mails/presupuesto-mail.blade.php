<p>
    <ul>
        <li>Nombre : {{$nombre}}</li>
        <li>Correo electrónico  : {{$email}}</li>
        <li>Lugar de envío (localidad, ciudad, provincia...)  : {{$location}}</li>
        <li>Código postal  : {{$postal_code}}</li>
    </ul>
</p>

<table>
        <tr>
            <th><b>El tipo de vallado :</b></th>
            <td>{{ $data['tipo'] }}</td>
        </tr>

        <tr>
            <th><b>La altura :</b></th>
            <td>{{ $data['altura'] }}</td>
        </tr>

        <tr>
            <th><b>Distancia entre los postes :</b></th>
            <td>Cada 2 Metros</td>
        </tr>

        <tr>
            <th><b>Metros lineales totales de tu cercado :</b></th>
            <td>{{ $data['metros'] }}</td>
        </tr>

        <tr>
            <th><b>¿Cuántas esquinas tiene tu cercado? :</b></th>
            <td>{{ $data['esquinas'] }}</td>
        </tr>

        <tr>
            <th><b>Cómo irán fijados los postes :</b></th>
            <td>{{ $data['fijados'] }}</td>
        </tr>

        <tr>
            <th><b>El modelo de poste que quieres para cercado:</b></th>
            <td>{{ $data['modelo'] }}</td>
        </tr>

        <tr>
            <th><b>Color del vallado :</b></th>
            <td>{{ $data['color'] }}</td>
        </tr>

        <tr>
            <th><b>El número de puertas de acceso peatonal :</b></th>
            <td>{{ $data['peatonal'] }}</td>
        </tr>

        <tr>
            <th><b>Indica el número de puertas para vehículos :</b></th>
            <td>{{ $data['puertas_veh_4'] }}</td>
        </tr>

        <tr>
            <th>-----------</th>
        </tr>

        <tr>
            <th><b>Postes de {{$data['altura']}} de altura :</b></th>

            @php
                $ar_fi = $data['peatonal'] * 2;
                $ar_pila = $data['puertas_veh_4'] * 2;
            @endphp
            <td>{{ ($data['metros'] / 2) - ($ar_fi +  $ar_pila + $data['esquinas']) }}</td>
        </tr>

        <tr>
            <th><b>Postes arranque o final puerta peatonal :</b></th>
            <td>{{ $data['peatonal'] * 2 }}</td>
        </tr>

        <tr>
            <th><b>Pilares arranque final puertas :</b></th>
            <td>{{ $data['puertas_veh_4'] * 2 }}</td>
        </tr>

</table>