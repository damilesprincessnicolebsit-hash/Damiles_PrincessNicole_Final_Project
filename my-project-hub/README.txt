MY PROJECT HUB — LOCAL XAMPP + ONLINE HOSTING

CONTENTS
- index.php: main project dashboard
- projects/: each uploaded GitHub project is kept in its own folder
- projects/php-conditionals/: new sample activity based on the uploaded if/else assignment instructions
- projects/exploring-xml/index.php: small viewer for the supplied student_data.xml
- assets/css/project.css: shared style for the added activity pages

RUN LOCALLY
1. Extract my-project-hub-xampp-online.zip.
2. Copy the extracted my-project-hub folder to C:\xampp\htdocs\
3. Start Apache in the XAMPP Control Panel. MySQL is not required by the included demos.
4. Open http://localhost/my-project-hub/ in your browser.

ONLINE HOSTING
Upload the folder contents to a PHP-compatible web host (Apache/Nginx with PHP). The main page and PHP activities will not run on GitHub Pages alone. Check the host's PHP version and ensure external API access is allowed.

NOTES
- The student-grade-calculator repository mentioned in your PDF is linked from the dashboard, but its source files were not among the uploaded ZIP files. Download it from https://github.com/arlanteantonetebsit-ux/student-grade-calculator and add its files to projects/student-grade-calculator if you want it to run locally.
- The supplied PDFs are reference instructions, not executable projects. They were not copied into the web root.
- The conditional-statements page is a newly created sample based on the assignment brief. Its grading thresholds are illustrative and may not match your instructor's required grading scale.
- Review team member names, email addresses, sample student data, and any other personal information before publishing publicly.
- The original project source files were retained in separate folders except for these small fixes/additions: the PHP isset name-case typo was corrected; JSON PHP request handling was aligned with the demo; a missing lab4_input.php endpoint was added for test_lab4.html; and an XML viewer was added.
