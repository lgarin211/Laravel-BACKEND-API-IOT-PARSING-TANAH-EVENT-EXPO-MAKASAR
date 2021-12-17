@include('componen/chart')
@section('bin1')
            <div class="col-12 col-lg-9">
                <!-- headbin -->
              <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon purple">
                            <i class="iconly-boldShow"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">Kelembaban</h6>
                          <h6 class="font-extrabold mb-0 nowkelembapan" id="kl1" ></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon blue">
                            <i class="iconly-boldProfile"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">Pemberian Pupuk</h6>
                          <h6 class="font-extrabold mb-0"><?=date('y-d-m')?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon green">
                            <i class="iconly-boldAdd-User"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">PH Tanah</h6>
                          <h6 class="font-extrabold mb-0 nowph" id="ph1"></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon red">
                            <i class="iconly-boldBookmark"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">Suhu Sekitar</h6>
                          <h6 class="font-extrabold mb-0 nowsuhu" id="suhu2cas"> <sup>o</sup>C</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Laporan Bulanan</h4>
                    </div>
                    <div class="card-body">

                    </div>
                  </div>
                </div>
              </div>
              
              <!-- clinddata -->
              <div class="row">
                <div class="col-12 col-xl-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Data Realtime Sensor</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                              <use xlink:href="{{url('/dist/')}}/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h6 class="mb-0 ms-3 ">Kelembapan</h6>
                          </div>
                        </div>
                        <div class="col-6">
                          <h5 class="mb-0 nowkelembapan" id="kl2" ></h5>
                        </div>
                        <div class="col-12">
                          @yield('bay1')
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                              <use xlink:href="{{url('/dist/')}}/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">PH Tanah</h5>
                          </div>
                        </div>
                        <div class="col-6">
                          <h5 class="mb-0 nowph" id='ph2'></h5>
                        </div>
                        <div class="col-12">
                          @yield('bay3')
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                              <use xlink:href="{{url('/dist/')}}/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Suhu</h5>
                          </div>
                        </div>
                        <div class="col-6">
                          <h5 class="mb-0 nowsuhu" id='suhu1cas'><sup>o</sup>C</h5>
                        </div>
                        <div class="col-12">
                          @yield('bay2')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-12 col-xl-8">
                  <div class="card">
                    <div class="card-header">
                      <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-lg">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Comment</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="col-3">
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-md">
                                    <img src="{{url('/dist/')}}/assets/images/faces/5.jpg">
                                  </div>
                                  <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                </div>
                              </td>
                              <td class="col-auto">
                                <p class=" mb-0">Congratulations on your graduation!</p>
                              </td>
                            </tr>
                            <tr>
                              <td class="col-3">
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-md">
                                    <img src="{{url('/dist/')}}/assets/images/faces/2.jpg">
                                  </div>
                                  <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                </div>
                              </td>
                              <td class="col-auto">
                                <p class=" mb-0">Wow amazing design! Can you make another tutorial for this design?</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>

            </div>
@endsection

@section('chatbytime')
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="bar"></div>
                    </div>
                </div>
            </div>
@endsection

