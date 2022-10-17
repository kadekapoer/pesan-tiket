<x-admin-layout title='Check-In'>
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4 text-success"><i class="fa fa-check"></i></h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p class="text-center text-secondary">Tiket Valid, Silahkan Masuk kedalam Venue :)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>{{$tiket->name}}</td>
                            <td>{{$tiket->email}}</td>
                          </tr>
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>