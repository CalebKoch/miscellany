import { colord } from "colord";
import tippy from "tippy.js";
import Coloris from "@melloware/coloris";

let fieldTheme;
let theme = {};

$(document).ready(function () {
    init();
    initDemoTooltip();
});

const init = () => {
    loadPreviousConfig();

    Coloris({
        el: '.picker',
        format: 'hsl',
    });

    document.querySelectorAll('.picker').forEach(input => {
        let bgColor = window.getComputedStyle(input).backgroundColor;
        let target = input.dataset.target;


        input.addEventListener('click', function (e) {
            console.log('coloris', bgColor);
            Coloris({
                defaultColor: bgColor,
            });
        });
        input.addEventListener('coloris:pick', event => {
            updateColour(event.detail.color, target);
        });
    });

    /*$.each($('.picker'), function () {
        let bgColor = $(this).css('backgroundColor');
        let target = $(this).data('target');

        //console.log('color', bgColor);
        $(this).spectrum({
            preferredFormat: "hsl",
            showInput: true,
            color: bgColor,
            change: function(colour) {
                updateColour(colour, target);
            },
            show: function () {},
            hide: function () {},
        });
    });*/

    $('#theme-builder').on('submit', function () {

        let btn = $('#form-submit-main');
        btn.addClass('loading').prop('disabled', true);

        // Grab the data from
        fieldTheme.val(JSON.stringify(theme));

        return true;

    });
};

const loadPreviousConfig = () => {
    fieldTheme = $('#field-theme');

    let val = fieldTheme.val();
    if (!val) {
        console.log('no config');
        return;
    }
    let json = JSON.parse(val);
    Object.entries(json).forEach(([variable, value]) => {
        theme[variable] = value;
    });

};

const updateColour = (colour, target) => {

    let base = colour.toHslString().replace("hsl(", '').replaceAll(",", '').replace(")", '');
    let focus = darken(colour.toHslString()).toHsl();
    let content = contrast(colour.toHslString()).toHsl();

    // Generates background + focus + content
    let withFocus = ['a', 's', 'p', 'n', 'si'];
    // Generates only background + content
    let alerts = ['in', 'su', 'wa', 'er'];

    if (withFocus.indexOf(target) !== -1) {
        change(target, base);
        change(target + 'f', focus.h + ' ' + focus.s + '% ' + focus.l + '%');
        change(target + 'c', content.h + ' ' + content.s + '% ' + content.l + '%');
    }
    else if (alerts.indexOf(target) !== -1) {
        change(target, base);
        change(target + 'c', content.h + ' ' + content.s + '% ' + content.l + '%');
    }
    else if (target === 'b') {
        let darker = darken(colour.toHslString(), 0.1).toHsl();
        let darkest = darken(colour.toHslString(), 0.2).toHsl();
        change(target + '1', base);
        change(target + '2', darker.h + ' ' + darker.s + '% ' + darker.l + '%');
        change(target + '3', darkest.h + ' ' + darkest.s + '% ' + darkest.l + '%');
        change(target + 'c', content.h + ' ' + content.s + '% ' + content.l + '%');
    }
    else if (target === 'w') {
        let content = contrast(colour.toHslString());
        change('content-wrapper-background', '#' + colour.toHex());
        change('theme-main-text', '' + content.toHex());
    }
};

const change = (variable, value) => {
    theme[variable] = value;
    document.documentElement.style.setProperty('--' + variable, value);
};

const contrast = (hsl, percentage = 0.8) => {
    if (colord(hsl).isDark()) {
        return colord(hsl).lighten(percentage);
    } else {
        return colord(hsl).darken(percentage);
    }
};

const darken = (hsl, percentage = 0.2) => {
    return colord(hsl).darken(percentage);
};

const initDemoTooltip = () => {
    let e = document.querySelector('[data-toggle="tooltip-demo"]');
    tippy(e, {
        content: '<div class="dd-menu flex flex-col gap-1 max-w-2xl">' + tooltipContent() + '</div>',
        theme: 'kanka',
        delay: 250,
        placement: e.dataset.direction ?? 'bottom',
        arrow: true,
        allowHTML: true,
        interactive: true,
    });
};

const tooltipContent = () => {
    let str = '';

    str += '<div class="tooltip-content p-1">' +
        '<div class="flex gap-2 items-center mb-1">' +
        '<div class="grow entity-names">' +
        ' <span class="entity-name text-xl block">Demo tooltip</span>' +
        '<span class="entity-subtitle text-base block">Subtitle</span>' +
        '</div>' +
        '</div>' +
        '<div class="tooltip-text text-sm">' +
        '<p>Rutrum adipiscing enim pellentesque mi rutrum lacus eget amet nisl dolor maecenas adipiscing diam orci commodo suspendisse tincidunt tristique gravida leo arcu condimentum fusce nunc.</p>' +
        '</div>' +
        '</div>'
    ;
    return str;
};

