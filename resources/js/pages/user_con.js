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
		if (event.target && event.target.classList.contains('approve-btn')) {
			const userId = event.target.getAttribute('data-user-id');
			fetch(`/api/apr-user/${userId}`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				}
			})
				.then(res => res.json())
				.then(data => {
					alert('User Approved');
					fetchUsers();
				});
		}

		if (event.target && event.target.classList.contains('reject-btn')) {
			const userId = event.target.getAttribute('data-user-id');
			fetch(`/api/rej-user/${userId}`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				}
			})
				.then(res => res.json())
				.then(data => {
					alert('User Denied');
					fetchUsers();
				});
		}
	});
});

