document.getElementById('d_code').addEventListener('change', function () {
    fetch(`/api/ds-by-district/${this.value}`)
        .then(res => res.json())
        .then(data => {
            const dsSelect = document.getElementById('ds_id');
            dsSelect.innerHTML = '<option value="" disabled selected>-- Select Divisional Secretariat --</option>';
            data.forEach(ds => {
                dsSelect.innerHTML += `<option value="${ds.ds_id}">${ds.ds_name} (${ds.ds_id})</option>`;
            });
        });
});

document.getElementById('ds_id').addEventListener('change', function () {
    fetch(`/api/gnd-by-ds/${this.value}`)
        .then(res => res.json())
        .then(data => {
            const gndSelect = document.getElementById('gnd_uid');
            gndSelect.innerHTML = '<option value="" disabled selected>-- Select Grama Niladari Division --</option>';
            data.forEach(gnd => {
                gndSelect.innerHTML += `<option value="${gnd.gnd_uid}">${gnd.gnd_name} (${gnd.gnd_uid})</option>`;
            });
        });
});
