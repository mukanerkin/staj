<?= $this->extend('ApplicationInterface'); ?>

<?= $this->section('PageTitle'); ?>
Otopark Yönetimi
<?= $this->endsection(); ?>

<?= $this->section('PluginStyles'); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" <?= csp_style_nonce(); ?>/>
<?= $this->endSection(); ?>

<?= $this->section('PageWrapper'); ?>
<!-- BEGIN PAGE HEADER -->
<div class="page-header d-print-none" aria-label="Page header">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">Otopark Yönetimi</div>
                <h2 class="page-title">Tüm Otoparklar</h2>
            </div>

            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-1"> New view </a>
                    </span>
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-new">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <i class="icon ti ti-plus"></i>
                        Yeni Otopark Ekle
                    </a>
                    <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-add-new" aria-label="Yeni Otopark Ekle">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
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
        <div class="row row-cards">
            <?php foreach($parking_lots as $parking_lot): ?>
            <?php $occupation_rate = ($parking_lot->total_occupation > 0) ? $parking_lot->total_occupation*100/$parking_lot->capacity : 0; ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-tabs">
                    <div class="tab-content">
                        <!-- Content of view parking lot -->
                        <div id="parking-lot-<?= $parking_lot->id ?>-view" class="parking-lot-view card tab-pane active show" role="tabpanel">
                            <div class="card-header">
                                <div class="card-title"><?= $parking_lot->name ?></div>
                            </div>
                            <div class="card-body text-center">
                                <div class="ratio ratio-16x9 text-center">
                                    <div class="map object-cover" id="map-<?= $parking_lot->id ?>" data-latitude="<?= $parking_lot->latitude ?>" data-longitude="<?= $parking_lot->longitude ?>"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <i class="icon ti ti-map-pin me-2 text-secondary"></i>
                                        <span class="text-primary">Adres:</span> <?= $parking_lot->address ?>
                                    </div>
                                    <div class="list-group-item">
                                        <i class="icon ti ti-info-circle me-2 text-secondary"></i>
                                        <span class="text-primary">Türü:</span> <?= $parking_lot->type == 'indoor' ? 'Kapalı' : 'Açık' ?> Otopark
                                    </div>
                                    <div class="list-group-item">
                                        <i class="icon ti ti-stack-middle me-2 text-secondary"></i>
                                        <span class="text-primary">Kapasite:</span> <?= $parking_lot->capacity ?> Araç
                                    </div>
                                    <div class="list-group-item">
                                        <i class="icon ti ti-ruler me-2 text-secondary"></i>
                                        <span class="text-primary">Alan:</span> <?= $parking_lot->area ?> m²
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="progressbg">
                                    <div class="progress progress-3 progressbg-progress bg-primary-lt">
                                        <div class="progress-bar bg-primary-lt" style="width: <?= $occupation_rate ?>%" role="progressbar" aria-valuenow="<?= $occupation_rate ?>" aria-valuemin="0" aria-valuemax="100" aria-label="%42 Doluluk">
                                            <span class="visually-hidden">%<?= $occupation_rate ?>Doluluk Oranı</span>
                                        </div>
                                    </div>
                                    <div class="progressbg-text">%<?= $occupation_rate ?> Doluluk ( <?= $parking_lot->total_occupation ?> Araç )</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content of update parking lot -->
                        <div id="parking-lot-<?= $parking_lot->id ?>-edit" class="parking-lot-edit card tab-pane" role="tabpanel" data-id="<?= $parking_lot->id ?>">
                            <form class="d-flex flex-column" method="post" action="<?= route_to('save_parking-lot') ?>">
                                <div class="card-header bg-dark text-dark-fg">
                                    <div class="card-title">Otopark Bilgi Güncelleme</div>
                                </div>
                                <div class="ratio ratio-16x9">
                                    <div class="map-edit object-cover" id="map-edit-<?= $parking_lot->id ?>" data-latitude="<?= $parking_lot->latitude ?>" data-longitude="<?= $parking_lot->longitude ?>"></div>
                                </div>
                                <div class="card-body bg-dark-lt">
                                    <input type="hidden" name="id" value="<?= $parking_lot->id ?>">
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-world-latitude me-1"></i> Enlem
                                        </span>
                                        <input type="text" id="edit-latitude-<?= $parking_lot->id ?>" class="col form-control" name="latitude" placeholder="Enlem" value="<?= $parking_lot->latitude ?>" readonly required>
                                    </div>
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-world-longitude me-1"></i> Boylam
                                        </span>
                                        <input type="text" id="edit-longitude-<?= $parking_lot->id ?>" class="col form-control" name="longitude" placeholder="Boylam" value="<?= $parking_lot->longitude ?>" readonly required>
                                    </div>
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-cursor-text me-1"></i> Adı
                                        </span>
                                        <input type="text" class="col form-control" name="name" placeholder="Otopark Adı" value="<?= $parking_lot->name ?>" required>
                                    </div>
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-map-pin me-1"></i> Adresi
                                        </span>
                                        <input type="text" class="col form-control" name="address" placeholder="Otopark Adresi" value="<?= $parking_lot->address ?>" required>
                                    </div>
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-info-circle me-1"></i> Türü
                                        </span>
                                        <select class="form-select" name="type" aria-label="Otopark Türü" placeholder="Otopark Türü" required>
                                            <option value="indoor"<?= $parking_lot->type == 'indoor' ? ' selected' : '' ?>>Kapalı Otopark</option>
                                            <option value="outdoor"<?= $parking_lot->type == 'outdoor' ? ' selected' : '' ?>>Açık Otopark</option>
                                        </select>
                                    </div>
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-stack-middle me-1"></i> Kapasite
                                        </span>
                                        <input type="number" class="col form-control" name="capacity" placeholder="Kapasite" value="<?= $parking_lot->capacity ?>" requred>
                                        <span class="col-3 input-group-text justify-content-center">Araç</span>
                                    </div>
                                    <div class="row g-0 input-group mb-1">
                                        <span class="col-4 input-group-text justify-content-center">
                                            <i class="icon ti ti-ruler me-1"></i> Alan
                                        </span>
                                        <input type="text" class="col form-control" name="area" placeholder="Alan (m²)" value="<?= $parking_lot->area ?>" required>
                                        <span class="col-3 input-group-text justify-content-center">m²</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-dark">
                                    <div class="d-flex">
                                        <button class="btn btn-secondary" type="reset"><i class="icon ti ti-refresh"></i> Sıfırla</button>
                                        <button class="btn btn-primary ms-auto" type="submit"><i class="icon ti ti-check"></i> Onayla</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Content of delete parking lot -->
                        <div id="parking-lot-<?= $parking_lot->id ?>-delete" class="card tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="card-title">Content of tab #3</div>
                                <p class="text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae molestias odit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Cards navigation -->
                    <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                        <li class="nav-item" role="presentation"><a href="#parking-lot-<?= $parking_lot->id ?>-view" id="view-parking-lot-<?= $parking_lot->id ?>" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab"><i class="icon ti ti-eye me-2 text-muted"></i>Gör</a></li>
                        <li class="nav-item" role="presentation"><a href="#parking-lot-<?= $parking_lot->id ?>-edit" id="edit-parking-lot-<?= $parking_lot->id ?>" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><i class="icon ti ti-edit me-2 text-muted"></i>Düzenle</a></li>
                        <li class="nav-item" role="presentation"><a href="#parking-lot-<?= $parking_lot->id ?>-delete" id="delete-parking-lot-<?= $parking_lot->id ?>" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><i class="icon ti ti-trash me-2 text-muted"></i>Sil</a></li>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- END PAGE BODY -->
