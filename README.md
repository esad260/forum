
# QMUL Student Forum Web Application Setup Guide

Welcome to the QMUL Student Forum Web Application. This guide will walk you through the setup process to get the forum running on your local machine using XAMPP.

## Prerequisites

Before you begin, ensure you have XAMPP installed on your computer. If you do not have XAMPP installed, download it from [Apache Friends](https://www.apachefriends.org/index.html) and follow the installation instructions for your operating system.

## Installation Steps

### 1. Downloading the Project

If you haven't already, download the zip file containing the QMUL Student Forum project. If you received this file from a repository, ensure you have the complete package.

### 2. Placing the Project in XAMPP

Extract the downloaded zip file. Copy the extracted folder, likely named `forum` or similar, to the `htdocs` directory in your XAMPP installation folder. This is typically found at:

- **Windows**: `C:\xampp\htdocs\`
- **Mac**: `/Applications/XAMPP/htdocs/`
- **Linux**: `/opt/lampp/htdocs/`

### 3. Running XAMPP Services

Open the XAMPP Control Panel and start the following services:

- **Apache**: This service is required to serve the web pages.
- **MySQL**: This service manages the database.

Ensure both services are running by checking their status in the control panel.

### 4. Accessing the Forum

Open a web browser and navigate to the forum by entering the following URL:

```
http://localhost/forum/
```

This URL directs your browser to the forum's index page hosted locally on your machine.

### 5. Accessing phpMyAdmin

To manage the forum’s database or make any adjustments:

```
http://localhost/phpmyadmin/index.php
```

Here, you can handle database operations required for the forum, such as creating tables or modifying existing ones.

## Usage

After setting up, you should be able to use all functionalities of the QMUL Student Forum, from posting and replying to topics to managing user profiles. Explore the forum's features to familiarize yourself with its operation.

## Support

If you encounter any issues during the installation or use of the forum, retrace the steps to ensure all procedures were followed correctly. For unresolved issues, consult the XAMPP documentation or seek help from online forums.
