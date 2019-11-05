<form action="{{route('category.store')}}" method="POST">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div>
      <input type="text" placeholder="Ten phan loai" name="name">
    </div>
    <br>
    <div>
      <input type="text" placeholder="Mo ta phan loai" name="description">
    </div>
    <br>

    <br>
    <button type="submit">Tao phan loai</button>
  </form>
