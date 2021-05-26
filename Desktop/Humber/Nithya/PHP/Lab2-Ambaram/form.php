<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="request form">
        <title>PHP Content</title>
    </head>
    <body>
        <main>
            <form method="get" action="process.php">
                <div class="container">
                    <div id="sem">
                        <label for="term">Category</label>
                        <select id="term">
                            <option value="select">Select a category</option>
                            <option value="Jeans">Jeans</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Accessories">Accessories</option>
                        </select>
                    </div>
                    <div id="customer">
                        <label for="name" >Name</label>
                        <input id="name" name="name" type="text" required>
                    </div>
                </div>
                <input id="buy" type="submit" value="Buy">
            </form>
        </main>
    </body>
</html>
