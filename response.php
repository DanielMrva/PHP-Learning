<?php 

// array of responces that serves as our "data", this would be replaced by a database query in a larger app.
$responses = array(
    "PHP" => array( "tag"=>"PHP","question" => "PHP (and programing in general)", 
    "response" => "Currently, I have fairly limited experience in PHP, that is, I only started studying it when I first applied to this position with MOPS.
    <br>
    <br>
    However, in my course of study, I’ve found the logic and syntax of PHP to be relatively straightforward, and somewhat akin to a blend of HTML and JavaScript.  Additionally, elements of it seem similar to React, in so much as your PHP functions can echo HTML components (among other things), much like React functions return HTML components.  I am very eager to learn more of what PHP can do!
    <br>
    <br>    
    In terms of non-PHP experience, I completed a 6-month full-stack web development bootcamp from University of Denver in June.  The course went through web development from front-end to back-end.  It covered HTML5, CSS, JavaScript (ES6), various Javascript frameworks and libraries (jQuery, NodeJS, Express, React), as well as SQL and No-SQL databases (MySQL and MongoDB), and finally GraphQL. We also worked with CSS libraries such as Materialize and Bootstrap.  The course also included three group projects beginning with a fairly basic front-end only site that used API calls for data, moving to a full front-to-back end with MySQL database and Handlebars for demi-dynamic DOM rendering, and then finally to a React App with full front and back end, MongoDB database, GraphQL query control, etc.
    <br>
    <br>
    Currently, I am working on a React app for a small short-wave radio refurbishing business using a No-SQL database.", 
    "link" => array(array("Portfolio", "https://danielmrva.github.io/DanielMrva_Portfolio_Reactionary/"))), 
    "OOP" => array("tag"=>"OOP","question" => "Object Oriented Programing", 
    "response" => "The bootcamp included a unit on Object Oriented Programing in JavaScript, specifically covering Classes, Constructors, Properties, Methods, Inheritance and Extensibility (specifically through Sub-classes).  While this unit gave us a fair amount of foundational exposure to OOP, we weren’t specifically required to utilized OOP design principles outside of our homework for the unit, a command-line HTML generator.  
    <br>
    <br>
    I’ve gained additional knowledge of OOP in my own endeavors learning Java after the bootcamp, which has helped to solidify my knowledge of OOP.  My research into Java has given me exposure to concepts such as Encapsulation and Information Hiding.
    <br>
    <br>
    Overall, I would consider myself familiar with OOP principles, but haven’t developed extensively using that design framework.", 
    "link" => array(array("c_line_tech_team", "https://github.com/DanielMrva/c_line_tech_team"))),
    "JS" => array("tag"=>"JS","question" => "JavaScript (including jQuery and AJAX)", 
    "response" => "The bulk of my programming experience is centered around JavaScript, both as a front-end scripting language as well as a server backend.  I would consider myself proficient in JavaScript.
    <br>
    <br>
    Additionally, I have experience with jQuery having covered DOM traversal and manipulation methods, and event delegation, however, I have a higher amount of experience with more modern vanilla JavaScript methods of performing many of the aforementioned jQuery methods.
    <br>
    <br>
    A suitable example of my work with jQuery would be an early bootcamp project building a workday planner app. 
    <br>
    <br>
    In terms of AJAX, my bootcamp experience mostly focused on using jQuery's AJAX for requests to 3rd party API's.  However, in the course of building this app for the responses, I have come to grasp the basics of how AJAX is used to make requests to PHP apps.  I would like to read in further to the documentation, and see more refined examples from what I've built here, but it does seem to make sense.",
    "link" => array(array("Workday_Planner_App", "https://github.com/DanielMrva/Workday_Planner_App"))),
    "MYSQL" => array("tag"=>"MYSQL","question" => "MySQL (and using SQL in general)",
    "response" => "The first database management system I learned was MySQL, for which I have built a number of databases servicing both API backends and full-stack applications.  
    <br>
    <br>
    For some examples:
    <br>
    SQL_Team_6 is a command-line content management system built using MySQL, Inquirer, and NodeJS.  Most of the MySQL functionality can be found in the db/queries.js and utils/dbMod.js files.  The app allows for Create, Update, and Read functionality of the database, delete functionality could be easily implemented in the future.  Most of the database queries were built to be modified using JavaScript functions with template literals; for example, a query to select the PK of a column in a table by a non-PK column value was written db.promise().query(`SELECT id from \${table} WHERE \${column} = '\${value}'`), and table, column, and value were all arguments in the function.
    <br>
    <br>
    Backend_to_the_Future is an e-commerce RESTful API backend that used MySQL and a JavaScript package Sequilize for building table models (models/) and much of the query functionality (which can be found in routes/api/).
    <br>
    <br>
    Tach_Blag_Wobesite is a very basic blogging app which utilized a similar backend to Backend_to_the_Future (MySQL, Sequilize, Node, Express), but then paired it with Handlebars for rendering alongside a MVC file structure.
    <br>
    <br>
    Overall, I feel I am proficient in MySQL.", 
    "link" => array(array("SQL_Team_6", "https://github.com/DanielMrva/Sql-Team-6"), array("Backend_to_the_Future", "https://github.com/DanielMrva/Backend_to_the_Future"), array("Tach_Blag_Wobesite", "https://github.com/DanielMrva/Tach_blag_wobesite"))),
    "CSS" => array("tag"=>"CSS","question" => "Cascading Style Sheet and design",
    "response" => "With CSS, which I’ve used extensively, I generally prefer to use a library such as Materialize or Bootstrap for the bulk of my structural CSS (for example for Grid layouts), but will style individual elements differently utilizing vanilla CSS.
    <br>
    For example, I often use :root pseudoclass to assign vars with a clamp function to have view-width scaling text sizes.  Additionally, I’m relatively comfortable using media queries to change how elements display based on viewport ect.
    <br>
    <br>
    Additionally, with my arts background I do have an eye for design, especially color pallets, but I prefer to work with a CSS library or framework than straight CSS.", "link" => array(array("Portfolio", "https://danielmrva.github.io/DanielMrva_Portfolio_Reactionary/")))
    
);

// variable to get the requested item from our FE GET request
$item = $_GET['item'];

// filters responses by the item
$question = $responses[$item];

// empty string to contain our action links
$actions = "";

// for each to concat our links formmated for <a> tags
foreach ($question["link"] as $action) {
    $actions .="<a href='$action[1]'>$action[0]</a>";
}

// the content to send back to the front end which gets placed in the #content <section>
echo json_encode(['content' => "
    <div class='col s12' id='$question[tag]'>
        <div class='card grey darken-1'>
            <div class='card-content white-text'>
                <span class='card-title'>$question[question]</span>
                <p class='response-content black-text'>$question[response]</p>
            </div>
            <div class='card-action'>
            $actions
            </div>
        </div>
    </div>
"]);


?>