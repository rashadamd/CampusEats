# CampusEats

## Getting Started

To run this project locally, follow these steps:

1. **Clone this repository to your local machine.** 
    - Use Git to clone the Laravel project repository to the new machine.
       Open a terminal or command prompt and run the following command:

          git clone https://github.com/rashadamd/CampusEats.git
3. **Ensure you have PHP and Composer installed.**
    - You can download and install Composer from the official website: https://getcomposer.org/
      
5. **Navigate to the project directory and run `composer install` to install the dependencies.**
   
7. **Create Environment File**
   - Laravel requires an environment file (.env) to run. Create a copy of the .env.example file and name it .env:

         cp .env.example .env
     
8. **Configure your database settings in the `.env` file.**
   
10. **Generate Application Key.**
    - Run the following command to generate a unique application key for the Laravel application:
  
           php artisan key:generate
      
11. **Run `php artisan migrate` to migrate the database.**
    
13. **Start the Laravel development server by running `php artisan serve`.**
    
15. **Access the application in your web browser at `http://127.0.0.1:8000`.**




