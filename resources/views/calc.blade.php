<html>
    <head>
        <title>Calc</title>
    </head>
    <body>
        <form method = "post" action = "{{url('/calc')}}">
            Enter Number 1 :<input type = "text" name = "number1" ></br>
            Enter Number 2 :<input type = "text" name = "number2" ></br>
            <input type = "submit" value = "Add">
            {{csrf_field()}}
        </form>
    </body>
</html>