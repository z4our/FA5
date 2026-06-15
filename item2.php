<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_item2.css">
</head>
<body>
    <?php
    $fullName = "Naz Uzell Z. Zamora";
    $skills = "HTML, CSS, JavaScript, PHP, Python, C++, Java, MySQL";

    $profile = "I am currently a student at the Far Eastern University Institute of Technology, taking up a Bachelor of Science in 
    Information Technology with specialization in Cybersecurity. I am eager to learn as much as I can about the different programming 
    and scripting languages and to apply them in real-world cyber security scenarios. I am also interested in exploring the field of 
    cybersecurity and learning how to protect systems and data from cyber threats.";

    $education = "2022 - 2024: Don Bosco Manila (Salesian Sisters Inc.)<br>
        - STEM Strand<br><br>
        2024 - Present: Far Eastern University Institute of Technology<br>
        - Bachelor of Science in Information Technology with specialization in Cybersecurity";

    $emails = "nzzamora@fit.edu.ph | aromazzan1@gmail.com";
    $phone = "09670484361";

    setcookie("fullName", "Naz Uzell Z. Zamora", time() + 10, "/");
    setcookie("skills", $skills, time() + 10, "/");
    setcookie("profile", $profile, time() + 20, "/");
    setcookie("education", $education, time() + 20, "/");
    setcookie("emails", $emails, time() + 30, "/");
    setcookie("phone", $phone, time() + 30, "/");
    ?>
        
    <h1 id="fullName"><?php if (isset($_COOKIE['fullName'])) { echo $_COOKIE['fullName']; } ?></h1>
    <h3 id="myTitle">Cybersecurity Student</h3>

    <hr>

    <h2 class="title">Skills</h2>
    <p id="skills"><?php if (isset($_COOKIE['skills'])) { echo $_COOKIE['skills']; } ?></p>

    <hr>

    <h2 class="title">Profile</h2>
    <p id="profile"><?php if (isset($_COOKIE['profile'])) { echo $_COOKIE['profile']; } ?></p>

    <hr>

    <h2 class="title">Education</h2>
    <p class="education">
        <?php if (isset($_COOKIE['education'])) { echo $_COOKIE['education']; } ?>
    </p>

    <hr>

    <footer>
        <h2 class="title">Contact Information</h2>
        <p class="contacts">
            Emails: <?php if (isset($_COOKIE['emails'])) { echo $_COOKIE['emails']; } ?>
        </p>
        <p class="contacts">
            Phone: <?php if (isset($_COOKIE['phone'])) { echo $_COOKIE['phone']; } ?>
        </p>
        <a href="index.php">Back</a>
    </footer>
</body>
</html>