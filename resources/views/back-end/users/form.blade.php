@csrf
<div class="row">
    <div class="col-md-6">
        <label for="name">{{ $moduleName }} Name</label>
        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="name" name="name" aria-label="name"
                value="{{ isset($row) ? $row->name : '' }}" aria-describedby="basic-addon1" id="name" />
        </div>
    </div>
    <div class="col-md-6">
        <label for="email">Email</label>
        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="email" name="email" aria-label="email"
                value="{{ isset($row) ? $row->email : '' }}" aria-describedby="basic-addon1" id="email" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="password">Password</label>
        <div class="input-group mb-5">
            <input type="password" class="form-control" placeholder="password" name="password" aria-label="password"
                aria-describedby="basic-addon1" id="password" />
        </div>
    </div>
</div>
