<div class="row">
    <div class="large-6 columns">

<h4>Users</h4>
<h4>Welcome <?php echo $this->welocmeMsg; ?> </h4>

<input id="jQueryUItest" />
Date: <input type="text" id="dp" onclick="$('#dp').datepicker();$('#dp').datepicker('show');">
<p>Click test</p>
<br/>
<br/>
&nbsp;
<?php echo $this->msg; ?>
<h4><?php echo $this->title; ?></h4>
<!-- Form for Creating Users -->
<form method="POST" action="<?php echo URL;?>users/create">
    <label>Login</label><input type="text" name="login" /></br>
    <label>Password</label><input type="text" name="password" /></br>
    <label>Role</label>
        <select name="role">
            <option value="default">Default</option>
            <option value="admin">Admin</option>
        </select></br>
    <label>&nbsp;</label><input type="submit" />
    <!-- &nbsp; No braking space-->
</form>
    </div>
</div>
<hr/>
<table>
    <td>ID</td><td>UserName</td><td>Role</td> 
<?php 
    foreach ($this->usersList as $key => $value){
        echo '<tr>';
        echo '<td>'.$value['id'].'</td>';
        echo '<td>'.$value['login'].'</td>';
        echo '<td>'.$value['role'].'</td>';
        echo '<td>'
                . '<a href="'.URL.'users/edit/'.$value['id'].'">Edit</a> '
                . '<a href="'.URL.'users/delete/'.$value['id'].'"]>Delete</a>'
           . '</td>';
        echo '</tr>';
    }
/*
 * Prints an Array
 * print_r($this->usersList); 
 */
?>
</table>

<!--  
//echo's a string, but the DB returns in Arrays format
 echo $this->usersList; 
-->


