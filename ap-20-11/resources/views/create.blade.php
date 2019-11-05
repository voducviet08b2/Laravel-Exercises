<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
    <form action="{{route('article-store')}}" method="POST">
   
        <input type="hidden" name="_token" value={{csrf_token()}}>
        <div>
          <input type="text" placeholder="Tieu de" name="title">
        </div>
        <br>
        <div>
          <input type="text" placeholder="Mo ta" name="description">
        </div>
        <br>
        <div>
         
          <textarea id="summary-ckeditor" rows="4" cols="50" name="content" placeholder="Noi dung" ></textarea>
        </div>
        <br>
        <button type="submit">Tao Bai Viet</button>
      </form>
</body>

</html>

    