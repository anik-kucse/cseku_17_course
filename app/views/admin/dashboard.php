<div class="content">
    <div>
        <h2>Account Manage</h2>
        <div class="row">
            <div class="col-12">
                <label for="user_name" class="col-form-label">Username</label>
                <label id="user_name" class="form-control"><?php echo $data['username']?></label>
            </div>
            <div class="col-12">
                <label class="col-form-label">Do you want to change password? <a data-toggle="modal" href="#changePassword">Edit</a></label>
            </div>
        </div>
    </div>
    <br>
    <div>
        <h2>Open/Close course registration</h2>
        <label for="">Current status</label>
        <label class="text-danger"><?php if($data['is_open'][0]['is_open'] == 1){echo 'Opened';}else{echo 'Closed';}?></label>
        <?php if($data['is_open'][0]['is_open'] == '1'){?>
            <label for="" class="form-label">Start Date</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $data['is_open'][0]['start_date']?>">
            <label for="">End tDate</label>
            <input type="text" disabled="disabled" class="form-control" value="<?php echo $data['is_open'][0]['end_date']?>">
            <a href="<?php echo BASE_URL?>/dashboard/closeRegistration/<?php echo $data['is_open'][0]['id']?>" class="btn btn-outline-customs">Close Registration</a>
        <?php }else{?>
            <form action="<?php echo BASE_URL?>/dashboard/openRegistration" method="post">
                <label for="">Start Date</label>
                <input type="date" name="start_date" >
                <label for="">End tDate</label>
                <input type="date" name="end_date" >
                <input type="hidden" class="form-control" name="id" value="<?php echo $data['is_open'][0]['id']?>">
                <input type="submit" class="btn btn-outline-customs" value="Open Registration">
            </form>
        <?php }?>
    </div>
    <br>
    <div>
        <h2>Session</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Session</td>
                    <td>Update</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['session'] as $key => $value){?>
                <tr>
                    <form action="<?php echo BASE_URL?>/dashBoard/updateSession" method="post">
                        <td>
                            <input type="text" value="<?php echo $value['sessionNumber']?>" name="session" id="session" disabled="disabled">
                        </td>
                        <td>
                            <input type="hidden" value="<?php echo $value['id']?>" name="id">
                            <input type="submit" value="update" name="update" id="update" style="display: none" class="btn btn-outline-customs">
                        </form>
                        <button class="btn btn-outline-customs" onclick="edit(this);" id="edit">Edit</button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <form action="<?php echo BASE_URL?>/dashboard/addNewSession" method="post">
            <label id="lbl_session" style="display: none">Session</label>
            <input type="text" name="session_name" id="session_name" style="display: none">
            <input type="submit" style="display: none" class="btn btn-outline-customs" id="add" value="Add">
        </form>
        <button class="btn btn-outline-customs" style="display: block" onclick="addNew();" id="add_new">Add New</button>
    </div>


    <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Your Password</h5>
                    <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo BASE_URL?>/dashboard/changePassword">
                        <div class="Form-group row col-12 col-md-12">
                            <input type="password" class="form-control" placeholder="Current Password"  required="1" aria-describedby="basic-addon2" name="currentPassword">
                        </div>
                        <br>
                        <div class="Form-group row col-12 col-md-12">
                            <input type="password" class="form-control" placeholder="New Password"  required="1" aria-describedby="basic-addon2" name="newPassword">
                        </div>
                        <br>
                        <div class="Form-group row col-12 col-md-12">
                            <input type="password" class="form-control" placeholder="Repeat New Password"  required="1" aria-describedby="basic-addon2" name="confirmPassword">
                        </div>
                        <br>
                        <div class="input-group row col-12 col-md-12">
                            <label class="col-5 col-md-5"></label>
                            <button type="submit" class="btn btn-outline-customs">Save Changed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function addNew() {
        document.getElementById('lbl_session').style.display = "block";
        document.getElementById('session_name').style.display = "block";
        document.getElementById('add').style.display = "block";
        document.getElementById('add_new').style.display = "none";
    }

    function edit(edit) {
        var parent = edit.parentNode.parentNode;
        var txt = parent.childNodes[3].childNodes[1];
        var btnUpdate = parent.childNodes[5].childNodes[3];
        var btnEdit = parent.childNodes[5].childNodes[5];
        txt.removeAttribute("disabled");
        btnUpdate.style.display = "block";
        btnEdit.style.display = "none";

    }
</script>