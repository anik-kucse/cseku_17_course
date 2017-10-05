    <div class="content">
    <header>
        <center><h1>Approve Student</h1></center>
    </header>
    <br>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-control-label">Year-Term</label>
                <select class="form-control">
                  <option>1st-I</option>
                  <option>1st-I</option>
                  <option>1st-I</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label class="form-control-label">Student ID</label>
                <select class="form-control">
                    <option>150213</option>
                    <option>150231</option>
                    <option>150218</option>
                </select>
            </div>
            <div class="form-group col-md-1">
                <label class="form-control-label" style="visibility:hidden">Invisible</label>
                <button type="submit" class="btn btn-outline-customs">Select</button>
            </div>
        </div>
    </form>
    <br>
    <form method="post">
        <div class = "form-group row ">
            <div class="col-sm-8">
                <center><h2><b>Requested Courses</b></h2></center>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Course No</th>
                        <th>Course Title</th>
                        <th>Credit</th>
                        <th>Type</th>
                        <th>Approve</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td><input type="checkbox"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group" >
                    <center>
                        <button type="submit" class="btn btn-outline-customs ">Approved</button>
                    </center>
                </div>
            </div>
            <div class="col-sm-4">
                <center><h2><b>Retake list</b></h2></center>
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
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div> <!--content-->