<form action="./showCat/createCat" method="GET">
    <button type="submit">Tao phan loai</button>
  </form>

@foreach($cats as $cat)
<p>ID phan loai: {{$cat->id}}</p>
<p>Ten Phan loai : {{$cat->name}}</p>
<p>Mo ta Phan loai: {{$cat->description}}</p>
<form action="{{route('category.destroy',$cat->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit">Xoa Nguoi Dung Nay</button>
  </form>
  <form action="{{route('category.edit',$cat->id)}}" method="GET"> 
    <button type="submit">Sua nguoi dung</button>
</form>

@endforeach