# Stajyerin Adı Soyadı [Adınız Soyadınız]
# Staj Yapılan Firma: [Firma Adı]
## Staj Yapılan Bölüm: Yazılım / Ar-Ge
## Staj Tarihleri: [Başlangıç - Bitiş Tarihi]

# Proje Adı ve Kısa Tanım
**ValeMaster — Vale otomasyonu ve turnike yönetimi için geliştirilmiş bir web uygulaması.**
Proje, CodeIgniter 4, MySQL veritabanı ve Tabler UI arayüz kütüphanesi kullanılarak oluşturulmuştur. Amaç, işletmenin turnike sistemleri için mevcut altyapıya ek olarak araç park, vale çağırma, personel yönetimi ve iş emirleri takibini sağlayan bir yönetim paneli sunmaktır.

## Projenin Amaç ve Hedefleri
- Vale hizmet süreçlerini dijitalleştirmek; vale görevlerinin oluşturulması, ataması ve kapatılmasını sağlamak.
- Otoparkların yönetimini kolaylaştırmak: kapasite, doluluk, adres ve koordinat bazlı görüntüleme.
- Park kayıtlarını (giriş/çıkış) ve iş emirlerini tutarlı şekilde saklamak.
- Personel (ör. 'valet' rolü) ve müşteri-araç veritabanı yönetimini sağlamak.
- Yönetici paneli üzerinden sistem ayarlarını (ör. vale_max_distance, fiyatlandırma) yönetilebilir kılmak.

## Kullanılan Teknolojiler ve Araçlar
- **Backend**: PHP 8.x, CodeIgniter 4
- **Frontend**: Tabler UI (public/vendors/tabler), vanilla JS + Tabler bileşenleri, ApexCharts vb.
- **Veritabanı**: MySQL
- **Geliştirme**: Composer, PHPUnit (projede test alt dizinleri mevcut)
- **Diğer**: Kütüphane ve yardımcılar app/Libraries içinde (istatistik, servisler)

## Sistem Mimarisi (Kısa)
- **MVC modeli (CodeIgniter 4)**: Controllers, Models, Entities, Views
- **Temel kontrolörler**: WorkOrders, ParkingLots, ParkingLogs, Staffs, Customers, Vehicles, Settings, Authentication, Home, Install, BaseController.
- **Modeller**: WorkOrderModel, ParkingLotModel, ParkingLogModel, UserModel, VehicleModel, CustomerModel, SystemSettingsModel (BaseModel üzerinden tablo isimleri tanımlanmış).
- **Varlık (entity) sınıfları**: WorkOrder, ParkingLot, ParkingLog, Vehicle, User, Customer, CustomerVehicle, SystemSetting.
- **Görünümler**: Pages içinde Tabler temalı sayfalar (ör. ParkingLots.php, ParkingLogs.php, WorkOrders.php, Staffs.php, Settings.php).

