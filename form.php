<?php
$firstnameErr = $lastnameErr = $phoneErr = $emailErr = $emailSubjectErr = $messageErr = "";
$firstname = $lastname = $phone = $email = $emailSubject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "Firstname is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["email"]) || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["emailSubject"])) {
        $emailSubjectErr = "Email subject is required";
    } else {
        $emailSubject = test_input($_POST["emailSubject"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    if ($firstnameErr == "" && $lastnameErr == "" && $phoneErr == "" && $emailErr == "" && $emailSubjectErr == "" && $messageErr == "") {
        header("Location: https://www.theroc.eu/wp-content/uploads/2017/03/weg-met-succes-e1430209957762-930x490.jpg");
    }
}

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
        <input type="text" id="firstname" name="firstname" minlength="5" pattern="^[a-zA-Z]{5,20}$" title="5 to 20 letters" required />
        <span class="error">* <?php echo $firstnameErr;?></span>
    </div>
    <div>
        <label for="lastname">Lastname: </label>
        <input type="text" id="lastname" name="lastname" minlength="5" pattern="^[a-zA-Z]{5,20}$" title="5 to 20 letters" required />
        <span class="error">* <?php echo $lastnameErr;?></span>
    </div>
    <div>
        <label for="phoneNumber">Phone number: </label>
        <input type="tel" id="phoneNumber" name="phone" pattern="[0-9]{2}[-\.][0-9]{2}[-\.][0-9]{2}[-\.][0-9]{2}[-\.][0-9]{2}" title="Only . - and numbers are allowed" required />
        <span class="error">* <?php echo $phoneErr;?></span>
    </div>
    <div>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" required />
        <span class="error">* <?php echo $emailErr;?></span>
    </div>
    <div>
        <label for="emailSubject">Email subject: </label>
        <select id="emailSubject" name="emailSubject" required>
            <option value="firstContact">First contact</option>
            <option value="information">Get some information</option>
            <option value="complaints">Complaints</option>
        </select>
        <span class="error">* <?php echo $emailSubjectErr;?></span>
    </div>
    <div>
        <label for="message">Message: </label>
        <textarea id="message" name="message" required></textarea>
        <span class="error">* <?php echo $messageErr;?></span>
    </div>
    <button type="submit">Submit your message</button>
</form>
