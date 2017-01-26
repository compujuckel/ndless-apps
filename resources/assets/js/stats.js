var Stats = (function(){
    "use strict";

    var data;
    var lang;

    var compChartCX;
    var compChartCl;
    var versChart;
    var authChart;

    function parseJson() {
        data = JSON.parse($('#stats-data').html());
        lang = JSON.parse($('#lang-data').html());
    }

    function buildDoughnutChart(countTotal, countPart, labelSupport, labelNoSupport, selector) {
        return new Chart(
            $(selector).get(0).getContext("2d"),
            {
                type: 'doughnut',
                data: {
                    labels: [labelSupport, labelNoSupport],
                    datasets: [
                        {
                            data: [countPart, countTotal - countPart],
                            backgroundColor: ['#46BFBD', '#F7464A'],
                            hoverBackgroundColor: ['#5AD3D1', '#FF5A5E']
                        }
                    ]
                }
            }
        );
    }

    function buildBarChart(labels, values, name, selector) {
        return new Chart(
            $(selector).get(0).getContext("2d"),
            {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: name,
                        backgroundColor: "rgba(151,187,205,0.5)",
                        borderColor: "rgba(151,187,205,0.8)",
                        hoverBackgroundColor: "rgba(151,187,205,0.75)",
                        hoverBorderColor: "rgba(151,187,205,1)",
                        data: values
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                min: 0
                            }
                        }]
                    }
                }
            }
        );
    }

    function init() {
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.legend.display = false;

        parseJson();

        compChartCX = buildDoughnutChart(data.countProjects, data.countCx, lang.cxsupport, lang.nocxsupport, '#compChartCX');
        compChartCl = buildDoughnutChart(data.countProjects, data.countClassic, lang.clsupport, lang.noclsupport, '#compChartCl');

        versChart = buildBarChart(
            data.comp.map(function (elem) { return elem.version; }),
            data.comp.map(function (elem) { return elem.count; }),
            lang.compatible,
            '#versChart'
        );

        authChart = buildBarChart(
            data.author.map(function (elem) { return elem.name; }),
            data.author.map(function (elem) { return elem.count; }),
            lang.contributions,
            '#authChart'
        );
    }

    return {
        init: init
    };
})();
