<form action="{{route('category.update',$cat->id)}}" method="POST">
    <input type="hidden" name="_method" value="PUT"> 
    <input type="hidden" name="_token" value={{csrf_token()}}> 
    <div>
    <input type="text" value="{{$cat->name}}" name="name">
    <input type="text" value="{{$cat->description}}" name="description">
   
    <input type="submit">
    </div>
</form>
