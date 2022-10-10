<x-app-layout>
    
    <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand">Pesan Tiket</a>
          <div class="nav-item d-flex">
            <a class="nav-link me-2" href="#">Login</a>
            <a class="nav-link" href="#">Register</a>
          </div>
        </div>
      </nav>

      <section class="container mt-5">

        
        <form action="{{route('user.store')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </section>

</x-app-layout>