<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $houseInfo = array(
            "Bedrooms" => "2",
            "Bathrooms" => "2",
            "Street Address"=> "89 Oaks Avenue",
        );
    
    ?>
    <nav class="site-nav grid">
        <h1>Prashrijan Shrestha</h1>
        <ul>
            <li><a href="index.html" target="_blank">Home</a></li>
            <li><a href="studySub.html" target="_blank">My Study Subject</a></li>
            <li><a href="hobbies.html" target="_blank">My Hobbies</a></li>
            <li><a href="music.html" target="_blank">My Music</a></li>
            <li><a href="house.php">My House</a></li>
        </ul>
        <i class="ri-menu-line"></i>
    </nav>
    
    <main class="house-info">
        <h2>My House Information</h2>
        <table>
            <?php
                echo "<thead>";
                    echo "<th>Attribute</th>";
                    echo "<th>Details</th>";
                echo "</thead>";
                foreach ($houseInfo as $key => $value) {
                    echo "<tbody>";
                        echo "<tr>";
                            echo "<td>$key</td>";
                            echo "<td>$value</td>";
                        echo "</tr>";
                    echo "</tbody>";
                }
            ?>
        </table>

    </main>

    <section id="moving">
        <h1>Move To Different Sections</h1>
        <a href="#top">
            <li>Top</li>
        </a>
        <a href="index.html" target="_blank">
            <li>Home Page</li>
        </a>
        <a href="studySub.html" target="_blank">
            <li>My Study Subjects Page</li>
        </a>
        <a href="music.html" target="_blank">
            <li>My Music Page</li>
        </a>
        <a href="hobbies.html" target="_blank">
            <li>My Hobbies Page</li>
        </a>
    </section>

    <footer>
        <div class="grid">
            <p class="created-by">Created By Prashrijan Shrestha 2024</p>
            <ul class="social">
                <li><a href="mailto:shresthaprashrijan@gmail.com"> <i class="ri-mail-line"></i></a></li>
                <li><a href="tel:+61450528184"> <i class="ri-phone-line"></i></a></li>
                <li><a href="https://www.linkedin.com/in/prashrijanshrestha/"> <i class="ri-linkedin-box-line"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>