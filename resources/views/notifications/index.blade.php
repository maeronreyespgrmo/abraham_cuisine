@vite(['resources/js/app.js'])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style>
    .inbox-container {
      margin: 0 auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      overflow: hidden;
    }

    .inbox-header {
      padding: 1rem;
      border-bottom: 1px solid #e5e7eb;
      font-weight: bold;
      font-size: 1.2rem;
      background-color: #f9fafb;
    }

    .message {
      display: flex;
      align-items: center;
      padding: 1rem;
      background-color: #fffffe;
      border-bottom: 1px solid #788295;
      cursor: pointer;
      transition: background 0.2s;
    }

    .message:hover {
      background-color: #f9fafb;
    }

    .message.unread {
      background-color: #fffbeb;
      font-weight: bold;
    }

    .avatar {
      width: 40px;
      height: 40px;
      background: #d1d5db;
      border-radius: 50%;
      margin-right: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: #374151;
    }

    .message-content {
      flex: 1;
      overflow: hidden;
    }

    .message-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.3rem;
    }

    .sender {
      color: #111827;
    }

    .timestamp {
      color: #9ca3af;
      font-size: 0.875rem;
    }

    .subject {
      color: #374151;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    @media (max-width: 600px) {
      .subject {
        font-size: 0.9rem;
      }
    }
  </style>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Notifications</h1>
        <div class="bg-white shadow-md rounded-lg p-12">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="table-responsive">
                        
                        <div class="inbox-container">                          
                        

                            <div class="panel"></div>

                          
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
</x-app-layout>
<script>
        function notifs(){
          $('.panel').empty()
            $.ajax({
                url: "{{ route('notifications.data') }}",
                type: "GET",
                data: $(this).serialize(),
                success: function (response) {
                    console.log(response)

                    response.forEach(function(notification) {

                    let messageDiv = `
                    <div class="message">
                    <div class="avatar">${notification.name.split()[0]}</div>
                    <div class="message-content">
                    <div class="message-header">
                    <span class="sender">${notification.name}</span>
                    <span class="timestamp">${notification.date}</span>
                    </div>
                    <div class="subject">${notification.description}</div>
                    </div>
                    </div>
                    `;
                    $('.panel').append(messageDiv);

                    })
                   
                },
            });      
        }
        notifs()

        document.addEventListener("DOMContentLoaded", function () {
            window.Echo.channel("public-messages")
            .listen(".message.sent", function (event) {
            console.log("Received:", event);
            alert("New Notification!");
            toggledot.style.display = "block";
                notifs()
            });
        });
</script>