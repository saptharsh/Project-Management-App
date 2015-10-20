<h1>User: edit</h1>
<h4>
<?php
    echo $this->msg;
    
    /*
     * Check if we are getting the correct info 
     * echo $this->user['id'];
     */
    
?>
</h4>

<form method="POST" action="<?php echo URL;?>users/editSave/<?php echo $this->user[0]['id']; ?>">
    <label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>"/></br>
    <label>Password</label><input type="text" name="password" /></br>
    <label>Role</label>
        <select name="role">
            <option value="default" <?php if($this->user[0]['role'] == 'default') echo 'selected'; ?> >Default</option>
            <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?> >Admin</option>
            <option value="admin" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?> >Owner</option>
        </select></br>
    <label>&nbsp;</label><input type="submit" />
    <!-- &nbsp; No braking space-->
</form>




