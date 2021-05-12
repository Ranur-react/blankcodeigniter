<?php error_reporting(E_ALL ^ E_NOTICE);
if ($text != null) :
    $text = ' ' . $text;
endif;
?>
<?php if ($modallarge == 1) : ?>
    <style>
        .modal {
            padding: 10px !important;
        }

        .modal .modal-dialog {
            width: 100%;
            max-width: none;
            margin: 0;
        }

        .modal .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }
    </style>
<?php endif; ?>
<div class="modal fade" <?= $backdrop == 1 ? 'data-backdrop="static"' : '' ?> id="modal-data">
    <div class="modal-dialog<?= $modallg == 1 ? ' modal-lg' : '' ?>">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title<?= $text ?>"><?= $title ?></h4>
            </div>
            <div class="modal-body table-responsive">
                <?= $body ?>
            </div>
            <?php if ($modalfooter == null) : ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross2"></i> Tutup</button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>