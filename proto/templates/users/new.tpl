{include file='common/header.tpl'}

<div class="row">
    <div class="small-12 columns">
        <h1>Create New User</h1>

        <div class="row">
            <div class="small-12 columns">
                <div class="row">
                    <div class="large-4 columns">
                        <label for="username"><b>Username</b></label>
                        <input type="text" name="username"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label for="fname"><b>First name</b></label>
                        <input type="text" name="fname"/>
                    </div>
                    <div class="large-4 columns">
                        <label for="lname"><b>Last name</b></label>
                        <input type="text" name="lname"/>
                    </div>
                    <!-- needed for alignment -->
                    <div class="large-4 columns"></div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="email"><b>Email</b></label>
                        <input type="email" name="email"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="birthday" ><b>Gender</b></label>                        
                        <select name="gender">
                            <option value="male" selected> Male </option>
                            <option value="female" selected> Female </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label for="birthday"><b>Birthday</b></label>
                        <input type="date" name="date"/>
                    </div>                    
                    <div class="large-4 columns">
                        <label for="phone"><b>Phone</b></label>
                        <input type="text" name=""/>
                    </div>      
                    <!-- needed for alignment -->
                    <div class="large-4 columns"></div>
                </div>
                <div class="row">
                    <div id="reg-form" class="large-8 columns">
                        <label for="twitter"><b>Twitter account</b></label>
                        <input type="url" name="twitter"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="youtube"><b>Youtube account</b></label>
                        <input type="url" name="youtube"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="facebook"><b>Facebook account</b></label>
                        <input type="url" name="facebook"/>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="googleplus"><b>Google+ account</b></label>
                        <input type="url" name="googleplus"/>
                    </div>
                </div>
                <div class="row">
                    <div id="reg-form" class="large-8 columns">
                        <label for="linkedin"><b>LinkedIn account</b></label>
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

{include file='common/footer.tpl'}