## Ana Modüller ve İşlevler
- **Otopark Yönetimi (ParkingLots)**: Otopark oluşturma, düzenleme, silme; harita koordinatları (latitude/longitude) ile gösterim; kapasite ve doluluk hesaplamaları (`ParkingLotModel::getParkingLotList`).
- **Park Kayıtları (ParkingLogs)**: Giriş ve çıkış işlemleri, hangi iş emrine (work order) bağlı oldukları; retrieve/approve işlemleri.
- **İş Emirleri (WorkOrders)**: Vale tarafından gerçekleştirilen “park” veya “retrieve” tipindeki emirler; oluşturma ve kapama (WorkOrderModel).
- **Personel Yönetimi (Staffs)**: Kullanıcı (personel) ekleme/düzenleme, rol atamaları (ör. valet).
- **Müşteri & Araç Yönetimi (Customers, Vehicles)**: Müşteri ve araç kayıtları, araç-şasi ilişkisi CustomerVehicle.
- **Sistem Ayarları (Settings)**: SystemSetting entity ile ayarlar; örn. vale_max_distance, free_parking_signage, pricing_hourlyRate.
- **İstatistikler (StatsLib + app/Libraries/Stats/*)**: Park doluluk oranları ve temel metrikler (Dashboard üzerinde ApexCharts ile görselleştirme).
- **Veritabanı Yapısı (Özet)** Projede kullanılan başlıca tablolar ve önemli alanlar (entity/model dosyalarından ve modellerin allowedFields/joins’dan çıkartılmıştır):
>- parking_lots: id, name, address, latitude, longitude, type (indoor/outdoor), capacity, area
>- parking_logs: id, work_order_id_enter, work_order_id_retrieve, enter_time, retrieve_time, parking_lot_id, metadata...
>- work_orders: id, user_id, order_type (park/getir), customer_vehicle_id, parking_lot_id, created_at, closed_at
>- users: id, first_name, last_name, profile_picture, user_level (ör. valet), ...
>- vehicles: id, plate, brand, model, ...
>- customers: id, first_name, last_name, ...
>- system_settings: key/name, value, description (ör. vale_max_distance, pricing_hourlyRate, free_parking_signage)
**Not**: BaseModel içinde tablo isimleri kısa anahtarlar şeklinde (parking_lots, parking_logs, work_orders, vs.) tanımlanmış ve modeller bu tablo isimlerini kullanarak join sorguları oluşturuyor.

## Kimlik Verileri ve Güvenlik (IdentityService)
Projede müşterilerin kimlik / pasaport numaraları gibi hassas kimlik bilgileri şifreli olarak saklanmaktadır. Bu amaçla IdentityService.php içinde merkezi bir servis tanımlanmıştır. Servis, CodeIgniter’ın Config\Services::encrypter() servisini kullanır ve iki yardımcı metoda sahiptir:

- `encryptIdentity(string $plain)`: string — düz metin kimlik numarasını alır, encrypter ile şifreler ve sonucu Base64 ile kodlayarak geri döndürür. Bu şekilde veritabanında saklanacak değerler düz okunamaz.
- `decryptIdentity(string $cipher)`: string — veritabanından okunan Base64 kodlu şifreli değeri önce Base64 decode ile açar, sonra encrypter->decrypt ile orijinal düz metni geri çevirir.

> Kullanım ve Saklama
> Hassas kimlik verileri (örn. TC kimlik, pasaport numarası) kayıt sırasında IdentityService::encryptIdentity() ile şifrelenip veritabanındaki uygun alana yazılmalıdır. Okuma durumunda decryptIdentity() ile geri çözülür.
> Servis, uygulamanın merkezi bir noktası olduğundan, şifreleme anahtarları ve algoritma CodeIgniter encrypter konfigürasyonuna bağlıdır; bu nedenle Encryption.php veya .env üzerinden anahtar yönetimi ve rotasyon politikaları uygulanmalıdır.
> Log veya debug amaçlı asla ham kimlik bilgilerinin çıktı olarak yazdırılmaması önerilir. Debug işlemlerinde örneklenmiş veya maskelenmiş veriler kullanılmalıdır.


## Uygulama Akışı (Kullanıcı Senaryoları)
- **Vale Görevi Oluşturma**: Yönetici/müşteri sistemi kullanarak bir iş emri (work order) oluşturur (`WorkOrders::create_order` rotası). Vale bu emri alıp uygulama üzerinden “park” veya “getir” komutunu tamamlar. İş emri kapatıldığında closed_at set edilir.
- **Park Girişi/Kayıt**: Vale aracı otoparka giriş yaptığında ParkingLogs kaydı oluşturulur; çıkışta retrieve_time doldurularak kayıt kapatılır.
- **Otopark Takibi**: `ParkingLotModel::getParkingLotList` ile her otopark için doluluk (total_occupation) hesaplanarak dashboard’ta gösterilir.
- **Personel İşlemleri**: `Staffs::save_user` ile personel ekleme/düzenleme; rol olarak valet seçilebiliyor.

## Önemli Kod ve Mimari Notlar (Repo’dan Alıntılar)
- WorkOrderModel select ve join yapıları ile iş emrinin kullanıcı, otopark, müşteri ve araç bilgilerinin bir arada getirildiğini görebilirsiniz.
- ParkingLotModel doluluk hesabında join ile work_orders ve parking_logs tablolarını ilişkilendiriyor; açık olan park kayıtlarını (retrieve_time IS NULL) sayarak doluluk elde ediliyor.
- Dashboard içinde StatsLib ve ParkingLotStats, WorkOrderStats, ParkingLogStats sınıfları ile özet istatistikler hazırlanıyor.
- Routes (writable debugbar çıktısına göre): `GET /otopark-yonetimi -> ParkingLots::index`, `GET /park-kayitlari -> ParkingLogs::index`, `GET /is-emirleri -> WorkOrders::index`, `POST /is-emri-olustur -> WorkOrders::create_order`, `POST /is-emri-bitir -> WorkOrders::close_order`, `POST /park-teslimat -> ParkingLogs::approve_retrieve`, vb.

## Yapılan Testler ve Doğrulama
- **Manuel fonksiyon testi**: Otopark ekleme/düzenleme/silme, iş emri oluşturma/kapama, giriş/çıkış kayıtlarının doğru bağlanması ve doluluk oranlarının doğru hesaplanması el ile test edildi.
- **Birim test altyapısı var (tests/ dizini)** — proje küçük çaplı birim testleri ve debugbar logları içeriyor. Yerel geliştirme ortamında PHP 8.1+ ve gerekli PHP uzantıları ile çalıştırıldığında testler koşturulabilir.

## Karşılaşılan Problemler ve Çözümler
- **Tip uyuşmazlıkları**: Loglarda görülen örnek hata "TypeError: App\Services\Authorization::__construct(): Argument #1 ($user) must be of type App\Models\UserModel, App\Entities\User given" — sebep: servis/constructor’a yanlış tipte nesne gönderimi. **Çözüm**: servis çağrılarında model örneği veya entity tip dönüşümü yapılmalı; dependency injection veya servis fabrikası düzenlenmeli.
- **Veri tutarlılığı**: Work order ile parking log ilişkileri doğru kurulmazsa doluluk hataları görülebiliyor; join koşullarında retrieve_time IS NULL şeklindeki filtrelere dikkat edildi.
- **Harita ve koordinat düzeni**: Kullanıcı tarafından girilen latitude/longitude değerleri doğrulanmalı; edit formlarında readonly alanlar ve map-edit etkileşimi mevcut.

## İleriye Dönük Geliştirme Listesi
- Mobil uyumlu vale uygulaması (native veya PWA) — vale personeline görev bildirimleri ve GPS tabanlı mesafe/onay.
- Gerçek zamanlı bildirimler (WebSocket veya Pusher) — yeni iş emri, iş emrinin atama/durum değişiklikleri anlık görünür.
- Ücretlendirme ve faturalama modülü — pricing_hourlyRate gibi ayarlar kullanılarak otomatik ücret hesaplama.
- Yetkilendirme sertifikası ve rol tabanlı erişim iyileştirmeleri.
- Otomatik test kapsamı genişletilmesi; CI pipeline (GitHub Actions) eklenmesi.

## Projenin Staj Kapsamındaki Öğrenme Hedefleri ve Kazanımlar
Web uygulama geliştirme (CodeIgniter 4) pratiği.
MVC mimarisi, modeller/entitiler ve SQL join optimizasyonu tecrübesi.
Frontend entegrasyonu (Tabler UI), harita entegrasyonları, veri görselleştirme (ApexCharts).
Gerçek dünya problemlerini çözme: veri modelleme, rollere göre yetkilendirme, hata ayıklama (debugbar, loglar).
Nasıl Çalıştırılır (Kısa Talimat, not olacak şekilde)
Gereksinimler: PHP 8.1+, MySQL, Composer.
Adımlar (özet):
Depoyu kopyalayın.
Composer ile bağımlılıkları yükleyin.
public klasörünü web root’a yönlendirin.
`.env` veya Config üzerinden DB ayarlarını girin; veritabanı migrasyonlarını çalıştırın (varsa).
Tarayıcıda / ile projeyi açın.
**Not**: Proje README ve routes listesi `writable/debugbar/*.json` içinde rota tanımlarını içeriyor; local ortamda php spark serve ile de çalışılabilir (CI4).

**Eklenecek Ekran Görüntüleri (Yer Tutucular)**
- [Dashboard genel ekranı (Doluluk grafiği)]
- [Otopark yönetimi sayfası (Harita + edit modal)]
- [İş emri liste ve detay görünümü]
- Vale görev atama ve kapama ekranı. (Ana ekran görüntülerini Pages içindeki ilgili PHP dosyalarını çalıştırıp tarayıcıdan alabilirsiniz: ParkingLots.php, WorkOrders.php, ParkingLogs.php, Dashboard.php.)

## Kaynakça / Dosya Referansları (Projedeki önemli dosyalar)
**Controllers**: WorkOrders.php, ParkingLots.php, ParkingLogs.php, Staffs.php, Settings.php, Customers.php, Vehicles.php
**Models**: WorkOrderModel.php, ParkingLotModel.php, ParkingLogModel.php
**Entities**: WorkOrder.php, ParkingLot.php, ParkingLog.php, SystemSetting.php
**Views**: app/Views/Pages/* (özellikle ParkingLots.php, ParkingLogs.php, WorkOrders.php, Dashboard.php)
**Libraries**: StatsLib.php, app/Libraries/Stats/*

## Kapanış / Özet
Bu proje, turnike sistemleriyle entegre olabilecek bir vale otomasyon taslağı sunar; CodeIgniter 4’ün MVC yapısını kullanarak otopark, iş emri, personel ve park kayıtlarını yönetir. Staj süresince elde edilen kazanımlar arasında web uygulama geliştirme pratiği, veri modelleme ve gerçek dünya senaryoları için çözüm üretme yer almıştır.
