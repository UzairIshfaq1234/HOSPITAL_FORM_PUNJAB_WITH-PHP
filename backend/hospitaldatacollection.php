<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hospital_Css.css">
    <link rel=icon href="img12112.png">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300&display=swap" rel="stylesheet">


    <title>HMIS|Add user</title>
</head>

<body>
    <?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cnicdata = $_POST['cnicdata221'];
        $fullnamedata = $_POST['fullnamedata'];

        $selecthospital = $_POST['selecthospital121'];
        $selectrole = $_POST['selectrole'];

        $usernamedata = $_POST['usernamedata'];
        $passworddata = $_POST['passworddata'];

        $confirmpassword = $_POST['confirmpassword'];
        $contactnumberdata = $_POST['contactnumberdata'];

        $activedata = $_POST['activedata'];
        $noteuser = $_POST['noteuser'];


        //connection data

        $server_name = "localhost";
        $server_username = "root";
        $server_password = "";
        $active_database = "patient";

      

        if ($passworddata == $confirmpassword) {
            $conn = mysqli_connect($server_name, $server_username, $server_password, $active_database);
            if ($conn) {

                // $sqlinseartdata = "INSERT INTO `patientsrecords` (`Cnic`, `Full Name`, `Hospital`, `Role`, `User Name`, `Password`, `Contact Number`, `Status`, `Note`) VALUES (' $cnicdata10', '$fullnamedata', '$selecthospital121', '$selectrole', '$usernamedata', '$passworddata', '$contactnumberdata ', '$activedata', '$noteuser');";

                $sql="INSERT INTO `hopi` (`Cnic`, `Fullname`, `hospital`, `role`, `username`, `password`, `contactnumber`, `state`, `note`) VALUES ('$cnicdata','$fullnamedata','$selecthospital','$selectrole','$usernamedata','$passworddata','$contactnumberdata','$activedata','$noteuser');";

                $dataenterycheck = mysqli_query($conn, $sql);
                echo "The data was inserted successfully1!<br>";

                if ($dataenterycheck) {
                    echo "The data was inserted successfully!<br>";
                } else {
                    echo "The data was not inserted successfully because of this error ---> " . mysqli_error($conn);
                }
            } else {

                echo "
            server not connected!";
            }
        } else {
            echo "Password does not match!";
        }
    }


    ?>
    <div class="fullformadding">
        <div class="header">

            <img src="img12112.png" alt="hospital_ADD_user" class="top_image_hospital">
            <div class="data_head_head1">

                <h3 class="first_add_head">GOVERMENT OF PUNJAB</h3><br>
                <p id="do1" class="data2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere delectus qui
                    distinctio
                    harum, eligendi animi ratione at reprehenderit pariatur blanditiis?</p>
            </div>
        </div>


        <div class="formcontainer">
            <form action="\hospital_form\sqlforform.php" method="POST">


                <!-- ##############################################################################################3 -->
                <div class="cnic_full_name_post">

                    <div class="cnic_post">
                        <!-- CNIC DATA----LABEL AND INPUT----! -->
                        <label class="cnic_label">CNIC</label><br>
                        <input type="text" name="cnicdata221" placeholder="Enter Your CNIC" id="cnicdata221" class="cnic_data_entry" required>
                    </div>

                    <div class="fullnmae_post">
                        <!-- FULL NAME DATA----LABEL AND INPUT----! -->
                        <label class="Full_name_label">Full Name</label><br>
                        <input type="text" name="fullnamedata" placeholder="Enter FULL Name" id="fullnamedata" class="full_name_data_entry" required>
                    </div>
                </div>



                <!-- ##############################################################################################3 -->

                <div class="selection_of_data_post">



                    <!-- HOSPITAL NAME DATA----SELECTION----! -->
                    <div class="hospital_post">


                        <div class="selecting_hospital_data">
                            <label class="label_selecting_hospital">Hospital Name</label>
                            <br>
                            <select name="selecthospital121" class="selecting_hospital" required>
                                <option hidden >Select_Hospital</option>
                                <option value="paf">PAF_Hospital</option>
                                <option value="Shifa">Shifa_Hosptial</option>
                                <option value="Foji">Foji_Foundation</option>
                                <option value="Memorial">Memorial_Hospital</option>
                                <option value="Jinnah">Jinnah_Hospital</option>
                                <option value="Indus">Indus_Hospital</option>
                            </select>
                        </div>

                    </div>

                    <!-- ROLE NAME DATA----SELECTION----! -->

                    <div class="selecting_post">

                        <div class="selecting_role_data">
                            <label class="label_selecting_role">Role</label>
                            <br>
                            <select name="selectrole" class="selecting_role " required>
                                <option hidden value="">Select_Role</option>
                                <option value="hospitalstaff">Hospital_Staff</option>
                                <option value="Shuhda">Shuhda_family</option>
                                <option value="Serving">Serving_Person</option>
                                <option value="Retired">Retired_Person</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- ##############################################################################################3 -->

                <div class="usernmae_password_data_post">

                    <div class="uernamepost">

                        <!-- USER NAME DATA----LABEL AND INPUT----! -->
                        <label class="username_label">UserName</label><br>
                        <input type="text" name="usernamedata" placeholder="Enter Your Username" id="usernamedata" class="username_data_entry" required>

                    </div>

                    <div class="password_post">

                        <!-- PASSWORD  DATA----LABEL AND INPUT----! -->
                        <label class="password_label">Password</label><br>
                        <input type="text" name="passworddata" placeholder="Enter Your Password" id="passworddata" class="password_data_entry" required>
                    </div>


                </div>


                <!-- ##############################################################################################3 -->

                <div class="confirm_passord_contact_post">

                    <div class="confirm_password_post">

                        <!-- CONFIRM PASSWORD DATA----LABEL AND INPUT----! -->
                        <label class="confirmpassword_label">Confirm Password</label><br>
                        <input type="text" name="confirmpassword" placeholder="Enter Confirm Password" id="confirmpassword" class="confirmpassword_data_entry" required>
                    </div>

                    <div class="contact_number_post">
                        <!-- PASSWORD  DATA----LABEL AND INPUT----! -->
                        <label class="contactnumber_label">Contact Number</label><br>
                        <input type="text" name="contactnumberdata" placeholder="Enter Contact Number" id="contactnumberdata" class="contactnumber_data_entry" required>
                    </div>

                </div>
                <!-- ##############################################################################################3 -->

                <!-- ACTIVE STATUS  DATA----LABEL AND INPUT----! -->


                <div class="status_data">
                    <label class="status">Status</label> <br>
                    <div class="radiobutton_status">
                        <input type="radio" name="activedata" value="active" id="activedata" class="active_data_entry">
                        <label for="Active">Active</label>
                        <input type="radio" name="activedata" value="notactive" id="activedata" class="In-Active_data_entry">
                        <label for="In-Active">In-Active</label>

                    </div>
                </div>

                <!-- ##############################################################################################3 -->

                <!-- NOTES DATA----LABEL AND INPUT----! -->
                <div class="notes_form_user">
                    <label for="note">Notes</label><br>
                    <textarea class=" note_box" name="noteuser" id="noteuser" cols="133" rows="4"></textarea>
                </div>
                <!-- ##############################################################################################3 -->

                <!-- upload DATA----LABEL AND INPUT----! -->
                <div class="upload_user_picture">
                    <label class="note">Upload Picture</label><br>
                    <input class="upload_button" type="file">
                </div>
                <!-- ##############################################################################################3 -->

                <!-- <input type="submit" class="submit">
                <div class="buttons_submit_cancle">

                    <button class="submit">Submit</button>
                    <button class="cancle">Cancle</button>

                </div> -->

                <input type="submit" class="submit">
                <input type="reset" class="cancle">












            </form>
        </div>

    </div>
    <div class="copywrite">
        <p class="copytext">
            © Copyright 2021 <span class="dark"> Dark-Coders</span><br>All rights reserved.
        </p>
    </div>
</body>

</html>