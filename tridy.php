<?php

Class Behavior
{
    public $health;
    public $stamina;
    public $strength;
    public $wisdom;
    public $inteligence;
    public $charisma;
    public $dexerity;
    public $sex;
    public $age;
    public $name;
    public $surname;

    public function __construct($health, $stamina, $strenght, $wisdom, $inteligence, $charisma, $dexerity, $sex, $age, $race)
    {
        $this->health = $health;
        $this->stamina = $stamina;
        $this->strength = $strenght;
        $this->wisdom = $wisdom;
        $this->inteligence = $inteligence;
        $this->charisma = $charisma;
        $this->dexirity = $dexirity;
        $this->sex = $sex;
        $this->age = $age;
        $this->race = $race;

        $this->name = $this->name();
        $this->surname = $this->surname();
    }
    public function name ()
    {
        $male_names = array("Dench", "Feng", "Gell", "Henk", "Holg", "Imš", "Ket", "Krusk", "Mhurren", "Ront", "Šump", "Tokk");
        $female_names = array("Baggi", "Emen", "Engong", "Jevelda", "Kansif", "Myev", "Nýga", "Ovak", "Owka", "Šauta", "Suta", "Vola", "Volena");
        $children_names = array("Beren", "Deargel", "Folkor", "Garrick", "Nackle", "Murnig", "Nigel", "Raunor", "Scheppen", "Timbers", "Turen");

        if ($this->sex == "male") {
            $random_name_index = array_rand($male_names);
            return $male_names[$random_name_index];
        } else if ($this->sex == "female"){
            $random_name_index = array_rand($female_names);
            return $female_names[$random_name_index];
        }
    }

    public function surname()
    {
        $race_surnames = array("Dench", "Emen", "Folkor", "Ket", "Murnig", "Ovak", "Ront", "Vola", "Timbers", "Šauta");
        $random_surname_index = array_rand($race_surname);
        return $race_surnames[$random_surname_index];
    }
}

Class Race extends Behavior
{
    public $race;
}

$behavior = new Behavior(60, 120, 270, 50, 300, 140, 80, "male", 21, "Půlelf");