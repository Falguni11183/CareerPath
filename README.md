# CareerPath

CareerPath is a web-based career guidance and assessment platform designed to help students identify suitable career paths based on their interests, skills, and assessment performance.

The system provides a career assessment, evaluates user responses, and recommends suitable career profiles such as Software Engineer, Business Analyst, Data Analyst, Product Manager, and UI/UX Designer. It also provides career roadmaps to guide students in developing the skills required for their selected career path.

The application includes separate User and Admin modules for managing assessments, career profiles, users, results, and career roadmaps.

## Project Structure

* `app/` - Main CodeIgniter 4 application folder containing Controllers, Models, Views, and configuration files.
* `public/` - Publicly accessible files such as CSS, JavaScript, and other assets.
* `writable/` - Cache, logs, and other writable application files.
* `system/` - CodeIgniter 4 framework system files.
* `tests/` - Application testing files.
* `env` - Environment configuration file.
* `spark` - CodeIgniter command-line tool.

## Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript
* Bootstrap

### Backend

* PHP
* CodeIgniter 4

### Database

* MySQL

### Server Environment

* WAMP Server
* Apache
* MySQL
* phpMyAdmin

## Main Features

### User Module

* User Registration
* User Login and Logout
* User Dashboard
* Career Aptitude Assessment
* Career Recommendation
* Assessment Result
* Career Profile Information
* Career Roadmap
* Roadmap Progress Tracking
* Mark Roadmap Steps as Completed
* User Profile Management

### Career Assessment

The system provides a career aptitude assessment to analyze the interests and abilities of users.

The assessment evaluates different areas such as:

* Technical Skills
* Business and Analytical Skills
* Data and Statistics
* Design and Creativity
* Management and Leadership

Based on the assessment performance, the system recommends a suitable career profile to the user.

### Career Profiles

The system provides different career profiles, including:

* Software Engineer
* Business Analyst
* Data Analyst
* Product Manager
* UI/UX Designer

Each career profile contains:

* Career Name
* Career Description
* Career Roadmap
* Skills and Learning Path

### Career Roadmap

The career roadmap provides a step-by-step learning path for each career profile.

Example:

Learn C → Java → PHP → MySQL → CodeIgniter → Internship

Users can follow the roadmap and track their progress by marking completed steps.

## Admin Module

The Admin Module allows administrators to manage the complete system.

### Admin Features

* Admin Login
* Admin Dashboard
* View Total Users
* View Total Questions
* View Test Attempts
* View Career Profiles
* View Results by Career Profile
* Manage Question Bank
* Add Questions
* Edit Questions
* Delete Questions
* Manage Career Profiles
* Add Career Profiles
* Edit Career Profiles
* Delete Career Profiles
* Manage Career Roadmaps
* View Users
* View Assessment Results

## Admin Dashboard

The Admin Dashboard provides an overview of the system, including:

* Total Users
* Total Questions
* Total Test Attempts
* Total Career Profiles
* Results by Career Profile

This helps the administrator monitor and manage the platform efficiently.

## Database Tables

The application uses a MySQL database named:

careerpath

Main database tables include:

* `users`
* `admin`
* `questions`
* `career_profiles`
* `results`
* `roadmaps`
* `user_roadmap_progress`

## Setup Instructions

### Prerequisites

Make sure the following software is installed:

* PHP
* WAMP Server
* MySQL
* Composer
* CodeIgniter 4
* Web Browser

### Database Setup

1. Start WAMP Server.

2. Start the following services:

   * Apache
   * MySQL

3. Open phpMyAdmin.

4. Create a database named:

careerpath

5. Import or create the required database tables.

6. Configure the database connection in the CodeIgniter 4 environment configuration file.

Example database configuration:

database.default.hostname = localhost

database.default.database = careerpath

database.default.username = root

database.default.password =

database.default.DBDriver = MySQLi

database.default.port = 3306

## Running the Project

### Step 1: Navigate to the Project Folder

Open Command Prompt or Terminal and navigate to the project directory:

cd C:\wamp64\www\CareerPath

### Step 2: Start the CodeIgniter Development Server

Run the following command:

php spark serve

The application will run at:

[http://localhost:8080](http://localhost:8080)

## Application URLs

### User Application

Home Page:

[http://localhost:8080](http://localhost:8080)

Login:

[http://localhost:8080/login](http://localhost:8080/login)

Registration:

[http://localhost:8080/register](http://localhost:8080/register)

Assessment:

[http://localhost:8080/assessment](http://localhost:8080/assessment)

Career Result:

[http://localhost:8080/result](http://localhost:8080/result)

Career Roadmap:

[http://localhost:8080/roadmap](http://localhost:8080/roadmap)

### Admin Module

Admin Login:

[http://localhost:8080/admin/login](http://localhost:8080/admin/login)

Admin Dashboard:

[http://localhost:8080/admin/dashboard](http://localhost:8080/admin/dashboard)

Question Bank:

[http://localhost:8080/admin/questions](http://localhost:8080/admin/questions)

Career Profiles:

[http://localhost:8080/admin/career-profiles](http://localhost:8080/admin/career-profiles)

## Development

The project is developed using the CodeIgniter 4 MVC architecture.

### MVC Architecture

* **Models** - Handle database operations.
* **Views** - Display the user interface.
* **Controllers** - Handle application logic and user requests.

## Building for Production

Before deploying the application to a production server:

* Configure the production database.
* Set the environment to production.
* Configure the web server.
* Update the database credentials.
* Disable debug mode.
* Configure the required environment variables.


## Future Enhancements

Future improvements may include:

* AI-based career recommendations
* More advanced aptitude analysis
* Skill-based career matching
* Online learning resources
* Course recommendations
* Resume Builder
* Internship Recommendations
* Progress Analytics
* Career Comparison
* Email Notifications

## Contributing

Contributions are welcome.

1. Fork the repository.
2. Create a new feature branch:

git checkout -b feature-name

3. Make the required changes.

4. Commit your changes:

git add .

git commit -m "Add new feature"

5. Push the branch:

git push origin feature-name

6. Create a Pull Request.

## License

This project is developed for educational and academic purposes.
