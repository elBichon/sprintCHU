
<?php
    class Questions
    {
        private $_id,
        $_nom,
        $_type,
        $_texte
        
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
        public function type()
        {
            return $this->_type;
        }
        public function texte()
        {
            return $this->_texte;
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
        public function setType($type)
        {
            $type = (int) $type;
            if ($id >= 0)
            {
            $this->_type = $type;
            }
        }
        public function setTexte($texte)
        {
            if (is_string($texte)
            {
            $this->_texte = $texte;
            }
        }
}
?>