<?= $this->endsection(); ?>

<?= $this->section('Modals'); ?>
<div class="modal modal-blur fade" id="modal-add-new" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" method="post" action="<?= route_to('save_parking-lot') ?>">
            <div class="modal-header">
                <h5 class="modal-title">Yeni Otopark</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>

            <div class="modal-body">
                <div class="ratio ratio-16x9" id="map-modal" data-latitude="38.708009" data-longitude="35.524539"></div>
            </div>
            <div class="modal-body bg-secondary-lt">
                <div class="row">
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enlem" readonly required>
                        <label for="latitude"><i class="icon ti ti-world-latitude"></i> Enlem</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Boylam" readonly required>
                        <label for="longitude"><i class="icon ti ti-world-longitude"></i> Boylam</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Otopark Adı" required>
                        <label for="name"><i class="icon ti ti-cursor-text"></i> Otopark Adı</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <select class="form-select" id="parking-lot-type" name="type" aria-label="Otopark Türü" placeholder="Otopark Türü" required>
                            <option value="outdoor">Açık Otopark</option>
                            <option value="indoor">Kapalı Otopark</option>
                        </select>
                        <label for="parking-lot-type"><i class="icon ti ti-info-circle"></i> Otopark Türü</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-floating mb-2">
                        <input type="number" class="form-control" id="area" name="area" placeholder="Park Alanı (m²)" min="1" required>
                        <label for="area"><i class="icon ti ti-ruler"></i> Park Alanı (m²)</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Araç Kapasitesi" min="1" required>
                        <label for="capacity"><i class="icon ti ti-stack-middle"></i> Araç Kapasitesi</label>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Otopark Adresi" required>
                    <label for="address"><i class="icon ti ti-map-pin"></i> Otopark Adresi</label>
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
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="" <?= csp_script_nonce(); ?>></script>
<?= $this->endSection(); ?>

