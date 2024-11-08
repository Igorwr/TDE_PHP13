<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="type" placeholder="Type" required>
    <input type="text" name="power_point" placeholder="Power_point" required>
    <button type="submit">Create Pokemon</button>
</form>