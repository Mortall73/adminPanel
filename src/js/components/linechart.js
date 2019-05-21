export default class Linechart {

    /**
     * constructor - создает график
     *
     * @param  {Object} data        объект вида { dates: ["05-03-2019", ...], count: [10, 20, 30, ...] }
     * @param  {Node} container     контйенер
     * @param  {type} options       опции
     */
    constructor(data,  container, options) {
        this.data = data;
        this.dates = data.dates.map((date)=> {
            return date.split('-')[0];
        });
        this.options = options || {
            legend: {
                display: true,
                position: 'top',
                labels: {
                    boxWidth: 80,
                    fontColor: 'black'
                }
            }
        };
        this.container = container;
    }


    init() {
        Highcharts.chart(this.container, {
            chart: {
                type: 'areaspline',
                zoomType: 'x'
            },
            title: {
                text: ' '
            },
            subtitle: {

            },
            xAxis: {
                categories: this.dates
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                areaspline: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, '#e7eaff'],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'areaspline',
                name: 'Количество посылок',
                data: this.data.count
            }]
        });
    }



};
