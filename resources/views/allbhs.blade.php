<table>
    <thead>
        <th>osing</th>
        <th>indo</th>
    </thead>
    <tbody>
        @foreach ($bahasa_osing as $b)
            <tr>
                <td>{{ $b->kata_os }}</td>
                <td>
                    {{ $b->bahasa_indonesia->kata_ind }}
                    {{-- @foreach ($bahasa_indonesia as $item)
                        - {{ $item->kata_ind }} <br>
                    @endforeach --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>