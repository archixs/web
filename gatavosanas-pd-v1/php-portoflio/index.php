<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <img src="" alt="">

    <p>apraksts par mani</p>

    <?php
        $names = [
            1=> ['name' => 'janis', 'email' => 'gmail.com'],
            2=> ['name' => 'andris', 'email' => '2gmail.co'],
            3=> ['name' => 'krists', 'email' => ''],
        ];
        echo '<ul>';
        foreach($names as $name) {
            echo "<li>Name: " . ['name']. ", Email: " .$name['email'] ."</li>";
        }
        echo "</ul>";

    ?>

    

    <a href="contact.html">Sazinaties ar mani!</a>

    <form action="/" method="post"></form>
        <label for="first_name">Vārds</label>
        <input type="text" id="first_name" name="first_name">
        <select name="" id="">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>

        <input type="submit" value="Send">

    <h1>Unordered list</h1>

    <ul>
        <li>Milk</li>
        <li>Tea</li>
    </ul>

    <h2>Ordered list</h2>

    <ol>
        <li>Milk</li>
        <li>Tea</li>
    </ol>


</body>
</html>