@foreach ($translate as $a)
<tr>
    <td>{{ $a->kata_ind }}</td>
    <td>
        @foreach ($a->bahasa_osing as $item)
            - {{ $item->kata_os }} <br>
        @endforeach
    </td>
</tr>
@endforeach