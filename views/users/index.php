

<h1>Users</h1>
<h2>Welcome <?php echo $this->welocmeMsg; ?> </h2>

<input id="jQueryUItest" />
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


