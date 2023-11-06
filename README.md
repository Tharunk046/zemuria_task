**Installation procedures:**

**git clone https://github.com/Tharunk046/zemuria_task.git**

**cd zemuria_task**

Laravel installation command:
**composer install**

command for  creating env file
**cp .env.example .env**

Command to install node modules:
**npm install**

**Table migration:**

Create new database **zemuria**

In env file give **DB_DATABASE=zemuria**

In command prompt run **php artisan migrate**

Adding 2 rows in users table (user and admin) **php artisan migrate:fresh --seed --seeder=UserSeeder**

**for login:**
user ->  email:tharun@gmail.com pass:Tharun@123
admin -> email:admin@gmail.com pass:Admin@123

**Running the project:**

Command for running the project:
**php artisan serve**

command for running the frontend(javascript and bootstrap):
**npm run dev**

xampp server is needed to run MySql and Appache

