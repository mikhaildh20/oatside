@extends('index')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>User ID</th>
                        <th>Prize</th>
                        <th>Location</th>
                        <th>E-mail Status</th>
                        <th>Play Session</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>Mikhail Daffa</td>
                        <td>mikhaildaffa@gmail.com</td>
                        <td>201004</td>
                        <td>4</td>
                        <td>Bina Nusantara</td>
                        <td>Sent!</td>
                        <td>24-05-2023</td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <a class="text-light btn rounded-pill btn-primary"><i class='bx bxs-download'></i> Export to Excel</a>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->
@endsection