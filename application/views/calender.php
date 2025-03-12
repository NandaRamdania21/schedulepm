
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl col-lg">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Calendar Mesin</h6>
                    </div>
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
       /* Batasi ukuran kalender agar tidak full screen */
       #calendar {
            max-width: 100%;
            height: 700px !important; /* Sesuaikan tinggi kalender */
            overflow: hidden;
        }

    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            if (!calendarEl) {
                console.error("Calendar element not found");
                return;
            }
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: '2025-03-01',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                selectable: true,
                editable: false,
                dayMaxEvents: true
            });
            calendar.render();
        });
    </script>
