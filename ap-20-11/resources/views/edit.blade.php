<form action="{{route('article.update',$article->id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT"> 
        <input type="hidden" name="_token" value={{csrf_token()}}> 
        <div>
        <input type="text" value="{{$article->title}}" name="title">
        <input type="text" value="{{$article->description}}" name="description">
      <textarea rows="4" cols="50" name="content" >{{$article->content}}</textarea> 
        {{-- <input type="text" value="{{$article->content}}" name="content"> --}}
        <input type="submit">
        </div>
    </form>
    