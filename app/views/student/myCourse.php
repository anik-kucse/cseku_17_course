<div class="content">
	<header>
		<center><h1>My Courses</h1></center>
		<br>
	</header>
    <form id="ddl   " method="post" action="<?php echo BASE_URL?>/MyCourses/myCourses">
        <div class="form-row">
            <div class="col-md-2">
                <label class="form-control-label">Year-Term</label>
            </div>
            <div class="form-group col-md-3">
                <select class="form-control" name="ddlYearTerm" onchange="select();">
                    <?php
                    foreach ($data[0] as $key => $value){
                        ?>
                        <!-- <?php if($value['id'] == $data['term']){echo 'selected = "selected"';}?> -->
                        <option value="<?php echo $value['id']?>" <?php if($value['id'] == $data['term']){echo 'selected = "selected"';}?>>
                            <?php echo $value['year']." year ".$value['term']." term"?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
<!--            <div class="form-group col-md-1" >-->
<!--                <div class="">-->
<!--                    <button type="submit" class="btn btn-outline-customs ">Select</button>-->
<!--                </div>-->
<!--            </div>-->
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
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Course No</th>
            <th>Course Title</th>
            <th>Credit</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data[1] as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value['courseNumber']?></td>
                    <td><?php echo $value['courseTitle']?></td>
                    <td><?php echo $value['credit']?></td>
                    <td>
                        <?php
                        if ($value['is_approve'] == 0) {
                            echo "Not approved";
                        } elseif ($value['is_approve'] == 1) {
                            echo "Approved";
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td></td>
                <td>Total Credit</td>
                <td><?php echo $data[2][0]['SUM(course.credit)'];?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function select() {
        var ddl = document.getElementById('ddl')
        ddl.submit();
    }
</script>
