<div class="logo">
    <img src="/img/logo_3.jpg" alt="" style="height: 70px;width:100px">
</div>

<div class="menu-toggle">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>


<div style="margin: auto"></div>

<div class="header-part-right">
    <!-- Full screen toggle -->
    <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>

    <!-- Grid menu Dropdown -->
    {{-- <div class="dropdown">
        <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="menu-icon-grid">
                <a href="/" target="_blank"><i class="i-Shop-4"></i> Website</a>
            </div>
        </div>
    </div> --}}

    <!-- Notificaiton -->
    <div class="dropdown">
        <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="i-Bell text-muted header-icon"></i>
            <span class="badge badge-primary" id="count_notif"></span>
        </div>

                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="notifs"></div>
                    </div>
    </div>

    <!-- User -->
    <div class="dropdown">
        <div class="col align-self-end" style="width: 70px">
            <img src="/img/avatars/6.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <center>
                        <i class="i-Lock-User mr-1"></i> {{ Auth::user()->email }}
                    </center>
                </a>
                <a class="dropdown-item" href="{{route('profile.edit')}}"><i class="i-Gear"></i> Account</a>
                <a class="dropdown-item" href="{{route('logout')}}"><i class="i-Key"></i> Log Out</a>
            </div>
        </div>
    </div>
</div>
<script>
    function notifs(){
        $.ajax({
                url: "{{ route('notifications.data') }}",
                type: "GET",
                data: "",
                success: function (response) {
                    console.log(response)   
                    response.forEach(function(notification) {
                    let messagesDiv = `<div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>${notification.name}</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1"></span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">${notification.date}</span>
                                </p>
                                <p class="text-small text-muted m-0">${notification.description}</p>
                            </div>
                        </div>`;
                    $('.notifs').append(messagesDiv);

                    })
                   
                },
            });  
    }
    notifs()
    document.addEventListener("DOMContentLoaded", function () {
    window.Echo.channel("public-messages")
        .listen(".message.sent", function (event) {
            console.log("Received:", event);
            alert("hihi");
            notifs()
    
        });
    });
</script>