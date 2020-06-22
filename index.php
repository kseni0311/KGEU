<!DOCTYPE html>
<html>
<head>
    <title>Application</title>
</head>
<body>
    <form action="script_post.php" method="post">
        <label>Name
            <input type="text" pattern="[А-Яа-я]{1,50}" name="name">
        </label>
        <br>
        <label>Last name
            <input type="text" pattern="[А-Яа-я]{1,50}" name="lastname">
        </label>
        <br>
        <label> Arrival date 
            <input type="date" name="income" max="2020-09-10">
        </label>
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
