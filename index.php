<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/mediaqueries.css">
    <title>Portofolio</title>
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="./javascript/validimiFormes.js"></script>
</head>
<body>

    <nav id="navbar"></nav>

    <header id="header"></header>

    <section id="skills" style="padding: 80px 0px;"></section>

    <section id="education" style="padding: 80px 0px;">
        <div style="text-align: center;">
            <h1>EDUCATION</h1>
        </div>
        <div>
            <h1>University</h1>
            <p><i>Bachelor in Computer Engineering</i></p>
            <span>&#9900; September 2018 - October 2021</span>
    
    
            <h1 class="educationSections">High School</h1>
            <p><i>Shaban Spahija, Technical School</i></p>
            <span>&#9900; September 2015 - June 2018</span>
    
    
            <h1 class="educationSections">Primary School</h1>
            <p><i>7 Shtatori, Peje</i></p>
            <span>&#9900; September 2006 - June 2015</span>
        </div>
    </section>

    <section id="works" style="padding: 80px 0px;">
        <div id="imageAndContent">
            <h1 style="text-align: center; font-size: 30px;">Some of my works</h1>
            <br><br><br>
            <div class="content">
                <a href="https://uranlajqi.github.io/input-text-displayer/" target="_blank">
                    <img src="./foto/work1.PNG" alt="input text project" width="500">
                </a>
                <div class="ndaje"></div>
                <span>
                    A website in witch you can write <br>comments and send those comments.
                </span>
            </div>
            <div class="content">
                <a href="https://9fx57cpxyqznsyk6aobl9w-on.drv.tw/www.autori.com/html%20files/" target="_blank">
                    <img src="./foto/work2.PNG" alt="input text project" width="500">
                </a>
                <div class="ndaje"></div>
                <span>
                    A website for an author. There are multiple<br> pages where you can find
                    his biography, writing,<br> interviews and some of his books.
                </span>
            </div>
            <div class="content">
                <a href="https://focused-kowalevski-db5a77.netlify.app/" target="_blank">
                    <img src="./foto/work3.PNG" alt="input text project" width="500">
                </a>
                <div class="ndaje"></div>
                <span>
                    A website where you can search for a<br> book and if it is there you
                    read it or download it.
                </span>
            </div>
            <br><br>
            <h1>Here you can find some of my other works</h1>
            <a href="https://github.com/UranLajqi" target="_blank">github.com/UranLajqi</a>
        </div>
    </section>

    <div id="contactMe" style="padding: 80px 0px;">
        <form name="myForm" action="./php/formsent.php" onsubmit="return validateForm()" method="post">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Your name" required>
            <br><br>
            <label for="lastName">Last name</label><br>
            <input type="text" name="lastName" id="lastName" placeholder="Your last name" required>
            <br><br>
            <label for="email">Your email*</label><br>
            <input type="email" name="email" id="email" placeholder="Your email address" required>
            <br><br>
            <label for="message">Message*</label><br>
            <textarea id="message" onclick="Fshije()" name="message" required>Enter your message 
            </textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <div>
            <h1>Impressed?</h1>
            <br>
            <p>Let us cross paths - reach out and we will<br>
                 work on your next project together.
            </p>
            <br>
            <p>
                <i>
                Uran Lajqi<br>
                Lagjia Alija Izbegovic, Rajoni 1, Vitomerice<br>
                Peje 80000, Kosove<br>
                (+383)44-102-805<br>
                uran.lajci@student.uni-pr.edu
                </i>
            </p>
            <br><br><br><br>
        </div>
    </div>

    <section id="feedback">
        <h1>Some Possitive Feedback<br> That Encourage Us</h1>
            <br>
            <div id="feedbackCards">
                <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "skills";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if(!$conn){
                        die('Could not Connect My Sql:' .mysql_error());
                    }

                    $sql = "SELECT name, comment, project FROM feedback";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<div class='feedbackCard'>";
                        echo $row["name"]. " <br>" . $row["comment"]. "<br>" . $row["project"]. "<br>";
                        echo "</div>";
                      }
                    } else {
                      echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
    </section>

    <footer>
        &copy 2022
    </footer>

	<script src="./javascript/formSkripta.js"></script>
    <script type="text/babel" src="./react/Navbar.js"></script>
    <script type="text/babel" src="./react/Header.js"></script>
    <script type="text/babel" src="./react/Skills.js"></script>
</body>
</html>
