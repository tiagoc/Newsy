<?php include 'header-user.php'; ?>

<div class="row">
    <div class="small-12 columns">
        <h1>Edit Profile</h1>

        <div class="row">
            <div class="small-12 columns">
                <div class="row">
                    <div class="large-4 columns">
                    	<label for="username"><b>Username</b></label>
                        <input type="text" name="username" value="johnsmith"/>
                	</div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label for="fname"><b>First name</b></label>
                        <input type="text" name="fname" value="John"/>
                    </div>
                    <div class="large-4 columns">
                        <label for="lname"><b>Last name</b></label>
                        <input type="text" name="lname" value="Smith"/>
                    </div>
                    <!-- needed for alignment -->
                    <div class="large-4 columns"></div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email" value="johnsmith@myemail.com"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" value="*******"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="birthday" ><b>Gender</b></label>                        
                        <select name="gender">
                            <option value="male" selected> Male </option>
                            <option value="female"> Female </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label for="birthday"><b>Birthday</b></label>
                        <input type="date" name="date" value="10/02/1982"/>
                    </div>                    
                    <div class="large-4 columns">
                        <label for="phone"><b>Phone</b></label>
                        <input type="text" name="" value="555929737"/>
                    </div>      
                    <!-- needed for alignment -->
                    <div class="large-4 columns"></div>
                </div>
                <div class="row">
                    <div id="reg-form" class="large-8 columns">
                        <label for="twitter"><b>Twitter account</b></label>
                        <input type="url" name="twitter" value="@myTwiit"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="youtube"><b>Youtube account</b></label>
                        <input type="url" name="youtube" value="jonhnyyyssmith38"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="facebook"><b>Facebook account</b></label>
                        <input type="url" name="facebook" value="jonhnyyyssmith38"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="googleplus"><b>Google+ account</b></label>
                        <input type="url" name="googleplus" value="jonhnyyyssmith38"/>
                    </div>
                </div>
                <div class="row">
                    <div id="reg-form" class="large-8 columns">
                        <label for="linkedin"><b>LinkedIn account</b></label>
                        <input type="url" name="linkedin" value="jonhsmithson"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <input type="submit" value="Submit" class="right button tiny round"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>