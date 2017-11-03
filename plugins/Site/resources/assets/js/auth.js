import $ from 'jquery';
window.jQuery = $;

import 'parsleyjs';
import 'parsleyjs/dist/i18n/pt-br';

import token from './components/token.js';

$(() => {
    'use strict';

    token();
});
