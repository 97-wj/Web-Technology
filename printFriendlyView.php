<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Chocolate Chip Cookies Recipe</title>
    <link rel="stylesheet" href="./css/printFriendlyView.css">
    <link rel="stylesheet" href="./css/conversionUnitDictionary.css">
    
</head>
<body>

<header>
        <nav class="navbar">
            <h1 class="nav_intro">FlavorFolio</h1>
            <div class="header">
            <button onclick="goBack()">Back to Recipe</button>
            <button onclick="printRecipe()">Print Recipe</button>
        </div>
        </nav>
    </header>

    <div class="recipe-container">
        
        
        <div class="recipe">
            <h1>Classic Chocolate Chip Cookies</h1>
            <p><strong>Prep:</strong> 15 mins | <strong>Cook:</strong> 10 mins | <strong>Total:</strong> 25 mins</p>
            
            <div id="recipe-image-container">
                <img src="./image/4.jpg" alt="Chocolate Chip Cookies" class="recipe-image">
            </div>

            <h2>Ingredients</h2>
            <ul>
                <li>2 1/4 cups all-purpose flour</li>
                <li>1 tsp baking soda</li>
                <li>1 cup butter, softened</li>
                <li>1 cup granulated sugar</li>
                <li>1/2 cup packed brown sugar</li>
                <li>2 large eggs</li>
                <li>2 tsp vanilla extract</li>
                <li>2 cups (12-oz) semi-sweet chocolate chips</li>
            </ul>

            <h2>Instructions</h2>
            <ol>
                <li>Preheat oven to 375°F (190°C).</li>
                <li>Combine flour, baking soda, and salt in a small bowl; set aside.</li>
                <li>Beat butter, granulated sugar, brown sugar, and vanilla in a large mixer bowl.</li>
                <li>Add eggs one at a time, beating well after each addition. Gradually mix in the flour mixture.</li>
                <li>Stir in chocolate chips.</li>
                <li>Drop by rounded tablespoons onto ungreased baking sheets.</li>
                <li>Bake for 9 to 11 minutes or until golden brown. Cool on baking sheets for 2 minutes, then transfer to wire racks.</li>
            </ol>

            
        </div>

        <div class="layout-options">
            
            <select id="layout" onchange="toggleImageVisibility()">
                <option value="full">Full Format (with images)</option>
                <option value="no-image">Without Images</option>
            </select>
        </div>
    </div>

    <script>
        // Function to handle "Back to Recipe" button
        function goBack() {
            window.history.back();
        }

        // Function to handle "Print Recipe" button
        function printRecipe() {
            window.print();
        }

        // Function to toggle the visibility of the recipe image based on selected layout
        function toggleImageVisibility() {
            const layoutOption = document.getElementById('layout').value;
            const recipeImageContainer = document.getElementById('recipe-image-container');

            if (layoutOption === 'no-image') {
                recipeImageContainer.style.display = 'none';
            } else {
                recipeImageContainer.style.display = 'block';
            }
        }
    </script>

</body>
</html>
