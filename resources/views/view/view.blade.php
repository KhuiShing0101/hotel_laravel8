<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .edit-btn {
            background: orange;
            padding: 10px 20px;
            padding-top: 10px;
            padding-bottom: 5px;
            margin: 5px 0px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }

        .delete-btn {
            background: rgb(250, 49, 49);
            padding: 10px 20px;
            padding-top: 10px;
            padding-bottom: 5px;
            margin: 5px 0px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

    <h1>View Listing</h1>

    @if ($errors->has('error_message'))

        <span style="color:red;">{{$errors->first('error_message')}}</span>

    @endif

    <a href="{{ url('backend/view/create') }}"

        style="float:right; padding:10px; text-decoration:none;
        background:gray; border-radius:5px; margin:10px;color:rgb(251, 255, 6);">

        Create New
    </a>

    <table id="customers">
        <tr>
            <th>View ID</th>
            <th>View Name</th>
            <th>Room</th>
            <th>Action</th>
        </tr>
        @foreach ($views as $view)
            <tr>
                <td>{{ $view->id }}</td>
                <td>{{ $view->name }}</td>
                <td>
                    @if ($view->getRoom() != null)
                        {{ removeLastComma($view->getRoom) }}

                        {{-- @foreach ($view->getRoom as $room)
                         <td>Room Name :{{ removeLastComma($room->name)}} </td>
                         @endforeach --}}
                    @endif
                </td>
                <td>
                    <a href="{{ url('backend/view/edit') }}/{{ $view->id }}" class="edit-btn">Edit</a>
                    <a href="{{ url('backend/view/delete') }}/{{ $view->id }}" class="delete-btn">Delete</a>
                </td>
            </tr>
        @endforeach
</body>

</html>
