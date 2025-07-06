<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Unit Converter</title>
    <link rel="stylesheet" href="./css/conversionMeasurement.css">
    <link rel="stylesheet" href="./css/conversionUnitDictionary.css">
   
</head>
<body>

    <header>
        <nav class="navbar">
            <h1 class="nav_intro">FlavorFolio</h1>
            <div>
                <a id="btn" href="">Home</a>
                <a id="btn" href="">Recipes</a>
                <a id="btn" href="">Meal Plans</a>
                <a id="btn"href="">Shopping List</a>
                
            </div>
        </nav>
    </header>


    <div class="container">
    <header>
      <h1>Conversion Calculator</h1>
      <p>Convert between measurement systems, adjust serving sizes, and explore cooking units</p>
    </header>
    <nav>
      <ul>
        <li><a href="">Measurement Converter</a></li>
        <li><a href="./conversionAdjust.php">Serving Adjuster</a></li>
        <li><a href="./conversionUnitDictionary.php">Unit Dictionary</a></li>
      </ul>
    </nav>
    </div>

    <div class="container">
        <div class="header">
            <h2>Unit Converter</h2>
        </div>
        
        <div class="unit-section">
            <label for="fromValue">From Value:</label>
            <input type="number" id="fromValue" value="1">
        </div>

        <div class="unit-section">
            <label for="fromUnit">From Unit:</label>
            <select id="fromUnit">
                <option value="grams">grams</option>
                <option value="kilograms">kilograms</option>
                <option value="pounds">pounds</option>
                <option value="ounces">ounces</option>
            </select>
        </div>

        <div class="unit-section">
            <label for="toUnit">To Unit:</label>
            <select id="toUnit">
                <option value="grams">grams</option>
                <option value="kilograms">kilograms</option>
                <option value="pounds">pounds</option>
                <option value="ounces">ounces</option>
            </select>
        </div>

        <button onclick="convertUnit()">Convert</button>

        <div class="output">
            <p id="result">Result: 1</p>
        </div>

        <div class="equivalents">
            <h3>Common Equivalents</h3>
            <p>1 cup = 16 tablespoons = 48 teaspoons = 8 fluid ounces = 240 milliliters</p>
            <p>1 tablespoon = 3 teaspoons = 0.5 fluid ounce = 15 milliliters</p>
            <p>1 teaspoon = 0.33 tablespoon = 5 milliliters</p>
            <p>1 pound = 16 ounces = 454 grams</p>
            <p>1 ounce = 28.35 grams</p>
        </div>
    </div>

    <script>
        function convertUnit() {
            const fromValue = parseFloat(document.getElementById('fromValue').value);
            const fromUnit = document.getElementById('fromUnit').value;
            const toUnit = document.getElementById('toUnit').value;

            const conversionRates = {
                grams: {
                    grams: 1,
                    kilograms: 0.001,
                    pounds: 0.00220462,
                    ounces: 0.035274
                },
                kilograms: {
                    grams: 1000,
                    kilograms: 1,
                    pounds: 2.20462,
                    ounces: 35.274
                },
                pounds: {
                    grams: 454,
                    kilograms: 0.453592,
                    pounds: 1,
                    ounces: 16
                },
                ounces: {
                    grams: 28.35,
                    kilograms: 0.0283495,
                    pounds: 0.0625,
                    ounces: 1
                }
            };

            const result = fromValue * conversionRates[fromUnit][toUnit];
            document.getElementById('result').textContent = `Result: ${result.toFixed(2)} ${toUnit}`;
        }
    </script>

</body>
</html>
