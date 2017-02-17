<html>
    <head>
        <title>ToDo</title>
    </head>
    <body>
        <form method = "post" action = "{{url('/todo')}}">
            Enter the Name :<input type = "text" name = "name" ></br>
            Enter the DOB :<input type = "text" name = "dob" ></br>
            <input type = "submit" value = "Submit">
            {{csrf_field()}}
        </form>
    </body>
</html>