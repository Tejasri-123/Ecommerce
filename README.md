
# Ecommerce Web Application

Welcome to My E-Commerce Web Application project!


## Table Of Contents

 - [Introduction](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#introduction)
 - [Features](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#features)
 - [Technologies Used](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#technologies-used)
 -  [Architecture](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#architecture)
  - [Database Schema And Setup Instructions](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#database-schema-and-setup-instructions)
  - [Users](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#users)
  - [Admin](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#admin)
  - [Application Preview](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#application-preview)
   - [Deployment on AWS EC2](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#deployment-on-aws-ec2 )
   - [Application](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#to-access-application)




## [Introduction](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#introduction)

Fashion Fuse is an ecommerce web application designed to provide users with a convenient and 
user-friendly platform for browsing and purchasing fashion products. The application includes 
features for both users and administrators, allowing for seamless management of products and 
orders. 

## [Features](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#features)

**User Signup and Login**: New users can create an account by providing their name, email address, 
and password. They can securely log in using their email address and password, with JWT token 
included for security. 

**Product Browsing**:Users can easily navigate through different product categories such as men, 
women, kids, and accessories. Information about each product, including images, description, 
and price, is displayed.

**Cart Management and Order Placement**: Users can add products to their cart with a single click. 
A summary of the items in the cart is displayed for easy reference. Users can then confirm their 
order and make a purchase through the application. 

**Admin Section**: Administrators have access to a separate section where they can manage user 
data and add products to the application. They can add new products, update existing product 
information, and remove products that are no longer available.

## [Technologies Used](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#technologies-used)

- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Authentication: JWT (JSON Web Tokens)
- Hosting: AWS EC2
  
## [Architecture](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#architecture)

**Frontend**: The frontend of the application is built using HTML, CSS, and JavaScript. 
The frontend of the application, built using HTML, CSS, and JavaScript, is enhanced with the use 
of the CSS library Bootstrap. Bootstrap provides pre-designed components and styles that help 
in creating a responsive and visually appealing user interface. 

**Backend**: The backend is powered by PHP, which handles user authentication, product 
management, and order processing. 
On the backend, PHP is used to handle user authentication, product management, and order 
processing. PHP scripts interact with the MySQL database to store and retrieve user data, product 
information, and order details. PHP also integrates with the front end to dynamically generate 
content and manage user sessions. 

**Database**: The application uses MySQL database to store user data, product information, and 
order details. 
The MySQL database is used to store all the necessary data for the ecommerce platform. It is 
structured to efficiently store and manage data, ensuring fast and reliable access to information. 
The database schema includes tables for storing user accounts, product details, and order 
information, with relationships defined between them to maintain data integrity.

## [Database Schema And Setup Instruction](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#database-schema-and-setup-instructions)

 ### Database Schema 
The database schema I have designed for the Ecommerce Apllication as shown in the below picture

![schema](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/Ecommerce_Schema.png)


### Setup Instructions

- Install Apache server (Xampp) on your system.
- Create a database called 'ecommerce' in Apache server (Xampp).
- Import the 'ecommerce.sql' file into the 'ecommerce' database.
- Connect the database to the application by changing the username and password in the 'common.php' file.

## [Users](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#users)

**User Registration**
To register as a user, click on the "Signup" button located in the top navigation bar. This will 
redirect you to the registration page where you can fill out the registration form with your details. 
Required information typically includes your name, email address, mobile number and a 
password. 

**User Login**
Once registered, you can log in using your email address and password. Click on the "Login" 
button in the top navigation bar to access the login page. Enter your credentials and click "Login" 
to authenticate. Upon successful login, you will be redirected to the products. 

**Product Browsing**
On the homepage, you can browse through the different categories of products available. Each 
category is usually displayed with a representative image and a brief description. Click on a 
category to view the products it contains. 

**Adding to Cart** 
To add a product to your cart, click on the product's image or name to view its details. On the 
product details page, you will find an "Add to Cart" button. Clicking this button will add the 
product to your cart. You can then continue browsing or proceed to view your cart. 

**Viewing Cart**
To view the items in your cart, click on the "Cart" icon located in the top navigation bar. This will 
take you to your cart page where you can see a list of all the items you have added.  

**Placing an order**
In the cart page, review the items in your cart to ensure everything is correct. Once you are 
satisfied with your selection, click on the "confirm order" button to proceed with placing your 
order. Here you can remove items from your cart if you don’t want them.

## [Admin](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#admin)

**User Management**
Administrators can view a list of all user accounts registered on the platform.  

**Product Management** 
Administrators could add new products to the application by providing details such as product 
name, description, price, and image. They can also update existing product information, including 
price changes or descriptions, and remove products that are no longer available. 

**Order Management**
The order management feature enables administrators to view and manage orders placed by 
users. 

# [Application Preview](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#application-preview)

### Home Page


![Homepage](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/Homepage.png)

### About us


![Aboutus](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/Aboutus.png)


### Products Page

![Products](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/products_page.png)

### User Profile 


![User Details](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/User_Details.png)


### Cart

![Cart](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/cart.png)

## Admin Login
### Login Page


![AdminLogin](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/Admin_login.png)




### Product Edit Page



![Products page](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/products.png)


### Users List

![Users_data](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/users_data.png)


### Orders 


![Orders_data](https://github.com/Tejasri-123/Ecommerce/blob/main/sample/orders_Data.png)


## [Deployment on AWS EC2](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#deployment-on-aws-ec2 )



- To deploy PHP application along with PHPMyAdmin on an AWS EC2 instance, I have followed these steps

### Launch an EC2 Instance
- I have used the AWS Management Console to launch an EC2 instance, And selected ubuntu AMI.
### Install Apache, MySQL, and PHP
- Connect to the EC2 instance using SSH and install Apache, MySQL, and PHP
```
sudo apt update
```
```
sudo apt install apache2 php mysql-server php-mysql
```
- Install PHPMyAdmin to manage MySQL database
```
sudo apt install phpmyadmin
```
- During installation, choose Apache as the web server to configure PHPMyAdmin to work with Apache

- After installation, configure PHPMyAdmin to work with  MySQL database
```
sudo nano /etc/apache2/apache2.conf
```
```
Include /etc/phpmyadmin/apache.conf
```
- Restart Apache to apply the changes
```
sudo systemctl restart apache2
```

### Upload PHP Application in Ubuntu ec2 Instance
- Upload PHP application files to the /var/www/html directory
- To deploy application files we have to follow below mentioned steps:
```
sudo su
```

```
yum update
```

```
mkdir app
```

```
wget "github repository link"
```

```
ls -lrt
```

```
unzip zipfile name
```

```
cd Folder name
```
```
mv * /var/www/html
```

- To list out application files, you can use the following command

```
ls -lrt
```

### [To Access Application](https://github.com/Tejasri-123/Ecommerce/blob/main/README.md#to-access-application)

- Application can be accessible at
- **User Login**: http://3.111.34.239  
  
- **Admin Login**: http://3.111.34.239/admin
- Admin Login Credientials:
- *Username*: tejasri
- *Password*: teja123

- Admin products page - http://3.111.34.239/admin/products.php
- Admin users page - http://3.111.34.239/admin/users.php
- Admin orders page - http://3.111.34.239/admin/orders.php
