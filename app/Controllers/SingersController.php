<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\SingersModel;


use CodeIgniter\API\ResponseTrait;
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
class SingersController extends Controller
{


    use ResponseTrait;

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
     * @var array
     */
    protected $helpers = [];


    public function __construct()
    {
        $this->SingersModel = new SingersModel();
    }



    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {

        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function Get()
    {   
        $data = $this->SingersModel->find();
        return $this->respond($data, 200);
    }



    public function Store()
    {   
        $img = $this->request->getFile('photo');
        $img->move(ROOTPATH. 'public/img/uploads');

        $data          = $this->request->getPost();
        $data["photo"] = $img->getName();

        $this->SingersModel->insert($data);
        return $this->respond($data, 200);
    }


     public function Update()
    {       
        $file = $this->validate([
            'photo' => [
                'uploaded[photo]'
            ]
        ]);

        $data = $this->request->getPost();
        if ($file) {
            $img = $this->request->getFile('photo');
            $img->move(ROOTPATH. 'public/img/uploads');
            $data["photo"] = $img->getName();
        }
       
        $id = $this->request->getPost("id_singer");
        $this->SingersModel->update($id, $data);
    
        return $this->respond($data, 200);
    }



    public function Delete($id){
        $this->SingersModel->where('id', $id)->delete();
        return $this->respond($id, 200);
    }






   



}
