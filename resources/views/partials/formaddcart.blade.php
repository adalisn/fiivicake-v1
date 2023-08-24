<form method="post" action="/cart" class="d-flex align-items-center">
    @csrf
    <input type="hidden" name="pid" value="{{ $p->id }}">
    <input type="hidden" name="uid" value="{{ auth()->user()->id }}">
    {{-- <div class="row border border-primary"> --}}
        <div class="col-9 col-lg-8 col-md-7 col-sm-8">
            <select class="form-select border border-primary" aria-label="default select example" name="quantity" >
                <option value="25">25 items</option>
                <option value="50">50 items</option>
                <option value="75">75 items</option>
                <option value="100">100 items</option>
            </select>
        </div>
        <div class="col d-flex justify-content-end">
            <button type="submit" class="rounded btn btn-primary ms-2 ms-md-2">Add to Cart</button>
        </div>
        {{-- </div> --}}
</form>