<!DOCTYPE HTML>
<head>
<body>
<?php
$nameErr = $emailErr ="";
$name = $email = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is Required";
    } else {
        $email = test_input($_POST["email"]);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <p> </p>
    Email: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <p> </p>
    <input type="submit">
</form>
<p id="im retards"></p>
<?php
    echo "<h1>Your input </h1>";
    echo "name : " . $name;
    echo "<br>";
    echo "email : " . $email;
?>
<script>
    var trihard = "<?php $name?>";
    document.getElementById("im retards").innerHTML = trihard;

</script>
</head>