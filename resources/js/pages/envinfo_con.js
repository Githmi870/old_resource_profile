document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    // Helper function to get the CSRF token
    function getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }

    const csrfHeaders = {
        'X-CSRF-TOKEN': getCsrfToken()
    };

    //--- Water Source Section ---

    function fetchWaterSources() {

        fetch(`/api/get-wr/${gndUid}`, {
            headers: csrfHeaders
        })
            .then(res => res.json())
            .then(data => {
                let wsBody = '';
                data.forEach((item, index) => {
                    wsBody += `
                        <tr>
                            <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.wr_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.wr_id}">Delete</button>
                                        </td>
                            <td class="px-6 py-6 border text-center">${index + 1}</td>
                            <td class="px-6 py-6 border text-center">${item.wr_name}</td>
                            <td class="px-6 py-6 border text-center">${item.wr_type}</td>
                        </tr>
                    `;
                });
                document.getElementById('waterSourceTableBody').innerHTML = wsBody;
            })
            .catch(error => {
                console.error('Error fetching water sources:', error);
            });
    }

    fetchWaterSources();

    document.getElementById('waterSourceForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);
        formData.append('wr_name', document.getElementById('wr_name').value);
        formData.append('wr_type', document.getElementById('wr_type').value);
        formData.append('gnd_uid', gndUid);

        fetch(`/api/insert-wr/${gndUid}`, {
            method: 'POST',
            headers: csrfHeaders,
            body: formData
        })
            .then(res => res.json())
            .then(data => {
                alert('Water source information saved successfully!');
                this.reset();
                fetchWaterSources();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving water source information.');
            });
    });

    document.getElementById('waterSourceTableBody').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const wsId = event.target.dataset.id;

            if (confirm('Are you sure you want to delete this water source?')) {
                fetch(`/api/delete-wr/${wsId}`, {
                    method: 'DELETE',

                    headers: csrfHeaders
                })
                    .then(res => res.json())
                    .then(data => {
                        alert('Water source deleted successfully!');
                        fetchWaterSources();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the water source.');
                    });
            }
        }
    });

    //--- SNZ Section ---

    function fetchSNZs() {

        fetch(`/api/get-snz/${gndUid}`, {
            headers: csrfHeaders
        })
            .then(res => res.json())
            .then(data => {
                let snzBody = '';
                data.forEach((item, index) => {
                    snzBody += `
                        <tr>
                            <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.snz_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.snz_id}">Delete</button>
                                        </td>
                            <td class="px-6 py-6 border text-center">${index + 1}</td>
                            <td class="px-6 py-6 border text-center">${item.snz_name}</td>
                            <td class="px-6 py-6 border text-center">${item.snz_importance}</td>
                        </tr>
                    `;
                });
                document.getElementById('snzTableBody').innerHTML = snzBody;
            })
            .catch(error => {
                console.error('Error fetching SNZs:', error);
            });
    }

    fetchSNZs();

    document.getElementById('snzForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);
        formData.append('snz_name', document.getElementById('snz_name').value);
        formData.append('snz_importance', document.getElementById('snz_importance').value);
        formData.append('gnd_uid', gndUid);

        fetch(`/api/insert-snz/${gndUid}`, {
            method: 'POST',
            headers: csrfHeaders,
            body: formData
        })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                } else {
                    alert('Error: ' + data.error);
                }
                this.reset();
                fetchSNZs();
            })
            .catch(error => {
                alert('Error:', error);
            });
    });

    document.getElementById('snzTableBody').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const snzId = event.target.dataset.id;

            if (confirm('Are you sure you want to delete this Sensitive Nature Zone?')) {
                fetch(`/api/delete-snz/${snzId}`, {
                    method: 'DELETE',
                    headers: csrfHeaders
                })
                    .then(res => res.json())
                    .then(data => {
                        alert('Sensitive Nature Zone deleted successfully!');
                        fetchSNZs();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the Sensitive Nature Zone.');
                    });
            }
        }
    });
});