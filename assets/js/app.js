// const togleMenu = document.getElementById('formshow');
// const formHide = document.querySelectorAll('.form-hide');

// function activateForm(num){
//     formHide.forEach(forms => {
//         forms.classList.remove('active');
//     });
//     formHide[num].classList.add('active');
// }

// togleMenu.addEventListener('change', ()=>{
//     if(togleMenu.value == 'individual') activateForm(0);
//     else activateForm(1);
// });

const flexCheckDefault = document.getElementById("flexCheckDefault");
const schedule = document.getElementById("schedule");
// schedule.style.visibility = "vissible";

// Add an event listener for changes to the checkbox
flexCheckDefault.addEventListener("change", () => {
    if (flexCheckDefault.checked) {
        schedule.style.visibility = "visible";
    } else {
        schedule.style.visibility = "hidden";
    }
});