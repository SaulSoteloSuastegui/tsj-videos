@extends('layouts.app')


@section('fullcalendar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment-with-locales.min.js'></script>
@endsection

@section('content')


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card-header">
                Agenda
            </div>
            <div class="card">
                <div class="p-2" id="agenda"></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {

  var calendarEl = document.getElementById('agenda');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    height: 520,
    initialView: 'dayGridMonth',
    locale:"es",

  })

  calendar.render();


})

</script>

@endsection

