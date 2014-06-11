{include file='common/header.tpl'}

<form data-abide action="{$BASE_URL}actions/users/edit_user.php" method="post">
    <div class="row">
        <div class="small-12 columns">
            <h1>Edit user</h1>

            <div class="row">
                <div class="small-12 columns">                    
                    <div class="row">
                        <input type="hidden" name="id" value="{$user.id}"/>
                        <div class="large-4 columns">
                            <label for="fname"><b>First name</b> <small>required</small></label>
                            <input type="text" name="fname" required pattern="[a-zA-Z]+" value="{$fname}"/>
                            <small class="error">First name is required and must be a string.</small>
                        </div>
                        <div class="large-4 columns">
                            <label for="lname"><b>Last name</b> <small>required</small></label>
                            <input type="text" name="lname" required pattern="[a-zA-Z]+" value="{$lname}"/>
                            <small class="error">Last name is required and must be a string.</small>
                        </div>
                        <!-- needed for alignment -->
                        <div class="large-4 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="email"><b>Email</b> <small>required</small></label>
                            <input type="email" name="email" required value="{$user.email}"/>
                            <small class="error">Please enter a valid email address.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="password"><b>Password</b> <small>required</small></label>
                            <input type="password" name="password" pattern="alpha_numeric" placeholder="Click to change"/>
                            <small class="error">You need a decent password! You can enter letter and numbers here.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="gender" ><b>Gender</b> <small>required</small></label>                        
                            <select name="gender" required>
                                {if $user.gender == "male"}
                                    <option value="male" selected> Male </option>
                                    <option value="female"> Female </option>
                                {else}
                                    <option value="male"> Male </option>
                                    <option value="female" selected> Female </option>
                                {/if}
                            </select>
                            <small class="error">Gender is required.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label for="birthday"><b>Birthday</b> <small>required</small></label>
                            <input class="datepicker-simple" type="text" name="birthday" required value="{$user.birthday}"/>
                            <small class="error">Please enter a valid birthday in the dd/mm/yyyy format, you can use the date picker!</small>
                        </div>                    
                        <div class="large-4 columns">
                            <label for="phone"><b>Phone</b> <small>required</small></label>
                            <input type="text" name="phone" required value="{$user.phone}"/>
                            <small class="error">Phone number is required.</small>
                        </div>      
                        <!-- needed for alignment -->
                        <div class="large-4 columns"></div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="youtube"><b>Youtube channel link</b></label>
                            <input type="url" name="youtube" value="{$user.youtube}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <label for="facebook"><b>Facebook profile link</b></label>
                            <input type="url" name="facebook" value="{$user.facebook}"/>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="large-8 columns">
                                <label for="googleplus"><b>Google+ profile link</b></label>
                                <input type="url" name="googleplus" value="{$user.googleplus}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="reg-form" class="large-8 columns">
                                <label for="linkedin"><b>LinkedIn profile link</b></label>
                                <input type="url" name="linkedin" value="{$user.linkedin}"/>
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
