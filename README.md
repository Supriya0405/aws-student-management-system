# Student Management System on AWS

This project demonstrates deployment of a simple Student Management System using AWS cloud services.

## Technologies Used

- Amazon EC2
- Amazon RDS (MySQL)
- AWS VPC
- Apache Web Server
- PHP
- MySQL

## Architecture

The system follows a secure cloud architecture:

User → Internet → EC2 Web Server → RDS Database

- EC2 hosts the web application
- RDS stores student records
- Database is deployed inside a private subnet
- Only EC2 can access the database

## Features

- Add student details
- Store data in cloud database
- Display all students in a table
- Secure database architecture

## AWS Components

- Amazon EC2 (Web Server)
- Amazon RDS MySQL (Database)
- AWS VPC
- Public Subnet
- Private Subnet
- Internet Gateway
- Security Groups

## Screenshots

### Architecture Diagram
![Architecture](screenshots/architecture.png)

### EC2 Instance
![EC2](screenshots/ec2.png)

### Website Running
![Website](screenshots/webapp.png)

### RDS Database
![RDS](screenshots/rds.png)

## How to Run

1. Launch EC2 instance
2. Install Apache and PHP
3. Create RDS MySQL database
4. Configure security groups
5. Deploy index.php to /var/www/html

## Author

Supriya
Cloud Computing Enthusiast
