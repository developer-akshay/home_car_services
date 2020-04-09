const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    // jab hum ispe click kar rhe toh right vale panel ko active kar de rhe
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    // jab hum ispe click kar rhe toh left vale panel ko active kar de rhe
    container.classList.remove('right-panel-active');
});

//taki form khali na rhe
function validateForm() {
    var x = document.forms["signin"]["email"].value;
    var y = document.forms["signin"]["password"].value;
    if ((x == "" || x == null) || (y == "" || y == null)) 
    {
      alert("field is empty");
      return false;
    }
  }