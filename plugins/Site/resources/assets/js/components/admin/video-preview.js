import $ from 'jquery';

export default () => {
    // YouTube/Vimeo video preview
    $('.form').on('change', 'input[data-preview-embed]', (event) => {
        let $input = $(event.currentTarget),
            video = $input.val(),
            videoId = null;

        if (video.match(/\s*<\s*iframe\s+/i)) {
            video = video.replace(/\s*<\s*iframe\s+/i, '<iframe class="embed-responsive-item" ');
        } else {
            videoId = video.match(/\s*(http:|https:)*(\/\/)*(www\.)*(youtube\.com|youtube-nocookie\.com)*(\/watch\?v=|\/embed\/)*([a-zA-Z0-9-_]*)/i);
            videoId = videoId[videoId.length - 1];

            if (videoId) {
                video = `<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube-nocookie.com/embed/${videoId}" frameborder="0" allowfullscreen></iframe>`;
            } else {
                video = null;
            }
        }

        if (video) {
            $($input.data('preview-embed')).removeClass('is-empty').html(video);
        } else {
            $($input.data('preview-embed')).addClass('is-empty').html('');
        }
    });
    $('.form input[data-preview-embed]').trigger('change');
};
