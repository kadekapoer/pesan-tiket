<x-admin-layout title='Dashboard'>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>Tiket yang dipesan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
  
                  <p>Tiket yang sudah ditukarkan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>Tiket yang belum ditukarkan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{route('admin.list')}}" class="info-box" style="cursor: pointer">
                  <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Daftar Pemesan</span>
                  </div>
                  <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
              </div>
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{route('admin.checkin')}}" class="info-box" style="cursor: pointer">
                  <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Check-in</span>
                  </div>
                  <!-- /.info-box-content -->
                </a>
                <!-- /.info-box -->
              </div>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</x-admin-layout>