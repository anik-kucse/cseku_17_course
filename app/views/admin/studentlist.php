<div class="content">
    <header>
        <center><h1>Students</h1></center>
    </header>
    <br>
    <table id="table" class="table">
        <thead>
            <tr>
                <td>Student ID</td>
                <td>Name</td>
                <td>Mobile</td>
                <td>Email</td>
                <td>Year-Term</td>
                <td>Session</td>
                <td>Results</td>
                <td>Approve Course</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data['table'] as $key => $value){?>
            <tr>
                <td><?php echo $value['student_id']?></td>
                <td><?php echo $value['first_name'].' '.$value['middle_name'].' '.$value['last_name']?></td>
                <td><?php echo $value['mobile']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['year'].' year '.$value['term'].' term' ?></td>
                <td><?php echo $value['sessionNumber']?></td>
                <td></td>
                <td></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <br>
</div>

<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "columnDefs":[
                {
                    "targets":[2,3,6,7],
                    "orderable":false,
                }
            ]
        });
    });
</script>