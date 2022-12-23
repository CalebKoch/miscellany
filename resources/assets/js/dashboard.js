import ajaxModal from "./components/ajax-modal";
import Sortable from "sortablejs";

/**
 * Dashboard
 */
var newWidget, newWidgetPreview, newWidgetCalendar, newWidgetRecent;

var btnAddWidget;
var modalContentButtons, modalContentTarget, modalContentSpinner;

var widgetVisible = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            renderWidget(entries[0].target);
        }
    });
}, { threshold: [0] });

$(document).ready(function() {

    if ($('.widget-render').length > 0) {
        document.querySelectorAll('.widget-render').forEach((i) => {
            if (i) {
                widgetVisible.observe(i);
            }
        });
    }

    $('.preview-switch').click(function (e) {
        e.preventDefault();

        var preview = $('#widget-preview-body-' + $(this).data('widget'));
        if (preview.hasClass('preview')) {
            preview.removeClass('preview').addClass('full');
            $(this).html('<i class="fa-solid fa-chevron-up"></i>');
        } else {
            preview.removeClass('full').addClass('preview');
            $(this).html('<i class="fa-solid fa-chevron-down"></i>');
        }

    });

    $('[data-release="remove"]').click(function() {
        $.post({
            url: $(this).data('url'),
            method: 'POST',
            context: this,
        }).done(function() {
            $(this).closest('.box').fadeOut("normal", function () {
                $(this).remove();

                if ($('.dashboard-releases .box').length === 0) {
                    $('.dashboard-releases').remove();
                }
            });
        });
    });

    if ($('.campaign-dashboard-widgets').length === 1) {
        initDashboardAdminUI();
    }

    initDashboardRecent();
    initDashboardCalendars();
    initFollow();
    removePreviewExpander();
});

/**
 *
 */
function initDashboardAdminUI() {
    newWidget = $('#new-widget');
    newWidgetPreview = $('#new-widget-preview');
    newWidgetCalendar = $('#new-widget-calendar');
    newWidgetRecent = $('#new-widget-recent');

    btnAddWidget = $('#btn-add-widget');
    modalContentButtons = $('#modal-content-buttons');
    modalContentTarget = $('#modal-content-target');
    modalContentSpinner = $('#modal-content-spinner');

    $('.widget-list > a').click(function(e) {
        e.preventDefault();
        loadModalForm($(this).data('url'));
    });

    // Reset the modal
    btnAddWidget.click(function() {
        modalContentSpinner.hide();
        modalContentTarget.html('');
        modalContentButtons.show();
    });

    let el = document.getElementById('widgets');
    new Sortable(el, {
        handle: '.handle',
        onEnd: function (/**Event*/evt) {
            // Allow ajax requests to use the X_CSRF_TOKEN for deletes
            $.post({
                url: $('#widgets').data('url'),
                dataType: 'json',
                data: $('input[name="widgets[]"]').serialize()
            }).done(function(res) {
                if (res.success && res.message) {
                    window.showToast(res.message);
                }
            });
        }
    });

    $(document).on('shown.bs.modal shown.bs.popover', function() {
        let summernoteConfig = $('#summernote-config');
        if (summernoteConfig.length > 0) {
            window.initSummernote();
        }

        $.each($('.img-delete'), function () {
            $(this).click(function (e) {
                e.preventDefault();
                $('input[name=' + $(this).data('target') + ']')[0].value = 1;
                $(this).parent().parent().hide();
            });
        });
        initWidgetSubform();

    });
    //$('#widgets').disableSelection();
}

/**
 * Load widget subform in modal
 * @param url
 */
function loadModalForm(url) {
    // Remove content from any edit widget already loaded (to avoid having multiple fields with the tag id
    $('#edit-widget .modal-content').html('');

    modalContentButtons.hide();
    modalContentSpinner.show();

    $.ajax(url).done(function(data) {
        modalContentSpinner.hide();
        modalContentTarget.html(data);

        window.initForeignSelect();
        window.initTags();
        initWidgetSubform();
    });
}

function initWidgetSubform() {
    // Recent entities: filter field dynamic display
    $('.recent-entity-type').change(function () {
        if (this.value) {
            $('.recent-filters').show();
        } else {
            $('.recent-filters').hide();
        }
    });
}

/**
 *
 */
function initDashboardRecent() {
    $('.widget-recent-more').click(function(e) {
        e.preventDefault();
        $(this).find('.spinner').show();
        $(this).find('span').hide();

        $.ajax({
            url: $(this).data('url'),
            context: this
        }).done(function(data) {
            $(this).closest('.widget-recent-list').append(data);
            $(this).remove();

            initDashboardRecent();
            window.ajaxTooltip();
        });
    });
}

/**
 *
 */
function initDashboardCalendars()
{
    $('.widget-calendar-switch').unbind('click').click(function(e) {
        e.preventDefault();

        var url = $(this).data('url'),
            widget = $(this).data('widget');

        $('#widget-body-' + widget).find('.widget-body').hide();
        $('#widget-body-' + widget).find('.widget-loading').show();

        $.ajax({
            url: url,
            method: 'POST',
            context: this
        }).done(function(data) {
            if (data) {
                // Redirect page
                var widget = $(this).data('widget');
                $('#widget-body-' + widget).find('.widget-loading').hide();
                $('#widget-body-' + widget).find('.widget-body').html(data).show();
                $('[data-toggle="tooltip"]').tooltip();
                window.ajaxTooltip();
                initDashboardCalendars();
            }
        });
    });
}

/**
 * Follow / Unfollow a campaign
 */
function initFollow()
{
    var btn = $('#campaign-follow');
    var text = $('#campaign-follow-text');

    if (btn.length !== 1) {
        return;
    }

    var status = btn.data('following');
    if (status) {
        text.html(btn.data('unfollow'));
    } else {
        text.html(btn.data('follow'));
    }
    btn.show();

    btn.click(function (e) {
        e.preventDefault();

        $.post({
            url: $(this).data('url'),
            method: 'POST'
        }).done(function(data) {
            if (data.following) {
                text.html(btn.data('unfollow'));
            } else {
                text.html(btn.data('follow'));
            }
        });
    });
}

function removePreviewExpander() {
    $.each($('[data-toggle="preview"]'), function() {
        // If we are exactly the max-height, some content is hidden
        // console.log('compare', $(this).height(), 'vs', $(this).css('max-height'));
        if ($(this).height() === parseInt($(this).css('max-height'))) {
            $(this).next().removeClass('hidden');
        } else {
            $(this).removeClass('pinned-entity preview');
        }
        //$(this).next().removeClass('hidden');
    });
}

/**
 * Render an deferred-rendering widget
 * @param widget
 */
function renderWidget(widget)
{
    widget = $(widget);
    $.ajax({
        url: widget.data('url'),
    }).done(function (res) {
        widget.find('.widget-loading').hide();
        widget.find('.widget-body').html(res).show();

        $('[data-toggle="tooltip"]').tooltip();
        window.ajaxTooltip();
        ajaxModal();
        initDashboardCalendars();
    });
}
