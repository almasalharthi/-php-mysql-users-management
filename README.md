# 👥 Users Management System

A simple and interactive **Users Management System** built using **PHP and MySQL**.

This project was developed as part of my web development training to practice connecting a PHP application to a MySQL database, handling user input, displaying database records, and updating data dynamically.

---

## 🌐 Live Demo

🔗 **[View Live Project](https://almas.free.je/index.php)**

---

## 📌 Project Overview

The application provides a simple interface for managing users.

Users can:

- ➕ Add a new user
- 📋 View all users stored in the database
- 🔄 Toggle the user's status between `0` and `1`
- 🗄️ Store and retrieve data using MySQL
- ✅ Validate required form fields using JavaScript

---

<img width="956" height="503" alt="redmephoto" src="https://github.com/user-attachments/assets/efa3d5b5-4bd4-418b-8978-d72a0d260bde" />

<img width="957" height="507" alt="redme1" src="https://github.com/user-attachments/assets/82c76735-1103-4f7a-9163-bbbf59ee844e" />






## ✨ Features

### 👤 Add Users
Users can enter:

- Name
- Age

and submit the form to add a new record to the database.

### 📋 Display Users

All users stored in the MySQL database are displayed in a table containing:

| ID | Name | Age | Status | Action |
|---|---|---|---|---|

### 🔄 Toggle Status

Each user has a **Toggle** button that changes the status:

```text
0 → 1
1 → 0
The updated status is stored directly in the MySQL database.



⚡ Form Validation
JavaScript checks that the required fields are not empty before submitting the form.

🔄 How It Works
1️⃣ Add a User
The user enters their name and age through the form.

PHP receives the submitted data and inserts it into the MySQL database.

2️⃣ Retrieve Users
The application retrieves all records from the users table and displays them in the users table.

3️⃣ Toggle Status
When the user clicks the Toggle button, PHP updates the selected user’s status in the database.

The status changes between:

1<->0


🔐 Database Connection
The application uses PHP’s mysqli extension to establish a connection with MySQL.

The connection is then used to perform database operations such as:
INSERT
SELECT
UPDATE








Testing
The application was tested successfully for the following operations:

✅ Database connection
✅ Adding a new user
✅ Displaying users
✅ Updating user status
✅ Retrieving updated data from MySQL
✅ Form validation


🎯 Learning Outcomes
Through this project, I practiced:

Connecting PHP applications to MySQL
Creating and managing database tables
Handling HTML forms with PHP
Using POST requests
Writing SQL queries
Inserting and retrieving database records
Updating database values
Using JavaScript for client-side validation
Deploying a PHP application to a live hosting environment
