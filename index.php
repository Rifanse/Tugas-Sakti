<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa | BARUDAK PPLG</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="custom.css">
</head>
<body class="hold-transition layout-fixed dark-mode">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <i class="fas fa-graduation-cap brand-image"></i>
            <span class="brand-text font-weight-light">BARUDAK PPLG</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <i class="fas fa-user-circle fa-2x text-white"></i>
                </div>
                <div class="info">
                    <a href="#" class="d-block">Administrator</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Siswa</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Siswa</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Siswa PPLG</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal">
                                        <i class="fas fa-plus"></i> Tambah Siswa
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="studentsTable" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat/Desa</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Hobi</th>
                                        <th>Cita-cita</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2025 <a href="#">BARUDAK PPLG</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- Add Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addForm">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat/Desa</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="birth_place" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="birth_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hobi</label>
                                <input type="text" class="form-control" name="hobby" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cita-cita</label>
                                <input type="text" class="form-control" name="ambition" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Siswa</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="photo" id="add_photo" accept="image/*">
                                    <label class="custom-file-label" for="add_photo">Pilih file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Edit Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm">
                <input type="hidden" name="id" id="edit_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" id="edit_name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat/Desa</label>
                                <input type="text" class="form-control" name="address" id="edit_address" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="birth_place" id="edit_birth_place" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="birth_date" id="edit_birth_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hobi</label>
                                <input type="text" class="form-control" name="hobby" id="edit_hobby" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cita-cita</label>
                                <input type="text" class="form-control" name="ambition" id="edit_ambition" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Siswa</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img src="" id="edit_photo_preview" class="img-circle elevation-2" style="width: 50px; height: 50px; object-fit: cover;">
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="edit_photo" accept="image/*">
                                            <label class="custom-file-label" for="edit_photo">Pilih file (Biarkan kosong jika tidak diubah)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Modal -->
<div class="modal fade" id="viewModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title">Detail Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="" alt="User Avatar" id="view_image" style="width: 90px; height: 90px; object-fit: cover;" onerror="this.src='dist/img/avatar5.png'">
                        </div>
                        <h3 class="widget-user-username" id="view_name" style="margin-top: 10px;"></h3>
                        <h5 class="widget-user-desc" id="view_ambition"></h5>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="description-block">
                                    <h5 class="description-header"><i class="fas fa-map-marker-alt"></i> Alamat</h5>
                                    <span class="description-text" id="view_address"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="description-block">
                                    <h5 class="description-header"><i class="fas fa-birthday-cake"></i> Tempat, Tanggal Lahir</h5>
                                    <span class="description-text" id="view_birth"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="description-block">
                                    <h5 class="description-header"><i class="fas fa-heart"></i> Hobi</h5>
                                    <span class="description-text" id="view_hobby"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Initialize DataTable
    var table = $('#studentsTable').DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "ajax": {
            "url": "api.php?action=get_all",
            "dataSrc": "data"
        },
        "columns": [
            {
                "data": null,
                "render": function(data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            {
                "data": "photo",
                "render": function(data, type, row) {
                    // Priority: 1. Database photo, 2. Name-based photo (legacy), 3. Default avatar
                    let imgSrc = 'dist/img/avatar5.png';
                    if (data) {
                        imgSrc = 'Gambar/' + data + '?t=' + new Date().getTime();
                    } else if (row.name) {
                        // Fallback to name-based for non-migrated data
                        imgSrc = 'Gambar/' + row.name + '.jpg' + '?t=' + new Date().getTime();
                    }
                    
                    return `<img src="${imgSrc}" 
                            class="img-circle elevation-2" 
                            style="width: 50px; height: 50px; object-fit: cover;" 
                            alt="${row.name}"
                            onerror="this.onerror=null; this.src='dist/img/avatar5.png';">`;
                }
            },
            { "data": "name" },
            { "data": "address" },
            { "data": "birth_place" },
            { 
                "data": "birth_date",
                "render": function(data) {
                    if (data) {
                        const date = new Date(data);
                        return date.toLocaleDateString('id-ID');
                    }
                    return '';
                }
            },
            { "data": "hobby" },
            { "data": "ambition" },
            {
                "data": null,
                "render": function(data, type, row) {
                    return `
                        <button class="btn btn-info btn-sm view-btn" data-id="${row.id}">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm edit-btn" data-id="${row.id}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="${row.id}">
                            <i class="fas fa-trash"></i>
                        </button>
                    `;
                }
            }
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
        }
    });

    // Add Student
    $('#addForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            url: 'api.php?action=create',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire('Berhasil!', response.message, 'success');
                    $('#addModal').modal('hide');
                    $('#addForm')[0].reset();
                    $('.custom-file-label').html('Pilih file'); // Reset file label
                    table.ajax.reload();
                } else {
                    Swal.fire('Error!', response.message, 'error');
                }
            }
        });
    });

    // View Student
    $(document).on('click', '.view-btn', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'api.php?action=get_one',
            type: 'POST',
            data: { id: id },
            dataType: 'json',
            success: function(data) {
                $('#view_name').text(data.name);
                $('#view_ambition').text(data.ambition);
                $('#view_address').text(data.address);
                
                // Set image source
                let imgSrc = 'dist/img/avatar5.png';
                if (data.photo) {
                    imgSrc = 'Gambar/' + data.photo + '?t=' + new Date().getTime();
                } else if (data.name) {
                    imgSrc = 'Gambar/' + data.name + '.jpg' + '?t=' + new Date().getTime();
                }
                $('#view_image').attr('src', imgSrc);
                
                $('#view_birth').text(data.birth_place + ', ' + new Date(data.birth_date).toLocaleDateString('id-ID'));
                $('#view_hobby').text(data.hobby);
                $('#viewModal').modal('show');
            }
        });
    });

    // Edit Student - Load Data
    $(document).on('click', '.edit-btn', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'api.php?action=get_one',
            type: 'POST',
            data: { id: id },
            dataType: 'json',
            success: function(data) {
                $('#edit_id').val(data.id);
                $('#edit_name').val(data.name);
                $('#edit_address').val(data.address);
                $('#edit_hobby').val(data.hobby);
                $('#edit_ambition').val(data.ambition);
                $('#edit_birth_date').val(data.birth_date);
                $('#edit_birth_place').val(data.birth_place);
                
                // Preview photo
                let imgSrc = 'dist/img/avatar5.png';
                if (data.photo) {
                    imgSrc = 'Gambar/' + data.photo + '?t=' + new Date().getTime();
                } else if (data.name) {
                    imgSrc = 'Gambar/' + data.name + '.jpg' + '?t=' + new Date().getTime();
                }
                $('#edit_photo_preview').attr('src', imgSrc);
                
                $('#editModal').modal('show');
            }
        });
    });

    // Edit Student - Submit
    $('#editForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            url: 'api.php?action=update',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire('Berhasil!', response.message, 'success');
                    $('#editModal').modal('hide');
                    table.ajax.reload();
                } else {
                    Swal.fire('Error!', response.message, 'error');
                }
            }
        });
    });
    
    // Custom File Input
    $(document).on('change', '.custom-file-input', function (event) {
        $(this).next('.custom-file-label').html(event.target.files[0].name);
    });

    // Delete Student
    $(document).on('click', '.delete-btn', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'api.php?action=delete',
                    type: 'POST',
                    data: { id: id },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire('Terhapus!', response.message, 'success');
                            table.ajax.reload();
                        } else {
                            Swal.fire('Error!', response.message, 'error');
                        }
                    }
                });
            }
        });
    });
});
</script>
</body>
</html>
