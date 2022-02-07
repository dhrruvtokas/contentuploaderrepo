# contentuploaderrepo
[Structure](#structure)

[Overview](#overview)

[Project Installation](#project-installation)

[Technologies](#technologies)

[Requirements](#requirements)

[Contributors](#contributors)

# Structure

This specific Github repository consists of an index file (front-end) and a php file (back-end) which can be used to access and modify the project accordingly.

# Overview

Content Uploader makes use of JavaScript based code to select and upload a file to a Local Server (example: AJAX).


# Project installation

The package works as a stand-alone application which can be executed by opening the provided index.html file in any supported web-browser (Tested on Edge, Chrome, Mozilla, and Safari).

# Technologies

1. HTML: Used for creating front-end controls.
2. Javascript: Used for selecting a file from a local system and passing it to the PHP server.
3. PHP: Used for uploading a selected file to a local server (AJAX).
4. file_name: A file-type control used to select a file from the file system.
5. upload_file: A button-type control used to upload a file to the Apache server.
6. upload(): A javascript function that will save the form data (collected through these controls) by using the "POST" method and then fetch the php file to pass the data (file) in it.
7. await: Used to fetch the php file.
8. alert: Used to genrate a success message whe the file is uploaded successfully.
9. get_file: A variable which is used to store the file name.
10. mkdir: Used to create a new directory where file will be uploaded on the local server.
11. path: Used to set a path of that new directory.
12. move_uploaded_file: Used to move the uploaded file to the local server (using the specified path).

# Requirements

1. Web-broswer client.
2. An Apache Server (XAMPP can be installed).

# Contributors

1. Dhrruv Tokas (Available through starrytricks@gmail.com).



