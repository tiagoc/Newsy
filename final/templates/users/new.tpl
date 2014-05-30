{include file='common/header.tpl'}

<form data-abide action="{$BASE_URL}/actions/users/register.php" method="post">
    <div class="row">
        <div class="small-12 columns">
            <h1>Create New User</h1>

            <div class="row">
                <div class="small-12 columns">                    
                    <div class="row">
                        <div class="large-4 columns">
                            <label for="fname"><b>First name</b> <small>required</small></label>
                            <input type="text" name="fname" required pattern="[a-zA-Z]+"/>
                            <small class="error">First name is required and must be a string.</small>
                        </div>
                        <div class="large-4 columns">
                            <label for="lname"><b>Last name</b> <small>required</small></label>
                            <input type="text" name="lname" required pattern="[a-zA-Z]+"/>
                            <small class="error">Last name is required and must be a string.</small>
                        </div>
                        <!-- needed for alignment -->
                        <div class="large-4 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="email"><b>Email</b> <small>required</small></label>
                            <input type="email" name="email" required/>
                            <small class="error">Please enter a valid email address.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="password"><b>Password</b> <small>required</small></label>
                            <input type="password" name="password" required pattern="alpha_numeric"/>
                            <small class="error">You need a decent password! You can enter letter and numbers here.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="gender" ><b>Gender</b> <small>required</small></label>                        
                            <select name="gender" required>
                                <option value="male" selected> Male </option>
                                <option value="female" selected> Female </option>
                            </select>
                            <small class="error">Gender is required.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label for="birthday"><b>Birthday</b> <small>required</small></label>
                            <input class="datepicker-simple" type="date" name="birthday" required/>
                            <small class="error">Please enter a valid birthday in the dd/mm/yyyy format, you can use the date picker!</small>
                        </div>                    
                        <div class="large-4 columns">
                            <label for="phone"><b>Phone</b> <small>required</small></label>
                            <input type="text" name="phone" required/>
                            <small class="error">Phone number is required.</small>
                        </div>      
                        <!-- needed for alignment -->
                        <div class="large-4 columns"></div>
                    </div>
                    <div class="row">
                        <div id="reg-form" class="large-8 columns">
                            <label for="twitter"><b>Twitter profile link</b></label>
                            <input type="url" name="twitter"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="youtube"><b>Youtube channel link</b></label>
                            <input type="url" name="youtube"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="facebook"><b>Facebook profile link</b></label>
                            <input type="url" name="facebook"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="googleplus"><b>Google+ profile link</b></label>
                            <input type="url" name="googleplus"/>
                        </div>
                    </div>
                    <div class="row">
                        <div id="reg-form" class="large-8 columns">
                            <label for="linkedin"><b>LinkedIn profile link</b></label>
                            <input type="url" name="linkedin"/>
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
</form>

{include file='common/footer.tpl'}
