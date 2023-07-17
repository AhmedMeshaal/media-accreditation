<h1>Registration Form</h1>

<form method="POST" enctype="multipart/form-data">

    @csrf
    First name<input type="text" name="name"/>
    <BR>email<input type="text" name="email"/>
    <BR>password<input type="password" name="password"/>
    <BR>Country<select name="country">
        <option>KSA</option>
        <option>Asia</option>
    </select>
    <BR>Designation<input type="text" name="designation"/>
    <BR>Organization<input type="text" name="organization"/>
    <BR>Accreditation Type
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Gender</label>
        <div class="col-sm-9">
            <input type="radio" name="accreditation_type" value="FullSeason"> Full Season
            <input type="radio" name="accreditation_type" value="SelectedFixtures"> Selected Matches
        </div>
    </div>

    <BR>Passport Number<input type="text" name="passport_number">
    <BR>National ID<input type="number" name="national_id">
    <BR>Upload File<input class="form-control" type="file" id="formFile" name="photo_path">


    <button class="btn btn-success">Register</button>
</form>

<button type="button" onclick="window.location='{{ url("auth") }}'">Log In</button>
<BR>

