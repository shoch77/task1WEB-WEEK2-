# task1WEB-WEEK2-

This project provides a web-based interface for controlling a robot. The interface allows users to send commands to the robot, including movement commands (forward, backward, left, right) and stop. Commands are stored in a MySQL database and displayed in a history section on the page.

## Prerequisites
- **XAMPP:** A local server environment including Apache and MySQL.
- **Visual Studio Code (VSCode):** Recommended for code editing.

## Installation

### Step 1: Set Up Environment
1. **Install XAMPP:**
   - [Download XAMPP](https://www.apachefriends.org/index.html) and install it.

2. **Start XAMPP:**
   - Open the XAMPP Control Panel and start Apache and MySQL.

### Step 2: Database Setup
1. **Access phpMyAdmin:**
   - Open phpMyAdmin in your browser at `http://localhost/phpmyadmin`.

2. **Create a Database:**
   - Create a database named `robot_control`.

3. **Create Tables:**
   - Execute the following SQL command in phpMyAdmin to create the necessary table:
     
     ```sql
     CREATE TABLE commands (
         id INT AUTO_INCREMENT PRIMARY KEY,
         command VARCHAR(50) NOT NULL,
         timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

### Step 3: Project Files Setup
1. **Download or Clone the Repository:**
   - Place the project files in the `htdocs` directory of your XAMPP installation:
     -  `C:\xampp\htdocs\robot-control\`

2. **Access the Interface:**
   - Open your browser and navigate to `http://localhost/robot-control/` to view and interact with the control interface.

## Usage
- **Forward:** Move the robot forward.
- **Backward:** Move the robot backward.
- **Left:** Turn the robot left.
- **Right:** Turn the robot right.
- **Stop:** Stop the robot's movement.

Click the respective buttons to send commands to your robot. The command history will display recent commands sent to the robot.

<img src= https://github.com/user-attachments/assets/0d3ba542-7ac9-4275-a582-582f5b28ba6f width=80%>


## Contributing
Contributions to this project are welcome. Please fork the repository and submit a pull request with your changes.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
