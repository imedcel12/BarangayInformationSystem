<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        table,
        th,
            {
            border: 1px solid;
            margin: 10px;
        }

        table {
            margin-left: 10px;
        }
    </style>

</head>

<body>

    <h1 style="margin-left:250px;">Attendance List</h1>
    <table style="width:700px;">
        <thead style="background-color:blue; color:white;">
            <tr>
                <th scope="col" style="margin:100px;">#</th>
                <th scope="col" style="margin:100px;">Resident</th>
                <th scope="col" style="margin:100px;">Time IN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qrcodedb as $item)
                <tr style=" padding:1px;">
                    <td style="margin:2px; text-align:center;">{{ $item->id }}</td>
                    <td style="margin:2px; text-align:center;">{{ $item->student_id }}</td>
                    <td style="margin:2px; text-align:center;">
                        {{ Carbon\Carbon::parse($item->time_in)->format('F d,  Y - g:i A') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>
