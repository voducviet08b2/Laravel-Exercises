
<form action="{{route('user.store')}}" method="post">
<input type="hidden" name="_token" value={{csrf_token()}}>
<input type="text" placeholder="Username" name="username">
<input type="text" placeholder="Email" name="email">
<input type="text" placeholder="Password" name="password">

<select name="roleId">
        @foreach($roles as $role)
<option value="{{$role->id}}">{{$role->name}}</option>
@endforeach
</select>
 
<button type="submit" class="btn btn-primary">REGISTER</button>
</form>