<a href="#" data-dropdown="user-menu" class="button round dropdown"><i class="fi-torso" id="torso-header-user"></i>{$NAME}</a><br>
<ul id="user-menu" data-dropdown-content class="f-dropdown">
    <li><a href="{$BASE_URL}pages/news/list.php"><i class="fi-list"></i>News</a></li>
    {if $ROLE && ($ROLE == 'journalist' || $ROLE == 'editor' || $ROLE == 'admin')}
        <li><a href="{$BASE_URL}pages/news/new.php"><i class="fi-pencil"></i>Write Article</a></li>
    {/if}
    {if $ROLE && ($ROLE == 'journalist' || $ROLE == 'editor' || $ROLE == 'admin')}
        <li><a href="{$BASE_URL}pages/users/mynews.php"><i class="fi-results"></i>My Board</a></li>
    {/if}
    {if $ROLE && ($ROLE == 'admin' || $ROLE == 'editor')}
    <li><a href="{$BASE_URL}pages/users/journalistprofile.php"><i class="fi-torso"></i>My Profile</a></li>
        {else}
            <li><a href="{$BASE_URL}pages/users/profile.php"><i class="fi-torso"></i>My Profile</a></li>
    {/if}
        
    {if $ROLE && ($ROLE == 'admin' || $ROLE == 'editor')}
        <li><a href="{$BASE_URL}pages/news/approvalboard.php"><i class="fi-checkbox"></i>Approval Board</a></li>
    {/if}
    <li><a href="{$BASE_URL}actions/users/logout.php"><i class="fi-lock"></i>Logout</a></li>
</ul>