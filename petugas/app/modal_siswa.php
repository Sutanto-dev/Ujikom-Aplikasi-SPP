<div class="modal fade" id="siswa-<?php echo $data['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Akan Menghapus data ini ?</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
            <div class="table-responsive">
            <table class="table table-bordered" style="width: 1500px" id="dataTable" width="200%" cellspacing="0">
            <thead class="thead-colored thead-teal">
                        <tr>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $data['nisn'];?></td>
                            <td><?php echo $data['nis'];?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['nama_kelas'];?></td>
                            <td><?php echo $data['kompetensi_keahlian'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                            <td><?php echo $data['nomor_telepon'];?></td>
                            <td><?php echo $data['tahun'];?></td>
                            <td><?php echo $data['nominal'];?></td>
                        </tr> 
                    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary" href="hapus_siswa.php?id=<?php echo $data['id_siswa'];?>">Ya</a>
            </div>
        </div>
    </div>
</div>




<!--<div class="pd-y-50 bg-gray-700">
           this modal is static modal for presentation purpose.
           class .d-block annd .pos-relative in .modal is for demo only
          <div class="modal d-block pos-static">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25">
                  <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
                  <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                </div> modal-body 
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Save changes</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Close</button>
                </div>
              </div>
            </div> modal-dialog
          </div> modal
        </div> pd-y-50 bg-gray -->