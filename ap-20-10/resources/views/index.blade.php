

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
            <h1 class=" w-100 text-center pt-3">LARAVEL EXAM</h1>
    </div>
    <hr>
    <div class="container">
      
            <h2>USER TABLE</h2>
            <form action="./show/create" method="GET">
              <button type="submit" class="btn btn-primary">CREATE</button>
            </form>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Working</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>            
                  <td>{{$user->password}}</td>
                  <td>
                      <div class="d-flex justify-content-between">
                          <form action="./show/{{$user->id}}" method="GET">
                            <button class="btn btn-primary" type="submit">VIEW</button>
                          </form> 
                          {{-- end view --}}
                          <form action="{{route('users.destroy',$user->id)}}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                            {{-- end delete --}}
                            <form action="{{route('users.edit',$user->id)}}" method="GET"> 
                                
                                <button class="btn btn-success" type="submit">EDIT</button>
                            </form>
                            
                            
                      </div>
                    
                  </td>
                </tr>
               
              </tbody>
              @endforeach
            </table>
          </div>

</body>

</html>

