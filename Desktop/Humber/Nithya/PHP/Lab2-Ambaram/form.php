<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP Content</title>
    </head>
    <body>
        <main>
            <form method="get" action="process.php">
                <div class="container">
                    <div id="sem">
                        <label for="term" id="term">Category</label>
                        <select>
                            <option value="select">Select a category</option>
                            <option value="Jeans">Jeans</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Accessories">Accessories</option>
                        </select>
                    </div>
                    <div id="customer">
                        <label for="name" id="name">Name</label>
                        <input name="name" type="text" required>
                    </div>
                </div>
                <input id="buy" type="submit" value="Buy">
            </form>
        </main>
    </body>
</html>
