// Generate a random digit from the array
function getRandomElement(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
}

document.getElementById('get-pin-button').addEventListener('click', function() {
    let a1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    let fi = getRandomElement(a1);
    let se = getRandomElement(a1);
    let th = getRandomElement(a1);
    let fo = getRandomElement(a1);
    

    let pin = `${fi}${se}${th}${fo}`;
    alert(`your verification pin is ${pin}`);
    // Display the PIN on the page
    //document.getElementById('pin-display').textContent = `Your PIN is: ${pin}`;
});

// Move to the next input box automatically when a digit is entered
const inputs = document.querySelectorAll('.pin-container input');
inputs.forEach((input, index) => {
    input.addEventListener('input', () => {
        if (input.value.length === 1 && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });
});

