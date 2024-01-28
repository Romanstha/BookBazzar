
# BookBazzar - An Online Bookstore Project

Overview

BookBazzar is an online bookstore project designed and developed using HTML, CSS, Bootstrap, JavaScript, and PHP. It utilizes the XAMPP server for hosting and MySQL database for data management. This project allows users to browse, search, and purchase books online.


## Table of Contents

    1. Requirements
    2. Installation
    3. Database Configuration
    4. Running the Project
    5. Usage
    6. Features
    7. Contributing
    8. License
    9. Authors
## Requirements
Make sure you have the following software installed before running the project:

- XAMPP server
- Web browser (e.g., Chrome, Firefox)
## Installation

1. Clone the repository or download the project zip file.

```bash
  git clone https://github.com/your-username/BookBazzar.git

```
2. Move the project folder to the htdocs directory of your XAMPP installation.

```bash
    mv BookBazzar C:/xampp/htdocs/
```
3. Start XAMPP Server:
```bash
 - Open XAMPP Control Panel
 - Start Apache and MySQL
```
4. Database Setup:
```bash
 - Open your web browser and go to http://localhost/phpmyadmin/
 - Create a new database named bookbazzar
 - Import the bookbazzar.sql file located in the project's root directory into the newly created database
```
## Database Configuration
 - Open config.php in a text editor
 - Update the database connection details if necessary
```bash
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bookbazzar";

```
## Running the Project
 - Open your web browser
 - Go to http://localhost/BookBazzar/index.php
## Usage/Examples

- User Authentication:

    Register a new account or log in with existing credentials.
    Browsing Books:
- Browsing Books:

    Explore the collection of books available on the homepage.
    Searching Books:
- Searching Books::

    Utilize the search functionality to find specific books.
    Adding to Cart:
- Adding to Cart:

    Add books to your shopping cart for future purchase.
- Checkout:

    Proceed to checkout when ready to purchase.



## Features

- Responsive design for optimal viewing on various devices.
- User authentication for secure login and personalized experiences.
- Cart functionality for users to add and manage selected books.
- Admin panel for easy management of the book inventory and order tracking.


## Contributing

Contributions are always welcome!

If you would like to contribute to the development of BookBazzar, `please follow these guidelines:`

    1. Fork the repository.
    2. Create a new branch for your feature or bug fix.
    3. Make your changes and commit them with descriptive messages.
    4. Push your changes to your fork.
    5. Submit a pull request to the main repository.


## License
This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) - see the LICENSE file for details.


## Authors

- [@Romanstha](https://www.github.com/Romanstha)


# Hi, I'm Roman Shrestha! 👋

