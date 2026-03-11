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
<img width="1024" height="1536" alt="Student management system on AWS architecture" src="https://github.com/user-attachments/assets/384f13b5-490b-42b9-8fa8-e41d06d86579" />



### EC2 Instance
<img width="1920" height="1080" alt="ec2" src="https://github.com/user-attachments/assets/a0608e9e-dc75-4177-b19f-77fe7ebfeb01" />


<img width="1920" height="1080" alt="instance" src="https://github.com/user-attachments/assets/2f00f92c-d875-4aa9-bfb5-8f8538d51bf4" />


### Website Running

<img width="1920" height="1080" alt="web2 (2)" src="https://github.com/user-attachments/assets/67ee930b-6c97-4d7e-936e-9671a2684a29" />
<img width="1920" height="1080" alt="web4" src="https://github.com/user-attachments/assets/5d469ca1-7cf4-469a-b01d-81b61d38ab0f" />
<img width="1920" height="1080" alt="web3" src="https://github.com/user-attachments/assets/4eabc05f-7d01-4fd9-aa06-734912753a76" />
<img width="1920" height="1080" alt="web2 (1)" src="https://github.com/user-attachments/assets/eb25ba77-182c-4dcb-86ce-b3b82a28746b" />

### RDS Database


<img width="1920" height="1080" alt="rds database" src="https://github.com/user-attachments/assets/832b973e-b654-44db-8f28-ecbf6ab72bdf" />
<img width="1584" height="484" alt="Screenshot 2026-03-11 232143" src="https://github.com/user-attachments/assets/fa555f8a-cda3-48a9-9c80-317cf1678b72" />
<img width="1607" height="516" alt="Screenshot 2026-03-11 232136" src="https://github.com/user-attachments/assets/d1143acc-5fb9-4952-abb6-991e184413d4" />
<img width="1920" height="1080" alt="Screenshot 2026-03-11 232102" src="https://github.com/user-attachments/assets/ceea51c9-4465-4709-8a32-d558b1fecf07" />
<img width="1920" height="1080" alt="security grp" src="https://github.com/user-attachments/assets/f0b65817-e2b6-469f-9a85-459c9f851744" />
<img width="1920" height="1080" alt="database table" src="https://github.com/user-attachments/assets/572cce45-7e9d-4efb-98b6-b787b5f7ddb0" />

## How to Run


1. Launch EC2 instance
2. Install Apache and PHP
3. Create RDS MySQL database
4. Configure security groups
5. Deploy index.php to /var/www/html

## Author

Supriya
Cloud Developer
