<?= $this->extend('ApplicationInterface'); ?>

<?= $this->section('PageTitle'); ?>
Park Kayıtları
<?= $this->endSection(); ?>


<?= $this->section('PageWrapper'); ?>
<!-- BEGIN PAGE HEADER -->
<div class="page-header d-print-none" aria-label="Page header">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">Park Kayıtları</div>
                <h2 class="page-title">Tüm Park Kayıtları</h2>
            </div>

            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-1"> New view </a>
                    </span>
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-new">
                        <i class="icon ti ti-plus"></i>
                        Park Emri Ekle
                    </a>
                    <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-add-new" aria-label="Park Emri Ekle">
                        <i class="icon ti ti-plus"></i>
                    </a>
                </div>
                <!-- BEGIN MODAL -->
                <!-- END MODAL -->
            </div>
        </div>
    </div>
</div>
<!-- END PAGE HEADER -->

<!-- BEGIN PAGE BODY -->
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-table">
                <div class="card-header">
                    <div class="row w-full">
                        <div class="col">
                            <h3 class="card-title mb-0">Employee</h3>
                            <p class="text-secondary m-0">Table description.</p>
                        </div>
                        <div class="col-md-auto col-sm-12">
                            <div class="ms-auto d-flex flex-wrap btn-list">
                                <div class="input-group input-group-flat w-auto">
                                    <span class="input-group-text">
                                        <i class="icon ti ti-search"></i>
                                    </span>
                                    <input id="advanced-table-search" type="text" class="form-control" autocomplete="off" />
                                    <span class="input-group-text">
                                        <kbd>ctrl + K</kbd>
                                    </span>
                                </div>
                                <a href="#" class="btn btn-icon" aria-label="Button">
                                    <i class="icon ti ti-dots"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">Download</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Third action</a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-0"> Button </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="advanced-table">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-vcenter">
                            <thead>
                                <tr>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-parked">Park Zamanı</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-parking-lot">Otopark</button>
                                    </th>
                                    <!--<th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-vehicle-vin">Şasi Numarası</button>
                                    </th>-->
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-vehicle-plate">Plaka</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-vehicle-name">Marka, Model</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-customer">Müşteri</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-user">İşlem</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-tbody">
                                <?php foreach($parking_logs as $log): ?>
                                <tr>
                                    <td class="sort-parked"><?= $log->parked_at ?></td>
                                    <td class="sort-parking-lot"><?= $log->parking_lot ?></td>
                                    <!--<td class="sort-vehicle-vin"><?= $log->vehicle_vin ?></td>-->
                                    <td class="sort-vehicle-plate"><?= $log->vehicle_plate ?></td>
                                    <td class="sort-vehicle-name"><?= $log->vehicle_name ?></td>
                                    <td class="sort-customer"><?= $log->customer_fullname ?></td>
                                    <td class="sort-retrieve-order py-0 text-end">
                                        <?php if(is_null($log->retrieve_order)): ?>
                                        <form class="input-group" method="post" action="<?= route_to('create_work-order') ?>">
                                            <input type="hidden" name="order_type" value="retrieve">
                                            <input type="hidden" name="parking_lot_id" value="<?= $log->parking_lot_id ?>">
                                            <input type="hidden" name="customer_vehicle_id" value="<?= $log->customer_vehicle_id ?>">
                                            <select class="form-select" id="select-user" name="user_id" aria-label="Personel Seçimi" placeholder="Personel Seçimi">
                                                <?php foreach($users as $user): ?>
                                                <option value="<?= $user->id; ?>"><?= "{$user->user_level} - {$user->first_name} {$user->last_name}" ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <button class="btn btn-outline" type="submit">Çıkış Emri</button>
                                        </form>
                                        <?php else: ?>
                                            <?php if(is_null($log->retrieve_order_closed)): ?>
                                            Otopark Çıkışı Bekleniyor
                                            <?php else: ?>
                                            <form method="post" action="<?= route_to('approve_retrieve') ?>">
                                                <input type="hidden" name="id" value="<?= $log->id ?>">
                                                <button type="submit" class="btn btn-outline btn-primary">Teslimatı Onayla</button>
                                            </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" data-bs-toggle="dropdown">
                                <span id="page-count" class="me-1">20</span>
                                <span>records</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" onclick="setPageListItems(event)" data-value="10">10 records</a>
                                <a class="dropdown-item" onclick="setPageListItems(event)" data-value="20">20 records</a>
                                <a class="dropdown-item" onclick="setPageListItems(event)" data-value="50">50 records</a>
                                <a class="dropdown-item" onclick="setPageListItems(event)" data-value="100">100 records</a>
                            </div>
                        </div>
                        <ul class="pagination m-0 ms-auto">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="icon ti ti-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">7</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">8</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">9</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">10</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="icon ti ti-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BODY -->
