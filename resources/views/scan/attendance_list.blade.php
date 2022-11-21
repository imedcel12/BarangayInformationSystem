@extends('layouts.apps')


@section('content')
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container ">

        <table class="table table-striped mt-5">

            <thead style="background-color:gray;">
                <tr>
                    <th scope="col" style="color:white;">Resident ID</th>
                    <th scope="col" style="color:white;">Time in</th>
                </tr>
            </thead>
            <tbody class="text-center">

                @foreach ($attendance as $attend)
                    <tr>
                        <td>{{ $attend->student_id }}</td>
                        <td>{{ $attend->time_in }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
@endsection