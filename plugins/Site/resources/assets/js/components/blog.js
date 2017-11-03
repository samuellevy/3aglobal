import $ from 'jquery';
import debounce from 'lodash.debounce';
import Handlebars from 'handlebars';

export default () => {
    const $btnSearch = $('.button-search');
    if ($btnSearch.length > 0 ) {
        $btnSearch.magnificPopup({
            type: 'inline',
            preloader: false,
            mainClass: 'blog-modal',
            modal: false,
            focus: '.js-ajax-search-field',
        });

        $('.clean-search').on('click', event => {
            event.preventDefault();
            $('.field-search input').val('');
            $('form.js-ajax-search').trigger('submit');
        });

        $('.js-ajax-search-field').on('input', debounce(() => {
            $('form.js-ajax-search').trigger('submit');
        }, 200));

        $('form.js-ajax-search').on('submit', event => {
            event.preventDefault();

            let $form = $(event.currentTarget),
                $submit = $form.find('[type="submit"]').attr('disabled', 'disabled'),
                query = $form.find('[name="q"]').val();

            $.ajax({
                timeout: 60 * 1000, // milliseconds
                url: `${$form.prop('action')}?q=${query}`,
                type: $form.prop('method'),
            })
                .done((data, textStatus, jqXHR) => {
                    let $container = $('.resultado-pesquisa'),
                        template = Handlebars.compile(
                            $('#blog-search-results').html()
                        );

                    $container.html(template(data));
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
    }
};
