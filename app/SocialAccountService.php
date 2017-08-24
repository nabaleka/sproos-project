<?php

namespace App;

use Laravel\Socialite\Contracts\Provider;

class SocialAccountService
{
    public function createOrGetUser(Provider $provider)
    {
        $providerUser = $provider->user();
        $providerName = class_basename($provider);
        $account = SocialAccount::whereProvider($providerName)->whereProviderUserId( $providerUser->getId() )->first();

        if($account)
        {
            return $account->user;
        }
        else{
            $account = new SocialAccount([
                'provider_user_id'=> $providerUser->getId(),
                'provider'=>$providerName,
            ]);
            
            $user = User::whereEmail($providerUser->getEmail())->first();

            if(!$user){

                /* Redirect with user details and create a password */
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    /* Assigns a random password since the password field cannot be left empty */
                    'password' => bcrypt(str_random()),
                ]);
            }
        }

        $account->user()->associate($user);
        $account->save();

        return $user;
    }
}