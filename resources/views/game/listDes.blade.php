@foreach ($listDescriptorByCountry as $value)
    <tr>
        <td scope="row">{{ $value->title }}</td>
        <td style="padding-bottom: 70px;">{{ $value->description }}</td>
    </tr>
@endforeach