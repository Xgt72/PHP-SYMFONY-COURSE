<?php
$firstnameErr = $lastnameErr = "";
$firstname = $lastname = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["firstname"])) {
//         $firstnameErr = "Firstname is required";
//     } else {
//         $firstname = test_input($_POST["firstname"]);
//     }

//     if (empty($_POST["lastname"])) {
//         $lastnameErr = "Lastname is required";
//     } else {
//         $lastname = test_input($_POST["lastname"]);
//     }

//     if ($firstnameErr == "" && $lastnameErr == "") {
//         header("Location: https://www.theroc.eu/wp-content/uploads/2017/03/weg-met-succes-e1430209957762-930x490.jpg");
//     }
// }

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
        <label for="firstname">Firstname: </label>
        <input type="text" id="firstname" name="firstname" minlength="5" pattern="^[a-zA-Z]{5,45}$" title="5 to 45 letters" required />
        <span class="error">* <?php echo $firstnameErr;?></span>
    </div>
    <div>
        <label for="lastname">Lastname: </label>
        <input type="text" id="lastname" name="lastname" minlength="5" pattern="^[a-zA-Z]{5,45}$" title="5 to 45 letters" required />
        <span class="error">* <?php echo $lastnameErr;?></span>
    </div>
    <button type="submit">Add this new friend</button>
</form>