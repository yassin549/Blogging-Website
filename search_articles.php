<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "webpage"; // Database name
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted and the search term is provided
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    // Sanitize the search term to prevent SQL injection
    $searchTerm = $conn->real_escape_string($_GET['search']);

    // Prepare and execute SQL statement to fetch articles with matching title
    $sql = "SELECT * FROM Article WHERE title LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      

        echo "<style>
                  /* Style for search results */
                  .search-results {
                    padding: 0;
                    margin: 0;
                    background-color: #0a0f1b;
                    padding: 20px;
                    /* border-radius: 15px; */
                    width: 100%;
                    height: 100%;
                    color: #fff; 
                  }
                  body{
                    padding: 0;
                    margin: 0;
                    background-color: #0a0f1b;
                    padding: 20px;
                    /* border-radius: 15px; */
                    width: 100%;
                    height: 100%;
                    color: #fff; 
                    font-family:  sans-serif;
                  }
               
                  .pcnt{
                    width: 60%;
                    padding: 25px;
                    margin: 30px;
                    font-size:large;
                    border-bottom: 1px  solid #00e980 ;
                    
                 
                  }
                  .title{
                    width:max-content;
                    height:max-content;
                    font-size:larger;
                    background-color:#00e980 ;
                    border: 0 solid #00c6ac;
                    border-radius: 25px;
                    padding: 15px;
                    margin: 20px;
                  }
                
                  h1{
                    font-size: xx-large;
                    padding: 15px;
                    margin: 20px;
                }
                
                a{
                    width: max-content;
                    height: max-content;
                    padding-left: 15px;
                    padding-right: 15px;
                    text-decoration: none;
                    text-transform: capitalize;
                    color: #fff;
                    background-color: #00e980;
                    border: 0 solid #00c6ac;
                    border-radius: 20px;
                    font-size: larger;
                }





                     .no-results {
                      color: red; /
                      font-style: italic;
                  }
              </style>";

        // Output search results
        echo "<div class='search-results'>";
        echo"<a href='search.php' >&#9666; back</a>
            <h1> results : </h1>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='article'>";
            echo "<h3 class='title'>Title: " . $row["title"] . "</h3>";
            echo "<p class = 'pcnt'>Content: " . $row["content"] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p class='no-results'>No articles found with the given title.</p>";
       }
} else {
    // Redirect if accessed directly or without search term
    header("Location: search.php");
    exit();
}

// Close database connection
$conn->close();
?>