<?
namespace App\Http\Controllers\Api\V1\Authentication\Front;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Authentication\ResetPasswordRequest;

class NewPasswordController extends Controller{
    public function setNewPassword(ResetPasswordRequest $request)
    {
        $data   = $request->validated();
        $user   = User::where('email', $data['email'])->first();
        $status = $user->update([
            'password'       => Hash::make($data['password']),
            'remember_token' => Str::random(60),
        ]);
        if ($status) {
            $user->tokens()->delete();
            event(new PasswordReset($user));
            $responseMessage = __('main.password_reset_success');
            return $this->apiResponse([], $responseMessage, 200);
        }
        $responseMessage = __('main.password_reset_failed');
        return $this->apiResponse([], $responseMessage, 500);
    }
}