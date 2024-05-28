<?php

namespace App\Services;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Hash;


/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function paginate(){
        $users = $this->userRepository->pagination(['id', 'email', 'phone', 'address', 'name', 'publish']);

        return $users;
    }

    public function create($request){
        DB::beginTransaction();
        try{
            $payLoad = $request->except(['_token','send', 're_password']);
            $carbonDate = Carbon::createFromFormat('Y-m-d', $payLoad['birthday']);
            $payLoad['birthday'] = $carbonDate->format('Y-m-d H:i:s');
            $payLoad['password'] = Hash::make( $payLoad['password']);

            $user = $this->userRepository->create($payLoad);

            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    public function update($id, $request){
        DB::beginTransaction();
        try{

            $payLoad = $request->except(['_token','send' ]);
            $payLoad['birthday'] = $this->convertBirthdayDate($payLoad['birthday']);
            $user = $this->userRepository->update($id, $payLoad);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try{
            $user = $this->userRepository->delete($id);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            // Log::error($e->getMessage());
            echo $e->getMessage(); die();
            return false;
        }
    }

    private function convertBirthdayDate($birthday = ''){
        $carbonDate = Carbon::createFromFormat('Y-m-d', $birthday);
        $birthday = $carbonDate->format('Y-m-d H:i:s');
        return $birthday;
    }


}
