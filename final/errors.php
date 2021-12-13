<?php 
// logically, if more than 0 errors, display a message
// if end-user does not fill out email input field, "email required" displays
// array_push($errors, 'Email is required');
// cannot echo array, use foreach loop

if (count($errors) > 0) :?>
<div class="error">
    <?php foreach($errors as $error) : ?>
    <p><?php echo $error ;?></p>
    <?php endforeach ;?>
</div>
<?php endif ;?>