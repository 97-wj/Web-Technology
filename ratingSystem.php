<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/HomePage.css">
     <script src="https://kit.fontawesome.com/927f1d16b1.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./css/ratingSystem.css">
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
    

    <section class="rating_items">
    <img src="./image/Biriyani.jpg" alt="">

    <div class="review-container">
    <div class="recipe-info">
      <img src="avocado-toast.jpg" alt="Avocado Toast" class="recipe-image">
      <h2>Avocado Toast with Poached Eggs</h2>
      <p>By Chef Maria Rodriguez</p>
    </div>
    <div class="rating">
      <span class="stars">
        <span class="filled">&#9733;</span>
        <span class="filled">&#9733;</span>
        <span class="filled">&#9733;</span>
        <span class="filled">&#9733;</span>
        <span>&#9733;</span>
      </span>
      <p class="rating-text">4.7 (128 reviews)</p>
      <div class="rating-bar">
        <div class="rating-bar-filled" style="width: 80%"></div>
      </div>
    </div>
    </div>

    </section>

    <section>
        <div class="review-form-container">
    <h2>Write a Review</h2>
    <form>
      <label for="name">Your Name</label>
      <input type="text" id="name" placeholder="Enter your name" required>

      <label for="review">Your Review</label>
      <textarea id="review" placeholder="Write your review here..." required></textarea>

      <button type="submit" class="submit-btn">Submit Review</button>
    </form>
  </div>
    </section>

    <section>
        <div class="reviews-section">
    <h2>Community Reviews</h2>
    
    <div class="review">
      <div class="review-header">
        <div class="reviewer-initials">Shakil</div>
        <div class="review-stars">
          <span>&#9733;</span>
          <span>&#9733;</span>
          <span>&#9733;</span>
          <span>&#9733;</span>
          <span>&#9733;</span>
        </div>
        <span class="review-date">june 27, 2025</span>
      </div>
      <p class="review-text">This has become my go-to breakfast recipe! The combination of creamy avocado and perfectly poached eggs is absolutely divine. I like to add a sprinkle of chili flakes for an extra kick. Highly recommend!</p>
    </div>

    <div class="review">
      <div class="review-header">
        <div class="reviewer-initials">Jannat</div>
        <div class="review-stars">
          <span>&#9733;</span>
          <span>&#9733;</span>
          <span>&#9733;</span>
          <span>&#9733;</span>
          <span>&#9734;</span>
        </div>
        <span class="review-date">june 28, 2025</span>
      </div>
      <p class="review-text">Great recipe! I made it vegan by skipping the eggs and adding some cherry tomatoes instead. The only reason I'm not giving 5 stars is that the bread suggested in the recipe was a bit too dense for my taste.</p>
    </div>
    
  </div>
    </section>
</body>
</html>

 
        

 
