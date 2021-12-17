<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/dist/')}}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('/dist/')}}/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="{{url('/dist/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{url('/dist/')}}/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('/dist/')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{url('/dist/')}}/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  </head>
  @include('componen/comb1')
  @include('componen/comb3')
  @include('componen/comb2')

  <body>
      <script type="text/javascript">
      setInterval(() => {
        var url = '{{url('/')}}/api/getall?t=suhu&f=true';
        axios({
        method: 'GET',
        url: url,
        }).then(function(response) {
          console.log(response.data)
          document.getElementById('suhu1cas').innerHTML=response.data.data[0].y+'<sup>o</sup>C'
          document.getElementById('suhu2cas').innerHTML=response.data.data[0].y+'<sup>o</sup>C'
        })

        var url = '{{url('/')}}/api/getall?t=ph&f=true';
        axios({
        method: 'GET',
        url: url,
        }).then(function(response) {
          console.log(response.data)
          document.getElementById('ph1').innerHTML=response.data.data[0].y
          document.getElementById('ph2').innerHTML=response.data.data[0].y
        })

        var url = '{{url('/')}}/api/onspace?t=sampel__i_o_t_s';
        axios({
        method: 'GET',
        url: url,
        }).then(function(response) {
          console.log(response.data)
          document.getElementById('kl1').innerHTML=response.data.data[0].y
          document.getElementById('kl2').innerHTML=response.data.data[0].y
        })
      }, 10000);
    </script>
    <div id="app">
      @yield('sitenav')
      <div id="main">
        @yield('link')
        <div class="page-content">
          <section class="row">
            <div class="col-md-12 col-lg-12">
            
            </div>
            @yield('bin1')
            <div class="col-12 col-lg-3">
              <div class="card">
                <div class="card-body py-4 px-5">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                      <img src="https://images.bisnis-cdn.com/posts/2017/09/07/1107205/cuaca_cerah.jpg" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                      <h5 class="font-bold">Cerah</h5>
                      <h6 class="text-muted mb-0">34 <sup>o</sup>C</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-content pb-4">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h5>Tombol Pupuk</h5>
                    </div>
                  </div>
                  <div class="col-md-12 vas">
                  @yield('tombo1')
                  </div>
                  <div class="px-4">
                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>History Pemupukan</button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-content pb-4">
                  <div class="col-md-12">
                    <div class="text-center">
                      <h5>Pengaturan Pompa</h5>
                    </div>
                  </div>
                  <div class="col-md-12 vas">
                  @yield('tombo2')
                  </div>
                  <!-- <div class="px-4">
                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>History Pemupukan</button>
                  </div> -->
                </div>
              </div>
              <!-- <div class="card">
                <div class="card-header">
                  <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                  <div id="chart-visitors-profile"></div>
                </div>
              </div> -->
            </div>
          </section>
        </div>
        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2021 &copy; Smkn4 Bogor</p>
            </div>
            <div class="float-end">
              <p>Buildby <span class="text-danger">
                  <i class="bi bi-heart"></i>
                </span> by <a href="http://ahmadsaugi.com">Agustinus</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="{{url('/dist/')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{url('/dist/')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/dist/')}}/assets/vendors/apexcharts/apexcharts.js"></script>

    <script src="{{url('/dist/')}}/assets/vendors/dayjs/dayjs.min.js"></script>
    <script src="{{url('/dist/')}}/assets/js/pages/ui-apexchart.js"></script>
    
    <script src="{{url('/dist/')}}/assets/js/pages/dashboard.js"></script>
    <script src="{{url('/dist/')}}/assets/js/mazer.js"></script>
    <script>
    // for allowing animations after load since they’re initially prevented from firing
    document.addEventListener("DOMContentLoaded", function() {
        let s = this.getElementsByName("switch");
        if (s.length)
            s[0].addEventListener("change", function() {
                this.removeAttribute("class");
            });
    });
  </script>

  <script type="text/javascript">
            function damos(mall = "OFF") {
            // alert('kirimkan'+mall)
            fetch(`{{url('/')}}/api/getbtnstatus?ban=` + mall, {
                    method: 'GET',
                }).then((response) => response.json())
                .then((data) => {
                    console.log(data)
                    console.log('terkirim')
                });
        }
        var lakala='OFF';
        function valkan() {
            // var tmb = document.getElementById("tombolbim");
            // console.log(tmb.checked)
            // if (tmb.checked) {
            //     console.log('dinyalakan');
            //     damos('ON')
            //     // fetch("http://172.16.12.186/PUPUK=ON").then((response) => response.json());
            // } else {
            //     console.log('dimatikan');
            //     // fetch("http://172.16.12.186/PUPUK=OFF").then((response) => response.json());
            //     damos('OFF')
            // }
            if (lakala=='OFF') {
                console.log('dinyalakan');
                damos('ON')
                lakala='ON'
                // fetch("http://172.16.12.186/PUPUK=ON").then((response) => response.json());
            } else {
                console.log('Dimatikan');
                damos('OFF')
                lakala='OFF'
            }
        }
        damos('OFF')
  </script>
  </body>
</html>