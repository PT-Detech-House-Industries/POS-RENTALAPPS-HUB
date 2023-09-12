<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            $role = 'client';

            if($role == 'talent') {
                $data = [
                    'name' => 'Edward',
                    'email' => 'edward@gmail.com',
                    'password' => '12345678',
                    'full_name' => 'Edward Johnson',
                    'phone_number' => '123-456-7890',
                    'profile_picture' => 'profile.jpg',
                    'date_of_birth' => '1990-05-15',
                    'gender' => 'Male',
                    'address' => '123 Main Street, City, Country',
                    'about_me' => 'I am a software developer with a passion for coding.',
                    'lifestyle' => 'Vegetarian, Yoga Enthusiast',
                    'occupation' => 'Software Developer',
                    'education' => 'Bachelor of Computer Science',
                    'social_links' => [
                        'facebook' => 'https://www.facebook.com/edward.johnson',
                        'twitter' => 'https://twitter.com/edwarddev',
                        'instagram' => 'https://www.instagram.com/edward.dev/',
                    ],
                    'privacy_settings' => [
                        'profile_visibility' => 'Public',
                        'email_notifications' => 'On',
                    ],
                    'account_settings' => [
                        'change_password' => 'Yes',
                    ],
                    'friends_list' => [
                        'Alice', 'Bob', 'Charlie',
                    ],
                    'activity_history' => [
                        'Posted a new blog', 'Liked a photo', 'Commented on a post',
                    ],
                    'security_settings' => [
                        'two_factor_authentication' => 'On',
                    ],
                    'language_preference' => 'English',
                    'join_date' => '2022-01-10',
                    'location' => 'New York, USA',
                    'notes' => 'Meeting scheduled for next week.',
                ];
            } else if ($role == 'client') {
                return dd('client bisa');
            } else {
                return dd('tidak bisa');
            }

            // respon
            return response()->json([
                'status' => 200,
                'status_message' => 'success',
                'text_message' => 'Data berhasil didapat',
                'data' => $data,
            ], 200);
            

        } catch (Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            $role = 'admin';

            // Validasi data input (sesuaikan aturan validasi sesuai kebutuhan)
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                // 'password' => 'required|min:8',
                // 'full_name' => 'required|string|max:255',
                // 'phone_number' => 'nullable|string|max:15',
                // 'profile_picture' => 'nullable|string',
                // 'date_of_birth' => 'nullable|date',
                // 'gender' => 'nullable|in:Male,Female,Other',
                // 'address' => 'nullable|string',
                // 'about_me' => 'nullable|string',
                // 'lifestyle' => 'nullable|string',
                // 'occupation' => 'nullable|string',
                // 'education' => 'nullable|string',
                // 'social_links.facebook' => 'nullable|url',
                // 'social_links.twitter' => 'nullable|url',
                // 'social_links.instagram' => 'nullable|url',
                // 'privacy_settings.profile_visibility' => 'nullable|in:Public,Private',
                // 'privacy_settings.email_notifications' => 'nullable|boolean',
                // 'account_settings.change_password' => 'nullable|boolean',
                // 'friends_list' => 'nullable|array',
                // 'activity_history' => 'nullable|array',
                // 'security_settings.two_factor_authentication' => 'nullable|boolean',
                // 'language_preference' => 'nullable|string|max:255',
                // 'join_date' => 'nullable|date',
                // 'location' => 'nullable|string',
                // 'notes' => 'nullable|string',
            ]);

            if ($role == 'admin') {
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    // 'password' => bcrypt($request->input('password')),
                    // 'full_name' => $request->input('full_name'),
                    // 'phone_number' => $request->input('phone_number'),
                    // 'profile_picture' => $request->input('profile_picture'),
                    // 'date_of_birth' => $request->input('date_of_birth'),
                    // 'gender' => $request->input('gender'),
                    // 'address' => $request->input('address'),
                    // 'about_me' => $request->input('about_me'),
                    // 'lifestyle' => $request->input('lifestyle'),
                    // 'occupation' => $request->input('occupation'),
                    // 'education' => $request->input('education'),
                    // 'social_links' => $request->input('social_links'),
                    // 'privacy_settings' => $request->input('privacy_settings'),
                    // 'account_settings' => $request->input('account_settings'),
                    // 'friends_list' => $request->input('friends_list'),
                    // 'activity_history' => $request->input('activity_history'),
                    // 'security_settings' => $request->input('security_settings'),
                    // 'language_preference' => $request->input('language_preference'),
                    // 'join_date' => $request->input('join_date'),
                    // 'location' => $request->input('location'),
                    // 'notes' => $request->input('notes'),
                ];
            } else {
                return 'tidak ada';
            }
    
            return response()->json([
                'status' => 200,
                'status_message' => 'success',
                'text_message' => 'Profil berhasil diperbarui',
                'products' => $data,
            ], 200);

        } catch (Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // coming soon
    }
}
