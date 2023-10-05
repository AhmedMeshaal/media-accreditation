{{--@foreach($Individual as $individual)--}}
{{--    <ol>--}}
{{--        <li>{{ $individual->name }}</li>--}}
{{--        <li>{{ $individual->country }}</li>--}}
{{--        <li>{{ $individual->designation }}</li>--}}
{{--        <li>{{ $individual->organization }}</li>--}}

{{--        <img src="/profile_image/{{ $id }}" class="img-fluid" alt="quixote">--}}
{{--    </ol>--}}
{{--@endforeach--}}

{{--<button>Approve</button>--}}
{{--<button>Reject</button>--}}

<form method="POST" action="/profile_status/user/{{ $id }}" enctype="multipart/form-data">

    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @foreach($Individual as $individual)

    Name: <input type="text" name="name" value="{{ $individual->name }}" readonly/><BR>
    Country: <input type="text" name="country" value="{{ $individual->country }}" readonly/><BR>
    Designation: <input type="text" name="designation" value="{{ $individual->designation }}" readonly/><BR>
    Organization: <input type="text" name="organization" value="{{ $individual->organization }}" readonly/><BR>
    Profile Image: <img src="/profile_image/{{ $id }}" class="img-fluid" alt="quixote"height="200px" width="200px"><BR>

    @endforeach

    <button id="approve" name="approve">Approve</button>
{{--    <a href="{{ route() }}">Approve Profile</a>--}}

    <button id="reject" name="reject">DisApprove</button>

</form>
