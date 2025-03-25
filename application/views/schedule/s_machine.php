
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl col-lg">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">SCHEDULE MACHINE</h6>
                    </div>
                    <div class="card-body">
                        <div id='calendar'></div>
                        <!-- Modal untuk Update Status -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Change Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="status">Select Status</label>
          <select class="form-control" id="statusSelect">
            <option value="advance">Advance</option>
            <option value="on time">On Time</option>
            <option value="delay">Delay</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveStatus">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
        
  .fc-timegrid-slot-label {
    display: none !important;
  }
</style>
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '<?= base_url("schedule/get_schedule_json"); ?>',
        eventDidMount: function(info) {
            if (info.event.extendedProps.description) {
                info.el.setAttribute("title", info.event.extendedProps.description);
            }
        },
        // Handle event click
        eventClick: function(info) {
            // Get current status from the clicked event
            var currentStatus = info.event.extendedProps.status;

            // Open the modal and set the current status in the select input
            $('#statusSelect').val(currentStatus); // set current status in the select input

            // Show the modal
            $('#statusModal').modal('show');

            // Save changes on button click
            $('#saveStatus').off('click').on('click', function() {
                var newStatus = $('#statusSelect').val();

                // Update the event status in the FullCalendar
                info.event.setExtendedProp('status', newStatus);

                // Optionally, make an AJAX call to update the status in the database
                $.ajax({
                    url: '<?= base_url("schedule/update_event_status"); ?>',
                    method: 'POST',
                    data: {
                        event_id: info.event.id, // you can use a unique id for your events
                        status: newStatus
                    },
                    success: function(response) {
                        // Handle success if needed
                        alert("Event status updated!");
                    },
                    error: function() {
                        // Handle error if needed
                        alert("Failed to update status!");
                    }
                });

                // Close the modal
                $('#statusModal').modal('hide');
            });
        }
    });

    calendar.render();
});

</script>
