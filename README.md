Tom’s Ditching & Backhoe Web Application
//Project Description//

This project is a full-stack web application for a local construction business, Tom’s Ditching & Backhoe Inc. The site presents company services, testimonials, contact information, and a responsive design. It also includes an admin login system and dynamic business hours that can be updated through a database instead of editing HTML.

//Key Features//

- Responsive landing page: hero section, service grid, company info, testimonials, and contact form

- Admin login system using PHP sessions

- Dynamic business hours stored in and retrieved from a MySQL database

- Client-side form validation using JavaScript

- Shared navigation and footer, with section anchor links for Services, About, and Contact

//Technologies Used//

- Frontend: HTML5, CSS3, JavaScript

- Backend: PHP 8+

- Database: MySQL

- Server: Apache (via XAMPP)

- Design: Figma (wireframe and template)

//Setup Instructions//

Place this project inside the XAMPP htdocs directory

'C:\xampp\htdocs\toms\'


- Start Apache and MySQL in XAMPP

- Run the SQL scripts located in:
  'toms/database/scripts'

- These scripts create necessary tables and seed initial data.

Open the application in a browser:

http://localhost/toms/index.php


Log in to the admin panel using:

http://localhost/toms/login.php


(Default credentials are 'admin" & 'password123')
