<div class="content">
    <header>
        <center><h1>Result</h1></center>
    </header>
    <br>
    <label><?php echo 'Name: '.$data['student'][0]['first_name'].' '.$data['student'][0]['middle_name'].' '.$data['student'][0]['last_name']?></label>
    <br>
    <label><?php echo 'Student ID: '.$data['student'][0]['student_id']?></label>
    <label></label>
    <br>
    <?php foreach ($data['finale'] as $key => $value){?>
        <div class = "form-group row ">
            <div class="col-md-12">
                <h1><?php echo $value[0][0]['year'].' year '.$value[0][0]['term'].' term'?></h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Course No</th>
                            <th>Course Title</th>
                            <th>Credit</th>
                            <th>Type</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($value[1] as $k => $v){?>
                        <tr>
                            <td><?php echo $v['courseNumber']?></td>
                            <td><?php echo $v['courseTitle']?></td>
                            <td><?php echo $v['credit']?></td>
                            <td><?php echo $v['type']?></td>
                            <td>
                                <span>
                                    <?php switch ($v['result']){
                                        case '4.00':
                                            echo 'A+';
                                            break;
                                        case '3.75':
                                            echo 'A';
                                            break;
                                        case '3.50':
                                            echo 'A-';
                                            break;
                                        case '3.25':
                                            echo 'B+';
                                            break;
                                        case '3.00':
                                            echo 'B';
                                            break;
                                        case '2.75':
                                            echo 'B-';
                                            break;
                                        case '2.50':
                                            echo 'C+';
                                            break;
                                        case '2.25':
                                            echo 'C';
                                            break;
                                        case '2.00':
                                            echo 'D';
                                            break;
                                        case '-1':
                                            echo 'F';
                                            break;
                                        case '0':
                                            echo 'Not Published';
                                            break;
                                    }?>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
                <div class="form-group row">
                    <label class = "col-md-2"></label>
                    <label class="form-control-label col-md-3">Taken Credit</label>
                    <label class="form-control col-md-3"><?php echo $value[2][0]['SUM(course.credit)']?></label>
                </div>
                <div class="form-group row">
                    <label class = "col-md-2"></label>
                    <label class="form-control-label col-md-3">Completed credit</label>
                    <label class="form-control col-md-3"><?php echo $value[3][0]['SUM(course.credit)']?></label>
                </div>
                <div class="form-group row">
                    <label class = "col-md-2"></label>
                    <label class="form-control-label col-md-3">TGPA</label>
                    <label class="form-control col-md-3"><?php echo $value[4]?></label>
                </div>
            </div>
        </div>
    <?php }?>
</div>

<script>
    function getGrade(asd) {
        var parent = asd.parentNode;
        parent.submit();
    }
</script>
