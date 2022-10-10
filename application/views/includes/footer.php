
<!-- BEGIN: Vendor JS-->
<script src="<?= base_url() ?>app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<script src="<?=base_url()?>app-assets/vendors/js/extensions/dropzone.min.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url() ?>app-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->
<script src="<?= base_url() ?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>

<!-- BEGIN: Theme JS-->
<script src="<?= base_url() ?>app-assets/js/core/app-menu.js"></script>
<script src="<?= base_url() ?>app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->
<script src="<?=base_url()?>app-assets/js/scripts/forms/form-file-uploader.js"></script>

<script src="<?= base_url() ?>app-assets/js/scripts/components/components-popovers.js"></script>
<script src="<?= base_url() ?>app-assets/js/scripts/components/components-modals.js"></script>
<script src="<?= base_url() ?>app-assets/js/scripts/forms/form-select2.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>