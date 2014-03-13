<?php include 'header.php'; ?>

<div class="row">
    <div class="small-12 columns">
        <h1>Register</h1>

        <div class="row">
            <div class="small-12 columns">
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
                        <label for="birthday"><b>Gender</b></label>                        
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
                        <label for=""><b>Phone</b></label>
                        <input type="text" name=""/>
                    </div>      
                    <!-- needed for alignment -->
                    <div class="large-4 columns"></div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <label for="birthday"><b></b></label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <input type="submit" class="right button tiny round"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>