<?php include './header-user.php'; ?>

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
                <tr>
                    <td class="text-center">John Smith</td>
                    <td class="text-center">nofway@random.org</td>
                    <td class="text-center"><a href="#"><i class="fi-torso"></i></a></td>
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
                </tr>
                <tr>
                    <td class="text-center">Jane Smith</td>
                    <td class="text-center">nomway@random.org</td>
                    <td class="text-center"><a href="#"><i class="fi-torso"></i></a></td>
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
                </tr>
            </tbody>
        </table>
        <input type="submit" class="button round tiny right" value="Update"/>
    </div>
</div>

<?php include './footer.php'; ?>