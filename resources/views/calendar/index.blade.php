@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])


  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/main.min.css" rel="stylesheet">
   <style>

    #event-modal {
      display: none;
      position: fixed;
      top: 100px;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      z-index: 1000;
    }
  </style>

@section('content')
    @include('layouts.message')
	<div class="card">



		<div class="card-body">
         <div id="calendar"></div>

<!-- Modal for Add/Edit -->
<div id="event-modal">
  <h3 id="modal-title">Add Event</h3>
  <input type="text" id="event-title" placeholder="Event Title" /><br><br>
  <button onclick="saveEvent()">Save</button>
  <button onclick="deleteEvent()">Delete</button>
  <button onclick="closeModal()">Cancel</button>
</div>
        </div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->

@section('page_script')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<script>
  let currentEvent = null;
  let calendar;

  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      selectable: true,
      editable: true,

      // Add new event
      select: function (info) {
        currentEvent = {
          start: info.startStr,
          end: info.endStr,
          allDay: info.allDay
        };
        showModal('Add Event', '', false);
      },

      // Edit existing event
      eventClick: function (info) {
        currentEvent = info.event;
        showModal('Edit Event', info.event.title, true);
      }
    });

    calendar.render();
  });

  function showModal(title, eventTitle, isEdit) {
    document.getElementById('modal-title').textContent = title;
    document.getElementById('event-title').value = eventTitle;
    document.getElementById('event-modal').style.display = 'block';
    document.querySelector('[onclick="deleteEvent()"]').style.display = isEdit ? 'inline-block' : 'none';
  }

  function closeModal() {
    document.getElementById('event-modal').style.display = 'none';
    currentEvent = null;
  }

  function saveEvent() {
    const title = document.getElementById('event-title').value;

    if (!title) return alert("Title is required.");

    if (currentEvent.id) {
      // Edit existing
      currentEvent.setProp('title', title);
    } else {
      // Add new
      calendar.addEvent({
        title: title,
        start: currentEvent.start,
        end: currentEvent.end,
        allDay: currentEvent.allDay
      });
    }

    closeModal();
  }

  function deleteEvent() {
    if (currentEvent && typeof currentEvent.remove === 'function') {
      currentEvent.remove();
      closeModal();
    }
  }
</script>
@endsection
@endsection