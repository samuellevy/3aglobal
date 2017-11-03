import $ from 'jquery';
import Handlebars from 'handlebars';

export default () => {
    Handlebars.registerHelper('toJSON', function (object) {
        return new Handlebars.SafeString(JSON.stringify(object));
    });

    // Remove image
    $('.form').on('click', '.remove-image', (event) => {
        let $button = $(event.currentTarget),
            image = $button.data('name');

        $(`[name="${image}"]`).val('');
        $(`#${image}`).attr('src', '');
    });

    // Remove file
    $('.form').on('click', '.remove-file', (event) => {
        let $button = $(event.currentTarget),
            file = $button.data('name'),
            id = $button.data('id'),
            remove = $button.data('remove');

        $(`[name="${file}"], [name="${id}"]`).val('');
        $(remove).remove();
    });

    // Removable
    $('.form').on('click', '.removable .remove', (event) => {
        let $button = $(event.currentTarget),
            callbackBefore = $button.data('callback-before'),
            callbackBeforeParams = $button.data('callback-before-params');

        if (
            callbackBefore !== undefined &&
            callbackBeforeParams !== undefined
        ) {
            callbackBeforeParams = callbackBeforeParams.split(',');
            window[callbackBefore](callbackBeforeParams);
        }

        if ($button.data('list') !== undefined) {
            let $deleteIds = $( $button.data('list') );
            if ($deleteIds.val() !== '') {
                $deleteIds.val($deleteIds.val() + ',');
            }
            $deleteIds.val($deleteIds.val() + $button.data('id'));
        }

        $button.parents('.removable').remove();
    });

    $('.use-form-template').on('click', (event) => {
        let $button = $(event.currentTarget),
            callbackAfter = $button.data('callback-after'),
            index = parseInt($button.data('index')),
            $container = $($button.data('container')),
            template = Handlebars.compile(
                $($button.data('template')).html()
            );

        $container.append( template({ i: index }) );
        $button.data('index', index + 1);

        // bootstrap-select
        $('form[data-parsley-validate]')
            .find('.selectpicker').selectpicker({ title: '' });

        if (callbackAfter !== undefined) {
            window[callbackAfter]();
        }
    });

    $('.use-data-template').on('click', (event) => {
        let $button = $(event.currentTarget),
            index = parseInt($button.data('index')),
            container = encodeURIComponent($button.data('container')),
            template = encodeURIComponent($button.data('template')),
            button = $button.attr('id');

        $.magnificPopup.open({
            items: {
                src: $button.data('href') + `?index=${index}&container=${container}&template=${template}&button=${button}`,
                type: 'ajax'
            },
            closeBtnInside: false
        });
    });
};
