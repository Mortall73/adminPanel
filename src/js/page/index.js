import Linechart from '../components/linechart';
import axios from 'axios';
// console.log(`%c Axios: set header Authorization`, 'color: #67db00');
let chart = document.getElementById('chart');
let chartUrl = $(chart).data('url');
let $chartForm = $('[data-graph-form]');
let $graphSelect = $chartForm.find('select');
let $transactionForm = $('[data-transaction-form]');

$graphSelect.on('change', (e) => {
    let value = e.target.value;

    axios({
        method: 'GET',
        url: $chartForm.attr('action'),
        params: {
            packages_period: value
        }
    }).then((response) => {
        console.log(response.data);
        new Linechart(response.data, 'chart',  chart).init();
    });
});

function loadCartData() {
    axios.defaults.headers.common['Authorization'] = window.appConfig.authorization;

    return axios({
        method: 'get',
        url: chartUrl
    });
}



loadCartData().then((res) => {
   new Linechart(res.data, 'chart',  chart).init();
});
