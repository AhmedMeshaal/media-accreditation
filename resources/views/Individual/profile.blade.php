{{--<div class="image-parent">--}}

@foreach($individuals as $individual)
    <ol>
        <li>{{ $individual->name }}</li>
        <li>{{ $individual->country }}</li>
        <li>{{ $individual->designation }}</li>
        <li>{{ $individual->organization }}</li>

            <img src="/profile_image/{{ $id }}" class="img-fluid" alt="quixote">
    </ol>
    <img src="profile_image/{{ $id }}" class="img-fluid" alt="quixote">

       <form method="POST" action="/profile_update/{{ $individual->id }}" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="_token" value="{{ csrf_token() }}">

           <h1>Profile Update</h1>

           Name: <input type="text" name="name" placeholder="{{ $individual->name }}">
           Password: <input type="password" name="password">
           Destination <input type="text" name="designation" placeholder="{{ $individual->designation }}">
           Organization <input type="text" name="organization" placeholder="{{ $individual->organization }}">

           <button class="btn btn-success">Update</button>
       </form>
   @endforeach
    <BR><BR>
{{--</div>--}}
