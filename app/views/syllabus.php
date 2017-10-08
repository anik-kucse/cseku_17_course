<div class="content">
    <br>
    <form method="POST" action="<?php echo BASE_URL?>/SyllabusPublic/search">
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="col-form-label">Year - Term</label>
                <div class="">
                    <select class="form-control" id="singleselect" name="ddlYearTerm">
                        <?php
                        foreach ($data[0] as $key => $value){
                            ?>
                            <option value="<?php echo $value['id']?>" <?php
                            if (array_key_exists('term', $data)) {
                                if($value['id'] == $data['term']){
                                    echo 'selected = "selected"';
                                }
                            }
                            ?>>
                                <?php echo $value['year']." year ".$value['term']." term" ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-5">
                <label class="col-form-label">Syllabus</label>
                <div class="">
                    <select class="form-control" id="singleselect" name="ddlSyllabusName">
                        <?php
                        foreach ($data[1] as $key => $value){
                            ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['syllabus_Name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-1">
                <label class="col-form-label" style="visibility:hidden">Invisible</label>
                <button type="submit" name="search" class="btn btn-outline-customs ">Search</button>
            </div>
        </div>
    </form>
    <br>
    <?php
    for($i = 2; $i < 5; $i++){
        if(!empty($data[$i])){
            ?>
            <center><h2><b><?php echo $data[$i][0]['group_rule']?></b></h2></center>
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>Course No</th>
                    <th>Course Title</th>
                    <th>Credit</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data[$i] as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['courseNumber']?></td>
                        <td><?php echo $value['courseTitle']?></td>
                        <td><?php echo $value['credit']?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <br>
            <?php
        }
    }
    ?>
    <br>
</div>
