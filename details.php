﻿<?php

session_start();

if($_SESSION["email"]==true)
{

}
else
{
    header("Location: login.html");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="C:\Users\Asus\Documents\HTML\report repo\store.js"></script>
    <style>
    #back_img {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("background6.jfif");
      background-repeat: no-repeat;
      //width: 100%;
      //height: 100%;
      background-size: cover;
      //background-size: 50% 50%;
      //background-color: red;
    }

    body{
      //background-image: url("F:/Extra Study/Documents/project.jfif");
      background-color: aqua;
    }
    .header {
      padding: 5px;
      height: 100px;
      text-align: center;
      background: #1abc9c;
      color: white;
      font-size: 20px;
      }

      form {
        border: 3px solid #f1f1f1;
        border-radius: 10px;
        color: black;
      }

      #grad{
        width: 600px;
      }

      .frstname{
        margin-top: 10px;
        margin-left: 5px;
        display: inline-block;
        border: 2px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      .frstname:focus, .lstname:focus, .Age:focus, .Date:focus, .Contact:focus,
       .blood:focus ,.country:focus, .state:focus, .pin:focus, .addrs:focus{
        background-color: #e0e0d1;
        outline: none;
      }

      .lstname, .Age, .Date, .Contact, .blood, .country, .state, .pin ,.addrs{
        margin-left: 5px;
        display: inline-block;
        border: 2px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      .bttn{
        background-color: #00a950;
        color: white;
        padding: 14px 20px;
        margin-top: 5px;
        margin-left: 172px;
        margin-bottom: 20px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        opacity: 0.8;
        width: 150px;
      }

      .bttn:hover{
        opacity: 1;
      }
    .footer {
      position: relative;
      left: 0;
      bottom: 0;
      height: 50px;
      width: 100%;
      background-color: green;
      color: white;
      text-align: center;
      }
    </style>
  </head>
  <body>
    <div id="back_img">
    <div class="header">
      <img src="lg.jpeg" height="50px" width="50px">
      <p style="font-size:40px; font-family: 'freestyle script'">Report Repository</p>
  </di

    <div class="container" id="grad">
    <div class="heading">
    <h2>Please fill all below credentials</span></h2>
    </div>

    <form action="insert.php" method="post" name="details">
      <!--<div class="imgcontainer">
        <img src="F:\Extra Study\Documents\logo.png" alt="Avatar" class="avatar">
      </div>

      <div class="form-group">
        <label for="uname"><b><span style="margin-left: 18px; font-size: 17px;">Email:</span></b></label>
        <input type="email" placeholder="Enter Email" name="uname" required>
        <br>
      </div>-->

      <div class="form-group">
        <label for="frstname"><b><span style="margin-left: 77px; font-size: 15px;">First Name<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="text" class="frstname" placeholder="First Name" name="frstname" id="fname" required>
        <br>
      </div>

      <div class="form-group">
        <label for="lstname"><b><span style="margin-left: 78px; font-size: 15px;">Last Name<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="text" class="lstname" placeholder="Last Name" name="lstname" id="lname" required>
        <br>
      </div>

      <div class="form-group">
        <label for="gender"><b><span style="margin-left: 101px; font-size: 15px;">Gender<span style="color: #e60000;">*</span>:</span></b></label>
        <span style="margin-left: 5px;"><input type="radio" name="gender" id="gender" value="Male" >Male</span>
        <span style="margin-left: 7px;"><input type="radio" name="gender" id="gender" value="Female">Female</span>
        <span style="margin-left: 7px;"><input type="radio" name="gender" id="gender" value="Other">Other</span>
        <br>
      </div>

      <div class="form-group">
        <label for="Age"><b><span style="margin-left: 124px; font-size: 15px;">Age<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="number" class="Age" name="Age" id="age" value="" min="0" max="100" placeholder="Age" required>
      </div>

      <div class="form-group">
        <label for="Date"><b><span style="margin-left: 60px; font-size: 15px;">Date Of Birth<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="date" class="Date" name="Date" id="date" value="" min="1970-01-4" max="2017-12-30" required>
      </div>

      <div class="form-group">
        <label for="Contact"><b><span style="margin-left: 36px; font-size: 15px;">Contact Number<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="number" class="Contact" name="Contact" value="" id="number" placeholder="Contact No." min="1000000000" max="9999999999" title="10 Digits Required" required>
      </div>

      <div class="form-group">
        <label for="blood"><b><span style="margin-left: 61px; font-size: 15px;">Blood Group<span style="color: #e60000;">*</span>:</span></b></label>
        <input list="blood" class="blood" name="blood" id="grp" placeholder="Blood group" required>
        <datalist id="blood">
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </datalist>
      </div>

        </datalist>
      <div class="form-group">
        <label for="country"><b><span style="margin-left: 95px; font-size: 15px;">Country<span style="color: #e60000;">*</span>:</span></b></label>
        <input list="countries" class="country" id="country" name="countries" placeholder="Country" required>
          <datalist id="countries">
            <option value='Ascension Island'>Ascension Island</option>
            <option value='Andorra'>Andorra</option>
            <option value='United Arab Emirates'>United Arab Emirates</option>
            <option value='Afghanistan'>Afghanistan</option>
            <option value='Antigua And Barbuda'>Antigua And Barbuda</option>
            <option value='Anguilla'>Anguilla</option>
            <option value='Albania'>Albania</option>
            <option value='Armenia'>Armenia</option>
            <option value='Angola'>Angola</option>
            <option value='Antarctica'>Antarctica</option>
            <option value='Argentina'>Argentina</option>
            <option value='American Samoa'>American Samoa</option>
            <option value='Austria'>Austria</option>
            <option value='Australia'>Australia</option>
            <option value='Aruba'>Aruba</option>
            <option value='Åland Islands'>Åland Islands</option>
            <option value='Azerbaijan'>Azerbaijan</option>
            <option value='Bosnia & Herzegovina'>Bosnia & Herzegovina</option>
            <option value='Barbados'>Barbados</option>
            <option value='Bangladesh'>Bangladesh</option>
            <option value='Belgium'>Belgium</option>
            <option value='Burkina Faso'>Burkina Faso</option>
            <option value='Bulgaria'>Bulgaria</option>
            <option value='Bahrain'>Bahrain</option>
            <option value='Burundi'>Burundi</option>
            <option value='Benin'>Benin</option>
            <option value='Saint Barthélemy'>Saint Barthélemy</option>
            <option value='Bermuda'>Bermuda</option>
            <option value='Brunei Darussalam'>Brunei Darussalam</option>
            <option value='Bolivia, Plurinational State Of'>Bolivia, Plurinational State Of</option>
            <option value='Bonaire, Saint Eustatius And Saba'>Bonaire, Saint Eustatius And Saba</option>
            <option value='Brazil'>Brazil</option>
            <option value='Bahamas'>Bahamas</option>
            <option value='Bhutan'>Bhutan</option>
            <option value='Bouvet Island'>Bouvet Island</option>
            <option value='Botswana'>Botswana</option>
            <option value='Belarus'>Belarus</option>
            <option value='Belize'>Belize</option>
            <option value='Canada'>Canada</option>
            <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
            <option value='Democratic Republic Of Congo'>Democratic Republic Of Congo</option>
            <option value='Central African Republic'>Central African Republic</option>
            <option value='Republic Of Congo'>Republic Of Congo</option>
            <option value='Switzerland'>Switzerland</option>
            <option value='Cote d'Ivoire'>Cote d'Ivoire</option>
            <option value='Cook Islands'>Cook Islands</option>
            <option value='Chile'>Chile</option>
            <option value='Cameroon'>Cameroon</option>
            <option value='China'>China</option>
            <option value='Colombia'>Colombia</option>
            <option value='Clipperton Island'>Clipperton Island</option>
            <option value='Costa Rica'>Costa Rica</option>
            <option value='Cuba'>Cuba</option>
            <option value='Cabo Verde'>Cabo Verde</option>
            <option value='Curacao'>Curacao</option>
            <option value='Christmas Island'>Christmas Island</option>
            <option value='Cyprus'>Cyprus</option>
            <option value='Czech Republic'>Czech Republic</option>
            <option value='Germany'>Germany</option>
            <option value='Diego Garcia'>Diego Garcia</option>
            <option value='Djibouti'>Djibouti</option>
            <option value='Denmark'>Denmark</option>
            <option value='Dominica'>Dominica</option>
            <option value='Dominican Republic'>Dominican Republic</option>
            <option value='Algeria'>Algeria</option>
            <option value='Ceuta, Mulilla'>Ceuta, Mulilla</option>
            <option value='Ecuador'>Ecuador</option>
            <option value='Estonia'>Estonia</option>
            <option value='Egypt'>Egypt</option>
            <option value='Western Sahara'>Western Sahara</option>
            <option value='Eritrea'>Eritrea</option>
            <option value='Spain'>Spain</option>
            <option value='Ethiopia'>Ethiopia</option>
            <option value='European Union'>European Union</option>
            <option value='Finland'>Finland</option>
            <option value='Fiji'>Fiji</option>
            <option value='Falkland Islands'>Falkland Islands</option>
            <option value='Micronesia, Federated States Of'>Micronesia, Federated States Of</option>
            <option value='Faroe Islands'>Faroe Islands</option>
            <option value='France'>France</option>
            <option value='France, Metropolitan'>France, Metropolitan</option>
            <option value='Gabon'>Gabon</option>
            <option value='United Kingdom'>United Kingdom</option>
            <option value='Grenada'>Grenada</option>
            <option value='Georgia'>Georgia</option>
            <option value='French Guiana'>French Guiana</option>
            <option value='Guernsey'>Guernsey</option>
            <option value='Ghana'>Ghana</option>
            <option value='Gibraltar'>Gibraltar</option>
            <option value='Greenland'>Greenland</option>
            <option value='Gambia'>Gambia</option>
            <option value='Guinea'>Guinea</option>
            <option value='Guadeloupe'>Guadeloupe</option>
            <option value='Equatorial Guinea'>Equatorial Guinea</option>
            <option value='Greece'>Greece</option>
            <option value='South Georgia And The South Sandwich Islands'>South Georgia And The South Sandwich Islands</option>
            <option value='Guatemala'>Guatemala</option>
            <option value='Guam'>Guam</option>
            <option value='Guinea-bissau'>Guinea-bissau</option>
            <option value='Guyana'>Guyana</option>
            <option value='Hong Kong'>Hong Kong</option>
            <option value='Heard Island And McDonald Islands'>Heard Island And McDonald Islands</option>
            <option value='Honduras'>Honduras</option>
            <option value='Croatia'>Croatia</option>
            <option value='Haiti'>Haiti</option>
            <option value='Hungary'>Hungary</option>
            <option value='Canary Islands'>Canary Islands</option>
            <option value='Indonesia'>Indonesia</option>
            <option value='Ireland'>Ireland</option>
            <option value='Israel'>Israel</option>
            <option value='Isle Of Man'>Isle Of Man</option>
            <option value='India'>India</option>
            <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
            <option value='Iraq'>Iraq</option>
            <option value='Iran, Islamic Republic Of'>Iran, Islamic Republic Of</option>
            <option value='Iceland'>Iceland</option>
            <option value='Italy'>Italy</option>
            <option value='Jersey'>Jersey</option>
            <option value='Jamaica'>Jamaica</option>
            <option value='Jordan'>Jordan</option>
            <option value='Japan'>Japan</option>
            <option value='Kenya'>Kenya</option>
            <option value='Kyrgyzstan'>Kyrgyzstan</option>
            <option value='Cambodia'>Cambodia</option>
            <option value='Kiribati'>Kiribati</option>
            <option value='Comoros'>Comoros</option>
            <option value='Saint Kitts And Nevis'>Saint Kitts And Nevis</option>
            <option value='Korea, Democratic People's Republic Of'>Korea, Democratic People's Republic Of</option>
            <option value='Korea, Republic Of'>Korea, Republic Of</option>
            <option value='Kuwait'>Kuwait</option>
            <option value='Cayman Islands'>Cayman Islands</option>
            <option value='Kazakhstan'>Kazakhstan</option>
            <option value='Lao People's Democratic Republic'>Lao People's Democratic Republic</option>
            <option value='Lebanon'>Lebanon</option>
            <option value='Saint Lucia'>Saint Lucia</option>
            <option value='Liechtenstein'>Liechtenstein</option>
            <option value='Sri Lanka'>Sri Lanka</option>
            <option value='Liberia'>Liberia</option>
            <option value='Lesotho'>Lesotho</option>
            <option value='Lithuania'>Lithuania</option>
            <option value='Luxembourg'>Luxembourg</option>
            <option value='Latvia'>Latvia</option>
            <option value='Libya'>Libya</option>
            <option value='Morocco'>Morocco</option>
            <option value='Monaco'>Monaco</option>
            <option value='Moldova'>Moldova</option>
            <option value='Montenegro'>Montenegro</option>
            <option value='Saint Martin'>Saint Martin</option>
            <option value='Madagascar'>Madagascar</option>
            <option value='Marshall Islands'>Marshall Islands</option>
            <option value='Macedonia, The Former Yugoslav Republic Of'>Macedonia, The Former Yugoslav Republic Of</option>
            <option value='Mali'>Mali</option>
            <option value='Myanmar'>Myanmar</option>
            <option value='Mongolia'>Mongolia</option>
            <option value='Macao'>Macao</option>
            <option value='Northern Mariana Islands'>Northern Mariana Islands</option>
            <option value='Martinique'>Martinique</option>
            <option value='Mauritania'>Mauritania</option>
            <option value='Montserrat'>Montserrat</option>
            <option value='Malta'>Malta</option>
            <option value='Mauritius'>Mauritius</option>
            <option value='Maldives'>Maldives</option>
            <option value='Malawi'>Malawi</option>
            <option value='Mexico'>Mexico</option>
            <option value='Malaysia'>Malaysia</option>
            <option value='Mozambique'>Mozambique</option>
            <option value='Namibia'>Namibia</option>
            <option value='New Caledonia'>New Caledonia</option>
            <option value='Niger'>Niger</option>
            <option value='Norfolk Island'>Norfolk Island</option>
            <option value='Nigeria'>Nigeria</option>
            <option value='Nicaragua'>Nicaragua</option>
            <option value='Netherlands'>Netherlands</option>
            <option value='Norway'>Norway</option>
            <option value='Nepal'>Nepal</option>
            <option value='Nauru'>Nauru</option>
            <option value='Niue'>Niue</option>
            <option value='New Zealand'>New Zealand</option>
            <option value='Oman'>Oman</option>
            <option value='Panama'>Panama</option>
            <option value='Peru'>Peru</option>
            <option value='French Polynesia'>French Polynesia</option>
            <option value='Papua New Guinea'>Papua New Guinea</option>
            <option value='Philippines'>Philippines</option>
            <option value='Pakistan'>Pakistan</option>
            <option value='Poland'>Poland</option>
            <option value='Saint Pierre And Miquelon'>Saint Pierre And Miquelon</option>
            <option value='Pitcairn'>Pitcairn</option>
            <option value='Puerto Rico'>Puerto Rico</option>
            <option value='Palestinian Territory, Occupied'>Palestinian Territory, Occupied</option>
            <option value='Portugal'>Portugal</option>
            <option value='Palau'>Palau</option>
            <option value='Paraguay'>Paraguay</option>
            <option value='Qatar'>Qatar</option>
            <option value='Reunion'>Reunion</option>
            <option value='Romania'>Romania</option>
            <option value='Serbia'>Serbia</option>
            <option value='Russian Federation'>Russian Federation</option>
            <option value='Rwanda'>Rwanda</option>
            <option value='Saudi Arabia'>Saudi Arabia</option>
            <option value='Solomon Islands'>Solomon Islands</option>
            <option value='Seychelles'>Seychelles</option>
            <option value='Sudan'>Sudan</option>
            <option value='Sweden'>Sweden</option>
            <option value='Singapore'>Singapore</option>
            <option value='Saint Helena, Ascension And Tristan Da Cunha'>Saint Helena, Ascension And Tristan Da Cunha</option>
            <option value='Slovenia'>Slovenia</option>
            <option value='Svalbard And Jan Mayen'>Svalbard And Jan Mayen</option>
            <option value='Slovakia'>Slovakia</option>
            <option value='Sierra Leone'>Sierra Leone</option>
            <option value='San Marino'>San Marino</option>
            <option value='Senegal'>Senegal</option>
            <option value='Somalia'>Somalia</option>
            <option value='Suriname'>Suriname</option>
            <option value='South Sudan'>South Sudan</option>
            <option value='São Tomé and Príncipe'>São Tomé and Príncipe</option>
            <option value='USSR'>USSR</option>
            <option value='El Salvador'>El Salvador</option>
            <option value='Sint Maarten'>Sint Maarten</option>
            <option value='Syrian Arab Republic'>Syrian Arab Republic</option>
            <option value='Swaziland'>Swaziland</option>
            <option value='Tristan de Cunha'>Tristan de Cunha</option>
            <option value='Turks And Caicos Islands'>Turks And Caicos Islands</option>
            <option value='Chad'>Chad</option>
            <option value='French Southern Territories'>French Southern Territories</option>
            <option value='Togo'>Togo</option>
            <option value='Thailand'>Thailand</option>
            <option value='Tajikistan'>Tajikistan</option>
            <option value='Tokelau'>Tokelau</option>
            <option value='Timor-Leste, Democratic Republic of'>Timor-Leste, Democratic Republic of</option>
            <option value='Turkmenistan'>Turkmenistan</option>
            <option value='Tunisia'>Tunisia</option>
            <option value='Tonga'>Tonga</option>
            <option value='Turkey'>Turkey</option>
            <option value='Trinidad And Tobago'>Trinidad And Tobago</option>
            <option value='Tuvalu'>Tuvalu</option>
            <option value='Taiwan'>Taiwan</option>
            <option value='Tanzania, United Republic Of'>Tanzania, United Republic Of</option>
            <option value='Ukraine'>Ukraine</option>
            <option value='Uganda'>Uganda</option>
            <option value='United Kingdom'>United Kingdom</option>
            <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
            <option value='United States'>United States</option>
            <option value='Uruguay'>Uruguay</option>
            <option value='Uzbekistan'>Uzbekistan</option>
            <option value='Vatican City State'>Vatican City State</option>
            <option value='Saint Vincent And The Grenadines'>Saint Vincent And The Grenadines</option>
            <option value='Venezuela, Bolivarian Republic Of'>Venezuela, Bolivarian Republic Of</option>
            <option value='Virgin Islands (British)'>Virgin Islands (British)</option>
            <option value='Virgin Islands (US)'>Virgin Islands (US)</option>
            <option value='Viet Nam'>Viet Nam</option>
            <option value='Vanuatu'>Vanuatu</option>
            <option value='Wallis And Futuna'>Wallis And Futuna</option>
            <option value='Samoa'>Samoa</option>
            <option value='Yemen'>Yemen</option>
            <option value='Mayotte'>Mayotte</option>
            <option value='South Africa'>South Africa</option>
            <option value='Zambia'>Zambia</option>
            <option value='Zimbabwe'>Zimbabwe</option>
          </datalist>
      </div>

      <div class="form-group">
        <label for="state"><b><span style="margin-left: 116px; font-size: 15px;">State<span style="color: #e60000;">*</span>:</span></b></label>
        <input list="state" class="state" id="state" name="state" placeholder="State" required>
        <datalist id="state">
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Orissa">Orissa</option>
          <option value="Pondicherry">Pondicherry</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttaranchal">Uttaranchal</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="West Bengal">West Bengal</option>
        </datalist>
      </div>

      <div class="form-group">
        <label for="pin"><b><span style="margin-left: 90px; font-size: 15px;">Pin code<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="number" class="pin" name="pin" id="pin" value="" placeholder="Pincode..." required>
      </div>

      <div class="form-group">
        <label for="addrs"><b><span style="margin-left: 92px; font-size: 15px;">Address<span style="color: #e60000;">*</span>:</span></b></label>
        <input type="text" class="addrs" name="addrs" id="adress" value="" placeholder="Address">
      </div>

      <span style="margin-left: 173px; font-size: 14px;"><input type="checkbox" onclick="" required>I hereby declare that the details furnished
         above<br><span style="margin-left: 187px;"> are <b>True</b> and <b>Correct</b>.</span> </span><br>
        <button type="submit" class="bttn" onclick="aa()"><span style="font-size: 17px;">Submit</span></button>

    </form>
    </div>


  </body>
</html>
