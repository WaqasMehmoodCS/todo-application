# Todo Application

A simple and intuitive Todo Application built with PHP and MySQL to manage daily tasks efficiently. This project allows users to add, update, and delete tasks, while providing a clean & responsive UI with Bootstrap for better user experience.
Live Demo: https://todophp.infinityfreeapp.com

## Features
- Add new tasks with ease.
- Update task descriptions and statuses.
- Delete tasks once completed.
- Responsive design using Bootstrap.
- Simple and clean code structure.

## Tech Stack
- PHP
- MySQL
- HTML/CSS
- Bootstrap 5

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/WaqasMehmoodCS/todo-application.git
   ```
2. Navigate to the project directory:
   ```bash
   cd todo-application
   ```
3. Set up the database:
   - Create a MySQL database named `todo`.
   - Import the provided `todo.sql` file to create the necessary table structure.
4. Configure the database connection:
   - Open `db.php` and ensure the credentials match your local MySQL setup.
5. Start the PHP server:
   ```bash
   php -S localhost:8000
   ```
6. Access the app at `http://localhost:8000/`.

## Usage
- Enter a task in the input field and click the `+` button to add it.
- Click `Update` to modify task details or change the status.
- Click `Delete` to remove a task from the list.

## Project Structure
```
├── index.php
├── addTask.php
├── tasks.php
├── actions.php
├── db.php
├── header.php
├── footer.php
├── style.css
└── README.md
```

## Contribution
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`feature/new-feature`).
3. Commit your changes.
4. Push to your branch and create a Pull Request.

## Contact
- **GitHub**: [WaqasMehmoodCS](https://github.com/WaqasMehmoodCS)
- **Email**: waqasmehmoodcs@gmail.com

