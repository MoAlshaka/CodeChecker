@if (session()->has('error'))
    <div role="alert">
        <span class="text-danger">{{ session()->get('error') }}</span>
    </div>
@endif
<form action="{{ route('admin.login') }}" method="POST" class="sm:w-80">
    @csrf
    <div class="mb-6 space-y-2">
        <label for="emailaddress" class="font-medium text-gray-500"> UserName</label>
        <input class="form-input placeholder:text-gray-400 text-gray-400" type="text" id="emailaddress" required=""
            placeholder="Enter your UserName" name="username">
    </div>

    @error('username')
        <span class="text-danger">{{ $message }}</span>
    @enderror


    <div class="mb-6 space-y-2">
        <label for="password" class="font-medium text-gray-500">Password</label>
        <input type="password" id="password" class="form-input placeholder:text-gray-400 text-gray-400"
            placeholder="Enter your password" name="password">
    </div>

    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror


    <div class="text-center mb-6">
        <button class="btn bg-primary w-full text-white" type="submit"> Log In </button>
    </div>
</form> <!-- form end -->
