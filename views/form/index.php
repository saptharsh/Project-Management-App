<?php
if (isset($_REQUEST['run'])) {

    try {

        $form = new Form();

        $form->post('name')
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
    <div class="row">
        <div class="large-6 columns">

            <p><label>First Name</label>
                <input type="text" name="name" /></p>
            <p><label>Last Name</label>
                <input type="text" name="name" /></p>
            <p><label>Project Name</label>
                <input type="text" name="projname"/></p>
            <p><label>Project Duration</label>
                <input type="text" name="projname"/></p>
            <p><label>Role</label>
                <input type="text" name="role"/></p>
            <p><label style="margin-top: 24px;">Are you a contractor? </label>
                <input id="checkbox1" name="contractor" value="yes" type="checkbox"><label for="checkbox1">YES</label>
                <input id="checkbox2" name="contractor" value="no" type="checkbox"><label for="checkbox2">NO</label></p>
            <p><label>Age</label>
                <input type="text" name="age"/></p>
            <p><label>Gender</label>
                <select name="gender">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select></p>

        </div>

        <div class="large-6 columns">

            <p><label>Professional Contact Number</label>
                <input type="text" name="prof_number"/></p>
            <p><label>Personal Contact Number</label>
                <input type="text" name="pers_number"/></p>
            <p><label>Address line 1</label>
                <input type="text" name="address1"/></p>
            <p><label>Address line 2</label>
                <input type="text" name="address2"/></p>
            <p><label>Temporary Password</label>
                <input type="text" name="temp_pass"/></p>
            <p><label>Confirm Temporary Password</label>
                <input type="text" name="temp_pass"/></p>
            <p><label>New Password</label>
                <input type="text" name="new_pass1"/></p>
            <p><label>Confirm Password</label>
                <input type="text" name="new_pass2"/></p>

        </div>

        
    </div>
    <div class="row">
    <div class="large-4 medium-4 columns">
    <label></label>    
        <input type="submit" class="small button" />
    </div>
       </div> 
</form>

</div>
