<!DOCTYPE html>
<html>

<head>
    <title>Bahasa Indonesia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>

                <div class="my-3 col-12 col-sm-8 col-md-5">

                    {{-- {{ dd($status) }} --}}
                    @if ($status == 'kosong')
                        <form action="{{ route('bahasa_indonesia') }}" method="get">
                            <div class="input-group">
                                <textarea class="form-control" name="keyword" aria-label="With textarea"></textarea>
                                <button class="input-group-text btn btn-primary" name="bahasa" type="search"
                                    value="b_ind">
                                    indo
                                </button>
                                <button class="input-group-text btn btn-primary" name="bahasa" type="search"
                                    value="b_osing">
                                    osing
                                </button>

                                {{-- <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item">test1</a></li>
                                        <li><a class="dropdown-item">test2</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </form>
                    @else
                        <form action="{{ route('bahasa_indonesia') }}" method="get">
                            <div class="input-group">
                                <textarea class="form-control" name="keyword" aria-label="With textarea"></textarea>
                                <button class="input-group-text btn btn-primary" name="bahasa" type="search"
                                    value="b_ind">
                                    indo
                                </button>
                                <button class="input-group-text btn btn-primary" name="bahasa" type="search"
                                    value="b_osing">
                                    osing
                                </button>

                                {{-- <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item">test1</a></li>
                                        <li><a class="dropdown-item">test2</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </form>
                        @if ($bahasa == 'b_ind')
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Bahasa Indonesia</th>
                                        <th>Bahasa Osing</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
                        @else
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Bahasa Osing</th>
                                        <th>Bahasa Indonesia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($translate as $a)
                                        <tr>
                                            <td>{{ $a->kata_os }}</td>
                                            <td>
                                                @foreach ($a->bahasa_indonesia as $item)
                                                    - {{ $item->kata_ind }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    @endif
                </div>

                {{-- @if ($bahasa == 'b_ind')
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Bahasa Indonesia</th>
                            <th>Bahasa Osing</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
                @else
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Bahasa Indonesia</th>
                            <th>Bahasa Osing</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($translate as $a)
                            <tr>
                                <td>{{ $a->kata_os }}</td>
                                <td>
                                    @foreach ($a->bahasa_indonesia as $item)
                                        - {{ $item->kata_ind }} <br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif --}}
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
