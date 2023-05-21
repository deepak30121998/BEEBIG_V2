var sampleChartClass;

(function($) {
    $(document).ready(function() {
        var labels = Object.keys(leads);
        var values = Object.values(leads);
        var ctx = document.getElementById('myChart').getContext('2d');
        var barChartColor = getChartColorsArray('myChart');
        sampleChartClass.chartData(ctx, labels, values, barChartColor);
    });

    sampleChartClass = {
        chartData: function (ctx, labels, values, barChartColor) {
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Leads Analytics',
                        data: values,
                        borderWidth: 1,
                        hoverBackgroundColor: barChartColor[1],
                        hoverBorderColor: barChartColor[1],
                        backgroundColor: barChartColor[0],
                        borderColor: barChartColor[0],
                    }]
                },
                options: {
                    scales: {
                        x: {
                            ticks: {
                                font: {
                                    family: "Poppins"
                                }
                            }
                        },
                        y: {
                            ticks: {
                                font: {
                                    family: "Poppins"
                                }
                            }
                        },
                    }
                }
            });
        }
    }


})(jQuery);


