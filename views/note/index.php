<h1>Note</h1>
<br/>

<form method="POST" action="<?php echo URL;?>note/create">
    <label>Title</label><input type="text" name="title" /></br>
    <label>Content</label><textarea name="content"></textarea></br>
    <label>&nbsp;</label><input type="submit" />
    <!-- &nbsp; No braking space-->
</form>

<hr/>
<table>
<?php 
    foreach ($this->notesList as $key => $value){
        echo '<tr>';
        echo '<td>'. $value['title'] .'</td>';
        echo '<td>'. $value['date_added'] .'</td>';
        echo '</tr>';
    }
?>
</table>

