
<?php
    class Patient
    {
        private $_id,
        $_nom,
        $_prenom,
        $_numero,
        $_date,
        $_sexe,
        $_passage
        
        //construction
        public function __construct(array $donnees)
        {
            $this->hydrate($donnees);
        }
        
        public function hydrate(array $donnees)
        {
            foreach ($donnees as $key => $value)
            {
                $method = 'set'.ucfirst($key);
                
                if (method_exists($this, $method))
                {
                    $this->$method($value);
                }
            }
        }
        
        // GETTERS //
        
        public function id()
        {
            return $this->_id;
        }
        public function nom()
        {
            return $this->_nom;
        }
        public function prenom()
        {
            return $this->_prenom;
        }
        public function numero()
        {
            return $this->_numero;
        }
        public function date()
        {
            return $this->_date;
        }
        public function sexe()
        {
            return $this->_sexe;
        }
        public function passage()
        {
            return $this->_passage;
        }
        
        
        //SETTERS
        
        public function setId($id)
        {
            $id = (int) $id;
            if ($id > 0)
            {
                $this->_id = $id;
            }
        }
        public function setNom($nom)
        {
            if (is_string($nom)
            {
                $this->_nom = $nom;
            }
        }
        public function setPrenom($prenom)
        {
            if (is_string($prenom)
                {
                $this->_prenom = $prenom;
                }
        }
        public function setNumero($numero)
        {
            $numero = (int) $numero;
            if ($numero > 0)
                {
                $this->_numero = $numero;
                }
        }
        public function setDate($date)
        {
                $this->_date = $date;
        }
        public function setSexe($sexe)
        {
            if (is_string($sexe)
                {
                $this->_sexe = $sexe;
                }
        }
        public function setPassage($passage)
        {
            if (is_string($passage)
                {
                $this->_passage = $passage;
                }
        }
    }
?>
