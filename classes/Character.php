<?php
class Character
{
    protected $img;
    protected $gender;
    protected $name;
    protected $health;
    protected $mana;
    protected $energy;
    protected $power;
    protected $speed;
    protected $weapon;
    protected $race;
    protected $role;

    //Getters
    public function getImg(): ?string
    {
        return $this->img;
    }
    public  function getGender(): ?string
    {
        return $this->gender;
    }
    public function getName(): ?string
    // public static function getName(): ?string
    {
        return $this->name;
        // return self::$name;
    }
    public function getHealth(): ?int
    {
        return $this->health;
    }
    public function getMana(): ?int
    {
        return $this->mana;
    }
    public function getEnergy(): ?int
    {
        return $this->energy;
    }
    public function getPower(): ?int
    {
        return $this->power;
    }
    public function getSpeed(): ?string
    {
        return $this->Speed;
    }
    public function getWeapon(): ?string
    {
        return $this->weapon;
    }
    public  function getRace(): ?string
    {
        return $this->race;
    }
    public  function getRole(): ?string
    {
        return $this->role;
    }
    public static function getAllCharacters()
    {
        $c = new Connexion;
        $result =  $c->request('
        select characters.id, characters.img, characters.name, characters.gender, characters.health, characters.mana, characters.energy, characters.power, characters.speed, characters.weapon, 
        races.name as race, 
        roles.name as role
        from characters 
        left join races on characters.race_id = races.id 
        left join roles on characters.role_id = roles.id');
        // var_dump($result);die;
        return $result;
    }
    public static function getAllRaces()
    {
        $c = new Connexion;
        $result =  $c->request('select * from races');
        return $result;
    }
    public static function getAllRoles()
    {
        $c = new Connexion;
        $result =  $c->request('select * from roles');
        return $result;
    }
    //End getters

    //Setters
    public function setImg($img)
    {
        $this->img = $img;
    }
    public  function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public  function setHealth($health)
    {
        $this->health = $health;
    }
    public  function setMana($mana)
    {
        $this->mana = $mana;
    }
    public  function setEnergy($energy)
    {
        $this->energy = $energy;
    }
    public function setPower($power)
    {
        $this->power = $power;
    }
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }
    public  function setRace($race)
    {
        $this->race = $race;
    }
    public  function setRole($role)
    {
        $this->role = $role;
    }
    //end Setters
    //DELETE
    public static function deleteCharacter($id)
    {
        $c = new Connexion;
        $c->request("DELETE FROM `characters` WHERE ((`id` = $id));");

        // var_dump($result);die;
    }
    //UPDATE
    public static function updateCharacter($id, $name, $img)
    {
        // $array = array(
        //     ':name' => $name,
        //     ':img' => $img,
        // );
        $c = new Connexion;
        $sql = "UPDATE `characters` SET `name` = '$name', `img` = '$img' WHERE `id` = $id";
        // var_dump($sql);die;
        $c->request($sql);
    }
    //construct
    public function __construct($img, $gender, $name, $health, $mana, $energy, $power, $speed, $weapon, $race, $role)
    {
        $this->setImg($img);
        $this->setGender($gender);
        $this->setName($name);
        $this->setHealth($health);
        $this->setMana($mana);
        $this->setEnergy($energy);
        $this->setPower($power);
        $this->setSpeed($speed);
        $this->setWeapon($weapon);
        $this->setRace($race);
        $this->setRace($role);

        $array = array(
            ':img' => $img,
            ':gender' => $gender,
            ':name' => $name,
            ':health' => $health,
            ':mana' => $mana,
            ':energy' => $energy,
            ':power' => $power,
            ':speed' => $speed,
            ':weapon' => $weapon,
            ':race' => $race,
            ':role' => $role
        );

        $c = new Connexion;
        $c->request("INSERT INTO characters (characters.img, characters.gender, characters.name, characters.health, characters.mana, characters.energy, characters.power, characters.speed, characters.weapon, characters.race_id, characters.role_id) VALUES (:img, :gender, :name, :health, :mana, :energy, :power, :speed, :weapon, :race, :role)", $array);
    }

    public function iterateVisible()
    {

        ?> <div class="card shadow-4dp">
            <div class="card-body">
                <h4 class="card-title"><?= $this->name ?></h4>
                <h6 class="card-subtitle mb-2"><?= $this->race ?> - <?= $this->genre ?></h6>
                <p class="card-text">
                    <img class="avatar" src="<?= $this->img ?>" alt=""> <br>
                    Arme : <?= $this->weapon ?> <br>
                    Mana : <?= $this->mana ?> <br>
                    Force : <?= $this->strength ?> </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
<?php
    }
}
