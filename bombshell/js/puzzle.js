
var settings = {};
var gameStarted = false;
var count = 0;
var bg = document.querySelector('#droppableZone');
var clock = document.getElementById('clock');
var hint = document.getElementById('hint');
var reset = document.getElementById('reset');
var mediumButton = document.getElementById('medium');
var scramble = document.getElementById('scramble');
var buttonsToHide = [mediumButton];
var difficultyButtons = document.querySelectorAll('.difficulty_button');
var animations = ["animate", "animate_rotate", "animate_horizontal", "animate_vertical", "animate_crazy"];
var puzzle = document.getElementById('solved-hint');
var timer = null;
var piecesSolved = 0;
var pieces = document.querySelectorAll('.piece');
var piecesArray = [];
var pieceContainer = document.querySelectorAll('.piece-container');
var pieceContainersArray = [];


// Get all the puzzle piece and put into an array

for(var i=0;i<pieces.length;i++){
  piecesArray.push(pieces[i]);
  
}


// Add a listener to each puzzle piece 

 piecesArray.forEach(function(target){
   
   target.addEventListener('dragstart', dragStart);
   target.addEventListener('dragend', dragEnd);
  
});


// Get all the puzzle piece container and put into an array

for(var j=0;j<pieceContainer.length;j++){
   pieceContainersArray.push(pieceContainer[j]);
  
}


// Add a listener to each puzzle piece container

 pieceContainersArray.forEach(function(target){
   target.addEventListener('drop', drop);
   target.addEventListener('dragover', dragOver);
  
});


settings.getDuration = function() {
  return this.durations[this.difficulty];
};

// Change the difficulty level when user clicks any of the difficulty buttons
settings.setDifficulty = function(value) {
  return this.difficulty = value;
};

mediumButton.addEventListener('click', function() {
  settings.setDifficulty("medium");
}, false);


// Add event listener

scramble.addEventListener('click', startGame);

reset.addEventListener('click', resetGame);


hint.addEventListener('mousedown', showHint);
hint.addEventListener('mouseup', hideHint);


// Drag and Drop

function dragStart(event) {
  var element = event.target.id;
  var node = document.getElementById(element);
  var clone = node.cloneNode(true);
  clone.style.position = "absolute";
  clone.style.top = "0px";
  clone.style.left = "-100px";
  document.body.appendChild(clone);
  event.dataTransfer.setDragImage(clone, 0, 0);
  event.dataTransfer.setData("text", event.target.id);
}

function dragEnd(event) {
  event.target.style.position = 'static';
}


function dragOver(event) {
  event.preventDefault();
  event.dataTransfer.dropEffect = "move";
}



function drop(event) {
  event.preventDefault();
  var data = event.dataTransfer.getData("text");
 
  event.target.appendChild(document.getElementById(data));
  checkComplate()
 
}


 function checkComplate(){
   var count = 0;
  
for(var z=0; z<pieceContainersArray.length; z++){
    if(pieceContainersArray[z].hasChildNodes()){
       count++;
   }

}
  if(count === 41){
      checkDropMatch();
  }
 
}



function checkDropMatch(){
  var count = 0;    

  for(var y=0; y<pieceContainersArray.length; y++){
     if(pieceContainersArray[y].getAttribute('data-piece-container') === pieceContainersArray[y].firstChild.getAttribute('id')){
       count++;
     }

   if(count === 41){
      congratulateUser();
    }

  }
} 

// Scramble

function startGame(event) {
  bg.setAttribute('class', 'drop-zone unsolved')
  pieces.forEach(piece => {
    piece.style.display = 'inline-block';
    piece.style.position = 'absolute';
    piece.style.top = Math.floor(Math.random() * (48+1)) + '%';
    piece.style.left = Math.floor(Math.random() * (87+1)) + '%';
    document.querySelector('#pieces-tray').appendChild(piece);
  });

  gameStarted = true;
  hideButtons(buttonsToHide);
  startClock(settings.getDuration());
  showControlsAndTimer();
  hideScrambleButton();
  playGameMusic();
}

