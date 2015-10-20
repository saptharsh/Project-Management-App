<hr/>
<?php

if (isset($_REQUEST['run'])) {

    try {

        $form = new Form();

        $form   ->post('name')
                //->val('method(), constraint') */ 
                ->val('minlength', 4)
                ->post('age')
                ->val('integerVal')
                ->post('gender');
        
        // Gives us the Exception
        $form->submit();
            
        // Gives all the Form elements, if field name is not specified
        $data = $form->fetch();
        /*
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        */
        $_SESSION['data'] = array();
        $_SESSION['data'] = $data;

        header("Location: formm/validate");
        
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

?>

<b><?php echo $this->msg; ?></b><br/>
<b><?php echo @htmlentities($_GET['msg']); ?></b>

<form method="post" action="?run">
<p><label>Name</label>
    <input type="text" name="name" /></p>
<p><label>Age</label>
    <input type="text" name="age"/></p>
<p><label>Gender</label>
    <select name="gender">
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
</p>    
    <label></label> <input type="submit" />

</form>
<hr/>