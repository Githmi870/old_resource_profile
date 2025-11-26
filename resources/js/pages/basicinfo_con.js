document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    function getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }

    const csrfHeaders = {
        'X-CSRF-TOKEN': getCsrfToken()
    };

    //==============================
    // GOVERNMENT FIGURE SECTION
    //==============================
    function fetchGovFigures() {
        fetch(`/api/get-gf/${gndUid}`, { headers: csrfHeaders })
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
            .catch(() => Swal.fire('Error', 'Failed to fetch Government Figures', 'error'));
    }

    fetchGovFigures();

    document.getElementById('govFig').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData();
        formData.append('gf_name', document.getElementById('gf_name').value);
        formData.append('gf_type', document.getElementById('gf_type').value);
        formData.append('gf_address', document.getElementById('gf_address').value);
        formData.append('gnd_uid', gndUid);

        fetch(`/api/insert-gf/${gndUid}`, { method: 'POST', headers: csrfHeaders, body: formData })
            .then(res => res.json())
            .then(data => {
                Swal.fire(data.success ? 'Success' : 'Error', data.message || data.error, data.success ? 'success' : 'error');
                this.reset();
                fetchGovFigures();
            })
            .catch(() => Swal.fire('Error', 'Failed to insert Government Figure', 'error'));
    });

    document.getElementById('govFigTable').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const gfId = event.target.dataset.id;
            Swal.fire({
                title: 'Are you sure?',
                text: 'Delete this Government Figure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete',
                cancelButtonText: 'Cancel'
            }).then(result => {
                if (!result.isConfirmed) return;
                fetch(`/api/delete-gf/${gfId}`, { method: 'DELETE', headers: csrfHeaders })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire('Deleted', data.message || 'Government Figure deleted!', 'success');
                        fetchGovFigures();
                    })
                    .catch(() => Swal.fire('Error', 'Failed to delete Government Figure', 'error'));
            });
        }
    });

    //==============================
    // ABANDONED GOVERNMENT BUILDINGS SECTION
    //==============================
    function fetchAbGovBuildings() {
        fetch(`/api/get-agb/${gndUid}`, { headers: csrfHeaders })
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
            .catch(() => Swal.fire('Error', 'Failed to fetch Abandoned Buildings', 'error'));
    }

    fetchAbGovBuildings();

    document.getElementById('AbFig').addEventListener('submit', function (event) {
        event.preventDefault();
        const abData = new FormData();
        abData.append('ab_name', document.getElementById('ab_name').value);
        abData.append('ab_used_for', document.getElementById('ab_used_for').value);
        abData.append('ab_is_retrievable', document.querySelector('input[name="ab_is_retrievable"]:checked').value);
        abData.append('gnd_uid', gndUid);

        fetch(`/api/insert-agb/${gndUid}`, { method: 'POST', headers: csrfHeaders, body: abData })
            .then(res => res.json())
            .then(data => {
                Swal.fire(data.success ? 'Success' : 'Error', data.message || data.error, data.success ? 'success' : 'error');
                this.reset();
                fetchAbGovBuildings();
            })
            .catch(() => Swal.fire('Error', 'Failed to insert Abandoned Building', 'error'));
    });

    document.getElementById('AbFigTable').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const abId = event.target.dataset.id;
            Swal.fire({
                title: 'Are you sure?',
                text: 'Delete this Abandoned Building?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete',
                cancelButtonText: 'Cancel'
            }).then(result => {
                if (!result.isConfirmed) return;
                fetch(`/api/delete-agb/${abId}`, { method: 'DELETE', headers: csrfHeaders })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire('Deleted', data.message || 'Abandoned Building deleted!', 'success');
                        fetchAbGovBuildings();
                    })
                    .catch(() => Swal.fire('Error', 'Failed to delete Abandoned Building', 'error'));
            });
        }
    });

    //==============================
    // ABANDONED PROJECTS SECTION
    //==============================
    function fetchAProjects() {
        fetch(`/api/get-ap/${gndUid}`, { headers: csrfHeaders })
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
            .catch(() => Swal.fire('Error', 'Failed to fetch Abandoned Projects', 'error'));
    }

    fetchAProjects();

    document.getElementById('formAP').addEventListener('submit', function (event) {
        event.preventDefault();
        const apData = new FormData();
        apData.append('ap_name', document.getElementById('ap_name').value);
        apData.append('ap_reason', document.getElementById('ap_reason').value);
        apData.append('gnd_uid', gndUid);

        fetch(`/api/insert-ap/${gndUid}`, { method: 'POST', headers: csrfHeaders, body: apData })
            .then(res => res.json())
            .then(data => {
                Swal.fire(data.success ? 'Success' : 'Error', data.message || data.error, data.success ? 'success' : 'error');
                this.reset();
                fetchAProjects();
            })
            .catch(() => Swal.fire('Error', 'Failed to insert Abandoned Project', 'error'));
    });

    document.getElementById('APBody').addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            const apId = event.target.dataset.id;
            Swal.fire({
                title: 'Are you sure?',
                text: 'Delete this Abandoned Project?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete',
                cancelButtonText: 'Cancel'
            }).then(result => {
                if (!result.isConfirmed) return;
                fetch(`/api/delete-ap/${apId}`, { method: 'DELETE', headers: csrfHeaders })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire('Deleted', data.message || 'Abandoned Project deleted!', 'success');
                        fetchAProjects();
                    })
                    .catch(() => Swal.fire('Error', 'Failed to delete Abandoned Project', 'error'));
            });
        }
    });
});
