<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\SystemSettingsModel;
use App\Models\CountryModel;
use App\Models\UserModel;
use App\Models\ParkingLotModel;
use App\Models\CustomerModel;
use App\Models\VehicleModel;
use App\Models\CustomerVehicleModel;
use App\Models\WorkOrderModel;
use App\Models\ParkingLogModel;
use App\Services\Authorization;
use App\Services\IdentityService;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = ['filesystem'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;
    protected $session;
    protected $SettingsModel;
    protected $CountryModel;
    protected $UserModel;
    protected $ParkingLotModel;
    protected $CustomerModel;
    protected $VehicleModel;
    protected $CustomerVehicleModel;
    protected $WorkOrderModel;
    protected $ParkingLogModel;
    //protected $IdentityService;
    //protected $Authorization;
    protected $data = ['errors' => []];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = service('session');
        $this->session      = service('session');

        $this->CountryModel     = new CountryModel;
        $this->UserModel        = new UserModel;
        $this->ParkingLotModel  = new ParkingLotModel;
        $this->CustomerModel    = new CustomerModel;
        $this->VehicleModel     = new VehicleModel;
        $this->CustomerVehicleModel     = new CustomerVehicleModel;
        $this->WorkOrderModel   = new WorkOrderModel;
        $this->SettingsModel    = new SystemSettingsModel;
        $this->ParkingLogModel  = new ParkingLogModel;

        if($this->session->has('loggedIn'))
        {
            $this->data['logged_in_user']   = $this->UserModel->find($this->session->loggedIn);

            //$this->Authorization    = new Authorization($this->data['logged_in_user']);
        }

        $this->data['SystemSettings']   = $this->SettingsModel->getKeyIndexedObjectData();
    }
}
