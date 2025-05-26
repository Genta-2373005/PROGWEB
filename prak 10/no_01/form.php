<!DOCTYPE html>
<html>
<head>
    <title>Add Profile</title>
</head>
<body>
    <h2>Add profile</h2>
    <form method="post" action="process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="position">Position:</label>
        <select name="position" id="position">
            <option value="Senior Programmer" selected>Senior Programmer</option>
            <option value="Programmer">Programmer</option>
            <option value="Junior Programmer">Junior Programmer</option>
            <option value="System Analyst">System Analyst</option>
            <option value="Senior Analyst">Senior Analyst</option>
            <option value="Junior Analyst">Junior Analyst</option>
        </select><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password"><br><br>

        <input type="reset" value="Reset">
        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>
