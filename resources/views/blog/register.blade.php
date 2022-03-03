<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiter</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    input[type=text],
    select {
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
        background-color: #4CAF50;
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
        margin: 40px 350px;
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

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .col-25,
    .col-75,
    input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
</style>
</style>

<body>
    <div class="container">
        @if ($msg = Session::get("success"))

        <h3>{{$msg}}</h3>
        <h3><a href="http://127.0.0.1:8000/createpost">click here to post a blog</a></h3>

        @else
        <h1>Registeration Form</h1>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label>User Name:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="userName" placeholder="User Name" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-25"><label>Email:</label>
                </div>
                <div class="col-75">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
            </div><br>
            <!-- <div class="row">
                <div class="col-25"><label>Password:</label>
                </div>
                <div class="col-75">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div><br>
            <div class="row">
                <div class="col-25"><label>Confirm Password:</label>
                </div>
                <div class="col-75">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                </div>
            </div><br> -->
            <div class="row">
                <input type="submit" name="submit" value="Register">
            </div>
            @if ($errors->any())

            @foreach ($errors->all() as $error)

            {{$error}}

            @endforeach

            @endif
            @endif
        </form>
    </div>
</body>

</html>