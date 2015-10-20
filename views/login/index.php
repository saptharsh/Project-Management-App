
<hr/>
<p>inside views/login/index.php</p>
<?php echo $this->msg; ?>
<h1>Login</h1>

<form action="login/run" method="POST">
    
    <label>User Name</label>
        <input type="text" name="user"/></br> 
    <label>Password</label>    
        <input type="password" name="pass"/></br> 
    <label></label>    
        <input type="submit"/>
</form>



<hr/>


