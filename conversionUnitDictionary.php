<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion Calculator</title>
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
        <li><a href="./conversionMeasurement.php">Measurement Converter</a></li>
        <li><a href="./conversionAdjust.php">Serving Adjuster</a></li>
        <li><a href="">Unit Dictionary</a></li>
      </ul>
    </nav>
    </div>


    <main>
      <section class="conversion-table">
      <h2>Volume Conversions</h2>
      <table>
        <thead>
          <tr>
            <th>Unit</th>
            <th>Abbreviation</th>
            <th>Metric Equivalent</th>
            <th>Imperial Equivalent</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Teaspoon</td>
            <td>tsp</td>
            <td>5 ml</td>
            <td>1/3 tbsp</td>
          </tr>
          <tr>
            <td>Tablespoon</td>
            <td>tbsp</td>
            <td>15 ml</td>
            <td>3 tsp</td>
          </tr>
          <tr>
            <td>Fluid Ounce</td>
            <td>fl oz</td>
            <td>30 ml</td>
            <td>2 tbsp</td>
          </tr>
          <tr>
            <td>Cup</td>
            <td>cup</td>
            <td>240 ml</td>
            <td>8 fl oz</td>
          </tr>
          <tr>
            <td>Pint</td>
            <td>pt</td>
            <td>473 ml</td>
            <td>2 cups</td>
          </tr>
          <tr>
            <td>Quart</td>
            <td>qt</td>
            <td>946 ml</td>
            <td>2 pints</td>
          </tr>
        </tbody>
      </table>
         </section>
    
        <section class="conversion-table">
        <h2>Weight Conversions</h2>
        <table>
            <thead>
            <tr>
                <th>Unit</th>
                <th>Abbreviation</th>
                <th>Metric Equivalent</th>
                <th>Imperial Equivalent</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Gram</td>
                <td>g</td>
                <td>1 g</td>
                <td>0.035 oz</td>
            </tr>
            <tr>
                <td>Kilogram</td>
                <td>kg</td>
                <td>1000 g</td>
                <td>2.205 lb</td>
            </tr>
            <tr>
                <td>Fluid Ounce</td>
                <td>fl oz</td>
                <td>30 ml</td>
                <td>1 tbsp</td>
            </tr>
            <tr>
                <td>Ounce</td>
                <td>oz</td>
                <td>28.35 g</td>
                <td>1/16 lb</td>
            </tr>
            <tr>
                <td>Pound</td>
                <td>lb</td>
                <td>454 g</td>
                <td>16 oz</td>
            </tr>
            </tbody>
        </table>
        </section>

        <section class="conversion-table">
        <h2>Length Conversions</h2>
        <table>
            <thead>
            <tr>
                <th>Unit</th>
                <th>Abbreviation</th>
                <th>Metric Equivalent</th>
                <th>Imperial Equivalent</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Millimeter</td>
                <td>mm</td>
                <td>0.1 g</td>
                <td>0.039 inch</td>
            </tr>
            <tr>
                <td>Centimeter</td>
                <td>cm</td>
                <td>1 cm</td>
                <td>0.394 inch</td>
            </tr>
            <tr>
                <td>Meter</td>
                <td>m</td>
                <td>100 cm</td>
                <td>3.281 ft</td>
            </tr>
            <tr>
                <td>Inch</td>
                <td>in</td>
                <td>2.54 cm</td>
                <td>1 inch</td>
            </tr>
            <tr>
                <td>Foot</td>
                <td>ft</td>
                <td>30.48 cm</td>
                <td>12 inches</td>
            </tr>
            </tbody>
        </table>
        </section>

    </main>
    
</body>
</html>