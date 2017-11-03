import $ from 'jquery';

export default (selector) => {
    const $widgets = $(selector);
    const icons = {
        '01d': {
            image: 'day/clear-sky.png',
            alternative_text: 'Dia, céu limpo',
        },
        '02d': {
            image: 'day/few-clouds.png',
            alternative_text: 'Dia, poucas nuvens',
        },
        '03d': {
            image: 'day/scattered-clouds.png',
            alternative_text: 'Dia, nuvens dispersas',
        },
        '04d': {
            image: 'day/broken-clouds.png',
            alternative_text: 'Dia, céu nublado',
        },
        '09d': {
            image: 'day/shower-rain.png',
            alternative_text: 'Dia, chuva e céu nublado',
        },
        '10d': {
            image: 'day/rain.png',
            alternative_text: 'Dia, chuva',
        },
        '11d': {
            image: 'day/thunderstorm.png',
            alternative_text: 'Dia, tempestade',
        },
        '13d': {
            image: 'day/snow.png',
            alternative_text: 'Dia, neve',
        },
        '50d': {
            image: 'day/mist.png',
            alternative_text: 'Dia, névoa',
        },
        '01n': {
            image: 'night/clear-sky.png',
            alternative_text: 'Noite, céu limpo',
        },
        '02n': {
            image: 'night/few-clouds.png',
            alternative_text: 'Noite, poucas nuvens',
        },
        '03n': {
            image: 'night/scattered-clouds.png',
            alternative_text: 'Noite, nuvens dispersas',
        },
        '04n': {
            image: 'night/broken-clouds.png',
            alternative_text: 'Noite, céu nublado',
        },
        '09n': {
            image: 'night/shower-rain.png',
            alternative_text: 'Noite, chuva e céu nublado',
        },
        '10n': {
            image: 'night/rain.png',
            alternative_text: 'Noite, chuva',
        },
        '11n': {
            image: 'night/thunderstorm.png',
            alternative_text: 'Noite, tempestade',
        },
        '13n': {
            image: 'night/snow.png',
            alternative_text: 'Noite, neve',
        },
        '50n': {
            image: 'night/mist.png',
            alternative_text: 'Noite, névoa',
        },
    };

    $widgets.html('<img class="weather-icon"><span class="weather-temp"></span>');

    const update = () => {
        $widgets.each((index, widget) => {
            const apiBase = $('body').data('api-base');
            const local = $(widget).data('local');

            $.ajax({
                timeout: 60 * 1000, // milliseconds
                url: `${apiBase}unidades/${local}/tempo`,
            })
                .done((data) => {
                    const image = icons[data.weather[0].icon].image;
                    const alternativeText = icons[data.weather[0].icon].alternative_text;
                    const temp = `${Math.round(data.main.temp)} °C`;

                    $(widget).find('.weather-icon').prop({
                        src: `assets/images/weather/${image}`,
                        alt: alternativeText,
                    });
                    $(widget).find('.weather-temp').text(temp);
                });
        });
    };

    update();
    setInterval(update, 30 * 60 * 1000);
};
