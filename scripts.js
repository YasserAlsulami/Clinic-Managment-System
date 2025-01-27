document.querySelector('form').addEventListener('submit', function (e) {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    if (!date || !time) {
        e.preventDefault();
        alert('Please fill out all fields.');
    }
});