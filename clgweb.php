<!DOCTYPE html>   
<html>
    <head>
        <title>college website</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 20px;
            }
            h1 {
                color: #333;
            }
            p {
                color: #666;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Welcome to our college</h1>
        </header>

        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.html">Course</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <main>
            <section>
                <h2>About our college</h2>
                <p>This is a brief description of our college.</p>
            </section>

            <section>
                <h2>Available courses</h2>

                <?php
                // PHP code to display available courses
                $courses = ['Computer Science', 'Engineering', 'Business', 'Arts', 'Science'];
                echo "<ul>";
                foreach ($courses as $course) {
                    echo "<li>$course</li>";
                }
                echo "</ul>";
                ?>
            </section>

            <section>
                <h2>Contact information</h2>
                <p>Address: 1233 college, City, India</p>
                <p>Email: info@college.com</p>
                <p>Phone: 8743828201</p>
            </section>
        </main>

        <footer>
            <p>&copy;
                <?php
                echo date("Y");
                ?>
                Our college. All rights reserved.</p>
        </footer>
    </body>
</html>
