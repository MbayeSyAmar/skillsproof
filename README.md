# SkillsProof

## Description
SkillsProof is an online platform that allows students to follow video courses and take an assessment to obtain a certificate. Instructors can sign up and, once approved by a super administrator, they can add courses.

## Technologies Used
- PHP (Laravel)
- MySQL
- HTML/CSS
- JavaScript (with Bootstrap)

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/MbayeSyAmar/skillsproof.git
   cd skillsproof
   ```
2. Install dependencies with Composer:
   ```bash
   composer install
   ```
3. Configure the environment:
   ```bash
   cp .env.example .env
   ```
   Modify the `.env` file with your database information.
4. Generate the application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
6. Start the local server:
   ```bash
   php artisan serve
   ```
   The application will be accessible at `http://127.0.0.1:8000`

## Main Features
- Student and instructor registration and authentication
- Course addition and management by instructors
- Video courses available for students
- Assessment and certification system
- User management by a super administrator

## Contribution
Contributions are welcome! Fork this repository and submit your modifications via a pull request.

## License
This project is licensed under the MIT License.

