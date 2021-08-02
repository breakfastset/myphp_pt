<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="assoc_arrays_action.php" method="POST">
    Check all those time slots you prefer for your vaccination:<br/>
        0800 - 1000 <input type="checkbox" value="0800" name="timeslots[]" id="timeslot1"><br/>
        1100 - 1300 <input type="checkbox" value="1100" name="timeslots[]" id="timeslot2"><br/>
        1400 - 1600 <input type="checkbox" value="1400" name="timeslots[]" id="timeslot3"><br/>
        1700 - 1900 <input type="checkbox" value="1700" name="timeslots[]" id="timeslot4"><br/>
        <button type="submit">Submit your favourite timeslots!</button>
    </form>
</body>
</html>