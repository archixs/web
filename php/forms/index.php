<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>Forms</h1>


    <?php echo "text from php"; ?>
    <?php echo "<h2>from php 2<h2>"; ?>

    <?php
        $SomeText = "some text ";
        echo $SomeText;
        ?>
        
        <?php
        $currentTime= date('d/m H:i');
        echo $currentTime;
        ?>

    <a href="about.php">About</a>
    <form action="" method="post">

        <label for="title">Title</label>
        <input type="title" id="title" name="title"placeholder="Enter text">

        <br>
        
        <label for="content">Content</label>
        <input type="content" id="content" name="content"placeholder="Default text">

        <br>

        <input type="submit" value="Send">

        <br>

        <input 
        type="radio"
        id="carrot"
        name="vegetables"
        value="carrot"
        checked
        >
        <label for="carrot">Carrot</label>

        <input 
        type="radio"
        id="lettuce"
        name="vegetables"
        value="lettuce"
        >
        <label for="lettuce">lettuce</label>

        <br>

        <label for="cars">Choose a car</label>

        <select name="cars" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="bmw">BMW</option>
            <option value="audi">Audi</option>
        </select>

    </form>

    <div data-color="red">

    </div>

</body>
</html>