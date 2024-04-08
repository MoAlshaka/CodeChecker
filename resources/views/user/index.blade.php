@if (session()->has('success'))
    <div role="alert">
        <span class="text-success">{{ session()->get('success') }}</span>
    </div>
@endif
@if (session()->has('error'))
    <div role="alert">
        <span class="text-danger">{{ session()->get('error') }}</span>
    </div>
@endif
<form action="{{ route('user.check') }}" method="post">
    @csrf
    <input type="text" name="code" id="">
    <button type="submit">Submit</button>
</form>
