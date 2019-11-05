<form action="{{route('user.update',$user)}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{csrf_token()}}"> 
<input type="text" name="username" value="{{$user->username}}">
<input type="text" name="email" value="{{$user->email}}">
<input type="text" name="password" value="{{$user->password}}">

<button class="btn btn-primary">UPDATE</button>
</form>