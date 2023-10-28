<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- SignUP FORM -->

<form action="registrationProcess.php" method="post">
<div class="profpic" id="profpic">
    <label for="uploadImage">

    <img id="preview" src="https://i.pinimg.com/originals/0a/5f/ea/0a5feae400fc816c4ca2aca8bd67a168.jpg" alt="" style="max-width: 300px; max-height: 300px; cursor: pointer;">

    </label>
    <!-- The label will trigger the file input when clicked -->
    <input type="file" name="imageUser" accept="image/*" id="uploadImage" style="display: none;">
    <input type="submit" value="Upload" style="display: none;">
    <p>Select your Profile Picture</p>
    <div id='profpic-message' class="alert-message"></div>
</div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#uploadForm").on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        $("#profpic-message").html(response);
                    }
                });
            });
        });
    </script>

<input autocomplete="off" spellcheck="false" class="control" type="text" id="name" name="fullNameUser" placeholder="Username" />

<select name="countryCodeUser" id="countryCode" class="control countryCode" disabled>
    <option value="+880">+880 (BD)</option>
</select>
<input autocomplete="off" spellcheck="false" class="control mobileNumber" type="tel" id="mobile_number" name="mobile_numberUser" placeholder="Mobile Number" />


<select name="genderUser" id="gender" class="control gender">
    <option value="">Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
</select>


<select name="gradeUser" id="grade" class="control grade">
    <option value="">Select Grade or Level</option>
    <option value="eleven">Eleven</option>
    <option value="twelve">twelve</option>
    <option value="modelTest">Model Test</option>
    <option value="admission">Admission</option>
</select>

<select name="religionUser" id="religion" class="control religion">
    <option value="">Select Religion</option>
    <option value="islam">Islam</option>
    <option value="hinduism">Hinduism</option>
    <option value="christianity">Christianity</option>
    <option value="buddhism">Buddhism</option>
    <option value="other">Other</option>
</select>

<select name="districtUser" id="district" class="control district">
    <option value="">Select District</option>
    <option value="bagerhat">Bagerhat</option>
    <option value="bandarban">Bandarban</option>
    <option value="barguna">Barguna</option>
    <option value="barisal">Barisal</option>
    <option value="bhola">Bhola</option>
    <option value="bogra">Bogra</option>
    <option value="brahmanbaria">Brahmanbaria</option>
    <option value="chandpur">Chandpur</option>
    <option value="chapainawabganj">Chapainawabganj</option>
    <option value="chittagong">Chittagong</option>
    <option value="chuadanga">Chuadanga</option>
    <option value="coxsBazar">Cox's Bazar</option>
    <option value="cumilla">Cumilla</option>
    <option value="dhaka">Dhaka</option>
    <option value="dinajpur">Dinajpur</option>
    <option value="faridpur">Faridpur</option>
    <option value="feni">Feni</option>
    <option value="gaibandha">Gaibandha</option>
    <option value="gazipur">Gazipur</option>
    <option value="gopalganj">Gopalganj</option>
    <option value="habiganj">Habiganj</option>
    <option value="jamalpur">Jamalpur</option>
    <option value="jessore">Jessore</option>
    <option value="jhalokathi">Jhalokathi</option>
    <option value="jhenaidah">Jhenaidah</option>
    <option value="joypurhat">Joypurhat</option>
    <option value="khagrachhari">Khagrachhari</option>
    <option value="khulna">Khulna</option>
    <option value="kishoreganj">Kishoreganj</option>
    <option value="kurigram">Kurigram</option>
    <option value="kushtia">Kushtia</option>
    <option value="lakshmipur">Lakshmipur</option>
    <option value="lalmonirhat">Lalmonirhat</option>
    <option value="madaripur">Madaripur</option>
    <option value="magura">Magura</option>
    <option value="manikganj">Manikganj</option>
    <option value="meherpur">Meherpur</option>
    <option value="moulvibazar">Moulvibazar</option>
    <option value="munshiganj">Munshiganj</option>
    <option value="mymensingh">Mymensingh</option>
    <option value="naogaon">Naogaon</option>
    <option value="narail">Narail</option>
    <option value="narayanganj">Narayanganj</option>
    <option value="narsingdi">Narsingdi</option>
    <option value="natore">Natore</option>
    <option value="netrokona">Netrokona</option>
    <option value="nilphamari">Nilphamari</option>
    <option value="noakhali">Noakhali</option>
    <option value="pabna">Pabna</option>
    <option value="panchagarh">Panchagarh</option>
    <option value="patuakhali">Patuakhali</option>
    <option value="pirojpur">Pirojpur</option>
    <option value="rajbari">Rajbari</option>
    <option value="rajshahi">Rajshahi</option>
    <option value="rangamati">Rangamati</option>
    <option value="rangpur">Rangpur</option>
    <option value="satkhira">Satkhira</option>
    <option value="shariatpur">Shariatpur</option>
    <option value="sherpur">Sherpur</option>
    <option value="sirajganj">Sirajganj</option>
    <option value="sunamganj">Sunamganj</option>
    <option value="sylhet">Sylhet</option>
    <option value="tangail">Tangail</option>
    <option value="thakurgaon">Thakurgaon</option>
</select>


<input autocomplete="off" spellcheck="false" class="control" type="email" id="email" name="emailUser" placeholder="Email" />


<input spellcheck="false" class="control" id="password" name="passwordUser" type="password" placeholder="Password" />

<input spellcheck="false" class="control" id="confirm-password" type="password" placeholder="Confirm Password" name="confirm_passwordUser" />


<button type="submit" class="btn signup-btn" id="signup-btn">
    <p>JOIN NOW</p>
</button>
</form>        

 




<!-- SIgnIN FORM -->
<form action="loginProcess.php" method="post">

<input autocomplete="off" spellcheck="false" class="control" type="email" name="email" placeholder="Email"/>
<input spellcheck="false" class="control" id="password-1" type="password" name="password" placeholder="Password" onkeyup="handleChange()" />

<button type="submit" class="btn signin-btn" id="signin-btn">
    <p>Login</p>
</button>

</form>



</body>
</html>