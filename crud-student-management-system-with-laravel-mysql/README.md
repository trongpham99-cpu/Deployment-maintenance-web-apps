# CRUD Student Management System with Laravel and MySQL

This project is a simple CRUD (Create, Read, Update, Delete) application for managing student data. It is built with Laravel and MySQL.

## Table of Contents

- [CRUD Student Management System with Laravel and MySQL](#crud-student-management-system-with-laravel-and-mysql)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Usage](#usage)
  - [Technologies](#technologies)

## Features

- Basic CRUD operations (Create, Read, Update, Delete) for student data

## Prerequisites

Before you begin, ensure you have met the following requirements:

1. **PHP and Composer Installed**

    Check if you have PHP installed by running this command:

    ```bash
    php -v
    ```

    Also, check if you have Composer installed by running this command:

    ```bash
    composer -v
    ```

    If you don't have PHP or Composer installed, you can download and install them from their official websites.

2. **MySQL Installed and Running**

    Ensure MySQL is installed and running on your machine. You can download it from [here](https://dev.mysql.com/downloads/mysql/).

## Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/trongpham99-cpu/Student-Management-Laravel.git
    cd Student-Management-Laravel
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Set Up Your Environment Variables**

    Copy the example environment file and configure your database connection:

    ```bash
    cp .env.example .env
    ```

    Edit the `.env` file to match your MySQL configuration:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

4. **Run Migrations**

    ```bash
    php artisan migrate
    ```

5. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

6. **Generate Students Model and Migration**

    ```bash
    php artisan make:model Student -m
    ```

...
Read more here [Setup Demo Laravel - Student Management](https://ductrong-pham.notion.site/Setup-Demo-Laravel-Student-Management-cf8d675be43344958e6a573b542faa7a)

## Usage

1. **Start the Development Server**
    ```bash
    php artisan serve
    ```
2. **Access the Application**
    The application will be running on `http://localhost:8000`.
3. **Access to the students page**
    The students page will be running on `http://localhost:8000/students`.

## Technologies

- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)