<div>
    <div class="form-row">
        <div class="col-md-7">
            <div class="form-group">
                <label>Kategori Produk</label>
                <select wire:model="category" class="form-control">
                    <option value="">Semua Produk</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Jumlah Produk</label>
                <select wire:model="showCount" class="form-control">
                    <option value="9">9 Produk</option>
                    <option value="15">15 Produk</option>
                    <option value="21">21 Produk</option>
                    <option value="30">30 Produk</option>
                    <option value="">Semua Produk</option>
                </select>
            </div>
        </div>
    </div>
</div>
