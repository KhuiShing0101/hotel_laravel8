<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <h2>Create View</h2>

    <div class="container" style="width:800px; margin:0 auto;">

        @if ($errors->has('name'))

            <span style="color:red;">{{$errors->first('name')}}</span>

        @endif

        @if(session()->has('error_message'))

            <span style="color:red;">ERROR::{{session()->get("error_message")}}</span>

        @endif

        {!! Form::open(['url' => '/backend/view/store', 'method'=> 'POST']) !!}

            <form action="{{url('backend/view/store')}}" method="POST">
                <div class="row">
                    <div class="col-10">
                        <label for="name">View Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Enter New View Name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>

        {!! Form::close() !!}
    </div>

</body>

</html>