<?= $this->endSection(); ?>

<?= $this->section('Modals'); ?>
<div class="modal modal-blur fade" id="modal-add-new" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" method="post" action="<?= route_to('create_work-order') ?>">
            <input type="hidden" name="order_type" value="park">
            <div class="modal-header">
                <h5 class="modal-title">Yeni Park Emri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>

            <div class="modal-body">
                <div class="card mb-2">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                      <li class="nav-item">
                        <a href="#tabs-home-1" class="nav-link active" data-bs-toggle="tab">Müşteri Bilgisi</a>
                      </li>
                      <li class="nav-item">
                        <a href="#tabs-profile-1" class="nav-link" data-bs-toggle="tab">Araç Bilgisi</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active show" id="tabs-home-1">
                        <h4>Müşteri Ara</h4>
                        <input type="hidden" id="form-customer-id" name="customer_id" value="0">
                        <div>
                          <div class="row">
                              <div id="demo"></div>
                            <div class="col-12 input-group mb-2">
                                <input type="text" class="form-control" id="identity-number-hash" name="identity_number_hash" placeholder="Kimlik Numarası" autocomplete="off">
                                <button class="btn" type="button" onclick="customerSearch()"><i class="icon ti ti-search m-0"></i></button>
                            </div>
                            <div class="col-md-6 form-floating mb-2">
                                <select class="form-select" id="nationality" name="nationality" aria-label="Uyruğu" placeholder="Uyruğu">
                                    <?php foreach($countries as $country): ?>
                                    <option value="<?= $country->code_2 ?>"<?= $country->code_2 == 'tr' ? ' selected' : '' ?>><?= $country->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="nationality"><i class="icon ti ti-info-circle"></i> Uyruğu</label>
                            </div>
                            <div class="col-md-6 form-floating mb-2">
                                <select class="form-select" name="identity_type" id="identity-type" aria-label="Belge Türü" placeholder="Belge Türü">
                                    <option value="id_card">Kimlik</option>
                                    <option value="passport">Pasaport</option>
                                </select>
                                <label for="identity-type"><i class="icon ti ti-info-circle"></i> Belge Türü</label>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="text" class="form-control" id="first-name" name="first_name" placeholder="İsim" autocomplete="off">
                                <label for="first-name"><i class="icon ti ti-cursor-text"></i> İsim</label>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Soyisim" autocomplete="off">
                                <label for="last-name"><i class="icon ti ti-cursor-text"></i> Soyisim</label>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="email" class="form-control" id="email" name="email_address" placeholder="Eposta" autocomplete="off">
                                <label for="email"><i class="icon ti ti-at"></i> Eposta</label>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="number" class="form-control" id="phone-number" name="phone_number" placeholder="Telefon Numarası" min="1" autocomplete="off">
                                <label for="phone-number"><i class="icon ti ti-phone"></i> Telefon Numarası</label>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tabs-profile-1">
                        <h4>Araç Ara</h4>
                        <input type="hidden" id="form-vehicle-id" name="vehicle_id" value="0">
                        <div>
                          <div class="row">
                              <div id="demo2"></div>
                            <div class="col-12 input-group mb-2">
                                <input type="text" class="form-control" id="vin" name="vin" placeholder="Şasi Numarası" autocomplete="off">
                                <button class="btn" type="button" onclick="vehicleSearch()"><i class="icon ti ti-search m-0"></i></button>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="text" class="form-control" id="license-plate-number" name="plate" placeholder="Plaka" autocomplete="off">
                                <label for="license-plate-number"><i class="icon ti ti-cursor-text"></i> Plaka</label>
                            </div>
                            <div class="col-6 form-floating">
                                <select class="form-select" id="registration-country-code" name="country_code" aria-label="Kayıtlı Olduğu Ülke" placeholder="Kayıtlı Olduğu Ülke">
                                    <?php foreach($countries as $country): ?>
                                    <option value="<?= $country->code_2; ?>"<?= $country->code_2 == 'tr' ? ' selected' : '' ?>><?= $country->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="registration-country-code"><i class="icon ti ti-info-circle"></i> Kayıtlı Olduğu Ülke</label>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="text" class="form-control" id="brand" name="brand" placeholder="Marka" autocomplete="off">
                                <label for="brand"><i class="icon ti ti-cursor-text"></i> Marka</label>
                            </div>
                            <div class="col-6 form-floating mb-2">
                                <input type="text" class="form-control" id="model" name="model" placeholder="Model" min="1" autocomplete="off">
                                <label for="model"><i class="icon ti ti-cursor-text"></i> Model</label>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-floating mb-2">
                            <select class="form-select" id="parking-lot-select" name="parking_lot_id" aria-label="Otopark Seçimi" placeholder="Otopark Seçimi">
                                <?php foreach($parking_lots as $parking_lot): ?>
                                <option value="<?= $parking_lot->id ?>"><?= $parking_lot->name ?> : <?= "{$parking_lot->total_occupation} / {$parking_lot->capacity}" ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="parking-lot-select"><i class="icon ti ti-info-circle"></i> Otopark Adı : Doluluk / Kapasite</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="staff-select" name="user_id" aria-label="Personel Seçimi" placeholder="Personel Seçimi">
                                <?php foreach($users as $user): ?>
                                <option value="<?= $user->id ?>"><?= $user->user_level ?> - <?= "{$user->first_name} {$user->last_name}" ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="staff-select"><i class="icon ti ti-info-circle"></i>Yetki - Personel</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal"> İptal </button>
                <button type="submit" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                    <i class="icon ti ti-plus"></i>
                    Park Emrini Kaydet
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('PluginScripts'); ?>
<script src="/vendors/tabler/ui/dist/libs/list.js/dist/list.min.js?1754405813" defer <?= csp_script_nonce(); ?>></script>
<?= $this->endSection(); ?>

