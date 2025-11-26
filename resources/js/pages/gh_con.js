document.addEventListener("DOMContentLoaded", function () {
    const gndUid = document.body.dataset.gndUid;

    function getCsrfToken() {
        return document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
    }

    const csrfHeaders = {
        "X-CSRF-TOKEN": getCsrfToken(),
    };

    function fetchGH() {
        fetch(`/api/get-gh`)
            .then((res) => res.json())
            .then((data) => {
                let ghBody = "";
                data.forEach((item, index) => {
                    ghBody += `
                <tr>
                    <td class="border px-3 py-1 text-center">
                        <button class="px-2 py-0 mb-2 border rounded bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${
                            item.gh_id
                        }">Edit</button>
                        <button class="px-2 py-0 mb-1 border rounded bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${
                            item.gh_id
                        }">Delete</button>
                    </td>
                    <td class="px-6 py-6 border text-center">${index + 1}</td>
                    <td class="px-6 py-6 border text-center">${
                        item.gh_name
                    }</td>
                    <td class="px-6 py-6 border text-center">${
                        item.gh_type
                    }</td>
                </tr>
                `;
                });
                document.getElementById("hospitalSourceTableBody").innerHTML =
                    ghBody;
            })
            .catch((error) => {
                Swal.fire(
                    "Error",
                    "Error fetching Government Hospitals.",
                    "error"
                );
            });
    }

    fetchGH();

    document
        .getElementById("hospitalSourceForm")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            const formData = new FormData();
            formData.append(
                "gh_name",
                document.getElementById("gh_name").value
            );
            formData.append(
                "gh_type",
                document.getElementById("gh_type").value
            );

            fetch("/api/insert-gh", {
                method: "POST",
                headers: csrfHeaders,
                body: formData,
            })
                .then((res) => res.json())
                .then((data) => {
                    Swal.fire(data.message);
                    fetchGH();
                    this.reset();
                })
                .catch((error) => {
                    console.error(error);
                });
        });
});
