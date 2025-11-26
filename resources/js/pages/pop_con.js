document.addEventListener("DOMContentLoaded", function () {
    $gndUid = document.body.dataset.gndUid;

    function fetchPD() {
        fetch(`/api/fetch-pd/${gndUid}`)
            .then(res => res.json())
            .then(data => {
                for (let index = 0; index < data.length; index++) {
                    const cellId = `cell${index + 1}`;
                    document.getElementById(cellId).innerHTML = data[index];
                }
            });
    }

    fetchPD();

    document.getElementById("click", function () {
        fetch(`/api/update-pd/${gndUid}`)
            .then(res => res.json())
            .then(data => {
                Swal.fire(data.message);
                fetchPD();
            });
    });
});
