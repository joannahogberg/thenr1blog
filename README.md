
# PHP – MySQL – CMS Assignment


## thenr1blog

### Task
Create a blog application written in PHP and MySQL that works as a smaller CMS where you can add, edit and delete content. You should also be able to vote or like the content of your application.

### Functionalities
* Add new blogposts.
* You have a page where you can see all posts as well as see when the content is created and by whom the content is created.
* Delete as well as edit existing posts.
* Register new users.
* Log in and log out with different users who have different roles.
   - There must be at least two roles: admin and regular user.
   - You should not be able to register with the same username or email multiple times.
* Only the user who has created a particular entry can edit or delete it. Alternatively, you can delete it if you have admin rights.
* A user should be able to vote or in any way vote for each post.
   - A user should not be able to vote for the same post repeatedly.
   - A user should be able to delete his voice from an entry.




#### Ajax calls 
The application uses jQuery post() function to load data from the server using a HTTP POST request.

#### Superglobals

* $_SESSION
* $_POST
* $_GET
* $_COOKIE
* $_SERVER

#### Technologies

* jQuery post() function with jqXHR.done(), jqXHR.fail(), and jqXHR.always() callback methods
* JavaScript function JSON.parse() to convert returned data from ajax call into a JavaScript object.
* PHP function json_encode() to convert objects in PHP into JSON format for ajax calls. 
* PHP & MySQL
* Bootstrap 4 with flex-box layout
* jQuery/JS
* HTML/CSS
   - DOM Manipulation to change and style content for ajax calls


#### ToDos

* Admin template for updating users.
* Function to comment posts.  
  


*********

By: **Joanna Högberg – Samir Talic – Owen Jose**

Course: **PHP MySQL CMS**

Class: **Fend16**

Program: **Front-End Developer at Nackademin**   