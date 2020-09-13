<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Project</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div>
                <h1>Search</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.html">Profile</a></li>
                    <li> <a href="create.php">create</a></li>
                    <li><a class="active" href="search.php">Search</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1 class="h1"> write the title of the article that you want to read</h1>

    <form id="searchForm" class="searchForm" action="search_articles.php" method="get">
        <input type="text" name="search" placeholder="Search for Article" >
        <input type="submit" value="Search" class="submit" id="submit">

    </form>
</body>
</html>