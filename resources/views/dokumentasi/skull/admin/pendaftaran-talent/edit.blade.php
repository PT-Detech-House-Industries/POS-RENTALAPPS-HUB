<h1>edit kategori produk</h1>

<form action="{{ route('kategori.produk.update', [$data[0]->id]) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" value="{{ $data[0]->nama }}" class="form-control" placeholder="nama kategori">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="deskripsi">
                    {{ $data[0]->deskripsi }}
                </textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        	<button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>