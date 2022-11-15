 <!-- ini adalah borang -->
 <div class="d-flex justify-content-center ketua">
     <div class="borang" style="padding-top: 20px;">
         <div class="register">
             <h4>Register</h4>
             <span class="bapakHr">
                 <hr class="hr">
             </span>
         </div>
         <form action="<?= BASEURL; ?>/Log/register" method="post" class="pb-6">
             <input type="hidden" name="address_id" id="id">
             <div class="col formm2">
                 <div class="kotakRegister" style="margin-top: -15px;">
                     <div class="form-group pt-3 pb-3">
                         <div class="input-group firstName" id="inputGroup">
                             <span class="input-group-text border-0 bg-body text-muted fw-bold">Name</span>
                             <input type="text" class="form-control border-0 border-bottom inputluar2 inputdalam2" placeholder="First Name" name="firstName" required>
                             <input id="inputKe2" type="text" class="form-control border-0 border-bottom pe-5 inputluar2 inputdalam2 ms-3" placeholder="Last Name" name="lastName" required>

                             <!-- <div class="ps-4"> -->
                             <!-- </div> -->
                         </div>
                     </div>
                     <div class="form-group pb-3">
                         <div class="input-group email" id="inputGroup">
                             <span class="input-group-text border-0 bg-body text-muted fw-bold">Email</span>
                             <input type="text" aria-label="First name" class="form-control border-0 border-bottom inputluar inputdalam" placeholder="Email" name="email" required>
                         </div>
                     </div>
                     <div class="form-group pb-3">
                         <div class="input-group username" id="inputGroup">
                             <span class="input-group-text border-0 bg-body text-muted fw-bold">Username</span>
                             <input type="text" aria-label="First name" class="form-control border-0 border-bottom inputluar inputdalam username2" placeholder="Username" name="username" required>
                         </div>
                     </div>
                     <div class="form-group pb-3 ">
                         <div class="input-group password realPass" id="inputGroup">
                             <span class="input-group-text border-0 bg-body text-muted fw-bold">Password</span>
                             <input name="password" type="password" id="password" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="Password">
                             <!-- <div class="ps-4"> -->
                             <input name="password2" type="password" id="password2" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password2 ms-3" placeholder="Repeat Password" required>
                             <!-- </div> -->
                         </div>
                     </div>

                     <div class="form-check checkboxPass checkboxPass2 rounded-0">
                         <!-- <span class="input-group-text" onclick="password_show_hide();"> -->
                         <label>
                             <input class="form-check-input" type="checkbox" value="" id="checkboxPass" onclick="password_show_hide();" />
                             <p>show Password</p>
                         </label>
                         <i class="fas fa-eye" id="show_eye"></i>
                         <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                         </span>
                     </div>
                     <div class="contactContainer">
                         <div class="form-group pb-3 firstContact contactDua2" id="contactDua">
                             <div class="input-group password" id="inputGroup">
                                 <span class="input-group-text border-0 bg-body text-muted fw-bold">Contact Info</span>
                                 <input name="street" type="text" id="password" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="Street" required>
                                 <!-- <div class="ps-4"> -->
                                 <input name="city" type="text" id="inputKe2" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password2 ms-3" placeholder="City" required>
                                 <!-- </div> -->
                             </div>
                         </div>
                         <div class="form-group pb-3 contactDua" id="contactDua">
                             <div class="input-group password" id="inputGroup">
                                 <!-- <span class="input-group-text border-0 bg-body text-muted fw-bold baru"></span> -->
                                 <input name="state" type="text" id="password" aria-label="First name" class="form-control border-0 border-bottom inputluar2  inputdalam2 password1" placeholder="State" required>
                                 <!-- <div class="ps-4"> -->
                                 <input name="country" type="text" id="inputKe2" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password2 ms-3" placeholder="Country" required>
                                 <!-- </div> -->
                             </div>
                         </div>
                         <div class="form-group pb-3 contactDua" id="contactDua">
                             <div class="input-group password" id="inputGroup">
                                 <!-- <span class="input-group-text border-0 bg-body text-muted fw-bold baru"></span> -->
                                 <input name="zipCode" type="text" id="password" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="Zip Code" required>
                                 <!-- <div class="ps-4"> -->
                                 <input name="phoneNumber" type="text" id="inputKe2" aria-label="First name" class="form-control border-0 border-bottom inputluar2 inputdalam2 password2 ms-3" placeholder="Phone Number" required>
                                 <!-- </div> -->
                             </div>
                         </div>
                     </div>
                     <div class="genderContainer">
                         <div class="form-group pb-3">
                             <div class="input-group">
                                 <div class="tulisanGender">
                                     <span class="input-group-text border-0 bg-body text-muted fw-bold">Gender</span>
                                 </div>
                                 <div class="gender">
                                     <div class="form-check">
                                         <input class="form-check-input radioSatu" type="radio" name="flexRadioDefault" value="f" id="flexRadioDefault1">
                                         <label class="form-check-label" for="flexRadioDefault1">
                                             Female
                                         </label>
                                     </div>
                                     <div class="genderContainerDua">
                                         <div class="form-check">
                                             <input class="form-check-input" type="radio" value="m" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                 Male
                                             </label>
                                         </div>
                                         <div class="form-check">
                                             <input class="form-check-input" type="radio" value="u" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                             <label class="form-check-label" for="flexRadioDefault2">
                                                 Unspecified
                                             </label>
                                         </div>
                                     </div>
                                     <?php foreach ($data['address'] as $tran) : ?>
                                         <input type="hidden" name="address_id" value="<?= $tran; ?>">
                                     <?php endforeach; ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="penutupRegister">

                         <a href="login.php" class="btn bayang btn-light me-2" type="submit" name="profile" value="profile">CANCEL</a>
                         <button class="btn bayang btn-primary" name="register2">REGISTER</button>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 </div>
 <!-- baru dan id contactDua-->
 <!-- password2 -->