<?php
session_start();
// if(isset($_SESSION['user'])=="")
// {
//   header("Location: sign-in.php");
// }
include_once 'mysql_connect.php';

if(isset($_POST['btn-submit']))
{
  $title = mysqli_real_escape_string($link, $_POST['title']);
  $country = mysqli_real_escape_string($link,$_POST['country']);
  $pracDesc = mysqli_real_escape_string($link,$_POST['pracDesc']);
  $category1 = mysqli_real_escape_string($link,$_POST['category1']);

    // if(isset($_POST['category2'])!="") 
    //     { 
    //           $category2 = mysqli_real_escape_string($link,$_POST['category2']); 
    //     }

    //     if(isset($_POST['category3'])!="") 
    //     { 
    //           $category2 = mysqli_real_escape_string($link,$_POST['category3']); 
    //     }

    $category2 = mysqli_real_escape_string($link,$_POST['category2']); 
    
    $category3 = mysqli_real_escape_string($link,$_POST['category3']); 
    

  ///$category2 = mysqli_real_escape_string($link,$_POST['category2']);
  $url = mysqli_real_escape_string($link,$_POST['url']);
  

  $title = trim($title);
  $country = trim($country);
  $pracDesc = trim($pracDesc);
  $category1 = trim($category1);

  if ($category2!="") {
    $cat2=trim($category2);
      
  }
  if ($category3!="") {
      $cat2=trim($category3);
  }
  $category2 = trim($category2);
  $url = trim($url);

  require_once('mysql_connect.php');

  $userquery ="SELECT * FROM user WHERE userID=".$_SESSION['user'];
  $userres=mysqli_query($link,$userquery);
  $userRow=mysqli_fetch_array($userres, MYSQLI_ASSOC);

  $userID = $userRow['userID'];


  if(mysqli_query($link,"INSERT INTO practices(userID,categoryID,typeID,pracName,pracDesc,pracCountry,pracPicture) VALUES('$userID','$category1','$cat2','$title','$pracDesc','$country','$url')"))
  {
      ?>
      <script>alert('Successfully insert! Thank you for your contribution.');</script>
      <?php
  }
  else
  {
      ?>
      <script>alert('Error while inserting.');</script>
      <?php
  }   

}
?>

<?php 

$page_title = 'Add new culture';
include_once('header.php'); 

