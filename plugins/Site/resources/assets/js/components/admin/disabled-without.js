import $ from 'jquery';

export default () => {
    // Conditionally disable input fields
    $('[data-disabled-without]').each((index, element) => {
        let $input = $(element),
            disabledWithout = $input.data('disabled-without');

        $(disabledWithout).on('change, input', (event) => {
            let $input2 = $(event.currentTarget),
                $disabled = $('[data-disabled-without="' + disabledWithout + '"]');

            if ($input2.val() === '') {
                $disabled.prop({
                    checked: false,
                    disabled: true
                });
            } else {
                $disabled.prop('disabled', false);
            }
        }).trigger('input');
    });
};
