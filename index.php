<?php 
/*
Your task is to add the hello() method in the User class with the ability to approach the $firstName property, so that the hello() method can return the string hello, $firstName. For example, hello, John.

Inside a test() method, create an object with its first name as Jonnie and its last name as Roe. Now, return the hello() method for the $user1 object and see what the result is.

Expected output

hello, Jonnie
 */


 // Creating User's class
 class User {
     public $firstName; // THis i the firstname propriety that will be used in the following method.
      

     // The hello method will display a message with the  propriety 
     public function hello(){

        echo "Hello, ".$this -> firstname;
     }
 }


 // After defining the class, here is a test fonction in which we will create an instance of the class.
 function test(){

     $user1 = new User; // This  is an instance (object) of User class.
     $user1 -> firstname ="Jonnie"; // initializing the firstname;
     $user1 -> lastname = "Roe"; // initializing the lastname

     return $user1 -> hello(); // now returning the hello method for displaying a message
 }

 // let's call the test function;
 test();
?>