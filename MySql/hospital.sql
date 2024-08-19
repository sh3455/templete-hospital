-- Create a database named 'hospital_db'
CREATE DATABASE hospital_db;

-- Use the newly created database
USE hospital_db;

-- Create a table named 'appointments' to store form data
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    doctor VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    medical_condition TEXT NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Verify the table structure
DESCRIBE appointments;
