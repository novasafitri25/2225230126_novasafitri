<p>
    <style>
        .container_konten{
            padding: 0px;
            margin: 0px;
            display: flex;
        }
    </style>

    <div class="container_konten">
        <div class="col-md-12" style="background:#d1ecf1">
            <!--awal SIDEBAR-->
            <style>
                .col-md-3{
                    padding: 0px;
                    margin: 0px;
                }
            </style>
            {{-- <div class="col-md-3">
                <img src="{{ asset('gambar') }}/sidebar.jpg" width="100%" height="100%">
            </div> --}}
            <!--akhir SIDEBAR-->
            <!--awal KONTEN-->
            <div class="col-md-12">
            @yield('isihalaman')                 
            </div>
            <!--akhir KONTEN-->
        </div>
    </div>