document.getElementById('submit').addEventListener('click', function(){
    const emailField = document.getElementById('email');
    const userE = emailField.value;

    const passowardField = document.getElementById('password');
    const userP = passowardField.value;

    if( userE == 'abdullahalfahim92@gmail.com' && userP == '81851156' ){
        window.location.href ='bank.html';
    }
    else{
        console.log(alert('Sorry, your Passoward is wromg'));
    }


})