<?= $this->section('ScriptCodes'); ?>
<script <?= csp_script_nonce(); ?>>
var marker;
const map_modal = document.getElementById('map-modal');
document.getElementById('modal-add-new').addEventListener("shown.bs.modal", function() {
    let map = L.map('map-modal').setView([map_modal.dataset.latitude, map_modal.dataset.longitude], 17);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Add a marker on click and set latlng by marker on drag
    function onMapClick(e) {
        map.removeLayer(marker);
        marker = new L.marker(e.latlng, {draggable:'true'});
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;
        marker.on('dragend', function(event){
            var marker = event.target;
            var position = marker.getLatLng();
            marker.setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
            map.panTo(new L.LatLng(position.lat, position.lng));
            document.getElementById('latitude').value = position.lat;
            document.getElementById('longitude').value = position.lng;
        });
        map.addLayer(marker);
        map.panTo(new L.LatLng(e.latlng.lat, e.latlng.lng));
    };

    map.on('click', onMapClick);
});

// Create maps of listed parking lots
const map_areas = document.getElementsByClassName("map");
let maps = [];
for (let i = 0; i < map_areas.length; i++) {
    let map_id = map_areas[i].getAttribute("id");
    let latitude = map_areas[i].dataset.latitude;
    let longitude = map_areas[i].dataset.longitude;
    maps[map_id] = L.map(map_id).setView([latitude, longitude], 17);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(maps[map_id]);
    var marker = L.marker([latitude, longitude]).addTo(maps[map_id]);
}

// Create maps of listed parking lots' edit form
const parking_lot_edit_areas = document.getElementsByClassName("parking-lot-edit");
const map_areas_edit = document.getElementsByClassName("map-edit");
let maps_edit = [];
var markers = [];
for (let i = 0; i < map_areas_edit.length; i++) {
    let id = parking_lot_edit_areas[i].dataset.id;
    document.getElementById('edit-parking-lot-'+id).addEventListener("shown.bs.tab", function() {
        let map_id      = map_areas_edit[i].getAttribute("id");

        let latitude    = map_areas_edit[i].dataset.latitude;
        let longitude   = map_areas_edit[i].dataset.longitude;

        if(typeof(maps_edit[i]) == 'undefined'){
            maps_edit[i]    = L.map(map_id).setView([latitude, longitude], 17);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(maps_edit[i]);

            markers[i] = new L.marker([latitude, longitude], {draggable:'true'});
            maps_edit[i].addLayer(markers[i]);
        }

        function onMapClick(e) {
            maps_edit[i].removeLayer(markers[i]);
            markers[i] = new L.marker(e.latlng, {draggable:'true'});
            document.getElementById('edit-latitude-'+id).value = e.latlng.lat;
            document.getElementById('edit-longitude-'+id).value = e.latlng.lng;
            markers[i].on('dragend', function(event){
                markers[i] = event.target;
                var position = markers[i].getLatLng();
                markers[i].setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
                maps_edit[i].panTo(new L.LatLng(position.lat, position.lng));
                document.getElementById('edit-latitude-'+id).value = position.lat;
                document.getElementById('edit-longitude-'+id).value = position.lng;
            });
            maps_edit[i].addLayer(markers[i]);
            maps_edit[i].panTo(new L.LatLng(e.latlng.lat, e.latlng.lng));
        };

        maps_edit[i].on('click', onMapClick);
    });
}
</script>
<?= $this->endSection(); ?>