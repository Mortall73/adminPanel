/*
* import GLOBAL vendors.
*/
import $ from 'jquery'; //! некоторые зависимости должны быть определены в webpack.config.js в секции webpack.ProvidePlugin
import Swal from 'sweetalert2'; //! некоторые зависимости должны быть определены в webpack.config.js в секции webpack.ProvidePlugin

import './js/vendors/dropzone.min';
import './js/vendors/dropzone.min.css';
import 'simplebar';
import 'simplebar/dist/simplebar.css';
import axios from 'axios';
/* end import global vendors */

/*
* import utils js
*/
import './js/utils/polifils';
import modulesLoader from './js/utils/module-loader'; //собирает модули data-is и подключает их из папки js/modules
import validate from './js/utils/validate';
/* end import utils js */

/*
* import styles
*/
import 'sweet-dropdown/dist/min/jquery.sweet-dropdown.min.css';
import './css/main.scss';
/*end import styles */

/*
* import pages scripts
*/
import './js/page/index';
import packages from './js/page/packages';
import packageEdit from './js/page/package-edit';
/*end import pages scripts */


/*
* init scripts
*/
axios.defaults.headers.common['Authorization'] = window.appConfig.authorization || null;
modulesLoader();
validate();

packages.init();
packageEdit.init();
/* end init scripts */
