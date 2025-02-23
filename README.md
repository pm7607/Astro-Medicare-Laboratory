# Astro-Medicare-Laboratory

## How to Install on Your Local System
1. Download the project files from the repository.
2. Start the XAMPP service (ensure Apache and MySQL are running).
3. Open your web browser and go to `http://localhost/phpmyadmin`.
4. Create a new database named `astro_medicare`.
5. Import the provided SQL file into the `astro_medicare` database.
6. Move all project files to the `htdocs` folder inside your XAMPP installation directory.
7. Open your browser and navigate to `http://localhost/Astro-Medicare-Laboratory` to access the application.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Database Schema](#database-schema)
- [Routes](#routes)
- [Contributing](#contributing)
- [License](#license)

## Introduction
Astro-Medicare-Laboratory is a web-based application designed to manage laboratory appointments, test results, and contact support for a medical laboratory. The application provides a user-friendly interface for patients to book appointments, view test results, and contact the laboratory for support.

## Features
- User authentication (login and registration)
- Book laboratory appointments
- View test results
- Contact support

## Installation
1. Clone the repository from GitHub.
2. Navigate to the project directory.
3. Set up your local server (e.g., XAMPP) and place the project files in the `htdocs` directory.
4. Create a MySQL database and import the provided SQL file to set up the database schema.
5. Update the database configuration in the `db_connection.php` file with your database credentials.

## Configuration
1. **Database Configuration**:
    - Update the `db_connection.php` file with your database credentials.

2. **Apache Configuration**:
    - Ensure that `.htaccess` overrides are enabled in your Apache configuration.

## Usage
1. Start your local server (e.g., XAMPP).
2. Open your web browser and navigate to `http://localhost/Astro-Medicare-Laboratory`.
3. Register a new user account or log in with an existing account.
4. Use the application to book appointments, view test results, and contact support.

## Database Schema
- Users table to store user information.
- Contact messages table to store contact form submissions.
- Appointments table to store appointment bookings.

## Routes
- `/` - Home page
- `/home` - Home page
- `/appointment` - Book appointment
- `/test-results` - View test results
- `/contact` - Contact support
- `/login` - User login
- `/logout` - User logout

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License
This project is open-source and available under the MIT License.

