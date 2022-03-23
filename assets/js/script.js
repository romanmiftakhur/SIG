$(function () {

	$('.tampilModalUbah').on('click', function () {

		$('#exampleModalLabelUbah').html('Ubah Data Anggota');

		const id_anggota = $(this).data('id_anggota');

		$.ajax({
			url: 'http://localhost/perpus/anggota/edit',
			data: {
				id_anggota: id_anggota
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data);
			}
		});

	});



});
