<div class="content">

	<header>
	<br>
		<center><h3>Registare as A new Member</h3></center>
	<br>
	</header>
	<form role="form" method="POST" action="<?php echo BASE_URL?>/Register/registerNewMember">
        <div class="form-group row">
            <label class="col-sm-2 text-danger "></label>
            <label class="col-sm-10  text-danger ">Error Massage</label>
        </div>
		<div class="form-group row">
		    <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" >
		    </div>
		</div>
		<div class="form-group row">
		    <label for="middleName" class="col-sm-2 col-form-label">Middle Name</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="middleName" placeholder="Middle Name" name="middleName">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="studentId" placeholder="Student ID" name="studentId">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
		    <div class="col-sm-10">
		    	<input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="username" class="col-sm-2 col-form-label">Usermame</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="username" placeholder="Username" name="userName">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="email" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		    	<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
		    </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Year-Term</label>
			<div class="col-sm-10">
				<select class="form-control" id="singleselect">
					<option>select Year-term</option>
					<option>1st year I term</option>
					<option>1st year I term</option>
					<option>1st year I term</option>
					<option>1st year I term</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Session</label>
			<div class="col-sm-10">
				<select class="form-control" id="singleselect">
					<option>select Session</option>
					<option>2014-15</option>
					<option>2014-15</option>
					<option>2014-15</option>
					<option>2014-15</option>
					<option>2014-15</option>
					<option>2014-15</option>
					<option>2014-15</option>
					<option>2014-15</option>
				</select>
			</div>
		</div>
		<div>
			<center>
				<button type="submit" name="register" class="btn btn-outline-customs">Register</button>
			</center>
		</div>
	</form>
</div>