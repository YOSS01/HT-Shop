# WordPress Project

This is a WordPress project hosted locally on WAMP. The application is set up in the `www` folder on your WAMP server.

## Prerequisites

Before you begin, ensure you have the following installed on your local machine:

- [WAMP Server](https://www.wampserver.com/) (Windows)
  - Apache
  - MySQL
  - PHP

## Installation Instructions

Follow these steps to get your WordPress site up and running:

### 1. Clone the Repository or Download the Files

- Download the WordPress files to your local machine.
- Place the entire WordPress project folder in the `www` directory of your WAMP server. The `www` folder is typically located in the WAMP installation directory, e.g., `C:\wamp64\www`.

### 2. Set Up the Database

1. Open WAMP, and ensure the services (Apache and MySQL) are running.
2. Go to your browser and open [phpMyAdmin](http://localhost/phpmyadmin/).
3. Create a new database for your WordPress installation:
   - In phpMyAdmin, click on the "Databases" tab.
   - Enter the name `wordpress` for the database and click "Create."
4. Import the `wordpress.sql` file:
   - In phpMyAdmin, select the newly created `wordpress` database.
   - Click on the "Import" tab.
   - In the "File to import" section, click "Choose File" and select the `wordpress.sql` file found in the `db` folder of your project.
   - Click "Go" to start the import process. Once the file is successfully imported, the database will be ready.

### 3. Configure WordPress

1. Open your browser and go to `http://localhost/` or `http://localhost/wordpress/` where `wordpress` is the name of your project folder in the `www` directory.
2. You should see the WordPress installation screen.
3. Follow the instructions to configure WordPress:
   - Select your language.
   - Enter the database details:
     - **Database Name**: `wordpress` (the name of the database you created).
     - **Username**: `root` (default for WAMP).
     - **Password**: Leave this blank (default for WAMP).
     - **Database Host**: `localhost`.
     - **Table Prefix**: You can leave the default `wp_` or change it if needed.
4. Once you click "Submit," WordPress will test the database connection and prompt you to run the installation.

### 4. Complete the Installation

1. Enter the following information when prompted:
   - **Site Title**: Choose a title for your site.
   - **Username**: `Anonymous` (administrator username).
   - **Password**: `anonymous` (administrator password).
   - **Your Email**: Provide an email address.
2. Click "Install WordPress" to complete the installation.

### 5. Access the WordPress Admin Dashboard

Once the installation is complete, you can log in to the WordPress admin dashboard:

- Go to `http://localhost/wp-admin/` or `http://localhost/wordpress/wp-admin/`.
- Use the following credentials to log in:
  - **Username**: `Anonymous`
  - **Password**: `anonymous`

You can now manage your WordPress site from the admin dashboard.

## Troubleshooting

- If you can't access `phpMyAdmin`, make sure that WAMP is running and that both Apache and MySQL services are active.
- If you encounter a "Error establishing a database connection" message, verify the database credentials (username, password, and database name) are correct.

## Additional Configuration (Optional)

- **Permalinks**: You can configure permalinks by going to the WordPress Admin Dashboard > Settings > Permalinks.
- **Themes and Plugins**: Install additional themes and plugins through the WordPress Admin Dashboard to customize your site.

## Credits

This WordPress project was set up using the WAMP stack on Windows. All WordPress files are based on the official WordPress release.

---

Enjoy using WordPress!
