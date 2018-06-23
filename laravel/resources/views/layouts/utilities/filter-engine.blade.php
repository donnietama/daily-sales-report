<div class="form-group">
    <input type="date" name="first_date" class="form-control" id="first_date">                            
</div>
<div class="form-group">
    <label for="second_date">&nbsp;to&nbsp;</label>
    <input type="date" name="second_date" class="form-control ml-1" id="second_date">
</div>
<div class="form-group">
    <select name="store_name" id="store_name" class="form-control ml-1">
        <option value="" selected hidden>Pilih outlet</option>

        @foreach ($userdata as $users)
            <option value="{{ $users->user_store }}">{{ $users->user_store }}</option>
        @endforeach

    </select>
</div>