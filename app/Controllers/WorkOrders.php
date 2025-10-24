<?php

namespace App\Controllers;

class WorkOrders extends BaseController
{
    public function index()
    {
        if(! in_array($this->data['logged_in_user']->user_level, ['admin','receptionist'])) return redirect('page_dashboard');

        $this->data['orders']       = $this->data['logged_in_user']->user_level == 'valet' ? $this->WorkOrderModel->getOrderList($this->data['logged_in_user']->id,'pending') : $this->WorkOrderModel->getOrderList(0,'pending');
        $this->data['countries']    = $this->CountryModel->findAll();
        $this->data['parking_lots'] = $this->ParkingLotModel->getParkingLotList();
        $this->data['users']        = $this->UserModel->orderBy('user_level','DESC')->orderBy('first_name','ASC')->findAll();
        return view('Pages/WorkOrders',$this->data);
    }

    public function create_order()
    {
        $order_data['order_type']       = $this->request->getPost('order_type');
        $order_data['user_id']          = $this->request->getPost('user_id');
        $order_data['parking_lot_id']   = $this->request->getPost('parking_lot_id');

        if($order_data['order_type'] == 'park'){
            $IdentityService    = new \App\Services\IdentityService();
            $new_customer       = false;
            $new_vehicle        = false;
    
            $customer_id    = intval($this->request->getPost('customer_id'));
            
            $customer_data['first_name']           = $this->request->getPost('first_name');
            $customer_data['last_name']            = $this->request->getPost('last_name');
            $customer_data['phone_number']         = $this->request->getPost('phone_number');
            $customer_data['email_address']        = $this->request->getPost('email_address');
    
            if($customer_id == 0){
                $customer       = new \App\Entities\Customer();
                $customer_data['nationality']          = $this->request->getPost('nationality');
                $customer_data['identity_number_type'] = $this->request->getPost('identity_type');
                $customer_data['identity_number_hash'] = $this->request->getPost('identity_number_hash');
                $customer_data['identity_number_hash']   = $IdentityService->encryptIdentity( strtoupper($customer_data['identity_number_hash']) );
    
                $customer->fill($customer_data);
                $customer_id = $this->CustomerModel->insert($customer);
            }else{
                $customer       = $this->CustomerModel->find($customer_id);
                $same_data    = (($customer->phone_number == $customer_data['phone_number']) && ($customer->email_address == $customer_data['email_address'])); // İletişim Bilgileri aynı mı?
                if(!$same_data){
                    $customer->phone_number     = $customer_data['phone_number'];
                    $customer->email_address    = $customer_data['email_address'];
                    $this->CustomerModel->save($customer);
                }
            }
    
            $vehicle_id     = intval($this->request->getPost('vehicle_id'));
    
            $vehicle_data['vin']            = $this->request->getPost('vin');
            $vehicle_data['plate']          = $this->request->getPost('plate');
            $vehicle_data['country_code']   = $this->request->getPost('country_code');
            $vehicle_data['brand']          = $this->request->getPost('brand');
            $vehicle_data['model']          = $this->request->getPost('model');
            
            if($vehicle_id == 0){
                $vehicle    = new \App\Entities\Vehicle();
                $vehicle->fill($vehicle_data);
                $vehicle_id = $this->VehicleModel->insert($vehicle);
            }else{
                $vehicle = $this->VehicleModel->find($vehicle_id);
                $same_data = ($vehicle->plate == $vehicle_data['plate']); // Plaka aynı mı?
                if(!$same_data){
                    // Araç (şasi numarası) aynı ama plaka değişmiş. Burada vehicle_snapshot tablosu lazım ama şimdilik mevcut plaka bilgisini güncellemekle geçiştirelim.
                    // TODO: araç geçmiş kaydının doğruluğu açısından vehicle_snapshot tablosu oluştur ve diğer tüm vehicles ve customer_vehicles kullanımlarını güncelle
                    $vehicle->fill($vehicle);
                    $this->VehicleModel->save($vehicle);
                }
            }
            $customer_vehicle = $this->CustomerVehicleModel->where(['customer_id' => $customer_id, 'vehicle_id' => $vehicle_id])->first();
            if(is_null($customer_vehicle)){
                $data = ['customer_id' => $customer_id, 'vehicle_id' => $vehicle_id];
                $customer_vehicle    = new \App\Entities\CustomerVehicle();
                $customer_vehicle->fill($data);
                $customer_vehicle_id = $this->CustomerVehicleModel->insert($customer_vehicle);
            }else{
                $customer_vehicle_id = $this->CustomerVehicleModel->where(['customer_id' => $customer_id, 'vehicle_id' => $vehicle_id])->first()->id;
            }
            $order_data['customer_vehicle_id']   = $customer_vehicle_id;
        }else{
            $order_data['customer_vehicle_id'] = $this->request->getPost('customer_vehicle_id');
        }
        $order  = new \App\Entities\WorkOrder();
        $order->fill($order_data);
        $work_order_id = $this->WorkOrderModel->insert($order);

        if(in_array($this->data['logged_in_user']->user_level, ['admin','receptionist'])){
            return redirect('page_parking-logs');
        }else{
            return redirect('page_work-orders');
        }
    }

    public function close_order()
    {
        $id = $this->request->getPost('work_order_id');
        $order = $this->WorkOrderModel->find($id);
        if(is_null($order->closed_at))
        {
            $order->closed_at = date("Y-m-d H:i:s");
            $this->WorkOrderModel->save($order);

            if($order->order_type == 'park')
            {
                $this->ParkingLogModel->insert(['work_order_id_enter' => $id]);
            }else{
                $customer_vehicle_id = $order->customer_vehicle_id;
                $order_enter_id = $this->WorkOrderModel->where(['customer_vehicle_id' => $customer_vehicle_id, 'order_type' => 'park'])->orderBy('id','DESC')->first()->id;
                $parking_log = $this->ParkingLogModel->where('work_order_id_enter', $order_enter_id)->first();
                $parking_log->work_order_id_exit = $id;
                $this->ParkingLogModel->save($parking_log);
            }
        }
        return redirect('page_work-orders');
    }
}