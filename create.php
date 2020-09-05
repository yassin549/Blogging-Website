<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div>
                <h1>create</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Profile</a></li>
                    <li><a class="active" href="create.php">Create</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form id="articleForm" class="articleForm" action="submit_article.php" method="post"> 
        <h1 >Create Your Article</h1>
        <br>
        <br>
        <br>
        <br>
        <br>

        <label for="articleTitle">Title:</label><br>
        <input type="text" id="articleTitle" name="articleTitle" required><br><br>
        <label for="articleContent">Content:</label><br>
        <textarea id="articleContent" name="articleContent" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>