<div>
    {{-- The whole world belongs to you. --}}
</div>

<script>
	document.addEventListener('livewire:initialized', function () {
		Livewire.on('transaction-alert', (event) => {
			Swal.fire({
				title: event[0]['title'],
				text: event[0]['message'],
				icon: event[0]['icon'],
                confirmButtonColor: "#3085d6",
			});
		})
	});

	document.addEventListener('livewire:initialized', function () {
		Livewire.on('show-swal-confirmation', (data) => {
			// console.log(data[0]['id'])
			// Use SweetAlert2 to show the confirmation modal
			Swal.fire({
				title: data[0]['title'],
				text: data[0]['message'],
				icon: data[0]['icon'],
				showCancelButton: true,
				confirmButtonText: 'Continue',
				cancelButtonText: 'Cancel',
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					// Trigger the callback function to confirm the action
					Livewire.dispatch(data[0]['callback'], [{id: data[0]['id']}]);
				}
			});
		});
	});

</script>
