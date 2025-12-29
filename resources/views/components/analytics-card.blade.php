<div class="col-span-12 md:col-span-6 lg:col-span-4">
    <div class="bg-white rounded-2xl h-full flex flex-col p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
        <div class="flex items-start mb-6">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-black" id="chart-title-{{ $chartType }}-{{ Str::slug($title) }}">
                    {{ $title }}
                </h3>
            </div>
        </div>

        @if($chartType === 'pie')
            <div class="flex flex-col items-center mt-3" role="img" aria-labelledby="chart-title-{{ $chartType }}-{{ Str::slug($title) }} chart-desc-{{ $chartType }}-{{ Str::slug($title) }}">
                <div class="relative w-[240px] h-[240px] lg:w-[230px] lg:h-[230px] mb-4">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 200 200" aria-hidden="true">
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#f3f4f6" stroke-width="25"/>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#0066FF" stroke-width="25" stroke-dasharray="201 302" stroke-linecap="round" class="transition-all duration-1000 ease-out"/>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#11857F" stroke-width="25" stroke-dasharray="100.5 402.5" stroke-dashoffset="-201" stroke-linecap="round" class="transition-all duration-1000 ease-out"/>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#F66D75" stroke-width="25" stroke-dasharray="150.75 352.25" stroke-dashoffset="-301.5" stroke-linecap="round" class="transition-all duration-1000 ease-out"/>
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                        <div class="text-3xl lg:text-4xl font-bold text-gray-800">80%</div>
                        <div class="text-sm text-gray-500 mt-1">Success Rate</div>
                    </div>
                </div>

                <div class="mt-6 flex justify-center flex-wrap gap-3 w-full">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                        <span class="text-sm font-medium text-gray-700">Return</span>
                        <span class="text-sm text-gray-500">40%</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="w-3 h-3 bg-teal-600 rounded-full"></div>
                        <span class="text-sm font-medium text-gray-700">Distribute</span>
                        <span class="text-sm text-gray-500">30%</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        <span class="text-sm font-medium text-gray-700">Sale</span>
                        <span class="text-sm text-gray-500">20%</span>
                    </div>
                </div>
            </div>
        @else
            <div class="relative {{ $chartType === 'doughnut' ? 'mt-[14px]' : '' }}">
                <canvas 
                    id="chart-{{ $chartType }}-{{ Str::slug($title) }}" 
                    aria-labelledby="chart-title-{{ $chartType }}-{{ Str::slug($title) }}"
                    class="{{ $chartType === 'doughnut' ? 'lg:h-[' . $height . '] h-[255px]' : 'h-[' . $height . ']' }} w-full"
                ></canvas>
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('chart-{{ $chartType }}-{{ Str::slug($title) }}');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');

    // Common configuration
    const commonConfig = {
        responsive: true,
        maintainAspectRatio: false,
        interaction: { mode: 'index', intersect: false },
        plugins: {
            legend: { display: false },
            tooltip: {
                displayColors: false,
                cornerRadius: 10,
                padding: 12,
                backgroundColor: 'rgba(15, 23, 42, 0.95)',
                titleColor: '#ffffff',
                bodyColor: '#ffffff',
                borderColor: 'rgba(148, 163, 184, 0.1)',
                borderWidth: 1
            }
        },
        animation: {
            duration: 1600,
            easing: 'easeOutQuart',
            animateRotate: true,
            animateScale: true
        }
    };

    const fontConfig = { family: "'Plus Jakarta Sans', sans-serif", size: 12 };
    const scaleStyle = {
        grid: { display: false, drawBorder: false },
        ticks: { color: 'rgba(3, 2, 41, 0.7)', font: fontConfig, padding: 10 }
    };

    let chartConfig = {};

    @switch($chartType)
        @case('line')
            const createGradients = () => {
                const { left, right, top, bottom } = canvas.getBoundingClientRect();
                const borderGradient = ctx.createLinearGradient(left, 0, right, 0);
                borderGradient.addColorStop(0, '#6C9EEA');
                borderGradient.addColorStop(1, '#0066FF');

                const fillGradient = ctx.createLinearGradient(0, top, 0, bottom);
                fillGradient.addColorStop(0, 'rgba(108, 158, 234, 0.2)');
                fillGradient.addColorStop(1, 'rgba(0, 102, 255, 0.02)');

                return { border: borderGradient, fill: fillGradient };
            };

            chartConfig = {
                type: 'line',
                data: {
                    labels: ['10am', '11am', '12pm', '01pm', '02pm', '03pm', '04pm', '05pm'],
                    datasets: [{
                        label: 'Sales',
                        data: [40, 22, 38, 20, 40, 55, 25, 60],
                        borderColor: () => createGradients().border,
                        backgroundColor: () => createGradients().fill,
                        borderWidth: 6,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#10847E',
                        pointBorderWidth: 4,
                        pointRadius: 4,
                        pointHoverRadius: 7,
                        tension: 0.5,
                        fill: true
                    }]
                },
                options: {
                    ...commonConfig,
                    animation: { ...commonConfig.animation, duration: 2000, delay: ctx => ctx.dataIndex * 80 },
                    plugins: {
                        ...commonConfig.plugins,
                        tooltip: { ...commonConfig.plugins.tooltip, backgroundColor: '#0066FF', callbacks: { label: ctx => ctx.parsed.y.toLocaleString() + ' units' } }
                    },
                    scales: {
                        x: scaleStyle,
                        y: { ...scaleStyle, beginAtZero: true, max: 100, ticks: { stepSize: 20 }, grid: { color: 'rgba(0,0,0,0.04)' } }
                    }
                },
                plugins: [{
                    id: 'verticalLine',
                    afterDraw(chart) {
                        if (chart.tooltip?._active?.length) {
                            const x = chart.tooltip._active[0].element.x;
                            const { top, bottom } = chart.scales.y;
                            chart.ctx.save();
                            chart.ctx.beginPath();
                            chart.ctx.setLineDash([5, 5]);
                            chart.ctx.moveTo(x, top);
                            chart.ctx.lineTo(x, bottom);
                            chart.ctx.lineWidth = 2;
                            chart.ctx.strokeStyle = 'rgba(16, 132, 126, 0.3)';
                            chart.ctx.stroke();
                            chart.ctx.restore();
                        }
                    }
                }]
            };
            @break

        @case('area')
            const fillGradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
            fillGradient.addColorStop(0, 'rgba(16, 132, 126, 0.2)');
            fillGradient.addColorStop(1, 'rgba(16, 132, 126, 0.02)');

            chartConfig = {
                type: 'line',
                data: {
                    labels: ['9am', '10am', '11am', '12pm', '1pm', '2pm', '3pm', '4pm'],
                    datasets: [{
                        data: [120, 180, 260, 220, 300, 280, 340, 400],
                        borderColor: '#10847E',
                        backgroundColor: fillGradient,
                        borderWidth: 3,
                        pointRadius: 0,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    ...commonConfig,
                    plugins: {
                        ...commonConfig.plugins,
                        tooltip: { callbacks: { label: ctx => '$' + (ctx.parsed.y * 1000).toLocaleString() } }
                    },
                    scales: {
                        x: scaleStyle,
                        y: { ...scaleStyle, beginAtZero: true, ticks: { callback: v => '$' + (v * 1000).toLocaleString() } }
                    }
                }
            };
            @break

        @case('doughnut')
            chartConfig = {
                type: 'doughnut',
                data: {
                    labels: ['Patient', 'Order', 'Inventory', 'Completed'],
                    datasets: [{
                        data: [35, 25, 20, 20],
                        backgroundColor: ['#0368FF', '#F66C74', '#EE9700', '#10847E'],
                        borderColor: '#ffffff',
                        borderWidth: 3,
                        hoverOffset: 8
                    }]
                },
                options: {
                    ...commonConfig,
                    cutout: '40%',
                    plugins: {
                        legend: { position: 'bottom', labels: { usePointStyle: true, boxWidth: 10, padding: 16 } },
                        tooltip: { callbacks: { label: ctx => {
                            const total = ctx.dataset.data.reduce((a,b) => a+b, 0);
                            return `${ctx.label}: ${((ctx.parsed / total) * 100).toFixed(1)}%`;
                        }}},
                        datalabels: {
                            color: '#ffffff',
                            font: { size: 14, weight: 'bold' },
                            formatter: (val, ctx) => Math.round((val / ctx.dataset.data.reduce((a,b)=>a+b,0)) * 100) + '%'
                        }
                    }
                },
                plugins: [ChartDataLabels]
            };
            @break

        @case('bar')
        @case('bar-1')
     chartConfig = {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            data: [23400, 15000, 30000, 22000, 10000, 23400, 5000],
            backgroundColor: (ctx) => {
                if (!ctx.chart?.data?.datasets?.[0]?.data) return '#207F22';
                const value = ctx.chart.data.datasets[0].data[ctx.dataIndex];
                return value <= 15000 ? '#0066FF' : '#207F22';
            },
            barPercentage: 0.45,
            categoryPercentage: 0.8,
            borderRadius: 5,
            borderSkipped: false 
        }]
    },
    options: {
        ...commonConfig,
        layout: { padding: { top: 30 } },
        plugins: {
            legend: { display: false },
            datalabels: { 
                anchor: 'end',
                align: 'top',
                color: '#1e293b',
                font:   fontConfig,
                formatter: (value) => value.toLocaleString()
            }
        },
        scales: {
            x: {
                grid: { display: false },
                ticks: {
                    color: '#374151',
                    font: fontConfig, 
                    padding: 10
                }
            },
            y: {
                display: false,
                beginAtZero: true,
                  ticks: {
                    color: 'rgba(3, 2, 41, 0.7)',                    
                    font: fontConfig, 
                    padding: 10
                }
            }
        }
    },
    plugins: [ChartDataLabels] 
};
            @break
    @endswitch

    new Chart(ctx, chartConfig);
});
</script>
@endpush