import $ from 'jquery';

export default () => {
    let apiBase = $('body').data('api-base');

    // Regenerate tokens
    setInterval(() => {
        let $tokens = $('form input[name="_token"]');
        if ($tokens.length > 0) {
            $.ajax({
                timeout: 60 * 1000, // milliseconds
                url: apiBase + 'token',
                type: 'POST',
                data: {
                    _token: $tokens.first().val()
                }
            })
                .done((data, textStatus, jqXHR) => {
                    $tokens.val(data.token);
                });
        }
    }, 1 * 60 * 60 * 1000); // 1 hour
};
