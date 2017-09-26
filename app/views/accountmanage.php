<div class="content">
  <header>
    <center><h1>Manage Your Account</h1></center>
  </header>
  <br>
  <form>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">User Name</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['user_name'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">First Name</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['first_name'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Middle Name</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['middle_name'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Last Name</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['last_name'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Student ID</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['student_id'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Year</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['year'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Term</label>
      <div class="col-sm-7">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['term'];?></label>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Email</label>
      <div class="col-sm-6">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['email'];?></label>
      </div>
      <div class="col-sm-1">
        <label class="form-text" ><a class="button" data-toggle="modal" href="#changeEmail">Edit!!</a></label>
        <!-- Modal -->
        <div class="modal fade" id="changeEmail" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Change Email Address</h5>
                <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="input-group row col-12 col-md-12">
                    <input type="text" class="form-control" placeholder="Current Email"  required="1" aria-describedby="basic-addon2">
                  </div>
                  <br><br>
                  <div class="input-group row col-12 col-md-12">
                    <input type="text" class="form-control" placeholder="New Email"   required="1" aria-describedby="basic-addon2">
                  </div>
                  <br><br>
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
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label">Mobile</label>
      <div class="col-sm-6">
        <label class="form-control" id="inputPassword" ><?php echo $data[0]['mobile'];?></label>
      </div>
      <div class="col-sm-1">
        <label class="form-text" ><a class="button" data-toggle="modal" href="#changeMobile">Edit!!</a></label>
        <!-- Modal -->
        <div class="modal fade" id="changeMobile" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Change Mobile Number</h5>
                <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="input-group row col-12 col-md-12">
                    <input type="text" class="form-control" placeholder="Current Mobile"   required="1" aria-describedby="basic-addon2">
                  </div>
                  <br><br>
                  <div class="input-group row col-12 col-md-12">
                    <input type="text" class="form-control" placeholder="New Mobile"  required="1" aria-describedby="basic-addon2">
                  </div>
                  <br><br>
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
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-4 col-form-label"></label>
      <div class="col-sm-6">
        <p>Do you wanna change your password? <a class="button" data-toggle="modal" href="#changePassword">Yes!!</a></p>
        <!-- Modal -->
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
                <form>
                  <div class="Form-group row col-12 col-md-12">
                    <input type="password" class="form-control" placeholder="Current Password"  required="1" aria-describedby="basic-addon2">
                  </div>
                  <br>
                  <div class="Form-group row col-12 col-md-12">
                    <input type="password" class="form-control" placeholder="New Password"  required="1" aria-describedby="basic-addon2">
                  </div>
                  <br>
                  <div class="Form-group row col-12 col-md-12">
                    <input type="password" class="form-control" placeholder="Repeat New Password"  required="1" aria-describedby="basic-addon2">
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
    </div>
  </form>
</div> <!--content-->