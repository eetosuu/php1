<?php 
require_once 'UserModel.php';
class UserProvider
{
    private array $accounts = [
        'geekbrains' => 'password123',
    ];
    public function getByEmailAndPassword(string $email, string $password): ?UserModel
   {
       $expectedPassword = $this->accounts[$email] ?? null;
       if ($expectedPassword === $password) {
           return new UserModel($email);
       };

       return null;
   }
}