?>
<!-- About Section -->
<section class="addnew" id="about">
	<div class="container">

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center" id="introtext">
				<p>All the definitions on Culture Fever were written by people just like you. Now's your chance to add your own!</p>
			</div>
		</div>

		
        <div class="row">
         <div class="col-lg-8 col-lg-offset-2">
          <form  class="form-horizontal sign-in" method="POST">		

            <div class="ui form">
                <div class="field">
                    <label>What kind of social interaction you want to write about? Give a short title.</label>
                    <input type="text" name="title" placeholder="" value="<?php if(isset($_POST['title'])) { echo $_POST['title']; } ?>" required><span class="help-block"><strong></strong></span>
                </div>
            </div>
            <br>

            <div class="ui form"><div class="field"><label>Where is this social interaction happening?</label></div></div>

            <div class="ui fluid search selection dropdown dd">
              <input type="hidden" name="country">
              <i class="dropdown icon"></i>
              <div class="default text">Select a country</div>
              <div class="menu">
                <div class="item" data-value="Afghanistan"><i class="af flag"></i>Afghanistan</div>
                <div class="item" data-value="Aland Islands"><i class="ax flag"></i>Aland Islands</div>
                <div class="item" data-value="Albania"><i class="al flag"></i>Albania</div>
                <div class="item" data-value="Algeria"><i class="dz flag"></i>Algeria</div>
                <div class="item" data-value="American Samoa"><i class="as flag"></i>American Samoa</div>
                <div class="item" data-value="Andorra"><i class="ad flag"></i>Andorra</div>
                <div class="item" data-value="Angola"><i class="ao flag"></i>Angola</div>
                <div class="item" data-value="Anguilla"><i class="ai flag"></i>Anguilla</div>
                <div class="item" data-value="Antigua"><i class="ag flag"></i>Antigua</div>
                <div class="item" data-value="Argentina"><i class="ar flag"></i>Argentina</div>
                <div class="item" data-value="Armenia"><i class="am flag"></i>Armenia</div>
                <div class="item" data-value="Aruba"><i class="aw flag"></i>Aruba</div>
                <div class="item" data-value="Australia"><i class="au flag"></i>Australia</div>
                <div class="item" data-value="Austria"><i class="at flag"></i>Austria</div>
                <div class="item" data-value="Azerbaijan"><i class="az flag"></i>Azerbaijan</div>
                <div class="item" data-value="Bahamas"><i class="bs flag"></i>Bahamas</div>
                <div class="item" data-value="Bahrain"><i class="bh flag"></i>Bahrain</div>
                <div class="item" data-value="Bangladesh"><i class="bd flag"></i>Bangladesh</div>
                <div class="item" data-value="Barbados"><i class="bb flag"></i>Barbados</div>
                <div class="item" data-value="Belarus"><i class="by flag"></i>Belarus</div>
                <div class="item" data-value="Belgium"><i class="be flag"></i>Belgium</div>
                <div class="item" data-value="Belize"><i class="bz flag"></i>Belize</div>
                <div class="item" data-value="Benin"><i class="bj flag"></i>Benin</div>
                <div class="item" data-value="Bermuda"><i class="bm flag"></i>Bermuda</div>
                <div class="item" data-value="Bhutan"><i class="bt flag"></i>Bhutan</div>
                <div class="item" data-value="Bolivia"><i class="bo flag"></i>Bolivia</div>
                <div class="item" data-value="Bosnia"><i class="ba flag"></i>Bosnia</div>
                <div class="item" data-value="Botswana"><i class="bw flag"></i>Botswana</div>
                <div class="item" data-value="Bouvet Island"><i class="bv flag"></i>Bouvet Island</div>
                <div class="item" data-value="Brazil"><i class="br flag"></i>Brazil</div>
                <div class="item" data-value="British Virgin Islands"><i class="vg flag"></i>British Virgin Islands</div>
                <div class="item" data-value="Brunei"><i class="bn flag"></i>Brunei</div>
                <div class="item" data-value="Bulgaria"><i class="bg flag"></i>Bulgaria</div>
                <div class="item" data-value="Burkina Faso"><i class="bf flag"></i>Burkina Faso</div>
                <div class="item" data-value="Burma"><i class="mm flag"></i>Burma</div>
                <div class="item" data-value="Burundi"><i class="bi flag"></i>Burundi</div>
                <div class="item" data-value="Caicos Islands"><i class="tc flag"></i>Caicos Islands</div>
                <div class="item" data-value="Cambodia"><i class="kh flag"></i>Cambodia</div>
                <div class="item" data-value="Cameroon"><i class="cm flag"></i>Cameroon</div>
                <div class="item" data-value="Canada"><i class="ca flag"></i>Canada</div>
                <div class="item" data-value="Cape Verde"><i class="cv flag"></i>Cape Verde</div>
                <div class="item" data-value="Cayman Islands"><i class="ky flag"></i>Cayman Islands</div>
                <div class="item" data-value="Central African Republic"><i class="cf flag"></i>Central African Republic</div>
                <div class="item" data-value="Chad"><i class="td flag"></i>Chad</div>
                <div class="item" data-value="Chile"><i class="cl flag"></i>Chile</div>
                <div class="item" data-value="China"><i class="cn flag"></i>China</div>
                <div class="item" data-value="Christmas Island"><i class="cx flag"></i>Christmas Island</div>
                <div class="item" data-value="Cocos Islands"><i class="cc flag"></i>Cocos Islands</div>
                <div class="item" data-value="Colombia"><i class="co flag"></i>Colombia</div>
                <div class="item" data-value="Comoros"><i class="km flag"></i>Comoros</div>
                <div class="item" data-value="Congo Brazzaville"><i class="cg flag"></i>Congo Brazzaville</div>
                <div class="item" data-value="Congo"><i class="cd flag"></i>Congo</div>
                <div class="item" data-value="Cook Islands"><i class="ck flag"></i>Cook Islands</div>
                <div class="item" data-value="Costa Rica"><i class="cr flag"></i>Costa Rica</div>
                <div class="item" data-value="Cote Divoire"><i class="ci flag"></i>Cote Divoire</div>
                <div class="item" data-value="Croatia"><i class="hr flag"></i>Croatia</div>
                <div class="item" data-value="Cuba"><i class="cu flag"></i>Cuba</div>
                <div class="item" data-value="Cyprus"><i class="cy flag"></i>Cyprus</div>
                <div class="item" data-value="Czech Republic"><i class="cz flag"></i>Czech Republic</div>
                <div class="item" data-value="Denmark"><i class="dk flag"></i>Denmark</div>
                <div class="item" data-value="Djibouti"><i class="dj flag"></i>Djibouti</div>
                <div class="item" data-value="Dominica"><i class="dm flag"></i>Dominica</div>
                <div class="item" data-value="Dominican Republic"><i class="do flag"></i>Dominican Republic</div>
                <div class="item" data-value="Ecuador"><i class="ec flag"></i>Ecuador</div>
                <div class="item" data-value="Egypt"><i class="eg flag"></i>Egypt</div>
                <div class="item" data-value="El Salvador"><i class="sv flag"></i>El Salvador</div>
                <div class="item" data-value="England"><i class="gb flag"></i>England</div>
                <div class="item" data-value="Equatorial Guinea"><i class="gq flag"></i>Equatorial Guinea</div>
                <div class="item" data-value="Eritrea"><i class="er flag"></i>Eritrea</div>
                <div class="item" data-value="Estonia"><i class="ee flag"></i>Estonia</div>
                <div class="item" data-value="Ethiopia"><i class="et flag"></i>Ethiopia</div>
                <div class="item" data-value="European Union"><i class="eu flag"></i>European Union</div>
                <div class="item" data-value="Falkland Islands"><i class="fk flag"></i>Falkland Islands</div>
                <div class="item" data-value="Faroe Islands"><i class="fo flag"></i>Faroe Islands</div>
                <div class="item" data-value="Fiji"><i class="fj flag"></i>Fiji</div>
                <div class="item" data-value="Finland"><i class="fi flag"></i>Finland</div>
                <div class="item" data-value="France"><i class="fr flag"></i>France</div>
                <div class="item" data-value="French Guiana"><i class="gf flag"></i>French Guiana</div>
                <div class="item" data-value="French Polynesia"><i class="pf flag"></i>French Polynesia</div>
                <div class="item" data-value="French Territories"><i class="tf flag"></i>French Territories</div>
                <div class="item" data-value="Gabon"><i class="ga flag"></i>Gabon</div>
                <div class="item" data-value="Gambia"><i class="gm flag"></i>Gambia</div>
                <div class="item" data-value="Georgia"><i class="ge flag"></i>Georgia</div>
                <div class="item" data-value="Germany"><i class="de flag"></i>Germany</div>
                <div class="item" data-value="Ghana"><i class="gh flag"></i>Ghana</div>
                <div class="item" data-value="Gibraltar"><i class="gi flag"></i>Gibraltar</div>
                <div class="item" data-value="Greece"><i class="gr flag"></i>Greece</div>
                <div class="item" data-value="Greenland"><i class="gl flag"></i>Greenland</div>
                <div class="item" data-value="Grenada"><i class="gd flag"></i>Grenada</div>
                <div class="item" data-value="Guadeloupe"><i class="gp flag"></i>Guadeloupe</div>
                <div class="item" data-value="Guam"><i class="gu flag"></i>Guam</div>
                <div class="item" data-value="Guatemala"><i class="gt flag"></i>Guatemala</div>
                <div class="item" data-value="Guinea-Bissau"><i class="gw flag"></i>Guinea-Bissau</div>
                <div class="item" data-value="Guinea"><i class="gn flag"></i>Guinea</div>
                <div class="item" data-value="Guyana"><i class="gy flag"></i>Guyana</div>
                <div class="item" data-value="Haiti"><i class="ht flag"></i>Haiti</div>
                <div class="item" data-value="Heard Island"><i class="hm flag"></i>Heard Island</div>
                <div class="item" data-value="Honduras"><i class="hn flag"></i>Honduras</div>
                <div class="item" data-value="Hong Kong"><i class="hk flag"></i>Hong Kong</div>
                <div class="item" data-value="Hungary"><i class="hu flag"></i>Hungary</div>
                <div class="item" data-value="Iceland"><i class="is flag"></i>Iceland</div>
                <div class="item" data-value="India"><i class="in flag"></i>India</div>
                <div class="item" data-value="Indian Ocean Territory"><i class="io flag"></i>Indian Ocean Territory</div>
                <div class="item" data-value="Indonesia"><i class="id flag"></i>Indonesia</div>
                <div class="item" data-value="Iran"><i class="ir flag"></i>Iran</div>
                <div class="item" data-value="Iraq"><i class="iq flag"></i>Iraq</div>
                <div class="item" data-value="Ireland"><i class="ie flag"></i>Ireland</div>
                <div class="item" data-value="Israel"><i class="il flag"></i>Israel</div>
                <div class="item" data-value="Italy"><i class="it flag"></i>Italy</div>
                <div class="item" data-value="Jamaica"><i class="jm flag"></i>Jamaica</div>
                <div class="item" data-value="Japan"><i class="jp flag"></i>Japan</div>
                <div class="item" data-value="Jordan"><i class="jo flag"></i>Jordan</div>
                <div class="item" data-value="Kazakhstan"><i class="kz flag"></i>Kazakhstan</div>
                <div class="item" data-value="Kenya"><i class="ke flag"></i>Kenya</div>
                <div class="item" data-value="Kiribati"><i class="ki flag"></i>Kiribati</div>
                <div class="item" data-value="Kuwait"><i class="kw flag"></i>Kuwait</div>
                <div class="item" data-value="Kyrgyzstan"><i class="kg flag"></i>Kyrgyzstan</div>
                <div class="item" data-value="Laos"><i class="la flag"></i>Laos</div>
                <div class="item" data-value="Latvia"><i class="lv flag"></i>Latvia</div>
                <div class="item" data-value="Lebanon"><i class="lb flag"></i>Lebanon</div>
                <div class="item" data-value="Lesotho"><i class="ls flag"></i>Lesotho</div>
                <div class="item" data-value="Liberia"><i class="lr flag"></i>Liberia</div>
                <div class="item" data-value="Libya"><i class="ly flag"></i>Libya</div>
                <div class="item" data-value="Liechtenstein"><i class="li flag"></i>Liechtenstein</div>
                <div class="item" data-value="Lithuania"><i class="lt flag"></i>Lithuania</div>
                <div class="item" data-value="Luxembourg"><i class="lu flag"></i>Luxembourg</div>
                <div class="item" data-value="Macau"><i class="mo flag"></i>Macau</div>
                <div class="item" data-value="Macedonia"><i class="mk flag"></i>Macedonia</div>
                <div class="item" data-value="Madagascar"><i class="mg flag"></i>Madagascar</div>
                <div class="item" data-value="Malawi"><i class="mw flag"></i>Malawi</div>
                <div class="item" data-value="Malaysia"><i class="my flag"></i>Malaysia</div>
                <div class="item" data-value="Maldives"><i class="mv flag"></i>Maldives</div>
                <div class="item" data-value="Mali"><i class="ml flag"></i>Mali</div>
                <div class="item" data-value="Malta"><i class="mt flag"></i>Malta</div>
                <div class="item" data-value="Marshall Islands"><i class="mh flag"></i>Marshall Islands</div>
                <div class="item" data-value="Martinique"><i class="mq flag"></i>Martinique</div>
                <div class="item" data-value="Mauritania"><i class="mr flag"></i>Mauritania</div>
                <div class="item" data-value="Mauritius"><i class="mu flag"></i>Mauritius</div>
                <div class="item" data-value="Mayotte"><i class="yt flag"></i>Mayotte</div>
                <div class="item" data-value="Mexico"><i class="mx flag"></i>Mexico</div>
                <div class="item" data-value="Micronesia"><i class="fm flag"></i>Micronesia</div>
                <div class="item" data-value="Moldova"><i class="md flag"></i>Moldova</div>
                <div class="item" data-value="Monaco"><i class="mc flag"></i>Monaco</div>
                <div class="item" data-value="Mongolia"><i class="mn flag"></i>Mongolia</div>
                <div class="item" data-value="Montenegro"><i class="me flag"></i>Montenegro</div>
                <div class="item" data-value="Montserrat"><i class="ms flag"></i>Montserrat</div>
                <div class="item" data-value="Morocco"><i class="ma flag"></i>Morocco</div>
                <div class="item" data-value="Mozambique"><i class="mz flag"></i>Mozambique</div>
                <div class="item" data-value="Namibia"><i class="na flag"></i>Namibia</div>
                <div class="item" data-value="Nauru"><i class="nr flag"></i>Nauru</div>
                <div class="item" data-value="Nepal"><i class="np flag"></i>Nepal</div>
                <div class="item" data-value="Netherlands Antilles"><i class="an flag"></i>Netherlands Antilles</div>
                <div class="item" data-value="Netherlands"><i class="nl flag"></i>Netherlands</div>
                <div class="item" data-value="New Caledonia"><i class="nc flag"></i>New Caledonia</div>
                <div class="item" data-value="New Guinea"><i class="pg flag"></i>New Guinea</div>
                <div class="item" data-value="New Zealand"><i class="nz flag"></i>New Zealand</div>
                <div class="item" data-value="Nicaragua"><i class="ni flag"></i>Nicaragua</div>
                <div class="item" data-value="Niger"><i class="ne flag"></i>Niger</div>
                <div class="item" data-value="Nigeria"><i class="ng flag"></i>Nigeria</div>
                <div class="item" data-value="Niue"><i class="nu flag"></i>Niue</div>
                <div class="item" data-value="Norfolk Island"><i class="nf flag"></i>Norfolk Island</div>
                <div class="item" data-value="North Korea"><i class="kp flag"></i>North Korea</div>
                <div class="item" data-value="Northern Mariana Islands"><i class="mp flag"></i>Northern Mariana Islands</div>
                <div class="item" data-value="Norway"><i class="no flag"></i>Norway</div>
                <div class="item" data-value="Oman"><i class="om flag"></i>Oman</div>
                <div class="item" data-value="Pakistan"><i class="pk flag"></i>Pakistan</div>
                <div class="item" data-value="Palau"><i class="pw flag"></i>Palau</div>
                <div class="item" data-value="Palestine"><i class="ps flag"></i>Palestine</div>
                <div class="item" data-value="Panama"><i class="pa flag"></i>Panama</div>
                <div class="item" data-value="Paraguay"><i class="py flag"></i>Paraguay</div>
                <div class="item" data-value="Peru"><i class="pe flag"></i>Peru</div>
                <div class="item" data-value="Philippines"><i class="ph flag"></i>Philippines</div>
                <div class="item" data-value="Pitcairn Islands"><i class="pn flag"></i>Pitcairn Islands</div>
                <div class="item" data-value="Poland"><i class="pl flag"></i>Poland</div>
                <div class="item" data-value="Portugal"><i class="pt flag"></i>Portugal</div>
                <div class="item" data-value="Puerto Rico"><i class="pr flag"></i>Puerto Rico</div>
                <div class="item" data-value="Qatar"><i class="qa flag"></i>Qatar</div>
                <div class="item" data-value="Reunion"><i class="re flag"></i>Reunion</div>
                <div class="item" data-value="Romania"><i class="ro flag"></i>Romania</div>
                <div class="item" data-value="Russia"><i class="ru flag"></i>Russia</div>
                <div class="item" data-value="Rwanda"><i class="rw flag"></i>Rwanda</div>
                <div class="item" data-value="Saint Helena"><i class="sh flag"></i>Saint Helena</div>
                <div class="item" data-value="Saint Kitts and Nevis"><i class="kn flag"></i>Saint Kitts and Nevis</div>
                <div class="item" data-value="Saint Lucia"><i class="lc flag"></i>Saint Lucia</div>
                <div class="item" data-value="Saint Pierre"><i class="pm flag"></i>Saint Pierre</div>
                <div class="item" data-value="Saint Vincent"><i class="vc flag"></i>Saint Vincent</div>
                <div class="item" data-value="Samoa"><i class="ws flag"></i>Samoa</div>
                <div class="item" data-value="San Marino"><i class="sm flag"></i>San Marino</div>
                <div class="item" data-value="Sandwich Islands"><i class="gs flag"></i>Sandwich Islands</div>
                <div class="item" data-value="Sao Tome"><i class="st flag"></i>Sao Tome</div>
                <div class="item" data-value="Saudi Arabia"><i class="sa flag"></i>Saudi Arabia</div>
                <div class="item" data-value="Senegal"><i class="sn flag"></i>Senegal</div>
                <div class="item" data-value="Serbia"><i class="cs flag"></i>Serbia</div>
                <div class="item" data-value="Serbia"><i class="rs flag"></i>Serbia</div>
                <div class="item" data-value="Seychelles"><i class="sc flag"></i>Seychelles</div>
                <div class="item" data-value="Sierra Leone"><i class="sl flag"></i>Sierra Leone</div>
                <div class="item" data-value="Singapore"><i class="sg flag"></i>Singapore</div>
                <div class="item" data-value="Slovakia"><i class="sk flag"></i>Slovakia</div>
                <div class="item" data-value="Slovenia"><i class="si flag"></i>Slovenia</div>
                <div class="item" data-value="Solomon Islands"><i class="sb flag"></i>Solomon Islands</div>
                <div class="item" data-value="Somalia"><i class="so flag"></i>Somalia</div>
                <div class="item" data-value="South Africa"><i class="za flag"></i>South Africa</div>
                <div class="item" data-value="South Korea"><i class="kr flag"></i>South Korea</div>
                <div class="item" data-value="Spain"><i class="es flag"></i>Spain</div>
                <div class="item" data-value="Sri Lanka"><i class="lk flag"></i>Sri Lanka</div>
                <div class="item" data-value="Sudan"><i class="sd flag"></i>Sudan</div>
                <div class="item" data-value="Suriname"><i class="sr flag"></i>Suriname</div>
                <div class="item" data-value="Svalbard"><i class="sj flag"></i>Svalbard</div>
                <div class="item" data-value="Swaziland"><i class="sz flag"></i>Swaziland</div>
                <div class="item" data-value="Sweden"><i class="se flag"></i>Sweden</div>
                <div class="item" data-value="Switzerland"><i class="ch flag"></i>Switzerland</div>
                <div class="item" data-value="Syria"><i class="sy flag"></i>Syria</div>
                <div class="item" data-value="Taiwan"><i class="tw flag"></i>Taiwan</div>
                <div class="item" data-value="Tajikistan"><i class="tj flag"></i>Tajikistan</div>
                <div class="item" data-value="Tanzania"><i class="tz flag"></i>Tanzania</div>
                <div class="item" data-value="Thailand"><i class="th flag"></i>Thailand</div>
                <div class="item" data-value="Timorleste"><i class="tl flag"></i>Timorleste</div>
                <div class="item" data-value="Togo"><i class="tg flag"></i>Togo</div>
                <div class="item" data-value="Tokelau"><i class="tk flag"></i>Tokelau</div>
                <div class="item" data-value="Tonga"><i class="to flag"></i>Tonga</div>
                <div class="item" data-value="Trinidad"><i class="tt flag"></i>Trinidad</div>
                <div class="item" data-value="Tunisia"><i class="tn flag"></i>Tunisia</div>
                <div class="item" data-value="Turkey"><i class="tr flag"></i>Turkey</div>
                <div class="item" data-value="Turkmenistan"><i class="tm flag"></i>Turkmenistan</div>
                <div class="item" data-value="Tuvalu"><i class="tv flag"></i>Tuvalu</div>
                <div class="item" data-value="Uganda"><i class="ug flag"></i>Uganda</div>
                <div class="item" data-value="Ukraine"><i class="ua flag"></i>Ukraine</div>
                <div class="item" data-value="United Arab Emirates"><i class="ae flag"></i>United Arab Emirates</div>
                <div class="item" data-value="United States"><i class="us flag"></i>United States</div>
                <div class="item" data-value="Uruguay"><i class="uy flag"></i>Uruguay</div>
                <div class="item" data-value="Us Minor Islands"><i class="um flag"></i>Us Minor Islands</div>
                <div class="item" data-value="Us Virgin Islands"><i class="vi flag"></i>Us Virgin Islands</div>
                <div class="item" data-value="Uzbekistan"><i class="uz flag"></i>Uzbekistan</div>
                <div class="item" data-value="Vanuatu"><i class="vu flag"></i>Vanuatu</div>
                <div class="item" data-value="Vatican City"><i class="va flag"></i>Vatican City</div>
                <div class="item" data-value="Venezuela"><i class="ve flag"></i>Venezuela</div>
                <div class="item" data-value="Vietnam"><i class="vn flag"></i>Vietnam</div>
                <div class="item" data-value="Wallis and Futuna"><i class="wf flag"></i>Wallis and Futuna</div>
                <div class="item" data-value="Western Sahara"><i class="eh flag"></i>Western Sahara</div>
                <div class="item" data-value="Yemen"><i class="ye flag"></i>Yemen</div>
                <div class="item" data-value="Yemen"><i class="zm flag"></i>Zambia</div>
                <div class="item" data-value="Zimbabwe"><i class="zw flag"></i>Zimbabwe</div>
            </div>
        </div>
        
        <?php if(isset($_POST['btn-submit'])) { $country = $_POST['country']; }?>
        
        <div class="ui form">
            <div class="field">
            <label>Say something about this social interaction.<br>Write for a large audience. Lots of people will read this, so give some background information.</label>
            <textarea rows="5" name="pracDesc"></textarea>
            
            <?php if(isset($_POST['btn-submit'])) { $pracDesc = $_POST['pracDesc']; }?>
            </div>
        </div>
        </br></br>

        <div class="ui form"><div class="field"><label>Is it some kind of a gesture or an etiquette that the country practice?</label></div></div>

        <select class="ui fluid selection dropdown dd" name="category1" id="category1">
            <i class="dropdown icon"></i>
            <option value="">Which category does this fall into?</option>
            <option value="1">Gestures</option>
            <option value="2">Etiquette</option>
        </select>
        <?php if(isset($_POST['category1'])) { $category1 = $_POST['category1']; }?>

        <div class="ui form">
            <div class="field">
                <label>Now, choose any that relate best with the social interaction.</label>
            </div>
        </div>

        <div class="category2" >
           <select class="ui fluid selection dropdown dd" name="category2" id="category2" >
            <i class="dropdown icon"></i>
            <option value="">Be specific...</option>
            <option value="1">Friendly gestures</option>
            <option value="2">Gestures of respect</option>
            <option value="3">Salutes</option>
            <option value="4">Celebratory gestures</option>
            <option value="5">Finger-counting</option>
            <option value="6">Obscene gestures</option>
            <option value="7">Taunts</option>
            <option value="8">Head motions</option>
            <option value="9">Other gestures</option>
        </select>
        </div>
        <?php //if(isset($_POST['category2'])) { $category2 = $_POST['category2']; }?>

        <div class="category3" style="display:none!important;">
          <select class="ui fluid selection dropdown dd" name="category3" id="category3">
            <i class="dropdown icon"></i>
            <option value="">Be specific...</option>
            <option value="10">Greetings</option>
            <option value="11">Making payment</option>
            <option value="12">Visiting someone's house</option>
            <option value="13">Gifts and gift-giving</option>
            <option value="14">Table manners</option>
            <option value="15">Eating and drinking</option>
            <option value="16">Funerals</option>
            <option value="17">Bars and restaurants</option>
            <option value="18">Driving</option>
            <option value="19">Business etiquette</option>
            <option value="20">Hierarchy and honoring the elder</option>
        </select>
        </div>
        <?php //if(isset($_POST['category3'])) { $category3 = $_POST['category3']; }?>


        <div class="ui form">
            <div class="field">
                <label>Upload a picture that best describe the situation. <br>Or to make it easier for you, just provide the link to the image source. (Hint: Right-click chosen image and 'Copy image address')</label>

                <div class="ui vertical labeled icon buttons">
                    <button class="ui blue button">
                    <i class="upload icon"></i>
                        Upload a picture (jpg, png or gif)
                    </button>
                </div><br><br>
                <input type="text" name="url" placeholder="Image link" value="<?php if(isset($_POST['url'])) { echo $_POST['url']; } ?>" required><span class="help-block"><strong></strong></span>
            </div>
        </div>
</br></br></br>

<button class="ui fluid secondary button dd" type="SUBMIT" name="btn-submit">
  SUBMIT
</button>

<script>

    // to test if one string contains another string ..
    $(document).ready(function(){


        // note the jquery version change ... switch it to .on('change',
        // remember that in newer versions of jquery the method below should be
        // $("#state").on('change', function (){  ... but other than that
        // the two ways ARE EXACTLY THE SAME ...watch my video carefully and
        // you'll see what i'm referring to ..
        $("#category1").change(function (){

          var chosenstate = $("#category1").val();

          if(chosenstate == "1"){
              $(".category2").css("display", "block");
              $(".category3").css("display", "none");
          }

          if(chosenstate == "2"){
              $(".category2").css("display", "none");
              $(".category3").css("display", "block");
          }
      });



        $("#execute").click(function(){

          $("#resultbox").text(result);


            // ...end button execute clickevent handler
        });


        // ...end document ready function
    });



</script>







</form>

</div>
</div>
</div>
</section>

<?php 

include_once('footer.php'); 

?>
