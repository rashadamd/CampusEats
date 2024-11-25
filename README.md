### **README.md**

```markdown
# CampusEats Laravel Project

## Overview
CampusEats is a Laravel-based web application that connects users with restaurants. Users can explore restaurants, view menus, and place orders, while restaurants can manage menus and track order statuses.

---

## **Features**
1. User and Restaurant registration and login (differentiated by "client" type).
2. Restaurants:
   - Add, view, and delete menu items.
   - Update order statuses (Pending, Processing, Completed).
3. Users:
   - View restaurants and their menus.
   - Place orders with multiple quantities.

---

## **Requirements**
1. PHP >= 8.0
2. Composer
3. Laravel >= 10.x
4. MySQL
5. Git (to clone the repository)

---

## **Installation Instructions**

### **Step 1: Clone the Repository**
Open your terminal and run the following command to clone the repository:
```bash
git clone https://github.com/your-username/campuseats.git
```
Navigate into the project directory:
```bash
cd campuseats
```

---

### **Step 2: Install Dependencies**
Run Composer to install backend dependencies:
```bash
composer install
```
Install frontend dependencies using npm:
```bash
npm install
npm run dev
```

---

### **Step 3: Set Up Environment Variables**
Create a `.env` file in the project root by copying the example file:
```bash
cp .env.example .env
```
Edit the `.env` file to configure your database connection:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=campuseats
DB_USERNAME=root
DB_PASSWORD=
```

---

### **Step 4: Generate Application Key**
Run the following command to generate the application key:
```bash
php artisan key:generate
```

---

### **Step 5: Run Migrations and Seeders**
Run database migrations to set up tables:
```bash
php artisan migrate
```
(Optional) Seed the database with test data:
```bash
php artisan db:seed
```

---

### **Step 6: Start the Development Server**
Start the local development server:
```bash
php artisan serve
```
Open your browser and visit:
```
http://127.0.0.1:8000
```

---

## **Usage Instructions**
1. **User Workflow**:
   - Register/login as a user.
   - Explore restaurants, view menus, and place orders.

2. **Restaurant Workflow**:
   - Register/login as a restaurant.
   - Add, delete, or view menus.
   - Manage orders and update their statuses.

---

## **Additional Commands**
- Clear application cache:
  ```bash
  php artisan cache:clear
  ```

### **Contact**
If you have any issues or questions, feel free to open an issue in this repository.
```
nameisrashad@gmail.com
