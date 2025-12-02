document.addEventListener('DOMContentLoaded', function() {

    const gndUid = document.body.dataset.gndUid;

    document.getElementById('phForm').addEventListener('submit', function(){

        const formData = new FormData();
        formData.append('ph_name', document.getElementById('ph_name').value);
        formData.append('ph_address', document.getElementById('ph_address').value);

        fetch(`/api/insert-ph`, {
            method: 'POST',
            body: formData,
        })
        .then(res => res.json())
        .then(data => {
            console(data.message);
        });
    });
});