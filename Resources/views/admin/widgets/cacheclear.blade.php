<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Önbellek Temizle</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <a id="cache-cleared" class="btn btn-block btn-warning">Temizle</a>
    </div>
    <!-- /.box-body -->

    <div class="modal fade bs-cache-clear-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Önbellek Temizle</h4>
                </div>
                <div class="modal-body">
                    Önbellek Temizlendi
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#cache-cleared").on('click', function () {
        $.get("{{ route('dashboard.cache.clear') }}", function(data){
            if(data.success) {
                $('.bs-cache-clear-modal-sm .modal-body').html('Önbellek Temizlendi');
                $('.bs-cache-clear-modal-sm').modal('show');
                setTimeout(function(){
                    $('.bs-cache-clear-modal-sm').modal('hide');
                },1000)
            } else {
                $('.bs-cache-clear-modal-sm .modal-body').html('Önbellek Temizlenemedi');
                $('.bs-cache-clear-modal-sm').modal('show');
            }
        });
    });
</script>