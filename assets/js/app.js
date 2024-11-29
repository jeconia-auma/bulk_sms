document.addEventListener('DOMContentLoaded', () => {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const dropdownMenu = toggle.nextElementSibling;
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    });
});


const flexCheckDefault = document.getElementById("flexCheckDefault");
const schedule = document.getElementById("schedule");
// schedule.style.visibility = "vissible";

// Add an event listener for changes to the checkbox
flexCheckDefault.addEventListener("change", () => {
    if (flexCheckDefault.checked) {
        schedule.style.display = "block";
    } else {
        schedule.style.display = "none";
    }
});