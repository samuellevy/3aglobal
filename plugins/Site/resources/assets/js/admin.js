import $ from 'jquery';
window.jQuery = $;

require('bootstrap-sass/assets/javascripts/bootstrap/dropdown.js');
require('bootstrap-sass/assets/javascripts/bootstrap/modal.js');

import 'bootstrap-select';
import 'parsleyjs';
import 'parsleyjs/dist/i18n/pt-br';
import 'magnific-popup';

import token from './components/token.js';
import removable from './components/admin/removable.js';
import selectModals from './components/admin/select-modals.js';
import uploadPreview from './components/admin/upload-preview.js';
import videoPreview from './components/admin/video-preview.js';
import disabledWithout from './components/admin/disabled-without.js';
import toggle from './components/admin/toggle.js';

$(() => {
    'use strict';

    // bootstrap-select and Parsley adaptation
    let $parsleyForms = $('form[data-parsley-validate]');
    if ($parsleyForms.length > 0) {
        $parsleyForms.find('.selectpicker').selectpicker({ title: '' });

        $parsleyForms.parsley().on('field:error', function () {
            if (this.$element.prop('tagName').toLowerCase() === 'select' && this.$element.hasClass('selectpicker')) {
                this.$element.parents('.bootstrap-select').find('button').removeClass('parsley-success').addClass('parsley-error');
            }
        }).on('field:success', function () {
            if (this.$element.prop('tagName').toLowerCase() === 'select' && this.$element.hasClass('selectpicker')) {
                this.$element.parents('.bootstrap-select').find('button').removeClass('parsley-error').addClass('parsley-success');
            }
        });
    }

    // Media modal
    $.extend(true, $.magnificPopup.defaults, {
        type: 'image',
        tClose: 'Fechar (Esc)',
        tLoading: 'Carregando&hellip;',
        ajax: {
            tError: '<a href="%url%">O conteúdo</a> não pôde ser carregado.'
        },
        image: {
            tError: '<a href="%url%">A imagem</a> não pôde ser carregada.'
        },
        zoom: {
            //enabled: true,
            duration: 300,
            easing: 'ease-in-out'
        },
        gallery: {
            //enabled: true,
            tPrev: 'Anterior (seta para esquerda)',
            tNext: 'Próxima (seta para direita)',
            tCounter: '%curr% de %total%'
        }
    });

    token();
    removable();
    selectModals();
    uploadPreview();
    videoPreview();
    disabledWithout();
    toggle();
});
