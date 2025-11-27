document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    // Helper function to get the CSRF token from the meta tag
    function getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }

    // Common headers object including the CSRF token
    const csrfHeaders = {
        'X-CSRF-TOKEN': getCsrfToken()
    };

    //--- Goverment Figure Section ---
    function fetchGovFigures() {
        fetch(`/api/get-gf/${gndUid}`, {
            headers: csrfHeaders
        })
            .then(res => res.json())
            .then(data => {
                let govFigBody = '';
                data.forEach((item, index) => {
                    govFigBody += `
                                    <tr>
                                        <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.gf_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.gf_id}">Delete</button>
                                        </td>
                                        <td class="px-6 py-4 border text-center">${index + 1}</td>
                                        <td class="px-6 py-4 border text-center">${item.gf_name}</td>
                                        <td class="px-6 py-4 border text-center">${item.gf_type}</td>
                                        <td class="px-6 py-4 border text-center">${item.gf_address}</td>
                                    </tr>
                                `;

                });
                document.getElementById('govFigTable').innerHTML = govFigBody;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    fetchGovFigures();

    document.getElementById('govFig').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData();
        formData.append('gf_name', document.getElementById('gf_name').value);
        formData.append('gf_type', document.getElementById('gf_type').value);
        formData.append('gf_address', document.getElementById('gf_address').value);
        formData.append('gnd_uid', gndUid);

        fetch(`/api/insert-gf/${gndUid}`, {
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
                fetchGovFigures();
            })
            .catch(error =>
                alert('Error:', error)
            );
    });

    document.getElementById('govFigTable').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const gfId = event.target.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this Government Figure?')) {
                fetch(`/api/delete-gf/${gfId}`, {
                    method: 'DELETE',
    
                    headers: csrfHeaders
                })
                    .then(res => res.json())
                    .then(data => {
                        alert('Government Figure deleted successfully!');
                        fetchGovFigures();
                    })
                    .catch(error => console.error('Error deleting Government Figure:', error));
            }
        }
    });


    //--- Abondened Goverment Buildings Section ---

    function fetchAbGovBuildings() {
        fetch(`/api/get-agb/${gndUid}`, {
            headers: csrfHeaders
        })
            .then(res => res.json())
            .then(data => {
                let AbFigBody = '';
                data.forEach((item, index) => {
                    AbFigBody += `
                                    <tr>
                                        <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.ab_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.ab_id}">Delete</button>
                                        </td>
                                        <td class="px-6 py-4 border text-center">${index + 1}</td>
                                        <td class="px-6 py-4 border text-center">${item.ab_name}</td>
                                        <td class="px-6 py-4 border text-center">${item.ab_used_for}</td>
                                        <td class="px-6 py-4 border text-center">${item.ab_is_retrievable}</td>
                                    </tr>
                                `;

                });
                document.getElementById('AbFigTable').innerHTML = AbFigBody;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    fetchAbGovBuildings();

    document.getElementById('AbFig').addEventListener('submit', function (event) {
        event.preventDefault();

        const abData = new FormData();
        abData.append('ab_name', document.getElementById('ab_name').value);
        abData.append('ab_used_for', document.getElementById('ab_used_for').value);
        abData.append('ab_is_retrievable', document.querySelector('input[name="ab_is_retrievable"]:checked').value);
        abData.append('gnd_uid', gndUid);

        fetch(`/api/insert-agb/${gndUid}`, {
            method: 'POST',
            headers: csrfHeaders,
            body: abData
        })
            .then(res => res.json())
            .then(() => {
                alert('Abondened Building inserted successfully!');
                this.reset();
                fetchAbGovBuildings();
            })
            .catch(error => console.error('Error:', error));
    });

    document.getElementById('AbFigTable').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const abId = event.target.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this Abondened Building?')) {
                fetch(`/api/delete-agb/${abId}`, {
                    method: 'DELETE',
    
                    headers: csrfHeaders
                })
                    .then(res => res.json())
                    .then(data => {
                        alert('Abondened Building deleted successfully!');
                        fetchAbGovBuildings();
                    })
                    .catch(error => console.error('Error deleting Abondened Building:', error));
            }
        }
    });


    //--- Abondened Projects Section ---
    function fetchAProjects() {
        fetch(`/api/get-ap/${gndUid}`, {
            headers: csrfHeaders
        })
            .then(res => res.json())
            .then(data => {
                let apBody = '';
                data.forEach((item, index) => {
                    apBody += `
                        <tr>
                            <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.ap_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.ap_id}">Delete</button>
                                        </td>
                            <td class="px-6 py-6 border text-center">${index + 1}</td>
                            <td class="px-6 py-6 border text-center">${item.ap_name}</td>
                            <td class="px-6 py-6 border text-center">${item.ap_reason}</td>
                        </tr>
                    `;
                });
                document.getElementById('APBody').innerHTML = apBody;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    fetchAProjects();

    document.getElementById('formAP').addEventListener('submit', function (event) {
        event.preventDefault();
        const apdata = new FormData();
        apdata.append('ap_name', document.getElementById('ap_name').value);
        apdata.append('ap_reason', document.getElementById('ap_reason').value);
        apdata.append('gnd_uid', gndUid);

        fetch(`/api/insert-ap/${gndUid}`, {
            method: 'POST',
            headers: csrfHeaders,
            body: apdata
        })
            .then(res => res.json())
            .then(data => {
                alert('Abondened Project inserted successfully!');
                this.reset();
                fetchAProjects();
            })
    })

    document.getElementById('APBody').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const apId = event.target.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this Abondened Project?')) {
                fetch(`/api/delete-ap/${apId}`, {
                    method: 'DELETE',
    
                    headers: csrfHeaders
                })
                    .then(res => res.json())
                    .then(data => {
                        alert('Abondened Project deleted successfully!');
                        fetchAProjects();
                    })
                    .catch(error => console.error('Error deleting Abondened Project:', error));
            }
        }
    });
});