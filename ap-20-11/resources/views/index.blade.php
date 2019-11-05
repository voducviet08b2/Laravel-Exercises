
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
    <title>Document</title>
</head>

<body>
        <form action="./show/create" method="GET">
            <button type="submit">Tao Bai Viet</button>
          </form>
          
       
        
      <div class="container">
          <div class="row">

                @foreach($articles as $article)
              <div class="col-4 mt-2">
                <div class="card">
                    <div class="card-body">
                            {{$article->category["id"]}}
                      <h4 class="card-title">{{$article->title}} </h4>
                      
                      <p class="card-text">{{$article->description}}</p>
                      <p class="card-text">{{$article->content}}</p>
                      <form action="./show/{{$article->id}}" method="GET">
                        <button class="btn btn-primary" type="submit">Read more</button>
                      </form>
                      <form action="{{route('article.destroy',$article->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-secondary">Xoa Nguoi Dung Nay</button>
                      </form>
                      <form action="{{route('article.edit',$article->id)}}" method="GET"> 
                            <button type="submit" class="btn btn-success">Sua nguoi dung</button>
                        </form>
                  
                    </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
</body>

</html>





