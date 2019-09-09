
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



        <form method="post" action="/search"> {{ csrf_field() }}
            <input class="input search-input" type="text" placeholder="Enter your keyword" name="query">
            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
        </form>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>

        <th>Class</th>
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
                {{$student->class}}
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>
