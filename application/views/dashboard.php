<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Schedule Preventive Maintenance System</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- DATA ADVANCE -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                DATA ADVANCE</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_advance; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-arrow-alt-circle-right fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATA ON TIME -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                DATA ON TIME</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_ontime; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATA DELAY -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                DATA DELAY</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_delay; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATA SCHEDULED -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                DATA SCHEDULED</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $count_scheduled; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bar Chart -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
        </div>
        <div class="card-body">
            <canvas id="myBarChart"></canvas>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("myBarChart").getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Advance', 'On Time', 'Delay', 'Scheduled'],
            datasets: [{
                label: 'Jumlah Jadwal',
                backgroundColor: ['#4e73df', '#1cc88a', '#e74a3b', '#f6c23e'],
                borderColor: '#4e73df',
                data: [
                    <?= $count_advance ?>,
                    <?= $count_ontime ?>,
                    <?= $count_delay ?>,
                    <?= $count_scheduled ?>
                ],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
});
</script>
