@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Obat</h1>
            <hr>
            <form action="{{ route('obat.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama Obat:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
				<div class="form-group">
                    <label for="email">Harga:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
				<div class="form-group">
                    <label for="nohp">Stok:</label>
                    <input type="number" class="form-control" id="nohp" name="nohp">
                </div>
				<div class="form-group">
                    <label for="alamat">Expired Date:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
				<div class="form-group">
                    <label for="alamat">Production Date:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection