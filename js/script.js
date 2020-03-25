const submit = document.getElementById('submit');
const show = document.getElementById('show-submit');

submit.style.display = 'none';

show.addEventListener("click", mostraSubmit);

function mostraSubmit(){
    submit.style.display = 'block';
}