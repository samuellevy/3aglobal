import $ from 'jquery';

export default () => {
    // Conditionally hide/show sections
    $(document).on('change', '.js-toggle-section', event => {
        let $input = $(event.currentTarget),
            $target = $( $input.data('target') ),
            $parent = $input.parents($input.data('parent'));

        if ($target.length > 0 && $input.prop('checked')) {
            $parent.find('.hidden-section').removeClass('is-visible');
            $target.addClass('is-visible');
        }
    });
    $('.js-toggle-section:checked').trigger('change');
};
