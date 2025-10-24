<?= $this->extend('ApplicationInterface'); ?>

<?= $this->section('PageTitle'); ?>
Araç Yönetimi
<?= $this->endSection(); ?>

<?= $this->section('PageWrapper'); ?>
<!-- BEGIN PAGE HEADER -->
<div class="page-header d-print-none" aria-label="Page header">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">Araç Yönetimi</div>
                <h2 class="page-title">Tüm Araçlar</h2>
            </div>

            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-1"> New view </a>
                    </span>
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-new">
                        <i class="icon ti ti-plus"></i>
                        Yeni Araç Ekle
                    </a>
                    <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-add-new" aria-label="Yeni Araç Ekle">
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
                        <table class="table table-vcenter table-selectable">
                            <thead>
                                <tr>
                                    <th class="w-1"></th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-name">Şase Numarası</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-city">Ülke</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-status">Plaka</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-date">Marka</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-tags">Model</button>
                                    </th>
                                    <th>
                                        <button class="table-sort d-flex justify-content-between" data-sort="sort-category">Category</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-tbody">
                                <?php foreach($vehicles as $vehicle): ?>
                                <tr>
                                    <td>
                                        <input class="form-check-input m-0 align-middle table-selectable-check" type="checkbox" aria-label="Select invoice" value="true"/>
                                    </td>
                                    <td class="sort-name"><?= $vehicle->vin ?></td>
                                    <td class="sort-city"><span class="flag flag-xs flag-country-<?= strtolower($vehicle->country_code) ?> me-1"></span><?= $vehicle->country_name ?></td>
                                    <td class="sort-status"><?= $vehicle->plate ?></td>
                                    <td class="sort-date"><?= $vehicle->brand ?></td>
                                    <td class="sort-tags"><?= $vehicle->model ?></td>
                                    <td class="sort-category py-0">
                                        <span class="on-unchecked"> Agencies </span>
                                        <div class="on-checked">
                                            <div class="d-flex justify-content-end">
                                                <a href="#" class="btn btn-2 btn-icon" aria-label="Button">
                                                    <i class="icon ti ti-dots"></i>
                                                </a>
                                            </div>
                                        </div>
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
        <form class="modal-content" method="post" action="<?= route_to('add_vehicle') ?>">
            <div class="modal-header">
                <h5 class="modal-title">Yeni Araç</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>

            <!--<div class="modal-body overflow-hidden">
                <div class="ratio ratio-16x9">
                    <div class="object-cover d-flex align-items-center">
                        <img src="/assets/svg/1920x1080.svg">
                    </div>
                    <div class="object-cover d-flex justify-content-center align-items-end pb-4">
                        <div class="text-light">
                            <div class="form-label"><i class="icon ti ti-camera me-1"></i> Araç Resmi:</div>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>-->

            <div class="modal-body bg-secondary-lt">
                <div class="row">
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="chassis-number" name="vin" placeholder="Şasi Numarası" required>
                        <label for="chassis-number"><i class="icon ti ti-cursor-text"></i> Şasi Numarası</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="license-plate-number" name="plate" placeholder="Plaka" required>
                        <label for="license-plate-number"><i class="icon ti ti-cursor-text"></i> Plaka</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Marka" required>
                        <label for="brand"><i class="icon ti ti-cursor-text"></i> Marka</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="model" name="model" placeholder="Model" required>
                        <label for="model"><i class="icon ti ti-cursor-text"></i> Model</label>
                    </div>
                    <div class="col-12 form-floating">
                        <select class="form-select" id="country-code" name="country_code" aria-label="Kayıtlı Olduğu Ülke" placeholder="Kayıtlı Olduğu Ülke" required>
                            <?php foreach($countries as $country): ?>
                            <option value="<?= $country->code_2; ?>"<?= $country->code_2 == $SystemSettings->localization_systemCountry->value ? ' selected' : '' ?>><?= $country->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="country-code"><i class="icon ti ti-info-circle"></i> Kayıtlı Olduğu Ülke</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-outline btn-secondary" data-bs-dismiss="modal"> <i class="icon ti ti-x"></i> İptal </button>
                <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal"> <i class="icon ti ti-check"></i> Kaydet </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('PluginScripts'); ?>
<script src="/vendors/tabler/ui/dist/libs/list.js/dist/list.min.js" defer <?= csp_script_nonce(); ?>></script>
<?= $this->endSection(); ?>

<?= $this->section('ScriptCodes'); ?>
<script <?= csp_script_nonce(); ?>>
const advancedTable = {
    headers: [
        { "data-sort": "sort-name", name: "Name" },
        { "data-sort": "sort-city", name: "City" },
        { "data-sort": "sort-status", name: "Status" },
        { "data-sort": "sort-date", name: "Start date" },
        { "data-sort": "sort-tags", name: "Tags" },
        { "data-sort": "sort-category", name: "Category" },
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
</script>
<?= $this->endSection(); ?>