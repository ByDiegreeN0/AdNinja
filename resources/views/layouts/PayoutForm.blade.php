<form>
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputEmail4">Email *</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
        </div>

        <div class="form-group col-md-3">
            <label for="inputPassword4">Name & Last Name *</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Name" required>
        </div>

        <div class="form-group col-md-1">
            <label for="inputPassword4">Prefix</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="+57...">
        </div>


        <div class="form-group col-md-2">
            <label for="inputPassword4">Phone Number</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Phone Number">
        </div>

    </div>
    <div class="form-group">
        <label for="inputAddress">Address *</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputState">Country *</label>
            <select id="inputState" class="form-control" required>
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="inputCity">City *</label>
            <input type="text" class="form-control" id="inputCity" required>
        </div>

        <div class="form-group col-md-2">
            <label for="inputZip">Zip Code</label>
            <input id="disabledTextInput" type="text" class="form-control" id="inputZip">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@yield('PayoutForm')
