import $ from 'jquery';

export default () => {
    // File upload preview
    $('.form').on('click', '.file-block:not(.no-upload) .preview', (event) => {
        $(event.currentTarget).siblings('input[type="file"]').trigger('click');
    });

    $('.form').on('change', '.file-block input[type="file"]', (event) => {
        let input = event.currentTarget,
            $preview = $(input).siblings('.preview');

        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = (event) => {
                $preview.attr('src', event.currentTarget.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }).trigger('change');
};
