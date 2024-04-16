<?php

namespace App\Http\Controllers\Api\V1\Authentication\Front;

use App\Http\Traits\Api\ApiResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Resources\Front\Course\CourseResource;
use App\Http\Requests\Authentication\RegisterRequest;
use App\Http\Services\Front\Authentication\StudentLoginService;
use App\Http\Services\Front\Authentication\StudentRegisterService;

class AuthController
{
    use ApiResponse;
    public function register(RegisterRequest $registerRequest)
    {
        return app(StudentRegisterService::class)->registerStudent($registerRequest->validated());
    }

    public function login(LoginRequest $loginRequest)
    {
        return app(StudentLoginService::class)->login($loginRequest->validated());
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return $this->apiResponse([], __("main.loggedout"), 200);
    }

    protected function getUserData($user)
    {
        $user->load(['courses',]);
        return [
            'token'       => $user->createToken("token", ['*'], now()->addHours(12))->plainTextToken,
            'username'    => $user->name,
            'img'         => $user->user_image,
            'is_verified' => $user->is_email_verified,
        ];
    }

    protected function enrolledCoursesData($user)
    {
        return $user->activeEnrolledCourses()
            ->get()
            ->map(function ($course) {
                return [
                    'slug'     => $course->slug,
                    'title'    => $course->title,
                    'type'     => $course->type,
                    'reviewed' => $course->isUserReviewed(),
                ];
            })
            ->toArray();
    }

    protected function userWishListData($user)
    {
        $courses = $user->wishList()
            ->get();
        return CourseResource::collection($courses);
    }
    public function getUserCoursesData()
    {
        $user = auth()->user();
        $data = [
            'is_verified'  => $user->is_email_verified,
            'user_courses' => $this->enrolledCoursesData($user),
            'wish_list'    => $this->userWishListData($user),
        ];
        return $this->apiResponseShow($data);
    }
}