<?= $this->section('ScriptCodes'); ?>
<script <?= csp_script_nonce(); ?>>
const advancedTable = {
    headers: [
        { "data-sort": "sort-customer", name: "Müşteri" },
        //{ "data-sort": "sort-vehicle-vin", name: "Şasi Numarası" },
        { "data-sort": "sort-vehicle-name", name: "Marka, Model" },
        { "data-sort": "sort-vehicle-plate", name: "Plaka" },
        { "data-sort": "sort-parking-lot", name: "Otopark" },
        { "data-sort": "sort-retrieve-order", name: "Çıkış Emri" },
        { "data-sort": "sort-parked", name: "Park Zamanı" },
    ],
};
const setPageListItems = (e) => {
    window.tabler_list["advanced-table"].page = parseInt(e.target.dataset.value);
    window.tabler_list["advanced-table"].update();
    document.querySelector("#page-count").innerHTML = e.target.dataset.value;
};
window.tabler_list = window.tabler_list || {};
document.addEventListener("DOMContentLoaded", function () {
    const list = (window.tabler_list["advanced-table"] = new List("advanced-table", {
        sortClass: "table-sort",
        listClass: "table-tbody",
        page: parseInt("20"),
        pagination: {
        item: (value) => {
            return `<li class="page-item"><a class="page-link cursor-pointer">${value.page}</a></li>`;
        },
        innerWindow: 1,
        outerWindow: 1,
        left: 0,
        right: 0,
        },
        valueNames: advancedTable.headers.map((header) => header["data-sort"]),
    }));
    const searchInput = document.querySelector("#advanced-table-search");
    if (searchInput) {
        searchInput.addEventListener("input", () => {
            list.search(searchInput.value);
        });
    }
});

let customer;
function customerSearch()
{
    const id_no = document.getElementById('identity-number-hash').value;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        customer = JSON.parse(this.responseText);
        if(customer.id !== "0"){
            document.getElementById('identity-number-hash').value = id_no.toUpperCase();
            document.getElementById('form-customer-id').value = customer.id;
            document.getElementById('first-name').value = customer.first_name;
            document.getElementById('last-name').value = customer.last_name;
            document.getElementById('email').value = customer.email_address;
            document.getElementById('phone-number').value = customer.phone_number;
            document.getElementById('identity-type').value = customer.identity_number_type;
            document.getElementById('nationality').value = customer.nationality;
        }else{
            document.getElementById("demo").innerHTML = '<div class="alert alert-danger alert-dismissible" role="alert"><div class="alert-icon"><i class="icon alert-icon ti ti-alert-circle"></i></div>Müşteri bulunamadı!<a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
        }
    }
    xhttp.open("GET", "musteri-ara/"+id_no);
    xhttp.send();
}

let vehicle;
function vehicleSearch()
{
    const vin = document.getElementById('vin').value;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        vehicle = JSON.parse(this.responseText);
        if(vehicle.vin !== "0"){
            document.getElementById('vin').value = vehicle.vin.toUpperCase();
            document.getElementById('form-vehicle-id').value = vehicle.id;
            document.getElementById('registration-country-code').value = vehicle.country_code;
            document.getElementById('license-plate-number').value = vehicle.plate;
            document.getElementById('brand').value = vehicle.brand;
            document.getElementById('model').value = vehicle.model;
        }else{
            document.getElementById("demo2").innerHTML = '<div class="alert alert-danger alert-dismissible" role="alert"><div class="alert-icon"><i class="icon alert-icon ti ti-alert-circle"></i></div>Araç bulunamadı!<a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
        }
    }
    xhttp.open("GET", "arac-ara/"+vin);
    xhttp.send();
}
</script>
<?= $this->endSection(); ?>