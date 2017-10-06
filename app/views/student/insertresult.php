    <div class="content">
    <header>
        <center><h1>Input Result</h1></center>
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
        <div class="form-group row">
            <label class="form-control-label col-md-3">Date</label>
            <input type="date" id="date" name="date" class = "col-md-6" readonly="readonly">
        </div>
        <div class = "form-group row ">
            <div class="col-md-12">
                <center><h2><b>Update Result</b></h2></center>
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
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td>
                                <select>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td>
                                <select>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td>
                                <select>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>CSE 1102</td>
                            <td>Structured programming</td>
                            <td>3.0</td>
                            <td>Freash</td>
                            <td>
                                <select>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                    <option>A+</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="form-group row">
                    <label class = "col-md-2"></label>
                    <label class="form-control-label col-md-3">Taken Credit</label>
                    <input type="text" placeholder="value" class = "col-md-3" readonly="readonly">
                </div>
                <div class="form-group row">
                    <label class = "col-md-2"></label>
                    <label class="form-control-label col-md-3">Completed credit</label>
                    <input type="text"  placeholder="value" class = "col-md-3" readonly="readonly">
                </div>
                <div class="form-group row">
                    <label class = "col-md-2"></label>
                    <label class="form-control-label col-md-3">TGPA</label>
                    <input type="text" placeholder = "value" class = "col-md-3" readonly="readonly">
                </div>
                <div class="form-group" >
                    <center>
                        <button type="submit" class="btn btn-outline-customs ">Update</button>
                    </center>
                </div>
            </div>
        </div>
    </form>
</div> <!--content-->