<div class="row">
    <div class="large-6 columns">
        <label>Project Number</label>
        <input type="text" name="proj_num"/>

        <label>Groups involved in the development</label>
        <select name="names">
            <option value="" selected>Select One/More</option>
            <option value="sharanya_ramakrishnan">Developers</option>
            <option value="prateek_gowda">Front-end developers</option>
            <option value="suresh_hegde">Testers</option>
            <option value="chaitanya_sundar ">ETL</option>
            <option value="chaitanya_sundar ">Production support</option>
            
        </select>
    </div>
</div>
<h4>Note</h4>
<br/>

<form method="POST" action="<?php echo URL; ?>note/create">
    <label>Title</label><input type="text" name="title" /></br>
    <label>Content</label><textarea name="content"></textarea></br>
    <label>&nbsp;</label><input type="submit" />
    <!-- &nbsp; No braking space-->
</form>

<hr/>
<table>
    <?php
    foreach ($this->notesList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td>' . $value['content'] . '</td>';
        echo '<td>' . $value['date_added'] . '</td>';
        echo '<td><a class="delete" href="' . URL . 'note/delete/' . $value['noteid'] . '">Delete</a></td>';
        echo '<td><a href="' . URL . 'note/edit/' . $value['noteid'] . '">Edit</a></td>';
        echo '</tr>';
    }
    ?>
</table>
