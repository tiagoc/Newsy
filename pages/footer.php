<!-- Footer -->

<footer class="row">
    <div class="row collapse">
        <div class="small-12 columns">
            <form>
                <div class="row">
                    <div class="row collapse">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fi-torso"></i></span>
                        </div>
                        <div class="small-10 columns">
                            <input type="text" name="username" placeholder="username"/>                            
                        </div>
                        <div class="medium-4"></div>
                    </div>

                    <div class="row collapse">
                        <div class="small-2 columns">
                            <span class="prefix"><i class="fi-key"></i></span>
                        </div>
                        <div class="small-10 columns">
                            <input type="password" name="password" placeholder="password"/>           
                        </div>                        
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <button type="submit" class="button tiny">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="large-12 columns">
        <hr />
        <div class="row">
            <div class="large-6 columns">
                <p>&copy; Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
                <ul class="inline-list right">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="../js/jquery.min.js"></script>
<script src="../js/templates/foundation.js"></script>
<script>
    $(document).foundation();
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);
</script>
</body>
</html>