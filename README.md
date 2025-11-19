# 🛠️ Services/Maintenance Quotation Generator

This repository hosts a robust, user-friendly application designed to **streamline the creation and management of service and maintenance quotations**. It provides a powerful tool for generating professional, accurate, and customized quotes for clients.

---

## ✨ Key Features

* **Maintenance Scheduling Integration:** Track recurring maintenance agreements and their associated quoting history.
* **Automated Calculation:** Eliminate manual errors with automatic cost summation, tax application, and discount calculation.
* **CSV/Export Functionality:** Generate clean, printable, and client-ready quote documents.

---

## 💻 Tech Stack

The application is built using a classic LAMP-stack configuration:

| Component | Technology | Description |
| :--- | :--- | :--- |
| **Frontend** | HTML, CSS, JavaScript | Handles the user interface and client-side interactions. |
| **Backend** | PHP | Processes form submissions, manages business logic, and communicates with the database. |
| **Database** | MariaDB | Stores all quote data, client records, services, and configuration settings. |

---

## ⚙️ Setup & Installation

To get this application running locally, you must first configure the environment and database.

### Prerequisites

1.  A local development environment (e.g., XAMPP, WAMP, MAMP) that supports **PHP** and **MariaDB**.
2.  A web browser.

### Database Configuration

1.  Ensure your local MariaDB service is running.
2.  Access your database management tool (commonly **phpMyAdmin** via your development environment dashboard).
3.  Create a new database (we recommend naming it `quotation_db`).
4.  Import the provided database schema file (`database/schema.sql` - *Note: Update this path if the file location is different*) into this new database.

### Application Setup

1.  Clone this repository to your local web server directory (e.g., `htdocs` or `www`).
2.  Navigate to the backend configuration file (e.g., `config/db_connect.php` - *Note: Update this path to your actual file*).
3.  Update the following connection parameters to match your MariaDB credentials:

    ```php
    $servername = "localhost"; // or your database host
    $username = "root";        // your database username
    $password = "";            // your database password
    $dbname = "quotation_db";  // the name you chose in step 3
    ```

4.  Access the application in your browser (e.g., `http://localhost/Services-Quotation-Generator/`).

---

## 💡 Contributing

We welcome contributions! If you have suggestions or find bugs, please open an issue or submit a pull request.

---

## 📄 License

This project is licensed under the **MIT License** - see the [LICENSE.md](LICENSE.md) file for details.