// Show and Hide Buttons

function showControlsAndTimer() {
  if (settings.difficulty !== "hard") {
    hint.setAttribute('class', 'hint-button');
  }
  reset.setAttribute('class', 'reset-button');
  clock.setAttribute('class', 'timer');
}


function hideScrambleButton() {
  scramble.setAttribute('class', 'hide-element');
}

// Show and Hide Hint

function showHint(event) {
  count++;

  puzzle.setAttribute('class', 'solved-puzzle solved');
  if(gameStarted === true && count > 3) {
    puzzle.setAttribute('class', 'hide-element');
    return;
  }
  event.preventDefault();
}

function hideHint(event) {
  puzzle.setAttribute('class', 'hide-element');
  event.preventDefault();
}

// Countdown Timer

function getTimeRemaining(endTime) {
    //Time remaining in milliseconds
    var timeRemaining = endTime - Date.parse(new Date());
    //gets the remaining seconds and minutes
    var seconds = Math.floor((timeRemaining / 1000) % 60);
    var minutes = Math.floor(((timeRemaining / 1000) / 60) % 60);

    var time = {};
    time.timeLeft = timeRemaining;
    time.minutes = minutes;
    time.seconds = seconds;

    return time;
}

function startClock(duration) {
  var ms = duration * 1000;
  var startTime = new Date(Date.parse(new Date()) + ms + 1000);

  timer = setInterval(function() {
    var tx = getTimeRemaining(startTime);

    var min = (('0' + tx.minutes).slice(-2));
    var sec = (('0' + tx.seconds).slice(-2));
    clock.innerHTML = min + ':' + sec;

    if(tx.timeLeft <= 0) {
      clearInterval(timer);
      gameOver();
      resetGame();
    }
  }, 1000);
}

// Control game sound

function gameOver() {
	
	var str = "Free Web Building Tutorials!";
  var result = str.link("https://www.w3schools.com");
    document.getElementById('game-over').play();
  document.getElementById("demo").innerHTML = result;
}

function playGameMusic() {
    document.getElementById('game-play').play();
}

function stopGameMusic() {
    document.getElementById('game-play').pause();
    document.getElementById('game-play').currentTime = 0;
}

function gameVictory() {
    document.getElementById('victory').play();
}

// Control clock

function stopClock() {
  clearInterval(timer);
  clock.innerHTML = '';
}

function pauseClock() {
  clearInterval(timer);
}

// Reset Game

function resetGame() {
  var elements = [hint, reset, clock];

  for (var k=0; k<elements.length; k++) {
    elements[k].setAttribute('class', 'hide-element');
  }
  for (var l=0; l<pieces.length; l++) {
    pieces[l].style.display = 'none';
  }

    difficultyButtons.forEach(function(element, index) {
    return element.classList.remove('hide-element');
  });

  gameStarted = false;
  count = 0;
  scramble.setAttribute('class', 'scramble-button button');
  bg.setAttribute('class', 'drop-zone solved');
  stopClock();
  stopGameMusic();
}


function hideButtons (buttons) {

  return buttons.forEach(function(element, index) {
    return element.classList.add('hide-element');
  });

};

  
  
// Congradulate User


function shakeElements(elements) {

  var randomIndex = 0;

  function shake(elementToShake, index) {
    // Generate random integer between 0 and the length of the array of animations.
    randomIndex = Math.floor(Math.random() * (animations.length));

    elementToShake.classList.add(animations[randomIndex]);
  }
  // Call the shake function on each element.
  elements.forEach(shake);
}
  


// Puzzle has been solved by gamer.
function congratulateUser() {
  pauseClock(); 
  gameVictory()
  setTimeout(shakeElements, 14000, pieces);
  resetGame();
}
