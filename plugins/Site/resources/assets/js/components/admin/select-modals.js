import $ from 'jquery';
import Handlebars from 'handlebars';
import 'magnific-popup';

export default () => {
    // AJAX forms
    $(document).on('click', '.media-modal .panel-footer nav a[href]', (event) => {
        event.preventDefault();

        let $link = $(event.currentTarget),
            $form = $link.parents('.media-modal').find('form.ajax.search');
        $form.data('action', $link.attr('href'));
        $form.submit();
    });

    $(document).on('submit', 'form.ajax.search', (event) => {
        event.preventDefault();

        let $form = $(event.currentTarget),
            $submit = $form.find('[type="submit"]').attr('disabled', 'disabled');

        $form.siblings().find('small.results').html('Carregando&hellip;');
        $($form.data('scope')).find('.panel-footer nav').html('');
        $($form.data('container')).find('.results').css('display', 'none').end()
            .find('.loading').css('display', 'block');

        let action = null;
        if ($form.data('search') !== $form.find('input[type="search"]').val()) {
            action = $form.prop('action');
            $form.data('action', action);

            $form.data( 'search', $form.find('input[type="search"]').val() );
        } else {
            action = $form.data('action');
        }

        $.ajax({
            timeout: 60 * 1000, // milliseconds
            url: action,
            type: $form.prop('method'),
            data: $form.serialize()
        })
            .done((data, textStatus, jqXHR) => {
                let $container = $($form.data('container')),
                    template = Handlebars.compile(
                        $($form.data('template')).html()
                    );

                $container.find('.loading').css('display', 'none').end()
                    .find('.results').css('display', 'block');
                $container.find('.results').html( template(data) );

                let resultsText = '';
                if (data.totalCount === 0) {
                    resultsText = 'Nenhum resultado';
                } else if (data.totalCount === 1) {
                    resultsText = '1 resultado';
                } else if (data.currentCount === data.totalCount) {
                    resultsText = data.totalCount + ' resultados';
                } else {
                    resultsText = 'Exibindo ' + data.currentCount + ' de ' + data.totalCount + ' resultados';
                }
                $form.siblings().find('small.results').html(resultsText);

                $($form.data('scope')).find('.panel-footer nav').html(data.links);
            })
            .fail((jqXHR, textStatus, errorThrown) => {
                switch (textStatus) {
                    case 'timeout':
                    case 'error':
                    case 'abort':
                    case 'parsererror':
                        console.error(errorThrown);
                        break;
                }
            })
            .always((jqXHR, textStatus) => {
                $submit.removeAttr('disabled');
            });
    });

    $(document).on('click', '.refresh', (event) => {
        let $button = $(event.currentTarget);

        if ($button.data('form') !== undefined) {
            $($button.data('form')).submit();
        }
    });

    $(document).on('click', '.media-modal .gallery-media a', (event) => {
        event.preventDefault();

        let $link = $(event.currentTarget),
            $gallery = $link.parents('.gallery');

        if ($link.data('id') !== undefined) {
            let name = $gallery.data('name'),
                sizes = $gallery.data('sizes'),
                resizeUrl = $gallery.data('resize-url');
            name = name.replace(/\[/g, '\\[');
            name = name.replace(/\]/g, '\\]');

            $('#hidden-' + name).val($link.data('id'));
            $('#' + name).attr('src', $link.data('img'));

            if (sizes) {
                $.ajax({
                    timeout: 60 * 1000, // milliseconds
                    url: resizeUrl,
                    type: 'GET',
                    data: { id: $link.data('id'), sizes }
                })
                    .fail((jqXHR, textStatus, errorThrown) => {
                        switch (textStatus) {
                            case 'timeout':
                            case 'error':
                            case 'abort':
                            case 'parsererror':
                                console.error(errorThrown);
                                break;
                        }
                    });
            }

            $.magnificPopup.close();
        }
    });

    $(document).on('click', '.media-modal .select', (event) => {
        let $item = $(event.currentTarget),
            $gallery = $item.parents('.gallery'),
            index = parseInt($gallery.data('index')),
            $container = $($gallery.data('container')),
            template = Handlebars.compile(
                $($gallery.data('template')).html()
            ),
            $button = $('#' + $gallery.data('button'));

        if ($item.data('json') !== undefined) {
            $container.append( template({ i: index, base: $gallery.data('base'), data: $item.data('json') }) );
            $button.data('index', index + 1);

            $.magnificPopup.close();
        }
    });

    // Open modal
    $('.form').on('click', '.open-modal', (event) => {
        let $button = $(event.currentTarget),
            sizes = $button.data('sizes') ? $button.data('sizes') : '';

        $.magnificPopup.open({
            items: {
                src: $button.data('href') + '?field-name=' + $button.attr('id') + '&sizes=' + sizes,
                type: 'ajax'
            },
            closeBtnInside: false
        });
    });

    // CKEditor integration
    $(document).on('click', '.media-modal .ckeditor-media a', (event) => {
        event.preventDefault();

        let $link = $(event.currentTarget),
            $gallery = $link.parents('.gallery');

        if ($link.data('id') !== undefined) {
            let name = $gallery.data('name');
            name = name.replace(/\[/g, '\\[');
            name = name.replace(/\]/g, '\\]');

            $('#hidden-' + name).val($link.data('id'));
            $('#' + name).attr('src', $link.data('img'));

            window.opener.CKEDITOR.tools.callFunction(
                getUrlParam('CKEditorFuncNum'), $link.data('img')
            );
            window.close();
        }
    });

    // Helper function to get parameters from the query string.
    function getUrlParam(paramName) {
        let reParam = new RegExp('(?:[\?&]|&)' + paramName + '=([^&]+)', 'i');
        let match = window.location.search.match(reParam);

        return (match && match.length > 1) ? match[1] : null;
    }
};
