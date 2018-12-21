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
</div>

<script>
    var successClass = 'btn btn-block btn-success';
    var errorClass = 'btn btn-block btn-error';
    var warningClass = 'btn btn-block btn-warning';
    var cacheCleared = $("#cache-cleared");
    cacheCleared.on('click', function () {
        cacheCleared.removeClass().addClass(warningClass).html('Temizleniyor...');
        $.get("{{ route('dashboard.cache.clear') }}", function(data){
            if(data.success) {
                cacheCleared.html('Temizlendi').removeClass().addClass(successClass);
            } else {
                cacheCleared.html('Temizlenemedi').removeClass().addClass(errorClass);
            }
        });
    });
</script>