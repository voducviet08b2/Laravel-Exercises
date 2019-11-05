

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Laravel</title>
</head>

<body>
    <div class="d-flex">
            <a class="btn btn-primary m-3" href="{{route('users.index')}}">HOME</a>
            <h1 class=" w-100 text-center pt-3">USER MANAGERMENT</h1>
    </div>
    <hr>
    <div class="container">
        <h2>EDIT PAGE</h2>
        <form action="{{route('users.update',$user->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT"> 
                <input type="hidden" name="_token" value={{csrf_token()}}> 
                <div>
                <label for="">Username</label><br>
                <input type="text" value="{{$user->username}}" name="username"><br>
                <label for="">Email</label><br>
                <input type="text" value="{{$user->email}}" name="email"><br>
                <label for="">Password</label><br>
                <input type="text" value="{{$user->password}}" name="password"><br>
                <hr>
                <button type="submit" class="btn btn-danger">SUBMIT</button>
                </div>
            </form>
          </div>

</body>

</html>
