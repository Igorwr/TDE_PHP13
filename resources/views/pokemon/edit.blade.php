<form action="{{url('pokemon/'.$pokemon->id)}}"
method="POST"></form>
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" 
    value="{{$pokemon->name}}"required>
    <input type="text" name="type" placeholder="Type" 
    value="{{$pokemon->type}}"required>
    <input type="text" name="power_point" placeholder="Power_point" 
    value="{{$pokemon->power_point}}"required>
    <button type="submit">Update Pokemon</button>
</form>