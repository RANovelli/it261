<?  
// first form
// form HTML not important
// form elements IMPORTANT
// form attributes & values IMPORTANT
// use global variable $_POST
// two input fields are name, email

if(isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    if(empty($_POST['name'] && $_POST['email'])) {
        echo 'Please fill out the fields!!';
    } else {
        echo $name;
        echo '<br>';
        echo $email;
    }
} else {
    echo '
        <form action="" method="post">
            <label>NAME:</label>
            <input type="text" name="name">
            
            <label>EMAIL:</label>
            <input type="email" name="email">
            
            <input type="submit" name="Send">
        </form>
    ';
}