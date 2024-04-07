welcom : {{ Auth::guard('admin')->name }}
<br>
<a href="{{ route('admin.logout') }}">Logout</a>
<br>
<a href="{{ route('admin.code.index') }}">Code</a>
