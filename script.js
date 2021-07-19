let inputs = Array.from(document.querySelectorAll('.input'));

inputs.forEach(input => {
    input.addEventListener('click', (e) => {
        input.classList.add('clicked');
    })
    input.addEventListener('change', (e) => {
        if (!e.target.validity.valid) {
            input.classList.add('alertShow');
        } else {
            input.classList.remove('alertShow')
        }
    })
    input.addEventListener('focusout', (e) => {
        if (!e.target.validity.valid) {
            input.classList.add('alertShow');
        } else {
            input.classList.remove('alertShow')
        }
    })
})