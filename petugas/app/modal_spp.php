<div class="modal fade" id="spp-<?php echo $data['id_spp']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Apakah Anda Yakin Akan Menghapus data ini ?</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body pd-25">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-colored thead-teal">
                        <tr>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $data['tahun'];?></td>
                            <td><?php echo $data['nominal'];?></td>
                           
                        </tr> 
                    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary"  href="hapus_spp.php?id=<?php echo $data['id_spp'];?>">Ya</a>
            </div>
        </div>
    </div>
</div>