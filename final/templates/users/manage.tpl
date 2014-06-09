{include 'common/header.tpl'}
<div class="row">
    <div class="small-12 columns">
        <h1>User Management</h1>

        <form action="{$BASE_URL}/actions/users/edit_user.php" method="post">
            <table class="responsive" style="width: 100%;">
                <thead>
                <th class="text-center">ID</th>
                <th class="text-center"><i class="fi-torso"></i> Name</th>
                <th class="text-center"><i class="fi-mail"></i> Email</th>
                <th class="text-center">Profile</th>
                <th class="text-center">Role</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Block</th>
                </thead>
                <tbody>              

                    {foreach $user as $u}
                        <tr>
                            <td name='id' class="text-center">{$u.id}</td>
                            <td class="text-center">{$u.name}</td>
                            <td class="text-center">{$u.email}</td>
                            <td class="text-center"><a href="../users/profile.php?id={$u.id}"><i class="fi-torso"></i></a></td>
                            <td class="text-center roles">
                                <select name='role'>
                                    {if $u.role=='user'}
                                        <option value='user' selected="selected">User</option>
                                    {else}
                                        <option>User</option>
                                    {/if}
                                    {if $u.role=='journalist'}
                                        <option value='journalist' selected="selected">Journalist</option>
                                    {else}
                                        <option>Journalist</option>
                                    {/if}
                                    {if $u.role=='editor'}
                                        <option value='editor' selected="selected">Editor</option>
                                    {else}
                                        <option>Editor</option>
                                    {/if}
                                    {if $u.role=='admin'}
                                        <option value='admin' selected="selected">Administrator</option>
                                    {else}
                                        <option>Administrator</option>
                                    {/if}
                                </select>
                            </td>
                            <td class="text-center block"><input name='id' value={$u.id} type="checkbox"/></td>     
                            <td class="text-center block"><a href=""><i class="fi-skull"></i></a></td>   
                            {/foreach}

                </tbody>
            </table>
            <input type="submit" class="button round tiny right" value="Update"/>
        </form>

    </div>
</div>

{include 'common/footer.tpl'}