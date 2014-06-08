{include 'common/header.tpl'}
<div class="row">
    <div class="small-12 columns">
        <h1>User Management</h1>

        <table class="responsive" style="width: 100%;">
            <thead>
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
                     <td class="text-center">{$u.name}</td>
                     <td class="text-center">{$u.email}</td>
                     <td class="text-center"><a href="../users/profile.php?id={$u.id}"><i class="fi-torso"></i></a></td>
                     <td class="text-center roles">
                        <select>
                            <option>User</option>
                            <option>Journalist</option>
                            <option>Editor</option>
                            <option>Administrator</option>
                        </select>
                    </td>
                    <td class="text-center"><i class="fi-pencil"></i></td>
                    <td class="text-center block"><input type="checkbox"/></td>                     
                 {/foreach}
                 
            </tbody>
        </table>
        <input type="submit" class="button round tiny right" value="Update"/>
    </div>
</div>
{include 'common/footer.tpl'}