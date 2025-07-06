<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/HomePage.css">
     <script src="https://kit.fontawesome.com/927f1d16b1.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./css/categoryFilter.css">
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
    
    <div class="filters-container">
    <!-- Filters Header -->
    <div class="filters-header">
      <h1>Find Your Perfect Recipe</h1>
      <div class="filter-actions">
        <button class="filter-button secondary-button" id="reset-filters">
          <i class="fas fa-redo"></i>
          Reset All
        </button>
        <button class="filter-button primary-button" id="save-filter">
          <i class="fas fa-save"></i>
          Save This Filter
        </button>
      </div>
    </div>

    <!-- Filter Sections -->
    <div class="filter-sections">
      <!-- Saved Filters -->
      <div class="saved-filters">
        <div class="saved-title">
          <span>Saved Filters</span>
          <button id="new-filter" class="filter-button secondary-button" style="padding: 0.3rem 0.8rem; font-size: 0.8rem;">
            <i class="fas fa-plus"></i> New
          </button>
        </div>
        <ul class="saved-list" id="saved-filters-list">
          <li class="saved-item active">
            <span>Quick Breakfast</span>
            <button class="delete-saved"><i class="fas fa-times"></i></button>
          </li>
          <li class="saved-item">
            <span>Vegetarian Lunch</span>
            <button class="delete-saved"><i class="fas fa-times"></i></button>
          </li>
          <li class="saved-item">
            <span>Asian Dinner</span>
            <button class="delete-saved"><i class="fas fa-times"></i></button>
          </li>
          <li class="saved-item">
            <span>Keto Meals</span>
            <button class="delete-saved"><i class="fas fa-times"></i></button>
          </li>
        </ul>
      </div>

      <!-- Filter Groups -->
      <div class="filter-groups">
        <!-- Meal Type -->
        <div class="filter-group">
          <div class="group-title">
            <span>Meal Type</span>
            <button class="select-all">Select All</button>
          </div>
          <div class="filter-options">
            <div class="filter-option">
              <input type="checkbox" id="breakfast" checked>
              <label for="breakfast">Breakfast</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="brunch">
              <label for="brunch">Brunch</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="lunch" checked>
              <label for="lunch">Lunch</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="dinner" checked>
              <label for="dinner">Dinner</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="dessert">
              <label for="dessert">Dessert</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="snack">
              <label for="snack">Snack</label>
            </div>
          </div>
        </div>

        <!-- Cuisine Type -->
        <div class="filter-group">
          <div class="group-title">
            <span>Cuisine Type</span>
            <button class="select-all">Select All</button>
          </div>
          <div class="filter-options">
            <div class="filter-option">
              <input type="checkbox" id="american">
              <label for="american">American</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="italian" checked>
              <label for="italian">Italian</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="mexican">
              <label for="mexican">Mexican</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="chinese">
              <label for="chinese">Chinese</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="japanese">
              <label for="japanese">Japanese</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="indian">
              <label for="indian">Indian</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="thai">
              <label for="thai">Thai</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="french">
              <label for="french">French</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="mediterranean">
              <label for="mediterranean">Mediterranean</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="greek">
              <label for="greek">Greek</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="spanish">
              <label for="spanish">Spanish</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="vietnamese">
              <label for="vietnamese">Vietnamese</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="korean">
              <label for="korean">Korean</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="brazilian">
              <label for="brazilian">Brazilian</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="caribbean">
              <label for="caribbean">Caribbean</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="middle-eastern">
              <label for="middle-eastern">Middle Eastern</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="african">
              <label for="african">African</label>
            </div>
          </div>
        </div>

        <!-- Dietary Needs -->
        <div class="filter-group">
          <div class="group-title">
            <span>Dietary Needs</span>
            <button class="select-all">Select All</button>
          </div>
          <div class="filter-options">
            <div class="filter-option">
              <input type="checkbox" id="vegetarian">
              <label for="vegetarian">Vegetarian</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="vegan">
              <label for="vegan">Vegan</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="gluten-free">
              <label for="gluten-free">Gluten-Free</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="keto">
              <label for="keto">Keto</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="paleo">
              <label for="paleo">Paleo</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="low-carb">
              <label for="low-carb">Low-Carb</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="dairy-free">
              <label for="dairy-free">Dairy-Free</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="nut-free">
              <label for="nut-free">Nut-Free</label>
            </div>
            <div class="filter-option">
              <input type="checkbox" id="pescatarian">
              <label for="pescatarian">Pescatarian</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Recipe Results -->
    <div class="recipe-results">
      <h2 class="results-title">45 Recipes Found</h2>
      <div class="results-grid">
        <div class="recipe-card">
          <div class="recipe-image" style="background-image: url('https://images.unsplash.com/photo-1515442261605-65987783cb6a')"></div>
          <div class="recipe-info">
            <div class="recipe-name">Avocado Toast</div>
            <div class="recipe-meta">
              <span>10 min</span>
              <span>320 kcal</span>
            </div>
            <div class="recipe-tags">
              <span class="recipe-tag">Breakfast</span>
              <span class="recipe-tag">Vegetarian</span>
            </div>
          </div>
        </div>
        <div class="recipe-card">
          <div class="recipe-image" style="background-image: url('https://images.unsplash.com/photo-1546069901-ba9599a7e63c')"></div>
          <div class="recipe-info">
            <div class="recipe-name">Greek Salad</div>
            <div class="recipe-meta">
              <span>15 min</span>
              <span>280 kcal</span>
            </div>
            <div class="recipe-tags">
              <span class="recipe-tag">Lunch</span>
              <span class="recipe-tag">Mediterranean</span>
            </div>
          </div>
        </div>
        <div class="recipe-card">
          <div class="recipe-image" style="background-image: url('https://images.unsplash.com/photo-1555949258-eb67b1ef0ceb')"></div>
          <div class="recipe-info">
            <div class="recipe-name">Creamy Pasta</div>
            <div class="recipe-meta">
              <span>25 min</span>
              <span>620 kcal</span>
            </div>
            <div class="recipe-tags">
              <span class="recipe-tag">Dinner</span>
              <span class="recipe-tag">Italian</span>
            </div>
          </div>
        </div>
        <div class="recipe-card">
          <div class="recipe-image" style="background-image: url('https://images.unsplash.com/photo-1565299624946-b28f40a0ae38')"></div>
          <div class="recipe-info">
            <div class="recipe-name">Margherita Pizza</div>
            <div class="recipe-meta">
              <span>40 min</span>
              <span>650 kcal</span>
            </div>
            <div class="recipe-tags">
              <span class="recipe-tag">Dinner</span>
              <span class="recipe-tag">Italian</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Save Filter Modal -->
  <div class="modal-overlay" id="save-modal">
    <div class="modal">
      <h2 class="modal-title">Save This Filter</h2>
      <input type="text" class="modal-input" id="filter-name" placeholder="Give your filter a name (e.g. Quick Breakfast)">
      <div class="modal-actions">
        <button class="filter-button secondary-button" id="cancel-save">
          Cancel
        </button>
        <button class="filter-button primary-button" id="confirm-save">
          Save Filter
        </button>
      </div>
    </div>
  </div>

  <script>
    // DOM Elements
    const mobileMenuBtn = document.querySelector('.mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const resetBtn = document.getElementById('reset-filters');
    const saveBtn = document.getElementById('save-filter');
    const newFilterBtn = document.getElementById('new-filter');
    const saveModal = document.getElementById('save-modal');
    const cancelSaveBtn = document.getElementById('cancel-save');
    const confirmSaveBtn = document.getElementById('confirm-save');
    const filterNameInput = document.getElementById('filter-name');
    const savedFiltersList = document.getElementById('saved-filters-list');
    const selectAllButtons = document.querySelectorAll('.select-all');
    const checkboxes = document.querySelectorAll('.filter-option input');

    // Sample data
    let savedFilters = [
      { id: 1, name: 'Quick Breakfast', filters: { mealType: ['breakfast'], cuisine: [], dietary: [] } },
      { id: 2, name: 'Vegetarian Lunch', filters: { mealType: ['lunch'], cuisine: [], dietary: ['vegetarian'] } },
      { id: 3, name: 'Asian Dinner', filters: { mealType: ['dinner'], cuisine: ['chinese', 'japanese', 'thai'], dietary: [] } },
      { id: 4, name: 'Keto Meals', filters: { mealType: [], cuisine: [], dietary: ['keto', 'low-carb'] } }
    ];

    // Mobile menu toggle
    mobileMenuBtn.addEventListener('click', () => {
      navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
    });

    // Reset all filters
    resetBtn.addEventListener('click', () => {
      checkboxes.forEach(checkbox => {
        checkbox.checked = false;
      });
      updateResults();
    });

    // Open save filter modal
    saveBtn.addEventListener('click', () => {
      saveModal.classList.add('active');
      filterNameInput.focus();
    });

    // Create new empty filter
    newFilterBtn.addEventListener('click', () => {
      // Reset all filters first
      checkboxes.forEach(checkbox => {
        checkbox.checked = false;
      });
      saveModal.classList.add('active');
      filterNameInput.focus();
    });

    // Close modal
    cancelSaveBtn.addEventListener('click', () => {
      saveModal.classList.remove('active');
      filterNameInput.value = '';
    });

    // Save filter
    confirmSaveBtn.addEventListener('click', () => {
      const name = filterNameInput.value.trim();
      if (name) {
        // Get current filter state
        const activeFilters = getActiveFilters();
        
        // Create new saved filter
        const newFilter = {
          id: Date.now(),
          name,
          filters: activeFilters
        };
        
        savedFilters.push(newFilter);
        updateSavedFiltersList();
        
        saveModal.classList.remove('active');
        filterNameInput.value = '';
        
        // Show confirmation
        alert(`Filter "${name}" saved successfully!`);
      } else {
        alert('Please enter a name for your filter');
      }
    });

    // Select all filters in a group
    selectAllButtons.forEach(button => {
      button.addEventListener('click', function() {
        const group = this.closest('.filter-group');
        const checkboxes = group.querySelectorAll('.filter-option input');
        const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
        
        checkboxes.forEach(checkbox => {
          checkbox.checked = !allChecked;
        });
        
        updateResults();
      });
    });

    // Checkbox changes
    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', updateResults);
    });

    // Load saved filter
    savedFiltersList.addEventListener('click', function(e) {
      const savedItem = e.target.closest('.saved-item');
      if (savedItem && !e.target.classList.contains('delete-saved')) {
        // Remove active class from all items
        document.querySelectorAll('.saved-item').forEach(item => {
          item.classList.remove('active');
        });
        
        // Add active class to clicked item
        savedItem.classList.add('active');
        
        // Get filter ID
        const filterId = parseInt(savedItem.dataset.id);
        const filter = savedFilters.find(f => f.id === filterId);
        
        if (filter) {
          // Apply the saved filters
          applySavedFilter(filter);
        }
      }
      
      // Delete saved filter
      if (e.target.classList.contains('delete-saved') || e.target.closest('.delete-saved')) {
        e.stopPropagation();
        const savedItem = e.target.closest('.saved-item');
        const filterId = parseInt(savedItem.dataset.id);
        
        if (confirm('Are you sure you want to delete this saved filter?')) {
          savedFilters = savedFilters.filter(f => f.id !== filterId);
          updateSavedFiltersList();
        }
      }
    });

    // Get currently active filters
    function getActiveFilters() {
      const activeFilters = {
        mealType: [],
        cuisine: [],
        dietary: []
      };
      
      document.querySelectorAll('.filter-group').forEach(group => {
        const groupTitle = group.querySelector('.group-title span').textContent;
        const checkedBoxes = group.querySelectorAll('input:checked');
        
        checkedBoxes.forEach(checkbox => {
          if (groupTitle === 'Meal Type') {
            activeFilters.mealType.push(checkbox.id);
          } else if (groupTitle === 'Cuisine Type') {
            activeFilters.cuisine.push(checkbox.id);
          } else if (groupTitle === 'Dietary Needs') {
            activeFilters.dietary.push(checkbox.id);
          }
        });
      });
      
      return activeFilters;
    }

    // Apply saved filter
    function applySavedFilter(filter) {
      // Reset all checkboxes first
      checkboxes.forEach(checkbox => {
        checkbox.checked = false;
      });
      
      // Check the boxes based on saved filter
      document.querySelectorAll('.filter-group').forEach(group => {
        const groupTitle = group.querySelector('.group-title span').textContent;
        
        group.querySelectorAll('.filter-option input').forEach(checkbox => {
          if (groupTitle === 'Meal Type' && filter.filters.mealType.includes(checkbox.id)) {
            checkbox.checked = true;
          } else if (groupTitle === 'Cuisine Type' && filter.filters.cuisine.includes(checkbox.id)) {
            checkbox.checked = true;
          } else if (groupTitle === 'Dietary Needs' && filter.filters.dietary.includes(checkbox.id)) {
            checkbox.checked = true;
          }
        });
      });
      
      updateResults();
    }

    // Update saved filters list
    function updateSavedFiltersList() {
      savedFiltersList.innerHTML = '';
      
      savedFilters.forEach(filter => {
        const item = document.createElement('li');
        item.className = 'saved-item';
        item.dataset.id = filter.id;
        item.innerHTML = `
          <span>${filter.name}</span>
          <button class="delete-saved"><i class="fas fa-times"></i></button>
        `;
        
        savedFiltersList.appendChild(item);
      });
      
      // Mark first item as active by default
      if (savedFilters.length > 0) {
        savedFiltersList.firstChild.classList.add('active');
        applySavedFilter(savedFilters[0]);
      }
    }

    // Update results based on filters
    function updateResults() {
      // In a real app, this would fetch filtered recipes from a server
      console.log('Filters updated:', getActiveFilters());
      
      // For demo, just show a random number of results
      const resultCount = Math.floor(Math.random() * 50) + 1;
      document.querySelector('.results-title').textContent = `${resultCount} Recipes Found`;
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
      updateSavedFiltersList();
    });
  </script>

    
</body>
</html>

 
        

 
