# Aviation Cybersecurity Training Platform 

This project is a web-based training platform designed to enhance cybersecurity awareness among aviation professionals. It provides interactive modules, quizzes, and final assessments to simulate real-world cyber threat scenarios such as phishing, malware, and social engineering.


## Project Purpose

The goal of this platform is to fill the gap between general cybersecurity training and aviation-specific needs. It was developed as part of a practical final year academic project.



## Features

- Interactive training for 5 common cyber threats:
  - Phishing
  - Malware
  - Ransomware
  - Wi-Fi Attacks
  - Social Engineering

- Two-question quizzes for each module
- Final 10-question assessment
- Simulated login/logout system
- Unique code verification before assessment
- Score tracking through PHP backend and MySQL
- Clean, mobile-friendly UI using PicoCSS
- Accessibility-compliant and privacy-aware



## Technologies Used

- HTML5
- CSS (PicoCSS)
- JavaScript
- PHP
- MySQL (phpMyAdmin)

---

## How to Run Locally

1. Install [XAMPP](https://www.apachefriends.org/) or similar PHP server
2. Place project files in `/htdocs` directory
3. Start **Apache** and **MySQL** from XAMPP
4. Import `cybersecurity_db.sql` (if provided) into phpMyAdmin
5. Navigate to `http://localhost/index.html` in your browser

---

## Testing Instructions

- Login simulation: `login.php`
- Enter a valid session code (e.g., `RIT123`) on the test page
- Complete training modules and submit quizzes
- Take final assessment and view score popup
- Backend saves test/quiz results into MySQL database

---

## Screenshots

Screenshots are included in the `/screenshots` folder and in the Word report to demonstrate key components such as:
- Homepage
- Training interface
- Quizzes
- Final assessment
- Database structure
- Feedbacks

---

## Author

**Ritesh Vaidya**  
Final Year Computing Student – 2025 -UA92  
This project was developed for academic use only and complies with digital ethics guidelines.

---

## GitHub Repository

https://github.com/riteshvaidya05/Cybersecurity-Training-System.git

