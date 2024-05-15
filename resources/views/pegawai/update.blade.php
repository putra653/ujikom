@extends ('admin.admin')
@section('content')




<div class="p-6">
    
    <h2 class="text-sm text-slate-700 dark:text-slate-400 mb-4">Tambah Pegawai</h2>
    @if ($errors->any())
    <div class="my-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div> 
    </div> 
    @endif
    <form  action="{{route('update.pegawai', $users->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
            <div class="lg:col-span-2">
                <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                <input value="{{old('name',$users->name)}}"  name="name" type="text" class="form-input" id="inputAddress" placeholder="Masukkan Nama Anda">
                @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="lg:col-span-2">
                <label for="inputAddress" class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                <input value="{{old('email',$users->email)}}"  name="email" type="text" class="form-input" id="inputAddress" placeholder=" Masukkan Email Anda ">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2"> Telepon </label>
                <input value="{{old('telepon',$users->telepon)}}" name="telepon"  type="text" class="form-input" id="inputAddress2" placeholder="Masukkan Telepon Anda">
                @error('telepon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2"> Alamat </label>
                <input value="{{old('alamat',$users->alamat)}}" name="alamat" type="text" class="form-input" id="inputAddress2" placeholder="Masukkan Telepon Anda">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="inputAddress2" class="text-gray-800 text-sm font-medium inline-block mb-2"> Role </label>
               <select  name="role" id="role " class="form-input">
                <option value="hidden" selected disabled hidden>Pilih role </option>
                <option value="admin">admin</option>
                <option value="manager">manager</option>
                <option value="supervisor">supervisor</option>
                <option value="petugas">petugas</option>
               </select>
               @error('role')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label  class="text-gray-800 text-sm font-medium inline-block mb-2">Upload Foto</label>    
                <input value="{{old('foto_profile',$users->foto_profile)}}" name="foto_profile" type="file" class="form-input">
                <img src="{{asset('storage/back/foto-profile/'.$users->foto_profile)}}" >
                @error('foto_profile')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
           
        </div>

        

            <br>


        <button type="submit" class="btn bg-primary text-white">Tambah</button>
    </form>
   
</div>
</div>
</div> <!-- end col -->
</div>
@endsection