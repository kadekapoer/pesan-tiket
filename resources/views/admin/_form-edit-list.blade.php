<x-admin-layout title="Edit Pemesan Tiket">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">{{$data->name}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.update', $data->id)}}" method="POST">
                            @csrf
                            @method('put')
                          <div class="card-body">
                            <div class="form-group">
                              <label for="code">Kode Tiket</label>
                              <input type="text" class="form-control" id="code" placeholder="Nama" value="{{$data->code}}" disabled>
                            </div>
                            <div class="form-group">
                              <label for="name">Nama</label>
                              <input type="text" class="form-control" id="name" placeholder="Nama" value="{{$data->name}}" name="name">
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Email" value="{{$data->email}}" name="email">
                            </div>
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>