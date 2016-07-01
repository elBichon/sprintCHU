
<?php
    class Questions
    {
        private $_id,
        $_nomFormulaire,
        $_type,
        $_question;
        
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
        public function nomFormulaire()
        {
            return $this->_nomFormulaire;
        }
        public function type()
        {
            return $this->_type;
        }
        public function question()
        {
            return $this->_question;
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
        public function setNomFormulaire($nom)
        {
            if (is_string($nomFormulaire)
            {
                $this->_nomFormulaire = $nomFormulaire;
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
        public function setQuestion($question)
        {
            if (is_string($question)
            {
            $this->_question = $question;
            }
        }
}

