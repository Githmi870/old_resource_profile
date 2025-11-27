document.addEventListener('DOMContentLoaded', function () {

	function fetchUsers() {
		fetch('/api/get-users')
			.then(res => res.json())
			.then(data => {
				let userTable = document.getElementById('userTableBody');
				userTable.innerHTML = '';
				data.forEach(user => {
					let row = `
					<tr>
                        <td class="px-4 py-2 border">${user.name}</td>
                        <td class="px-4 py-2 border">${user.email}</td>
                        <td class="px-4 py-2 border">${user.status}</td>
                        <td class="px-4 py-2 border flex justify-center gap-2">
                            <button class="approve-btn px-2 py-1 border rounded-lg bg-green-600 text-white" data-user-id="${user.id}">Approve</button>
							<button class="reject-btn px-2 py-1 border rounded-lg bg-red-600 text-white" data-user-id="${user.id}">Deny</button>
                        </td>
                    </tr>`;
					userTable.innerHTML += row;
				});
			});
	}

	fetchUsers();

	document.getElementById('userTableBody').addEventListener('click', function (event) {

		// APPROVE USER
		if (event.target && event.target.classList.contains('approve-btn')) {

			const userId = event.target.dataset.userId;

			Swal.fire({
				title: "Approve User?",
				text: "This user will be granted access.",
				icon: "question",
				showCancelButton: true,
				confirmButtonText: "Approve",
				cancelButtonText: "Cancel"
			}).then(result => {
				if (!result.isConfirmed) return;

				fetch(`/api/apr-user/${userId}`, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
						'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
					}
				})
					.then(res => res.json())
					.then(data => {
						Swal.fire("Success", data.message || "User Approved", "success");
						fetchUsers();
					})
					.catch(() => Swal.fire("Error", "Failed to approve user.", "error"));
			});
		}

		// DENY USER
		if (event.target && event.target.classList.contains('reject-btn')) {

			const userId = event.target.dataset.userId;

			Swal.fire({
				title: "Deny User?",
				text: "This user will not be allowed access.",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Deny",
				cancelButtonText: "Cancel"
			}).then(result => {
				if (!result.isConfirmed) return;

				fetch(`/api/rej-user/${userId}`, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json',
						'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
					}
				})
					.then(res => res.json())
					.then(data => {
						Swal.fire("Done", data.message || "User Denied", "info");
						fetchUsers();
					})
					.catch(() => Swal.fire("Error", "Failed to deny user.", "error"));
			});
		}

	});

	// DENY ALL USERS
	document.getElementById('allDeny').addEventListener('click', function () {

		Swal.fire({
			title: "Deny All Users?",
			text: "This action cannot be undone.",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Deny All",
			cancelButtonText: "Cancel"
		}).then(result => {
			if (!result.isConfirmed) return;

			fetch('/api/deny-all', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
				}
			})
				.then(res => res.json())
				.then(data => {
					Swal.fire("Action Completed", data.message || "All users denied.", "info");
					fetchUsers();
				})
				.catch(() => Swal.fire("Error", "Failed to deny all users.", "error"));
		});
	});

	// APPROVE ALL USERS
	document.getElementById('allApprove').addEventListener('click', function () {

		Swal.fire({
			title: "Approve All Users?",
			text: "All users will be granted access.",
			icon: "question",
			showCancelButton: true,
			confirmButtonText: "Approve All",
			cancelButtonText: "Cancel"
		}).then(result => {
			if (!result.isConfirmed) return;

			fetch('/api/approve-all', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
				}
			})
				.then(res => res.json())
				.then(data => {
					Swal.fire("Success", data.message || "All users approved.", "success");
					fetchUsers();
				})
				.catch(() => Swal.fire("Error", "Failed to approve all users.", "error"));
		});
	});

});
