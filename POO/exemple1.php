<?php
    /*
    $firstname = 'Dany';
    $age = 33;
    $lastname = 'Siriphol';

    $user = [ 'Dany' , 33 , 'Siriphol' ];

    $user = [
        'firstname' => 'Dany',
        'age' => 33,
        'lastname' => 'Siriphol'
    ];

    $user2 = ....
    */

    //==================

    // Visibilité : 

    /*
        public : Partout
        protected : Classe + enfant
        private : Accessible seulement dans la classe
    */

    // Securité

    // classe : nouveau type personalisé

    class User
    {
        // variable dans une classe : proprietés / attributs
        public $firstname ;
        public $lastname ;
        private $age ;
        protected $poids = 60;

        public $cocktail;

        // constructeur : fonction qui est appelé lors du 'new'
        public function __construct( $firstname, $lastname, $age )
        {
            // propriete firstname
            // $this instance courante
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;

        }

        // fonctions d'une classe : methodes

        protected function vieillir()
        {
            $this->age ++;

            if( $this->cocktail != null )
            {
                $this->grossirAvecParametre( $this->cocktail->getAlcohol() );
                $this->cocktail = null;
            }

            $this->grossir();
        }

        public function grossirAvecParametre( $poids )
        {
            $this->poids += $poids;
        }

        public function grossir()
        {
            $this->poids ++;
        }

        // getter : lire une propriete qui est private

        public function getAge()
        {
            return $this->age;
        }

        // setter : modifier une propriete private

        public function setAge( $age )
        {
            if( $age <= 0 )
            {
                echo 'degage';
            }
            else
            {
                $this->age = $age;
            }
        }

    }

    class Cocktail
    {
        public $name;
        public $price;
        public $description;

        public function __construct($name, $price, $description)
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
        }

        public function getAlcohol()
        {
            return 0.5;
        }
    }

    // Heritage
    // User est la classe parent de Student
    // Student est la classe enfant de User

    class Student extends User
    {
        public $school;
        public $intelligence = 10;

        public function setSchool( $school )
        {
            $this->school = $school;
        }

        public function study()
        {
            $this->vieillir();
            $this->intelligence ++;
        }
    }

    class Worker extends User
    {
        public $money = 0;

        public function work()
        {
            $this->vieillir();
            $this->money += 100;
        }
    }

    class Teacher extends Worker
    {
        public $school;

        public function teach()
        {
            $this->work(); // methode de la classe Worker
            $this->vieillir(); // methode de la classe User
        }
    }

    // cree un objet user avec toutes les proprietés definies dans la classe User
    /*
        {
            'firstname' : 'Dany',
        }

        user.firstname
    */

    // $user : Un objet de la classe User
    // $user : Une instance de la classe User
    // new User(...) : Creer une instance de la classe User 
    // new User(...) : Une instantiation

    $c = new Cocktail('Mojito' , 5, 'djqsdjda oajzdpoajzdpoaz');
    $user = new Teacher('Dany' , 'Siriphol' , 33); 
    $user->cocktail = $c;
    $user->teach();

    $user2 = new User('Rodica' , 'R' , 30);
    $user2->cocktail = $c;
    //echo $user2->age;
    //$user2->age = -5;
    echo $user2->getAge();
    $user2->setAge(35);

    

    $student = new Student('Aissiou' , 'A' , 23);
    $student->study();



    

    $worker = new Worker('Lea' , 'B' , 26 );
    $worker->work();

    var_dump($worker);



    //$user2->vieillir();

    var_dump($user);
    var_dump($student);

    // chaque instance conserve ses propres données

    // exemple de POO avec PDO

    /*
        $pdo = new PDO(...,..,..)

        $pdo->query
        $pdo->prepare
    */

?>