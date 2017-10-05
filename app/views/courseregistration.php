<div class="content">
	<header>
		<center><h1>Register Course</h1></center>
		<br>
	</header>
	<form method="post" action="<?php echo BASE_URL?>/CourseRegistration/courseRegistration">
		<div class="form-row">
		    <div class="form-group col-md-6">
		      	<label class="form-control-label">Year-Term</label>
		      	<select class="form-control" name="ddlYearTerm">
                    <?php
                    foreach ($data[0] as $key => $value){
                        ?>
					    <option value="<?php echo $value['id']?>" <?php if($value['id'] == $data['term']){echo 'selected = "selected"';}?>>
							<?php echo $value['year']." year ".$value['term']." term"?>
						</option>
                        <?php
                    }
                    ?>
				</select>
		    </div>
            <div class="form-group col-md-6">
                <label class="form-control-label">Syllabus</label>
                <select class="form-control" name="ddlSyllabus">
                    <?php
                    foreach ($data[1] as $key => $value){
                        ?>
                        <option value="<?php echo $value['id']?>" <?php if($value['id'] == $data['syllabusName']){echo 'selected = "selected"';}?>>
							<?php echo $value['syllabus_Name']?>
						</option>
                        <?php
                    }
                    ?>
                </select>
            </div>
		</div>
        <div class="form-group" >
            <div class="">
                <button type="submit" class="btn btn-outline-customs ">Select</button>
            </div>
        </div>
	</form>
	<!-- <div class="row">
		<div class="col-md-12">
			<center><h2><b>Retake List</b></h2></center>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Course No</th>
						<th>Course Title</th>
						<th>Credit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1101</td>
						<td>Structured Programming</td>
						<td>3.00</td>
					</tr>
					<tr>
						<td>1101</td>
						<td>Structured Programming</td>
						<td>3.00</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>
	</div> -->
	<center><h2><b>Subject List</b></h2></center>
    <form method="post", action="<?php echo BASE_URL?>/CourseRegistration/courseValidation">
		<input type="text" name="yearTermId" value="<?php echo $data['term']?>" hidden="true">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Course Title</th>
                <th>Type</th>
            </tr>
            </thead>
			<tbody>
				<?php
	            for ($i = 0; $i < count($data[2]); $i++) {
	                ?>
	                <tr>
	                    <td>
	                        <select class="form-control" width="100%" name="<?php echo "courseTitle".$i?>">
	                            <option value="0">select</option>
	                            <?php
	                            foreach ($data[2] as $key => $value){
	                                ?>
	                                <option value="<?php echo $value['id']?>"><?php echo $value['courseNumber']." ".$value['courseTitle']?></option>
	                                <?php
	                            }
	                            ?>
	                        </select>
	                    </td>
	                    <td>
	                        <select class="form-control" name="<?php echo "CourseType".$i?>">
	                            <option value="1">Fresh</option>
	                            <option value="2">Retake</option>
	                            <option value="3">Re-retake</option>
	                        </select>
	                    </td>
	                </tr>
	                <?php
	            }
	            ?>
			</tbody>
        </table>
        <div class="form-group" >
            <center>
                <button type="submit" class="btn btn-outline-customs">Register</button>
            </center>
        </div>
    </form>

</div>
