
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>

        <th>
            <a href="/sortbyageup">Age up</a>
        </th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>
                {{$student->id}}
            </td>

            <td>
                {{$student->name}}
            </td>
            <td>
                {{$student->age}}
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>
