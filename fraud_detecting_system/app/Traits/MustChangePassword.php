<?php

namespace App\Traits;namespace App\Traits;

use Illuminate\Support\Facades\Hash;


trait MustChangePassword
{
    /*
     * Determine if the user must change their password.
     *
     * @return bool
     */
    public function mustChangePassword(): bool
    {
        return !$this->password_changed;
    }

    /*
     * Set the user's new password and mark it as changed.
     *
     * @param string $newPassword
     * @return void
     */
    public function setPasswordAndMarkChanged(string $newPassword): void
    {
        $this->password = Hash::make($newPassword);
        $this->password_changed = true;
        $this->save();
    }
}