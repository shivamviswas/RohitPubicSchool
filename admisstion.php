<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>


<div class="container-fluid" style=" margin-bottom: 50px">
    <form class="myInput" enctype="multipart/form-data" method="post" action="includes/sudentAdmission.php">
        <div class="container" style="margin-top: 50px ; background-color: whitesmoke ; padding: 0 50px">
            <h2 style=" font-weight: bolder ; font-size: 2em ; color: black">Student Admission form</h2>





            <!--         -->
            <div class="row" style="margin-top: 20px">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="firstName" style="text-transform: capitalize;" type="text" name="firstName"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Middle Name</label>
                        <input id="middleName" style="text-transform: capitalize;" type="text" name="middleName"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Last Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="lastName"
                               class="form-control" required/>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Father's Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="fatherName" style="text-transform: capitalize;" type="text" name="fatherName"
                               class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Email</label>
                        <input id="email" style="text-transform: capitalize;" type="email" name="email"
                               class="form-control"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Mobile Number<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="mobileNumber" style="text-transform: capitalize;" type="number" maxlength="10" name="mobileNumber"
                               class="form-control" required/>
                    </div>
                </div>
            </div>


            <div class="row" >
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Mother's Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="firstName" style="text-transform: capitalize;" type="text" name="motherName"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">City</label>
                        <input id="middleName" style="text-transform: capitalize;" type="text" name="city"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">State<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>

                        <select required name="state" class="form-control" id="state">
                            <option value="Ajmer">Ajmer</option>
                            <option value="Alwer">Alwer</option>
                            <option value="Barmer">Barmer</option>
                            <option value="Bhilwada">Bhilwada</option>
                            <option value="Bikaner">Bikaner</option>
                            <option value="Jaipur">Jaipur</option>
                            <option value="Jodhpur">Jodhpur</option>
                            <option value="Jaisalmer">Jaisalmer</option>
                        </select>


                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Nationality<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="firstName" style="text-transform: capitalize;" type="text" name="nationlity"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Pin</label>
                        <input id="middleName" style="text-transform: capitalize;" type="text" name="pin"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Blood Group
                            <span style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>


                        <select required name="Blood_Group" class="form-control" id="BG">
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Category<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>

                        <select required name="cat" class="form-control" id="category">
                            <option value="Male">GEN.</option>
                            <option value="Male">OBC</option>
                            <option value="Female">ST</option>
                            <option value="Other">SC</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--second row-->




            <!--           third row  -->


            <div class="row" style="">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Complete Address<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <textarea cols="3" rows="5" id="address" style="text-transform: capitalize;" type="text"
                                  name="address" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Date Of Birth<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input required id="DOB" class=" form-control" name="DOB" type="date" placeholder="dd/mm/yyyy"/>
                    </div>

                    <label>Sex<span style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                    <select required name="sex" class="form-control" id="sex">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>



            <!--            section 2-->

            <div class="row" style="">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Father's Qualification<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input  id="address" style="text-transform: capitalize;" type="text"
                                  name="fQualification" class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Mother's Qualification<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input required id="DOB" class=" form-control" name="mQualification" type="text" />
                    </div>
                </div>
            </div>


            <!--            first row-->

            <div class="row" style="">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Father's Occupation<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input  id="address" style="text-transform: capitalize;" type="text"
                                name="fOccupation" class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Mother's Occupation<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input required id="DOB" class=" form-control" name="mOccupation" type="text" />
                    </div>
                </div>
            </div>




            <!-- third -->

            <h5 >Name Of Brother / Sister in this School</h5>

            <div class="row" style="margin-top: 20px">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="firstName" style="text-transform: capitalize;" type="text" name="firstName1"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Class</label>
                        <input id="middleName" style="text-transform: capitalize;" type="text" name="class1"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Section<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="section1"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Medium<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="medium1"
                               class="form-control" required/>
                    </div>
                </div>
            </div>  <div class="row" style="margin-top: 20px">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="firstName" style="text-transform: capitalize;" type="text" name="firstName2"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Class</label>
                        <input id="middleName" style="text-transform: capitalize;" type="text" name="class2"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Section<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="section2"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Medium<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="medium2"

                               class="form-control" required/>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Name<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="firstName" style="text-transform: capitalize;" type="text" name="firstName3"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Class</label>
                        <input id="middleName" style="text-transform: capitalize;" type="text" name="class3"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Section<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="section3"
                               class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Medium<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <input id="lastName" style="text-transform: capitalize;" type="text" name="medium3"

                               class="form-control" required/>
                    </div>
                </div>
            </div>


            <div class="row" style="">
                <div class="col">
                    <div class="form-group">
                        <label class="control-label" style="font-size: 1em">Last School Name and Address<span
                                    style="color: red ; font-weight: bolder ; margin-left: 2px">*</span></label>
                        <textarea cols="3" rows="5" id="address" style="text-transform: capitalize;" type="text"
                                  name="Saddress" class="form-control" required></textarea>
                    </div>
                </div>
            </div>


            <!--        section 3rd -->


            <!------ Include the above in your HEAD tag ---------->


            <div class="row" style="margin-top: 20px">
                <div class="col-md-6">

                    <div class="form-group files">
                        <label>Upload Your Photo </label>
                        <input required type="file" class="form-control" multiple="" name="photo">
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group files color">
                        <label>MarkSheet of last class </label>
                        <input required type="file" class="form-control" multiple="" name="marksheet">
                    </div>

                </div>
            </div>


            <input style="margin: 20px" type="submit" class="btn btn-primary" name="registorButton" id="registorButton" value=" Register"/>


        </div>

        <div class="container">
            <div class="row"
            <div class="container-fluid" style="background-color: whitesmoke ; padding: 10px 60px ; margin-top: 50px">
                <h3 style="text-align: left ; font-weight: bolder">Note's</h3>
                <ul style="text-align: left">
                    <li>First bullet point</li>
                    <li>Second bullet point</li>
                    <li>Third bullet point</li>
                </ul>
            </div>
        </div>
    </form>
</div>



<?php include 'footer.php'; ?>
</body>
</html>