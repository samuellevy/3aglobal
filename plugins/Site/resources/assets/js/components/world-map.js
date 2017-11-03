import $ from 'jquery';

export default () => {
    const $worldMap = $('.world-map');
    if ($worldMap.length > 0) {
        $('.title-accordion').on('click', (event) => {
            const $title = $(event.currentTarget);
            const $section = $title.parent();
            $section.parent().find('.content-accordion').slideUp(0);
            $section.find('.content-accordion').slideToggle('slow');
        });

        const $countriesContainer = $('.lista-paises');
        $countriesContainer.slick({
            accessibility: false,
            width: '100',
            slidesToShow: 9,
            infinite: true,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            focusOnSelect: true,
            variableWidth: true
        });

        const $countries = $countriesContainer.find('.slick-slide');
        const $detailBoxes = $('.box');
        const showDetails = () => {
            const $currentCountry = $countries.filter('.slick-current');
            const countryName = $currentCountry.data('country');
            const $currentDetailBox = $detailBoxes.filter(`#${countryName}-box`);
            const $currentCountryPath = $worldMap.find(`#${countryName}`);

            //$countries.removeClass('active');
            //$currentCountry.addClass('active');

            $worldMap.find('.country').removeClass('is-active');
            $currentCountryPath.addClass('is-active');

            $detailBoxes.removeClass('is-active');
            $currentDetailBox.addClass('is-active');

            $currentDetailBox.find('.box-detail-heading[data-city="rj"]').first()
                .trigger('click');
        };

        $worldMap.find('.box-detail-heading').on('click', (event) => {
            const $heading = $(event.currentTarget);
            const city = $heading.data('city');

            $detailBoxes.find('.box-detail').removeClass('is-active');
            $detailBoxes.find(`.box-detail-${city}`).addClass('is-active');
        });

        // Quando adicionar novos países a lista, descomentar a linha a seguir
        // e comentar a linha seguinte.
        $countriesContainer.on('afterChange', showDetails).trigger('afterChange');
        //$countriesContainer.on('click', showDetails).first().trigger('click');

        $worldMap.find('.country').on('click', (event) => {
            const $country = $(event.currentTarget);
            $countries.filter(`[data-country="${$country.attr('id')}"]`)
                .first()
                .trigger('click');
        });
    }
};
