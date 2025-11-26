document.addEventListener('DOMContentLoaded', function () {

    function getCsrfToken() {
        return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }

    const csrfHeaders = {
        'X-CSRF-TOKEN': getCsrfToken()
    };

    const gndUid = document.body.dataset.gndUid;

    document.getElementById('hospitalSourceForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData();
        formData.append('gh_name', document.getElementById('gh_name').value);
        formData.append('gh_type', document.getElementById('gh_type').value);

        fetch(`/api/insert-gh`, {
            method: 'POST',
            headers: csrfHeaders,
            body: formData,
        })
            .then(res => res.json())
            .then(data => {
                alert(data.message);
            });
    });

    // if (form) {
    //     form.addEventListener('submit', function(e) {
    //         e.preventDefault();

    //         // Form දත්ත ලබා ගැනීම
    //         const formData = new FormData(form);
    //         const payload = {};
    //         formData.forEach((value, key) => (payload[key] = value));

    //         // API Endpoint එක
    //         const apiUrl = '/api/health-facilities';

    //         axios.post(apiUrl, payload)
    //             .then(response => {
    //                 // සාර්ථක වූ විට
    //                 alert(response.data.message);
    //                 form.reset(); // Form එක හිස් කිරීම
    //                 console.log('Successfully inserted:', response.data.data);

    //                 // මෙහිදී සාර්ථක දත්ත වගුවට එක් කිරීමේ කාර්යය කළ හැක.
    //             })
    //             .catch(error => {
    //                 // දෝෂයක් ඇති වූ විට (Validation errors ඇතුළුව)
    //                 let errorMessage = 'දත්ත ඇතුළත් කිරීමේ දෝෂයක් සිදුවිය.';

    //                 if (error.response && error.response.data.errors) {
    //                     // Validation errors තිබේ නම්
    //                     const errors = error.response.data.errors;
    //                     let errorDetails = Object.values(errors).flat().join('\n');
    //                     errorMessage += '\n\nදෝෂ විස්තර:\n' + errorDetails;
    //                 } else if (error.response && error.response.data.message) {
    //                     errorMessage = error.response.data.message;
    //                 }

    //                 alert(errorMessage);
    //                 console.error('Submission Error:', error);
    //             });
    //     });
    // }
});
