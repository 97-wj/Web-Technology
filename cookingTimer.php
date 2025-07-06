<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/HomePage.css">
     <script src="https://kit.fontawesome.com/927f1d16b1.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="./css/ratingSystem.css">
     <link rel="stylesheet" href="./css/cookingTimer.css">
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
    
    <div class="timer-container">
    <!-- Timer Header -->
    <div class="timer-header">
      <h1>Cooking Timer</h1>
      <div class="timer-actions">
        <button class="timer-button secondary-button">
          <i class="fas fa-history"></i>
          Timer History
        </button>
      </div>
    </div>

    <!-- Timer Controls -->
    <div class="timer-controls">
      <div class="timer-form">
        <div class="input-group">
          <label for="timer-name">Timer Name</label>
          <input type="text" id="timer-name" class="timer-input" placeholder="e.g. Boil Pasta, Roast Chicken">
        </div>
        <div class="input-group">
          <label>Timer Duration</label>
          <div class="time-inputs">
            <input type="number" id="hours" class="timer-input time-input" placeholder="HH" min="0" max="23">
            <span>:</span>
            <input type="number" id="minutes" class="timer-input time-input" placeholder="MM" min="0" max="59">
            <span>:</span>
            <input type="number" id="seconds" class="timer-input time-input" placeholder="SS" min="0" max="59">
          </div>
        </div>
        <button id="add-timer" class="timer-button primary-button">
          <i class="fas fa-plus"></i>
          Add Timer
        </button>
      </div>
      <div class="voice-control" id="voice-control">
        <i class="fas fa-microphone"></i>
        <span>Voice Control</span>
        <small class="voice-feedback"></small>
      </div>
    </div>

    <!-- Active Timers -->
    <div class="active-timers">
      <h2 class="timers-title">Active Timers</h2>
      <div class="timers-grid" id="timers-grid">
        
      </div>
    </div>

    <!-- Step Alerts -->
    <div class="step-alerts">
      <h2 class="alerts-title">Recent Alerts</h2>
      <div id="alerts-list">
        <div class="alert-item">
          <div class="alert-icon">
            <i class="fas fa-bell"></i>
          </div>
          <div class="alert-content">
            <div class="alert-message">Pasta boiling timer completed</div>
            <div class="alert-time">2 minutes ago</div>
          </div>
        </div>
        <div class="alert-item">
          <div class="alert-icon">
            <i class="fas fa-bell"></i>
          </div>
          <div class="alert-content">
            <div class="alert-message">Oven preheated to 375°F</div>
            <div class="alert-time">15 minutes ago</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // DOM Elements
    const mobileMenuBtn = document.querySelector('.mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const addTimerBtn = document.getElementById('add-timer');
    const timerNameInput = document.getElementById('timer-name');
    const hoursInput = document.getElementById('hours');
    const minutesInput = document.getElementById('minutes');
    const secondsInput = document.getElementById('seconds');
    const timersGrid = document.getElementById('timers-grid');
    const voiceControl = document.getElementById('voice-control');
    const voiceFeedback = document.querySelector('.voice-feedback');
    const alertsList = document.getElementById('alerts-list');

    // Audio elements
    const alarmSound = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3');
    const dingSound = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-positive-interface-beep-221.mp3');

    // State
    let timers = [];
    let recognition;
    let isVoiceActive = false;

    // Initialize speech recognition
    function initSpeechRecognition() {
      if ('webkitSpeechRecognition' in window) {
        recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;

        recognition.onstart = function() {
          voiceControl.classList.add('recording');
          voiceFeedback.textContent = 'Listening...';
        };

        recognition.onresult = function(event) {
          const transcript = Array.from(event.results)
            .map(result => result[0])
            .map(result => result.transcript)
            .join('');

          processVoiceCommand(transcript);
        };

        recognition.onerror = function(event) {
          console.error('Speech recognition error', event.error);
          voiceFeedback.textContent = `Error: ${event.error}`;
          voiceControl.classList.remove('recording');
        };

        recognition.onend = function() {
          if (isVoiceActive) {
            recognition.start();
          } else {
            voiceControl.classList.remove('recording');
          }
        };
      } else {
        voiceFeedback.textContent = 'Voice control not supported in your browser';
      }
    }

    // Process voice commands
    function processVoiceCommand(transcript) {
      if (transcript.toLowerCase().includes('set timer')) {
        const timeMatch = transcript.match(/(\d+) (hour|minute|second)/i);
        const nameMatch = transcript.match(/for (.+)/i);
        
        if (timeMatch) {
          const value = parseInt(timeMatch[1]);
          const unit = timeMatch[2].toLowerCase();
          
          let hours = 0, minutes = 0, seconds = 0;
          
          if (unit === 'hour' || unit === 'hours') {
            hours = value;
          } else if (unit === 'minute' || unit === 'minutes') {
            minutes = value;
          } else if (unit === 'second' || unit === 'seconds') {
            seconds = value;
          }
          
          const name = nameMatch ? nameMatch[1] : `Voice Timer ${timers.length + 1}`;
          
          addTimer(name, hours, minutes, seconds);
          voiceFeedback.textContent = `Timer set: ${name} for ${value} ${unit}s`;
          dingSound.play();
        }
      } else if (transcript.toLowerCase().includes('stop all timers')) {
        timers.forEach(timer => clearInterval(timer.interval));
        timers = [];
        updateTimersDisplay();
        voiceFeedback.textContent = 'All timers stopped';
        dingSound.play();
      } else if (transcript.toLowerCase().includes('pause all')) {
        timers.forEach(timer => {
          if (!timer.paused) {
            clearInterval(timer.interval);
            timer.paused = true;
          }
        });
        voiceFeedback.textContent = 'All timers paused';
        dingSound.play();
      } else if (transcript.toLowerCase().includes('resume all')) {
        timers.forEach(timer => {
          if (timer.paused && !timer.complete) {
            startTimerInterval(timer);
          }
        });
        voiceFeedback.textContent = 'All timers resumed';
        dingSound.play();
      }
    }

    // Voice control toggle
    voiceControl.addEventListener('click', function() {
      if (!recognition) {
        initSpeechRecognition();
      }
      
      isVoiceActive = !isVoiceActive;
      
      if (isVoiceActive) {
        recognition.start();
        voiceControl.classList.add('active');
      } else {
        recognition.stop();
        voiceControl.classList.remove('active');
        voiceFeedback.textContent = '';
      }
    });

    // Add new timer
    addTimerBtn.addEventListener('click', function() {
      const name = timerNameInput.value.trim() || `Timer ${timers.length + 1}`;
      const hours = parseInt(hoursInput.value) || 0;
      const minutes = parseInt(minutesInput.value) || 0;
      const seconds = parseInt(secondsInput.value) || 0;
      
      if (hours > 0 || minutes > 0 || seconds > 0) {
        addTimer(name, hours, minutes, seconds);
        timerNameInput.value = '';
        hoursInput.value = '';
        minutesInput.value = '';
        secondsInput.value = '';
      } else {
        alert('Please set a timer duration');
      }
    });

    // Create and add a new timer
    function addTimer(name, hours, minutes, seconds) {
      const totalSeconds = (hours * 3600) + (minutes * 60) + seconds;
      const timer = {
        id: Date.now(),
        name,
        totalSeconds,
        remainingSeconds: totalSeconds,
        paused: false,
        complete: false
      };
      
      timer.interval = startTimerInterval(timer);
      timers.push(timer);
      
      updateTimersDisplay();
      addAlert(`Timer started: ${name} for ${formatTime(totalSeconds)}`);
    }

    // Start timer interval
    function startTimerInterval(timer) {
      return setInterval(() => {
        if (!timer.paused) {
          timer.remainingSeconds--;
          
          if (timer.remainingSeconds <= 0) {
            timer.complete = true;
            clearInterval(timer.interval);
            alarmSound.play();
            addAlert(`Timer completed: ${timer.name}`);
            
            // Flash notification
            const timerElement = document.getElementById(`timer-${timer.id}`);
            if (timerElement) {
              timerElement.classList.add('urgent');
              setTimeout(() => {
                timerElement.classList.remove('urgent');
              }, 5000);
            }
          }
          
          updateTimersDisplay();
        }
      }, 1000);
    }

    // Update timers display
    function updateTimersDisplay() {
      timersGrid.innerHTML = '';
      
      timers.forEach(timer => {
        const timerElement = document.createElement('div');
        timerElement.className = `timer-card ${timer.complete ? 'complete' : ''}`;
        timerElement.id = `timer-${timer.id}`;
        
        const progressPercent = timer.complete ? 0 : (timer.remainingSeconds / timer.totalSeconds) * 100;
        
        timerElement.innerHTML = `
          <div class="timer-name">${timer.name}</div>
          <div class="timer-display">${formatTime(timer.remainingSeconds)}</div>
          <div class="timer-progress">
            <div class="progress-bar" style="width: ${progressPercent}%"></div>
          </div>
          <div class="timer-actions">
            <button class="timer-action pause" data-action="pause" data-id="${timer.id}">
              <i class="fas fa-${timer.paused ? 'play' : 'pause'}"></i>
              ${timer.paused ? 'Resume' : 'Pause'}
            </button>
            <button class="timer-action reset" data-action="reset" data-id="${timer.id}">
              <i class="fas fa-redo"></i>
              Reset
            </button>
            <button class="timer-action delete" data-action="delete" data-id="${timer.id}">
              <i class="fas fa-trash"></i>
              Delete
            </button>
          </div>
          <div class="timer-notification">
            <i class="fas fa-bell"></i> Timer Complete!
          </div>
        `;
        
        timersGrid.appendChild(timerElement);
      });
      
      // Add event listeners to new buttons
      document.querySelectorAll('.timer-action').forEach(button => {
        button.addEventListener('click', function() {
          const action = this.getAttribute('data-action');
          const id = parseInt(this.getAttribute('data-id'));
          const timer = timers.find(t => t.id === id);
          
          if (timer) {
            if (action === 'pause') {
              if (timer.paused) {
                timer.paused = false;
                timer.interval = startTimerInterval(timer);
                addAlert(`Timer resumed: ${timer.name}`);
              } else {
                timer.paused = true;
                clearInterval(timer.interval);
                addAlert(`Timer paused: ${timer.name}`);
              }
            } else if (action === 'reset') {
              timer.remainingSeconds = timer.totalSeconds;
              timer.paused = false;
              timer.complete = false;
              clearInterval(timer.interval);
              timer.interval = startTimerInterval(timer);
              addAlert(`Timer reset: ${timer.name}`);
            } else if (action === 'delete') {
              clearInterval(timer.interval);
              timers = timers.filter(t => t.id !== id);
              addAlert(`Timer deleted: ${timer.name}`);
            }
            
            updateTimersDisplay();
          }
        });
      });
    }

    // Add alert to alerts list
    function addAlert(message) {
      const now = new Date();
      const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
      
      const alertItem = document.createElement('div');
      alertItem.className = 'alert-item';
      alertItem.innerHTML = `
        <div class="alert-icon">
          <i class="fas fa-bell"></i>
        </div>
        <div class="alert-content">
          <div class="alert-message">${message}</div>
          <div class="alert-time">${timeString}</div>
        </div>
      `;
      
      alertsList.insertBefore(alertItem, alertsList.firstChild);
      
      // Limit to 10 alerts
      if (alertsList.children.length > 10) {
        alertsList.removeChild(alertsList.lastChild);
      }
    }

    // Format seconds to HH:MM:SS
    function formatTime(totalSeconds) {
      const hours = Math.floor(totalSeconds / 3600);
      const minutes = Math.floor((totalSeconds % 3600) / 60);
      const seconds = totalSeconds % 60;
      
      return [
        hours.toString().padStart(2, '0'),
        minutes.toString().padStart(2, '0'),
        seconds.toString().padStart(2, '0')
      ].join(':');
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
      // Mobile menu toggle
      mobileMenuBtn.addEventListener('click', () => {
        navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
      });
      
      // Add sample timers for demo
      addTimer('Boil Pasta', 0, 12, 0);
      addTimer('Roast Vegetables', 0, 25, 0);
    });
  </script>

    
</body>
</html>

 
        

 
