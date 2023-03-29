export default function deleteConfirm() {
    // Delete confirm dialog
    $.each($('.delete-confirm'), function () {
        $(this).click(function (e) {
            let name = $(this).data('name');
            let target = $(this).data('delete-target');
            let targetModal = $(this).data('target');

            $(targetModal).find('.target-name').text(name);

            if ($(this).data('mirrored')) {
                $('#delete-confirm-mirror').show();
            } else {
                $('#delete-confirm-mirror').hide();
            }

            if ($(this).data('recoverable')) {
                $(targetModal).find('.permanent').hide();
                $(targetModal).find('.recoverable').show();
            } else {
                $(targetModal).find('.recoverable').hide();
                $(targetModal).find('.permanent').show();
            }

            if (target) {
                $('.delete-confirm-submit').data('target', target);
            }
        });
    });


    // Submit modal form
    $.each($('.delete-confirm-submit'), function (index) {
        $(this).unbind('click');
        $(this).click(function (e) {
            var target = $(this).data('target');
            //console.log('Submit delete confirmation', target);
            if (target) {
                $('#' + target + ' input[name=remove_mirrored]').val(
                    $('#delete-confirm-mirror-checkbox').is(':checked') ? 1 : 0
                );
                //console.log('target', target, $('#' + target));
                $('#' + target).submit();
            } else {
                $('#delete-confirm-form').submit();
            }
        })
    });
}
