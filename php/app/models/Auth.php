<?Php

namespace App\models;

use PDO;

class Auth
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function isAuthor($user): bool
    {
        if ($user->role == "admin") {
            return true;
        }
        return false;
    }


    public function auth($login, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login=?");
        $stmt->execute([$login]);
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user->password)) {

                return $user;
            }
        }

        return false;
    }


    public function check_in($login, $password, $avatar, $role)
    {
        if ($this->auth($login, $password)) {
            return -1;
        }
        $stmt = $this->pdo->prepare("INSERT into users (login,password,avatar,role)
		                            values(:login,:password,:avatar,:role)");
        $stmt->execute([
            'login' => $login,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'avatar' => $avatar,
            'role' => $role
        ]);

        return $this->pdo->lastInsertId();
    }


    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
	
	public function getAllUsers(){
		$stmt = $this->pdo->query("SELECT * FROM users ");
        
        return $stmt->fetchAll();
	}

    public function UpdateUser($id, $login, $avatarName)
    {
        $stmt = $this->pdo->prepare("UPDATE users 
   SET login=:login, avatar=:avatar
   WHERE id=:id");

        $stmt->execute([
            "id" => $id,
            "login" => $login,
            "avatar" => $avatarName,
        ]);
    }
}