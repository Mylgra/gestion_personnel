@php
    $events = $getEvents();
    $type = $getType();
@endphp
@dump($events)
<div
    class="card"
    data-calendar="true"
    x-data="{
        calendar: null,
        init() {
            this.calendar = new FullCalendar.Calendar(this.$refs.calendar, {
                initialView: '{{ $type }}',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: @json($events)
            });
            this.calendar.render();
        }
    }"
    x-init="init"
>
    <div class="card-inner">
        <div id="calendar" x-ref="calendar" class="nk-calendar"></div>
    </div>
</div>

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
@endpush
