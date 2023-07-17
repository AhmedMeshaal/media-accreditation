<h1>Here is the dashboard</h1>
<BR><BR>
{{--<a href="{{ url('/profile/{id}') }}">user profile(EDIT)</a>--}}
<a href="{{ route('profile', ['id' => auth()->id()]) }}">View Profile</a>


<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="nav-link" type="submit">
        {{ __('Logout') }}
    </button>
</form>
