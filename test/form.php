<?php

require '../libs/Database.php';
require '../config.php';
require '../' . Libs . 'Form' . '.php';
/*
 * OR
 * require '../libs/Form.php';
 */

if (isset($_REQUEST['run'])) {

    try {

        $form = new Form();

        $form   ->post('name')
                ->val('minlength', 4)
                //->val('fish')/* If the 'fish' method is not present, catch the exception [__call]*/ 
                ->post('age')
                ->val('integerVal')
                ->post('gender');
        
        $form->submit();
            
        echo 'Form Passed';
        $data = $form->fetch();
        
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        $db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $db->insert('person', $data); 
        
        //print_r($form);

        /*
          $a = $form->fetch();
          $b = $form->fetch('age');

          print_r($a);
          echo $b;
         * 
         */
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
?>
<form method="post" action="?run">
<p><label>Name</label>
    <input type="text" name="name" /></p>
<p><label>Age</label>
    <input type="text" name="age"/></p>
<p><label>Gender</label>
    <select name="gender"></p>
        <option value="m">Male</option>
        <option value="f">Female</option>
    </select>
<p><input type="submit" /></p>

</form>


