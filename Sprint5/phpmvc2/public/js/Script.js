$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    }); 

    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Kurikulum-Backend/Sprint5/phpmvc2/public/Mahasiswa/ubah');

        const id = $(this).data('id');
        console.log(id);  

        $.ajax({
            url: 'http://localhost/Kurikulum-Backend/Sprint5/phpmvc2/public/Mahasiswa/getubah',
            data: {id :id},
            method:'post',
            dataType: 'json',
            
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);

            }
        });

       
        });

    });
    

