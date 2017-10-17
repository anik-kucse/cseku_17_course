    <div class="content">
    <header>
        <center><h1>Request Students</h1></center>
    </header>
    <br>
    <form method="post" action="<?php echo BASE_URL?>/MyCourses/myCourses">
        <div class="form-row">
            <div class="col-md-2">
                <label class="form-control-label">Year-Term</label>
            </div>
            <div class="form-group col-md-9">
                <select class="form-control" name="ddlYearTerm">
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
            <div class="form-group col-md-1" >
                <div class="">
                    <button type="submit" class="btn btn-outline-customs ">Select</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <form method="post">
        <div class = "form-group row ">
            <div class="col-sm-12">
                <center><h2><b>Student List</b></h2></center>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>150213</td>
                            <td>Anisha</td>
                            <td>Not Approved</td>
                            <td><a href="">Details</a></td>
                        </tr>
                        <tr>
                            <td>150213</td>
                            <td>Anisha</td>
                            <td>Approved</td>
                            <td><a href="">Details</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group" >
                    <center>
                        <button type="submit" class="btn btn-outline-customs">Approved</button>
                    </center>
                </div>
            </div>
        </div>
    </form>
</div> <!--content-->