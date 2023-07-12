<h1>Registration Form</h1>

<form method="POST" enctype="multipart/form-data">

    @csrf
    First name<input type="text" name="first_name"/>
    <BR>Last name<input type="text" name="last_name"/>
    <BR>Country<select name="country">
        <option>KSA</option>
        <option>Asia</option>
    </select>
    <BR>Designation<input type="text" name="designation"/>
    <BR>Organization<input type="text" name="organization"/>
    <BR>Passport Number<input type="text" name="passport_number">
    <BR>National ID<input type="number" name="national_id">
    <BR>Upload File<input class="form-control" type="file" id="formFile" name="photo_path">


    <button class="btn btn-success">Register</button>
</form>
