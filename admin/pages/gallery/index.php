<?php
include 'modul/m_gallery.php';

$gallery = new Gallery($koneksi);
?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gallery</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col">
                            <h3 class="card-title">Data Gallery</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#modal-tambah">Tambah Data</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>File</th>
                                    <th>Alat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Tampil = $gallery->TampilGallery();
                                while ($data_gallery = $Tampil->fetch_object()) :
                                ?>
                                <tr>
                                    <td><?= $data_gallery->Nama ?></td>
                                    <td width="40%"><img src="img/gallery/<?= $data_gallery->File ?>"
                                            class="img-thumbnail" width="20%">
                                    </td>
                                    <td width="15%" align="center"><a href="#"
                                            class="btn btn-sm btn-success ubah-gallery" data-toggle="modal"
                                            data-target="#modal-ubah" data-id="<?= $data_gallery->ID ?>"
                                            data-nm="<?= $data_gallery->Nama ?>" data-ft="<?= $data_gallery->foto ?>">
                                            <i class="fa fa-pencil-alt" aria-hidden="true"></i></a> |
                                        <a href="#" class="btn btn-danger btn-sm btn-hapus" data-toggle="modal"
                                            data-target="#modal-hapus" data-id="<?= $data_gallery->ID ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i></a> |
                                    </td>
                                </tr>
                                <?php
                                endwhile;
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>File</th>
                                    <th>Alat</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Foto</label>
                                        <input type="text" class="form-control" id="namafoto" name="namafoto"
                                            placeholder="Masukkan Nama Foto">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih
                                                    File</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>