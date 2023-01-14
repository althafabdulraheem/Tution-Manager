<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addStudent-back.php" method="post">
        <input type="text" placeholder="enter name" name="name" required>
        <input type="radio" value="male" name="gender" required>
        <input type="radio" value="female" name="gender" required>
        <select name="class">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="date" name="age" required>
        <input type="number" name="roll" placeholder="roll">
        <input type="text" placeholder="fathers name" name="father" required>
        <input type="text" placeholder="mothers name" name="mother" required>
        <input type="text" placeholder="schools name" name="school" required>
        <input type="tel" placeholder="enter the mobile number" maxlength="10" minlength="10" pattern="[0-9]{10}" title="pls enter 10 digits" required>
        <input type="submit" name="studsubmit">
    </form>
</body>
</html>