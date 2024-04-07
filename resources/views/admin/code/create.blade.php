<form action="{{ route('admin.code.store') }}" method="post">
    @csrf
    number of code : <input type="number" name="nums" id="">
    <button type="submit">Submit</button>
</form>
