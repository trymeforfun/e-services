<div class="row mt-5">
    <div class="col-4">
        <input type="text" class="form-control" placeholder="search..." name="search" aria-label="Recipient's username"
            aria-describedby="button-addon2">
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col">
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="col">
                <input type="date" name="end_date" class="form-control">
            </div>
        </div>
    </div>
    {{-- @if(Request::path() == "/penjemputan" || Request::path() == "/pengembalian" || Request::path() == "/pengerjaan")
    <div class="col-12">
        <div class="row">
            <select name="status" id="">
                <option value="delivery">Penjemputan</option>
                <option value="detailing">Pengerjaan</option>
                <option value="packaging">Pengembalian</option>
            </select>
        </div>
    </div>
    @endif --}}
    <div class="col-2">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">search</button>
    </div>
</div>
